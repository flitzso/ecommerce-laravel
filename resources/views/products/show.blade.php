@extends('layouts.app')

@section('content')
<h1>{{ $product->name }}</h1>
<p>Preço: R${{ $product->price }}</p>
<form action="{{ route('cart.store') }}" method="POST">
    @csrf
    <input type="hidden" name="product_id" value="{{ $product->id }}">
    <input type="number" name="quantity" value="1" min="1">
    <button type="submit">Adicionar ao Carrinho</button>
</form>
@endsection