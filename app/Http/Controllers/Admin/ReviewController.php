<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Review;
use App\Models\ReviewTranslation;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reviews = Review::get();

        return view('admin.review.list', compact('reviews'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.review.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $review = Review::create($request->all());
        $reviewTran = $request->only([
            'vi',
            'en',
            'cn',
        ]);

        $this->createReviewTrans($reviewTran, $review);

        return redirect()->route('reviews.index')->with('success', 'Thêm thành công');
    }

    public function createReviewTrans($reviewTran, $review)
    {
        foreach ($reviewTran as $key => $tran) {
            ReviewTranslation::create([
                'review_id' => $review->id,
                'locale' => $key,
                'content' => $tran['content'],
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
        $review = Review::with('vi', 'en', 'cn')->findOrFail($id);

        return view('admin.review.edit', compact('review'));
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
        $review = Review::findOrFail($id);

        $review->update($request->all());
        $review->reviewTranslations()->delete();

        $reviewTran = $request->only(['vi', 'en', 'cn']);

        $this->createReviewTrans($reviewTran, $review);

        return redirect()->route('reviews.index')->with('success', ' Sửa thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $review = Review::findOrFail($id);
        $review->reviewTranslations()->delete();

        $review->delete();

        return redirect()->route('reviews.index')->with('success', 'Xóa thành công');
    }
}
