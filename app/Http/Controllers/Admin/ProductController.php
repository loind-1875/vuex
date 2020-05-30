<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\EditProductRequest;
use App\Http\Requests\ProductRequest;
use App\Models\Category;
use App\Models\Product;
use DOMDocument;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;

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
     *
     */
    public function index()
    {
        $products = Product::paginate(15);

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
        if ($request->detail) {
            $request->detail = $this->saveDetailPost($request->detail);
        }

        if ($request->hasFile('images')) {
            $this->saveImage($request);
        }

        $request->merge(['slug' => str_slug($request->name)]);

        $product = Product::create($request->all());

        $product->categories()->attach($request->category);

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
//        $product = Product::with('categories')->find($id);
//
//        if (!$product) {
//            return response()->json(['message' => 'Product not found']);
//        }
//
//        return response()->json($product);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     */
    public function edit($id)
    {
        $product = Product::find($id)->load('categories');
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

        if ($request->detail) {
            $request->detail = $this->saveDetailPost($request->detail);
        }

        if ($request->hasFile('images')) {
            $this->saveImage($request);
        }

        $request->merge(['slug' => str_slug($request->name)]);

        $product->update($request->all());

        $product->categories()->sync($request->category);

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

        $product->delete();

        return redirect()->route('products.index')->with('success', 'Xóa thành công');
    }

    public function saveDetailPost($detail)
    {
        $dom = new DomDocument();
        @$dom->loadHtml(mb_convert_encoding($detail, 'HTML-ENTITIES', "UTF-8"), LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);

        $images = $dom->getElementsByTagName('img');

        foreach ($images as $img) {
            $src = $img->getAttribute('src');

            // if the img source is 'data-url'
            if (preg_match('/data:image/', $src)) {

                // get the mimetype
                preg_match('/data:image\/(?<mime>.*?)\;/', $src, $groups);
                $mimetype = $groups['mime'];

                // Generating a random filename
                $filename = uniqid();
                $filepath = "public/images/$filename.$mimetype";

                Storage::put($filepath, file_get_contents($src));

                $new_src = asset($filepath);
                $img->removeAttribute('src');
                $img->setAttribute('src', $new_src);
            }
        }

        return $dom->saveHTML();
    }

    public function saveImage($request)
    {
        $file = $request->file('images');
        $filename = uniqid() . '_' . preg_replace('/\s+/', '', $file->getClientOriginalName());
        $request->image = $filename;
        $file->move('storage/images', $filename);
        $request->merge(['image' => $filename]);
    }
}
