<html lang="en">
<head>
    <title>Test</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="{{ asset('css/post.css') }}" rel="stylesheet">

</head>
<body>


    <div class="w-75 container" >
        <h1 class="text-center m-4">Новости</h1>

            <div>
                @foreach($posts as $post)
                    <div class="border post shadow p-3 mb-5 bg-body-tertiary rounded">
                        <h2 class="">
                            {{$post->name}}
                        </h2>
                        <p class="content">
                            {{$post->content}}
                        </p>
                        <p class="opacity-50 datetime">
                            {{$post->created_at}}
                        </p>
                    </div>
                @endforeach
            </div>

    </div>


</body>
</html>
