<?php

namespace App\Http\Controllers;

use App\Http\Requests\EditCategoryRequest;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Category::query()->with(['parent', 'children'])->latest('id')->paginate(15);
        // dd($data);
        return view('admin.categories.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $parentCate = Category::query()->whereNull('parent_id')->get();
        return view('admin.categories.create', compact('parentCate'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCategoryRequest $request)
    {
        Category::query()->create($request->validated());
        return redirect()->route('admin.categories.index')->with('success','Thêm mới thành công!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $show = Category::query()->findOrFail($id);
        return view('admin.categories.show', compact('show'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $parentCate = Category::query()->whereNull('parent_id')->get();
        $edit = Category::query()->findOrFail($id);
        // dd($edit);
        return view('admin.categories.edit', compact('edit', 'parentCate'))->with('success','Sửa mới thành công!');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCategoryRequest $request, string $id)
    {
        $edit = Category::query()->findOrFail($id);
        $edit->update($request->validated());
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        $data = Category::query()->findOrFail($id);
        $data->delete();
        return back();
    }
}
