<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Post::query()->with(['category', 'user'])->latest('id')->paginate(10);
        return view('admin.posts.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::query()->whereNotNull('parent_id')->pluck('name', 'id')->all();
        $users = User::query()->where('type', '=', 'admin')->pluck('name', 'id')->all();
        return view('admin.posts.create', compact('categories', 'users'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePostRequest $request)
    {
        $data = $request->except('img');
        if ($request->hasFile('img')) {
            $pathFile = Storage::putFile('posts', $request->file('img'));
            $data['img'] = 'storage/' . $pathFile;
        }
        Post::query()->create($data);
        return redirect()->route('admin.posts.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return view('admin.posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        $categories = Category::query()->pluck('name', 'id')->all();
        $users = User::query()->pluck('name', 'id')->all();
        return view('admin.posts.edit', compact('categories', 'users', 'post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePostRequest $request, Post $post)
    {
        $data = $request->except('img');
        if ($request->hasFile('img')) {
            $pathFile = Storage::putFile('posts', $request->file('img'));
            $data['img'] = 'storage/' . $pathFile;
        }

        $currentImg = $post->img;
        $post->update($data);

        if ($request->hasFile('img') && $currentImg && file_exists(public_path($currentImg))) {
            unlink(public_path($currentImg));
        }
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $post->delete();
        if ($post->img && file_exists(public_path($post->img))) {
            unlink(public_path($post->img));
        }
        return redirect()->route('admin.posts.index');
    }
}
