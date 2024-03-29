<!DOCTYPE HTML>
<HTML lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@2.1.1/css/boxicons.min.css">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer1.css">
    <title>DIMO</title>
</head>

<body>
    <header class="sticky-top bg-white border">
        <div class="container p-2">
            <nav class="navbar navbar-expand-lg bg-white ">
                <div class="container px-0 mx-0">
                    <div class="collapse navbar-collapse " id="navbarTogglerDemo01">
                        <a class="navbar-brand" href="#"><img src="IMG/Logo/DIMO tach nen - Copy.png" alt="" style="width: 100px;"></a>
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active fw-bolder" aria-current="page" href="?act=home">HOME</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-black fw-bolder" href="?mod=page&act=home">SHOP</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-black fw-bolder" href="?mod=page&act=about">ABOUT</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-black fw-bolder" href="?mod=page&act=contact">CONTACT</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-black fw-bolder" href="?mod=page&act=login">ACCOUNT</a>
                            </li>
                        </ul>
                        <div class="search-container">
                            <form method='post' action='?act=search' role="search">
                                <input class="search-input" type="text" placeholder="Search for a product" name="search">
                                <!-- Sử dụng thẻ <i> để chứa icon -->
                                <button class="search-button" type="submit"><i class='bx bx-search'></i></button>
                            </form>
                        </div>
                        <?php
                        if (isset($_SESSION['name_user'])) {
                            extract($_SESSION['name_user']); ?>
                            <div id="cart" class="position-relative d-flex justify-content-center align-items-center rounded-circle bg-black bg-opacity-10 px-2 py-1" style="margin-left: 20px;">
                                <a href="?mod=cart&act=list">
                                    <i class="bi bi-cart fs-5  fw-bolder text-black"></i>
                                </a>
                                <div class="">
                                    <span id="amount-cart" class="text-white  position-absolute top-0 start-75 translate-middle bg-danger px-2 rounded-circle">
                                        <!-- <?php
                                                if (isset($_SESSION['cart'])) {
                                                    echo count($_SESSION['cart']);
                                                } else echo 0;
                                                ?> -->
                                    </span>
                                </div>
                            </div>
                            <div id="account" class="d-flex justify-content-center align-items-center rounded-circle bg-black bg-opacity-10  mx-2 px-2 py-1">
                                <a class="text-decoration-none text-white" href="?act=dangnhap">
                                    <!-- <a class="text-decoration-none text-white" href="?act=login"> -->
                                        <i class="bi bi-person-circle fw-bolder fs-5 text-secondary"></i></a>
                                </a>
                            </div>
                        <?php
                        } ?>
                    </div>
                </div>
        </div>
        </nav>
        </div>
    </header>