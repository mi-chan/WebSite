<?php get_header();?>

<section class="news contents-box blog">
    <h2 class="section-title text-center">
        <p class="hvr-float-shadow"><i class="fa fa-list-alt fa-5x faa-float animated-hover"></i><p>
        <span class="section-title__white">blog</span>
        <hr class="colored02">
        <span class="section-title-ja text-center">研究室ブログ・更新情報</span>
    </h2>
    <article class="news-detail">
      <dl class="clearfix">
          <?php $args = array(
              'numberposts' => 5,                //表示（取得）する記事の数
              'post_type' => 'post'    //投稿タイプの指定
          );
          $customPosts = get_posts($args);
          if($customPosts) : foreach($customPosts as $post) : setup_postdata( $post ); ?>
              <dt class="news-date"><?php echo get_the_date(); ?></dt>
              <dd class="news-description"><a href=""><?php the_title(); ?></a></dd>
          <?php endforeach; ?>
          <?php else : //記事が無い場合 ?>
              <dd class="news-description"><p>記事はまだありません。</p></dd>
          <?php endif;
          wp_reset_postdata(); //クエリのリセット ?>
      </dl>
</article>
</section>
    <section class="container text-center">
      <?php
          if (have_posts()) :
              while (have_posts()) :
                  the_post();
          ?>
        <div class="page-header">
          <h1>
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
          </h1>
          <div>
            <?php echo get_the_date(); ?>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-6 text-right">
            <?php if (has_post_thumbnail()) : ?>
            <?php the_post_thumbnail(array(200, 200)); ?>
            <?php else: ?>
            <img src="<?php echo get_template_directory_uri(); ?>/img/noimage.png" width="300" height="300">
            <?php endif; ?>
          </div>
          <div class="col-xs-6 text-left post-content">
            <?php
            the_content('<br>続きを読む &raquo;</br>');
            ?>
          </div>
        </div>
<?php
endwhile;
else:
?>

<p>記事はありません！</p>

<?php
endif;
?>

<nav>
  <ul class="pager">
    <li><?php previous_posts_link('&laquo;prev'); ?></li>
    <li><?php next_posts_link('next&raquo;'); ?></li>
  </ul>
</nav>

    </section>


<?php get_footer();?>
