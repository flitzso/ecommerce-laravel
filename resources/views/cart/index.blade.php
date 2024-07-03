@extends('layouts.app')

@section('content')
<h1>Meu Carrinho</h1>
<ul>
    @foreach($cartItems as $cartItem)
    <li>
        {{ $cartItem->product->name }} - R${{ $cartItem->product->price }}
        <form action="{{ route('cart.update', $cartItem->id) }}" method="POST">
            @csrf
            @method('PUT')
            <input type="number" name="quantity" value="{{ $cartItem->quantity }}" min="1">
            <button type="submit">Atualizar</button>
        </form>
        <form action="{{ route('cart.destroy', $cartItem->id) }}" method="POST" style="display:inline-block;">
            @csrf
            @method('DELETE')
            <button type="submit">Remover</button>
        </form>
    </li>
    @endforeach
</ul>
<a href="{{ route('orders.store') }}">Finalizar Compra</a>
@endsection