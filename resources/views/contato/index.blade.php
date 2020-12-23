@extends('layouts.app')

@section('title', '- Contato')

@section('content')

    <div id="contato">

        <div class="page-title-content">

            <div class="container">
                <h1>Contato</h1>
                <h5><a href="{{ route('home') }}">Home</a> <span>/</span> Contato</h5>
            </div>
            
        </div>

        <div class="container">

            <div class="content">

                <div class="row">

                    <div class="col-xl-6 col-md-12 col-sm-12 form">
    
                        @include('flash::message')
    
                        <form action="{{ route('contato.enviaEmail') }}" method="POST" class="my-4">

                            @csrf

                            <div class="form-group">
                                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" placeholder="Nome *" required>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                
                            <div class="form-group">
                                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" placeholder="E-mail *" required>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                
                            <div class="form-group">
                                <input type="text" name="phone" class="form-control telefone @error('phone') is-invalid @enderror" value="{{ old('phone') }}" placeholder="Telefone *" required>
                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <input type="text" name="subject" class="form-control telefone @error('subject') is-invalid @enderror" value="{{ old('subject') }}" placeholder="Assunto">
                                @error('subject')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        
                        
                            <div class="form-group">
                                <textarea name="description" class="form-control @error('description') is-invalid @enderror" rows="5" placeholder="Mensagem *" required>{{ old('description') }}</textarea>
                                <div class="text-right"><small class="text-muted">* Campo obrigatório</small></div>
                                @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="text-right">
                                <button type="submit" class="btn btn-primary text-right">Enviar</button>
                            </div>

                        </form>
    
                    </div>
    
                    <div class="col-xl-6 col-md-12 col-sm-12 my-4 map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d10796.75678630405!2d-46.60752412275998!3d-23.62612529163361!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce5b65e0a5517d%3A0x17f2e32b58769acc!2sAv.%20Padre%20Arlindo%20Vieira%2C%20520%20-%20Vila%20Vermelha%2C%20S%C3%A3o%20Paulo%20-%20SP%2C%2004297-000!5e0!3m2!1spt-BR!2sbr!4v1608651687148!5m2!1spt-BR!2sbr" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
    
                </div>

            </div>

        </div>

    </div>

@endsection
