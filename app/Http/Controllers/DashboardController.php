<?php

namespace App\Http\Controllers;


use App\Models\Produk;
use App\Models\Stok;
use App\Models\Pegawai;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    //

    public function landing(){
        return view('isi/dashboard');
    }

    public function produk(){
        return view('isi/produk/produk');
    }

    public function pegawai(){

        
        $pegawai = Pegawai::latest();

        if(request('search')){
            $pegawai -> where('nama','like','%' . request('search') . '%');
        }

        return view('isi/pegawai/pegawai',[
            "products" => Produk::all(),
            "pegawai" => $pegawai->get()
        ]);
        
    }

    public function stok(Request $request){
        $tanggal = $request->input('tanggal');
        $stok = Stok::query()
                ->when($tanggal, function($query, $tanggal) {
                    return $query->whereDate('tanggal', $tanggal);
                })
                
                ->select('namaPegawai','tanggal',DB::raw('SUM(total) as total'))
                ->with('pegawai')
                ->groupBy('namaPegawai','tanggal')
                ->orderBy('id','asc')
                ->distinct('namaPegawai')
                ->get();
    
        
        $pegawai = Pegawai::all();

        return view('isi/stok/stok',[
            "products" => Produk::all(),
            "pegawai" => Pegawai::all(),
            "stok" => $stok,
        ], );
    }
}
