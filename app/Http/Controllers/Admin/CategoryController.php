<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\StoreCategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use App\Models\CategoryTranslation;

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
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  StoreCategoryRequest  $request
     */
    public function store(StoreCategoryRequest $request)
    {
        $titleVi = $request->vi['name'];
        $request->merge(['slug' => str_slug($titleVi)]);
        $category = Category::create($request->all());

        $data = $request->only(['vi', 'cn']);

        foreach($data as $key => $item) {
            CategoryTranslation::create([
                'name' => $item['name'],
                'description' => $item['description'],
                'category_id' => $category->id,
                'locale' => $key,
            ]);
        }

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
        $category = Category::with('vi', 'en', 'cn')->find($id);

        if (!$category) {
            abort(Response::HTTP_NOT_FOUND);
        }

        return view('admin.category.edit', compact('category'));
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

        $titleVi = $request->vi['name'];
        $request->merge(['slug' => str_slug($titleVi)]);

        $category->update($request->all());

        $data = $request->only(['vi', 'en', 'cn']);

        foreach ($data as $key => $value) {
            $categoryTranslation = CategoryTranslation::findOrFail($value['id']);
            $categoryTranslation->update($value);
        }

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

        $category->categoryTranslations()->delete();

        $category->delete();

        return redirect()->route('categories.index')->with('success', 'Xóa thành công');
    }
}
