@extends('layouts.template')

@section('content')
    <h1 class="text-center">Olá {{Auth::user()->name}}, seja bem-vindo ao Sistema de Estoque!</h1>
    <br>
    <div id="accordion">
        <div class="card">
            <div class="card-header">
                <button class="btn btn-link" data-toggle="collapse" data-target="#c1" aria-controls="c1"><p class="h2">Tutorial</p></button>
            </div>
            <div class="collapse" id="c1" data-parent="#accordion">
                <div class="card-body text-monospace text-justify">
                    <p>
                        <strong class="h3">Sobre o Sistema</strong><br>
                        Este sistema é um sistema de estoque desenvolvido
                        com a finalidade de pôr em prática a tecnologia que estudo.
                        No sistema é possível: fazer cadastro, realizar login, cadastrar novos produtos,
                        editar, excluir e mostrar detalhes de produtos.
                    </p>
                    <hr>
                    <p>
                        <strong class="h3">Funcionalidades</strong><br><br>
                        <strong class="h4">Menus</strong>
                        <li><strong>Home: </strong>Direciona a tela inicial do sistema.</li>
                        <li><strong>Produtos: </strong>Direciona a tela onde lista os produtos cadastrados.</li>
                           <li><strong>Cadastrar Novo: </strong>Mostra formulário de adição de novos produtos.</li>
                        <li><strong>Boas-vindas: </strong>Ao clicar, mostra opção de sair do sistema.</li>
                    </p>

                    <p>
                        <strong class="h3">Informações dos produtos</strong><br><br>
                        <strong class="h4">O sistema armazena as seguintes informações</strong>
                        <li><strong>Nome</strong></li>
                        <li><strong>Descrição</strong></li>
                        <li><strong>Preço</strong></li>
                        <li><strong>Quantidade</strong></li>
                    </p>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <button class="btn btn-link" data-toggle="collapse" data-target="#c2" aria-controls="c2"><p class="h2">Informações sobre o sistema</p></button>
            </div>
            <div class="collapse" id="c2" data-parent="#accordion">
                <div class="card-body text-monospace">
                    <strong class="h3">Tecnologias utilizadas </strong>
                    <li>PHP e Laravel</li>
                    <li>Bootstrap</li>
                    <li>Mysql</li>

                    <hr>

                    <strong class="h3">Sobre o desenvolvedor</strong><br><br>
                    <p>
                        Desenvolvido por: Marcus Renato Soares <br>
                        Contato: marcusrenato@live.com
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection