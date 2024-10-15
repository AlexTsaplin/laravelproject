@extends('layout')

@section('title')Навушники@endsection

@section('main_content')
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="d-flex flex-column flex-shrink-0 p-3 bg-gradient">
                    <div class="filter-title" style="color: white">Бренд:</div>
                    <ul class="nav nav-pills flex-column mb-auto">
                        <li class="nav-item d-flex align-items-center mb-2">
                            <input type="checkbox" id="appleCheckbox" class="form-check-input me-2" onclick="filterProducts();">
                            <span>Apple</span>
                        </li>
                        <li class="nav-item d-flex align-items-center mb-2">
                            <input type="checkbox" id="googleCheckbox" class="form-check-input me-2" onclick="filterProducts();">
                            <span>Google</span>
                        </li>
                        <li class="nav-item d-flex align-items-center mb-2">
                            <input type="checkbox" id="jblCheckbox" class="form-check-input me-2" onclick="filterProducts();">
                            <span>JBL</span>
                        </li>
                        <li class="nav-item d-flex align-items-center mb-2">
                            <input type="checkbox" id="marshallCheckbox" class="form-check-input me-2" onclick="filterProducts();">
                            <span>Marshall</span>
                        </li>
                        <li class="nav-item d-flex align-items-center mb-2">
                            <input type="checkbox" id="prooveCheckbox" class="form-check-input me-2" onclick="filterProducts();">
                            <span>Proove</span>
                        </li>
                        <li class="nav-item d-flex align-items-center mb-2">
                            <input type="checkbox" id="sonyCheckbox" class="form-check-input me-2" onclick="filterProducts();">
                            <span>Sony</span>
                        </li>
                        <li class="nav-item d-flex align-items-center mb-2">
                            <input type="checkbox" id="samsungCheckbox" class="form-check-input me-2" onclick="filterProducts();">
                            <span>Samsung</span>
                        </li>
                    </ul>
                    <hr>
                    <div class="filter-title" style="color: white">Час роботи від батареї:</div>
                    <ul class="nav nav-pills flex-column mb-auto">
                        <li class="nav-item d-flex align-items-center mb-2">
                            <input type="checkbox" id="5-10hourCheckbox" class="form-check-input me-2" onclick="filterProducts();">
                            <span>Від 5 до 10 годин</span>
                        </li>
                        <li class="nav-item d-flex align-items-center mb-2">
                            <input type="checkbox" id="5hourCheckbox" class="form-check-input me-2" onclick="filterProducts();">
                            <span>До 5 годин</span>
                        </li>
                        <li class="nav-item d-flex align-items-center mb-2">
                            <input type="checkbox" id="12hourCheckbox" class="form-check-input me-2" onclick="filterProducts();">
                            <span>До 12 годин</span>
                        </li>
                        <li class="nav-item d-flex align-items-center mb-2">
                            <input type="checkbox" id="20hourCheckbox" class="form-check-input me-2" onclick="filterProducts();">
                            <span>До 20 годин</span>
                        </li>
                        <li class="nav-item d-flex align-items-center mb-2">
                            <input type="checkbox" id="30hourCheckbox" class="form-check-input me-2" onclick="filterProducts();">
                            <span>До 30 годин</span>
                        </li>
                        <li class="nav-item d-flex align-items-center mb-2">
                            <input type="checkbox" id="40hourCheckbox" class="form-check-input me-2" onclick="filterProducts();">
                            <span>До 40 годин</span>
                        </li>
                    </ul>
                    <hr>
                    <div class="filter-title" style="color: white">Шумопоглинання:</div>
                    <ul class="nav nav-pills flex-column mb-auto">
                        <li class="nav-item d-flex align-items-center mb-2">
                            <input type="checkbox" id="yesCheckbox" class="form-check-input me-2" onclick="filterProducts();">
                            <span>Так</span>
                        </li>
                        <li class="nav-item d-flex align-items-center mb-2">
                            <input type="checkbox" id="noCheckbox" class="form-check-input me-2" onclick="filterProducts();">
                            <span>Ні</span>
                        </li>
                    </ul>
                    <hr>
                    <div class="filter-title" style="color: white">Колір пристрою:</div>
                    <ul class="nav nav-pills flex-column mb-auto">
                        <li class="nav-item d-flex align-items-center mb-2">
                            <input type="checkbox" id="colorBlackCheckbox" class="form-check-input me-2" onclick="filterProducts();">
                            <span>Black</span>
                        </li>
                        <li class="nav-item d-flex align-items-center mb-2">
                            <input type="checkbox" id="colorWhiteCheckbox" class="form-check-input me-2" onclick="filterProducts();">
                            <span>White</span>
                        </li>
                        <li class="nav-item d-flex align-items-center mb-2">
                            <input type="checkbox" id="colorBlueCheckbox" class="form-check-input me-2" onclick="filterProducts();">
                            <span>Blue</span>
                        </li>
                        <li class="nav-item d-flex align-items-center mb-2">
                            <input type="checkbox" id="colorYellowCheckbox" class="form-check-input me-2" onclick="filterProducts();">
                            <span>Yellow</span>
                        </li>
                        <li class="nav-item d-flex align-items-center mb-2">
                            <input type="checkbox" id="colorOrangeCheckbox" class="form-check-input me-2" onclick="filterProducts();">
                            <span>Orange</span>
                        </li>
                        <li class="nav-item d-flex align-items-center mb-2">
                            <input type="checkbox" id="colorSilverCheckbox" class="form-check-input me-2" onclick="filterProducts();">
                            <span>Silver</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-8">
                <div id="product-list">
                    <h3>Список товарів:</h3>
                    <div id="products" class="row"></div>
                </div>
            </div>
        </div>
    </div>

    <script>
        const products = [
            {
                name: 'Наушники TWS Sony WF-C500 (White)',
                brand: 'sony',
                soundproofing: 'no',
                color: 'White',
                time: '30hour',
                images: [
                    'https://yabloki.ua/media/cache/sylius_shop_product_original/e9/c1/navushniki-tws-sony-wf-c500-white-wfc500w-ce7_c6a7af38-e390-4aaa-bac8-980f79afb3e1-5.png.webp',
                    'https://yabloki.ua/media/cache/sylius_shop_product_original/ab/8c/navushniki-tws-sony-wf-c500-white-wfc500w-ce7_c6a7af38-e390-4aaa-bac8-980f79afb3e1-2.png.webp',
                    'https://yabloki.ua/media/cache/sylius_shop_product_original/13/e1/navushniki-tws-sony-wf-c500-white-wfc500w-ce7_c6a7af38-e390-4aaa-bac8-980f79afb3e1-1.png.webp'
                ],
                link: 'https://yabloki.ua/rus/navushniki-tws-sony-wf-c500-white-wfc500w-ce7-49165-31530094.html'
            },
            {
                name: 'Наушники JBL Tune Flex (Blue)',
                brand: 'jbl',
                soundproofing: 'yes',
                color: 'Blue',
                time: '20hour',
                images: [
                    'https://yabloki.ua/media/cache/sylius_shop_product_original/40/da/navushniki-jbl-tune-flex-blue-jbltflexblu_f0cdbe9a-3083-4589-acca-ee1986d31744-8.png.webp',
                    'https://yabloki.ua/media/cache/sylius_shop_product_original/97/4d/navushniki-jbl-tune-flex-blue-jbltflexblu_f0cdbe9a-3083-4589-acca-ee1986d31744-3.png.webp',
                    'https://yabloki.ua/media/cache/sylius_shop_product_original/ab/f7/navushniki-jbl-tune-flex-blue-jbltflexblu_f0cdbe9a-3083-4589-acca-ee1986d31744-6.png.webp'
                ],
                link: 'https://jabko.ua/gadzheti-i-drugoe/naushniki/naushniki-jbl/navushniki-jbl-tune-beam-blue-jbltbeamblu'
            },
            {
                name: 'Навушники Samsung Galaxy Buds FE SM-R400 (Silver)',
                brand: 'samsung',
                soundproofing: 'yes',
                color: 'Silver',
                time: '40hour',
                images: [
                    'https://yabloki.ua/media/cache/sylius_shop_product_original/f5/38/navushniki-samsung-galaxy-buds3-silver-sm-r530nzaasek_8bdee398-a376-4893-8f78-121778f30d69-5.png.webp',
                    'https://yabloki.ua/media/cache/sylius_shop_product_original/8a/2e/navushniki-samsung-galaxy-buds3-silver-sm-r530nzaasek_8bdee398-a376-4893-8f78-121778f30d69-6.png.webp',
                    'https://yabloki.ua/media/cache/sylius_shop_product_original/b4/1e/navushniki-samsung-galaxy-buds3-silver-sm-r530nzaasek_8bdee398-a376-4893-8f78-121778f30d69-2.png.webp'
                ],
                link: 'https://yabloki.ua/rus/navushniki-samsung-galaxy-buds3-silver-sm-r530nzaasek-57080.html'
            },
            {
                name: 'Навушники Apple AirPods Pro 2 with MagSafe Charging Case',
                brand: 'apple',
                soundproofing: 'yes',
                color: 'White',
                time: '12hour',
                images: [
                    'https://yabloki.ua/media/cache/sylius_shop_product_original/01/d8/air-pods-pro-2-1.png.webp',
                    'https://yabloki.ua/media/cache/sylius_shop_product_original/3e/7d/air-pods-pro-2-2.png.webp',
                    'https://yabloki.ua/media/cache/sylius_shop_product_original/c5/14/air-pods-pro-2-3.png.webp'
                ],
                link: 'https://jabko.ua/apple-airpods/apple-airpods-pro/apple-airpods-pro-2-usb-c-charging-case-2023'
            },
            {
                name: 'Навушники Apple AirPods 3 with Lightning Charging Case',
                brand: 'apple',
                soundproofing: 'yes',
                color: 'White',
                time: '5-10hour',
                images: [
                    'https://yabloki.ua/media/cache/sylius_shop_product_original/b6/8c/airpods-3-mme73-1.png.webp',
                    'https://yabloki.ua/media/cache/sylius_shop_product_original/79/45/airpods-3-mme73-2.png.webp',
                    'https://yabloki.ua/media/cache/sylius_shop_product_original/a9/b8/airpods-3-mme73-3.png.webp'
                ],
                link: 'https://jabko.ua/apple-airpods/naushniki-apple-airpods/naushniki-apple-airpods-3-with-lightning-charging-case--mpny3-'
            },
            {
                name: 'Навушники Google Pixel Buds Pro (Charcoal)',
                brand: 'google',
                soundproofing: 'yes',
                color: 'White',
                time: '20hour',
                images: [
                    'https://yabloki.ua/media/cache/sylius_shop_product_original/a8/0b/navushniki-google-pixel-buds-pro-charcoal-ga03201_0c6f87c7-2f6d-4140-8963-ac88a1e11829-1.png.webp',
                    'https://yabloki.ua/media/cache/sylius_shop_product_original/4a/60/navushniki-google-pixel-buds-pro-charcoal-ga03201_0c6f87c7-2f6d-4140-8963-ac88a1e11829-2.png.webp',
                    'https://yabloki.ua/media/cache/sylius_shop_product_original/d7/a5/navushniki-google-pixel-buds-pro-charcoal-ga03201_0c6f87c7-2f6d-4140-8963-ac88a1e11829-3.png.webp',
                    'https://yabloki.ua/media/cache/sylius_shop_product_original/27/ef/navushniki-google-pixel-buds-pro-charcoal-ga03201_0c6f87c7-2f6d-4140-8963-ac88a1e11829-4.png.webp',
                ],
                link: 'https://jabko.ua/gadzheti-i-drugoe/naushniki/navushniki-google-pixel-buds-pro-charcoal'
            },
            {
                name: 'Навушники Marshall Headphones Minor IV (Black)',
                brand: 'marshall',
                soundproofing: 'no',
                color: 'Black',
                time: '30hour',
                images: [
                    'https://yabloki.ua/media/cache/sylius_shop_product_original/5d/43/navushniki-marshall-minor-iv-black-1006653_0be64394-0180-48ba-b41a-4d0c7bb5c0de-1.png.webp',
                    'https://yabloki.ua/media/cache/sylius_shop_product_original/a3/4d/navushniki-marshall-minor-iv-black-1006653_0be64394-0180-48ba-b41a-4d0c7bb5c0de-2.png.webp',
                    'https://yabloki.ua/media/cache/sylius_shop_product_original/1d/e9/navushniki-marshall-minor-iv-black-1006653_0be64394-0180-48ba-b41a-4d0c7bb5c0de-4.png.webp'
                ],
                link: 'https://yabloki.ua/rus/navushniki-marshall-minor-iv-black-1006653-56389.html'
            },
            {
                name: 'Навушники Proove Orion TWS (White)',
                brand: 'proove',
                soundproofing: 'yes',
                color: 'White',
                time: '5hour',
                images: [
                    'https://yabloki.ua/media/cache/sylius_shop_product_original/cc/f9/bezdrotovi-navushniki-proove-orion-tws-white_828df0ad-bf6a-410a-9655-c4e369caabe4-2.png.webp',
                    'https://yabloki.ua/media/cache/sylius_shop_product_original/91/15/bezdrotovi-navushniki-proove-orion-tws-white_828df0ad-bf6a-410a-9655-c4e369caabe4-1.png.webp'
                ],
                link: 'https://yabloki.ua/rus/naushniki-adidas-zne-01-true-wireless-night-grey-1005989-51994-e96b68e2.html'
            },
            {
                name: 'Наушники JBL Tune 230 NC TWS (Orange-Sand)',
                brand: 'jbl',
                soundproofing: 'yes',
                color: 'Orange',
                time: '5-10hour',
                images: [
                    'https://yabloki.ua/media/cache/sylius_shop_product_original/44/99/navushniki-jbl-tune-230-nc-tws-sand-jblt230nctwssan_d5b8adc2-06c1-4267-8872-c9d3d5f5a3a6-4.png.webp',
                    'https://yabloki.ua/media/cache/sylius_shop_product_original/1c/03/navushniki-jbl-tune-230-nc-tws-sand-jblt230nctwssan_d5b8adc2-06c1-4267-8872-c9d3d5f5a3a6-1.png.webp',
                    'https://yabloki.ua/media/cache/sylius_shop_product_original/7a/35/navushniki-jbl-tune-230-nc-tws-sand-jblt230nctwssan_d5b8adc2-06c1-4267-8872-c9d3d5f5a3a6-3.png.webp',
                ],
                link: 'https://yabloki.ua/rus/navushniki-jbl-tune-230-nc-tws-sand-jblt230nctwssan-47452-bdb95c59.html'
            }
        ];

        function renderProducts(filtered = products) {
            const productContainer = document.getElementById('products');
            productContainer.innerHTML = '';

            filtered.forEach(product => {
                const productDiv = document.createElement('div');
                productDiv.className = 'col-md-4 product';
                productDiv.dataset.brand = product.brand;
                productDiv.dataset.soundproofing = product.soundproofing;
                productDiv.dataset.color = product.color;
                productDiv.dataset.time = product.time;

                let currentIndex = 0;

                const imgContainer = document.createElement('div');
                imgContainer.className = 'img-container';

                const imgElement = document.createElement('img');
                imgElement.src = product.images[currentIndex];
                imgElement.alt = product.name;
                imgContainer.appendChild(imgElement);

                const dotContainer = document.createElement('div');
                dotContainer.className = 'dot-container';

                product.images.forEach((_, index) => {
                    const dot = document.createElement('span');
                    dot.className = 'dot';
                    dot.onclick = () => { currentIndex = index; updateImage(); };
                    dotContainer.appendChild(dot);
                });

                const updateImage = () => {
                    imgElement.src = product.images[currentIndex];
                    dotContainer.querySelectorAll('.dot').forEach((dot, idx) => {
                        dot.classList.toggle('active', idx === currentIndex);
                    });
                };

                const createButton = (text, callback) => {
                    const button = document.createElement('button');
                    button.innerHTML = text;
                    button.className = 'circle-button';
                    button.onclick = callback;
                    return button;
                };

                const buttonContainer = document.createElement('div');
                buttonContainer.className = 'button-container';
                buttonContainer.appendChild(createButton('&lt;', () => {
                    currentIndex = (currentIndex - 1 + product.images.length) % product.images.length;
                    updateImage();
                }));
                buttonContainer.appendChild(dotContainer);
                buttonContainer.appendChild(createButton('&gt;', () => {
                    currentIndex = (currentIndex + 1) % product.images.length;
                    updateImage();
                }));

                productDiv.innerHTML = `<h5>${product.name}</h5>`;
                productDiv.prepend(imgContainer);
                productDiv.appendChild(buttonContainer);

                const detailButton = document.createElement('a');
                detailButton.href = product.link;
                detailButton.className = 'btn btn-primary product-link';
                detailButton.innerHTML = 'Детальніше';
                productDiv.appendChild(detailButton);

                productContainer.appendChild(productDiv);
            });
        }

        function filterProducts() {
            const filters = {
                brand: ['apple', 'google', 'jbl', 'marshall', 'proove', 'sony', 'samsung'].filter(b => document.getElementById(`${b}Checkbox`)?.checked),
                soundproofing: ['yes', 'no'].filter(s => document.getElementById(`${s}Checkbox`)?.checked),
                color: ['black', 'white', 'blue', 'yellow', 'orange', 'silver'].filter(c => document.getElementById(`color${c.charAt(0).toUpperCase() + c.slice(1)}Checkbox`)?.checked),
                time: ['5-10hour', '5hour', '12hour', '20hour', '30hour', '40hour'].filter(t => document.getElementById(`${t}Checkbox`)?.checked),
            };

            const matchesFilter = (product, filterKey) =>
                !filters[filterKey].length || filters[filterKey].includes(product[filterKey]?.toLowerCase());

            const filteredProducts = products.filter(product => {
                const brandMatch = matchesFilter(product, 'brand');
                const soundproofingMatch = matchesFilter(product, 'soundproofing');
                const colorMatch = matchesFilter(product, 'color');
                const timeMatch = matchesFilter(product, 'time');

                return brandMatch && soundproofingMatch && colorMatch && timeMatch;
            });

            renderProducts(filteredProducts);
        }



        // Вызовите функцию рендеринга при загрузке страницы
        renderProducts();
    </script>

    <style>
        .filter-title {
            font-size: 1.5em;
            color: #333;
            margin-bottom: 15px;
        }
        .nav-item {
            margin-bottom: 10px; /* Отступ между элементами списка */
        }
        .form-check-input {
            cursor: pointer;
        }
        .product {
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 10px;
            margin-bottom: 20px;
            text-align: center;
            transition: transform 0.2s; /* Анимация при наведении */
        }
        .product img {
            width: 260px; /* Установите желаемую ширину */
            height: 300px; /* Установите желаемую высоту */
            object-fit: cover; /* Обеспечивает корректное отображение изображения без искажений */
            border-radius: 5px; /* Закругление углов */
            padding: 20px;
        }
        .product:hover {
            transform: scale(1.05); /* Увеличение карточки при наведении */
        }
        .hidden {
            display: none; /* Скрытие элементов */
        }
        .product-link {
            display: none; /* Показать кнопку */
            margin-top: 10px; /* Отступ сверху */
            background-color: #2d3748; /* Новый цвет фона (например, зеленый) */
            color: white; /* Цвет текста */
            padding: 10px 20px; /* Отступы внутри кнопки */
            border: none; /* Убираем границу */
            border-radius: 5px; /* Закругление углов */
            text-decoration: none; /* Убираем подчеркивание */
            transition: background-color 0.3s; /* Плавный переход цвета фона */
        }

        .product:hover .product-link {
            display: inline-block; /* Показать кнопку при наведении на карточку товара */
        }
        .product-link:hover {
            background-color: #718096; /* Цвет фона при наведении */
        }
        .img-container {
            position: relative;
            text-align: center; /* Центрирование содержимого */
        }

        .button-container {
            display: flex; /* Используем flexbox для размещения кнопок */
            justify-content: center; /* Центрируем кнопки */
            margin-top: 5px; /* Отступ сверху */
        }

        .circle-button {
            background-color: #fff; /* Цвет кнопки */
            border: none;
            border-radius: 50%; /* Делает кнопку круглой */
            color: #111; /* Цвет текста */
            cursor: pointer;
            font-size: 16px; /* Размер текста */
            height: 20px; /* Высота кнопки */
            width: 20px; /* Ширина кнопки */
            display: flex; /* Для центрирования текста */
            align-items: center; /* Вертикальное центрирование */
            justify-content: center; /* Горизонтальное центрирование */
            margin: 0 5px; /* Отступ между кнопками */
            transition: background-color 0.3s; /* Плавный переход для фона */
        }

        .circle-button:hover {
            background-color: gray; /* Цвет фона при наведении */
        }

        .dot-container {
            display: flex; /* Используем flexbox для размещения точек */
            justify-content: center; /* Центрируем точки */
            margin-top: 5px; /* Отступ сверху */
        }

        .dot {
            height: 10px;
            width: 10px;
            margin: 0 2px; /* Отступ между точками */
            border-radius: 50%; /* Делает точку круглой */
            background-color: gray; /* Цвет точек */
            display: inline-block;
            cursor: pointer;
        }

        .dot.active {
            background-color: #4a5568; /* Цвет активной точки */
        }
    </style>
@endsection
