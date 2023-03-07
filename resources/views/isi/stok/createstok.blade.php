@extends('layouts.dashboard')

@section('isidb')

<div class="column">
    <form method="POST" action="/dashboard/stok/create">
        @csrf
        <?php $count = 1; ?>

        

    <div style="font-size:25;font-family:Poppins;font-weight:bold;position: absolute;right:5%;left:20%; top : 5.5%;">
        
        <div class="parent">
    
            <iconify-icon icon="material-symbols:arrow-right-alt-rounded" rotate="180deg" width="50"></iconify-icon>
            <div style="padding-left : 20px;padding-top:8px;">
                Buat Stok
            </div>
            
            </div>
        
    </div>

    <div class="parent">
        <div style="position: absolute;right:5%;left:24%; top : 15%;">
    
            <div class="profilbar" style="border-radius:15;width:200;height:40;">
        
                <div class="parent">
        
                    <iconify-icon icon="uiw:date" height="25" style="padding-left:15px;padding-top:5px;"></iconify-icon>
                    <div style="padding-left:20px;padding-top:8px;">
                       <input type="date" placeholder="01/01/2000" style="font-family:Poppins;border:none;" name="tanggal">
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
                                        
                                            
                                    <option selected> Pilih Pegawai </option>
                                    
                                    
                                        @foreach($pegawai as $employee)

                                        <option value="{{$employee->nama}}">{{$employee->nama}}</option>
                                        @endforeach

                                </select>
                            </div>
                                 


                                    </div>
                               
                            
            
                            <div style="padding-left:700px;">
                                <input type="submit" value="Buat Stok" style="background-color:#B3C279">
                                
                            
                        
                       
                        
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

                            
@foreach ($products -> skip(0) as $produk)

<input type="hidden" name="produk_id[]" value="{{ $produk->id }}">

    
<tr style="font-family:Poppins;">
    <td style="padding:10px;text-align:center">
        {{$count++}}
    </td>
    <td>
        <div class="parent" style="padding-bottom:20px;">
<img src ="{{$produk -> foto}}" width="70px" style="padding-right:20px;padding-top:15px;">
        
       <div style="padding-bottom:10px;padding-top:20px;">
        <input type="hidden" name="nama[]" value="{{$produk->nama}}" style="width:200px;">
        {{$produk->nama}}
    </div>
       
        </div>
    </td>
    <td>
        <input type="hidden" name="kategori[]" value="{{$produk->kategori}}" style="width:200px;">
        {{$produk->kategori}}
    </td>
    <td>
        Rp. {{$produk->harga}}
        <input type="hidden" name="harga[]" value="{{$produk->harga}}" style="width:200px;">
        
    </td>
    <td>
        <input type="text" name="stokAwal[]" style="width:100px;">
    </td>
    <td>
        <input type="text" name="stokAkhir[]" style="width:100px;">
    </td>
    <td>
        <input type="text" name="terjual[]" style="width:100px;">
    </td>
    <td>
        <input type="text" name="total[]" style="width:100px;">
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