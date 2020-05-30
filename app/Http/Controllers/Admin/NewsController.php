<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\EditNewsRequest;
use App\Http\Requests\NewsRequest;
use App\Models\News;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use DOMDocument;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::paginate(15);

        return view('admin.news.list', compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.news.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NewsRequest $request)
    {
        if ($request->detail) {
            $request->detail = $this->saveDetailPost($request->detail);
        }

        if ($request->hasFile('images')) {
            $this->saveImage($request);
        }

        $request->merge(['slug' => str_slug($request->title)]);

        News::create($request->all());

        return redirect()->route('news.index')->with('success', 'Thêm thành công');
    }

    public function saveImage($request)
    {
        $file = $request->file('images');
        $filename = uniqid() . '_' . preg_replace('/\s+/', '', $file->getClientOriginalName());
        $request->image = $filename;
        $file->move('storage/images', $filename);
        $request->merge(['image' => $filename]);
    }

    public function saveDetailPost($detail)
    {
        $dom = new DomDocument();
        @$dom->loadHtml(mb_convert_encoding($detail, 'HTML-ENTITIES', "UTF-8"), LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);

        $images = $dom->getElementsByTagName('img');

        foreach ($images as $img) {
            $src = $img->getAttribute('src');

            // if the img source is 'data-url'
            if (preg_match('/data:image/', $src)) {

                // get the mimetype
                preg_match('/data:image\/(?<mime>.*?)\;/', $src, $groups);
                $mimetype = $groups['mime'];

                // Generating a random filename
                $filename = uniqid();
                $filepath = "public/images/$filename.$mimetype";

                Storage::put($filepath, file_get_contents($src));

                $new_src = asset($filepath);
                $img->removeAttribute('src');
                $img->setAttribute('src', $new_src);
            }
        }

        return $dom->saveHTML();
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
        $news = News::find($id);

        if (!$news) {
            abort(Response::HTTP_NOT_FOUND);
        }

        return view('admin.news.edit', compact('news'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EditNewsRequest $request, $id)
    {
        $news = News::find($id);

        if (!$news) {
            abort(Response::HTTP_NOT_FOUND);
        }

        if ($request->detail) {
            $request->detail = $this->saveDetailPost($request->detail);
        }

        if ($request->hasFile('images')) {
            $this->saveImage($request);
        }

        $request->merge(['slug' => str_slug($request->title)]);

        $news->update($request->all());

        return redirect()->route('news.index')->with('success', ' Sửa thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $news = News::find($id);

        if (!$news) {
            abort(Response::HTTP_NOT_FOUND);
        }

        $news->delete();

        return redirect()->route('news.index')->with('success', 'Xóa thành công');
    }
}
