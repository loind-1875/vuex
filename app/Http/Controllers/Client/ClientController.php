<?php

namespace App\Http\Controllers\Client;

use App\Models\Category;
use App\Models\Post;
use App\Models\Product;
use App\Http\Controllers\Controller;
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
        $categories = $this->getCategories();

        $news = Post::where('is_recruitment', 0)->paginate(15);

        return view('client.post', compact('news', 'categories'));
    }

    public function recruitment()
    {
        $categories = $this->getCategories();
        $recruitments = Post::where('is_recruitment', 1)->paginate(15);

        return view('client.recruitment', compact('recruitments', 'categories'));
    }

    public function contact()
    {
        return view('client.contact');
    }

    public function guarantee()
    {

    }

    public function newsDetail($slug)
    {
        $id = last(explode('-', $slug));
        $article = Post::find($id);
        $categories = $this->getCategories();

        if (!$article) {
            abort(Response::HTTP_NOT_FOUND);
        }

        return view('client.post-detail', compact('article', 'categories'));
    }

    public function getCategories()
    {
        $categories = Category::all();

        return $categories;
    }

    public function detailCategory($slug)
    {
        $id = last(explode('-', $slug));

        $category = Category::with('children')->find($id);

        if (!$category) {
            abort(Response::HTTP_NOT_FOUND);
        }

        $products = $category->products()->paginate(2);
        $categories = $this->getCategories();

        return view('client.category', compact('products', 'category', 'categories'));
    }

    public function detailProduct($slug)
    {
        $id = last(explode('-', $slug));

        $product = Product::find($id);

        if (!$product) {
            abort(Response::HTTP_NOT_FOUND);
        }
        $categories = $this->getCategories();

        $engine = Category::find(2);

        $chemistry = Category::find(1);

        $otherProducts = Product::where('id', '!=', $id)->take(4)->get();

        return view(
            'client.product-detail',
            compact('product', 'categories', 'otherProducts', 'chemistry', 'engine')
        );
    }

    public function changeLanguage($language)
    {
        \Session::put('website_language', $language);

        return redirect()->back();
    }
}
