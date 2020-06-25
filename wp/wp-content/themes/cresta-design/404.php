<?php
$path = realpath(dirname(__FILE__) . '') . "/../../../../";
include $path . 'libs/meta.php';
// WordPressさんサイドで用意してくれるhtmlをhead内に出力してくれる関数
wp_head();
?>
</head>

<body class="notfound">
<?php include $path. 'libs/header.php'; ?>
    <main>
        <ul class="breadcrumb">
            <li><a href="/">HOME</a></li>
            <li>404</li>
        </ul>

        <div class="inner">
            <p>ページが見つかりません</p>

        </div>
    </main>

    <?php include $path. 'libs/footer.php'; ?>
    <?php include $path. 'libs/script.php'; ?>
    <?php wp_footer(); ?>
</body>
</html>