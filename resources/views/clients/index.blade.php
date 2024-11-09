@extends('layouts.base')

@section('conteudo')
<h1>Clientes</h1>
<a href="{{ route('clients.create') }}">Novo Cliente</a>

<ul>
    @foreach($clients as $client)
        <li>{{ $client->name }} - {{ $client->phone }}</li>
    @endforeach
</ul>
@endsection
