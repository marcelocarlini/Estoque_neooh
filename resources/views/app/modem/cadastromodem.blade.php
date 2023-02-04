@extends('site.layouts.basico')

@section('titulo', 'Cadastros - Modem')
@section('navbar_basico')
    <div class="container" style="margin-top:25px;">
        <div class="row align-items-start" class="col align-self-center">
            <div class="col">
            </div>
            <div class="col-sm-10" style="margin-top: 25px;">
                <div class="card ">
                    <div class="card-body">
                        <h5 class="card-title"><i class="fas fa-cart-plus"></i>&nbsp;Adicionar Modem</h5>
                        <div class="row align-items-center">
                            <div class="col-sm-12" style="margin-top: 25px;">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title"><i class="fas fa-box"></i>&nbsp;Preencha os campos abaixo:
                                        </h5>
                                        <br><br>
                                        <div class="row">
                                            <div class="col">
                                            </div>
                                            <div class="col-6">
                                                <form class="row g-3" action={{ route('app.modem.cadastromodem') }}
                                                    method="get">
                                                    <div class="col-md-12">
                                                        <label for="input_numero_serie" class="form-label">Número de
                                                            série</label>
                                                        <input type="text" class="form-control" id="input_numero_serie"
                                                            name='numero_serie'>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <label for="input_patrimonio" class="form-label">Patrimônio</label>
                                                        <input type="text" class="form-control" id="input_patrimonio"
                                                            name='patrimonio'>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <label for="inputState" class="form-label">Modelo</label>
                                                        <select id="inputState" class="form-select" name='modelo'>
                                                            <option value="1">Claro</option>
                                                            <option value="2">Vivo</option>
                                                            <option value="3">Tim</option>
                                                            <option value="4">Aquária</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <label for="inputState" class="form-label">Status</label>
                                                        <select id="inputState" class="form-select" name='status'>
                                                            <option value="1">Disponível</option>
                                                            <option value="2">Indisponível</option>

                                                        </select>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <button type="submit" class="btn btn-sm text-white"
                                                            style="background-color: blueviolet">Salvar</button>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="col">
                                            </div>
                                        </div>
                                        <a href="{{ route('app.equipamento.equipamento') }}" class="btn btn-sm text-white"
                                            style="background-color: blueviolet">Voltar</a>
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
