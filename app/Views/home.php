<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="rica">
    <meta name="keywords" content="rica">
    <meta name="author" content="rica">
    <link rel="icon" href="<?=base_url('assets/images/icon/logo.png') ?>" type="image/x-icon" />
    <title>Products List</title>

    <!--Google font-->
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script&display=swap" rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/font-awesome.css') ?>">

    <!-- Animation -->
    <link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/animate.css') ?>">

    <!-- price range css -->
    <link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/price-range.css') ?>">


    <!-- Bootstrap css -->
    <link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/bootstrap.css') ?>">

    <!-- Theme css -->
    <link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/color1.css') ?>">
    <style>
    #thing_to_stick {
        position: sticky;
        top: 0px;
    }
    </style>

</head>

<body>

    <?php include('components/header.php'); ?>

    <!-- section start -->
    <section class="mt-0 xs-section bg-inner">
        <div class="container">
            <div class="row" style="margin-top:70px">
                <div class="col-12">
                    <div class="filter-panel">
                        <div class="left-filter">
                            <div class="respon-filter-btn">
                                <h6> filter <i class="fas fa-sort-down"></i></h6>
                                <span class="according-menu"></span>
                            </div>
                            <div class="filters respon-filter-content filter-button-group">
                                <ul>
                                    <li class="active" data-filter="*">All</li>
                                </ul>
                            </div>
                        </div>
                        <div class="right-panel">
                            <div class="collection-grid-view">
                                <ul>
                                    <li>
                                        <a href="javascript:void(0)" class="product-2-layout-view">
                                            <ul class="filter-select">
                                                <li></li>
                                                <li></li>
                                            </ul>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" class="product-3-layout-view">
                                            <ul class="filter-select">
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                            </ul>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="pro_sticky_info" id="thing_to_stick">
                        <div class="left-sidebar">
                            <div class="back-btn">
                                back
                            </div>
                            <div class="middle-part collection-collapse-block open">
                                <a href="javascript:void(0)" class="section-title collapse-block-title">
                                    <h5>filter Products</h5>
                                    <img src="<?=base_url('assets/images/icon/adjust.png') ?>"
                                        class="img-fluid blur-up lazyload" alt="">
                                </a>
                                <div class="collection-collapse-block-content ">
                                    <div class="filter-block">
                                        <div class="collection-collapse-block open">
                                            <h6 class="collapse-block-title">Categories</h6>
                                            <div class="collection-collapse-block-content">
                                                <div class="collection-brand-filter">
                                                    <div class="form-check collection-filter-checkbox">
                                                        <input type="checkbox" class="form-check-input category"
                                                            id="zara" name="category" value="men's clothing"
                                                            <?=$_GET['category']=="men's clothing"?"checked":"" ?>>
                                                        <label class="form-check-label" for="zara">Men's
                                                            Clothing</label>
                                                    </div>
                                                    <div class="form-check collection-filter-checkbox">
                                                        <input type="checkbox" name="category"
                                                            class="form-check-input category" id="vera-moda"
                                                            value="women's clothing"
                                                            <?=$_GET['category']=="women's clothing"?"checked":"" ?>>
                                                        <label class="form-check-label" for="vera-moda">Women's
                                                            Clothing</label>
                                                    </div>
                                                    <div class="form-check collection-filter-checkbox">
                                                        <input type="checkbox" name="category"
                                                            class="form-check-input category" id="forever-21"
                                                            value="electronics"
                                                            <?=$_GET['category']=="electronics"?"checked":"" ?>>
                                                        <label class="form-check-label"
                                                            for="forever-21">Electronics</label>
                                                    </div>
                                                    <div class="form-check collection-filter-checkbox">
                                                        <input type="checkbox" class="form-check-input category"
                                                            name="category" id="roadster" value="jewelery"
                                                            <?=$_GET['category']=="jewelery"?"checked":"" ?>>
                                                        <label class="form-check-label" for="roadster">Jewelery</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="filter-block">
                                        <div class="collection-collapse-block open">
                                            <h6 class="collapse-block-title">Sort Products</h6>
                                            <div class="collection-collapse-block-content">
                                                <div class="collection-brand-filter">
                                                    <div class="form-check collection-filter-checkbox">
                                                        <input type="checkbox" class="form-check-input sort"
                                                            id="ascSort" name="sort" value="asc" <?=isset($_GET['sort'])?($_GET['sort']=="asc"?"checked":""): "" ?>>
                                                        <label class="form-check-label" for="ascSort">Ascending</label>
                                                    </div>
                                                    <div class="form-check collection-filter-checkbox">
                                                        <input type="checkbox" name="sort"
                                                            class="form-check-input sort" id="descSort"
                                                            value="desc" <?=isset($_GET['sort'])?($_GET['sort']=="desc"?"checked":""): "" ?> >
                                                        <label class="form-check-label" for="descSort">Descending</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="filter-block">
                                        <div class="collection-collapse-block open">
                                            <h6 class="collapse-block-title">price range</h6>
                                            <div class="collection-collapse-block-content">
                                                <div class="wrapper">
                                                    <div class="range-slider">
                                                        <input type="text" class="js-range-slider" id="price" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="filter-block">
                                        <div class="collection-collapse-block open">
                                            <h6 class="collapse-block-title">Customer Ratings</h6>
                                            <div class="collection-collapse-block-content">
                                                <div class="collection-brand-filter">
                                                    <div class="form-check collection-filter-checkbox">
                                                        <input type="checkbox" class="form-check-input rating" id="five"
                                                            name="rating" value="5">
                                                        <label class="form-check-label rating" for="five">
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <span
                                                                class="ms-1">(<?php $count=0; foreach($prodData as $ad) { if(ceil($ad['rating']['rate'])=='5') $count++;  } echo $count;  ?>)</span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check collection-filter-checkbox">
                                                        <input type="checkbox" class="form-check-input rating" id="four"
                                                            name="rating" value="4">
                                                        <label class="form-check-label rating" for="four">
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="far fa-star"></i>
                                                            <span
                                                                class="ms-1">(<?php  $count=0; foreach($prodData as $ad) { if(ceil($ad['rating']['rate'])=='4') $count++;  } echo $count;  ?>)</span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check collection-filter-checkbox">
                                                        <input type="checkbox" class="form-check-input rating"
                                                            id="three" value="3" name="rating">
                                                        <label class="form-check-label rating" for="three">
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="far fa-star"></i>
                                                            <i class="far fa-star"></i>
                                                            <span
                                                                class="ms-1">(<?php $count=0; foreach($prodData as $ad) { if(ceil($ad['rating']['rate'])=='3') $count++;  } echo $count;  ?>)</span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check collection-filter-checkbox">
                                                        <input type="checkbox" class="form-check-input rating" id="two"
                                                            name="rating" value="2">
                                                        <label class="form-check-label rating" for="two">
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="far fa-star"></i>
                                                            <i class="far fa-star"></i>
                                                            <i class="far fa-star"></i>
                                                            <span
                                                                class="ms-1">(<?php $count=0; foreach($prodData as $ad) { if(ceil($ad['rating']['rate'])=='2') $count++;  } echo $count;  ?>)</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 ratio3_2">
                    <a href="javascript:void(0)" class="mobile-filter border-top-0">
                        <h5>latest filter</h5>
                        <img src="<?=base_url('assets/images/icon/adjust.png') ?>" class="img-fluid blur-up lazyload"
                            alt="">
                    </a>
                    <div class="product-wrapper-grid special-section grid-box">
                        <div class="row  content grid">
                            <?php $i=3; foreach($prodData as $prod):; ?>
                            <div class="col-xl-4 col-sm-6 grid-item wow fadeInUp">
                                <div class="special-box">
                                    <div class="special-img">
                                        <a href="#">
                                            <img src="<?=$prod['image'] ?>" class="img-fluid blur-up lazyload bg-img"
                                                alt="">
                                        </a>
                                        <div class="top-icon">
                                            <a href="#" class="" data-bs-toggle="tooltip" data-placement="top" title=""
                                                data-original-title="Add to Wishlist">
                                                <i class="far fa-heart"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="special-content">
                                        <a href="#">
                                            <h5 class="text-truncate"><?=$prod['title'] ?>
                                            </h5>
                                        </a>
                                        <p class="text-truncate">
                                            <?=$prod['description'] ?>
                                        </p>
                                        <div class="bottom-section">
                                            <span><i class="fa fa-folder"></i> <?=$prod['category'] ?></span>
                                            <div class="rating">
                                                <?php 
                                                    $hotelRating = $prod['rating']['rate'];
                                                    $i = 0;
                                                    while ($i < 5) {                                         
                                                        if ($i < $hotelRating)
                                                            echo "<i class='fas fa-star'></i>";
                                                        else
                                                            echo "<i class='far fa-star'></i>";
                                                        $i++;
                                                
                                                    }
                                                ?>
                                                <span><?=$prod['rating']['count'] ?> review</span>
                                            </div>
                                            <div class="price">
                                                <del>$<?=ceil($prod['price']+($prod['price']*0.4))  ?></del>
                                                <span>$<?=ceil($prod['price'])  ?></span>
                                                <div class="facility-detail">
                                                    <span>swimming</span>
                                                    <span>parking</span>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="label-offer">hot deal</div>
                                </div>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- section End -->


    <!-- footer start -->
    <footer>
        <div class="sub-footer">
            <div class="container">
                <div class="row ">
                    <div class="col-xl-6 col-md-6 col-sm-12">
                        <div class="footer-social">
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-google"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-6 col-sm-12">
                        <div class="copy-right">
                            <p>Made with <i class="fas fa-heart"></i> by Ankit.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer end -->

    <!-- tap to top -->
    <div class="tap-top">
        <div>
            <i class="fas fa-angle-up"></i>
        </div>
    </div>
    <!-- tap to top end -->




    <!-- latest jquery-->
    <script src="<?=base_url('assets/js/jquery-3.5.1.min.js') ?>"></script>

    <!-- filter js -->
    <script src="<?=base_url('assets/js/filter.js') ?>"></script>
    <script src="<?=base_url('assets/js/isotope.min.js') ?>"></script>

    <!-- tilt effect js-->
    <script src="<?=base_url('assets/js/tilt.jquery.js') ?>"></script>

    <!-- price range js -->
    <script src="<?=base_url('assets/js/price-range.js') ?>"></script>

    <!-- date-time picker js -->
    <script src="<?=base_url('assets/js/date-picker.js') ?>"></script>

    <!-- wow js-->
    <script src="<?=base_url('assets/js/wow.min.js') ?>"></script>

    <!-- slick js-->
    <script src="<?=base_url('assets/js/slick.js') ?>"></script>

    <!-- Bootstrap js-->
    <script src="<?=base_url('assets/js/bootstrap.bundle.min.js') ?>"></script>

    <!-- lazyload js-->
    <script src="<?=base_url('assets/js/lazysizes.min.js') ?>"></script>

    <!-- Theme js-->
    <script src="<?=base_url('assets/js/script.js') ?>"></script>

    <script>
    $('#datepicker').datepicker({
        uiLibrary: 'bootstrap4',
        format: 'dd mmmm'
    });
    $('#datepicker1').datepicker({
        uiLibrary: 'bootstrap4',
        format: 'dd mmmm'
    });
    new WOW().init();

    $('.category').click(function() {
        if ($(this).prop("checked") == false) {
            var onlyUrl = window.location.href.replace(window.location.search, '?category=all');
            window.location.href = onlyUrl;
        } else {
            var originalURL = window.location.href;
            var onlyUrl = window.location.href.replace(window.location.search, '');
            var amnVal = $(this).val();
            window.location.href = onlyUrl + "?category=" + amnVal;
        }
    });

    $('.sort').click(function () {
            if ($(this).prop("checked") == false) {
                var onlyUrl = window.location.href.replace(window.location.search, '?category=all');
                window.location.href = onlyUrl;
            } else {
                var originalURL = window.location.href;
                var onlyUrl = window.location.href.replace(window.location.search, '');
                var amnVal = $(this).val();
                window.location.href = onlyUrl + "?category=all&sort=" + amnVal;
            }
        });
    </script>
</body>

</html>