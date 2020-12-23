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

                    @foreach ($clientes as $cliente)
                        <div class="col-md-3 text-center my-3">
                            <img class="img-fluid w-75" src="{{ asset('storage/' . $cliente->image) }}" alt="{{ $cliente->title }}" title="{{ $cliente->title }}">
                        </div>
                    @endforeach

                </div>

            </div>

        </div>

    </div>

@endsection
