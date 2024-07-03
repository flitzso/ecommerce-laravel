@extends('admin.layouts.app')

@section('content')
<h1>Editar Produto</h1>
<form action="{{ route('admin.products.update', $product->id) }}" method="POST">
    @csrf
    @method('PUT')
    <label for="name">Nome:</label>
    <input type="text" id="name" name="name" value="{{ $product->name }}" required>

    <label for="price">Preço:</label>
    <input type="text" id="price" name="price" value="{{ $product->price }}" required>

    <label for="stock">Estoque:</label>
    <input type="number" id="stock" name="stock" value="{{ $product->stock }}" required>

    <button type="submit">Salvar</button>
</form>
@endsection