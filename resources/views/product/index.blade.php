@extends('layouts.template')

@section('content')
    <h1 class="text-center">Produtos do Estoque</h1>

    <table class="table table-hover table-bordered">
        <thead>
            <tr class="text-center">
                <th>#</th>
                <th>Nome</th>
                <th>Descrição</th>
                <th>Preço</th>
                <th>Quantidade</th>
                <th colspan="2">Ação</th>
            </tr>
        </thead>

        <tbody>
            @forelse ($product as $p)
                <tr>
                    <td>{{$p->id}}</td>
                    <td>
                        <a href="{{route('product.show', ['product' => $p->id])}}">{{$p->name}}</a>
                    </td>
                    <td>{{$p->description}}</td>
                    <td>R$ {{$p->price}}</td>
                    <td>{{$p->quantity}}</td>
                    <td>
                        <a class="btn btn-success" href="{{route('product.edit', ['product' => $p->id])}}">Editar</a>
                    </td>
                    <td>
                        <form action="{{route('product.destroy', ['product' => $p->id])}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input class="btn btn-danger" type="submit" value="Excluir">
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6"><h2>Não há produtos cadastrados!</h2></td>
                </tr>
            @endforelse
        </tbody>
    </table>
    {{$product->links()}}
@endsection