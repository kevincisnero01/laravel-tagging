<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tags</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-xs-8 col-xs-offset-2">
                <h1 class="page-header">Sistema de Etiquetas</h1>
     
                @if(session('info'))
                    <div class="alert alert-success">
                        {{ session('info') }}
                    </div>
                @endif

                @if(count($errors))
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('posts-store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="title">Titutlo</label>
                        <input type="text" class="form-control" name="title" placeholder="Ingrese el titulo">
                    </div>

                    <div class="form-group">
                        <label for="body">Contenido</label>
                        <textarea name="body" id="body" rows="7" class="form-control"></textarea>
                    </div>

                    <div class="form-group well">
                        <label for="tags">Etiquetas (Palabras separadas por coma)</label>
                        <input type="text" name="tags" id="tags" data-role="tagsinput" class="form-control">
                    </div>

                    <div class="d-grid">
                        <button type="submit" class="btn btn-success my-2">Guardar</button>
                    </div>
                </form>
                <hr>
                @foreach ($posts as $post)
                    <div class="card card-default my-2 border-primary">
                        <div class="card-header bg-primary  text-light">{{ $post->title }}</div>
                        <div class="card-body">{{ $post->body }}</div>
                        <div class="card-footer border-primary">
                            @forelse ($post->tags as $tag)
                                <span class="rounded bg-info py-1 px-2 text-light">{{ $tag->name }}</span>
                            @empty
                                <em>No hay etiquetas</em>
                            @endforelse
                        </div>
                    </div><!--card-->
                @endforeach
            </div><!--col-->
        </div><!--row-->
    </div><!--container-->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.js"></script>
</body>
</html>