<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Produk - Jethub</title>
    <meta property="og:title" content="Produk - Jethub" />
    <meta name="twitter:title" content="Produk - Jethub" />
    <meta name="embedx:title" content="Produk - Jethub" />
    <link rel="icon" href="images/logo-square.png" type="image/x-icon" />

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Alpine.js -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>


    <style>
        /* for Navbar */
        .text-dark-blue {
            --bs-text-opacity: 1;
            --bs-dark-blue-rgb: 56, 89, 151;
            color: rgba(var(--bs-dark-blue-rgb), var(--bs-text-opacity)) !important
        }

        .btn-blue {
            --bs-btn-color: #ffffff;
            /* Text color */
            --bs-btn-bg: #385997;
            /* Primary background color */
            --bs-btn-border-color: #385997;
            /* Border color to match primary */

            /* Hover state */
            --bs-btn-hover-color: #ffffff;
            --bs-btn-hover-bg: #4b6ca8;
            /* Slightly lighter shade for hover */
            --bs-btn-hover-border-color: #4b6ca8;

            /* Focus state */
            --bs-btn-focus-shadow-rgb: 56, 89, 151;
            /* Lighter shade of primary color for focus outline */

            /* Active state */
            --bs-btn-active-color: #ffffff;
            --bs-btn-active-bg: #2d4c7a;
            /* Darker shade for active background */
            --bs-btn-active-border-color: #2d4c7a;
            --bs-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.15);

            /* Disabled state */
            --bs-btn-disabled-color: #ffffff;
            --bs-btn-disabled-bg: #5979aa;
            /* Muted shade of primary color for disabled background */
            --bs-btn-disabled-border-color: #5979aa;
        }


        /* Transition on Hamburger */
        #change-burger {
            transition: transform 0.3s ease, opacity 0.2s ease;
        }

        .fa-bars {
            transform: rotate(0deg);
            opacity: 1;
        }

        .fa-xmark {
            transform: rotate(180deg);
            /* Rotate the "X" icon */
            opacity: 0;
            /* Start hidden */
        }

        #change-burger.fa-xmark {
            opacity: 1;
            /* Show the "X" icon on toggle */
        }

        /* for filter */
        .bg-primary-blue {
            --bs-bg-opacity: 1;
            --bs-primary-blue-rgb: 56, 89, 151;
            background-color: rgba(var(--bs-primary-blue-rgb), var(--bs-bg-opacity)) !important
        }

        /* for Footer */
        .bg-light-blue {
            --bs-bg-opacity: 1;
            --bs-light-blue-rgb: 217, 228, 247;
            background-color: rgba(var(--bs-light-blue-rgb), var(--bs-bg-opacity)) !important
        }

        .bg-dark-blue {
            --bs-bg-opacity: 1;
            --bs-dark-blue-rgb: 56, 89, 151;
            background-color: rgba(var(--bs-dark-blue-rgb), var(--bs-bg-opacity)) !important
        }

        .border-blue {
            --bs-border-opacity: 1;
            --bs-blue-rgb: 56, 89, 151;
            border-color: rgba(var(--bs-blue-rgb), var(--bs-border-opacity)) !important
        }

        /* input edit*/
        .form-control:focus {
            color: var(--bs-body-color);
            background-color: var(--bs-body-bg);
            border-color: #385997;
            outline: 0;
            box-shadow: 0 0 0 .25rem rgba(56, 89, 151, .25)
        }

        .form-control::placeholder {
            color: var(--bs-secondary-color);
            opacity: 0.6
        }

        /* text */
        .card-title {
            margin-bottom: var(--bs-card-title-spacer-y);
            color: var(--bs-card-title-color)
        }

        .text-primary-blue {
            --bs-text-opacity: 1;
            --bs-primary-rgb: 56, 89, 151;
            color: rgba(var(--bs-primary-rgb), var(--bs-text-opacity)) !important
        }

        /* Button cart */
        .btn-outline-blue {
            --bs-btn-color: #385997;
            /* Primary text color */
            --bs-btn-border-color: #385997;
            /* Primary border color */
            --bs-btn-hover-color: #fff;
            /* Hover text color */
            --bs-btn-hover-bg: #385997;
            /* Hover background color */
            --bs-btn-hover-border-color: #385997;
            /* Hover border color */
            --bs-btn-focus-shadow-rgb: 56, 89, 151;
            /* Focus shadow color in RGB */
            --bs-btn-active-color: #fff;
            /* Active text color */
            --bs-btn-active-bg: #304d84;
            /* Active background color, slightly darker */
            --bs-btn-active-border-color: #304d84;
            /* Active border color, matching active background */
            --bs-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
            /* Active shadow */
            --bs-btn-disabled-color: #385997;
            /* Disabled text color */
            --bs-btn-disabled-bg: transparent;
            /* Disabled background, keeping outline */
            --bs-btn-disabled-border-color: #385997;
            /* Disabled border color */
            --bs-gradient: none;
            /* No gradient */
        }

        /* add custom button pagination */
        .btn.btn-outline-blue.btn-pagination {
            --bs-btn-border-color: #e6e6e6;
            --bs-btn-color: #000000;
        }

        .btn.btn-outline-blue.btn-pagination:disabled {
            border: none;
            --bs-btn-disabled-color: #5e5d5d;
        }


        /* pagination style */
        .pagination {
            --bs-link-color: #385997;
            --bs-border-color: #e0d9cd;
            --bs-link-hover-color: #284574;

            --bs-pagination-padding-x: 0.75rem;
            --bs-pagination-padding-y: 0.375rem;
            --bs-pagination-font-size: 1rem;
            --bs-pagination-color: var(--bs-link-color);
            --bs-pagination-bg: var(--bs-body-bg);
            --bs-pagination-border-width: var(--bs-border-width);
            --bs-pagination-border-color: var(--bs-border-color);
            --bs-pagination-border-radius: var(--bs-border-radius);
            --bs-pagination-hover-color: var(--bs-link-hover-color);
            --bs-pagination-hover-bg: var(--bs-tertiary-bg);
            --bs-pagination-hover-border-color: var(--bs-border-color);
            --bs-pagination-focus-color: var(--bs-link-hover-color);
            --bs-pagination-focus-bg: var(--bs-secondary-bg);
            --bs-pagination-focus-box-shadow: 0 0 0 0.25rem rgba(56, 89, 151, 0.25);
            --bs-pagination-active-color: #fff;
            --bs-pagination-active-bg: #0d6efd;
            --bs-pagination-active-border-color: #0d6efd;
            --bs-pagination-disabled-color: var(--bs-secondary-color);
            --bs-pagination-disabled-bg: var(--bs-secondary-bg);
            --bs-pagination-disabled-border-color: var(--bs-border-color);
            display: flex;
            padding-left: 0;
            list-style: none
        }


        /* transition on element side of merchant */
        .wrapper {
            box-sizing: content-box;
            height: 25px;
            display: flex;
        }

        .words {
            overflow: hidden;
        }

        /* .words:hover span {
            transform: translateY(-100%);
            transition: transform 0.3s ease-in-out;
        } */

        .card.word:hover .wrapper .words span {
            transform: translateY(-100%);
            transition: all 0.3s ease-in-out;
        }

        .words span {
            display: block;
            height: 100%;
            /* color: #0e6ffc; */
            transform: translateY(0);
            transition: all 0.3s ease-in-out;
        }


        /* for Ratio on image products */
        .ratio-3x2 {
            --bs-aspect-ratio: 66.67%;
        }

        /* addition style button checkout */
        .checkoutButton.disable {
            cursor: not-allowed;
            /* Disabled state */
            color: #ffffff;
            background: #5979aa;
            /* Muted shade of primary color for disabled background */
            border-color: #5979aa;
        }

        /* custom tooltip */
        .custom-tooltip {
            --bs-tooltip-bg: #385997;
            /* Background color */
            --bs-tooltip-color: #ffffff;
            /* Text color */
            --bs-tooltip-border-radius: 10px;
            /* Rounded corners */
            --bs-tooltip-padding-y: 0.75rem;
            /* Vertical padding */
            --bs-tooltip-padding-x: 0.75rem;
            /* Horizontal padding */
            --bs-tooltip-opacity: 1;
            /* Full opacity */

            /* Custom margin for vertical spacing */
            margin-bottom: 1rem;
            /* Adds space below */
        }

        /* changing accordion style */
        .accordion-button:not(.collapsed) {
            color: #fff;
            background-color: rgba(56, 89, 151, 0.9);
        }
    </style>



</head>

<body x-data="products" x-init="load()" @input="resetPage">
    <header class="position-relative w-100 bg-white text-secondary py-2 shadow-sm navbar navbar-expand-lg navbar-light bg-light shadow-sm">
        <nav class="container-lg d-flex align-items-center justify-content-between px-4 py-1">
            <div class="d-flex align-items-center justify-content-between w-auto">
                <a class="d-flex align-items-center text-dark fw-semibold text-decoration-none" href="https://jethub-jatim.com" aria-label="Jethub">
                    <img src="images/nav-logo.png" alt="Jer Basuki Mawa Beya" class="me-3" height="60px" />
                    <button class="btn btn-blue btn-sm px-4 text-white fw-semibold" style="border-radius: 20rem;">Jethub</button>
                </a>
            </div>

            <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarMenu"
                aria-controls="navbarMenu"
                aria-expanded="false"
                aria-label="Toggle navigation">
                <!-- <span class="navbar-toggler-icon"></span> -->
                <span><i class="fa-solid fa-bars" id="change-burger"></i></span>
            </button>

            <!-- Navbar links -->
            <div class="collapse navbar-collapse w-auto mt-0" id="navbarMenu">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item my-auto py-3">
                        <a href="./" class="text-decoration-none me-4 text-dark fw-semibold">Beranda</a>
                    </li>
                    <li class="nav-item my-auto py-3">
                        <a href="./produk" class="text-decoration-none me-4 text-dark-blue fw-semibold">Produk</a>
                    </li>
                    <li class="nav-item my-auto py-3">
                        <a href="./tentang-kami" class="text-decoration-none text-dark fw-semibold">Tentang Kami</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <!-- Banner Section -->
    <div class="flex-grow-1">
        <div
            class="position-relative bg-cover bg-center"
            style="background-image: url('images/produk/komoditi.png');      height: 60vh;      background-size: cover; background-position: center;">

            <!-- Darker Overlay -->
            <div class="position-absolute top-0 start-0 w-100 h-100" style="background-color: rgba(0, 0, 0, 0.1);"></div>

            <!-- Content Overlay -->
            <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center bg-dark bg-opacity-50">
                <div class="container px-4 px-md-2">
                    <div class="text-white">
                        <h1 class="display-4 fw-bold mb-3">
                            Komoditas Jet-Hub
                        </h1>
                        <p class="lead">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aliquid repellendus, quas ipsa et esse earum, ipsam quidem deserunt dolorum ut in distinctio numquam, quisquam porro. Rerum sed voluptates quibusdam deleniti.
                        </p>
                        <hr class="border-white border-4 w-25 mt-5 opacity-0" />
                        <hr class="border-white border-4 w-25 mt-5 opacity-0" />
                        <!-- <hr class="border-white border-4 w-25 mt-5 opacity-0" /> -->
                        <!-- <hr class="border-white border-4 w-25 mt-5 opacity-0" /> -->
                        <!-- <hr class="border-white border-4 w-25 mt-5 opacity-0" /> -->

                        <hr class="border-white border-4 w-25 mt-5 opacity-0" id="lineBanner" />
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- for Product Show -->
    <!-- <section class="d-flex justify-content-center my-5" x-data> -->
    <section class="d-flex justify-content-center my-5">
        <!-- Input Search Box-->
        <div class="input-group" style="width: 85vw;">
            <input
                x-model="$data.search"
                type="text" class="form-control fs-5 border-3 rounded-start-4 fw-medium" id="searchInput"
                placeholder="Cari Produk Desa" aria-label="Cari Produk Desa">


            <button class="btn btn-blue border-3 rounded-end-4 " type="button">
                <i class="fa-solid fa-magnifying-glass fs-5"></i>
            </button>

            <button class="btn btn-blue border-0 rounded-4 mx-2 position-relative" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                <i class="fa-solid fa-cart-shopping fs-5"></i>
                <span x-text="$store.cart.quantity" x-show="$store.cart.quantity" class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger"> </span>
            </button>


            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasRightLabel">Keranjang Belanja</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <hr class="mx-3 my-0 border-3 border-dark" />
                <div class="offcanvas-body">
                    <div class="container mt-2">

                        <!-- Detail Amount Cart -->
                        <template x-for="(item,index) in $store.cart.items" x-keys="index">
                            <div class="row align-items-center border-bottom pb-2 mb-2">
                                <div class="row d-flex align-items-center justify-content-center">
                                    <!-- <i class="col-1 fa-solid fa-shop text-muted"></i> -->
                                    <div class="col-1">
                                        <img class="me-2" src="./images/merchant.png" alt="Merchant" height="20px">
                                    </div>
                                    <span class="col fw-bold text-muted" x-text="item.shop"></span>
                                </div>

                                <div class="col-2">
                                    <img :src="`./images/produk/${item.img}`" :alt="item.name" class="img-fluid rounded-3">
                                </div>

                                <div class="col-10">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="d-flex flex-column">
                                            <span class="col fw-bold" x-text="item.name"></span>
                                            <span class="fw-bold">
                                                <span class="fw-bold" x-text="rupiah(item.price)"></span>
                                                <span class="fs-5">&times;</span>
                                                <button @click="$store.cart.remove(item.id)" class="btn btn-outline-blue p-0 text-decoration-none" id="remove"><i class="fa-solid fa-minus mx-1"></i></button>
                                                <span class="fw-bold" x-text="item.quantity"></span>
                                                <button @click="$store.cart.add(item)" class="btn btn-outline-blue p-0  text-decoration-none" id="add"><i class="fa-solid fa-plus mx-1"></i></button>
                                                <span>&equals;</span>
                                                <span class="fw-bold text-dark" x-text="rupiah(item.total)"></span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </template>

                        <!-- add image when cart empty -->
                        <div class="text-center p-3" x-show="!$store.cart.items.length">
                            <img src="./images/keranjang.png" alt="Keranjang Kosong" class="w-50 mt-3 mb-0">
                            <h2 class="text-muted fs-1">Keranjang Kosong</h2>
                            <p class="text-muted">Anda belum menambahkan barang ke keranjang belanja.</p>
                        </div>

                        <!-- add total -->
                        <div class="text-left p-1 row" x-show="$store.cart.items.length">
                            <table class="table w-auto mt-2">
                                <tr>
                                    <td>
                                        <h2 class="text-muted fs-5 mt-1">Total Belanja: </h2>
                                    </td>
                                    <td>
                                        <p class="text-dark fs-5 fw-semibold" x-text="rupiah($store.cart.total)"></p>
                                    </td>
                                </tr>
                            </table>

                            <div class="container">
                                <div class="text-center fw-medium fs-3 mb-0">
                                    <p class="text-secondary">Customer Detail</p>
                                </div>
                                <div class="row justify-content-center">
                                    <div class="col-12">
                                        <form action="" class="containerForm" id="checkoutForm">
                                            <input type="hidden" name="items" x-model="JSON.stringify($store.cart.items)">
                                            <input type="hidden" name="total" x-model="JSON.stringify($store.cart.total)">
                                            <div class="mt-0 mb-1">
                                                <label for="name" class="form-label">Nama</label>
                                                <input type="text" class="form-control border-4" id="name" name="name">
                                            </div>
                                            <div class="my-1">
                                                <label for="email" class="form-label">Email</label>
                                                <input type="email" class="form-control border-4" id="email" name="email">
                                            </div>
                                            <div class="my-1">
                                                <label for="phone" class="form-label">Nomor Telepon</label>
                                                <input type="tel" class="form-control border-4" id="phone" autocomplete="off" name="phone">
                                            </div>

                                            <button type="submit" class="btn btn-blue disable my-2 checkoutButton" id="checkoutButton" value="checkout">Checkout</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Card Produk -->
    <section class="d-flex justify-content-center my-5">
        <div class="container" style="width: 90vw;">
            <!-- <div class="row" x-data="products" x-init="load()" id="cardProducts"> -->
            <div class="row" id="cardProducts">
                <!-- Filter Section -->
                <div class="col-md-3 my-2">
                    <div class="card shadow-sm">
                        <div class="card-header bg-white text-primary-blue fs-3 fw-bold">
                            <i class="fas fa-filter me-2"></i> Filter
                        </div>
                        <div class="card-body">
                            <div class="accordion" id="filterAccordion">
                                <!-- Category Filter Accordion Item -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingCategory">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseCategory" aria-expanded="true" aria-controls="collapseCategory">
                                            Filter by Category
                                        </button>
                                    </h2>
                                    <div id="collapseCategory" class="accordion-collapse collapse show" aria-labelledby="headingCategory">
                                        <div class="accordion-body">
                                            <div class="form-check d-none">
                                                <input class="form-check-input" type="checkbox" name="category" id="categoryAll" value="" x-model="selectedCategory" @click="resetPage">
                                                <label class="form-check-label" for="categoryAll">Semua</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="category" id="categoryRempah" value="rempah" x-model="selectedCategory" @click="resetPage">
                                                <label class="form-check-label" for="categoryRempah">Rempah-Rempah</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="category" id="categoryBuah" value="buah" x-model="selectedCategory" @click="resetPage">
                                                <label class="form-check-label" for="categoryBuah">Buah</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="category" id="categorySayur" value="sayur" x-model="selectedCategory" @click="resetPage">
                                                <label class="form-check-label" for="categorySayur">Sayur</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Province Filter Accordion Item -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingProvince">
                                        <button class="accordion-button " type="button" data-bs-toggle="collapse" data-bs-target="#collapseProvince" aria-expanded="true" aria-controls="collapseProvince">
                                            Filter by Province
                                        </button>
                                    </h2>
                                    <div id="collapseProvince" class="accordion-collapse collapse show" aria-labelledby="headingProvince">
                                        <div class="accordion-body">
                                            <div class="form-check d-none">
                                                <input class="form-check-input" type="checkbox" name="province" id="provinceAll" value="" x-model="selectedProvince" @click="resetPage">
                                                <label class="form-check-label" for="provinceAll">Semua</label>
                                            </div>
                                            <template x-for="province in uniqueProvinces" :key="province">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="province" :id="`province-${province}`" :value="province" x-model="selectedProvince" @click="resetPage">
                                                    <label class="form-check-label" :for="`province-${province}`" x-text="province"></label>
                                                </div>
                                            </template>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>


                <!-- Product Cards Section -->
                <div class="col-md-9">
                    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
                        <!-- Product Card -->
                        <template x-for="(item, index) in paginatedItems" :key="item.id">

                            <div class="col" x-show="paginatedItems.length > 0">
                                <!-- <div class=" card h-100 rounded-4 shadow" x-data="{ hovered: false }" @mouseenter="hovered = true" @mouseleave="hovered = false"> -->
                                <div class="card h-100 rounded-4 shadow word">
                                    <div class="card h-100 rounded-4 shadow">
                                        <!-- <img :src="`./images/produk/${item.img}`" class="card-img-top rounded-4" :alt="item.name" height="140px"> -->
                                        <div class="ratio ratio-3x2">
                                            <img :src="`./images/produk/${item.img}`" class="card-img-top rounded-4" :alt="item.name">
                                        </div>
                                        <div class="card-body">
                                            <!-- <h5 class="card-title fw-bold" x-text="item.name"></h5> -->
                                            <h5 class="card-title fw-bold" x-text="item.name.length > 20 ? item.name.substring(0, 35) + ' . . .' : item.name"></h5>

                                            <div class="d-flex align-items-center mt-2 mb-1">
                                                <!-- <i class="fa-solid fa-shop me-2"></i> -->
                                                <img class="me-2" src="./images/merchant.png" alt="Merchant" height="20px">

                                                <!-- <p class="card-text mb-0" x-text="hovered ? item.regency : item.shop"></p> -->
                                                <!-- <div class="wrapper w-25 bg-secondary">
                                                    <div class="word">
                                                        <span class="d-block py-2">askd</span>
                                                        <span class="d-block py-2">askd</span>
                                                    </div>
                                                </div> -->
                                                <div class="wrapper px-0">
                                                    <div class="words">
                                                        <span>
                                                            <p class="card-text mb-0" x-text="item.shop"></p>
                                                        </span>
                                                        <span>
                                                            <p class="card-text mb-0" x-text="item.regency"></p>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>

                                            <p class="card-text fw-bold text-primary-blue mt-0" x-text="rupiah(item.price)"></p>

                                            <!-- Icon Buttons Section Old - No-Tooltip when Hover -->
                                            <!-- <div class="d-flex justify-content-center mt-3">
                                                <button type="button" @click="$store.cart.add(item)"
                                                    class="btn btn-outline-blue rounded-circle mx-2  d-flex justify-content-center align-items-center"
                                                    style="width: 40px; height: 40px;"
                                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Masukkan keranjang" data-bs-custom-class="custom-tooltip">

                                                    <i class="fa-solid fa-cart-shopping"></i>
                                                </button>

                                                <button
                                                    class="btn btn-outline-blue rounded-circle mx-2 d-flex justify-content-center align-items-center"
                                                    style="width: 40px; height: 40px;">

                                                    <i class="fa-solid fa-eye"></i>
                                                </button>
                                            </div> -->



                                            <!-- with tooltip -->
                                            <!-- <div class="d-flex justify-content-center mt-1">
                                                <button type="button" @click="$store.cart.add(item)"
                                                    class="btn btn-outline-blue rounded-circle mx-2 d-flex justify-content-center align-items-center"
                                                    data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="Masukkan keranjang" data-bs-custom-class="custom-tooltip"
                                                    style="width: 40px; height: 40px;">

                                                    <i class="fa-solid fa-cart-shopping"></i>
                                                </button>

                                                <a class="text-decoration-none" x-bind:href="'./produk/' + item.slug">
                                                    <button type="button"
                                                        class="btn btn-outline-blue rounded-circle mx-2 d-flex justify-content-center align-items-center"
                                                        data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Lihat produk" data-bs-custom-class="custom-tooltip"
                                                        style="width: 40px; height: 40px;">

                                                        <i class="fa-solid fa-eye"></i>
                                                    </button>
                                                </a>
                                            </div> -->


                                            <div class="d-flex justify-content-center mt-1">
                                                <button type="button" @click="$store.cart.add(item)"
                                                    class="btn btn-outline-blue rounded-pill mx-2 d-flex justify-content-center align-items-center">

                                                    <i class="fa-solid fa-cart-shopping"></i>
                                                    <span class="fw-semibold">Tambah Keranjang</span>
                                                </button>

                                                <a class="text-decoration-none" x-bind:href="'./produk/' + item.slug">
                                                    <button type="button"
                                                        class="btn btn-outline-blue rounded-pill mx-2 d-flex justify-content-center align-items-center">

                                                        <i class="fa-solid fa-eye"> </i>
                                                        <span class="fw-semibold">Lihat Produk</span>
                                                    </button>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </template>
                    </div>


                    <!-- Show message if no items match the search -->
                    <div class="container text-center" x-show="paginatedItems.length === 0">
                        <div class="row justify-content-center">
                            <div class="col-md-8 col-lg-6">
                                <!-- Image Placeholder -->
                                <div class="mb-0">
                                    <img src="./images/empty-sack.png" alt="No results found" class="img-fluid" style="max-width: 350px;">
                                </div>
                                <!-- Title -->
                                <h3 class="fw-bold text-primary-blue">Produk tidak ditemukan</h3>
                                <!-- Subtitle -->
                                <p class="text-muted">
                                    Kami tidak dapat menemukan produk yang anda cari.<br>
                                    Coba cari produk lain.
                                </p>
                            </div>
                        </div>
                    </div>

                </div>


                <!-- Pagination Controls -->
                <div class="d-flex justify-content-between px-4 py-5 mt-3">
                    <!-- <div class="d-flex justify-content-center mt-4"> -->
                    <div>
                        <!-- <button @click="prevPage" :disabled="currentPage === 1" class="btn btn-outline-secondary me-2">
                                Previous
                            </button> -->
                        <span class="fs-6 fw-medium text-secondary m-0 user-select-none">Menampilkan <span x-text="totalPages === 0 ? 0 : currentPage"></span> dari <span x-text="totalPages"></span></span>
                        <!-- <button @click="nextPage" :disabled="currentPage === totalPages" class="btn btn-outline-secondary ms-2">
                                Next
                            </button> -->
                    </div>

                    <!-- <div class="d-flex justify-content-center mt-4"> -->
                    <div>
                        <!-- <a href="#lineBanner" class="text-decoration-none"> -->
                        <button onclick="scrolltoLine()" @click="prevPage" :disabled="currentPage === 1" class="btn btn-outline-blue btn-pagination border-2 me-1 fs-6 fw-semibold rounded-3">
                            Sebelumnya
                        </button>
                        <!-- </a> -->
                        <template x-for="n in getPageRange()" x-keys="n">
                            <!-- <a href="#lineBanner" class="text-decoration-none"> -->
                            <button
                                onclick="scrolltoLine()"
                                @click="currentPage = n"
                                :class="{ 'active': currentPage === n }"
                                class="btn btn-outline-blue btn-pagination border-2 mx-1 fs-6 px-3 fw-semibold rounded-3"
                                x-text="n">
                            </button>
                            <!-- </a> -->
                        </template>

                        <!-- <a href="#lineBanner" class="text-decoration-none"> -->
                        <button onclick="scrolltoLine()" @click="nextPage" :disabled="currentPage === totalPages || totalPages === 0" class="btn btn-outline-blue btn-pagination border-2 ms-1 fs-6 fw-semibold rounded-3">
                            Selanjutnya
                        </button>
                        <!-- </a> -->
                    </div>
                </div>

            </div>
        </div>
    </section>



    <!-- tooltip example -->
    <!-- <section>
        <div class="d-flex justify-content-center">
            <button type="button"
                class="btn btn-outline-blue rounded-circle mx-2 d-flex justify-content-center align-items-center"
                data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="Masukkan keranjang" data-bs-custom-class="custom-tooltip"
                style="width: 40px; height: 40px;">

                <i class="fa-solid fa-cart-shopping"></i>
            </button>

            <button type="button"
                class="btn btn-outline-blue rounded-circle mx-2 d-flex justify-content-center align-items-center"
                data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Lihat produk" data-bs-custom-class="custom-tooltip"
                style="width: 40px; height: 40px;">

                <i class="fa-solid fa-eye"></i>
            </button>
        </div>
        <div class="d-flex justify-content-center py-2">
            <button type="button" class="btn btn-secondary mx-2" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="Tooltip on left">
                Tooltip on left
            </button>
            <button type="button" class="btn btn-secondary mx-2" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Tooltip on bottom">
                Tooltip on bottom
            </button>
        </div>
    </section> -->


    <footer class="py-5 mt-5 bg-light-blue">
        <div class="container px-4 px-md-5">
            <div class="row row-cols-1 row-cols-md-4 g-4">
                <!-- Logo Image -->
                <div class="col mt-5">
                    <img src="images/logo-horizontal.png" alt="JetHub Hor" class="img-fluid mb-4" />
                </div>
                <!-- Contact Information -->
                <div class="col">
                    <h4 class="fs-4 fw-bold mb-3 text-dark-blue">
                        Kontak Kami
                    </h4>
                    <p class="mb-1">Bagian JET-HUB</p>
                    <p class="mb-1">Lantai 2, Gedung Baru</p>
                    <p class="mb-1">(+62) 811-3221-2000</p>
                </div>
                <!-- Placeholder for Additional Contact Links -->
                <div class="col">
                    <h4 class="fs-4 fw-bold mb-3 text-dark-blue">
                        Kontak Kami
                    </h4>
                    <ul class="list-unstyled">
                        <li>Lorem ipsum dolor</li>
                        <li>Lorem ipsum dolor</li>
                        <li>Lorem ipsum dolor</li>
                    </ul>
                </div>
                <!-- Placeholder for More Contact Links -->
                <div class="col">
                    <h4 class="fs-4 fw-bold mb-3 text-dark-blue">
                        Kontak Kami
                    </h4>
                    <ul class="list-unstyled">
                        <li>Lorem ipsum dolor</li>
                        <li>Lorem ipsum dolor</li>
                        <li>Lorem ipsum dolor</li>
                    </ul>
                </div>
            </div>
            <!-- Horizontal Line -->
            <hr class="my-5 border-3 border-blue" />
            <!-- Social Media Section -->
            <div class="d-flex align-items-center justify-content-center">
                <h4 class="fw-bold fs-4 text-dark-blue me-4 mt-1">
                    Social Media
                </h4>
                <ul class="list-inline mb-0">
                    <li class="list-inline-item">
                        <a href="#" class="d-flex align-items-center justify-content-center text-white bg-dark-blue rounded-circle p-2 text-decoration-none">
                            <!-- <iconify-icon icon="mdi:facebook" class="fs-5"></iconify-icon> -->
                            <i class="fa-brands fa-facebook fs-4"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#" class="d-flex align-items-center justify-content-center text-white bg-dark-blue rounded-circle p-2 text-decoration-none">
                            <!-- <iconify-icon icon="mdi:instagram" class="fs-5"></iconify-icon> -->
                            <i class="fa-brands fa-instagram fs-4"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#" class="d-flex align-items-center justify-content-center text-white bg-dark-blue rounded-circle p-2 text-decoration-none">
                            <!-- <iconify-icon icon="mdi:twitter" class="fs-5"></iconify-icon> -->
                            <i class="fa-brands fa-x-twitter fs-4"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#" class="d-flex align-items-center justify-content-center text-white bg-dark-blue rounded-circle p-2 text-decoration-none">
                            <!-- <iconify-icon icon="tabler:world" class="fs-5"></iconify-icon> -->
                            <i class="fa-solid fa-globe fs-4"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#" class="d-flex align-items-center justify-content-center text-white bg-dark-blue rounded-circle p-2 text-decoration-none">
                            <!-- <iconify-icon icon="mdi:youtube" class="fs-5"></iconify-icon> -->
                            <i class="fa-brands fa-youtube fs-4"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </footer>

    <div class="bg-dark-blue text-white text-center py-3">
        <p class="mb-0">Copyright 2024 Jethub All Rights Reserved</p>
    </div>



    <!-- FontAwesome icon -->
    <script src="https://kit.fontawesome.com/2406124756.js" crossorigin="anonymous"></script>

    <!-- Bootsrap and Popper JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script> -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script> -->

    <!-- Local Script -->
    <script src="build/assets/another-script.js"></script>

    <!-- for show Midtrans -->
    <!-- @TODO: replace SET_YOUR_CLIENT_KEY_HERE with your client key -->
    <script type="text/javascript"
        src="https://app.sandbox.midtrans.com/snap/snap.js"
        data-client-key="SB-Mid-client-fDTBCBfOXu5dqqXj"></script>


</body>

</html>