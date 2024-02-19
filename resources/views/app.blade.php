<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Test</title>

    <!-- Fonts -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="{{ asset('css/post.css') }}" rel="stylesheet">
    <!-- Styles -->
<style>
    body{
        margin-bottom: 5em;
    }
</style>

</head>
<body class="antialiased">
<main>
<div class="container">
    <div class=" row justify-content-center">
        <h2 class="text-center m-4">Последние новости</h2>
        <div class="w-50 last_post">
            @foreach($posts as $post)
                <div class="border1">
                        <div class="border post shadow p-2 mb-4 bg-body-tertiary rounded">
                            <h2 class="">
                                {{$post->name}}
                            </h2>
                            <p class="content m-2">{{$post->content}}. ...
                            </p>

                            <p class="opacity-50 datetime">
                                {{$post->created_at}}
                            </p>
                        </div>
                </div>



            @endforeach
        </div>
        <div class="text-center">

            <a href="/news" class="btn btn1 p-3 m-3">Все новости</a>
            <a href="/contact" class="btn p-3 m-3">Обратная связь</a>
        </div>
    </div>
</div>




</main>
</body>
</html>
