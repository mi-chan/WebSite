<?php get_header();?>

    <header class="masthead">
      <video class="masthead-video" autoplay loop muted poster="<?php echo get_template_directory_uri(); ?>/two-up.png">
        <source src="<?php echo get_template_directory_uri(); ?>/img/image.mp4" type="video/mp4">
      </video>
      <h1>画像処理研究室<h1>
      <p class="ipl">Image Processing Lab</p>
    </header>

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
      $args = array(
          'numberposts' => 5,                //表示（取得）する記事の数
          'post_type' => 'infomations'
        );
         query_posts($args);
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
            <?php the_post_thumbnail(array(300, 300)); ?>
            <?php else: ?>
            <img src="<?php echo get_template_directory_uri(); ?>/img/noimage.png" width="300" height="300">
            <?php endif; ?>
          </div>
          <div class="col-xs-6 text-left posts-content">
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
        wp_reset_postdata(); //クエリのリセット
        ?>
    </section>
    <div class="space">
    </div>

    <section class="news contents-box blog">
        <h2 class="section-title text-center">
            <p class="hvr-float-shadow"><i class="fa fa-list-alt fa-5x faa-float animated-hover"></i><p>
            <span><a class="section-title__white" href="<?php echo get_post_type_archive_link('blog'); ?>">Blog</a></span>
            <hr class="colored02">
            <span class="section-title-ja text-center">研究室ブログ・更新情報</span>
        </h2>
        <article class="news-detail">
          <dl class="clearfix">
              <?php $args = array(
                  'numberposts' => 5,                //表示（取得）する記事の数
                  'post_type' => 'blog'    //投稿タイプの指定
              );
              $customPosts = get_posts($args);
              if($customPosts) : foreach($customPosts as $post) : setup_postdata( $post ); ?>
                  <dt class="news-date"><?php echo get_the_date(); ?></dt>
                  <dd class="news-description"><a href="<?php echo the_permalink();?>"><?php the_title(); ?></a></dd>
              <?php endforeach; ?>
              <?php else : //記事が無い場合 ?>
                  <dd class="news-description"><p>記事はまだありません。</p></dd>
              <?php endif;
              wp_reset_postdata(); //クエリのリセット
              ?>
          </dl>
        </article>
    </section>

    <section class="container text-center">
      <?php
      $args = array(
          'numberposts' => 5,                //表示（取得）する記事の数
          'post_type' => 'blog'
        );
         query_posts($args);
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
            <?php the_post_thumbnail(array(300, 300)); ?>
            <?php else: ?>
            <img src="<?php echo get_template_directory_uri(); ?>/img/noimage.png" width="300" height="300">
            <?php endif; ?>
          </div>
          <div class="col-xs-6 text-left posts-content">
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
        wp_reset_postdata(); //クエリのリセット
        ?>

    </section>
    <div class="space">
    </div>

<?php get_footer();?>
