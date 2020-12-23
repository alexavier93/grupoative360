<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">
    <title>Grupo Ative 360 @yield('title')</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/5.4.5/css/swiper.min.css" />

    <link href="{{ asset('/assets/css/app.css') }}" rel="stylesheet">


</head>

<body>

    <!-- START NAVBAR SECTION -->
    <!-- Header -->
    <header id="header">

        <div class="header-top">

            <div class="container">

                <div class="content">

                    <div class="row">

                        <div class="col-md-6 col-sm-12 top-left"></div>

                        <div class="col-md-6 col-sm-12 top-right">
                            <ul>
                                <li>
                                    <a>
                                        <i class="fab fa-whatsapp"></i>
                                        <span>+55 (11) 9 9869 0515</span>
                                    </a>
                                </li>
                                <li>
                                    <a>
                                        <i class="fas fa-envelope"></i>
                                        <span>contato@grupoative360.com.br</span>
                                    </a>
                                </li>
                            </ul>

                        </div>

                    </div>

                </div>

            </div>

        </div>


        <div class="header-nav">
            <!-- <div class="header-nav header-nav-pages"> -->

            <div class="container">

                <div class="row">

                    <div class="logo">

                        @if (route('home'))
                            <a href="{{ route('home') }}" class="logo-main">
                                <img src="{{ asset('assets/images/grupo-ative-360.png') }}" alt="">
                            </a>
                        @else
                            <a href="{{ route('home') }}" class="logo-main">
                                <img class="img-fluid" src="{{ asset('assets/images/grupo-ative-360.png') }}" alt="">
                            </a>
                        @endif

                        <a href="{{ route('home') }}" class="logo-fix">
                            <img class="img-fluid" src="{{ asset('assets/images/grupo-ative-360.png') }}" alt="">
                        </a>

                    </div>

                    <div class="menu">

                        <nav class="nav">
                            <ul>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('home') }}">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('quemsomos.index') }}">Quem Somos</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('servicos.index') }}">Serviços</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('clientes.index') }}">Clientes</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('contato.index') }}">Contato</a>
                                </li>
                            </ul>
                        </nav>

                    </div>

                    <a href="javascript:void(0)" class="sidemenu_btn d-lg-none" id="sidemenu_toggle">
                        <span></span>
                        <span></span>
                        <span></span>
                    </a>

                </div>

            </div>

        </div>

        <!--Side Nav-->
        <div class="side-menu hidden">
            <div class="inner-wrapper">
                <span class="btn-close" id="btn_sideNavClose"><i></i><i></i></span>
                <nav class="side-nav w-100">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('home') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('quemsomos.index') }}">Quem Somos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('servicos.index') }}">Serviços</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('clientes.index') }}">Clientes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('contato.index') }}">Contato</a>
                        </li>
                    </ul>
                </nav>

            </div>

        </div>

        <a id="close_side_menu" href="javascript:void(0);"></a>

    </header>
    <!-- Header -->

    <main role="main">
        @yield('content')
    </main>

    <!-- Section Contato Footer -->

    @if (!Request::is('contato'))
        
        <section class="contato-footer py-5">

            <div class="container">

                <div class="row">

                    <div class="col-lg-6 col-md-6">
                        <img class="img-fluid w-75" src="{{ asset('assets/images/contato-home.png') }}">
                    </div>

                    <div class="col-lg-6 col-md-6">

                        <div class="about-content">

                            <div class="title-section"><h2>Fale conosco</h2></div>

                            @include('flash::message')

                            <form action="{{ route('contato.enviaEmail') }}" method="POST" class="my-4">

                                @csrf

                                <div class="form-group">
                                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" placeholder="Nome">
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                    
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" placeholder="E-mail">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                    
                                <div class="form-group">
                                    <input type="text" name="phone" class="form-control telefone @error('phone') is-invalid @enderror" value="{{ old('phone') }}" placeholder="Telefone">
                                    @error('phone')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            
                            
                                <div class="form-group">
                                    <textarea name="description" class="form-control @error('description') is-invalid @enderror" rows="5" placeholder="Mensagem">{{ old('description') }}</textarea>
                                    @error('description')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            
                            
                                <button type="submit" class="btn btn-primary text-right">Enviar</button>
                            

                            </form>

                        </div>

                    </div>

                    

                </div>

            </div>

        </section>

    @endif

    <footer id="footer" class="py-5">

        <div class="container">

            <div class="row">

                <div class="col-lg-3 col-md-3">
                    <a class="logo-footer">
                        <img class="img-fluid" src="{{ asset('assets/images/grupo-ative-360-branco.png') }}" alt="Grupo Ative 360" title="Grupo Ative 360">
                    </a>
                </div>

                <div class="col-lg-3 col-md-3">
                    <p>Avenida Padre Arlindo Vieira, 520 - Conj. 14 - Cep 04.297-000 - Vila Vermelha - São Paulo/SP</p>
                </div>
                

                <div class="col-lg-3 col-md-3">
                    <div class="contato">
                        <ul>
                            <li>
                                <a>
                                    <i class="fab fa-whatsapp"></i>
                                    <span>+55 (11) 9 9869 0515</span>
                                </a>
                            </li>
                            <li>
                                <a>
                                    <i class="fas fa-envelope"></i>
                                    <span>contato@grupoative360.com.br</span>
                                </a>
                            </li>
                        </ul>
                    </div>

                </div>

                <div class="col-lg-3 col-md-3">
                    <div class="social-media">
                        <ul>
                            <li>
                                <a href="https://www.facebook.com/grupoative360" target="_blank"><i class="fab fa-facebook-square"></i></a>
                            </li>
                            <li>
                                <a href="http://instagram.com/grupoative360" target="_blank"><i class="fab fa-instagram"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/5.4.5/js/swiper.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-steps/1.1.0/jquery.steps.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>

    <script src="{{ asset('/assets/js/app.js') }} "></script>

</body>

</html>
