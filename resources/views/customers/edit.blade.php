@extends('layouts.app')

@section('content')
<h1>Meu Perfil</h1>
<form action="{{ route('customers.update') }}" method="POST">
    @csrf
    @method('PUT')
    <label for="name">Nome:</label>
    <input type="text" id="name" name="name" value="{{ $customer->name }}" required>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" value="{{ $customer->email }}" required>

    <button type="submit">Salvar</button>
</form>
@endsection