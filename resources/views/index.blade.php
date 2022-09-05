<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tags</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-xs-8 col-xs-offset-2">
                <h1 class="page-header">Sistema de Etiquetas</h1>
                errores
                <br>
                formulario
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

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>