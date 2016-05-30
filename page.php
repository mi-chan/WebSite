<?php get_header(); ?>
          <section class="page-box access">
            <h1 class="section-title text-center">
                <span class="section-title__black"><?php the_title(); ?></span>
            </h1>
          </section>
                <?php
                if (have_posts()) :
                    while (have_posts()) :
                        the_post();
                ?>
                <article class="container post">
                  <div class="col-xs-2">
                    <!--左余白-->
                  </div>
                  <div class="post-content col-xs-8 text-justify">
                      <?php the_content(); ?>
                  </div>
                  <div class="col-xs-3">
                    <!--右余白-->
                  </div>
                </article>
                <?php
                    endwhile;
                else:
                ?>

                <p>ページはありません！</p>

                <?php
                endif;
                ?>


<?php get_footer(); ?>
