@extends('admin.layouts.app')

@section('content')
<h1>Produtos</h1>
<a href="{{ route('admin.products.create') }}">Adicionar Produto</a>
<table>
    <thead>
        <tr>
            <th>Nome</th>
            <th>Preço</th>
            <th>Estoque</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach($products as $product)
        <tr>
            <td>{{ $product->name }}</td>
            <td>{{ $product->price }}</td>
            <td>{{ $product->stock }}</td>
            <td>
                <a href="{{ route('admin.products.edit', $product->id) }}">Editar</a>
                <form action="{{ route('admin.products.destroy', $product->id) }}" method="POST" style="display:inline-block;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Deletar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection