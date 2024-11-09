@extends('layouts.base')

@section('conteudo')
<h1>Novo Projeto</h1>

<form action="{{ route('projects.store') }}" method="POST">
    @csrf
    <label>Nome:</label>
    <input type="text" name="name" required>
    
    <label>Valor:</label>
    <input type="text" name="value" required>
    
    <label>Cliente:</label>
    <select name="client_id" required>
        @foreach($clients as $client)
            <option value="{{ $client->id }}">{{ $client->name }}</option>
        @endforeach
    </select>
    
    <button type="submit">Salvar</button>
</form>
@endsection
