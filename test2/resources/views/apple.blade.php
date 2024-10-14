@extends('layout')

@section('title')Товари Яблук@endsection

@section('main_content')
    <div class="d-flex flex-column flex-shrink-0 p-3 bg-gradient" style="width: 280px;">
        <a class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
            <span class="fs-4" style="color: white">Пристрій:</span>
        </a>
        <hr>
        <ul class="nav nav-pills flex-column mb-auto">
            <li class="nav-item d-flex align-items-center mb-2">
                <input type="checkbox" id="appleCheckbox" class="form-check-input me-2" onclick="handleCheckboxClick('apple');">
                <span>Apple</span>
            </li>
            <li class="nav-item d-flex align-items-center mb-2">
                <input type="checkbox" id="googleCheckbox" class="form-check-input me-2" onclick="handleCheckboxClick('google');">
                <span>Google Pixel</span>
            </li>
            <li class="nav-item d-flex align-items-center mb-2">
                <input type="checkbox" id="samsungCheckbox" class="form-check-input me-2" onclick="handleCheckboxClick('samsung');">
                <span>Samsung</span>
            </li>
            <li class="nav-item d-flex align-items-center mb-2">
                <input type="checkbox" id="xiaomiCheckbox" class="form-check-input me-2" onclick="handleCheckboxClick('xiaomi');">
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
