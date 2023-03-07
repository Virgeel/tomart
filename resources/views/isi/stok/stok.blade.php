@extends('layouts.dashboard')

@section('isidb')

<div style="position: absolute;right:5%;left:23.5%; top : 5.5%;">

<div class="parent">

    <div class="profilbar" style="border-radius:15;width:200;height:40;">

        <div class="parent">

            <iconify-icon icon="uiw:date" height="25" style="padding-left:15px;padding-top:5px;"></iconify-icon>
            <div style="padding-left:20px;padding-top:8px;">
                <form action="/dashboard/stok" method="GET">
                <input type=date name=tanggal value="{{request('tanggal')}}" onchange="this.form.submit()">
                </form>
            </div>
            
        </div>
        
    </div>

    
    <div style="padding-left:1000px;">
        <a href="/dashboard/stok/tambah">
        <div class="addbutton" style=>
            <div style="padding-top:10px;font-size:15;">
            Buat Stok
            </div>
        </div>
    </a>
        
    </div>
    
    
    

</div>

@if($stok -> count())
<div style="padding-top:50px" type="hidden">


</div>
    <table style="width:1400px; background-color:white;border-collapse:collapse; text-align:left;">

        <thead>
        <tr style="background-color:#f7f7f7;font-family:Poppins;">
           <th style="text-align: center;">
            #
           </th>
           <th style="padding:10px;">
            Nama Pegawai
           </th>
           <th>
            Tanggal
           </th>
           <th style="text-align:left;">
            Total
           </th> 
           <th style="text-align:left;">
            EDIT
           </th>
           <th style="text-align:left;">
            HAPUS
           </th>
        </tr>
    </thead>
    
    <?php $count = 1; ?>

   
@foreach ($stok -> skip(0) as $stoks)
    
        <tr style="font-family:Poppins;">
            <td style="padding:10px;text-align:center">
                {{$count++}}
            </td>
            <td>
               
                
               <div style="padding-bottom:10px;padding-top:20px;">
                {{$stoks -> namaPegawai}}
         
               
                </div>
            </td>
            <td>
                
                {{$stoks->tanggal ? $stoks->tanggal : "Data Kosong"}}
                
            </td>
            <td>

                
                {{$stoks->total ? $stoks->total : "Data Kosong"}}
                
                
                
            </td>
            <td>
                <a href="/dashboard/stok/{{ $stoks->namaPegawai }}/{{$stoks->tanggal}}/edit"> 
                    <div class="editbutton">
                         EDIT
                    </div>
                </a>
                
            </td>
            <td>

                <div style="padding-top:13px;">
                    <form action="/dashboard/pegawai/{{$stoks->id}}" method="post">
                        @method('delete')
                        @csrf
                    <input type="submit" value="HAPUS"  onclick="return confirm('Pegawai ini akan dihapus')" style="padding-top:3;
                    text-align: center;
                    width: 90;
                    height: 28;
                    border:none;
                    background-color: #E64A3B;
                    border-radius:5px;
                    color:white;
                    font-family: Poppins;
                    font-weight:400;
                    font-size: 15;
                    cursor : pointer;"></form>
                </div>
                
            </td>
        </tr>
      
        @endforeach
       
    </table>


@else

<div style="padding-top:50px;">
    <table style="width:1400px; background-color:white;border-collapse:collapse; text-align:left;">

        <thead>
        <tr style="background-color:#f7f7f7;font-family:Poppins;">
           <th style="text-align: center;">
            #
           </th>
           <th style="padding:10px;">
            Nama Pegawai
           </th>
           <th>
            Tanggal
           </th>
           <th style="text-align:left;">
            Total Pendapatan
           </th>
           <th style="text-align:left;">
            EDIT
           </th>
           <th style="text-align:left;">
            HAPUS
           </th>
        </tr>
    </thead>
    
    
    
    </table>
    <div style="background-color:white;font-family:Poppins;padding:40px;text-align:center;width:1320px;">
        Data tidak ditemukan
    </div>

</div>



@endif
    




@endsection