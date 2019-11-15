@extends('layouts.template')

@section('content')
    <h1 class="text-center">Olá {{Auth::user()->name}}, seja bem-vindo ao sistema de estoque com Laravel!</h1>
    <div class="card">
        <div class="card-body text-center">
            Este sistema foi desenvolvido por Marcus Renato. <br>
            Tecnologias utilizadas: <br>
            PHP e Laravel <br>
            Boostrap <br>
            Mysql
        </div>
    </div>
@endsection