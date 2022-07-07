<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posts;

class PostController extends Controller
{
    public function call()
    {
        return view('landing',[
            "Slogan" => "Belanja Cepat Harga Hemat",
            "ContactUs" => "Contact Us at 0812-4995-4526",
            
        ]);
    }


    public function kenalan()
    {
        return view('home',[
            "Perkenalan" => "Selamat datang di Tomart, selamat berbelanja !"
        ]);
    }
    public function yaya()
    {
        return view('tes',[
            "posts" => Posts::all()
        ]);
    }
    public function show($id)
    {
        return view ('single',[
            "title" => Posts::find($id) -> title,
            "body" => Posts::find($id) -> body,
            "excerpt" => Posts::find($id) -> excerpt,
            "image" => Posts::find($id) -> image

        ]
        );
    }
    public function index(){
        return view('posts',[
            "title" => "All Posts",
            "posts" => Posts::latest()->get()

        ]);
    }
    
    //
}
