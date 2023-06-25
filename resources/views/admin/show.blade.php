@extends('dashboard');

@section('content')
    <div class="container">
        <img src="{{asset('storage/' . $project->path)}}" alt="">
        <h1>{{ $project->title }}</h1>
        <p>{{ $project->description }}</p>
        <a class="text-decoration-none" href=" {{ route( 'admin.index.edit', $project ) }} " class="my-2 btn btn-primary">Modifica</a> 
        <form action=" {{ route('admin.index.destroy', $project['id']) }} " method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger my-2">Elimina</button>
        </form>
    </div>
@endsection