<?php

namespace App\Http\Controllers;
use\App\About;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AboutController extends Controller
{
    protected function newAbout()
    {
        return view('about.NewAbout');
    }
    protected function validator($data)
    {
        return Validator::make($data->all(), [
            'title' => ['required'],
            'content' => ['required'],
            'image' => ['required'],
        ]);
    }
    protected function onNewAbout(Request $request)
    {
        $data = [
            'title' => $request['title'],
            'content' => $request['content'],
            'image' => $request['image'],
        ];
        $validator = $this->validator($request);
        if (!$validator->fails()) {
            $data['image'] = HelperController::uploadImage('about',$request->file('image'));
            About::create($data);
            return redirect()->route('About');
        }
        return redirect()->back()->withErrors($validator);
    }
    function list()
    {
        return view('about.MyAbout')->with('datas', About::all());
    }

    function delete($id)
    {
        About::destroy($id);
        return redirect()->back();
    }

    function update($id)
    {
        $data = About::find($id);
        return view('about.UpdateAbout')->with('data', $data);
    }

    function onUpdate(Request $request, $id)
    {
        $about = About::find($id);
        $about->title = $request['title'];
        $about->content = $request['content'];
        if (isset($request['image']) != null) {
            $about->image = HelperController::uploadImage('about', $request->file('image'));
        }
        $about->save();
        return redirect()->route('About');
    }

    function show()
    {
        return view('public.About', ['about' => About::all()]);
    }
}
