<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    protected $mediaController;

    public function __construct(
        MediaController $mediaController
    )
    {
        $this->mediaController = $mediaController;
    }

    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function index()
    {
        $products = Product::paginate(10);

        return response()->json($products);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return JsonResponse
     */
    public function store(Request $request)
    {
        $product = Product::create($request->only([
            'name',
            'status',
            'price',
            'old_price',
            'star',
            'detail',
            'color',
        ]));
        $categoryIds = json_decode($request->categories);

        $product->categories()->attach($categoryIds);

        //create image
        $this->mediaController->saveImage($product, $request->image);

        return response()->json(['data' => $product]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return JsonResponse
     */
    public function show($id)
    {
        $product = Product::with('categories')->find($id);

        if (!$product) {
            return response()->json(['message' => 'Product not found']);
        }

        return response()->json($product);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return JsonResponse
     */
    public function edit($id)
    {
        $product = Product::find($id);

        if (!$product) {
            return response()->json(['message' => 'Product not found']);
        }

        return response()->json($product);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return JsonResponse
     */
    public function update(Request $request, $id)
    {
        dd(1, $request->all(), $id);
        $product = Product::find($id);

        if (!$product) {
            return response()->json(['message' => 'Product not found']);
        }
        $categoryIds = array_column($request->categories, 'id');
        $product->update($request->all());
        $product->categories()->sync($categoryIds);

        return response()->json($product);
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

        $product->delete();
        return response()->json(['message' => 'Done']);
    }
}
