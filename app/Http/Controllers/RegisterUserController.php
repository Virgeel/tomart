<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterUserController extends Controller
{
    public function index()
    {
        return view('registerUser.index',[
            'title' => 'Register',
            'active' => 'register'
        ]);
    }

    public function store(Request $request)
    {
        
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'level' => 'required',
            'password' => 'required|min:4|max:255'

        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);
        
        User::create($validatedData);

        // $request->session()->flash('success','Registrasi berhasil, harap Login !');

        return redirect('/loginuser')->with('success','Registrasi berhasil, akun telah dibuat !');
    }
    public function destroy($id)
    {
    }
}
