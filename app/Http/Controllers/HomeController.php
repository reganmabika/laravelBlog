<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\BlogPost;
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

        $user = Auth::user();

        //dd($user->role);
        if($user->role=='admin'){
            // Populate all the Blog posts
            //$posts = BlogPost::all();
            $posts = BlogPost::with('user')->get();
            //return $posts;
          //  dd($posts);
            return view('admin.index', [
                'posts' => BlogPost::with('user')->get(),
                'id'=> Auth::id()
            ]); //returns the view with posts

        }else if ($user->role == 'user'){
            $posts = BlogPost::with('user')->get();
            //return $posts;
            //  dd($posts);
            return view('user.index', [
                'posts' => BlogPost::with('user')->get(),
                'id'=> Auth::id()
            ]); //returns the view with posts
        }




    }
}
