@extends('site.layouts.basico')

@section('titulo', 'Home')
@section('navbar_basico')
    <br><br><br><br>
    <div class="container-sm">
        <div class="grid text-center" style="--bs-columns: 3;">
            <div class="row">
                <div class="col-lg-4" style="color: blueviolet">
                    <img src="{{ asset('img/cadastro.png') }}">
                    <h2 class="fw-normal">Cadastros</h2>
                    <p>Cadastros de ativos em geral, players, modelos, numeros de série, patrimônios...</p>

                </div><!-- /.col-lg-4 -->
                <br><br><br>
                <div class="col-lg-4" style="color: blueviolet">
                    <img src="{{ asset('img/estoque.png') }}">
                    <h2 class="fw-normal">Estoques</h2>
                    <p>Ativos disponíveis para serem usados, em uso e preparação...</p>

                </div><!-- /.col-lg-4 -->
                <br><br><br>
                <div class="col-lg-4" style="color: blueviolet">
                    <img src="{{ asset('img/relatorio.png') }}">
                    <h2 class="fw-normal">Relatórios</h2>
                    <p>Relatórios completos sobre equipamentos ativos em clientes...</p>

                    </p>
                </div><!-- /.col-lg-4 -->
            </div><!-- /.row -->
        </div>
    </div>

@endsection
