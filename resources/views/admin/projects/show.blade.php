@extends('layouts.admin')

@section('content')
<h1 class="my-4">{{$projects->name}}</h1>
<p class="my-4">{{$projects->description}}</p>
@if ($projects->category)
    <h5 class="card-title my-2">Categoria: {{ $projects->category->name }}</h5>
@endif
@endsection