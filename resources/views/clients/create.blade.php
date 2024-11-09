@extends('layouts.base')

@section('conteudo')
<h1>Novo Cliente</h1>

<form action="{{ route('clients.store') }}" method="POST">
    @csrf
    <label>Nome:</label>
    <input type="text" name="name" required>
    
    <label>Telefone:</label>
    <input type="text" name="phone" required>
    
    <button type="submit">Salvar</button>
</form>
@endsection
