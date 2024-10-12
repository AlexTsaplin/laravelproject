@extends('layout')

@section('title')Сторінка про нас@endsection

@section('main_content')
    <div class="h-100 p-5 text-bg-dark rounded-3 jumbotron bg-warning">
        <h2 class="display-2">Сторінка про нас</h2>
        <p>Swap the background-color utility and add a `.text-*` color utility to mix up the jumbotron look. <br> Then, mix and match with additional component themes and more.</p>
        <button class="btn btn-lg btn-danger" href="/review" role="button">Відгуки »</button>
    </div>
@endsection
