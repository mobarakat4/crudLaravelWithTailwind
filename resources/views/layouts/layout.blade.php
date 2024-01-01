<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

    {{-- <link rel="stylesheet" href="{{ mix('css/app.css') }}"> --}}
    @vite('resources/css/app.css')
    <title>Products</title>
</head>
<body>
    <div>
        <!-- A grey horizontal navbar that becomes vertical on small screens -->
    <nav class="navbar navbar-expand-sm bg-dark navbar-light">  

        <div class="container-fluid">
        <!-- Links -->
            <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link text-light font-" href="/">Product</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-light" href="/create">Create</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link 3</a>
            </li>
            </ul>
        </div>
    
    </nav>
    <main>
        @yield('body')
    </main>
    
    
</body>
</html>