<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $title = 'Categories';
        $categories = Category::all();
        return view('/category/categories', compact('title', 'categories')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $title = 'Create Category';
        return view('/category/create_category', compact('title')); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
       $category=Request::all();
       Category::create($category);
       return redirect('/admin/category');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {   
       $title = 'Edit Category';
       $category=Category::find($id);
       return view('/category/create_category',compact('title', 'category'));
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
       $categoryUpdate = Request::all();
       $category = Category::find($id);
       $category->update($categoryUpdate);
       return redirect('/admin/category');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
       Category::find($id)->delete();
       return redirect('/admin/category');
    }
}
