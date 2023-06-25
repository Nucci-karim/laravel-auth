@extends( 'dashboard' );

@section('content')
<div class="container">
    <h1>Form create nuovo progetto</h1>
    @if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
            <li> {{$error}}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form action="{{ route( 'admin.index.store' ) }}" method="POST" enctype="multipart/form-data">

        @csrf

        <div class="form-group">
            <label for="projects-title" class="form-label">Title</label>
            <input type="text" id="projects-title" name="title" class="form-control">
        </div>

        <div class="form-group">
            <label for="projects-description" class="form-label">Description</label>
            <textarea class="form-control" name="description" id="projects-description" cols="30" rows="10"></textarea>
        </div>

        <div class="form-group">
            <label for="projects-lang" class="form-label">Lang</label>
            <input type="text" id="projects-lang" name="lang" class="form-control">
        </div>

        <div class="form-group">
            <label for="path" class="form-label">Immagine</label>
            <input type="file" id="path" name="path"  class="form-control">
        </div>

        {{-- <div class="form-group">
            <label for="projects-thumb" class="form-label">Image</label>
            <input type="text" id="projects-thumb" name="thumb"  class="form-control">
        </div> --}}

        <button type="submit" class="btn btn-primary mt-2">Inserisci nuovo progetto</button>

    </form>
</div>
@endsection