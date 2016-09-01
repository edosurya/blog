<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use App\User;
use App\Article;

class UsersController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
       
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $title = 'Users';
        $data['content'] = User::get();

        return view('users', compact('data','title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
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
        $title = 'Edit User';
        $user = User::find($id);
        return view('create_user', compact('user','title'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(User $user, Request $request, $id)
    {
        $title = 'Article';
        $articles = '';
        $user = User::find($id);
        $usera = DB::table('users')->select('password')->where('id', $id)->first();
        $password = $request->password;
        $passwordConfirmation = $request->password_confirmation;

        if (!empty($password)) {
            if ($password === $passwordConfirmation) {
                $user -> password = bcrypt($password);
            }
        }
        $user -> save();
        $articles = Article::all();
        return view('/article/articles', compact('title', 'articles')); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        if ($id != 1) {

            User::destroy($id);

            return redirect('admin/user')->with('message', 'User has been deleted');

        } else {
            return redirect('admin/user')->with('alert', 'User can not be removed');

        }
    }
}
