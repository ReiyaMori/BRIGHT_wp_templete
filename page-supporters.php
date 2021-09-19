<?php get_header()?>
  <main class="supporters-page">
    <div id="spacer"></div>
    <h1>協力企業様</h1>
    <section>
        <div class="section-container">
            <p class="notice">※順不同<br>※クリックで会社詳細を表示します</p>
        </div>
    </section>
    <?php
        $group = SCF::get_option_meta('scf_options_seggtings','supporters');
        foreach ($group as $fields ) {
            $name = $fields['name'];
            $comment = $fields['comment'];
            $link = $fields['url'];
            $logo = $fields['logo-img'];?>
        <article>
            <a href="<?= $link?>" class="article-container" target="blank">
                <div class="thum-container">
                    <img src="<?= wp_get_attachment_url($logo) ?>">
                </div>
                <div class="article-info-container">
                    <h3 class="title"><?= $name?></h3>
                    <p><?= $comment?></p>
                </div>
            </a>
        </article>
    <?php
    }
    ?>
  </main>
  <?php get_footer()?>