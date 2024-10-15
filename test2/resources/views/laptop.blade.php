@extends('layout')

@section('title')Ноутбуки@endsection

@section('main_content')
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="d-flex flex-column flex-shrink-0 p-3 bg-gradient">
                    <div class="filter-title" style="color: white">Бренд:</div>
                    <ul class="nav nav-pills flex-column mb-auto">
                        <li class="nav-item d-flex align-items-center mb-2">
                            <input type="checkbox" id="asusCheckbox" class="form-check-input me-2" onclick="filterProducts();">
                            <span>Asus</span>
                        </li>
                        <li class="nav-item d-flex align-items-center mb-2">
                            <input type="checkbox" id="acerCheckbox" class="form-check-input me-2" onclick="filterProducts();">
                            <span>Acer</span>
                        </li>
                        <li class="nav-item d-flex align-items-center mb-2">
                            <input type="checkbox" id="dellCheckbox" class="form-check-input me-2" onclick="filterProducts();">
                            <span>Dell</span>
                        </li>
                        <li class="nav-item d-flex align-items-center mb-2">
                            <input type="checkbox" id="lenovoCheckbox" class="form-check-input me-2" onclick="filterProducts();">
                            <span>Lenovo</span>
                        </li>
                        <li class="nav-item d-flex align-items-center mb-2">
                            <input type="checkbox" id="appleCheckbox" class="form-check-input me-2" onclick="filterProducts();">
                            <span>Apple</span>
                        </li>
                    </ul>
                    <hr>
                    <div class="filter-title" style="color: white">Cерія:</div>
                    <ul class="nav nav-pills flex-column mb-auto">
                        <li class="nav-item d-flex align-items-center mb-2">
                            <input type="checkbox" id="legionCheckbox" class="form-check-input me-2" onclick="filterProducts();">
                            <span>Legion</span>
                        </li>
                        <li class="nav-item d-flex align-items-center mb-2">
                            <input type="checkbox" id="nitroCheckbox" class="form-check-input me-2" onclick="filterProducts();">
                            <span>Nitro</span>
                        </li>
                        <li class="nav-item d-flex align-items-center mb-2">
                            <input type="checkbox" id="thinkpadCheckbox" class="form-check-input me-2" onclick="filterProducts();">
                            <span>ThinkPad</span>
                        </li>
                        <li class="nav-item d-flex align-items-center mb-2">
                            <input type="checkbox" id="rogstrixCheckbox" class="form-check-input me-2" onclick="filterProducts();">
                            <span>ROG Strix</span>
                        </li>
                        <li class="nav-item d-flex align-items-center mb-2">
                            <input type="checkbox" id="vivobookCheckbox" class="form-check-input me-2" onclick="filterProducts();">
                            <span>Vivobook</span>
                        </li>
                        <li class="nav-item d-flex align-items-center mb-2">
                            <input type="checkbox" id="macbookCheckbox" class="form-check-input me-2" onclick="filterProducts();">
                            <span>MacBook</span>
                        </li>
                    </ul>
                    <hr>
                    <div class="filter-title" style="color: white">Процесор:</div>
                    <ul class="nav nav-pills flex-column mb-auto">
                        <li class="nav-item d-flex align-items-center mb-2">
                            <input type="checkbox" id="intel5Checkbox" class="form-check-input me-2" onclick="filterProducts();">
                            <span>Intel Core i5</span>
                        </li>
                        <li class="nav-item d-flex align-items-center mb-2">
                            <input type="checkbox" id="intel7Checkbox" class="form-check-input me-2" onclick="filterProducts();">
                            <span>Intel Core i7</span>
                        </li>
                        <li class="nav-item d-flex align-items-center mb-2">
                            <input type="checkbox" id="intel9Checkbox" class="form-check-input me-2" onclick="filterProducts();">
                            <span>Intel Core i9</span>
                        </li>
                        <li class="nav-item d-flex align-items-center mb-2">
                            <input type="checkbox" id="ryzen5Checkbox" class="form-check-input me-2" onclick="filterProducts();">
                            <span>AMD Ryzen 5</span>
                        </li>
                        <li class="nav-item d-flex align-items-center mb-2">
                            <input type="checkbox" id="ryzen7Checkbox" class="form-check-input me-2" onclick="filterProducts();">
                            <span>AMD Ryzen 7</span>
                        </li>
                        <li class="nav-item d-flex align-items-center mb-2">
                            <input type="checkbox" id="ryzen9Checkbox" class="form-check-input me-2" onclick="filterProducts();">
                            <span>AMD Ryzen 9</span>
                        </li>
                        <li class="nav-item d-flex align-items-center mb-2">
                            <input type="checkbox" id="m2Checkbox" class="form-check-input me-2" onclick="filterProducts();">
                            <span>Apple M2</span>
                        </li>
                        <li class="nav-item d-flex align-items-center mb-2">
                            <input type="checkbox" id="m3Checkbox" class="form-check-input me-2" onclick="filterProducts();">
                            <span>Apple M3</span>
                        </li>
                        <li class="nav-item d-flex align-items-center mb-2">
                            <input type="checkbox" id="m4Checkbox" class="form-check-input me-2" onclick="filterProducts();">
                            <span>Apple M4</span>
                        </li>
                    </ul>
                    <hr>
                    <div class="filter-title" style="color: white">Об'єм пам'яті:</div>
                    <ul class="nav nav-pills flex-column mb-auto">
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
                        <li class="nav-item d-flex align-items-center mb-2">
                            <input type="checkbox" id="memory2TBCheckbox" class="form-check-input me-2" onclick="filterProducts();">
                            <span>2TB</span>
                        </li>
                        <li class="nav-item d-flex align-items-center mb-2">
                            <input type="checkbox" id="memory3TBCheckbox" class="form-check-input me-2" onclick="filterProducts();">
                            <span>3TB</span>
                        </li>
                        <li class="nav-item d-flex align-items-center mb-2">
                            <input type="checkbox" id="memory4TBCheckbox" class="form-check-input me-2" onclick="filterProducts();">
                            <span>4TB</span>
                        </li>
                    </ul>
                    <hr>
                    <div class="filter-title" style="color: white">Оперативна пам'ять:</div>
                    <ul class="nav nav-pills flex-column mb-auto">
                        <li class="nav-item d-flex align-items-center mb-2">
                            <input type="checkbox" id="ram8GBCheckbox" class="form-check-input me-2" onclick="filterProducts();">
                            <span>8GB</span>
                        </li>
                        <li class="nav-item d-flex align-items-center mb-2">
                            <input type="checkbox" id="ram16GBCheckbox" class="form-check-input me-2" onclick="filterProducts();">
                            <span>16GB</span>
                        </li>
                        <li class="nav-item d-flex align-items-center mb-2">
                            <input type="checkbox" id="ram18GBCheckbox" class="form-check-input me-2" onclick="filterProducts();">
                            <span>18GB</span>
                        </li>
                        <li class="nav-item d-flex align-items-center mb-2">
                            <input type="checkbox" id="ram24GBCheckbox" class="form-check-input me-2" onclick="filterProducts();">
                            <span>24GB</span>
                        </li>
                        <li class="nav-item d-flex align-items-center mb-2">
                            <input type="checkbox" id="ram32GBCheckbox" class="form-check-input me-2" onclick="filterProducts();">
                            <span>32GB</span>
                        </li>
                        <li class="nav-item d-flex align-items-center mb-2">
                            <input type="checkbox" id="ram64GBCheckbox" class="form-check-input me-2" onclick="filterProducts();">
                            <span>64GB</span>
                        </li>
                        <li class="nav-item d-flex align-items-center mb-2">
                            <input type="checkbox" id="ram96GBCheckbox" class="form-check-input me-2" onclick="filterProducts();">
                            <span>96GB</span>
                        </li>
                    </ul>
                    <hr>
                    <div class="filter-title" style="color: white">Відеокарта:</div>
                    <ul class="nav nav-pills flex-column mb-auto">
                        <li class="nav-item d-flex align-items-center mb-2">
                            <input type="checkbox" id="radeonCheckbox" class="form-check-input me-2" onclick="filterProducts();">
                            <span>AMD Radeon</span>
                        </li>
                        <li class="nav-item d-flex align-items-center mb-2">
                            <input type="checkbox" id="nvidiaCheckbox" class="form-check-input me-2" onclick="filterProducts();">
                            <span>NVIDIA GeForce RTX</span>
                        </li>
                        <li class="nav-item d-flex align-items-center mb-2">
                            <input type="checkbox" id="gpuapple2Checkbox" class="form-check-input me-2" onclick="filterProducts();">
                            <span>Apple M2</span>
                        </li>
                        <li class="nav-item d-flex align-items-center mb-2">
                            <input type="checkbox" id="gpuapple3proCheckbox" class="form-check-input me-2" onclick="filterProducts();">
                            <span>Apple M3 Pro</span>
                        </li>
                    </ul>
                    <hr>
                    <div class="filter-title" style="color: white">Частота оновлення еікрана:</div>
                    <ul class="nav nav-pills flex-column mb-auto">
                        <li class="nav-item d-flex align-items-center mb-2">
                            <input type="checkbox" id="60HzCheckbox" class="form-check-input me-2" onclick="filterProducts();">
                            <span>60 Гц</span>
                        </li>
                        <li class="nav-item d-flex align-items-center mb-2">
                            <input type="checkbox" id="90HzCheckbox" class="form-check-input me-2" onclick="filterProducts();">
                            <span>90 Гц</span>
                        </li>
                        <li class="nav-item d-flex align-items-center mb-2">
                            <input type="checkbox" id="120HzCheckbox" class="form-check-input me-2" onclick="filterProducts();">
                            <span>120 Гц</span>
                        </li>
                        <li class="nav-item d-flex align-items-center mb-2">
                            <input type="checkbox" id="144HzCheckbox" class="form-check-input me-2" onclick="filterProducts();">
                            <span>144 Гц</span>
                        </li>
                        <li class="nav-item d-flex align-items-center mb-2">
                            <input type="checkbox" id="165HzCheckbox" class="form-check-input me-2" onclick="filterProducts();">
                            <span>165 Гц</span>
                        </li>
                        <li class="nav-item d-flex align-items-center mb-2">
                            <input type="checkbox" id="240HzCheckbox" class="form-check-input me-2" onclick="filterProducts();">
                            <span>240 Гц</span>
                        </li>
                    </ul>
                    <hr>
                    <div class="filter-title" style="color: white">Об'єм відеопам'яті:</div>
                    <ul class="nav nav-pills flex-column mb-auto">
                        <li class="nav-item d-flex align-items-center mb-2">
                            <input type="checkbox" id="video4Checkbox" class="form-check-input me-2" onclick="filterProducts();">
                            <span>4 GB</span>
                        </li>
                        <li class="nav-item d-flex align-items-center mb-2">
                            <input type="checkbox" id="video6Checkbox" class="form-check-input me-2" onclick="filterProducts();">
                            <span>6 GB</span>
                        </li>
                        <li class="nav-item d-flex align-items-center mb-2">
                            <input type="checkbox" id="video8Checkbox" class="form-check-input me-2" onclick="filterProducts();">
                            <span>8 GB</span>
                        </li>
                        <li class="nav-item d-flex align-items-center mb-2">
                            <input type="checkbox" id="video12Checkbox" class="form-check-input me-2" onclick="filterProducts();">
                            <span>12 GB</span>
                        </li>
                        <li class="nav-item d-flex align-items-center mb-2">
                            <input type="checkbox" id="video16Checkbox" class="form-check-input me-2" onclick="filterProducts();">
                            <span>16 GB</span>
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
                name: 'ASUS ROG Strix SCAR 16 (2024)',
                brand: 'asus',
                memory: '1TB',
                ram: '16GB',
                series: 'rogstrix',
                processor: 'intel9',
                gpu: 'nvidia',
                hz: '240Hz',
                videomemory: 'video16',
                images: [
                    'https://yabloki.ua/media/cache/sylius_shop_product_original/f0/55/16-asus-rog-strix-scar-16-g634jyr-ra041x-intel-i9-14900hx-32gb-1tbssd-nvd4090-16-win11-black-bag-mouse_6c2168e2-80e6-4b71-bed1-8c14a217fa1e-1.png.webp',
                    'https://yabloki.ua/media/cache/sylius_shop_product_original/47/67/16-asus-rog-strix-scar-16-g634jyr-ra041x-intel-i9-14900hx-32gb-1tbssd-nvd4090-16-win11-black-bag-mouse_6c2168e2-80e6-4b71-bed1-8c14a217fa1e-2.png.webp',
                    'https://yabloki.ua/media/cache/sylius_shop_product_original/d1/54/16-asus-rog-strix-scar-16-g634jyr-ra041x-intel-i9-14900hx-32gb-1tbssd-nvd4090-16-win11-black-bag-mouse_6c2168e2-80e6-4b71-bed1-8c14a217fa1e-3.png.webp',
                    'https://yabloki.ua/media/cache/sylius_shop_product_original/e0/8c/16-asus-rog-strix-scar-16-g634jyr-ra041x-intel-i9-14900hx-32gb-1tbssd-nvd4090-16-win11-black-bag-mouse_6c2168e2-80e6-4b71-bed1-8c14a217fa1e-4.png.webp'
                ],
                link: 'https://jabko.ua/gadzheti-i-drugoe/kompjuteri-i-noutbuki/noutbuki/noutbuki-asus/noutbuk-asus-rog-strix-scar-16-2024-core-i932gb-ram1tbrtx-4090'
            },
            {
                name: 'Dell XPS 17 9730 (2023)',
                brand: 'dell',
                memory: '1TB',
                ram: '16GB',
                processor: 'intel7',
                gpu: 'nvidia',
                hz: '60Hz',
                videomemory: 'video6',
                images: [
                    'https://img.jabko.ua/image/cache/catalog/products/2024/08/141656/3205740-1397x1397.jpg.webp',
                    'https://img.jabko.ua/image/cache/catalog/products/2024/08/141656/3205741-1397x1397.jpg.webp',
                    'https://img.jabko.ua/image/cache/catalog/products/2024/08/141656/3205743-1397x1397.jpg.webp',
                    'https://img.jabko.ua/image/cache/catalog/products/2024/08/141656/3205744-1397x1397.jpg.webp'
                ],
                link: 'https://jabko.ua/gadzheti-i-drugoe/kompjuteri-i-noutbuki/noutbuki/noutbuki-dell/noutbuk-dell-xps-17-9730-intel-core-i7-16gb-1tb-rtx-4050-j4tpx-global'
            },
            {
                name: 'MacBook Air 15 Retina, Midnight (2023)',
                brand: 'apple',
                memory: '256GB',
                ram: '8GB',
                series: 'macbook',
                processor: 'm2',
                gpu: 'gpuapple2',
                hz: '60Hz',
                images: [
                    'https://img.jabko.ua/image/cache/catalog/products/2023/06/052251/1%20(7)-1397x1397.jpg.webp',
                    'https://img.jabko.ua/image/cache/catalog/products/2023/06/061003/3-1397x1397.jpg.webp',
                    'https://img.jabko.ua/image/cache/catalog/products/2023/06/061003/2-1397x1397.jpg.webp'
                ],
                link: 'https://jabko.ua/mac/macbook-air/apple-macbook-air-15-2023/macbook-air-15-retina--midnight--256gb--2023-'
            },
            {
                name: 'Lenovo Legion 5 Pro 16IRX9 (2024)',
                brand: 'lenovo',
                memory: '4TB',
                ram: '96GB',
                series: 'legion',
                processor: 'intel9',
                gpu: 'nvidia',
                hz: '165Hz',
                videomemory: 'video8',
                images: [
                    'https://yabloki.ua/media/cache/sylius_shop_product_original/66/16/noutbuk-16-lenovo-legion-pro-5-16irx9-intel-i9-14900hx-32gb-1tb-ssd-1tb-ssd-rtx4070-8gb-dos-grey_dc04d71e-7c05-40fc-b798-535ce56b5afb-1.png.webp',
                    'https://yabloki.ua/media/cache/sylius_shop_product_original/b0/2a/noutbuk-16-lenovo-legion-pro-5-16irx9-intel-i9-14900hx-32gb-1tb-ssd-1tb-ssd-rtx4070-8gb-dos-grey_dc04d71e-7c05-40fc-b798-535ce56b5afb-2.png.webp',
                    'https://yabloki.ua/media/cache/sylius_shop_product_original/21/94/noutbuk-16-lenovo-legion-pro-5-16irx9-intel-i9-14900hx-32gb-1tb-ssd-1tb-ssd-rtx4070-8gb-dos-grey_dc04d71e-7c05-40fc-b798-535ce56b5afb-3.png.webp',
                    'https://yabloki.ua/media/cache/sylius_shop_product_original/b4/3a/noutbuk-16-lenovo-legion-pro-5-16irx9-intel-i9-14900hx-32gb-1tb-ssd-1tb-ssd-rtx4070-8gb-dos-grey_dc04d71e-7c05-40fc-b798-535ce56b5afb-5.png.webp'
                ],
                link: 'https://jabko.ua/gadzheti-i-drugoe/kompjuteri-i-noutbuki/noutbuki/noutbuki-lenovo/noutbuk-lenovo-legion-5-pro-16irx9-intel-core-i9-96gb-4tb-rtx-4070-83df007mrm-global'
            },
            {
                name: 'MacBook Pro 14, Space Black (2023)',
                brand: 'apple',
                memory: '512GB',
                ram: '18GB',
                series: 'macbook',
                processor: 'm3',
                gpu: 'gpuapple3pro',
                hz: '120Hz',
                images: [
                    'https://yabloki.ua/media/cache/sylius_shop_product_original/e5/58/noutbuk-macbook-pro-14-apple-m3-pro-18gb-11cpu-14gpu-512gb-ssd-space-black-2023_275bb564-5f51-4609-a3ba-df228d6f4b4f-1.png.webp',
                    'https://yabloki.ua/media/cache/sylius_shop_product_original/79/9c/noutbuk-macbook-pro-14-apple-m3-pro-18gb-11cpu-14gpu-512gb-ssd-space-black-2023_275bb564-5f51-4609-a3ba-df228d6f4b4f-2.png.webp',
                    'https://yabloki.ua/media/cache/sylius_shop_product_original/c8/b2/noutbuk-macbook-pro-14-apple-m3-pro-18gb-11cpu-14gpu-512gb-ssd-space-black-2023_275bb564-5f51-4609-a3ba-df228d6f4b4f-3.png.webp',
                ],
                link: 'https://jabko.ua/mac/macbook-pro/macbook-pro-14-apple-m3/apple-macbook-pro-14-apple-m3-pro-512gb-11-cpu-14-gpu-18gb-ram-space-black-2023-mrx33'
            },
            {
                name: 'Apple MacBook Pro 13, Space Gray (2022)',
                brand: 'apple',
                memory: '512GB',
                ram: '8GB',
                series: 'macbook',
                processor: 'm2',
                gpu: 'gpuapple2',
                hz: '60Hz',
                images: [
                    'https://yabloki.ua/media/cache/sylius_shop_product_original/b2/39/macbook-pro-13-apple-m2-256gb-space-gray-2022-mneh3-1.png.webp',
                    'https://yabloki.ua/media/cache/sylius_shop_product_original/6c/80/macbook-pro-13-apple-m2-256gb-space-gray-2022-mneh3-2.png.webp',
                    'https://yabloki.ua/media/cache/sylius_shop_product_original/b9/85/macbook-pro-13-apple-m2-256gb-space-gray-2022-mneh3-4.png.webp'
                ],
                link: 'https://jabko.ua/mac/b-u-macbook/bu-apple-macbook-pro-13-512gb-space-gray-with-apple-m2-2022-mnej3'
            },
            {
                name: 'Acer Nitro 17 AN17-41 (2023)',
                brand: 'acer',
                memory: '1TB',
                ram: '64GB',
                series: 'nitro',
                processor: 'ryzen9',
                gpu: 'nvidia',
                hz: '144Hz',
                videomemory: 'video6',
                images: [
                    'https://yabloki.ua/media/cache/sylius_shop_product_original/a4/80/noutbuk-17-3-acer-nitro-17-an17-42-nh-qsceu-001-amd-r9-8945hs-32gb-1tb-ssd-nvd4070-8-linux-black_b0484211-faa3-4d75-99d2-fdef859950c9-4.png.webp',
                    'https://yabloki.ua/media/cache/sylius_shop_product_original/37/fd/noutbuk-17-3-acer-nitro-17-an17-42-nh-qsceu-001-amd-r9-8945hs-32gb-1tb-ssd-nvd4070-8-linux-black_b0484211-faa3-4d75-99d2-fdef859950c9-4.png.webp',
                    'https://yabloki.ua/media/cache/sylius_shop_product_original/2b/38/noutbuk-17-3-acer-nitro-17-an17-42-nh-qsceu-001-amd-r9-8945hs-32gb-1tb-ssd-nvd4070-8-linux-black_b0484211-faa3-4d75-99d2-fdef859950c9-4.png.webp',
                    'https://yabloki.ua/media/cache/sylius_shop_product_original/bb/76/noutbuk-17-3-acer-nitro-17-an17-42-nh-qsceu-001-amd-r9-8945hs-32gb-1tb-ssd-nvd4070-8-linux-black_b0484211-faa3-4d75-99d2-fdef859950c9-4.png.webp'
                ],
                link: 'https://jabko.ua/gadzheti-i-drugoe/kompjuteri-i-noutbuki/noutbuki/noutbuki-acer/noutbuk-acer-nitro-17-an17-41-amd-ryzen-5-64gb-4tb-rtx-4050-nhql1ex057-global'
            },
            {
                name: 'ASUS Vivobook 15 OLED R1505ZA (2024)',
                brand: 'asus',
                memory: '2TB',
                ram: '24GB',
                series: 'vivobook',
                processor: 'intel7',
                hz: '60Hz',
                images: [
                    'https://yabloki.ua/media/cache/sylius_shop_product_original/17/b7/noutbuk-15-6-asus-vivobook-15-oled-x1505za-l1371-intel-i7-12700h-16gb-512-ssd-inteluhd-dos-black_2f9a2eff-c64a-44e0-98cb-3975bb2b53ed-4.png.webp',
                    'https://yabloki.ua/media/cache/sylius_shop_product_original/fc/45/noutbuk-15-6-asus-vivobook-15-oled-x1505za-l1371-intel-i7-12700h-16gb-512-ssd-inteluhd-dos-black_2f9a2eff-c64a-44e0-98cb-3975bb2b53ed-4.png.webp',
                    'https://yabloki.ua/media/cache/sylius_shop_product_original/3f/c6/noutbuk-15-6-asus-vivobook-15-oled-x1505za-l1371-intel-i7-12700h-16gb-512-ssd-inteluhd-dos-black_2f9a2eff-c64a-44e0-98cb-3975bb2b53ed-4.png.webp',
                    'https://yabloki.ua/media/cache/sylius_shop_product_original/6e/93/noutbuk-15-6-asus-vivobook-15-oled-x1505za-l1371-intel-i7-12700h-16gb-512-ssd-inteluhd-dos-black_2f9a2eff-c64a-44e0-98cb-3975bb2b53ed-4.png.webp'
                ],
                link: 'https://jabko.ua/gadzheti-i-drugoe/kompjuteri-i-noutbuki/noutbuki/noutbuki-asus/noutbuk-asus-vivobook-15-oled-r1505za-intel-core-i7-24gb-2tb-iris-xe-r1505za-l1185-global'
            },
            {
                name: 'Lenovo ThinkPad T14 Gen 4 (2023)',
                brand: 'lenovo',
                memory: '2TB',
                ram: '32GB',
                series: 'thinkpad',
                processor: 'intel5',
                hz: '60Hz',
                images: [
                    'https://img.jabko.ua/image/cache/catalog/products/2024/08/131605/ThinkPad1.jpg-(1)-(1)-1397x1397.jpg.webp',
                    'https://img.jabko.ua/image/cache/catalog/products/2024/08/131605/ThinkPad2.jpg-(1)-(1)-1397x1397.jpg.webp',
                    'https://img.jabko.ua/image/cache/catalog/products/2024/08/131605/ThinkPad51.jpg-(1)-(1)-1397x1397.jpg.webp',
                ],
                link: 'https://jabko.ua/gadzheti-i-drugoe/kompjuteri-i-noutbuki/noutbuki/noutbuki-lenovo/noutbuk-lenovo-thinkpad-t14-gen-4-intel-core-i5-32gb-2tb-iris-xe-21hd00055rm-global'
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
                productDiv.dataset.videomemory = product.videomemory;
                productDiv.dataset.processor = product.processor;
                productDiv.dataset.hz = product.hz;
                productDiv.dataset.gpu = product.gpu;
                productDiv.dataset.series = product.series;

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
                brand: ['asus', 'acer', 'dell', 'lenovo', 'apple'].filter(b => document.getElementById(`${b}Checkbox`)?.checked),
                memory: ['256GB', '512GB', '1TB', '2TB', '3TB', '4TB'].filter(m => document.getElementById(`memory${m}Checkbox`)?.checked),
                ram: ['8GB', '16GB', '18GB', '24GB', '32GB', '64GB', '96GB'].filter(r => document.getElementById(`ram${r}Checkbox`)?.checked),
                hz: ['60Hz', '90Hz', '120Hz', '144Hz', '165Hz', '240Hz'].filter(h => document.getElementById(`${h}Checkbox`)?.checked),
                series: ['legion', 'nitro', 'thinkpad', 'rogstrix', 'vivobook', 'macbook'].filter(s => document.getElementById(`${s}Checkbox`)?.checked),
                gpu: ['radeon', 'nvidia', 'gpuapple2', 'gpuapple3pro'].filter(g => document.getElementById(`${g}Checkbox`)?.checked),
                processor: ['intel5', 'intel7', 'intel9', 'ryzen5', 'ryzen7', 'ryzen9', 'm2', 'm3', 'm4'].filter(p => document.getElementById(`${p}Checkbox`)?.checked),
                videomemory: ['video4', 'video6', 'video8', 'video12', 'video16'].filter(v => document.getElementById(`${v}Checkbox`)?.checked),
            };

            const matchesFilter = (product, filterKey) =>
                !filters[filterKey].length || filters[filterKey].includes(product[filterKey]?.toLowerCase());

            const filteredProducts = products.filter(product =>
                matchesFilter(product, 'brand') &&
                (filters.memory.length === 0 || filters.memory.includes(product.memory)) &&
                (filters.ram.length === 0 || filters.ram.includes(product.ram)) &&
                matchesFilter(product, 'series') &&
                matchesFilter(product, 'processor') &&
                (filters.hz.length === 0 || filters.hz.includes(product.hz)) &&
                (filters.gpu.length === 0 || filters.gpu.includes(product.gpu)) &&
                (filters.videomemory.length === 0 || filters.videomemory.includes(product.videomemory || '')) // Обработка отсутствия видеопамяти
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
            width: 270px; /* Установите желаемую ширину */
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
