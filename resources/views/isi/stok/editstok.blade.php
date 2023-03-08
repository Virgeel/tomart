@extends('layouts.dashboard')

@section('isidb')

<div class="column">
    <form method="POST" action="/dashboard/stok/{{$stok[0]->namaPegawai}}/{{$stok[0]->tanggal}}/edit">
        @csrf



    <div style="font-size:25;font-family:Poppins;font-weight:bold;position: absolute;right:5%;left:20%; top : 5.5%;">
        
        <div class="parent">
    
            <iconify-icon icon="material-symbols:arrow-right-alt-rounded" rotate="180deg" width="50"></iconify-icon>
            <div style="padding-left : 20px;padding-top:8px;">
                Edit Stok
            </div>
            
            </div>
        
    </div>

    <div class="parent">
        <div style="position: absolute;right:5%;left:24%; top : 15%;">
    
            <div class="profilbar" style="border-radius:15;width:200;height:40;">
        
                <div class="parent">
        
                    <iconify-icon icon="uiw:date" height="25" style="padding-left:15px;padding-top:5px;"></iconify-icon>
                    <div style="padding-left:20px;padding-top:8px;">
                        
                       <input type="date" placeholder="01/01/2000" style="font-family:Poppins;border:none;" name="tanggal" value="{{$stok[0]->tanggal}}">
                    </div>

                    
                    
                </div>

            </div>

        </div>

                <div style="position: absolute;right:5%;left:45%; top : 14%">
                    <div class="parent">
                     
                            <div>
                                <select class = "profilbar" type="text" id="namaPegawai" name="namaPegawai" placeholder="Pilih pegawai" style="position:absolute;width:250px;height:43px;padding-top:10px;border:none;" >
                                   
                                    <iconify-icon icon="fluent:people-community-24-filled" height="20" >
                                    </iconify-icon>
                                        
                                            
                                    <option selected> {{$stok[0]->namaPegawai}} </option>
                                    
                                    

                                </select>
                            </div>
                                 


                                    </div>
                               
                            
            
                            <div style="padding-left:700px;">
                                <input type="submit" value="Simpan" style="background-color:#B3C279">
                                
                            
                        
                       
                        
                    </div>
                </div>

                    
                
            
                <div style="position:absolute;top:20%;">
                    <div style="padding-top:50px;">
                        <table style="width:1400px; background-color:white;border:solid 1px black; text-align:left;">
                    
                            <thead>
                            <tr style="background-color:#f7f7f7;font-family:Poppins;">
                               <th style="text-align: center;">
                                #
                               </th>
                               <th style="padding:10px;">
                                Nama Produk
                               </th>
                               <th>
                                Kategori
                               </th>
                               <th>
                                Harga
                               </th>
                               <th>
                                Stok Awal
                               </th>
                               <th>
                                Stok Akhir
                               </th>
                               <th>
                                Terjual
                               </th>
                               <th style="text-align:left;">
                                Total
                               </th>
                              
                            </tr>
                        </thead>

                        <tbody>
<?php $count = 1; ?>

@foreach ($stok as $stoks)


<input type="hidden" name="id[]" value="{{ $stoks->id }}">

    
<tr style="font-family:Poppins;">
    <td style="padding:10px;text-align:center">
        {{$count++}}
    </td>
    <td>
        <div class="parent" style="padding-bottom:20px;">
        
       <div style="padding-bottom:10px;padding-top:20px;">
        <input type="hidden" name="nama[]" value="{{$stoks->nama}}" style="width:200px;">
        {{$stoks->nama}}
    </div>
       
        </div>
    </td>
    <td>
        <input type="hidden" name="kategori[]" value="{{$stoks->kategori}}" style="width:200px;">
        {{$stoks->kategori}}
    </td>
    <td>
        Rp. {{$stoks->harga}}
        <input type="hidden" name="harga[]" value="{{$stoks->harga}}" style="width:200px;">
        
    </td>
    <td>
    
        <input type="number" name="stokAwal[{{$stoks->id}}]" style="width:100px;" value="{{$stoks->stokAwal}}">

        
    </td>
    <td>
        <input type="number" name="stokAkhir[{{$stoks->id}}]" style="width:100px;" value="{{$stoks->stokAkhir}}">
    </td>

    <td>
        <input type="number" name="terjual[{{$stoks->id}}]" style="width:100px;" value="{{$stoks->terjual}}">
    </td>
    <td>
        <input type="number" name="total[{{$stoks->id}}]" style="width:100px;" value="{{$stoks->total}}">
    </td>
</tr>

@endforeach
                        </tbody>
                    
                    </table>
    
                  
    
                    
                </div>
    
    </div>
                </div>
                
           


            


</form>
   
            

            
        
    </div>
    
   
    

</div>

@endsection