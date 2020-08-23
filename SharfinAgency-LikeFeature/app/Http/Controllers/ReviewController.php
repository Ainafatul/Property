<?php

namespace App\Http\Controllers;

use App\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ReviewController extends Controller
{
    function NewReview()
    {
        return view('review.NewReview');
    }
    protected function validator($data)
    {
        return Validator::make($data->all(), [
            'name' => ['required'],
            'job' => ['required'],
            'message' => ['required'],
            'image'=>['required'],
        ]);
    }

    function onNewReview(Request $request)
    {
        $data = [
            'name' => $request['name'],
            'job' => $request['job'],
            'message' => $request['message'],
            'image' => $request['image'],
        ];
        $validator = $this->validator($request);
        if (!$validator->fails()) {
            $data['image'] = HelperController::uploadImage('review',$request->file('image'));
            Review::create($data);
            return redirect()->route('MyReview');
        }
        return redirect()->back()->withErrors($validator);
    }

    function list()
    {
        return view('review.MyReview')->with('datas', Review::all());
    }

    function getLanding()
    {
        return view('public.Landing')->with('datas', Review::all());
    }




}
