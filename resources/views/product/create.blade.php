@extends('layouts.template')

@section('content')
    @foreach($errors->all() as $error)
        <div class="alert alert-warning text-center">
            {{ $error }}
        </div>
    @endforeach
    <h1 class="text-center">Cadastrar novos produtos</h1>
    <form action="{{route('product.store')}}" method="POST">
        @csrf
        <div class="row justify-content-center">
            <div class="col-8">
                <div class="form-group">
                    <label for="">Nome do Produto</label>
                    <input type="text" name="name" id="nome" class="form-control" value="{{old('name')}}" required>
                </div>
                                
                <div class="form-group">
                    <label for="">Descrição</label>
                    <input type="text" name="description" class="form-control" value="{{old('description')}}" required>
                </div>
            
                <div class="form-group">
                    <label for="">Preço</label>
                    <input type="text" name="price" class="form-control" value="{{old('price')}}" required>
                </div>
            
                <div class="form-group">
                    <label for="">Quantidade</label>
                    <input type="number" name="quantity" class="form-control" value="{{old('quantity')}}" required>
                </div>

                <input class="btn btn-success btn-lg" type="submit" value="Cadastrar">
            </div>
        </div>
    </form>
@endsection