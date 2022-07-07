<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function index()
    {
        return view('dashboard.register.index',[
            'title' => 'Register',
            'active' => 'register',
            'admin' => User::where('level','admin')->get(),
            'user' => User::where('level','user')->get()
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

        return redirect('/dashboard/register')->with('success','Registrasi berhasil, akun telah dibuat !');
    }
    public function destroy($id)
    {
        User::destroy($id);

        return redirect('/dashboard/register')->with('hapus', 'Akun Telah Dihapus!');
    }
}
