<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Posts;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function index()
    {
        $loadAll = Category::query()->with(['parent', 'children', 'postCate'])->whereNull('parent_id')->get();
        $viewsHighest  = Post::orderBy('views', 'desc')->take(1)->get();
        $topPosts = Post::orderBy('views', 'desc')->take(5)->get();
        $newPosts = Post::orderBy('created_at', 'desc')->take(5)->get();
        $gocNhin = Category::where('id', 10)->with(['postCate', 'children'])->first();
        $theThao = Category::where('id', 6)->with(['postCate', 'children'])->first();
        $loadPost = Post::with('category')->paginate(15);



        return view(
            'client.trangchu',
            compact(
                'loadAll',
                'viewsHighest',
                'topPosts',
                'newPosts',
                'gocNhin',
                'theThao',
                'loadPost',

            )
        );
    }
    public function trangdm(Category $category)
    {
        $loadAll = Category::query()->with(['parent', 'children'])->whereNull('parent_id')->get();
        $dateCate = Category::where('id', $category->id)->with(['parent', 'children', 'postCate', 'post'])->first();
        $topPosts = Post::orderBy('views', 'desc')->take(5)->get();
        //
        if ($dateCate->children()->first() == null) {
            $loadCate = $dateCate->parent()->first()->with('children')->find($dateCate->parent->id);
        } else {
            $loadCate = $dateCate->with('children')->find($category->id);
        }

        if ($dateCate->post()->first() == null) {
            $post = $dateCate->postCate()->paginate(10);
        } else {
            $post = $dateCate->post()->paginate(10);
        }
        // dd($post);
        return view('client.trangdm', compact(
            'loadAll',
            'loadCate',
            'topPosts',
            'post',
            'category',
        ));
    }
    public function chitiettin(Post $post)
    {
        $loadAll = Category::query()->with(['parent', 'children'])->whereNull('parent_id')->get();
        $loadNd = Post::where('id', $post->id)->with('category')->first();
        $newPosts = Post::orderBy('created_at', 'desc')->take(5)->get();
        $postLq = Post::where([
            ['category_id', '=', $post->category_id],
            ['id', '<>', $post->id]
        ])->get();
        // dd( $post, $post->id);
        return view(
            'client.chitiettin',
            compact(
                'loadAll',
                'loadNd',
                'newPosts',
                'postLq',
            )
        );
    }
    public function search(Request $request)
    {
        $loadAll = Category::query()->with(['parent', 'children'])->whereNull('parent_id')->get();

        //Gắn dữ liệu vào
        $inputKey = $request->old('key', $request->input('key'));
        $inputTime = $request->old('time', $request->input('time'));
        $inputCate = $request->old('category', $request->input('category'));
        // Lấy dữ liệu

        // dd($inputTime, $inputCate);
        $valueKey =  $request->input('key');
        $time =  $request->input('time');
        $loadCate =  $request->input('category');

        if ($time == 'now') {
            $timeOver = Carbon::now();
        } elseif ($time == 'day') {
            $timeOver = Carbon::now()->subDay();
        } elseif ($time == 'week') {
            $timeOver = Carbon::now()->subWeek();
        } elseif ($time == 'month') {
            $timeOver = Carbon::now()->subMonth();
        } elseif ($time == 'oneyear') {
            $timeOver = Carbon::now()->subYear();
        } else {
            $timeOver = [];
        }
        // dd($loadCate);
        $posts  = Post::query()
            ->when($valueKey, function ($query, $valueKey) {
                return $query->where('posts.title', 'like', "%{$valueKey}%")
                    ->where('posts.short_description', 'like', "%{$valueKey}%");
            })
            ->when($timeOver, function ($query, $timeOver) {
                return $query
                    ->whereBetween('posts.created_at', [$timeOver, Carbon::now()]);
            })
            ->when($loadCate, function ($query, $loadCate) {
                $categoryId = Category::where('parent_id', $loadCate)->pluck('id');
                return $query->whereIn('category_id', $categoryId);
            })->latest()
            ->get();

        return view('client.search', compact(
            'loadAll',
            'posts',
            'inputKey',
            'inputTime',
            'inputCate',
            'valueKey',
            'time',
            'loadCate'
        ));
    }





//  ADMIN
    public function home()
    {
        return view('admin.home');
    }

    public function posts()
    {
        return view('admin.posts.index');
    }
}
