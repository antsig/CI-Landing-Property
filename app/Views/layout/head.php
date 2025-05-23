<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title><?= $title ?></title>
    <meta content="<?= strip_tags($description) ?>" name="description">
    <meta content="<?= $keywords ?>, <?= keywords() ?>" name="keywords">

    <!-- Favicons -->
    <link href="<?= base_url('assets/upload/image/' . $site['icon']) ?>" rel="icon">
    <link href="<?= base_url('assets/upload/image/' . $site['icon']) ?>" rel="apple-touch-icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="<?= base_url() ?>/assets/estate/lib/animate/animate.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>/assets/estate/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?= base_url() ?>/assets/estate/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?= base_url() ?>/assets/estate/css/style.css" rel="stylesheet">
    


    <!-- <style>
    .modal-backdrop.show {
        z-index: 1079;
        /* satu level di bawah modal */
    }

    .modal.show {
        z-index: 1080 !important;
        /* lebih tinggi dari navbar (default navbar-bootstrap: 1030) */
    }

    .scroll-offset {
        scroll-margin-top: 200px;
    }

    .modal-navigation-btn {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        z-index: 10;
        background-color: rgba(255, 255, 255, 0.7);
        border: none;
        padding: 10px 15px;
        border-radius: 50%;
        font-size: 20px;
    }

    .modal-navigation-left {
        left: 10px;
    }

    .modal-navigation-right {
        right: 10px;
    }
    </style>

    <script>
    const swiper = new Swiper('.mySwiper', {
        slidesPerView: 1,
        spaceBetween: 20,
        breakpoints: {
            768: {
                slidesPerView: 2
            },
            992: {
                slidesPerView: 3
            }
        },
        loop: true,
        autoplay: {
            delay: 3000,
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
    });
    </script> -->

</head>

<body>