@extends('layouts.dashboard')

@section('isidb')




<div style="position: absolute;right:5%;left:23.5%; top : 5.5%;display:flex;">



    <div style="padding-right : 100px;padding-top : 40px;">
        <div class="profilbar" style="border-radius:15;width:300;height:40;">

            <div class="parent">

                <iconify-icon icon="uiw:date" height="25" style="padding-left:15px;padding-top:5px;"></iconify-icon>
                <div style="padding-left:20px;padding-top:8px;">
                    01/01/2023 - 31/01/2023
                </div>
                
            </div>
            
        </div>
    </div>
    <div style="padding-right : 100px;padding-top : 40px;">
        <div class="profilbar" style="border-radius:15;width:200;height:40;">
            <div class="parent">
                <div style="padding-left:15px;padding-top:10px">
                    <iconify-icon icon="fluent:people-community-24-filled" height="20" style=""></iconify-icon>
                </div>
                
                <div style="padding-left:15px;padding-top:10px;font-size:13;">
                    
                    Semua
                </div>

                <div style="padding-top:5px;padding-left:70px;">
                    <iconify-icon icon="material-symbols:keyboard-arrow-down-rounded" height="30" style=""></iconify-icon>

                </div>

            </div>
           
            
        </div>
    </div>
    <div style="padding-right : 100px;padding-top : 40px;">
        <div class="profilbar" style="border-radius:15;width:135;height:40;background-color:#B3C279;color:white;">
            <div style="padding-left:44px;padding-top:8px;">
                Export
            </div>
            
        </div>
    </div>
  
    

    <div class="column" style="padding-left:100px;">

        <div class="profilbar">

                <div style="padding-top:10px;padding-left:60px;font-size:15px;padding-bottom:5px;">
                Halo,
                <br>
                <div style="font-weight:bold;font-size:20">
                @if(auth()->user()->level=='admin')
                    Admin {{auth()-> user()->nameawal}}
                @elseif(auth()->user()->level=='owner')
                    Owner {{auth()-> user()->nameawal}}
                @endif
                    
                </div>
            </div>
        
        </div>
        <div style="padding-top:20px;"> </div>

        <div class="penjualanbox">
            <div style="padding:20px;">
                Penjualan Terbaru

                @include('layouts.penjualanterbaru')
            </div>
            
        </div>

    </div>
    

    
    

</div>
<div style="position:absolute;top:200px;">
    <div class="parent">
        <div style="width:400;height:150;background-color:white;border-radius:15px;">
    
            <div class="parent">
                <div>
                    <div style="font-size:20;font-family:Poppins;font-weight:bold;padding-top : 20px;padding-left:20px;">
                        Jumlah Penjualan
                    </div>
                    <div style="font-family:Poppins;font-weight:bold;font-size:50;padding-left : 30px;padding-top:10px;">
                        {{$stok->count('id')}}
                    </div>
                </div>
                <div style="padding-top:20px;position:absolute;left:160px;">
                    <img src= "{{asset('images/jumlah.png')}}" width="200">
                </div>
        
        
            </div>
           
            
        </div>
        <div style="padding-left:30px;">
            <div style="width:400;height:150;background-color:white;border-radius:15px;">
    
                <div class="parent">
                    <div>
                        <div style="font-size:20;font-family:Poppins;font-weight:bold;padding-top : 20px;padding-left:20px;">
                            Total Penjualan
                        </div>
                        <div style="font-family:Poppins;font-weight:bold;font-size:30;padding-left : 30px;padding-top:20px;">
                           Rp.  {{number_format($stok->sum('total'),0,',','.',)}}
                        </div>
                    </div>
                    <div style="position:absolute;left:650px;">
                        <img src= "{{asset('images/total.png')}}" width="110">
                    </div>
            
            
                </div>
                
            </div>

          
    
        </div>
        
    
    
    
    </div>
    
    <div style="font-family:Poppins;font-weight:bold;padding-top:20px;color:#5A5F49">
        Grafik Penjualan
        
    </div>

    <p>

    <div style="font-family:Poppins;color:#5A5F49;font-size:15px;">
        Berikut adalah rincian grafik dari penjualan kamu

        <div style="padding-top:30px;"></div>
        <div>
            @include('layouts.chartpenjualan')
        </div>
        
    </div>
    

    
    

</div>




@endsection