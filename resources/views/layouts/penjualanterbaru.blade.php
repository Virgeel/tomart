<ul style="list-style:none;">
    
    @foreach($penjualan as $stoks)
    <li style="">

        <div class="column" style="height:90px;">
            <div>
                <div class="row">
                    
                    <div>
                        {{$stoks -> namaPegawai}}
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
        
    </li>
    @endforeach

</ul style="list-style:none;">