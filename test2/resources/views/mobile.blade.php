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
                    'https://img.jabko.ua/image/cache/catalog/products/2023/09/122237/1-1397x1397.jpg.webp',
                    'https://img.jabko.ua/image/cache/catalog/products/2023/09/122238/2-1397x1397.jpg.webp',
                    'https://img.jabko.ua/image/cache/catalog/products/2023/09/122238/4-1397x1397.jpg.webp',
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
                    'https://img.jabko.ua/image/cache/catalog/products/2021/09/142354/2021-09-14%2021.47.43-1397x1397.jpg.webp',
                    'https://img.jabko.ua/image/cache/catalog/products/2021/09/171252/5-1397x1397.jpg.webp',
                    'https://img.jabko.ua/image/cache/catalog/products/2021/09/171252/16-1397x1397.jpg.webp',
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
                    'https://img.jabko.ua/image/cache/catalog/products/2023/10/061529/Pixel8Obsidian-3-1397x1397.jpg.webp',
                    'https://img.jabko.ua/image/cache/catalog/products/2023/10/061528/Pixel8Obsidian-2-1397x1397.jpg.webp',
                    'https://img.jabko.ua/image/cache/catalog/products/2024/08/271048/12hygtfr-1397x1397.png.webp'
                ],
                link: 'https://jabko.ua/gadzheti-i-drugoe/smartfoni/smartfoni-google-pixel/google-pixel-8/smartfon-google-pixel-8-8-128--jade-'
            },
            {
                name: 'Samsung Galaxy S23 8/256GB (S911) (Green) (UA)',
                brand: 'samsung',
                memory: '256GB',
                ram: '8GB',
                screenSize: '6.1"',
                color: 'Green',
                images: [
                    'https://img.jabko.ua/image/cache/catalog/products/2023/08/221455/1-1397x1397.jpg.webp',
                    'https://img.jabko.ua/image/cache/catalog/products/2023/08/221455/2-1397x1397.jpg.webp',
                    'https://img.jabko.ua/image/cache/catalog/products/2024/01/111836/SamsungGalaxyS23Green-2%20(1)-1397x1397.jpg.webp'
                ],
                link: 'https://jabko.ua/gadzheti-i-drugoe/smartfoni/smartfoni-samsung/samsung-galaxy-s23/smartfon-samsung-galaxy-s23-s911-61-8256gb-2sim-3900mah-green'
            },
            {
                name: 'Samsung Galaxy S24 8/128GB (Amber Yellow) (S921) (UA)',
                brand: 'samsung',
                memory: '128GB',
                ram: '8GB',
                screenSize: '6.2"',
                color: 'Yellow',
                images: [
                    'https://img.jabko.ua/image/cache/catalog/products/2024/01/190936/43fdfdd-1397x1397.jpg.webp',
                    'https://img.jabko.ua/image/cache/catalog/products/2024/02/051055/SamsungGalaxyS24AmberYellow-13-1397x1397.jpeg.webp',
                    'https://img.jabko.ua/image/cache/catalog/products/2024/02/051055/SamsungGalaxyS24AmberYellow-12-1397x1397.jpeg.webp'
                ],
                link: 'https://jabko.ua/gadzheti-i-drugoe/smartfoni/smartfoni-samsung/samsung-galaxy-s24/smartfon-samsung-galaxy-s24-8128gb-amber-yellow-s921-ua'
            },
            {
                name: 'Apple iPhone 15 256GB (Blue)',
                brand: 'apple',
                memory: '256GB',
                ram: '6GB',
                screenSize: '6.1"',
                color: 'Blue',
                images: [
                    'https://img.jabko.ua/image/cache/catalog/products/2024/01/221756/ablue-1397x1397.jpeg.webp',
                    'https://img.jabko.ua/image/cache/catalog/products/2023/09/122253/iphone-15-finish-select-202309-6%20(4)%20(1)-1397x1397.jpg.webp',
                    'https://img.jabko.ua/image/cache/catalog/products/2024/06/241028/iPhone15Blue_1-(1)-1397x1397.jpg.webp'
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
                    'https://img.jabko.ua/image/cache/catalog/products/2022/09/072330/photo_2022-09-07_23-30-04%20(1)-1397x1397.jpg.webp',
                    'https://img.jabko.ua/image/cache/catalog/products/2024/06/241329/Midnight-1397x1397.jpg.webp',
                    'https://img.jabko.ua/image/cache/catalog/products/2022/09/081326/iphone-14-finish-select-202209-6%20(6)-1397x1397.jpg.webp'
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
                    'https://img.jabko.ua/image/cache/catalog/products/2022/09/072331/photo_2022-09-07_23-29-28-1397x1397.jpg.webp',
                    'https://img.jabko.ua/image/cache/catalog/products/2024/06/241329/Purple-1397x1397.jpg.webp',
                    'https://img.jabko.ua/image/cache/catalog/products/2022/09/081340/iphone-14-finish-select-202209-6-1397x1397.jpg.webp'
                ],
                link: 'https://jabko.ua/iphone/apple-iphone-14-plus/apple-iphone-14-mini-128gb--pink-'
            },
            {
                name: 'Samsung Galaxy A55 8/128GB (Yellow) (UA)',
                brand: 'samsung',
                memory: '128GB',
                ram: '8GB',
                screenSize: '6.6"',
                color: 'Yellow',
                images: [
                    'https://img.jabko.ua/image/cache/catalog/products/2024/07/251212/SM-A556BZYCEUC-1.png-1397x1397.jpg.webp',
                    'https://img.jabko.ua/image/cache/catalog/products/2024/07/251213/SM-A556BZYCEUC-5.png-1397x1397.jpg.webp',
                    'https://img.jabko.ua/image/cache/catalog/products/2024/07/251213/SM-A556BZYCEUC-4.png-1397x1397.jpg.webp'
                ],
                link: 'https://jabko.ua/gadzheti-i-drugoe/smartfoni/smartfoni-samsung/smartfony-samsung-galaxy-a55/smartfon-samsung-galaxy-a55-8128gb-yellow-ua'
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
