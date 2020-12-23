@extends('layouts.app')

@section('title', '- '.$servico->title )

@section('content')

    <div id="servicos">

        <div class="page-title-content">

            <div class="container">
                <h1>{{ $servico->title }}</h1>
                <h5><a href="{{ route('home') }}">Home</a> <span>/</span> <a href="{{ route('home') }}">Servicos</a> <span>/</span> {{ $servico->title }}</h5>
            </div>
            
        </div>

        <div class="container">

            <div class="content">

                <div class="row info">

                    <div class="col-xl-6 col-md-6 col-sm-12 order-1 order-sm-0">

                        <div class="texto">{!! $servico->description !!}</div>
    
                    </div>

                    <div class="col-xl-6 col-md-6 col-sm-12 order-0 order-sm-1">

                        <div class="icon-img mx-auto">
                            <img class="img-fluid" src="{{ asset('storage/' . $servico->image) }}">
                        </div>
    
                    </div>

                    <div class="col-xl-8 col-md-12 col-sm-12 order-2 order-sm-2">

                        <div class="title-section">
                            <h2>Outros<br>
                            serviços</h2>
                        </div>

                        <div class="row outros-servicos">

                            @foreach ($servicos as $servico)

                            <div class="col-sm-4 col-md-4">
                                <a href="{{ route('servicos.info', ['slug' => $servico->slug]) }}" class="item">
                                    <div class="icon">
                                        <img src="{{ asset('storage/' . $servico->image) }}">
                                    </div>
                                    <div class="titulo">
                                        <h4>{{ $servico->title }}</h4>
                                    </div>
                                </a>
                            </div>

                            @endforeach

                        

                        </div>
                    
                    </div>
    
    
    
                </div>

            </div>

        </div>

    </div>

@endsection
