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
        $news = Post::findOrFail($id);

        if ($request->is_recruitment == null) {
            $request->merge(['is_recruitment' => 0]);
        }

        if (!$news) {
            abort(Response::HTTP_NOT_FOUND);
        }

        $titleVi = array_get($request->vi, 'title', null);
        $slug = str_slug($titleVi);
        $request->merge(['slug' => $slug]);

        $news->update($request->all());

        $data= $request->only(['vi', 'en', 'cn']);

        foreach ($data as $item) {
            $postTranslation = PostTranslation::findOrFail($item['id']);
            $detail = array_get($item, 'detail', null);

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

        $news->postTranslations()->delete();

        $news->delete();

        return redirect()->route('posts.index')->with('success', 'Xóa thành công');
    }
}
