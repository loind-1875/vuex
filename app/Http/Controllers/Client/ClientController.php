<?php

namespace App\Http\Controllers\Client;

use App\Models\Category;
use App\Models\Contact;
use App\Models\Post;
use App\Models\Product;
use App\Http\Controllers\Controller;
use App\Models\ProductTranslation;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ClientController extends Controller
{
    public function index()
    {
        $news = Post::where('is_recruitment', 0)->take(3)->latest()->get();

        $engine = Category::with(['products' => function($q) {
            $q->take(6)->latest();
        }])->where('id', 2)->first();

        $chemistry = Category::with(['products' => function($q) {
            $q->take(6)->latest();
        }])->where('id', 1)->first();

        return view('client.client', compact('news', 'chemistry', 'engine'));
    }

    public function news()
    {
        $engine = Category::findOrFail(2);

        $chemistry = Category::findOrFail(1);

        $news = Post::where('is_recruitment', 0)->latest()->paginate(18);

        return view('client.news', compact('news', 'engine', 'chemistry'));
    }

    public function recruitment()
    {
        $categories = $this->getCategories();
        $engine = Category::find(2);
        $chemistry = Category::find(1);
        $recruitments = Post::where('is_recruitment', 1)->latest()->paginate(10);
        $random = Post::where('is_recruitment', 1)->inRandomOrder()->get();

        return view(
            'client.recruitment',
            compact(
                'recruitments',
                'categories',
                'engine',
                'chemistry',
                'random'
            )
        );
    }

    public function contact()
    {
        $engine = Category::findOrFail(2);

        $chemistry = Category::findOrFail(1);

        return view('client.contact', compact('engine', 'chemistry'));
    }

    public function about()
    {
        $engine = Category::findOrFail(2);

        $chemistry = Category::findOrFail(1);

        return view('client.about', compact('engine', 'chemistry'));
    }

    public function newsDetail($slug)
    {
        $id = last(explode('-', $slug));
        $news = Post::find($id);
        $categories = $this->getCategories();

        $engine = Category::find(2);

        $chemistry = Category::find(1);
        $recently = Post::where('is_recruitment', 0)->take(6)->latest()->get();

        if (!$news) {
            abort(Response::HTTP_NOT_FOUND);
        }

        return view(
            'client.news-detail',
            compact(
                'news',
                'categories',
                'engine',
                'chemistry',
                'recently'
            )
        );
    }

    public function getCategories()
    {
        $categories = Category::all();

        return $categories;
    }

    public function detailCategory($slug)
    {
        $id = last(explode('-', $slug));

        $category = Category::find($id);

        if (!$category) {
            abort(Response::HTTP_NOT_FOUND);
        }

        $categories = $this->getCategories();

        $engine = Category::find(2);

        $chemistry = Category::find(1);

        $newProduct = Product::take(3)->latest()->get();

        $products = $category->products()->paginate(24);

        $categories = $this->getCategories();

        return view('
            client.category',
            compact(
                'products',
                'category',
                'categories',
                'engine',
                'chemistry',
                'newProduct'
            )
        );
    }

    public function detailProduct($slug)
    {
        $id = last(explode('-', $slug));

        $product = Product::with('categories')->find($id);

        if (!$product) {
            abort(Response::HTTP_NOT_FOUND);
        }

        $categories = $this->getCategories();

        $engine = Category::find(2);

        $chemistry = Category::find(1);

        $otherProducts = Product::where('id', '!=', $id)->take(4)->get();

        $newProduct = Product::take(3)->latest()->get();

        return view(
            'client.product-detail',
            compact(
                'product',
                'categories',
                'otherProducts',
                'chemistry',
                'engine',
                'newProduct'
            )
        );
    }

    public function sendContact(Request $request)
    {
        Contact::create($request->all());

        return redirect()->back()->with('success', 'Gửi thành công');
    }

    public function changeLanguage($language)
    {
        \Session::put('website_language', $language);

        return redirect()->back();
    }

    public function searchProduct(Request $request)
    {
        $lan = \Session::get('website_language');

        if (empty($lan)) {
            $lan = 'vi';
        }

        $keyword = $request->keyword;

        $result = ProductTranslation::where('name', 'like', '%' . $keyword . '%')
            ->where('locale', $lan)
            ->with('product', 'product.categories')
            ->get();

        $engine = Category::find(2);

        $chemistry = Category::find(1);

        return view('client.search', compact('result', 'engine', 'chemistry', 'keyword'));
    }
}
