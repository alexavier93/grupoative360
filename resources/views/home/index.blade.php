@extends('layouts.app')

@section('content')

    <div id="home">

        <!-- Banner Section -->
        <!-- Slider main container -->
        <div class="swiper-container swiper-banner">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">

                <!-- Slides -->
                @foreach ($banners as $banner)
                    <div class="swiper-slide">
                        <img class="img-fluid" src="{{ asset('assets/images/slide.jpg') }}" alt="">
                    </div>
                @endforeach
            </div>
            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>

        </div>

        <!-- Section About Us  -->
        <section class="about-us py-5">

            <div class="container">

                <div class="row">

                    <div class="col-lg-5 col-md-6">

                        <div class="about-content">

                            <div class="title-section"><h2>Quem somos</h2></div>

                            <p>Atuamos <b>desde 2013</b> com ampla diversidade de displays promocionais e toda a dedicação para implementar as soluções mais adequadas, em um formato 360º.</p>

                            <p>Somos intensamente dinâmicos e compromissados com o impacto positivo que nossos clientes querem causar em seus consumidores.</p>
                            
                            <a href="" class="btn btn-default btn-mais">Saiba Mais</a>
                        </div>

                    </div>

                    <div class="col-lg-7 col-md-6">
                        <img class="img-fluid" src="{{ asset('assets/images/circle-aboutus.png') }}">
                    </div>

                </div>

            </div>

        </section>

        <!-- Section Serviços -->
        <section class="servicos py-5">

            <div class="container">

                <div class="title-section"><h2>Como ajudamos<br> sua empresa</h2></div>

                <div class="row">

                    <div class="col-sm-6 col-md-4">
                        <div class="servico">
                            <img class="img-fluid w-75" src="{{ asset('assets/images/analise-de-necessidades.png') }}">
                            <h3>Análise de Necessidades</h3>
                            <a href="" class="btn btn-default btn-mais mt-3">Saiba mais</a>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-4">
                        <div class="servico">
                            <img class="img-fluid w-75" src="{{ asset('assets/images/analise-de-necessidades.png') }}">
                            <h3>Design</h3>
                            <a href="" class="btn btn-default btn-mais mt-3">Saiba mais</a>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-4">
                        <div class="servico">
                            <img class="img-fluid w-75" src="{{ asset('assets/images/analise-de-necessidades.png') }}">
                            <h3>Engenharia</h3>
                            <a href="" class="btn btn-default btn-mais mt-3">Saiba mais</a>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-4">
                        <div class="servico">
                            <img class="img-fluid w-75" src="{{ asset('assets/images/analise-de-necessidades.png') }}">
                            <h3>Análise de Necessidades</h3>
                            <a href="" class="btn btn-default btn-mais mt-3">Saiba mais</a>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-4">
                        <div class="servico">
                            <img class="img-fluid w-75" src="{{ asset('assets/images/analise-de-necessidades.png') }}">
                            <h3>Análise de Necessidades</h3>
                            <a href="" class="btn btn-default btn-mais mt-3">Saiba mais</a>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-4">
                        <div class="servico">
                            <img class="img-fluid w-75" src="{{ asset('assets/images/analise-de-necessidades.png') }}">
                            <h3>Análise de Necessidades</h3>
                            <a href="" class="btn btn-default btn-mais mt-3">Saiba mais</a>
                        </div>
                    </div>

                </div>

            </div>

        </section>


        <!-- Section Sustentabilidade -->

        <section class="sustentabilidade py-5">

            <div class="container">

                <div class="row">

                    <div class="col-lg-7 col-md-6">
                        <img class="img-fluid w-75" src="{{ asset('assets/images/sustentabilidade.png') }}">
                    </div>

                    <div class="col-lg-5 col-md-6">

                        <div class="about-content">

                            <div class="title-section"><h2>Foco em<br>Sustentabilidade</h2></div>

                            <p>Geramos produtos e serviços de alto valor agregado para a cadeia de negócio, aliando a redução de Custo com o Mkt no PDV.</p>

                            <p>Buscamos melhores alternativas para minimizar todo e qualquer tipo de impacto ao Meio Ambiente.</p>

                            <p><b>Nosso foco é sempre impactar positivamente o consumidor com nossas soluções.</b></p>
                        </div>

                    </div>

                    

                </div>

            </div>

        </section>



    </div>


@endsection
