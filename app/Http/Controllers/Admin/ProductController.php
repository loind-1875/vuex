<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\EditProductRequest;
use App\Http\Requests\ProductRequest;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductTranslation;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     *
     */
    public function index()
    {
        $products = Product::with('categories')->latest()->get();

        return view('admin.product.list', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();

        return view('admin.product.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     *
     */
    public function store(ProductRequest $request)
    {
        $titleVi = array_get($request->vi, 'name', null);
        $slug = str_slug($titleVi);

        $request->merge(['slug' => $slug]);

        $product = Product::create($request->all());
        $product->categories()->attach($request->category);

        $data = $request->only(['vi', 'cn']);

        foreach ($data as $key => $value) {
            $detail = array_get($value, 'detail', null);

            ProductTranslation::create([
                'name' => $value['name'],
                'detail' => $detail,
                'short_detail' => $value['short_detail'],
                'locale' => $key,
                'product_id' => $product->id,
            ]);
        }

        return redirect()->route('products.index')->with('success', 'Thêm thành công');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return JsonResponse
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     */
    public function edit($id)
    {
        $product = Product::with('vi', 'en', 'cn', 'categories')->find($id);
        $productCategory = $product->categories->pluck('id')->toArray();
        $categories = Category::all();

        if (!$product) {
            abort(Response::HTTP_NOT_FOUND);
        }

        return view('admin.product.edit', compact('product', 'categories', 'productCategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  EditProductRequest  $request
     * @param  int  $id
     */
    public function update(EditProductRequest $request, $id)
    {
        $product = Product::find($id);

        if (!$product) {
            abort(Response::HTTP_NOT_FOUND);
        }

        $titleVi = array_get($request->vi, 'name', null);
        $slug = str_slug($titleVi);
        $request->merge(['slug' => $slug]);

        $product->update($request->all());

        $product->categories()->sync($request->category);

        $data= $request->only(['vi', 'en', 'cn']);

        foreach ($data as $key => $value) {
            $detail = array_get($value, 'detail', null);

            $productTranslation = ProductTranslation::findOrFail($value['id']);
            $productTranslation->update($value);
        }

        return redirect()->route('products.index')->with('success', 'Sửa thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return JsonResponse
     */
    public function destroy($id)
    {
        $product = Product::find($id);

        if (!$product) {
            return response()->json(['message' => 'Product not found']);
        }

        $product->categories()->detach();
        $product->productTranslations()->delete();

        $product->delete();

        return redirect()->route('products.index')->with('success', 'Xóa thành công');
    }
}
