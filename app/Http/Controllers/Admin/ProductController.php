<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\EditProductRequest;
use App\Http\Requests\ProductRequest;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductTranslation;
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
        if ($request->hasFile('images')) {
            $this->saveImage($request);
        }

        $titleVi = array_get($request->vi, 'name', null);
        $slug = str_slug($titleVi);

        $request->merge(['slug' => $slug]);

        $product = Product::create($request->all());
        $product->categories()->attach($request->category);

        $data = $request->only(['vi', 'cn']);

        foreach ($data as $key => $value) {
            $detail = array_get($value, 'detail', null);

            if ($detail) {
                $detail = $this->saveDetailPost($value['detail']);
            }

            ProductTranslation::create([
                'name' => $value['name'],
                'detail' => $detail,
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


        if ($request->hasFile('images')) {
            $this->saveImage($request);
        }

        $titleVi = array_get($request->vi, 'name', null);
        $slug = str_slug($titleVi);
        $request->merge(['slug' => $slug]);

        $product->update($request->all());

        $product->categories()->sync($request->category);

        $data= $request->only(['vi', 'en', 'cn']);

        foreach ($data as $key => $value) {
            $detail = array_get($value, 'detail', null);

            if ($detail) {
                $detail = $this->saveDetailPost($detail);
            }

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

        $product->delete();

        return redirect()->route('products.index')->with('success', 'Xóa thành công');
    }

    public function saveDetailPost($detail)
    {
        $dom = new DomDocument();
        @$dom->loadHtml(mb_convert_encoding($detail, 'HTML-ENTITIES', "UTF-8"), LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);

        $images = $dom->getElementsByTagName('img');

        foreach ($images as $k => $img) {
            $src = $img->getAttribute('src');

            // if the img source is 'data-url'
            if (preg_match('/data:image/', $src)) {

                // get the mimetype
                preg_match('/data:image\/(?<mime>.*?)\;/', $src, $groups);
                $mimetype = $groups['mime'];

                $data = $img->getAttribute('src');
                list($type, $data) = explode(';', $data);

                list(, $data) = explode(',', $data);

                $data = base64_decode($data);

                $uniq = uniqid();
                $image_name= '/storage/images/' . time() . $uniq . '.' . $mimetype;

                $path = public_path() . $image_name;

                file_put_contents($path, $data);

                $img->removeAttribute('src');

                $img->setAttribute('src', $image_name);
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
