<?php
$path = realpath(dirname(__FILE__) . '') . "/../../../../";
include $path . 'libs/meta.php';
// WordPressさんサイドで用意してくれるhtmlをhead内に出力してくれる関数
wp_head();

?>
</head>

<body class="archive">
<?php include $path. 'libs/header.php'; ?>

    <div class="sub-mv">
        <h1>Works</h1>
    </div>

    <main>
        <ul class="breadcrumb">
            <li><a href="/">HOME</a></li>
            <li>WORKS</li>
            <li><span><?php the_title(); ?></span></li>
        </ul>

        <div class="inner">
            <?php if ( have_posts() ):　//投稿ある場合 ?>
                <!-- article-listのscss作る -->
                    <ul class="article-list">
                        <?php
                        //投稿内容を繰り返す
                        while ( have_posts() ) : the_post();
                            // グロパール変数（&post）をもちいてwordpressで投稿する記事のIDを取得するコードを変数urlとする
                            $url = get_permalink($post->id);
                            // 投稿のタイトルを取得するコードを変数titleとする
                            $title = $post->post_title;
                            // 投稿記事のタクソノミー情報を取得する,タームを取得するタクソノミーの名前は'workscat'
                            $terms = get_the_terms($post->id, 'workscat');
                            // タームの名前を変数termsとする
                            $term = $terms[0]->name;
                            // 記事の投稿日を取得し、変数dateとする
                            $date = get_the_time("Y/m/d", $post->ID);
                            // 投稿のアイキャッチ画像を取得し、変数$thumbnail_idとする
                            $thumbnail_id = get_post_thumbnail_id();
                            // もし$thumbnail_idの内容が空ではないとき
                            if($thumbnail_id != ''){
                                // アイキャッチ画像のIDを取得し、画像のサイズはサムネイルとする、これらを変数$thumbnailとする
                                $thumbnail = wp_get_attachment_image_src($thumbnail_id, 'thumbnail', true);
                                // 変数$thumbnailの０番目を変数$thumbnail_urlとする
                                $thumbnail_url = $thumbnail[0];
                                // もし$thumbnail_idの内容が存在する時は
                            } else {
                                // default.jpgを$thumbnail_urlにいれる
                                $thumbnail_url = '/img/common/default.jpg';
                            }
                        ?>
                        <li>
                            <!-- wordpressで投稿する記事のIDをリンク付する -->
                            <a href="<?php echo $url; ?>">
                                <figure>
                                    <img src="<?php echo $thumbnail_url; ?>" alt="">
                                </figure>
                                <div>
                                    <time><?php echo $date; ?></time>
                                    <span class="category"><?php echo $term; ?></span>
                                        <h2><?php echo $title; ?></h2>
                                        <!-- これで記事の先頭から110文字の抜粋が表示される -->
                                        <p><?php the_excerpt(); ?></p>
                                    </div>
                                </a>
                        </li>
                        <?php endwhile;?>
                    </ul>
                    <?php else: ?>
                    <p class="article-list">対象の記事はございません</p>
                    <?php endif; ?>                     
                    <?php include $path. 'libs/side-nav.php'; ?>                        
                    <?php
                    $count_posts = wp_count_posts('works');
                    $count = $count_posts->publish;
                    if( $count > 10 ):
                    ?>
                    <nav class="pagination">
                        <?php wp_pagenavi(); ?>
                    </nav>
                    <?php endif; ?>
                    
        </div>
    </main>

    <div class="jumpmenu">
        <div class="jumpmenu__wrap">
            <a href="#" class="jumpmenu__wrap_button">&lt; PREV</a>
            <ul>
                <li>
                    <a href="#">1</a>
                </li>
                <li>
                    <a href="#">2</a>
                </li>
                <li>
                    <a href="#">3</a>
                </li>
            </ul>
            <a href="#" class="jumpmenu__wrap_button">NEXT &gt;</a>
        </div>
    </div>


    <?php include $path. 'libs/footer.php'; ?>
    <?php include $path. 'libs/script.php'; ?>
    <?php wp_footer(); ?>
</body>
</html>
