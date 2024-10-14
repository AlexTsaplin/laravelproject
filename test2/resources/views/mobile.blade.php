@extends('layout')

@section('title')Мобільні телефони@endsection

@section('main_content')
    <div class="d-flex flex-column flex-shrink-0 p-3 bg-gradient" style="width: 280px;">
        <a class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
            <p class="width=40 height=32"></p>
            <span class="fs-4" style="color: white">Пристрій:</span>
        </a>
        <hr>
        <ul class="nav nav-pills flex-column mb-auto">
            <li class="nav-item d-flex align-items-center mb-2">
                <input type="checkbox" class="form-check-input me-2" onclick="location.href='/apple';">
                <span>Apple</span>
            </li>
            <li class="nav-item d-flex align-items-center mb-2">
                <input type="checkbox" class="form-check-input me-2" onclick="location.href='#';">
                <span>Google Pixel</span>
            </li>
            <li class="nav-item d-flex align-items-center mb-2">
                <input type="checkbox" class="form-check-input me-2" onclick="location.href='#';">
                <span>Samsung</span>
            </li>
            <li class="nav-item d-flex align-items-center mb-2">
                <input type="checkbox" class="form-check-input me-2" onclick="location.href='#';">
                <span>Xiaomi</span>
            </li>
        </ul>
        <hr>
    </div>


    <style>
        .nav-item {
            margin-bottom: 10px; /* Отступ между элементами списка */
        }
        .form-check-input {
            width: 20px;
            height: 20px;
            cursor: pointer;
        }
    </style>




@endsection
