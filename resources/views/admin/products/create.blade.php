@extends('admin.layouts.app')

@section('content')
<h1>Adicionar Produto</h1>
<form action="{{ route('admin.products.store') }}" method="POST">
    @csrf
    <label for="name">Nome:</label>
    <input type="text" id="name" name="name" required>

    <label for="price">Preço:</label>
    <input type="text" id="price" name="price" required>

    <label for="stock">Estoque:</label>
    <input type="number" id="stock" name="stock" required>

    <button type="submit">Salvar</button>
</form>
@endsection