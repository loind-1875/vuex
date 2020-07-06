<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\EditNewsRequest;
use App\Http\Requests\NewsRequest;
use App\Models\Post;
use App\Models\PostTranslation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use DOMDocument;

class PostController extends Controller
{
    public function index()
    {
        $news = Post::paginate(15);

        return view('admin.post.list', compact('news'));
    }

    public function create()
    {
        return view('admin.post.create');
    }

    public function store(NewsRequest $request)
    {
        $data= $request->only(['vi', 'en', 'cn']);
        $titleVi = array_get($request->vi, 'title', null);
        $slug = str_slug($titleVi);

        if ($request->hasFile('images')) {
            $this->saveImage($request);
        }

        if ($request->is_recruitment == null) {
            $request->merge(['is_recruitment' => 0]);
        }

        $post = Post::create([
            'image' => $request->image,
            'slug' => $slug,
            'is_recruitment' => $request->is_recruitment
        ]);

        foreach ($data as $key => $item) {
            $detail = array_get($item, 'detail', null);

            if ($detail) {
                $detail = $this->saveDetailPost($detail);
            }

            PostTranslation::create([
                'title' => array_get($item, 'title', null),
                'detail' => $detail,
                'short_detail' => array_get($item, 'short_detail', null),
                'locale' => $key,
                'post_id' => $post->id
            ]);
        }

        return redirect()->route('posts.index')->with('success', 'Thêm thành công');
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

        foreach ($images as $k => $img) {
            $src = $img->getAttribute('src');

            // if the img source is 'data-url'
            if (preg_match('/data:image/', $src)) {

                // get the mimetype
                preg_match('/data:image\/(?<mime>.*?)\;/', $src, $groups);
                $mimetype = $groups['mime'];

                $data = $img->getAttribute('src');
                list($type, $data) = explode(';', $data);

                list(, $data) = explode(',', $data);

                $data = base64_decode($data);

                $uniq = uniqid();
                $image_name= '/storage/images/' . time() . $uniq . '.' . $mimetype;

                $path = public_path() . $image_name;

                file_put_contents($path, $data);

                $img->removeAttribute('src');

                $img->setAttribute('src', $image_name);
            }

        }

        return $dom->saveHTML();
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $news = Post::with('vi', 'en', 'cn')->find($id);

        if (!$news) {
            abort(Response::HTTP_NOT_FOUND);
        }

        return view('admin.post.edit', compact('news'));
    }

    public function update(EditNewsRequest $request, $id)
    {
        $news = Post::find($id);

        if ($request->is_recruitment == null) {
            $request->merge(['is_recruitment' => 0]);
        }

        if (!$news) {
            abort(Response::HTTP_NOT_FOUND);
        }

        $titleVi = array_get($request->vi, 'title', null);
        $slug = str_slug($titleVi);
        $request->merge(['slug' => $slug]);

        if ($request->hasFile('images')) {
            if (file_exists('storage/images/' . $news->image)) {
                unlink('storage/images/' . $news->image);
            }

            $this->saveImage($request);
        }

        $news->update($request->all());

        $data= $request->only(['vi', 'en', 'cn']);

        foreach ($data as $item) {
            $postTranslation = PostTranslation::find($item['id']);
            $detail = array_get($item, 'detail', null);

            if ($detail) {
                $detail = $this->saveDetailPost($detail);
            }

            $postTranslation->update($item);
        }

        return redirect()->route('posts.index')->with('success', ' Sửa thành công');
    }

    public function destroy($id)
    {
        $news = Post::find($id);

        if (!$news) {
            abort(Response::HTTP_NOT_FOUND);
        }

        if (file_exists('storage/images/' . $news->image)) {
            unlink('storage/images/' . $news->image);
        }

        $news->postTranslations()->delete();

        $news->delete();

        return redirect()->route('posts.index')->with('success', 'Xóa thành công');
    }
}
