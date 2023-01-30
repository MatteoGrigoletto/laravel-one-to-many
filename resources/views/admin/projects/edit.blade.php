@extends('layouts.admin')

@section('content')
<h1 class="my-4">Project: {{$projects->name}}</h1>
<form action="{{route('admin.projects.update',$projects)}}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="name" class="form-label"></label>
        <input class="form-control @error('name') is-invalid @enderror" type="text" id="name" name="name" value="{{old('name',$projects->name)}}" required>
        @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" rows="3" required>{{old('description',$projects->description)}}</textarea>
        @error('description')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="client_name" class="form-label">Categorie</label>
        <select class="form-select" name="category_id" aria-label="Default select example">
            <option value="" selected>Selezionare una categoria</option>
            @foreach ($categories as $category)
                <option @if ($category->id == old('category_id', $project->category?->id)) selected @endif value="{{ $category->id }}">
                    {{ $category->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label for="costumer" class="form-label">Title</label>
        <input class="form-control @error('client') is-invalid @enderror" type="text" id="costumer" name="client" value="{{old('client',$projects->client)}}" required>
        @error('client')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <button type="submit" class="btn btn-success">Submit</button>
    <button type="reset" class="btn btn-secondary">Reset</button>
</form>
@endsection