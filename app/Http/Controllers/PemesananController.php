<?php

namespace App\Http\Controllers;
use App\Models\Penjualan;
use Illuminate\Http\Request;



class PemesananController extends Controller
{
    public function createpesanan(){
        return view('createpesanan');
    }
    public function terimakasih(){
        return view('terimakasih');
    }

    public function store(Request $request)
    {
        $validatedPenjualan = $request -> validate([
            'nomortransaksi' => 'required',
            'tanggal' => 'required',
            'namaPembeli' => 'required',
            'alamat' => 'required',
            'pesanan' => 'required',
            'kuantitas' => 'required'
        
        


        ]);
        Penjualan::create($validatedPenjualan);

        return redirect('/terimakasih');
    

}
}
