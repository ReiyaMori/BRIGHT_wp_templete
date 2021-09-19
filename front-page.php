<?php get_header()?>
  <main class="top-page">
      <div class="fv">
          <div id="slick">
              <div id="fv-1"></div>
              <div id="fv-2"></div>
              <div id="fv-3"></div>
              <div id="fv-4"></div>
          </div>
          <div class="to-scroll-container">
            <div id="to-scroll">SCROLL<br>↓</div>
          </div>
      </div>
      <section id="top-btn">
          <div class="section-container">
              <a class="top-btn need" href="javascript:void(0);">
                  <img src="<?= get_template_directory_uri(); ?>/assets/img/親子.png">
                  <p>支援を必要としている方</p>
              </a>
              <a class="top-btn donate" href="/donate">
                <img src="<?= get_template_directory_uri(); ?>/assets/img/ハート.png">
                <p>寄付・支援を検討している方</p>
            </a>
          </div>
      </section>
      <section id="news">
        <div class="section-container">
            <h2>最新のお知らせ</h2>
            <ul>
                <?php
                    $args = [
                    'post_type' => 'news', // カスタム投稿名
                    'posts_per_page' => 3, // 表示する数
                    ];
                    $my_query = new WP_Query($args); ?>
                <?php if ($my_query->have_posts()): // 投稿がある場合 ?>
                    <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
                    <!-- ▽ ループ開始 ▽ -->
                    <li><a href="<?php the_permalink();?>"><?php the_time(get_option('date_format')); ?> : <?php the_title(); ?></a></li>
                    <!-- △ ループ終了 △ -->
                    <?php endwhile; ?>
                <?php else: // 投稿がない場合?>
                    <li>まだ投稿がありません。</li>
                <?php endif; wp_reset_postdata(); ?>
            </ul>
            <div class="read-more">
                <a href="<?= home_url()?>/news">もっと見る...</a>
            </div>
        </div>
    </section>
    <section id="supporters">
        <div class="section-container">
            <h2>協力企業</h2>
            <p class="notice">※順不同</p>
            <div class="logos">

            <?php $group = SCF::get_option_meta('scf_options_seggtings','supporters');
                foreach ($group as$index => $fields ) {
                    if($index < 4){
                        $name = $fields['name'];
                        $link = $fields['url'];
                        $logo = wp_get_attachment_url($fields['logo-img']);
                        echo "<a href='$link'><img src='$logo'></a>";
                    }
            }?>
            
            </div>
            <div class="read-more">
                <a href="<?= home_url()?>/supporters">もっと見る...</a>
            </div>
        </div>
    </section>
    <section id="about">
        <div class="bg yellow">
            <div class="title-container">
                <h2>千葉こども宅食プロジェクト</h2>
            </div>
        </div>
        <div class="section-container">
            <p>私たちが行う千葉こども宅食プロジェクトでは、頑張る一人親家庭に無償で食品をお届けしています。
                <br>
            <span class="line">LINE</span>でのお申し込みですぐにご利用頂けます。</p>
            <img src="<?= get_template_directory_uri(); ?>/assets/img/概要01.png" alt="LINEで申し込みいただくと、２ヶ月に一度食品を無料でお届けします。">
            <div class="box-content">
                <div>
                    <h3>※お届けする食品</h3>
                    <ul>
                        <li>お米、乾麺</li>
                        <li>レトルト、インスタント食品</li>
                        <li>調味料</li>
                        <li>飲み物</li>
                        <li>お菓子 他</li>
                    </ul>
                    <p>常温で配送ができるものとなります。</p>
                </div>
                <a href="<?= get_template_directory_uri(); ?>/assets/img/box01.jpg" data-lightbox="top"><img src="<?= get_template_directory_uri(); ?>/assets/img/box01.jpg" atl="お届け内容"></a>
            </div>
        </div>
    </section>
    <section id="terms">
        <div class="bg yellow">
            <div class="title-container">
                <h2>ご利用条件</h2>
            </div>
        </div>
        <div class="section-container">
            <img src="<?= get_template_directory_uri(); ?>/assets/img/ご利用条件.png">
            <p class="notice">※行政の福祉課、社会福祉協議会や千葉市ひとり親家庭福祉会、千葉市子ども食堂ネットワーク、ひとり親サークル　エスクルの紹介の場合は、千葉市内全域を対象と致します。<br>LINEでのお申し込みの際に、その旨をお伝えください。</p>
        </div>
    </section>
    <section id="area">
        <div class="bg yellow">
            <div class="title-container">
                <h2>対象地域</h2>
            </div>
        </div>
        <div class="section-container">
            <img src="<?= get_template_directory_uri(); ?>/assets/img/対象地域.png">
            <p class="notice">※行政の福祉課、社会福祉協議会や千葉市ひとり親家庭福祉会、千葉市子ども食堂ネットワーク、ひとり親サークル　エスクルの紹介の場合は、千葉市内全域を対象と致します。<br>LINEでのお申し込みの際に、その旨をお伝えください。</p>
        </div>
    </section>
    <section id="howto">
        <div class="bg yellow">
            <div class="title-container">
                <h2>お申し込み方法</h2>
            </div>
        </div>
        <div class="section-container">
            <p>ご利用希望の方は、公式のLINEアカウントよりお申し込み下さい。
                <br>
                <br>
                お申し込みの際には、個人情報のご記入と児童扶養手当証書等の写真の添付をお願いしております。
                <br>
                あらかじめご了承ください。
            </p>
            <div class="btn-container">
                <a href="https://lin.ee/KNEUzLB" class="line-account btn"  target="_blank">
                    <img src="<?= get_template_directory_uri(); ?>/assets/img/line.png" alt="LINE">
                    <p>公式アカウント</p>
                </a>
            </div>
            <p class="notice">※千葉こども宅食プロジェクトの利用は無料ですが、LINE等で発生する通信料は利用者様ご自身でご負担いただきます。</p>
            <p><a href="<?= home_url()?>/donate" class="bold green">NPO BRIGHTへの支援、ボランティアをご検討の方はコチラ</a></p>
        </div>
    </section>
  </main>
<?php get_footer()?>