@extends('component.app')

@section('content')
<div class="main">
<div class="container">
    <div class="row">
        <h1> Informasi Kampus </h1>
        <h3> {{ $name }} yang kerap disingkat {{ $singkat }} merupakan perguruan tinggi swasta yang berlokasi di {{ $lokasi }} Perguruan tinggi swasta yang satu ini didirikan pada tahun {{$tahun}}. {{ $name }} saat ini memiliki 3 kampus dengan lokasi berbeda.
        </h3>
    </div>
</div>
        <style>
        .main {
        width: 100%;
        background-image: url('images/bginformasi.png');
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

        h3 {
            text-align: justify;
            margin: 5px 0;
            font-size: 25px;
        }


        .navbar-nav .nav-link:hover {
        font-weight: bold;
        }
            </style>
    </div>
</div>
@endsection
