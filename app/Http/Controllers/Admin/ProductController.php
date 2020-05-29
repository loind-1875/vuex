<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use DOMDocument;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as Image;

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
        $categories = Category::whereNull('parent_id')->with('children')->get();

        return view('admin.product.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     *
     */
    public function store(Request $request)
    {
        $dom = new DomDocument();
        $dom->loadHtml( mb_convert_encoding($request->detail, 'HTML-ENTITIES', "UTF-8"), LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);

        $images = $dom->getElementsByTagName('img');

        foreach($images as $img){
            $src = $img->getAttribute('src');

            // if the img source is 'data-url'
            if(preg_match('/data:image/', $src)){

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

        $request->detail = $dom->saveHTML();

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = uniqid();
            $file->move('storage/public/images', $filename);
            $request->image = $filename;
        }
        $request->merge(['slug' => str_slug($request->name)]);

        $product = Product::create($request->all());

        $product->categories()->attach($request->category);

        return redirect()->route('products.index');
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
     * @return JsonResponse
     */
    public function edit($id)
    {
        $product = Product::find($id)->load('categories');
        $productCategory = $product->categories->pluck('id')->toArray();
        $categories = Category::whereNull('parent_id')->with('children')->get();

        if (!$product) {
            abort(Response::HTTP_NOT_FOUND);
        }

        return view('admin.product.edit', compact('product', 'categories', 'productCategory'));
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
