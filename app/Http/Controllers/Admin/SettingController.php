<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SettingController extends Controller
{
    public function index()
    {
        return view('admin.setting.create');
    }

    public function update(Request $request)
    {
        dd($request->all());
    }
}
