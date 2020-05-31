<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\StoreCategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::paginate(15);

        return view('admin.category.list', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();

        return view('admin.category.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  StoreCategoryRequest  $request
     */
    public function store(StoreCategoryRequest $request)
    {
        $request->merge(['slug' => str_slug($request->name)]);
        Category::create($request->all());

        return redirect()->route('categories.index')->with('success', 'Thêm thành công');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
//        $category = Category::find($id);
//
//        if (!$category) {
//            return response()->json(['message' => 'Category not found']);
//        }
//
//        return response()->json($category);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     */
    public function edit($id)
    {
        $category = Category::find($id);
        $categories = Category::where('id', '!=', $id)->get();

        return view('admin.category.edit', compact('category', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     */
    public function update(StoreCategoryRequest $request, $id)
    {
        $category = Category::find($id);

        if (!$category) {
            abort(Response::HTTP_NOT_FOUND);
        }

        $request->merge(['slug' => str_slug($request->name)]);
        $category->update($request->all());

        return redirect()->route('categories.index')->with('success', ' Sửa thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::find($id);

        if (!$category) {
            abort(Response::HTTP_NOT_FOUND);
        }

        $category->delete();

        return redirect()->route('categories.index')->with('success', 'Xóa thành công');
    }
}
