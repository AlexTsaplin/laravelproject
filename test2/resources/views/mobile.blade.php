@extends('layout')

@section('title')Мобільні телефони@endsection

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
                            <span>Google Pixel</span>
                        </li>
                        <li class="nav-item d-flex align-items-center mb-2">
                            <input type="checkbox" id="samsungCheckbox" class="form-check-input me-2" onclick="filterProducts();">
                            <span>Samsung</span>
                        </li>
                    </ul>
                    <hr>
                    <div class="filter-title" style="color: white">Об'єм пам'яті:</div>
                    <ul class="nav nav-pills flex-column mb-auto">
                        <li class="nav-item d-flex align-items-center mb-2">
                            <input type="checkbox" id="memory128GBCheckbox" class="form-check-input me-2" onclick="filterProducts();">
                            <span>128GB</span>
                        </li>
                        <li class="nav-item d-flex align-items-center mb-2">
                            <input type="checkbox" id="memory256GBCheckbox" class="form-check-input me-2" onclick="filterProducts();">
                            <span>256GB</span>
                        </li>
                        <li class="nav-item d-flex align-items-center mb-2">
                            <input type="checkbox" id="memory512GBCheckbox" class="form-check-input me-2" onclick="filterProducts();">
                            <span>512GB</span>
                        </li>
                        <li class="nav-item d-flex align-items-center mb-2">
                            <input type="checkbox" id="memory1TBCheckbox" class="form-check-input me-2" onclick="filterProducts();">
                            <span>1TB</span>
                        </li>
                    </ul>
                    <hr>
                    <div class="filter-title" style="color: white">Оперативна пам'ять:</div>
                    <ul class="nav nav-pills flex-column mb-auto">
                        <li class="nav-item d-flex align-items-center mb-2">
                            <input type="checkbox" id="ram6GBCheckbox" class="form-check-input me-2" onclick="filterProducts();">
                            <span>6GB</span>
                        </li>
                        <li class="nav-item d-flex align-items-center mb-2">
                            <input type="checkbox" id="ram8GBCheckbox" class="form-check-input me-2" onclick="filterProducts();">
                            <span>8GB</span>
                        </li>
                        <li class="nav-item d-flex align-items-center mb-2">
                            <input type="checkbox" id="ram12GBCheckbox" class="form-check-input me-2" onclick="filterProducts();">
                            <span>12GB</span>
                        </li>
                        <li class="nav-item d-flex align-items-center mb-2">
                            <input type="checkbox" id="ram16GBCheckbox" class="form-check-input me-2" onclick="filterProducts();">
                            <span>16GB</span>
                        </li>
                    </ul>
                    <hr>
                    <div class="filter-title" style="color: white">Діагональ екрану:</div>
                    <ul class="nav nav-pills flex-column mb-auto">
                        <li class="nav-item d-flex align-items-center mb-2">
                            <input type="checkbox" id="screenSize61Checkbox" class="form-check-input me-2" onclick="filterProducts();">
                            <span>6.1"</span>
                        </li>
                        <li class="nav-item d-flex align-items-center mb-2">
                            <input type="checkbox" id="screenSize62Checkbox" class="form-check-input me-2" onclick="filterProducts();">
                            <span>6.2"</span>
                        </li>
                        <li class="nav-item d-flex align-items-center mb-2">
                            <input type="checkbox" id="screenSize63Checkbox" class="form-check-input me-2" onclick="filterProducts();">
                            <span>6.3"</span>
                        </li>
                        <li class="nav-item d-flex align-items-center mb-2">
                            <input type="checkbox" id="screenSize64Checkbox" class="form-check-input me-2" onclick="filterProducts();">
                            <span>6.4"</span>
                        </li>
                        <li class="nav-item d-flex align-items-center mb-2">
                            <input type="checkbox" id="screenSize66Checkbox" class="form-check-input me-2" onclick="filterProducts();">
                            <span>6.6"</span>
                        </li>
                        <li class="nav-item d-flex align-items-center mb-2">
                            <input type="checkbox" id="screenSize67Checkbox" class="form-check-input me-2" onclick="filterProducts();">
                            <span>6.7"</span>
                        </li>
                        <li class="nav-item d-flex align-items-center mb-2">
                            <input type="checkbox" id="screenSize68Checkbox" class="form-check-input me-2" onclick="filterProducts();">
                            <span>6.8"</span>
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
                            <input type="checkbox" id="colorPinkCheckbox" class="form-check-input me-2" onclick="filterProducts();">
                            <span>Pink</span>
                        </li>
                        <li class="nav-item d-flex align-items-center mb-2">
                            <input type="checkbox" id="colorGreenCheckbox" class="form-check-input me-2" onclick="filterProducts();">
                            <span>Green</span>
                        </li>
                        <li class="nav-item d-flex align-items-center mb-2">
                            <input type="checkbox" id="colorGrayCheckbox" class="form-check-input me-2" onclick="filterProducts();">
                            <span>Gray</span>
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
                name: 'Apple iPhone 15 Pro 128GB (Black Titanium)',
                brand: 'apple',
                memory: '128GB',
                ram: '6GB',
                screenSize: '6.1"',
                color: 'Black',
                images: [
                    'https://yabloki.ua/media/cache/sylius_shop_product_original/94/3c/iphone-15-pro-128gb-black-titanium-e-sim_59abbd6d-c477-4b8f-a270-1dbade20f1a0-1.png.webp',
                    'https://yabloki.ua/media/cache/sylius_shop_product_original/cd/d4/iphone-15-pro-128gb-black-titanium-e-sim_59abbd6d-c477-4b8f-a270-1dbade20f1a0-2.png.webp',
                    'https://yabloki.ua/media/cache/sylius_shop_product_original/f8/65/iphone-15-pro-128gb-black-titanium-e-sim_59abbd6d-c477-4b8f-a270-1dbade20f1a0-3.png.webp',
                ],
                link: 'https://jabko.ua/iphone/apple-iphone-15-pro/apple-iphone-15-pro-128gb-black-titanium'
            },
            {
                name: 'Apple iPhone 13 128GB (Pink)',
                brand: 'apple',
                memory: '128GB',
                screenSize: '6.1"',
                color: 'Pink',
                images: [
                    'https://yabloki.ua/media/cache/sylius_shop_product_original/f0/7a/iphone-13-pink-128gb-3.png.webp',
                    'https://yabloki.ua/media/cache/sylius_shop_product_original/0b/13/iphone-13-pink-128gb-1.png.webp'
                ],
                link: 'https://jabko.ua/iphone/apple-iphone-13/apple-iphone-13-128gb--pink-'
            },
            {
                name: 'Google Pixel 8 8/128GB (Obsidian)',
                brand: 'google',
                memory: '128GB',
                ram: '8GB',
                screenSize: '6.2"',
                color: 'Black',
                images: [
                    'https://yabloki.ua/media/cache/sylius_shop_product_original/61/4e/smartfon-google-pixel-8-8-128gb-obsidian_b2bceb90-cc99-45ce-9406-901a8e8b4207-2.png.webp',
                    'https://yabloki.ua/media/cache/sylius_shop_product_original/ae/2a/smartfon-google-pixel-8-8-128gb-obsidian_b2bceb90-cc99-45ce-9406-901a8e8b4207-3.png.webp',
                    'https://yabloki.ua/media/cache/sylius_shop_product_original/29/96/smartfon-google-pixel-8-8-128gb-obsidian_b2bceb90-cc99-45ce-9406-901a8e8b4207-1.png.webp'
                ],
                link: 'https://jabko.ua/gadzheti-i-drugoe/smartfoni/smartfoni-google-pixel/google-pixel-8/smartfon-google-pixel-8-8-128--jade-'
            },
            {
                name: 'Samsung Galaxy S23 FE 5G 256GB (Green)',
                brand: 'samsung',
                memory: '256GB',
                ram: '8GB',
                screenSize: '6.1"',
                color: 'Green',
                images: [
                    'https://yabloki.ua/media/cache/sylius_shop_product_original/79/08/smartfon-galaxy-s23-fe-5g-256gb-mint-sm-s711blggsek_e10ec90b-7d94-4d3a-b7c4-88aa9b63a424-1.png.webp',
                    'https://yabloki.ua/media/cache/sylius_shop_product_original/70/71/smartfon-galaxy-s23-fe-5g-256gb-mint-sm-s711blggsek_e10ec90b-7d94-4d3a-b7c4-88aa9b63a424-9.png.webp',
                    'https://yabloki.ua/media/cache/sylius_shop_product_original/e6/c8/smartfon-galaxy-s23-fe-5g-256gb-mint-sm-s711blggsek_e10ec90b-7d94-4d3a-b7c4-88aa9b63a424-5.png.webp'
                ],
                link: 'https://yabloki.ua/smartfon-galaxy-s23-fe-5g-256gb-mint-sm-s711blggsek-54994.html'
            },
            {
                name: 'Samsung Galaxy S24 FE 5G 128GB (Yellow)',
                brand: 'samsung',
                memory: '128GB',
                ram: '8GB',
                screenSize: '6.2"',
                color: 'Yellow',
                images: [
                    'https://yabloki.ua/media/cache/sylius_shop_product_original/cf/98/smartfon-samsung-galaxy-s24-fe-5g-128gb-yellow-sm-s721bzydeuc_25504c25-3b4d-42a0-bb2a-173f66780b0d-5.png.webp',
                    'https://yabloki.ua/media/cache/sylius_shop_product_original/cd/0f/smartfon-samsung-galaxy-s24-fe-5g-128gb-yellow-sm-s721bzydeuc_25504c25-3b4d-42a0-bb2a-173f66780b0d-5.png.webp',
                    'https://yabloki.ua/media/cache/sylius_shop_product_original/24/26/smartfon-samsung-galaxy-s24-fe-5g-128gb-yellow-sm-s721bzydeuc_25504c25-3b4d-42a0-bb2a-173f66780b0d-9.png.webp'
                ],
                link: 'https://yabloki.ua/smartfon-samsung-galaxy-s24-fe-5g-128gb-yellow-sm-s721bzydeuc-58244.html'
            },
            {
                name: 'Apple iPhone 15 256GB (Blue)',
                brand: 'apple',
                memory: '256GB',
                ram: '6GB',
                screenSize: '6.1"',
                color: 'Blue',
                images: [
                    'https://yabloki.ua/media/cache/sylius_shop_product_original/12/5b/iphone-15-blue-128-mb-1.png.webp',
                    'https://yabloki.ua/media/cache/sylius_shop_product_original/04/3e/iphone-15-blue-128-mb-4.png.webp',
                ],
                link: 'https://jabko.ua/iphone/apple-iphone-15-/apple-iphone-15-256gb--blue-'
            },
            {
                name: 'Apple iPhone 14 Plus 256GB (Midnight)',
                brand: 'apple',
                memory: '256GB',
                ram: '6GB',
                screenSize: '6.7"',
                color: 'Black',
                images: [
                    'https://yabloki.ua/media/cache/sylius_shop_product_original/ae/d0/iphone-14-plus-midnight-128gb-1.png.webp',
                    'https://yabloki.ua/media/cache/sylius_shop_product_original/0c/00/iphone-14-plus-midnight-128gb-2.png.webp',
                ],
                link: 'https://jabko.ua/iphone/apple-iphone-14-plus/apple-iphone-14-mini-256gb--midnight-'
            },
            {
                name: 'Apple iPhone 14 Plus 128GB (Purple)',
                brand: 'apple',
                memory: '128GB',
                ram: '6GB',
                screenSize: '6.7"',
                color: 'Purple',
                images: [
                    'https://yabloki.ua/media/cache/sylius_shop_product_original/d4/2d/iphone-14-plus-purple-128gb-2.png.webp',
                    'https://yabloki.ua/media/cache/sylius_shop_product_original/d4/01/iphone-14-plus-purple-128gb-1.png.webp',
                ],
                link: 'https://jabko.ua/iphone/apple-iphone-14-plus/apple-iphone-14-mini-128gb--pink-'
            },
            {
                name: 'Samsung Galaxy-A55 5G 256GB (Blue)',
                brand: 'samsung',
                memory: '128GB',
                ram: '8GB',
                screenSize: '6.6"',
                color: 'Blue',
                images: [
                    'https://yabloki.ua/media/cache/sylius_shop_product_original/fd/7e/smartfon-galaxy-a55-5g-256gb-light-blue-sm-a556blbceuc_54b8c60d-1f9b-445d-9684-1583cf998444-1.png.webp',
                    'https://yabloki.ua/media/cache/sylius_shop_product_original/85/fa/smartfon-galaxy-a55-5g-256gb-light-blue-sm-a556blbceuc_54b8c60d-1f9b-445d-9684-1583cf998444-2.png.webp',
                    'https://yabloki.ua/media/cache/sylius_shop_product_original/00/43/smartfon-galaxy-a55-5g-256gb-light-blue-sm-a556blbceuc_54b8c60d-1f9b-445d-9684-1583cf998444-4.png.webp'
                ],
                link: 'https://yabloki.ua/smartfon-galaxy-a55-5g-256gb-light-blue-sm-a556blbceuc-55000.html'
            }
        ];

        function renderProducts(filtered = products) {
            const productContainer = document.getElementById('products');
            productContainer.innerHTML = '';

            filtered.forEach(product => {
                const productDiv = document.createElement('div');
                productDiv.className = 'col-md-4 product';
                productDiv.dataset.brand = product.brand;
                productDiv.dataset.memory = product.memory;
                productDiv.dataset.ram = product.ram;
                productDiv.dataset.screenSize = product.screenSize;
                productDiv.dataset.color = product.color;

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
                brand: ['apple', 'google', 'samsung'].filter(b => document.getElementById(`${b}Checkbox`).checked),
                memory: ['128GB', '256GB', '512GB', '1TB'].filter(m => document.getElementById(`memory${m}Checkbox`).checked),
                ram: ['6GB', '8GB', '12GB', '16GB'].filter(r => document.getElementById(`ram${r}Checkbox`).checked),
                screenSize: ['6.1"', '6.2"', '6.3"', '6.4"', '6.6"', '6.7"', '6.8"'].filter(s => document.getElementById(`screenSize${s.replace('.', '').replace('"', '')}Checkbox`).checked),
                color: ['black', 'white', 'blue', 'yellow', 'pink', 'green', 'gray'].filter(c => document.getElementById(`color${c.charAt(0).toUpperCase() + c.slice(1)}Checkbox`).checked)
            };

            const matchesFilter = (product, filterKey) =>
                !filters[filterKey].length || filters[filterKey].includes(product[filterKey].toLowerCase());

            const filteredProducts = products.filter(product =>
                matchesFilter(product, 'brand') &&
                (filters.memory.length === 0 || filters.memory.includes(product.memory)) &&
                (filters.ram.length === 0 || filters.ram.includes(product.ram)) &&
                matchesFilter(product, 'screenSize') &&
                matchesFilter(product, 'color')
            );

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
            width: 250px; /* Установите желаемую ширину */
            height: 300px; /* Установите желаемую высоту */
            object-fit: cover; /* Обеспечивает корректное отображение изображения без искажений */
            border-radius: 5px; /* Закругление углов */
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
