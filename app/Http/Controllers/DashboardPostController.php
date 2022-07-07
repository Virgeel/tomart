<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
class DashboardPostController extends Controller
{
    //

    public function homeD(){
        return view('dashboard.index');
    }

 
    public function index(){
        if(auth()->user()->level=='owner'){
            return view('dashboard.posts.index',[
                "title" => "All Posts",
                "posts" => Posts::all()
            ]); 
        }
        else{
            return view('dashboard.posts.index',[
                "title" => "All Posts",
                "posts" => Posts::where('user_id',auth()->user()->id)->get(),
            ]); 
        }
        

    }

    public function indexowner(){
        return view('dashboard.posts.index',[
            "title" => "All Posts",
            "posts" => Posts::all(),
        ]);
    }

    

    public function create(){
        return view('dashboard.posts.create');
    }

    public function createdata(){
        return view('dashboard.penjualan.createdata');
    }

   
    

    public function store(Request $request){
        if ($request->foto != null){
            $foto = $request->foto;
        }
        
        else{
            $foto = 'fotoproduk'.$request->title.'.'.$request->image->extension();
            Storage::disk('public')->put($foto,File::get($request->file('image')));
            Storage::move('public/'.$foto,'public/foto_produk/'.$foto);
        }
        
        $validatedData = $request -> validate([
            'title' => 'required|max:255',
            'category_id' => 'required',
            'body' => 'required',
            'image' => ''

        ]);
        
        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['excerpt'] = Str::limit($request->body,50);
        

        Posts::create([
            'title' => $request->title,
            'category_id' => $request->category_id,
            'user_id'=> $validatedData['user_id'],
            'body' => $request->body,
            'excerpt' => $validatedData['excerpt'],
            'image' => $foto
        ]);

        return redirect('/dashboard/posts')->with('success', 'Item Baru Telah Ditambah !');
    }

    public function show(Post $post){

    }

    public function edit($id){
        $post=Posts::where('id',$id)->first();
        return view('dashboard.posts.edit',[
            'post' => $post,

        ]);
    }

    public function update(Request $request){
        
        if (str_contains($request->image,"https")){
            $foto=$request->image;
        }
        else{
            $foto = 'fotoproduk'.$request->title.'.'.$request->image->extension();
            Storage::disk('public')->put($foto,File::get($request->file('image')));
            Storage::move('public/'.$foto,'public/foto_produk/'.$foto);
        }
        $validatedData = $request -> validate([
            'title' => 'required|max:255',
            'category_id' => 'required',
            'body' => 'required',
            'image' => 'required'
        ]);

        $validatedData['excerpt'] = Str::limit($request->body,50);
        Posts::where('id',$request->id)->update([
            'title' => $request->title,
            'category_id' => $request->category_id,
            'body' => $request->body,
            'excerpt' => $validatedData['excerpt'],
            'image' => $foto
        ]);

        return redirect('/dashboard/posts')->with('updated','Item telah diupdate!');

        
    }

    public function destroy($id){

        $var = Posts::where('id',$id)->first();
        $foto = $var->image;
        Storage::delete('/public/foto_produk/'.$foto);
        Posts::destroy($id);

        return redirect('/dashboard/posts')->with('deleted', 'Item Baru Telah Dihapus!');
    }

    
}
