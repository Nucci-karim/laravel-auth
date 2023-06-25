@extends( 'dashboard' );

@section('content')
<div class="container">
    <h1>Form modifica progetto</h1>
    @if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
            <li> {{$error}}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form action="{{ route( 'admin.index.update',  $mod_post['id']) }}" method="POST" enctype="multipart/form-data">

        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="projects-title" class="form-label">Title</label>
            <input type="text" id="projects-title" name="title" class="form-control" value="{{ old('title') ?? $mod_post->title }}">
        </div>

        <div class="form-group">
            <label for="projects-description" class="form-label">Description</label>
            <textarea class="form-control" name="description" id="projects-description" cols="30" rows="10">{{$mod_post->description}}</textarea>
        </div>

        <div class="form-group">
            <label for="projects-lange" class="form-label">Lang</label>
            <input type="text" id="projects-lange" name="lang"  class="form-control" value="{{$mod_post->lang}}">
        </div>

        <div class="form-group">
            <label for="projects-path" class="form-label">Lang</label>
            <input type="file" id="projects-path" name="path"  class="form-control">
        </div>

        <button type="submit" class="btn btn-primary mt-2">Inserisci modifiche</button>

    </form>
</div>
@endsection