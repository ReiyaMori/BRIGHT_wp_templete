  <!-- start footer -->
  <div class="footer-btn-wrapper">
      <div class="footer-btn-container">
        <a href="<?= home_url()?>#about" class="need"><img src="<?= get_template_directory_uri(); ?>/assets/img/親子.png"><p>支援を必要としている方</p></a>
        <a href="<?= home_url()?>/donate" class="donate"><img src="<?= get_template_directory_uri(); ?>/assets/img/ハート.png"><p>寄付・支援を検討している方</p></a>
      </div>
  </div>
  <footer>
      <div class="footer-container">
        <div class="sns-links">
            <a  target="_blank" href="https://twitter.com/NPOBRIGHT"><img  src="<?= get_template_directory_uri(); ?>/assets/img/twitter.png"></a>
            <a  target="_blank" href="https://www.instagram.com/npo_bright/"><img src="<?= get_template_directory_uri(); ?>/assets/img/instagram.png"></a>
            <a  target="_blank" href="https://lin.ee/KNEUzLB"><img src="<?= get_template_directory_uri(); ?>/assets/img/line.png"></a>
        </div>
        <ul>
            <li><a href="<?= home_url()?>">TOP</a></li>
            <li><a href="<?= home_url()?>/about">ABOUT</a></li>
            <li><a href="<?= home_url()?>/news">お知らせ</a></li>
            <li><a href="<?= home_url()?>/donate">寄付支援</a></li>
            <li><a href="<?= home_url()?>/supporters">協力企業</a></li>
            <li><a href="<?= home_url()?>/contact">CONCTACT</a></li>
        </ul>
        <div class="under-container">
            <div class="under-left-container">
                <a href="<?= home_url()?>"><img src="<?= get_template_directory_uri(); ?>/assets/img/logo.png" alt="千葉こども宅食プロジェクト"></a>
                <img src="<?= get_template_directory_uri(); ?>/assets/img/sdgs.png">
                <div class="info-container">
                    <p>運営団体：NPO BRIGHT</p>
                    <p>所在地：<a target="_blank" href="https://goo.gl/maps/CDwJRT86v7iCrUFQ7">千葉県千葉市若葉区都賀4-8-21 1F</a></p>
                    <p>OPEN：毎週水曜日10:00~18:00 / 第2土曜日10:00～16:00</p>
                </div>
            </div>
            <div class="map-container">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1621.3645542665258!2d140.15240666732024!3d35.63440412222531!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xde147195ccf7cf30!2sNPO%20BRIGHT!5e0!3m2!1sja!2sjp!4v1631630012654!5m2!1sja!2sjp" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
      </div>
  </footer>
  <script type="text/javascript" src="<?= get_template_directory_uri(); ?>/assets/js/main.js"></script>
  <!-- WP FOOTER -->
  <?php wp_footer(); ?>
  <!-- WP FOOTER end -->
</body>
</html>