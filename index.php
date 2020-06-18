<?php
$path = realpath(dirname(__FILE__) . '') . "/";
include $path . 'libs/meta.php';
?>
<link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" rel="stylesheet">

</head>


<body class="index">

    <?php include $path . 'libs/header.php';?>

    <div class="mv">
        <div class="slider">
            <div class="slide" style="background-image: url(./assets/img/index/fv-bgi_01@2x.jpg);"></div>
            <div class="slide" style="background-image: url(./assets/img/index/fv-bgi_02@2x.jpg);"></div>
            <div class="slide" style="background-image: url(./assets/img/index/fv-bgi_03@2x.jpg);"></div>
        </div>

        <h2 class="slider__logo">
            <span>Design for Smile.<br></span>
            <span>快適なオフィスを<br class="sp">
                <br class="sp">デザインする</span>
        </h2>
    </div>

    <section class="concept" id="concept">
        <div class="inner">
            <h3 class="title">CONCEPT</h3>
            <p class="concept__txt">"働きたくなる空間"をデザインする<br>ことで<br>
                    人々を幸せにする。
            </p>
            <div class="concept__box">
                <p class="concept__sentence">
                     私たちは、オフィスに特化した空間デザイン専門としております。その理由は、「働きたくなる空間で仕事ができれば多くの人を幸せにできるのではないか」と考えるためです。そんな思いの株式会社Creasta Designだからこそできる空間デザインを提供させていただきます。
                </p>
                <div class="concept__img">
                    <img src="./assets/img/index/concept-image@2x.jpg" alt="">
                </div>
            </div>
        </div>
        <div class="inner-large">
            <h3 class="subtitle">Our Concept</h3>
        </div>
    </section>

    <section class="works" id="works" style="background-image: url(./assets/img/index/works-bgi@2x.jpg);">
        <div class="inner-large">
            <h3 class="title white">Works</h3>
        </div>
        <div class="inner">
            <ul class="works__images">
                <li>
                    <a href="">
                        <img src="./assets/img/index/card-img01@2x.jpg" alt=""><p>新規サイトを公開しました。今回のサイトは白と黒を基調としたミニマルなデザインになっています。</p>
                    </a>
                </li>
                <li>
                    <a href="">
                        <img src="./assets/img/index/card-img02@2x.jpg" alt=""><p>新規サイトを公開しました。今回のサイトは白と黒を基調としたミニマルなデザインになっています。</p>
                    </a>
                </li>
                <li>
                    <a href="">
                        <img src="./assets/img/index/card-img03@2x.jpg" alt=""><p>新規サイトを公開しました。今回のサイトは白と黒を基調としたミニマルなデザインになっています。</p>
                    </a>
                </li>
            </ul>
            <div class="works__btn">
                <a href="#" class="botton">View more</a>
            </div>
        </div>
         <div class="inner-large">
            <h3 class="subtitle left">Our Works</h3>
        </div>
    </section>


    <section class="service" id="service">
        <div class="inner">
            <h3 class="title">Service</h3>
        </div>
            <ul class="service__images">
                <li>
                    <a href="#">
                        <div class="service__box">
                            <img src="./assets/img/index/service-img01@2x.jpg" alt="">
                            <p class="service__txt">Hearing</p>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <div class="service__box">
                            <img src="./assets/img/index/service-img02@2x.jpg" alt="">
                            <p class="service__txt">Planing</p>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <div class="service__box">
                            <img src="./assets/img/index/sevice-img03@2x.jpg" alt="">
                            <p class="service__txt">Direction</p>
                        </div>
                    </a>
                </li>
            </ul>
            <div class="inner-large">
                <h3 class="subtitle">Our Service</h3>
            </div>
    </section>

    <section class="contact" id="contact" style="background-image: url(./assets/img/index/contact-bgi@2x.jpg);">
        <div class="inner-large">
            <h3 class="title white">Contact</h3>
        </div>

        <div class="inner">
            <p class="contact__txt">お気軽にご相談ください。</p>
            <div class="contact__btn">
                <a href="#" class="botton">Contact</a>
            </div>
            <h3 class="subtitle left">Contact us</h3>
        </div>
    </section>

    <?php include $path.'libs/footer.php'?>
    <?php include $path.'libs/script.php'?>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3/dist/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>


    <script>
    $(function () {
        $('.slider').slick({
            infinite: true,
            autoplay: true,
            arrows: false,
            dots: false,
            autoplaySpeed: 2000,
            fade: true,
            draggable : true,
        })
    })



</script>

</body>
</html>
