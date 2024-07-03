@extends('layouts.app')

@section('content')
<h1>Produtos</h1>
<form action="{{ route('products.search') }}" method="GET">
    <input type="text" name="query" placeholder="Buscar produtos">
    <button type="submit">Buscar</button>
</form>
<ul>
    @foreach($products as $product)
    <li>
        <a href="{{ route('products.show', $product->id) }}">{{ $product->name }}</a>
        - R${{ $product->price }}
    </li>
    @endforeach
</ul>
@endsection