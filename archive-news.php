<?php get_header()?>
  <main class="news-page">
    <div id="spacer"></div>
    <h1>NEWS & BLOG</h1>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <article>
            <a href="<?php the_permalink(); ?>" class="article-container">
                <div class="thum-container">
                    <?php if (has_post_thumbnail()) : ?>
                        <img src="<?php the_post_thumbnail_url( 'medium' ); ?>" alt="" />
                    <?php else : ?>
                        <img src="<?php echo catch_that_image(); ?>" alt="" />
                    <?php endif ; ?>
                </div>
                <div class="article-info-container">
                    <h3 class="title"><?php the_title(); ?></h3>
                    <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y/m/d'); ?></time>
                    <p><?php the_excerpt(); ?></p>
                </div>
            </a>
        </article>
    <?php endwhile; endif; ?>
    <section>
        <div class="section-container">
            <?php the_posts_pagination(); ?>
        </div>
	 </section>
  </main>
<?php get_footer()?>