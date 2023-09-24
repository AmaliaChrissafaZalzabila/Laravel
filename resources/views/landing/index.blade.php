@extends('component.app')

@section('content')
<div class="main">

<div class="container">
    <div class="row">
    <h3>Hello</h3>
    <h3>I'm {{$name}}</h3>
    </div>
</div>
    <style>
        .main {
        width: 100%;
        background-image: url('images/bghome.png');
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
            justify-content: center;
            align-items: flex-end; /* Mengatur posisi elemen ke sisi kanan */
        }

        .row {
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            text-align: center;
            padding: 100px;
            width: 60%;
        }

        h3 {
            text-align: justify;
            margin: 5px 0;
            font-size: 40px;
        }

    </style>
</div>
@endsection
