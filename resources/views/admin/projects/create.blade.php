@extends('layouts.admin')

@section('content')
<h1 class="my-4">New Project</h1>
<form action="{{route('admin.projects.store')}}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input class="form-control @error('name') is-invalid @enderror" type="text" placeholder="Name" id="name" name="name" value="{{old('name')}}" required>
        @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" rows="3" placeholder="Description" required>{{old('description')}}</textarea>
        @error('description')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="costumer" class="form-label">...</label>
        <input class="form-control @error('client') is-invalid @enderror" type="text" placeholder="costumer" id="costumer" name="client" value="{{old('client')}}" required>
        @error('client')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <button type="submit" class="btn btn-success">Create</button>
    <button type="reset" class="btn btn-secondary">Delete</button>
</form>
@endsection