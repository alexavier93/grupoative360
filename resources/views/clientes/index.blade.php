@extends('layouts.app')

@section('title', '- Clientes')

@section('content')

    <div id="contato">

        <div class="page-title-content bg-orange">

            <div class="container">
                <h1>Clientes</h1>
                <h5><a href="{{ route('home') }}">Home</a> <span>/</span> Clientes</h5>
            </div>
            
        </div>

        <div class="container">

            <div class="content">

                <div class="row">

                    <div class="col-md-3 text-center my-3">
                        <img class="img-fluid w-75" src="{{ asset('assets/images/clientes/3m.png') }}">
                    </div>

                    <div class="col-md-3 text-center my-3">
                        <img class="img-fluid w-75" src="{{ asset('assets/images/clientes/colgate.png') }}">
                    </div>

                    <div class="col-md-3 text-center my-3">
                        <img class="img-fluid w-75" src="{{ asset('assets/images/clientes/samsung.png') }}">
                    </div>

                    <div class="col-md-3 text-center my-3">
                        <img class="img-fluid w-75" src="{{ asset('assets/images/clientes/tbmake.png') }}">
                    </div>

                    <div class="col-md-3 text-center my-3">
                        <img class="img-fluid w-75" src="{{ asset('assets/images/clientes/3m.png') }}">
                    </div>

                    <div class="col-md-3 text-center my-3">
                        <img class="img-fluid w-75" src="{{ asset('assets/images/clientes/colgate.png') }}">
                    </div>

                    <div class="col-md-3 text-center my-3">
                        <img class="img-fluid w-75" src="{{ asset('assets/images/clientes/samsung.png') }}">
                    </div>

                    <div class="col-md-3 text-center my-3">
                        <img class="img-fluid w-75" src="{{ asset('assets/images/clientes/tbmake.png') }}">
                    </div>





                </div>

            </div>

        </div>

    </div>

@endsection
