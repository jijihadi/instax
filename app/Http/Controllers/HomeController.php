<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;
use App\Models\User;


use Auth;
use DB;

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
        $data['post'] = Post::orderBy('created_at', 'desc')->get();
        $data['user'] = User::inRandomOrder()->limit(5)->get();
        return view('home', $data);
    }
    
    public function profile()
    {
        $data['user'] = User::where('id', Auth::user()->id)->get()->toarray()[0];
        $data['post'] = Post::where('user_id', Auth::user()->id)->get();
        return view('profile', $data);
    }
    
}
