<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use App\Category;
use Illuminate\Http\Request;


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
        return view('admin.dashboard')
                    ->with('post_count',Post::all()->count())
                    ->with('trush_count',Post::onlyTrashed()->get()->count())
                    ->with('user_count',User::all()->count())
                    ->with('category_count',Category::all()->count());
    }
}
