<?php get_header()?>
  <main class="contact-page">
    <div id="spacer"></div>
    <h1>CONTACT</h1>
    <section>
        <div class="section-container">
            <p>「千葉こども宅食プロジェクト」へお申し込みの方は、公式LINEよりご連絡ください。</p>
            <div class="btn-container">
                <a href="https://lin.ee/KNEUzLB" class="line-account btn"  target="_blank">
                    <img src="<?= get_template_directory_uri(); ?>/assets/img/line.png" alt="LINE">
                    <p>公式アカウント</p>
                </a>
            </div>
            <p>その他、千葉こども宅食プロジェクト 及び NPO BRIGHT に御用の方は、こちらのフォームよりご連絡ください。</p>
            <P>なお、ご返信までに数日いただく場合がございますので、あらかじめご了承ください。</P>
        </div>
        <div class="section-container">
            <?= do_shortcode( '[contact-form-7 id="52" title="contact-form1"]') ?>
        </div>
    </section>
  </main>
<?php get_footer()?>