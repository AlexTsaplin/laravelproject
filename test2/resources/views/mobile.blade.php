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
                            <input type="checkbox" class="form-check-input me-2" onclick="filterProducts();">
                            <span>6.1"</span>
                        </li>
                        <li class="nav-item d-flex align-items-center mb-2">
                            <input type="checkbox" class="form-check-input me-2" onclick="filterProducts();">
                            <span>6.2"</span>
                        </li>
                        <li class="nav-item d-flex align-items-center mb-2">
                            <input type="checkbox" class="form-check-input me-2" onclick="filterProducts();">
                            <span>6.3"</span>
                        </li>
                        <li class="nav-item d-flex align-items-center mb-2">
                            <input type="checkbox" class="form-check-input me-2" onclick="filterProducts();">
                            <span>6.4"</span>
                        </li>
                        <li class="nav-item d-flex align-items-center mb-2">
                            <input type="checkbox" class="form-check-input me-2" onclick="filterProducts();">
                            <span>6.6"</span>
                        </li>
                        <li class="nav-item d-flex align-items-center mb-2">
                            <input type="checkbox" class="form-check-input me-2" onclick="filterProducts();">
                            <span>6.7"</span>
                        </li>
                        <li class="nav-item d-flex align-items-center mb-2">
                            <input type="checkbox" class="form-check-input me-2" onclick="filterProducts();">
                            <span>6.8"</span>
                        </li>
                    </ul>
                    <hr>
                    <div class="filter-title" style="color: white">Колір пристрою:</div>
                    <ul class="nav nav-pills flex-column mb-auto">
                        <li class="nav-item d-flex align-items-center mb-2">
                            <input type="checkbox" class="form-check-input me-2" onclick="filterProducts();">
                            <span>Black</span>
                        </li>
                        <li class="nav-item d-flex align-items-center mb-2">
                            <input type="checkbox" class="form-check-input me-2" onclick="filterProducts();">
                            <span>White</span>
                        </li>
                        <li class="nav-item d-flex align-items-center mb-2">
                            <input type="checkbox" class="form-check-input me-2" onclick="filterProducts();">
                            <span>Blue</span>
                        </li>
                        <li class="nav-item d-flex align-items-center mb-2">
                            <input type="checkbox" class="form-check-input me-2" onclick="filterProducts();">
                            <span>Yellow</span>
                        </li>
                        <li class="nav-item d-flex align-items-center mb-2">
                            <input type="checkbox" class="form-check-input me-2" onclick="filterProducts();">
                            <span>Pink</span>
                        </li>
                        <li class="nav-item d-flex align-items-center mb-2">
                            <input type="checkbox" class="form-check-input me-2" onclick="filterProducts();">
                            <span>Green</span>
                        </li>
                        <li class="nav-item d-flex align-items-center mb-2">
                            <input type="checkbox" class="form-check-input me-2" onclick="filterProducts();">
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
            }
        ];

        function renderProducts() {
            const productContainer = document.getElementById('products');
            productContainer.innerHTML = '';

            products.forEach(product => {
                const productDiv = document.createElement('div');
                productDiv.className = 'col-md-4 product';
                productDiv.setAttribute('data-brand', product.brand);
                productDiv.setAttribute('data-memory', product.memory);
                productDiv.setAttribute('data-ram', product.ram);
                productDiv.setAttribute('data-screen-size', product.screenSize);
                productDiv.setAttribute('data-color', product.color);

                let currentIndex = 0;

                const imgContainer = document.createElement('div');
                imgContainer.className = 'img-container';

                const imgElement = document.createElement('img');
                imgElement.src = product.images[currentIndex];
                imgElement.alt = product.name;

                const dotContainer = document.createElement('div');
                dotContainer.className = 'dot-container';

                product.images.forEach((_, index) => {
                    const dot = document.createElement('span');
                    dot.className = 'dot';
                    dot.onclick = () => {
                        currentIndex = index;
                        updateImage();
                    };
                    dotContainer.appendChild(dot);
                });

                function updateImage() {
                    imgElement.src = product.images[currentIndex];
                    const dots = dotContainer.querySelectorAll('.dot');
                    dots.forEach((dot, index) => {
                        dot.classList.toggle('active', index === currentIndex);
                    });
                }

                const prevButton = document.createElement('button');
                prevButton.innerHTML = '&lt;';
                prevButton.className = 'circle-button';
                prevButton.onclick = () => {
                    currentIndex = (currentIndex - 1 + product.images.length) % product.images.length;
                    updateImage();
                };

                const nextButton = document.createElement('button');
                nextButton.innerHTML = '&gt;';
                nextButton.className = 'circle-button';
                nextButton.onclick = () => {
                    currentIndex = (currentIndex + 1) % product.images.length;
                    updateImage();
                };

                imgContainer.appendChild(imgElement);

                const buttonContainer = document.createElement('div');
                buttonContainer.className = 'button-container';
                buttonContainer.appendChild(prevButton);
                buttonContainer.appendChild(dotContainer);
                buttonContainer.appendChild(nextButton);

                productDiv.innerHTML += `<h5>${product.name}</h5>`;
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
            const appleChecked = document.getElementById('appleCheckbox').checked;
            const googleChecked = document.getElementById('googleCheckbox').checked;
            const samsungChecked = document.getElementById('samsungCheckbox').checked;

            const memory128GBChecked = document.getElementById('memory128GBCheckbox').checked;
            const memory256GBChecked = document.getElementById('memory256GBCheckbox').checked;
            const memory512GBChecked = document.getElementById('memory512GBCheckbox').checked;
            const memory1TBChecked = document.getElementById('memory1TBCheckbox').checked;

            const ram6GBChecked = document.getElementById('ram6GBCheckbox').checked;
            const ram8GBChecked = document.getElementById('ram8GBCheckbox').checked;
            const ram12GBChecked = document.getElementById('ram12GBCheckbox').checked;
            const ram16GBChecked = document.getElementById('ram16GBCheckbox').checked;

            const filteredProducts = products.filter(product => {
                if (appleChecked && product.brand === 'apple') return true;
                if (googleChecked && product.brand === 'google') return true;
                if (samsungChecked && product.brand === 'samsung') return true;

                if (memory128GBChecked && product.memory === '128GB') return true;
                if (memory256GBChecked && product.memory === '256GB') return true;
                if (memory512GBChecked && product.memory === '512GB') return true;
                if (memory1TBChecked && product.memory === '1TB') return true;

                if (ram6GBChecked && product.ram === '6GB') return true;
                if (ram8GBChecked && product.ram === '8GB') return true;
                if (ram12GBChecked && product.ram === '12GB') return true;
                if (ram16GBChecked && product.ram === '16TB') return true;

                return !appleChecked && !googleChecked && !samsungChecked && !memory128GBChecked && !memory256GBChecked && !memory512GBChecked && !memory1TBChecked && !ram6GBChecked && !ram8GBChecked && !ram12GBChecked && !ram16GBChecked;


            });

            renderFilteredProducts(filteredProducts);
        }

        function renderFilteredProducts(filteredProducts) {
            const productContainer = document.getElementById('products');
            productContainer.innerHTML = ''; // Очистить контейнер

            filteredProducts.forEach(product => {
                const productDiv = document.createElement('div');
                productDiv.className = 'col-md-4 product';
                productDiv.setAttribute('data-brand', product.brand);

                let currentIndex = 0;

                const imgContainer = document.createElement('div');
                imgContainer.className = 'img-container';

                const imgElement = document.createElement('img');
                imgElement.src = product.images[currentIndex];
                imgElement.alt = product.name;

                const dotContainer = document.createElement('div');
                dotContainer.className = 'dot-container';

                product.images.forEach((_, index) => {
                    const dot = document.createElement('span');
                    dot.className = 'dot';
                    dot.onclick = () => {
                        currentIndex = index;
                        updateImage();
                    };
                    dotContainer.appendChild(dot);
                });

                function updateImage() {
                    imgElement.src = product.images[currentIndex];
                    const dots = dotContainer.querySelectorAll('.dot');
                    dots.forEach((dot, index) => {
                        dot.classList.toggle('active', index === currentIndex);
                    });
                }

                const prevButton = document.createElement('button');
                prevButton.innerHTML = '&lt;';
                prevButton.className = 'circle-button';
                prevButton.onclick = () => {
                    currentIndex = (currentIndex - 1 + product.images.length) % product.images.length;
                    updateImage();
                };

                const nextButton = document.createElement('button');
                nextButton.innerHTML = '&gt;';
                nextButton.className = 'circle-button';
                nextButton.onclick = () => {
                    currentIndex = (currentIndex + 1) % product.images.length;
                    updateImage();
                };

                imgContainer.appendChild(imgElement);

                const buttonContainer = document.createElement('div');
                buttonContainer.className = 'button-container';
                buttonContainer.appendChild(prevButton);
                buttonContainer.appendChild(dotContainer);
                buttonContainer.appendChild(nextButton);

                productDiv.innerHTML += `<h5>${product.name}</h5>`;
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
