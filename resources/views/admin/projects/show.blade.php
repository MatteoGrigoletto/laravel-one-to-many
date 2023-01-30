@extends('layouts.admin')

@section('content')
<h1 class="my-4">{{$projects->name}}</h1>
<p class="my-4">{{$projects->description}}</p>
@endsection