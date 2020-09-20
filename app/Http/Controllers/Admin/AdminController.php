<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SettingRequest;
use App\Models\Category;
use App\Models\Post;
use App\Models\Product;
use App\Rules\MatchOldPassword;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index()
    {
        $countProduct = Product::count();
        $countCate = Category::count();
        $countNews = Post::where('is_recruitment', 0)->count();
        $countRec = Post::where('is_recruitment', 1)->count();
        
        return view('admin.admin', compact(
            'countProduct',
            'countCate',
            'countNews',
            'countRec'
        ));
    }

    public function settings()
    {
        return view('admin.setting');
    }

    public function updateSettings(SettingRequest $request)
    {
        $user = Auth::user();
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->new_password),
        ]);

        return redirect()->back()->with(['success' => 'Thay đổi thành công!']);
    }
}
