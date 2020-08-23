<?php

namespace App\Http\Controllers;

use App\Article;
use App\GuideLine;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    function list()
    {
        return view('artikel.MyArtikel')->with('datas', Article::all());
    }

    function delete($id)
    {
        Article::destroy($id);
        return redirect()->back();
    }

    function update($id)
    {
        $data = Article::find($id);
        return view('artikel.UpdateArtikel')->with('data', $data);
    }

    function onUpdate(Request $request, $id)
    {
        $article = Article::find($id);
        $article->title = $request['title'];
        $article->content = $request['content'];
        if (isset($request['image']) != null) {
            $article->image = HelperController::uploadImage('article', $request->file('image'));
        }
        $article->save();
        return redirect()->route('MyArticle');
    }

    function show($id){
        return view('artikel.Artikel',['article'=> Article::find($id)]);
    }

    function showAll()
    {
        return view('public.Articles', ['datas' => Article::all()]);
    }
}
