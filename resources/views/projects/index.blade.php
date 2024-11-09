@extends('layouts.base')

@section('conteudo')
<h1>Projetos</h1>
<a href="{{ route('projects.create') }}">Novo Projeto</a>

<ul>
    @foreach($projects as $project)
        <li>{{ $project->name }} - {{ $project->value }} - Cliente: {{ $project->client->name }}</li>
    @endforeach
</ul>
@endsection
