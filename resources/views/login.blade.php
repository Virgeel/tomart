@extends('layouts.main')

@section('isi')
    



<link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>

<html>


<title>
    Login Tomart
</title>

<body style="margin: 0;">
    <div class="loginbg">
        <div style="padding-top:300px;padding-left:200px;">
            <img src="{{asset('images/comma.png')}}" width="105" height="74">
            <img src="{{asset('images/comma.png')}}" width="105" height="74">
        <div style="border-radius:10px;background: rgba(255,255,255,0.6);background-size:200px;width : 600px;heigth : 5000px;font-size:32px;padding:40px;font-weight:semi-bold">
            Lakukan apa yang kamu bisa,<br>
gunakan apa yang kamu miliki, <br>
mulailah dari mana kamu berada.
</div>
        </div>
    </div>

<div style="padding-left:1200px;padding-top:200px">
<div style="font-weight:bold;font-size:25px;font-family:'Poppins">
    Selamat Datang

</div>

<div style="font-size:17px;padding-top:10px;font-family:'Poppins">
    Silakan isi data akun yang telah terdaftar <br> sebelumnya

</div>

<div style="font-family:Poppins;padding-top:20px;">
<form action ="/login" method="post">
    @csrf
    <label for="email">
        <i class="fas fa-envelope"></i>
        <b>Email</b>
        </label>

    <br>
    <input type="email" id="email" name="email" placeholder="contoh@gmail.com" autofocus>

    @error('email')
    <div class="invalid-feedback">
        {{$message}}

    </div>
@enderror
    <p>
    
    <label for="password"><b>Password</b></label>

    

    <br>
    <input type="password" id="password" name="password" placeholder="Password">
    @error('password')
    <div class="invalid-feedback">
        {{$message}}
    </div>
@enderror  
    <p>
    <input type="submit" value="Masuk">
</form>   

<div style="font-family:'Poppins'">
Belum mempunyai akun ? 
<a href="/register"> <b> Daftar Sekarang </b> </a>
</div>
</div>

</div>
</body>

</html>
@endsection

