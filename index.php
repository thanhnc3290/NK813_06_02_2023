<?php 
    //site info
    $base_url               = '';
    $site_title             = 'Phòng Khám Đa Khoa Đông Phương';
    $meta_key               = '';
    $meta_desc              = '';
    $social_image_link      = '';
    $fb_app_id              = '223831745413307';

    //call to action
    $hotline                = '0866.597.713';
    $link_tu_van            = '#';
    $link_google_map        = '#';
    $link_dat_lich          = '#';
    $script_cai_dat_them    = ''; //Script cai cac phan mem thu 3

    //link cac section
    $link_sec_9             = '#';

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $site_title ?></title>
    <meta property="fb:app_id" content="<?php echo $fb_app_id ?>" />
    <meta name="description" content="<?php echo $meta_desc ?>">
    <meta name="keywords" content="<?php echo $meta_key ?>">
    <meta property="og:title" content="<?php echo $site_title ?>" />
    <meta property="og:description" content="<?php echo $meta_desc ?>">
    <meta property="og:image" content="<?php echo $social_image_link ?>">


    <!-- bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- end bootstrap -->

    <!-- custom -->
    <link rel="icon" type="image/x-icon" href="images/favicon.png">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/custom-css.css" rel="stylesheet">
    <!-- end custom -->

    <!-- slider -->
    <style>
        .mySlides {display: none}
        #section_3 > div > div > img {vertical-align: middle;}
        .slideshow-container {
            max-width: 100%;
            position: relative;
            margin: auto;
        }
        .prev, .next {
            cursor: pointer;
            position: absolute;
            top: 50%;
            width: auto;
            padding: 16px;
            margin-top: -22px;
            color: white;
            font-weight: bold;
            font-size: 18px;
            transition: 0.6s ease;
            border-radius: 0 3px 3px 0;
            user-select: none;
        }
        .next {
            right: 0;
            border-radius: 3px 0 0 3px;
        }
        .prev:hover, .next:hover {
            background-color: rgba(0,0,0,0.0);
        }

        .text {
            color: #f2f2f2;
            font-size: 15px;
            padding: 8px 12px;
            position: absolute;
            bottom: 8px;
            width: 100%;
            text-align: center;
        }
        
        .numbertext {
            color: #f2f2f2;
            font-size: 12px;
            padding: 8px 12px;
            position: absolute;
            top: 0;
        }

        .dot {
            cursor: pointer;
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #bbb;
            border-radius: 50%;
            display: inline-block;
            transition: background-color 0.6s ease;
        }

        active, .dot:hover {
            background-color: #717171;
        }

        .fade {
            animation-name: fade;
            animation-duration: 1.5s;
        }

        @keyframes fade {
            from {opacity: .4} 
            to {opacity: 1}
        }

        
        .prev, .next,.text {font-size: 11px}

    </style>
    <!-- end slider -->

    <!-- tuy chinh -->
    <link href="css/thanhnc-css.css" rel="stylesheet">
    <!-- end-tuy chinh -->


</head>

<body style="padding-top:0;max-width:640px !important;">
    <!-- header -->
    <nav id="navbar-example1" class="navbar bg-light main-navigation" style="
        --bs-navbar-padding-y:0;
        --bs-navbar-toggler-padding-y:0.5rem;
        --bs-navbar-brand-margin-end:0;
        --bs-navbar-brand-font-size:0.5rem;
        --bs-navbar-toggler-padding-x:unset;
        --bs-navbar-toggler-font-size:unset;
        ">
        <div class="container" style="--bs-gutter-x:0;background-color:#009949;">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarFirst" aria-controls="navbarFirst" aria-expanded="false" aria-label="Toggle navigation" style="width: 15%;">
                <img alt="toggle button" class="img-navbar" src="images/img_navbar.png">
            </button>
            <a class="navbar-brand" href="<?php echo $link_tu_van ?>" style="background-color:#047f3e;text-align:center;">
                <img alt="<?php echo $site_title ?>" class="img-logo" src="images/header-image-2.png" style="width:95%;">
            </a>
            <div class="collapse navbar-collapse" id="navbarFirst">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link" href="#">Trang chủ</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Giới Thiệu</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Chuyên Khoa</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Đăng Ký Khám</a></li>
                </ul>
            </div>
            
        </div>
    </nav>
    <!-- end header -->

    <!-- section 1 -->
    <section id="section_1" style="margin-top: 15px;margin-bottom:15px;">
        <div class="row">
            <div style="display:inline-block;width:52%" ><a href="<?php echo $base_url; ?>" ><img src="images/logo-header.jpg"/></a></div>
            <div style="display:inline-block;width:48%" ><a href="tel:<?php echo $hotline; ?>"><img src="images/hotline-header.jpg"/></a></div>
        </div>
    </section>
    <!-- end section 1 -->

    <!-- section 2 -->
    <section id="section_2" style="--bs-body-line-height:0;max-width:640px;font-size:0rem;text-align:center;">
        <a href="#section_1" style="display: inline-block;max-width: 21.7%;"><img src="images/menu_home.jpg" style="width:100%;" /></a>
        <a href="#" style="display: inline-block;max-width: 21.3%;"><img src="images/menu_gioi_thieu.jpg" style="width:100%;" /></a>
        <a href="#" style="display: inline-block;max-width: 27%;"><img src="images/menu_chuyen_khoa.jpg" style="width:100%;" /></a>
        <a href="#" style="display: inline-block;max-width: 29.6%;"><img src="images/menu_dang_ky_kham.jpg" style="width:100%;" /></a>
    </section>
    <!-- end section 2 -->

    <!-- section 3 -->
    <section id="section_3" style="margin-top: 0;margin-bottom:0;">
        <div class="slideshow-container">
            <div class="mySlides"><img src="images/banner-1.jpg" style="width:100%"></div>
            <div class="mySlides"><img src="images/banner-2.jpg" style="width:100%"></div>
            <a class="prev" onclick="plusSlides(-1)">❮</a>
            <a class="next" onclick="plusSlides(1)">❯</a>
        </div>

        <script>
            let slideIndex = 1;
            showSlides(slideIndex);

            function plusSlides(n) {
                showSlides(slideIndex += n);
            }

            function currentSlide(n) {
                showSlides(slideIndex = n);
            }

            function showSlides(n) {
                let i;
                let slides = document.getElementsByClassName("mySlides");
                let dots = document.getElementsByClassName("dot");
                if (n > slides.length) {slideIndex = 1}    
                if (n < 1) {slideIndex = slides.length}
                for (i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";  
                }
                for (i = 0; i < dots.length; i++) {
                    dots[i].className = dots[i].className.replace(" active", "");
                }
                slides[slideIndex-1].style.display = "block";  
                dots[slideIndex-1].className += " active";
            }
        </script>
    </section>
    <!-- end section 3 -->

    <!-- section 4 -->
    <section id="section_4" style="--bs-body-line-height:0;max-width:640px;font-size:0rem;">
        <a href="#" style="display: inline-block;max-width:33%;"><img src="images/sec_4_1.jpg" style="width:100%;" /></a>
        <a href="#" style="display: inline-block;max-width:33%;"><img src="images/sec_4_2.jpg" style="width:100%;" /></a>
        <a href="tel:<?php echo $hotline ?>" style="display: inline-block;max-width:33%;"><img src="images/sec_4_3.jpg" style="width:100%;" /></a>
    </section>
    <!-- end section 4 -->

    <!-- section 5 -->
    <section id="section_5" style="--bs-body-line-height:0;max-width:640px;font-size:0rem;">
        <a href="<?php echo $link_tu_van ?>" style="display: inline-block;max-width:33%;"><img src="images/sec_5_1.jpg" style="width:100%;" /></a>
        <a href="#" style="display: inline-block;max-width:33%;"><img src="images/sec_5_2.jpg" style="width:100%;" /></a>
        <a href="<?php echo $link_dat_lich ?>" style="display: inline-block;max-width:33%;"><img src="images/sec_5_3.jpg" style="width:100%;" /></a>
    </section>
    <!-- end section 5 -->

    <!-- section 6 -->
    <section id="section_6" style="--bs-body-line-height:0;max-width:640px;font-size:0rem;text-align:center;">
        <img src="images/sec_6_title.jpg" style="width:100%;" />
        <a href="#" style="display: inline-block;max-width: 33%;"><img src="images/sec_6_1.jpg" style="width:100%;" /></a>
        <a href="#" style="display: inline-block;max-width: 33%;"><img src="images/sec_6_2.jpg" style="width:100%;" /></a>
        <a href="#" style="display: inline-block;max-width: 33%;"><img src="images/sec_6_3.jpg" style="width:100%;" /></a>
    </section>
    <section id="section_6_a" style="--bs-body-line-height:0;max-width:640px;font-size:0rem;text-align:center;">
        <a href="#" style="display: inline-block;max-width: 33%;"><img src="images/sec_6_a_1.jpg" style="width:100%;" /></a>
        <a href="#" style="display: inline-block;max-width: 33%;"><img src="images/sec_6_a_2.jpg" style="width:100%;" /></a>
        <a href="#" style="display: inline-block;max-width: 33%;"><img src="images/sec_6_a_3.jpg" style="width:100%;" /></a>
    </section>
    <!-- end section 6 -->

    <!-- section 7 -->
    <section id="section_7" style="--bs-body-line-height:0;max-width:640px;font-size:0rem;">
        <a href="tel:<?php echo $hotline ?>" style="display: inline-block;max-width:50%;"><img src="images/sec_7_1.jpg" style="width:100%;" /></a>
        <a href="<?php echo $link_tu_van ?>" style="display: inline-block;max-width:50%;"><img src="images/sec_7_2.jpg" style="width:100%;" /></a>
    </section>
    <!-- end section 7 -->

    <!-- section 8 -->
    <section id="section_8" style="--bs-body-line-height:0;max-width:640px;font-size:0rem;">
        <img src="images/sec_8_image.jpg" style="width:100%;" />
    </section>
    <!-- end section 8 -->

    <!-- section 9 -->
    <section id="section_9" style="
        --bs-body-line-height:0;max-width:640px;
        font-size:0rem;background-image:url(images/sec_9_bg.jpg);
        background-size: cover;
        background-repeat: no-repeat;
        min-height:450px;
        background-position-x: center;
    ">
        <div style="margin-left:10%;margin-right: 10%;padding-top:14%;" >
            <img src="images/sec_9_thumb.jpg" style="width:100%;" />
            <h2 style="font-size: 17px;color:red;padding-top:6.5%;text-align:center;font-weight:bolder;text-align:center;">PHÒNG KHÁM ĐA KHOA BÁCH GIAI</h2>
            <p style="font-family: Arial; font-size: 17px;text-align:justify;font-weight:500;">Ra đời với sứ mệnh cung cấp những dịch vụ y tế cao cấp, phòng khám Đa khoa Bách Giai mang tới cho người dân Hà Nội và các tỉnh lân cận một địa chỉ chăm sóc sức khỏe chuyên nghiệp và an toàn. Với đội ngũ bác sĩ đều là các chuyên gia có nhiều năm kinh nghiệm trực tiếp thăm khám, tư vấn...</p>
            <div style="text-align: center;padding-top:5.5%;">
                <a href="<?php echo $link_sec_9 ?>" ><button style="border: none;background-color: transparent;margin-bottom:10%;"><img src="images/button-xem-them.png" /></button></a>
            </div>
        </div>
    </section>
    <!-- end section 9 -->

    <!-- section 10 -->
    <section id="section_10" style="--bs-body-line-height:0;max-width:640px;font-size:0rem;">
        <img src="images/sec_10_bg.jpg" style="width:100%;" />
        <div style="text-align:center;position:relative;margin-top:-12.3%;">
            <button style="display: inline-block;min-width:20%;background-color:transparent;border:unset;"></button>
            <button style="display: inline-block;max-width:30%;background-color:transparent;border:unset;"><a href="<?php echo $link_dat_lich ?>" ><img src="images/button_dat_hen.png" style="width: 100%;" /></a></button>
            <button style="display: inline-block;max-width:30%;background-color:transparent;border:unset;"><a href="<?php echo $link_tu_van ?>" ><img src="images/button_tu_van.png" style="width: 100%;" /></a></button>
            <button style="display: inline-block;min-width:20%;background-color:transparent;border:unset;"></button>
        </div>
    </section>
    <!-- end section 10 -->

    <!-- sticker footer -->
    <footer class="site-footer">
        <ul class="site-info">
            <li>
                <a href="<?php echo $link_tu_van ?>">
                    <img alt="Tư vấn" class="icon-footer" src="images/icon-footer-1.png" />
                    <p>Tư vấn</p>
                </a>
            </li>

            <li>
                <a target="_blank" href="<?php echo $link_google_map ?>">
                    <img alt="Đường đi" class="icon-footer" src="images/icon-footer-2.png" />
                    <p>Đường đi</p>
                </a>
            </li>

            <li>
                <a href="<?php echo $link_dat_lich ?>">
                    <img alt="Đặt lịch" class="icon-footer" src="images/icon-footer-3.png" />
                    <p>Đặt lịch</p>
                </a>
            </li>

            <li>
                <a href="tel:<?php echo $hotline; ?>">
                    <img alt="Gọi ngay" class="icon-footer" src="images/icon-footer-4.png" />
                    <p>Gọi ngay</p>
                </a>
            </li>
        </ul>
    </footer><!-- .site-footer -->
    <!-- end sticker footer -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/custom-js.js"></script>
    <script src="js/jquery.js"></script>
    <script src="js/thanhnc.js"></script>
    <!-- <script src="js/dialogue.js"></script> -->

    <!-- script chat outsite -->
    <?php echo $script_cai_dat_them ?>
    <!-- <script language="javascript" src="https://swt.hbhsz.net/JS/LsJS.aspx?siteid=lxd68021103&float=0&lng=en"></script> -->
    <!-- end script chat outsite -->

</body>

</html>