<?php get_header(); ?>
<section class="news contents-box info">
    <h2 class="section-title text-center">
        <p class="hvr-float-shadow"><i class="fa fa-info fa-5x faa-float animated-hover"></i><p>
        <span><a class="section-title__white" href="<?php echo get_post_type_archive_link('infomations'); ?>">News</a></span>
            <hr class="colored02">
        <span class="section-title-ja text-center">お知らせ・更新情報</span>
    </h2>
    <article class="news-detail">
      <dl class="clearfix">
          <?php $args = array(
              'numberposts' => 5,                //表示（取得）する記事の数
              'post_type' => 'infomations'    //投稿タイプの指定
          );
          $customPosts = get_posts($args);
          if($customPosts) : foreach($customPosts as $post) : setup_postdata( $post ); ?>
              <dt class="news-date"><?php echo get_the_date(); ?></dt>
              <dd class="news-description"><a href="<?php echo the_permalink(); ?>"><?php the_title(); ?></a></dd>
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
                <div>
                    <div class="post-header">
                        <h1>
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </h1>
                        <div class="post-meta">
                            <?php echo get_the_date(); ?>
                        </div>
                    </div>
                      <div class="col-xs-2">
                        <!--左余白-->
                      </div>
                      <div  class="col-xs-8 text-justify">
                        <div class="post-content">
                        <?php the_content(); ?>
                      </div>
                      </div>
                      <div class="col-xs-2">
                        <!--右余白-->
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
</section>
<nav class="text-center">
  <ul class="pager">
    <li><?php next_post_link('&laquo;%link'); ?></li>
    <li><?php previous_post_link('%link&raquo;'); ?></li>
  </ul>
</nav>
<?php get_footer(); ?>
