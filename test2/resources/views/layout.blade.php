<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css">
</head>
<body class="bg-dark text-white">
<header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom bg-dark">
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
        <svg class="bi me-2" width="40" height="32"></svg>
        <span class="fs-4 text-white">SOKOLtm</span>
    </a>

    <ul class="nav nav-pills">
        <li class="nav-item"><a href="/" class="nav-link active" aria-current="page">Головна</a></li>
        <li class="nav-item"><a href="/categories" class="nav-link">Категорії</a></li>
        <li class="nav-item"><a href="/review" class="nav-link">Відгуки</a></li>
    </ul>
</header>

<div class="container">
    @yield('main_content')
</div><br>

<div class="container">
    <footer class="py-3 my-4">
        <ul class="nav justify-content-center border-bottom pb-3 mb-3">
            <li class="nav-item"><a href="/" class="nav-link px-2" style="color: white;">Головна</a></li>
            <li class="nav-item"><a href="/about" class="nav-link px-2" style="color: white;">Про нас</a></li>
            <li class="nav-item"><a href="/questions" class="nav-link px-2" style="color: white;">FAQ</a></li>
            <li class="nav-item"><a href="/review" class="nav-link px-2" style="color: white;">Відгуки</a></li>
        </ul>
        <p class="text-center" style="color: white;">© 2024 Store, Inc</p>
    </footer>
</div>

</body>
</html>
