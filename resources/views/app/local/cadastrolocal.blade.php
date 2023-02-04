@extends('site.layouts.basico')

@section('titulo', 'Cadastro - Local')
@section('navbar_basico')
    <br> <br> <br>
    <div class="container text-center">
        <div class="row">
            <div class="col">
            </div>
            <div class="col-6">
                <form class="row g-3" action={{ route('app.local.cadastrolocal') }} method="get">
                    <div class="col-md-12">
                        <label for="input_numeroserie" class="form-label">Nome do Local</label>
                        <input type="text" class="form-control" id="input_numeroserie">
                    </div>
                    <div class="col-md-12">
                        <label for="input_numeroserie" class="form-label">Estado</label>
                        <input type="text" class="form-control" id="input_numeroserie">
                    </div>
                    <div class="col-md-12">
                        <label for="inputState" class="form-label">Cidade</label>
                        <select id="inputState" class="form-select">
                            <option selected>Belo Horizonte</option>
                            <option>São Paulo</option>
                            <option>Rio de Janeiro</option>
                            <option>Salvador</option>
                            <option>Vitória</option>
                        </select>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">Salvar</button>
                    </div>
                </form>
            </div>
            <div class="col">

            </div>
        </div>

    @endsection
