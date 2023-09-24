@extends('component.app')

@section('content')
<div class="main">

<div class="container">
    <div class="row">
        <h1> Profile</h1>

        <h2>Hallo semua, kenalin nama aku {{$name}}, biasa di panggil {{$panggilan}} . Saat ini aku sedang menempuh pendidikan {{$prodi}} di {{$universitas}} </h2>
    </div>
</div>
    <style>
       .main {
        width: 100%;
        background-image: url('images/bgprofil.png');
        background-position: center;
        background-size: cover;
        height: 100vh;
        position: relative;
        display: grid;
        place-items: center;
}

        .container {
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            align-items: flex-end;
        }

        .row {
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            width: 50%;

        }

        h1 {
            text-align: center;
            margin-top: 30px;
            margin-bottom: 30px;
        }

        h2 {
            text-align: justify;
            margin: 5px 0;
            font-size: 25px;
        }


        .navbar-nav .nav-link:hover {
        font-weight: bold;
        }
    </style>

</div>
@endsection
