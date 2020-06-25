<?php
$path = realpath(dirname(__FILE__) . '') . "/../../../../";
include $path . 'libs/meta.php';

?>
</head>

<body class="detail">
<?php include $path. 'libs/header.php'; ?>

    <div class="sub-mv">
        <h1>Works</h1>
    </div>

    <main>
        <ul class="breadcrumb">
            <li><a href="/">HOME</a></li>
            <li><a href="../archive">WORKS</a></li>
            <li><span><?php the_title();?></span></li>
        </ul>
        <div class="inner">
            <div class="leftblock">
                <div class="leftblock__main">
                    <time><?php get_the_time();?></time>  
                    <span><?php get_the_category();?></span>
                    <h2><?php the_title();?></h2>
                    <img src="../assets/img/common/detail_img@2x.jpg" alt="">
                    <p class="leftblock__txt">
                        <?php the_content();?>
                    </p>
                </div>
            </div>

            <div class="rightblock">
                <?php include $path. 'libs/side-nav.php'; ?>
            </div>
        </div>
    </main>

    <div class="btn">
        <a href="#" class="btn__back">一覧へ</a>
    </div>


    <?php include $path. 'libs/footer.php'; ?>
    <?php include $path. 'libs/script.php'; ?>
    <?php wp_footer(); ?>
</body>
</html>
