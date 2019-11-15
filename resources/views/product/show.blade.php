@extends('layouts.template')

@section('content')

    <div class="row justify-content-center">
        <div class="col-8">
            <div class="card">
                <div class="card-header h2 text-center">
                    {{$product->name}}
                </div>
            
                <div class="card-body text-monospace">
                    <table class="table">
                        <tr>
                            <td>Descrição:</td>
                            <td>{{$product->description}}</td>
                        </tr>
                        <tr>
                            <td>Preço: </td>
                            <td>R$ {{$product->price}}</td>       
                        </tr>
                        <tr>
                            <td>Quantidade disponível:</td>
                            <td>{{$product->quantity}}</td>
                        </tr>
                    </table>
                </div>
            </div><br>
            <a href="/product" class="btn btn-primary">Voltar a lista de produtos</a>
        </div>
    </div>

@endsection