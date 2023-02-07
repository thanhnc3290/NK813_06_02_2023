<?php 
    //site info
    $base_url               = '';
    $site_title             = 'Ngứa Bao Quy Đầu cảnh báo bệnh gì?';
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

    <!-- custom -->
    <link rel="icon" type="image/x-icon" href="./images/favicon.png">
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <link href="./css/custom-css.css" rel="stylesheet">
    <!-- end custom -->
    <!-- tuy chinh -->
    <link href="./css/thanhnc-index-css.css" rel="stylesheet">
    <link href="./css/thanhnc-catalog-css.css" rel="stylesheet">
    <link href="./css/thanhnc-post-css.css" rel="stylesheet">
    <!-- end-tuy chinh -->


</head>

<body style="padding:0;max-width:640px !important;">
    <!-- header -->
    <nav id="home_menu" class="navbar bg-light main-navigation home_menu">
        <div class="container home_menu_contain">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarFirst" aria-controls="navbarFirst" aria-expanded="false" aria-label="Toggle navigation" style="width: 15%;">
                <img alt="toggle button" class="img-navbar" src="./images/img_navbar.png">
            </button>
            <a class="navbar-brand" href="<?php echo $link_tu_van ?>" style="background-color:#047f3e;text-align:center;">
                <img alt="<?php echo $site_title ?>" class="img-logo" src="./images/header-image-2.png" style="width:95%;">
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
    <section id="section_1">
        <div class="row">
            <div style="display:inline-block;width:52%" ><a href="<?php echo $base_url; ?>" ><img class="show_image" src="./images/logo-header.jpg"/></a></div>
            <div style="display:inline-block;width:48%" ><a href="tel:<?php echo $hotline; ?>"><img class="show_image" src="./images/hotline-header.jpg"/></a></div>
        </div>
    </section>
    <!-- end section 1 -->

    <!-- section 2 -->
    <section id="section_2">
        <a class="section_2_a menu_text" href="#section_1" style="width: 21.7%;"><span>Trang Chủ</span></a>
        <a class="section_2_a menu_text" href="#" style="width: 21.3%;"><span>Giới Thiệu</span></a>
        <a class="section_2_a menu_text" href="#" style="width: 27%;"><span>Chuyên Khoa</span></a>
        <a class="section_2_a menu_text" href="#" style="width: 29.6%;border-right:unset;"><span>Đăng Ký Khám</span></a>
    </section>
    <!-- end section 2 -->

    <!-- section 3 -->
    <section id="section_3">
        <div class="slideshow-container">
            <div class="mySlides"><img class="show_image" src="./images/banner-1.jpg"></div>
            <div class="mySlides"><img class="show_image" src="./images/banner-2.jpg"></div>
            <a class="prev" onclick="plusSlides(-1)">❮</a>
            <a class="next" onclick="plusSlides(1)">❯</a>
        </div>
    </section>
    <!-- end section 3 -->

    <!-- section 4 -->
    <section id="section_4">
        <a class="section_4_a" href="#"><img class="show_image" src="./images/sec_4_1.jpg"/></a>
        <a class="section_4_a" href="#"><img class="show_image" src="./images/sec_4_2.jpg"/></a>
        <a class="section_4_a" href="tel:<?php echo $hotline ?>"><img class="show_image" src="./images/sec_4_3.jpg"/></a>
    </section>
    <!-- end section 4 -->

    <!-- section 5 -->
    <section id="section_5">
        <a class="section_5_a" href="<?php echo $link_tu_van ?>"><img class="show_image" src="./images/sec_5_1.jpg"/></a>
        <a class="section_5_a" href="#"><img class="show_image" src="./images/sec_5_2.jpg"/></a>
        <a class="section_5_a" href="<?php echo $link_dat_lich ?>"><img class="show_image" src="./images/sec_5_3.jpg"/></a>
    </section>
    <!-- end section 5 -->

    <!-- content -->
    <section id="content">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb catalog_breadcrumb">
                <li class="breadcrumb-item"><a class="home_page_a" href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Dài Bao Quy Đầu</li>
            </ol>
        </nav>
        <img class="show_image" src="./images/catalog_breadcum_line.jpg" />
        <div class="blog_item">
            <h1 class="content_title">Ngứa Bao Quy Đầu Cảnh Báo Bệnh Gì?</h1>
            <div class="dot_line" style="margin-left:0;margin-right:0;width: 100%;"></div>
            <div class="post_button_contain">
                <button class="post_button_contain_2"></button>
                <button class="post_button_contain_1"><a href="<?php echo $link_tu_van ?>"><img class="show_image" src="./images/button_post_tu_van.png"></a></button>
                <button class="post_button_contain_1"><a href="tel:<?php echo $hotline ?>"><img class="show_image" src="./images/button_post_hotline.png"></a></button>
                <button class="post_button_contain_2"></button>
            </div>
            <a href="<?php echo $link_tu_van ?>" target="_blank" ><img class="show_image" src="./images/post_banner.png" /></a>
            <div class="content_main">
                <p>Bao quy đầu bị ngứa là vấn đề mà rất nhiều nam giới lo lắng khi gặp phải hiện nay. 
                    Tình trạng này xuất hiện không chỉ ảnh hưởng đến tâm lý, sinh hoạt hàng ngày mà sức khỏe sinh sản cũng bị ảnh hưởng rất lớn. 
                    Tình trạng này xuất hiện không chỉ ảnh hưởng đến tâm lý.</p>
                <p><img class="show_image" src="./images/post_content_image_1.jpg"/></p>
                <p>Bao quy đầu bị ngứa là vấn đề mà rất nhiều nam giới lo lắng khi gặp phải hiện nay. 
                    Tình trạng này xuất hiện không chỉ ảnh hưởng đến tâm lý, sinh hoạt hàng ngày mà sức khỏe sinh sản cũng bị ảnh hưởng rất lớn.</p>
                <p><img class="show_image" src="./images/post_content_image_2.jpg"/></p>
                <p>Bao quy đầu bị ngứa là vấn đề mà rất nhiều nam giới lo lắng khi gặp phải hiện nay. 
                    Tình trạng này xuất hiện không chỉ ảnh hưởng đến tâm lý, sinh hoạt hàng ngày mà sức khỏe sinh sản cũng bị ảnh hưởng rất lớn. 
                    Mặt khác ngứa bao quy đầu cũng cảnh báo bạn đang mắc phải một số bệnh lý khá nguy hiểm.</p>
            </div>
        </div>
    </section>
    <!-- end content -->

    <!-- list bài viết liên quan     -->
    <section id="content_list">
        <img class="show_image" src="./images/post_content_list_title.jpg" />
        
        <div class="row blog_item">
            <div class="col-5 blog_item_image">
                <a href="./post.php" title=""><img class="show_image" src="./images/blog_thumb_1.jpg" alt="" /></a>
            </div>
            <div class="col-7 blog_item_desc">
                <a href="./post.php" title=""><h3 class="blog_title">Ngứa Bao Quy Đầu cảnh báo bệnh gì? Bác sĩ chuyên khoa giải đáp thắc mắc </h3></a>
            </div>
            <div class="dot_line"></div>
        </div>

        <div class="row blog_item">
            <div class="col-5 blog_item_image">
                <a href="./post.php" title=""><img class="show_image" src="./images/blog_thumb_1.jpg" alt="" /></a>
            </div>
            <div class="col-7 blog_item_desc">
                <a href="./post.php" title=""><h3 class="blog_title">Ngứa Bao Quy Đầu cảnh báo bệnh gì? Bác sĩ chuyên khoa giải đáp thắc mắc </h3></a>
            </div>
            <div class="dot_line"></div>
        </div>

        <div class="row blog_item">
            <div class="col-5 blog_item_image">
                <a href="./post.php" title=""><img class="show_image" src="./images/blog_thumb_1.jpg" alt="" /></a>
            </div>
            <div class="col-7 blog_item_desc">
                <a href="./post.php" title=""><h3 class="blog_title">Ngứa Bao Quy Đầu cảnh báo bệnh gì? Bác sĩ chuyên khoa giải đáp thắc mắc </h3></a>
            </div>
            <div class="dot_line"></div>
        </div>

        <div class="row blog_item">
            <div class="col-5 blog_item_image">
                <a href="./post.php" title=""><img class="show_image" src="./images/blog_thumb_1.jpg" alt="" /></a>
            </div>
            <div class="col-7 blog_item_desc">
                <a href="./post.php" title=""><h3 class="blog_title">Ngứa Bao Quy Đầu cảnh báo bệnh gì? Bác sĩ chuyên khoa giải đáp thắc mắc </h3></a>
            </div>
            <div class="dot_line"></div>
        </div>

        <div class="row blog_item">
            <div class="col-5 blog_item_image">
                <a href="./post.php" title=""><img class="show_image" src="./images/blog_thumb_1.jpg" alt="" /></a>
            </div>
            <div class="col-7 blog_item_desc">
                <a href="./post.php" title=""><h3 class="blog_title">Ngứa Bao Quy Đầu cảnh báo bệnh gì? Bác sĩ chuyên khoa giải đáp thắc mắc </h3></a>
            </div>
            <div class="dot_line"></div>
        </div>
        
        <div class="row blog_item">
            <div class="col-5 blog_item_image">
                <a href="./post.php" title=""><img class="show_image" src="./images/blog_thumb_1.jpg" alt="" /></a>
            </div>
            <div class="col-7 blog_item_desc">
                <a href="./post.php" title=""><h3 class="blog_title">Ngứa Bao Quy Đầu cảnh báo bệnh gì? Bác sĩ chuyên khoa giải đáp thắc mắc </h3></a>
            </div>
        </div>

    </section>
    <!-- end list bài viết liên quan -->
    <!-- section 12 -->
    <section id="section_12">
        <img class="show_image" src="./images/sec_12_title.jpg"/>
        <a class="section_12_a" href="./catalog.php"><img class="show_image" src="./images/sec_12_1.jpg"/></a>
        <a class="section_12_a" href="./catalog.php"><img class="show_image" src="./images/sec_12_2.jpg"/></a>
        <a class="section_12_a" href="./catalog.php"><img class="show_image" src="./images/sec_12_3.jpg"/></a>
        <a class="section_12_a" href="./catalog.php"><img class="show_image" src="./images/sec_12_4.jpg"/></a>
    </section>
    <!-- end section 12 -->

    <!-- section 13 -->
    <section id="section_13">
        <div class="form_dang_ky">
            <form id="myform" method="post" action="#123">
                <p class="form_line"><input id="myform_name" class="input_form" placeholder="* Họ Tên:" type="text" name="input_name" required/></p>
                <p class="form_line">
                    <input id="myform_phone" class="input_form" placeholder="* Số Điện Thoại:" type="text" name="input_phone" required/>
                    <div id="phone_error" class="error hidden">Số điện thoại không chính xác</div>
                </p>
                <p class="form_line"><textarea id="myform_status" class="input_form" placeholder="Triệu Chứng Bệnh:" type="text" name="input_status"></textarea></p>
                <p class="form_submit"><button class="form_submit_button" type="submit"><img class="show_image" src="./images/form_button.png" /></button></p>
                <p class="form_line section_13_notice" style="margin-bottom:0;">Mọi Thông Tin Của Bạn Sẽ Được Chúng Tôi Bảo Mật 100%.</p>
            </form>
        </div>
    </section>
    <!-- end section 13 -->

    <!-- section 14 -->
    <section id="section_14">
        <a class="section_14_a" style="max-width:34.55%;" href="#"><img class="show_image" src="./images/sec_14_1.jpg"/></a>
        <a class="section_14_a" style="max-width:30.9%;" href="#"><img class="show_image" src="./images/sec_14_2.jpg"/></a>
        <a class="section_14_a" style="max-width:34.55%;" href="#"><img class="show_image" src="./images/sec_14_3.jpg"/></a>
    </section>
    <!-- end section 14 -->

    <!-- section 15 -->
    <section id="section_15">
        <img class="show_image" src="./images/sec_15_title.jpg"/>
        <div class="section_15_thumb">
            <img class="show_image" src="./images/sec_15_thumb.png"/>
        </div>
        <h4 class="section_15_title">Nguyễn Văn Long</h4>
        <h5 class="section_15_desc">Nhân Viên Văn Phòng</h5>
        <div class="section_15_content">
            <p>Mình bị rối loạn cương dương nên thường xuyên bị mặc cảm, tự ti khi quan hệ. 
                Mình tự chữa bằng các mẹo dân gian nhưng không thể đỡ được. 
                Tôi được bác hàng xóm giới thiệu cho Phòng khám đa khoa Bách Giai nên mình đến khám và điều trị đến lần 2 thì 
                bệnh thuyên giảm rất nhiều.Các bác sĩ khám rất cẩn thận rồi mới chỉ định thuốc Đông Tây Y phù hợp với tình 
                trạng bệnh nên mình cũng rất an tâm.</p>
        </div>
    </section>
    <!-- end section 15 -->

    <!-- section 16 -->
    <section id="section_16">
        <img class="show_image" src="./images/sec_16_contain.jpg"/>
    </section>
    <!-- end section 16 -->

    <!-- section 17 -->
    <section id="section_17">
        <img class="show_image" src="./images/sec_17_logo.jpg"/>
        <div class="section_17_contain">
            <p class="p_footer_title_hotline"> Hotline: <span><?php echo $hotline; ?></span></p>
            <p class="p_footer_title_time_to_work"> Khám bệnh từ: 8h - 20h tất cả các ngày trong tuần.</p>
            <p class="p_footer_title_address"> Địa chỉ: 813 Giải Phóng - Giáp Bát - Hà Nội.</p>
            <p class="p_footer_title_notice">Trang web nhằm phục vụ mục đích tham khảo, không mang tính chất chẩn đoán bệnh và trị liệu</p>
        </div>
    </section>
    <!-- end section 17 -->

    <!-- sticker footer -->
    <footer class="site-footer">
        <ul class="site-info">
            <li>
                <a href="<?php echo $link_tu_van ?>">
                    <img alt="Tư vấn" class="icon-footer show_image" src="./images/icon-footer-1.png" />
                    <p>Tư vấn</p>
                </a>
            </li>

            <li>
                <a target="_blank" href="<?php echo $link_google_map ?>">
                    <img alt="Đường đi" class="icon-footer show_image" src="./images/icon-footer-2.png" />
                    <p>Đường đi</p>
                </a>
            </li>

            <li>
                <a href="<?php echo $link_dat_lich ?>">
                    <img alt="Đặt lịch" class="icon-footer show_image" src="./images/icon-footer-3.png" />
                    <p>Đặt lịch</p>
                </a>
            </li>

            <li>
                <a href="tel:<?php echo $hotline; ?>">
                    <img alt="Gọi ngay" class="icon-footer show_image" src="./images/icon-footer-4.png" />
                    <p>Gọi ngay</p>
                </a>
            </li>
        </ul>
    </footer><!-- .site-footer -->
    <!-- end sticker footer -->
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/custom-js.js"></script>
    <script src="./js/jquery.js"></script>
    <script src="./js/home_slider.js"></script>
    <script src="./js/thanhnc.js"></script>
    <!-- <script src="./js/dialogue.js"></script> -->

    <!-- script chat outsite -->
    <?php echo $script_cai_dat_them ?>
    <!-- <script language="javascript" src="https://swt.hbhsz.net/JS/LsJS.aspx?siteid=lxd68021103&float=0&lng=en"></script> -->
    <!-- end script chat outsite -->

</body>

</html>