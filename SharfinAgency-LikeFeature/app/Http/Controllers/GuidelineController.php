<?php

namespace App\Http\Controllers;
use App\GuideLine;
use Illuminate\Http\Request;

class GuidelineController extends Controller
{
    function list()
    {
        return view('guideline.MyGuideLine')->with('datas', GuideLine::all());
    }

    function delete($id)
    {
        GuideLine::destroy($id);
        return redirect()->back();
    }

    function update($id)
    {
        $data = GuideLine::find($id);
        return view('guideline.UpdateGuideLine')->with('data', $data);
    }

    function onUpdate(Request $request, $id)
    {
        $guideline = GuideLine::find($id);
        $guideline->title = $request['title'];
        $guideline->content = $request['content'];
        if (isset($request['image']) != null) {
            $guideline->image = HelperController::uploadImage('guideline', $request->file('image'));
        }
        $guideline->save();
        return redirect()->route('Guidelines');
    }
    function show($id){
        return view('guideline.GuideLine',['guideline'=> GuideLine::find($id)]);
    }

    function showAll()
    {
        return view('public.Guidelines', ['datas' => GuideLine::all()]);
    }
}
