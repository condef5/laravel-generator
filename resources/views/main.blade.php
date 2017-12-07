<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link rel="stylesheet" href="https://bootswatch.com/4/flatly/bootstrap.min.css">
    </head>
    <body>
        <div class="container">
            <h1 class="page-header text-center">Lista de conferencias</h1>
            <div class="row">
                @foreach($ponencias as $ponencia)
                    <div class="col-md-4">
                        <img src="{{ $ponencia->ponente->foto}}" style="width: 200px"  class="img-responsive" alt="">
                        <h4>{{ $ponencia->nombre }}</h4>
                        <p>Por: {{ $ponencia->ponente->nombre }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </body>
</html>
