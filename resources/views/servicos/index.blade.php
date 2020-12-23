@extends('layouts.app')

@section('title', '- Serviços' )

@section('content')

    <div id="servicos">

        <div class="page-title-content">

            <div class="container">
                <h1>Serviços</h1>
                <h5><a href="{{ route('home') }}">Home</a> <span>/</span> Serviços</h5>
            </div>
            
        </div>

        <div class="container">

            <div class="content">

                <div class="row segmentos">

                    <div class="col-xl-6 col-md-6 col-sm-12 order-1 order-sm-0">

                        <div class="title-section">
                            <h2>Atendemos os  mais<br>
                                variados segmentos </h2>
                        </div>

                        <p class="text-muted">
                            • DISPLAY – CHÃO/ BALCÃO/ ESPECIAL<br>
                            • INJETADOS – RACK/ BANDEJA<br>
                            • CROSS MERCHANDISING<br><br>
                            
                            • CASH & CARRY<br>
                            • ILHAS/ CESTOS<br><br>

                            • AMBIENTAÇÃO<br>
                            • CENOGRÁFIA<br>
                            E MUITAS OUTRAS!<br>
                        </p>
                    
    
                    </div>

                    <div class="col-xl-6 col-md-6 col-sm-12 order-0 order-sm-1">

                        <div class="servico-image mx-auto">
                            <img class="img-fluid" src="{{ asset('assets/images/servico-image.png') }}">
                        </div>
    
                    </div>

                    <div class="col-md-12 col-sm-12 order-2 order-sm-2">

                        <div class="title-section text-center">
                            <h2>A necessidade da sua<br>
                                empresa é o nosso trabalho</h2>
                        </div>

                        <div class="row">

                            <div class="col-md-4 segmento">
                                <img src="{{ asset('assets/images/visual-merchandising.png') }}">
                                <h3>Visual Merchandising</h3>
                            </div>

                            <div class="col-md-4 segmento">
                                <img src="{{ asset('assets/images/totem.png') }}">
                                <h3>Totem</h3>
                            </div>

                            <div class="col-md-4 segmento">
                                <img src="{{ asset('assets/images/gondola.png') }}">
                                <h3>Gôndola</h3>
                            </div>

                            <div class="col-md-4 segmento">
                                <img src="{{ asset('assets/images/displays.png') }}">
                                <h3>Display</h3>
                            </div>

                            <div class="col-md-4 segmento">
                                <img src="{{ asset('assets/images/brindes.png') }}">
                                <h3>Brindes</h3>
                            </div>

                            <div class="col-md-4 segmento">
                                <img src="{{ asset('assets/images/ambientacao.png') }}">
                                <h3>Displays de Chão</h3>
                            </div>
               

                        </div>
                    
                    </div>
    
    
    
                </div>

            </div>

        </div>

    </div>

@endsection
