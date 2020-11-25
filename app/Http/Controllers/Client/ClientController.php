<?php

namespace App\Http\Controllers\Client;

use App\Models\Category;
use App\Models\Contact;
use App\Models\Post;
use App\Models\Product;
use App\Http\Controllers\Controller;
use App\Models\Partner;
use App\Models\ProductTranslation;
use App\Models\Review;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ClientController extends Controller
{
    public function index()
    {
        $news = Post::where('is_recruitment', 0)->take(3)->latest()->get();

        $recruitments = Post::where('is_recruitment', 1)->take(3)->latest()->get();

        $engine = Category::with(['products' => function($q) {
            $q->where('public', 1)->where('show_home', 1)->take(6)->orderBy('updated_at');
        }])->where('id', 2)->first();

        $chemistry = Category::with(['products' => function($q) {
            $q->where('public', 1)->where('show_home', 1)->take(6)->orderBy('updated_at');
        }])->where('id', 1)->first();

        $sliders = Slider::orderBy('order')->orderBy('id')->get();

        $reviews = Review::all();

        $partners = Partner::all();

        return view('client.client', compact('news', 'chemistry', 'engine', 'sliders', 'reviews', 'partners', 'recruitments'));
    }

    public function news()
    {
        $news = Post::where('is_recruitment', 0)->latest()->paginate(18);

        $recentProducts = Product::take(6)
        ->where('public', 1)
        ->latest()
        ->get();
        $recentNews = Post::where('is_recruitment', 0)->take(3)->latest()->get();
        $recentRecruitments = Post::where('is_recruitment', 1)->take(3)->latest()->get();

        return view('client.news', compact(
                'news',
                'recentProducts',
                'recentNews',
                'recentRecruitments'
            )
        );
    }

    public function recruitment()
    {
        $recruitments = Post::where('is_recruitment', 1)->latest()->paginate(10);

        $recentProducts = Product::take(6)
        ->where('public', 1)
        ->latest()
        ->get();
        $recentNews = Post::where('is_recruitment', 0)->take(3)->latest()->get();
        $recentRecruitments = Post::where('is_recruitment', 1)->take(3)->latest()->get();

        return view(
            'client.recruitment',
            compact(
                'recruitments',
                'recentProducts',
                'recentNews',
                'recentRecruitments'
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
        $news = Post::findOrFail($id);

        if ($news->is_recruitment) {
            $recently = Post::where('is_recruitment', 1)->take(6)->latest()->get();
        } else {
            $recently = Post::where('is_recruitment', 0)->take(6)->latest()->get();
        }


        $recentProducts = Product::take(6)
            ->where('public', 1)
            ->latest()
            ->get();
        $recentNews = Post::where('is_recruitment', 0)->take(3)->latest()->get();
        $recentRecruitments = Post::where('is_recruitment', 1)->take(3)->latest()->get();

        return view(
            'client.news-detail',
            compact(
                'news',
                'recently',
                'recentProducts',
                'recentNews',
                'recentRecruitments'
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

        $category = Category::findOrFail($id);
        $products = $category->publicProducts()->orderBy('updated_at')->paginate(24);
        
        $recentProducts = Product::where('public', 1)->take(6)->latest()->get();
        $recentNews = Post::where('is_recruitment', 0)->take(3)->latest()->get();
        $recentRecruitments = Post::where('is_recruitment', 1)->take(3)->latest()->get();

        return view('
            client.category',
            compact(
                'products',
                'category',
                'recentProducts',
                'recentNews',
                'recentRecruitments'
            )
        );
    }

    public function detailProduct($slug)
    {
        $id = last(explode('-', $slug));

        $product = Product::with('categories')->findOrFail($id);

        $productCategoryIds = $product->categories->pluck('id')->toArray();

        $otherProducts = Product::where('id', '!=', $id)
            ->where('public', 1)
            ->inRandomOrder()
            ->whereHas('categories', function($query) use ($productCategoryIds) {
                $query->whereIn('category_id', $productCategoryIds);
            })
            ->take(5)
            ->get();

        $recentProducts = Product::take(6)
            ->where('public', 1)
            ->latest()
            ->get();
        $recentNews = Post::where('is_recruitment', 0)->take(3)->latest()->get();
        $recentRecruitments = Post::where('is_recruitment', 1)->take(3)->latest()->get();

        return view(
            'client.product-detail',
            compact(
                'product',
                'otherProducts',
                'recentProducts',
                'recentNews',
                'recentRecruitments'
            )
        );
    }

    public function sendContact(Request $request)
    {
        Contact::create($request->all());

        return redirect()->back()->with('success', __('home.success'));
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

        $result = Product::where('public', 1)
            ->whereHas('productTranslations', function($q) use ($lan, $keyword) {
                $q->where('locale', $lan)
                    ->where('name', 'like', '%' . $keyword . '%');
            })
            ->with('categories')
            ->paginate(15);

        $recentProducts = Product::take(6)
            ->where('public', 1)
            ->latest()
            ->get();
        $recentNews = Post::where('is_recruitment', 0)->take(3)->latest()->get();
        $recentRecruitments = Post::where('is_recruitment', 1)->take(3)->latest()->get();

        return view('client.search', compact(
                'result',
                'keyword',
                'recentProducts',
                'recentNews',
                'recentRecruitments'
            )
        );
    }
}
