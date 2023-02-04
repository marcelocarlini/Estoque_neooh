@extends('site.layouts.basico')

@section('titulo', 'Cadastro - Player')
@section('navbar_basico')
    <div class="container" style="margin-top:25px;">
        <div class="row">
            <div class="col-sm-6" style="margin-top: 25px;">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><i class="fas fa-cart-plus"></i>&nbsp;Cadastrar Equipamentos</h5>
                        <p class="card-text">Adicione novos equipamentos em seu estoque.</p>
                        <a href="{{ route('app.equipamento.equipamento') }}" class="btn btn-sm text-white"
                            style="background-color: blueviolet">Adicionar
                            equipamentos</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6" style="margin-top: 25px;">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><i class="fas fa-box"></i>&nbsp;Adicionar Clientes</h5>
                        <p class="card-text">Adicione novas localidades ao seu controle.</p>
                        <a href="adicionar_categoria.php" class="btn btn-sm text-white"
                            style="background-color: blueviolet">Adicionar
                            localidades</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
