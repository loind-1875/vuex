<?php

namespace App\Http\Controllers\Client;

use App\Models\Category;
use App\Models\Contact;
use App\Models\Post;
use App\Models\Product;
use App\Http\Controllers\Controller;
use App\Models\ProductTranslation;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ClientController extends Controller
{
    public function index()
    {
        $news = Post::where('is_recruitment', 0)->take(3)->latest()->get();

        $engine = Category::with(['products' => function($q) {
            $q->where('public', 1)->where('show_home', 1)->take(6)->latest();
        }])->where('id', 2)->first();

        $chemistry = Category::with(['products' => function($q) {
            $q->where('public', 1)->where('show_home', 1)->take(6)->latest();
        }])->where('id', 1)->first();

        $sliders = Slider::orderBy('order')->get();

        return view('client.client', compact('news', 'chemistry', 'engine', 'sliders'));
    }

    public function news()
    {
        $news = Post::where('is_recruitment', 0)->latest()->paginate(18);

        return view('client.news', compact('news'));
    }

    public function recruitment()
    {
        $categories = $this->getCategories();
        $recruitments = Post::where('is_recruitment', 1)->latest()->paginate(10);
        $random = Post::where('is_recruitment', 1)->inRandomOrder()->get();

        return view(
            'client.recruitment',
            compact(
                'recruitments',
                'categories',
                'random'
            )
        );
    }

    public function contact()
    {
        return view('client.contact');
    }

    public function about()
    {
        return view('client.about');
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

        $newProduct = Product::where('public', 1)->take(3)->latest()->get();

        $products = $category->publicProducts()->latest()->paginate(24);

        $categories = $this->getCategories();

        return view('
            client.category',
            compact(
                'products',
                'category',
                'categories',
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

        $otherProducts = Product::where('id', '!=', $id)->where('public', 1)->take(4)->get();

        $newProduct = Product::take(3)->where('public', 1)->latest()->get();

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
            ->where('public', 1)
            ->with('product', 'product.categories')
            ->get();

        return view('client.search', compact('result', 'keyword'));
    }
}
