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
        $settings = Setting::with('vi', 'en', 'cn')->get();

        return view('admin.setting.create', compact('settings'));
    }

    public function update(Request $request)
    {
        $data = $request->only([
            'logo',
            'favicon',
            'email',
            'phone',
            'banner1',
            'banner2',
        ]);

        $trans = $request->only([
            'company_name',
            'about',
        ]);

        foreach ($data as $key => $value) {
            $setting = Setting::where('key', $key)->first();

            $setting->update([
                'value' => $value,
            ]);
        }

        foreach ($trans as $key => $tran) {
            $setting = Setting::where('key', $key)->first();

            foreach ($tran as $key2 => $value) {
                $settingTran = SettingTranslation::where('setting_id', $setting->id)
                    ->where('locale', $key2)
                    ->first();

                $settingTran->update([
                    'detail' => $value
                ]);
            }
        }

        return redirect()->back()->with('success', 'Cập nhật thành công');
    }
}
