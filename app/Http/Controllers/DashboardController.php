<?php

namespace App\Http\Controllers;


use App\Models\Produk;
use App\Models\Stok;
use App\Models\Pegawai;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class DashboardController extends Controller
{
    //

    public function landing(Request $request){
        $namaPegawai = $request->input('namaPegawai');

    $tanggal = $request->input('tanggal');

    $startDate = Carbon::parse($tanggal)->startOfMonth();
    $endDate = Carbon::parse($tanggal)->endOfMonth();

    for ($i = 1; $i <= 31; $i++) {
        $date = Carbon::createFromDate($startDate->format('Y'), $startDate->format('m'), $i);
        if ($date->lte($endDate) && $date->gte($startDate)) {
            $tanggals[] = $date->format('d');
        } else {
            $tanggals[] = null;
        }
    }

        // $tanggals = Stok::select('tanggal')
        //     ->whereBetween('tanggal', [$startDate, $endDate])
        //     ->distinct()
        //     ->orderBy('tanggal')
        //     ->get()
        //     ->pluck('tanggal')
        //     ->map(function ($date) {
        //         return Carbon::parse($date)->format('d');
        //     })
        //     ->toArray();

        // $startDate=Carbon::parse($tanggal)->startOfMonth();
        // $endDate = Carbon::parse($tanggal)->endOfMonth();

        // $tanggals = Stok::select('tanggal')->distinct()->orderBy('tanggal')->get()->pluck('tanggal');
        $stok = Stok::query()
    ->where('namaPegawai', $namaPegawai)
    ->whereBetween('tanggal', [$startDate, $endDate])
    ->select('namaPegawai', 'tanggal', DB::raw('SUM(total) as total'))
    ->groupBy('namaPegawai','tanggal')
    ->orderBy('tanggal', 'asc')
    ->get()
    ->map(function($item){
        $item->tanggal = Carbon::parse($item->tanggal)->startOfDay();
        return $item;
    });

    $total = array_fill_keys($tanggals, 0);

    // Loop through the $stok results and update the $total array with the actual totals
    foreach ($stok as $result) {
        $total[$result->tanggal->format('d')] = $result->total;
    }
    
    // Convert the $total array values to an array
    $total = array_values($total);
    

        $penjualan = Stok::query()
        ->when($tanggal, function($query, $tanggal) {
            return $query->whereDate('tanggal', $tanggal);
        })
        
        ->select('namaPegawai','tanggal',DB::raw('SUM(total) as total'))
        ->with('pegawai')
        ->groupBy('namaPegawai','tanggal')
        ->orderBy('tanggal','asc')
        ->distinct('namaPegawai')
        ->get();


        if(request('filterpenjualan')){
            $stok -> where('namaPegawai','like','%' ,'tanggal' . request('filterpegawai') . '%');

        }
        
        return view('isi/dashboard',[
            "products" => Produk::all(),
            "pegawai" => Pegawai::all(),
            "stok" => $stok,
            "tanggal" => $tanggals,
            "penjualan" => $penjualan,
            "date" => $startDate->format('Y-m-d') . ' - ' . $endDate->format('Y-m-d'),
            "total" => $total,
        ]);
    }

    public function penjualanterbaru(){
        return view('layouts.penjualanterbaru');
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
