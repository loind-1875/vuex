<?php

namespace App\Http\Controllers\Client;

use App\Models\Category;
use App\Models\News;
use App\Models\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Cookie;

class ClientController extends Controller
{
    public function index()
    {
        return view('client.client');
    }

    public function news()
    {
        $categories = $this->getCategories();

        $news = News::where('is_recruitment', 0)->paginate(15);

        return view('client.news', compact('news', 'categories'));
    }

    public function recruitment()
    {
        $categories = $this->getCategories();
        $recruitments = News::where('is_recruitment', 1)->paginate(15);

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
        $article = News::find($id);
        $categories = $this->getCategories();

        if (!$article) {
            abort(Response::HTTP_NOT_FOUND);
        }

        return view('client.news-detail', compact('article', 'categories'));
    }

    public function getCategories()
    {
        $categories = Category::where('parent_id', null)->with('children.children')->get();

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
        dd($request->cookie('name'));
        $id = last(explode('-', $slug));

        $product = Product::find($id);

        if (!$product) {
            abort(Response::HTTP_NOT_FOUND);
        }
        $categories = $this->getCategories();

        $otherProducts = Product::where('id', '!=', $id)->take(8)->get();

        $cookie = cookie('products', $id, 10);

        return view(
            'client.product-detail',
            compact('product', 'categories', 'otherProducts')
        )->withCookie($cookie);
    }
}
