@extends('layout')

@section('title')Каталог@endsection

@section('main_content')
    <div class="h-100 p-5 text-bg-dark rounded-3 jumbotron bg-gradient">
        <h1 class="display-1">Категорія товарів</h1><br>
    </div><br>

    <div class="row">
        <div class="col-lg-4 text-center">
            <img src="https://cdn-icons-png.flaticon.com/512/15713/15713816.png " width="300" height="300" style="object-fit: contain; padding-top: 20px"><br><br><br>
            <p>
                <a class="btn btn-secondary" href="/mobile">Мобільні телефони</a>
            </p>
        </div>
        <div class="col-lg-4 text-center">
            <img src="https://cdn-icons-png.flaticon.com/512/10422/10422351.png " width="350" height="350" style="object-fit: contain;" >
            <p><a class="btn btn-secondary" href="#">Ноутбуки</a></p>
        </div>
        <div class="col-lg-4 text-center">
            <img src="https://cdn-icons-png.flaticon.com/512/2628/2628515.png " width="250" height="250" style="object-fit: contain; padding-top: 50px"><br><br><br><br><br>
            <p><a class="btn btn-secondary" href="#">Навушники</a></p>
        </div>
    </div>

@endsection
