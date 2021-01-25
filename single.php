<!-- ヘッダーの読み込み -->
<?php get_header(); ?>
<?php the_post(); ?>

<!-- サムネイルの表示 -->
<?php the_post_thumbnail('category-thumb'); ?>

<!-- ブログタイトルの表示 -->
<h1><?php the_title(); ?></h1>

<!-- 本文の表示 抜粋ではない -->
<p><?php the_content(); ?></p>

<!-- 本文の表示 抜粋 -->
<p><?php the_excerpt(); ?></p>

<!-- フッター読み込み -->
<?php get_footer(); ?>









