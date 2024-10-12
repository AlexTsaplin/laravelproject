@extends('layout')

@section('title')Головна сторінка@endsection

@section('main_content')
    <div class="h-100 p-5 text-bg-dark rounded-3 jumbotron bg-warning">
        <h1 class="display-1">Головна сторінка</h1>
        <p>Swap the background-color utility and add a `.text-*` color utility to mix up the jumbotron look. <br> Then, mix and match with additional component themes and more.</p>
        <button class="btn btn-lg btn-danger" href="/review" role="button">Відгуки »</button>
    </div>
    <div class="row">
        <div class="col-lg-4">
            <svg class="bd-placeholder-img rounded-circle" width="50" height="50" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="var(--bs-secondary-color)"></rect></svg>
            <h2 class="fw-normal">Heading</h2>
            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui</p>
            <p><a class="btn btn-secondary" href="#">View details »</a></p>
        </div>
        <div class="col-lg-4">
            <svg class="bd-placeholder-img rounded-circle" width="50" height="50" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="var(--bs-secondary-color)"></rect></svg>
            <h2 class="fw-normal">Heading</h2>
            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui</p>
            <p><a class="btn btn-secondary" href="#">View details »</a></p>
        </div>
        <div class="col-lg-4">
            <svg class="bd-placeholder-img rounded-circle" width="50" height="50" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="var(--bs-secondary-color)"></rect></svg>
            <h2 class="fw-normal">Heading</h2>
            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui</p>
            <p><a class="btn btn-secondary" href="#">View details »</a></p>
        </div>
    </div>
@endsection
