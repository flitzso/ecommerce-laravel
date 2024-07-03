@extends('layouts.app')

@section('content')
<h1>Meus Pedidos</h1>
<ul>
    @foreach($orders as $order)
    <li>
        <a href="{{ route('orders.show', $order->id) }}">Pedido #{{ $order->id }}</a> - Total: R${{ $order->total }}
    </li>
    @endforeach
</ul>
@endsection