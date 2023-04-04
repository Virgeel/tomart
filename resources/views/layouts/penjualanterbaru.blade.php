<ul style="list-style:none;">
    
    @foreach($penjualan as $stoks)
    
    
    <li style="">
        <div class="row">
            <div style="padding-top:20px;padding-right:20px;">
                <img src="{{$stoks->pegawai->foto}}" width="50px;" height="50px;" style="border-radius:50%;">
            </div>
            

            <div class="column" style="height:90px;">
                <div>
                    <div class="row">
                        
                        <div>
                            {{$stoks -> pegawai->nama}}
                        </div>
    
                        <div style="font-size:15px; padding-left:10px;font-weight:100">
                            {{$stoks -> tanggal}}
                        </div>
                    </div>
                   
                </div>
                <div style="font-weight:100;">
                    Jumlah : Rp. {{number_format($stoks->total,0,',','.',)}}
                </div>
    
            </div>
        </div>
        
        
    </li>
    @endforeach

    

</ul style="list-style:none;">