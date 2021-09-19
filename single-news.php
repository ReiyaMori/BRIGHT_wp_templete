<?php get_header()?>
  <main class="single-page">
    <div id="spacer"></div>
    <article>
        <div class="single-container">
            <?php if(have_posts()): while(have_posts()):the_post(); ?>
            <h1><?php the_title(); ?></h1>
            <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y/m/d'); ?></time>
            <?php the_content('Read more'); ?>
            <?php endwhile; endif; ?>
        </div>
    </article>
  </main>
<?php get_footer()?>