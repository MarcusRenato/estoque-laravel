@extends('layouts.template')

@section('content')
    <h1 class="text-center">Editar informações do produto</h1>
    <form action="{{route('product.update', ['product' => $product->id])}}" method="POST">
        @csrf
        @method('PUT')
        <div class="row justify-content-center">
            <div class="col-8">
                <div class="form-group">
                    <label for="">Nome do Produto</label>
                    <input type="text" name="name" class="form-control" value="{{$product->name}}" required>
                </div>
                                
                <div class="form-group">
                    <label for="">Descrição</label>
                    <input type="text" name="description" class="form-control" value="{{$product->description}}" required>
                </div>
            
                <div class="form-group">
                    <label for="">Preço</label>
                    <input type="text" name="price" class="form-control" value="{{$product->price}}" required>
                </div>
            
                <div class="form-group">
                    <label for="">Quantidade</label>
                    <input type="number" name="quantity" class="form-control" value="{{$product->quantity}}" required>
                </div>

                <input class="btn btn-success btn-lg" type="submit" value="Atualizar">
            </div>
        </div>
    </form>
@endsection