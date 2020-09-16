<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Slider;
use App\Models\SliderTranslation;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = Slider::all();

        return view('admin.slider.list', compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.slider.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->only([
            'image',
            'url',
            'order',
        ]);

        $slider = Slider::create($data);

        $sliders = $request->only([
            'vi',
            'en',
            'cn',
        ]);

        $this->saveSliderTranslation($sliders, $slider);

        return redirect()->route('sliders.index')->with('success', 'Thêm thành công');
    }

    public function saveSliderTranslation($sliders, $slider)
    {
        foreach ($sliders as $key => $value) {
            SliderTranslation::create([
                'slider_id' => $slider->id,
                'locale' => $key,
                'text1' => $value['text1'],
                'text2' => $value['text2'],
                'text3' => $value['text3'],
            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $slider = Slider::with('vi', 'en', 'cn')->findOrFail($id);

        return view('admin.slider.edit', compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $slider = Slider::findOrFail($id);

        $slider->update($request->all());

        $slider->sliderTranslations()->delete();

        $sliders = $request->only([
            'vi',
            'en',
            'cn',
        ]);

        $this->saveSliderTranslation($sliders, $slider);

        return redirect()->route('sliders.index')->with('success', ' Sửa thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $slider = Slider::findOrFail($id);

        $slider->sliderTranslations()->delete();
        $slider->delete();

        return redirect()->route('sliders.index')->with('success', 'Xóa thành công');
    }
}
