<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Article;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {

        $title = 'Articles';
        $articles = Article::all();
        return view('/article/articles', compact('title', 'articles')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $title = 'Articles';
        $categories = Category::all();
        return view('/article/create_articles', compact('title','categories')); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Article $article, Request $request)
    {
        $article->category_id     = $request->category;
        $article->title     = $request->title;
        $article->slug      = $request->slug;
        $article->desc      = $request->desc;
        $article->content   = $request->content;

        // Disini proses mendapatkan judul dan memindahkan letak gambar ke folder image
        $img       = $request->file('image');
        $imgName   = $img->getClientOriginalName();
        $request->file('image')->move(base_path() . "/public/image/", $imgName);

        // Disini proses mendapatkan judul dan memindahkan letak gambar ke folder image
        $thumb      = $request->file('thumb');
        $thumbName  = $thumb->getClientOriginalName();
        $request->file('thumb')->move(base_path() . "/public/image/", $thumbName);

        $article->image = $imgName;
        $article->thumb = $thumbName;
        $article->save();

        return redirect()->to('/admin/articles');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $title = "Detail Article";
        $article = Article::find($id);
        return view('/article/detail_article',compact('title', 'article'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
       $title = 'Edit Article';
       $categories = Category::all();
       $articles = Article::find($id);
       return view('/article/create_articles',compact('title', 'articles', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {

        $article = Article::where('id', $id)->first();
        $article->category_id   = $request['category'];
        $article->title         = $request['title'];
        $article->slug          = $request['slug'];
        $article->desc          = $request['desc'];
        $article->content       = $request['content'];
        
        if($request->file('image') == "")
        {
            $article->image = $article->image;
        } 
        else
        {
            $img       = $request->file('image');
            $imgName   = $img->getClientOriginalName();
            $request->file('image')->move(base_path() . "/public/image/", $imgName);
            $article->image = $imgName;
        }

        if($request->file('thumb') == "")
        {
            $article->thumb = $article->thumb;
        } 
        else
        {
            $thumb       = $request->file('thumb');
            $thumbName   = $thumb->getClientOriginalName();
            $request->file('thumb')->move(base_path() . "/public/image/", $thumbName);
            $article->thumb = $thumbName;
        }

       $article->update();
       return redirect('/admin/articles');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
       Article::find($id)->delete();
       return redirect('/admin/articles');
    }
}
