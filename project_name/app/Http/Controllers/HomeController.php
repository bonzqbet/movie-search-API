<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Http;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data = Post::latest()->paginate(5);

        return view('layouts.home',compact('data'))->with('i',(request()->input('page',1)-1)*5);
        // return view('home');
        // return view('layouts.home');

    } 

    public function show(Post $post)
    {

        return view('layouts.edit',compact('post'));
    }
}
