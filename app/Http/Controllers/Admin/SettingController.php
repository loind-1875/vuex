<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Setting;
use App\Models\SettingTranslation;

class SettingController extends Controller
{
    public function index()
    {
        return view('admin.setting.create');
    }

    public function update(Request $request)
    {
        $data = $request->only([
            'logo',
            'favicon',
            'email',
            'phone'
        ]);

        $trans = $request->only([
            'company_name',
            'about',
        ]);

        foreach ($data as $key => $value) {
            dd(Setting::update([
                'key' => $key,
                'value' => $value,
            ]));
        }

        foreach ($trans as $key => $tran) {
            $setting = Setting::update([
                'key' => $key,
            ]);

            foreach ($tran as $key2 => $value) {
                SettingTranslation::update([
                    'setting_id' => $setting->id,
                    'locale' => $key2,
                    'value' => $value
                ]);
            }
        }
        dd($data);
    }
}
