<?php

use App\Core\View;
View::$activeItem = 'dashboard';
 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Dashboard</title>

    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="<?= View::assets('css/bootstrap.css') ?>" />

    <link rel="stylesheet" href="<?= View::assets('vendors/toastify/toastify.css') ?>" />
    <link rel="stylesheet" href="<?= View::assets('vendors/perfect-scrollbar/perfect-scrollbar.css')?>" />
    <link rel="stylesheet" href="<?= View::assets('vendors/bootstrap-icons/bootstrap-icons.css') ?>" />
    <link rel="stylesheet" href="<?= View::assets('css/app.css') ?>" />
    <link rel="shortcut icon" href="<?= View::assets('images/favicon.ico') ?>" type="image/x-icon')" />
    <link rel="stylesheet" href="<?= View::assets('css/quan.css') ?>" />
</head>

<body>
    <div id="app">
        <!-- SIDEBAR -->
        <?php View::partial('sidebar')  ?>
        <div id="main" class="layout-navbar">
            <!-- HEADER -->
            <?php View::partial('header')  ?>
            <?php View::partial('changepass')  ?>
            <div id="main-content">
                <div class="page-heading">
                <section id="content-types">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12">
                            <div class="card">
                                <div class="card-content">
                                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <img src="assets/images/samples/slider0.jpg" class="d-block w-100">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="assets/images/samples/slider1.jpg" class="d-block w-100">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="assets/images/samples/Slider2.jpg" class="d-block w-100">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="assets/images/samples/Slider3.jpg" class="d-block w-100">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="assets/images/samples/Slider4.jpg" class="d-block w-100">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="assets/images/samples/slider5.jpg" class="d-block w-100">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="assets/images/samples/slider6.jpg" class="d-block w-100">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="assets/images/samples/slider7.jpg" class="d-block w-100">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="assets/images/samples/slider9.jpg" class="d-block w-100">
                                            </div>
                                            <a class="carousel-control-prev" href="#carouselExampleControls" role="button"
                                                data-bs-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            </a>
                                            <a class="carousel-control-next" href="#carouselExampleControls" role="button"
                                                data-bs-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-4 col-md-4 col-sm-12">
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-body">
                                        <h4 class="card-title">H?????ng t???i t????ng lai</h4>
                                        <img class="img-fluid w-100" src="assets/images/samples/b??a.jpg">
                                        <p class="card-text">
                                        
L?? m???t h??ng h??ng kh??ng qu???c t??? n??ng ?????ng, hi???n ?????i v?? mang ?????m d???u ???n b???n s???c v??n h??a truy???n th???ng Vi???t Nam, trong su???t h??n 20 n??m ph??t tri???n v???i t???c ????? t??ng tr?????ng ??? m???c hai con s???, Vietnam Airlines ???? v?? ??ang d???n ?????u th??? tr?????ng h??ng kh??ng Vi???t Nam - m???t trong nh???ng th??? tr?????ng n???i ?????a c?? s???c t??ng tr?????ng nhanh nh???t th??? gi???i. L?? h??ng h??ng kh??ng hi???n ?????i v???i th????ng hi???u ???????c bi???t ?????n r???ng r??i nh??? b???n s???c v??n h??a ri??ng bi???t, TDPQ Air ??ang h?????ng t???i tr??? th??nh h??ng h??ng kh??ng qu???c t??? ch???t l?????ng 5 sao d???n ?????u khu v???c ch??u ??. 
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-4 col-sm-12">
                            <div class="card collapse-icon accordion-icon-rotate">
                                <div class="card-header">
                                    <h1 class="card-title pl-1">Ph????ng ch??m</h1>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="accordion" id="cardAccordion">
                                        S??? h??i l??ng c???a kh??ch h??ng l?? th??nh t???u l???n nh???t m?? ch???t l?????ng d???ch v??? mang l???i
                                        C??ng v???i vi???c ?????m b???o an to??n bay l?? nhi???m v??? s??? m???t, TPDQ Air c??ng kh??ng ng???ng n??ng cao ch???t l?????ng d???ch v???, ?????m b???o ch??? s??? ????ng gi??? ????? t??ng s???c c???nh tranh trong h??ng kh??ng.
                                        </div>
                                    </div>
                                </div>
                                <img class="img-fluid w-80" src="assets/images/samples/b??a3.jpg">
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-4 col-sm-12">
                            <div class="card collapse-icon accordion-icon-rotate">
                                <div class="card-header">
                                    <h1 class="card-title pl-1">Vip Pro Team</h1>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="accordion" id="cardAccordion">
                                            <div class="card">
                                                <div id="headingFive" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive" role="button">
                                                    <i class="bi bi-star"></i><span class="collapsed collapse-title"> Tr???n Th??? Thu Thanh</span>
                                                </div>
                                                <div id="collapseFive" class="collapse pt-1" aria-labelledby="headingFive" data-parent="#cardAccordion">
                                                    <div class="card-body">
                                                        <img src="assets/images/faces/thuthanh.png" class="d-block w-100">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card collapse-header">
                                                <div id="headingSix" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix" role="button">
                                                    <i class="bi bi-star"></i><span class="collapsed collapse-title"> Phan Thanh Th???ng</span>
                                                </div>
                                                <div id="collapseSix" class="collapse pt-1" aria-labelledby="headingSix" data-parent="#cardAccordion">
                                                    <div class="card-body">
                                                        <img src="assets/images/faces/thanhthang.jpg" class="d-block w-100">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div id="headingSeven" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven" role="button">
                                                    <i class="bi bi-star"></i><span class="collapsed collapse-title"> Phan Anh Qu??n</span>
                                                </div>
                                                <div id="collapseSeven" class="collapse pt-1" aria-labelledby="headingSeven" data-parent="#cardAccordion">
                                                    <div class="card-body">
                                                        <img src="assets/images/faces/anhquan.jpg" class="d-block w-100">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div id="headingEight" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight" role="button">
                                                    <i class="bi bi-star"></i><span class="collapsed  collapse-title"> L?? Th??? C???m Duy??n</span>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div id="headingEight" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight" role="button">
                                                    <i class="bi bi-star"></i><span class="collapsed  collapse-title"> Nguy???n V??n Minh ?????c</span>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div id="headingEight" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight" role="button">
                                                    <i class="bi bi-star"></i><span class="collapsed  collapse-title"> Nguy???n Hu???nh Thanh Duy</span>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div id="headingEight" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight" role="button">
                                                    <i class="bi bi-star"></i><span class="collapsed  collapse-title"> T?? Ph????ng D??ng</span>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div id="headingEight" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight" role="button">
                                                    <i class="bi bi-star"></i><span class="collapsed  collapse-title"> Tr???n Kim Ph??</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                </div>
                <!-- FOOTER -->
                <?php View::partial('footer')  ?>
            </div>
        </div>
    </div>
    <script src="<?= View::assets('vendors/toastify/toastify.js') ?>"></script>
        <script src="<?= View::assets('vendors/perfect-scrollbar/perfect-scrollbar.min.js') ?>"></script>
        <script src="<?= View::assets('js/bootstrap.bundle.min.js') ?>"></script>
        <script src="<?= View::assets('vendors/jquery/jquery.min.js') ?>"></script>
        <script src="<?= View::assets('vendors/jquery/jquery.validate.js') ?>"></script>
        <script src="<?= View::assets('js/main.js') ?>"></script>
        <script src="<?= View::assets('js/changepass.js') ?>"></script>
        <script src="<?= View::assets('js/menu.js') ?>"></script>
        <script src="<?= View::assets('vendors/apexcharts/apexcharts.js') ?>"></script>
        <script src="<?= View::assets('js/api.js') ?>"></script>

</body>

</html