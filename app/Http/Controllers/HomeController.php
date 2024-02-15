<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Comment;

class HomeController extends Controller
{
    public function home()
    {
        return view("index");
    }
    public function about()
    {
        return view("about");

    }
    public function contact()
    {
        return view("contact");

    }
    public function blog_grid()
    {
        return view("blog-grid");
        

    }
    public function blog_sidebar()
    {
        return view("blog-sidebar");

    }
    public function blog_single()
    {
        $comments=Comment::get();
        return view("blog-single" ,compact("comments"));
    }
    public function price()
    {
        return view("pricing");
    }
    public function project()
    {
        return view("project");
    }
    public function service()
    {
        return view("service");
    }
    public function add_comment(Request $request)
    {
        return $request;
        // $comment=new Comment();
        // $comment->user_id=null;
        // $comment->blog_id=1;
        // $comment->comment=$request->comment;
        // $comment->name=$request->name;
        // $comment->email=$request->mail;
        // $comment->save();
        // return 'commented successfully';

    }
}
