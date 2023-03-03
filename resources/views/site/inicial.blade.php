@extends('site.layouts.basico')

@section('titulo', 'Home')
@section('navbar_basico')
    {{-- <div class="container-sm">
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
    </div> --}}
    <section class="text-gray-600 body-font">
        <div class="container px-5 py-24 mx-auto">
            <div class="text-center mb-20">
                <h1 class="sm:text-3xl text-2xl font-medium title-font text-gray-900 mb-4">Controle de Equipamentos
                </h1>
                <p class="text-base leading-relaxed xl:w-2/4 lg:w-3/4 mx-auto text-gray-500s">Software criado para inventário
                    dos equipamentos disponibizados aos nossos clientes: Computadores, Modens, Microtiks</p>
                <div class="flex mt-6 justify-center">
                    <div class="w-16 h-1 rounded-full bg-purple-500 inline-flex"></div>
                </div>
            </div>
            <section class="text-gray-600 body-font">
                <div class="container px-5 py-24 mx-auto flex flex-wrap">
                    <div class="flex flex-wrap -mx-4 mt-auto mb-auto lg:w-1/2 sm:w-2/3 content-start sm:pr-10">
                        <div class="w-full sm:p-4 px-4 mb-6">
                            <h1 class="title-font font-medium text-xl mb-2 text-gray-900">COMPUTADORES</h1>
                            <div class="leading-relaxed">Players disponibilizados aos nossos clientes, Desktops e Mini Pcs.
                            </div>
                        </div>
                        <div class="p-4 sm:w-1/2 lg:w-1/4 w-1/2">
                            <h2 class="title-font font-medium text-3xl text-gray-900">2.5K</h2>
                            <p class="leading-relaxed">Total</p>
                        </div>
                        <div class="p-4 sm:w-1/2 lg:w-1/4 w-1/2">
                            <h2 class="title-font font-medium text-3xl text-gray-900">1.8K</h2>
                            <p class="leading-relaxed">Em uso</p>
                        </div>
                        <div class="p-4 sm:w-1/2 lg:w-1/4 w-1/2">
                            <h2 class="title-font font-medium text-3xl text-gray-900">600</h2>
                            <p class="leading-relaxed">Estoque</p>
                        </div>
                        <div class="p-4 sm:w-1/2 lg:w-1/4 w-1/2">
                            <h2 class="title-font font-medium text-3xl text-gray-900">100</h2>
                            <p class="leading-relaxed">Disponíveis</p>
                        </div>
                    </div>
                    <div class="lg:w-1/2 sm:w-1/3 w-full rounded-lg overflow-hidden mt-6 sm:mt-0">
                        <img class="object-cover object-center w-full h-full" src="{{ asset('img/1.png') }}" alt="stats">
                    </div>
                </div>
            </section>
            <section class="text-gray-600 body-font">
                <div class="container px-5 py-24 mx-auto flex flex-wrap">
                    <div class="flex flex-wrap -mx-4 mt-auto mb-auto lg:w-1/2 sm:w-2/3 content-start sm:pr-10">
                        <div class="w-full sm:p-4 px-4 mb-6">
                            <h1 class="title-font font-medium text-xl mb-2 text-gray-900">MODENS</h1>
                            <div class="leading-relaxed">Modens disponibilizados aos nossos clientes. </div>
                        </div>
                        <div class="p-4 sm:w-1/2 lg:w-1/4 w-1/2">
                            <h2 class="title-font font-medium text-3xl text-gray-900">1.5K</h2>
                            <p class="leading-relaxed">Total</p>
                        </div>
                        <div class="p-4 sm:w-1/2 lg:w-1/4 w-1/2">
                            <h2 class="title-font font-medium text-3xl text-gray-900">1.3K</h2>
                            <p class="leading-relaxed">Em uso</p>
                        </div>
                        <div class="p-4 sm:w-1/2 lg:w-1/4 w-1/2">
                            <h2 class="title-font font-medium text-3xl text-gray-900">150</h2>
                            <p class="leading-relaxed">Estoque</p>
                        </div>
                        <div class="p-4 sm:w-1/2 lg:w-1/4 w-1/2">
                            <h2 class="title-font font-medium text-3xl text-gray-900">50</h2>
                            <p class="leading-relaxed">Disponíveis</p>
                        </div>
                    </div>
                    <div class="lg:w-1/2 sm:w-1/3 w-full rounded-lg overflow-hidden mt-6 sm:mt-0">
                        <img class="object-cover object-center w-full h-full" src="{{ asset('img/2.png') }}" alt="stats">
                    </div>
                </div>
            </section>
            <section class="text-gray-600 body-font">
                <div class="container px-5 py-24 mx-auto flex flex-wrap">
                    <div class="flex flex-wrap -mx-4 mt-auto mb-auto lg:w-1/2 sm:w-2/3 content-start sm:pr-10">
                        <div class="w-full sm:p-4 px-4 mb-6">
                            <h1 class="title-font font-medium text-xl mb-2 text-gray-900">MICROTIKS</h1>
                            <div class="leading-relaxed">Microtiks disponibilizados aos nossos clientes. </div>
                        </div>
                        <div class="p-4 sm:w-1/2 lg:w-1/4 w-1/2">
                            <h2 class="title-font font-medium text-3xl text-gray-900">400</h2>
                            <p class="leading-relaxed">Total</p>
                        </div>
                        <div class="p-4 sm:w-1/2 lg:w-1/4 w-1/2">
                            <h2 class="title-font font-medium text-3xl text-gray-900">370</h2>
                            <p class="leading-relaxed">Em uso</p>
                        </div>
                        <div class="p-4 sm:w-1/2 lg:w-1/4 w-1/2">
                            <h2 class="title-font font-medium text-3xl text-gray-900">25</h2>
                            <p class="leading-relaxed">Estoque</p>
                        </div>
                        <div class="p-4 sm:w-1/2 lg:w-1/4 w-1/2">
                            <h2 class="title-font font-medium text-3xl text-gray-900">5</h2>
                            <p class="leading-relaxed">Disponíveis</p>
                        </div>
                    </div>
                    <div class="lg:w-1/2 sm:w-1/3 w-full rounded-lg overflow-hidden mt-6 sm:mt-0">
                        <img class="object-cover object-center w-full h-full" src="{{ asset('img/3.png') }}" alt="stats">
                    </div>
                </div>
            </section>
        </div>
    </section>

    <footer class="text-gray-400 bg-gray-900 body-font">
        <div class="container px-5 py-8 mx-auto flex items-center sm:flex-row flex-col">
            <a class="flex title-font font-medium items-center md:justify-start justify-center text-white">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round"
                    stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-purple-500 rounded-full"
                    viewBox="0 0 24 24">
                    {{-- <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path> --}}
                </svg>
                <span class="ml-3 text-xl">NEOOH</span>
            </a>
            <p class="text-sm text-gray-400 sm:ml-4 sm:pl-4 sm:border-l-2 sm:border-gray-800 sm:py-2 sm:mt-0 mt-4">© 2023
                Neooh PHYGITAL MAKERS —
                <a href="https://neooh.com.br/" class="text-gray-500 ml-1" target="_blank"
                    rel="noopener noreferrer">@neooh</a>
            </p>
            <span class="inline-flex sm:ml-auto sm:mt-0 mt-4 justify-center sm:justify-start">
                <a class="text-gray-400">
                    <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5"
                        viewBox="0 0 24 24">
                        <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                    </svg>
                </a>
                <a class="ml-3 text-gray-400">
                    <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        class="w-5 h-5" viewBox="0 0 24 24">
                        <path
                            d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z">
                        </path>
                    </svg>
                </a>
                <a class="ml-3 text-gray-400">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                        <rect width="20" height="20" x="2" y="2" rx="5"
                            ry="5"></rect>
                        <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
                    </svg>
                </a>
                <a class="ml-3 text-gray-400">
                    <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
                        <path stroke="none"
                            d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z">
                        </path>
                        <circle cx="4" cy="4" r="2" stroke="none"></circle>
                    </svg>
                </a>
            </span>
        </div>
    </footer>

@endsection
