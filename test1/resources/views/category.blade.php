<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Интернет Магазин</title>

    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <link href="/css/booststrap.min.css" rel="stylesheet">
    <link href="/css/starter-template.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="http://test1.test/">YouStore</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse"></div>
        <ul class="nav navbar-nav">
            <li class="active"><a href="http://test1.test/">Усі товари</a></li>
            <li ><a href="http://test1.test/categories">Категорії</a></li>
            <li ><a href="http://test1.test/basket">До корзини</a></li>
            <li ><a href="http://test1.test/reset">Скинути проект у начальний стан</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="http://test1.test/admin/home">Панель адміністратора</a></li>
        </ul>
    </div>
</nav>

<div class="container">
    <div class="starter-template">
            <h1>
            @if($category == 'mobiles')
                Мобільні телефони
                @elseif($category == 'headphones')
                Навушники
                @elseif($category == 'laptops')
                Ноутбуки
           @endif
            </h1>
            <p>
                В цьому розділі ви знайдете самі популярні смартфони по низким цінам!
            </p>
            <div class="row">
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img src="https://iprodavay.com.ua/wp-content/uploads/2021/10/iphone12-pro-max.png" width="225px" height="225px">
                        <div class="caption">
                            <h3>iPhone 15 Pro 128GB</h3>
                            <p>52,999грн</p>
                            <p>
                                <a href="http://test1.test/basket/1/add" class="btn btn-primary" role="button">До корзини</a>
                                <a href="http://test1.test/mobiles/iphone_15_128" class="btn btn-default" role="button">Докладніше</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <img src="https://toiler.com.ua/files/resized/products/iphone13_midnight__2021_2024.600x800.jpg" alt="iPhone 13 mini 256GB" >
                <div class="caption">
                    <h3>iPhone 13 mini 256GB</h3>
                    <p>32,999грн</p>
                    <p>
                        <a href="http://test1.test/basket/1/add" class="btn btn-primary" role="button">До корзини</a>
                        <a href="http://test1.test/" class="btn btn-default" role="button">Докладніше</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
