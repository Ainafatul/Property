<?php

namespace App\Http\Controllers;
use App\Exports\ExportEmail;
use App\NewsLetterSubscriber;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Maatwebsite\Excel\Facades\Excel;

class NewsLetterSubscriberController extends Controller
{
    function validator($data)
    {
        return Validator::make($data->all(), [
            'email' => ['required', 'string', 'email', 'max:255', 'unique:news_letter_subscribers'],
        ]);
    }

    function onSubscribeNewsletter(Request $request)
    {
        $data = [
            'email' => $request['email'],];
        $validator = $this->validator($request);
        if (!$validator->fails()) {
            NewsLetterSubscriber::create($data);
            return redirect()->back();
        }
        return redirect()->back()->withErrors($validator);
    }

    function SubEmail(NewsLetterSubscriber $datas)
    {
        $datas = NewsLetterSubscriber::all();
        return view('admin.NewsLetterSubscriber')->with('datas', $datas);
    }

    function ExportExcel(){
        return Excel::download(new ExportEmail, 'Email.xlsx');
    }
}

