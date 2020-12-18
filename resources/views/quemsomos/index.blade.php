@extends('layouts.app')

@section('title', '- Quem Somos')

@section('content')

    <div id="quem-somos">

        <div class="page-title-content bg-orange">

            <div class="container">
                <h1>Quem Somos</h1>
                <h5><a href="{{ route('home') }}">Home</a> <span>/</span> Quem Somos</h5>
            </div>
            
        </div>

        <div class="container">

            <div class="content">

                <p>Atuamos desde 2013 com ampla diversidade de displays promocionais e toda a dedicação para implementar as soluções mais adequadas, em um formato 360º.  Somos intensamente dinâmicos e compromissados com o impacto positivo que nossos clientes querem causar em seus consumidores.</p>
                
                <div class="title-section">
                    <h2>Transformamos<br>
                    materiais em soluções<br>
                    para vendas</h2>
                </div>

                <ul>
                    <li><span>ACRÍLICO, PS, PET, PP e OUTROS</span></li>
                    <li><span>MADEIRA, MDF, MDP e OUTROS</span></li>
                    <li><span>METAL (TUBOS, CHAPAS, ARAMADOS)</span></li>
                    <li><span>INJEÇÃO PLÁSTICA</span></li>
                    <li><span>VACUUM FORMING</span></li>
                    <li><span>IMPRESSÃO (3D, OFFSET, DIGITAL e UV)</span></li>
                    <li><span>SERIGRAFIA (SILK)</span></li>
                </ul>

                <div class="title-section">
                    <h2>Foco em<br>
                        sustentabilidade</h2>
                </div>

                <p>Geramos produtos e serviços de alto valor agregado para a cadeia de negócio. Escolhemos o melhor material e a melhor forma de fabricação para você e para o Meio Ambiente.</p>
 
                <p><b>Nosso foco é sempre impactar positivamente o consumidor com nossas soluções</b></p>

            </div>

        </div>

    </div>

@endsection
