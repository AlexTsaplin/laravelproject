@extends('layout')

@section('title')Головна сторінка@endsection

@section('main_content')
    <div class="h-100 p-5 text-bg-dark rounded-3 jumbotron bg-gradient">
        <h1 class="display-1">SOKOLtm</h1>
        <p><h5>Техніка, яка завжди на крок попереду. Ноутбуки, навушники та смартфони, щоб залишатися на зв'язку, працювати та насолоджуватися кожною миттю.</h5></p>
    </div>
    <div class="row">
        <div class="col-lg-4">
            <svg class="bd-placeholder-img rounded-circle" width="50" height="50" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="var(--bs-secondary-color)"></rect></svg>
            <h2 class="fw-normal">Смартфони</h2>
            <p>Залишайтеся на зв'язку та завжди будьте в центрі подій. Вибирайте смартфон, який відповідає вашому стилю та потребам.</p>
            <p><a class="btn btn-secondary" href="/mobile">Переглянути »</a></p>
        </div>
        <div class="col-lg-4">
            <svg class="bd-placeholder-img rounded-circle" width="50" height="50" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="var(--bs-secondary-color)"></rect></svg>
            <h2 class="fw-normal">Ноутбуки</h2>
            <p>Ваша потужність у компактному форматі. Оберіть ноутбук, який відповідає вашому стилю життя та завданням – від роботи до розваг.</p>
            <p><a class="btn btn-secondary" href="/laptop">Переглянути »</a></p>
        </div>
        <div class="col-lg-4">
            <svg class="bd-placeholder-img rounded-circle" width="50" height="50" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="var(--bs-secondary-color)"></rect></svg>
            <h2 class="fw-normal">Навушники</h2>
            <p>Пориньте у світ чистого звуку з нашими навушниками. Вибирайте комфорт, стиль та якість, щоб насолоджуватися кожною нотою.</p>
            <p><a class="btn btn-secondary" href="/headphone">Переглянути »</a></p>
        </div>
    </div><br>

    <h1 class="nav justify-content-center">Популярні смартфони</h1><br>
        <!-- Перша 9-ка -->
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            <div class="col">
                <div class="card shadow-sm bg-dark-subtle">
                    <img src="https://yabloki.ua/media/cache/sylius_shop_product_original/94/3c/iphone-15-pro-128gb-black-titanium-e-sim_59abbd6d-c477-4b8f-a270-1dbade20f1a0-1.png.webp" class="" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <div class="card-body">
                        <p class="card-text"><h3>Apple iPhone 15 Pro 128GB (Black Titanium)</h3>
                        </p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow-sm bg-dark-subtle">
                        <img src="https://yabloki.ua/media/cache/sylius_shop_product_original/12/5b/iphone-15-blue-128-mb-1.png.webp" class="" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <div class="card-body">
                            <p class="card-text"><h3>Apple iPhone 15 256GB (Blue)</h3><br>
                            </p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow-sm bg-dark-subtle">
                        <img src="https://yabloki.ua/media/cache/sylius_shop_product_original/79/08/smartfon-galaxy-s23-fe-5g-256gb-mint-sm-s711blggsek_e10ec90b-7d94-4d3a-b7c4-88aa9b63a424-1.png.webp" class="" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <div class="card-body">
                            <p class="card-text"><h3>Samsung Galaxy S23 FE 5G 256GB (Green)</h3></p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow-sm bg-dark-subtle">
                        <img src="https://yabloki.ua/media/cache/sylius_shop_product_original/cf/98/smartfon-samsung-galaxy-s24-fe-5g-128gb-yellow-sm-s721bzydeuc_25504c25-3b4d-42a0-bb2a-173f66780b0d-5.png.webp" class="" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <div class="card-body">
                            <p class="card-text"><h3>Samsung Galaxy S24 FE 5G 128GB (Yellow)</h3></p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow-sm bg-dark-subtle">
                        <img src="https://yabloki.ua/media/cache/sylius_shop_product_original/f0/7a/iphone-13-pink-128gb-3.png.webp" class="" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <div class="card-body">
                            <p class="card-text"><h3>Apple iPhone 13 128GB (Pink)</h3><br></p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow-sm bg-dark-subtle">
                        <img src="https://yabloki.ua/media/cache/sylius_shop_product_original/61/4e/smartfon-google-pixel-8-8-128gb-obsidian_b2bceb90-cc99-45ce-9406-901a8e8b4207-2.png.webp" class="" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <div class="card-body">
                            <p class="card-text"><h3>Google Pixel 8 8/128GB (Obsidian)</h3></p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><br>
                <div class="col">
                    <div class="card shadow-sm bg-dark-subtle">
                        <img src="https://yabloki.ua/media/cache/sylius_shop_product_original/ae/d0/iphone-14-plus-midnight-128gb-1.png.webp" class="" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <div class="card-body">
                            <p class="card-text"><h3><br>Apple iPhone 14 Plus 256GB (Midnight)</h3></p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><br>
                <div class="col">
                    <div class="card shadow-smb bg-dark-subtle">
                        <img src="https://yabloki.ua/media/cache/sylius_shop_product_original/fd/7e/smartfon-galaxy-a55-5g-256gb-light-blue-sm-a556blbceuc_54b8c60d-1f9b-445d-9684-1583cf998444-1.png.webp" class="" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <div class="card-body">
                            <p class="card-text"><h3>Samsung Galaxy-A55 5G 256GB (Blue)</h3></p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow-sm bg-dark-subtle">
                        <img src="https://yabloki.ua/media/cache/sylius_shop_product_original/d4/2d/iphone-14-plus-purple-128gb-2.png.webp" class="" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <div class="card-body">
                            <p class="card-text"><h3><br>Apple iPhone 14 Plus 128GB (Purple)</h3></p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><br>

<!-- Друга 9-ка -->
    <h1 class="nav justify-content-center">Популярні ноутбуки</h1><br>

    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <div class="col">
            <div class="card shadow-sm bg-dark-subtle">
                <img src="https://yabloki.ua/media/cache/sylius_shop_product_original/f0/55/16-asus-rog-strix-scar-16-g634jyr-ra041x-intel-i9-14900hx-32gb-1tbssd-nvd4090-16-win11-black-bag-mouse_6c2168e2-80e6-4b71-bed1-8c14a217fa1e-1.png.webp" class="" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                <div class="card-body">
                    <p class="card-text"><h3>ASUS ROG Strix SCAR 16 (2024) (Core i9/32GB RAM/1TB/RTX 4090)</h3></p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card shadow-sm bg-dark-subtle">
                <img src="https://yabloki.ua/media/cache/sylius_shop_product_original/d9/e7/macbook-air-13-m2-2022-8gb-512gb-z160000gh_8f73c0ca-d94e-44db-aca5-61d45bbe0bfc-1.png.webp" class="" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                <div class="card-body">
                    <p class="card-text"><h3>MacBook Air 13, Midnight (2022)</h3><br></p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card shadow-sm bg-dark-subtle">
                <img src="https://yabloki.ua/media/cache/sylius_shop_product_original/6b/b3/noutbuk-15-6-hp-victus-15-fa0023ua-ag-a0nv6ea-intel-i5-12450h-16gb-512gb-ssd-nvd3050-4-dos-black_43da69df-df7f-43c2-97ff-deaea274d06c-4.png.webp" class="" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                <div class="card-body">
                    <p class="card-text"><h3>HP Victus 15-fa0023ua AG (2023)</h3><br></p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card shadow-sm bg-dark-subtle">
                <img src="https://yabloki.ua/media/cache/sylius_shop_product_original/66/16/noutbuk-16-lenovo-legion-pro-5-16irx9-intel-i9-14900hx-32gb-1tb-ssd-1tb-ssd-rtx4070-8gb-dos-grey_dc04d71e-7c05-40fc-b798-535ce56b5afb-1.png.webp" class="" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                <div class="card-body">
                    <p class="card-text"><h3>Lenovo Legion 5 Pro 16IRX9 (Intel Core i9/96GB/4TB/RTX 4070) (83DF007MRM) (Global)</h3><br></p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card shadow-sm bg-dark-subtle">
                <img src="https://yabloki.ua/media/cache/sylius_shop_product_original/e5/58/noutbuk-macbook-pro-14-apple-m3-pro-18gb-11cpu-14gpu-512gb-ssd-space-black-2023_275bb564-5f51-4609-a3ba-df228d6f4b4f-1.png.webp" class="" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                <div class="card-body">
                    <p class="card-text"><h3>MacBook Pro 14 with Apple M3 Pro, 512GB, 11 CPU/14 GPU, 18GB RAM, Space Black 2023 (MRX33)</h3></p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card shadow-sm bg-dark-subtle">
                <img src="https://yabloki.ua/media/cache/sylius_shop_product_original/b2/39/macbook-pro-13-apple-m2-256gb-space-gray-2022-mneh3-1.png.webp" class="" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                <div class="card-body">
                    <p class="card-text"><h3>Apple MacBook Pro 13, (Space Gray) (2022))</h3><br><br></p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card shadow-sm bg-dark-subtle">
                <img src="https://yabloki.ua/media/cache/sylius_shop_product_original/a4/80/noutbuk-17-3-acer-nitro-17-an17-42-nh-qsceu-001-amd-r9-8945hs-32gb-1tb-ssd-nvd4070-8-linux-black_b0484211-faa3-4d75-99d2-fdef859950c9-4.png.webp" class="" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                <div class="card-body">
                    <p class="card-text"><h3>Acer Nitro 17 AN17-41 (AMD Ryzen 5/64GB/4TB/RTX 4050) (NH.QL1EX.057) (Global)</h3><br></p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card shadow-sm bg-dark-subtle">
                <img src="https://yabloki.ua/media/cache/sylius_shop_product_original/17/b7/noutbuk-15-6-asus-vivobook-15-oled-x1505za-l1371-intel-i7-12700h-16gb-512-ssd-inteluhd-dos-black_2f9a2eff-c64a-44e0-98cb-3975bb2b53ed-4.png.webp" class="" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                <div class="card-body">
                    <p class="card-text"><h3>ASUS Vivobook 15 OLED R1505ZA (Intel Core i7/24GB/2TB/Iris Xe) (R1505ZA-L1185) (Global)</h3></p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card shadow-sm bg-dark-subtle">
                <img src="https://yabloki.ua/media/cache/sylius_shop_product_original/fb/ea/noutbuk-15-6-lenovo-ideapad-gaming-3-15ach6-82k20273ra-amd-r5-5500h-16gb-512-ssd-rtx2050-4gb-dos-black_aeef22ed-29ba-49e7-9dfe-52739b9f3de4-1.png.webp" class="" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                <div class="card-body">
                    <p class="card-text"><h3>Ноутбук 15.6" LENOVO IdeaPad Gaming 3 15ACH6 (82K20273RA)</h3><br></p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><br>


    <!-- Третя 9-ка -->
    <h1 class="nav justify-content-center">Популярні навушники</h1><br>

    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <div class="col">
            <div class="card shadow-sms bg-dark-subtle">
                <img src="https://yabloki.ua/media/cache/sylius_shop_product_original/e9/c1/navushniki-tws-sony-wf-c500-white-wfc500w-ce7_c6a7af38-e390-4aaa-bac8-980f79afb3e1-5.png.webp" class="" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                <div class="card-body">
                    <p class="card-text"><h3>Наушники TWS Sony WF-C500 (White)</h3></p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card shadow-sm bg-dark-subtle">
                <img src="https://yabloki.ua/media/cache/sylius_shop_product_original/40/da/navushniki-jbl-tune-flex-blue-jbltflexblu_f0cdbe9a-3083-4589-acca-ee1986d31744-8.png.webp">
                <div class="card-body">
                    <p class="card-text"><h3>Наушники JBL Tune Flex (Blue)</h3></p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card shadow-sm bg-dark-subtle">
                <img src="https://yabloki.ua/media/cache/sylius_shop_product_original/f5/38/navushniki-samsung-galaxy-buds3-silver-sm-r530nzaasek_8bdee398-a376-4893-8f78-121778f30d69-5.png.webp" class="" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                <div class="card-body">
                    <p class="card-text"><h3>Навушники Samsung Galaxy Buds FE SM-R400 (Silver)</h3></p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card shadow-sm bg-dark-subtle">
                <img src="https://yabloki.ua/media/cache/sylius_shop_product_original/01/d8/air-pods-pro-2-1.png.webp" class="" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                <div class="card-body">
                    <p class="card-text"><h3>Apple AirPods Pro 2 with MagSafe Charging Case</h3><br></p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card shadow-sm bg-dark-subtle">
                <img src="https://yabloki.ua/media/cache/sylius_shop_product_original/b6/8c/airpods-3-mme73-1.png.webp" class="" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                <div class="card-body">
                    <p class="card-text"><h3>Apple AirPods 3 with Lightning Charging Case</h3></p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card shadow-sm bg-dark-subtle">
                <img src="https://yabloki.ua/media/cache/sylius_shop_product_original/a8/0b/navushniki-google-pixel-buds-pro-charcoal-ga03201_0c6f87c7-2f6d-4140-8963-ac88a1e11829-1.png.webp" class="" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                <div class="card-body">
                    <p class="card-text"><h3>Навушники Google Pixel Buds Pro (Charcoal)</h3></p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card shadow-sm bg-dark-subtle">
                <img src="https://yabloki.ua/media/cache/sylius_shop_product_original/5d/43/navushniki-marshall-minor-iv-black-1006653_0be64394-0180-48ba-b41a-4d0c7bb5c0de-1.png.webp" class="" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                <div class="card-body">
                    <p class="card-text"><h3>Навушники Marshall Headphones Minor IV (Black)</h3></p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card shadow-sm bg-dark-subtle">
                <img src="https://yabloki.ua/media/cache/sylius_shop_product_original/91/15/bezdrotovi-navushniki-proove-orion-tws-white_828df0ad-bf6a-410a-9655-c4e369caabe4-1.png.webp" class="" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                <div class="card-body">
                    <p class="card-text"><h3>Навушники Proove Orion TWS (White)</h3></p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card shadow-sm bg-dark-subtle">
                <img src="https://yabloki.ua/media/cache/sylius_shop_product_original/44/99/navushniki-jbl-tune-230-nc-tws-sand-jblt230nctwssan_d5b8adc2-06c1-4267-8872-c9d3d5f5a3a6-4.png.webp" class="" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                <div class="card-body">
                    <p class="card-text"><h3>Наушники JBL Tune 230 NC TWS (Orange-Sand)</h3></p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
