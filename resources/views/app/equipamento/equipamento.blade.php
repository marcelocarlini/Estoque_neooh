@extends('site.layouts.basico')

@section('titulo', 'Cadastro - Player')
@section('navbar_basico')
    <div class="container" style="margin-top:25px;">

        <div class="row align-items-start" class="col align-self-center">
            <div class="col">
            </div>
            <div class="col-sm-10" style="margin-top: 25px;">
                <div class="card ">
                    <div class="card-body">
                        <h5 class="card-title"><i class="fas fa-cart-plus"></i>&nbsp;Cadastrar Equipamentos</h5>
                        <div class="row align-items-center">
                            <div class="col-sm-4" style="margin-top: 25px;">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title"><i class="fas fa-box"></i>&nbsp;Adicionar Player</h5>
                                        <p class="card-text">Adicione novos players ao seu controle.</p>
                                        <a href="{{ route('app.player.cadastroplayer') }}" class="btn btn-sm text-white"
                                            style="background-color: blueviolet">Clique aqui</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4" style="margin-top: 25px;">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title"><i class="fas fa-box"></i>&nbsp;Adicionar Modem</h5>
                                        <p class="card-text">Adicione novos modens ao seu controle.</p>
                                        <a href="{{ route('app.modem.cadastromodem') }}" class="btn btn-sm text-white"
                                            style="background-color: blueviolet">Clique aqui</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4" style="margin-top: 25px;">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title"><i class="fas fa-box"></i>&nbsp;Adicionar Microtik</h5>
                                        <p class="card-text">Adicione novos microtiks ao seu controle.</p>
                                        <a href="adicionar_categoria.php" class="btn btn-sm text-white"
                                            style="background-color: blueviolet">Clique aqui</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                    </div>
                </div>
            </div>
            <div class="col">
            </div>
        </div>

    </div>
@endsection
