@extends('layouts.app')

@section('content')
<h1>Pedido #{{ $order->id }}</h1>
<ul>
    @foreach($order->orderItems as $item)
    <li>{{ $item->product->name }} - Quantidade: {{ $item->quantity }} - Preço: R${{ $item->price }}</li>
    @endforeach
</ul>
<p>Total: R${{ $order->total }}</p>
@endsection