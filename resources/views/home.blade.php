<!DOCTYPE html>
<html lang="en" data-bs-theme='dark'>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel</title>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    {{-- style.css --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/app.css') }}" />
    
</head>
<body>
    <div class="container p-5">

        <h1>HELLO WORLD</h1>

        <h4 class="my-5">{{ $hello }}</h4>

        <a class="btn btn-primary" role="button" aria-disabled="true" href="{{route('seconda')}}">Seconda Pagina</a>

    </div>

    <!-- bootscript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  
</body>
</html>