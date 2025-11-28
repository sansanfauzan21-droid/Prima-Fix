<?php

namespace App\Http\Controllers\Backend\Utilities;

use App\Helpers\StoreFileHelper;
use App\Http\Controllers\Controller;
use App\Models\Backend\Utilities\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'Review';
        $reviews = Review::all();

        return view('backend.utilities.review.index', compact('title', 'reviews'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = 'Create Review';

        return view('backend.utilities.review.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rule = [
            'name' => 'required',
            'position' => 'required',
            'message' => 'required',
            'image' => 'nullable|max:2040',
            'status' => 'nullable',
        ];

        $request->validate($rule);

        DB::beginTransaction();
        try {
            $review = new Review;
            $review->name = $request->name;
            $review->position = $request->position;
            $review->message = $request->message;
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $imageName = $request->name . "-" . Str::random(5);
                $storeImage = StoreFileHelper::storeReviewImage($imageName, $image->getClientOriginalExtension());

                $review->image = $image->storeAs($storeImage);
            }
            $review->status = $request->status ? true : false;
            $review->save();

            DB::commit();

            return redirect(route('review.index'))->with('success', 'Success!');
        } catch (\Throwable $th) {
            DB::rollBack();

            return redirect()->back()->with('error', 'Error : ' . $th->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Review $review)
    {
        $title = 'Edit Review';

        return view('backend.utilities.review.edit', compact('title', 'review'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Review $review)
    {
        $rule = [
            'name' => 'required',
            'position' => 'required',
            'message' => 'required',
            'image' => 'nullable|max:2040',
            'status' => 'nullable',
        ];

        $request->validate($rule);

        DB::beginTransaction();
        try {
            $review->name = $request->name;
            $review->position = $request->position;
            $review->message = $request->message;
            if ($request->hasFile('image')) {
                if ($review->image !== null) {
                    Storage::delete($review->image);
                }
                $image = $request->file('image');
                $imageName = $request->name . "-" . Str::random(5);
                $storeImage = StoreFileHelper::storeReviewImage($imageName, $image->getClientOriginalExtension());

                $review->image = $image->storeAs($storeImage);
            }
            $review->status = $request->status ? true : false;
            $review->save();

            DB::commit();

            return redirect(route('review.index'))->with('success', 'Success!');
        } catch (\Throwable $th) {
            DB::rollBack();

            return redirect()->back()->with('error', 'Error : ' . $th->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Review $review)
    {
        if ($review->image !== null) {
            Storage::delete($review->image);
        }

        Review::destroy($review->id);

        return redirect(route('review.index'))->with('success', 'Success!');
    }
}
