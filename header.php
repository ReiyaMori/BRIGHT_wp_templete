<!DOCTYPE html>
<html lang="ja">
<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
  <meta charset="utf-8">
	<title><?php bloginfo('name'); wp_title('|', true, 'left'); ?></title>
<!-- 	<title>千葉こども宅食プロジェクト | NPO BRIGHT</title> -->
  <meta name="description" content="私たちが行う「千葉こども宅食プロジェクト」では、頑張る一人親家庭に無償で食品をお届けしています。いつでも頼って頂けるよう、LINEでのお申し込みですぐにご利用いただけます。食品のお届けは2か月に1度、定期的に行います。">
  <meta name="keywords" content="フードバンク,宅食,こども,支援,ひとり親,シングルマザー,行政,千葉市,若葉区,都賀,高校生,小学生,中学生,児童支援,共働き,生活支援,生活困窮,保険,年金,福祉,手当,SDGs,持続可能,フードロス,廃棄,食品">
  
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
  <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/assets/css/reset.css">
  <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/assets/css/style.css">

  <link rel="shortcut icon" href="<?= get_template_directory_uri(); ?>/assets/img/favicon.png" type="image/png">
  <link rel="apple-touch-icon-precomposed" href="<?= get_template_directory_uri(); ?>/assets/img/favicon.png" type="image/png">
  <link rel="apple-touch-icon" href="<?= get_template_directory_uri(); ?>/assets/img/favicon.png" type="image/png">
  
  <meta name="robots" content="max-image-preview:large">
  <!-- OGP -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:site" content="@NPOBRIGHT">
  <meta name="twitter:title" content="千葉こども宅食プロジェクト">
  <meta name="twitter:description" content="千葉こども宅食プロジェクト 私たちが行う千葉こども宅食プロジェクトでは、頑張る一人親家庭に無償で食品をお届けしています。 LINEでのお申し込みですぐにご利用頂けます。 ※お届けする食品は、お米や乾麺">
  <meta name="twitter:image" content="https://npo-bright.com/wp-content/uploads/2021/05/支援hd.jpg">
  <!-- OGP end -->

  <!-- [if lt IE 9] -->
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
  <!-- [endif] -->

  <!-- CDN jquery - lightbox - slick -->
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.7.1/css/lightbox.css" rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.7.1/js/lightbox.min.js" type="text/javascript"></script>
  <!-- end lightbox -->
 <!-- Global site tag (gtag.js) - Google Analytics -->
 <script async src="https://www.googletagmanager.com/gtag/js?id=G-3J3V0WFWH5"></script>
 <script>
   window.dataLayer = window.dataLayer || [];
   function gtag(){dataLayer.push(arguments);}
   gtag('js', new Date());

   gtag('config', 'G-3J3V0WFWH5');
 </script>
  <!-- WP_HEAD -->
  <?php wp_head(); ?>
  <!-- WP_HEAD end -->
</head>
<body>
  <header>
      <div class="pc-header-container">
          <div class="upper-container">
              <div class="logo-container">
                  <a href="<?= home_url()?>"><img src="<?= get_template_directory_uri(); ?>/assets/img/logo.png" alt="千葉こども宅食プロジェクト"></a>
              </div>
              <div class="sns-container">
                  <img src="<?= get_template_directory_uri(); ?>/assets/img/sdgs.png" class="sdgs">
                  <div class="sns-links">
                    <a  target="_blank" href="https://twitter.com/NPOBRIGHT"><img  src="<?= get_template_directory_uri(); ?>/assets/img/twitter.png"></a>
                    <a  target="_blank" href="https://www.instagram.com/npo_bright/"><img src="<?= get_template_directory_uri(); ?>/assets/img/instagram.png"></a>
                    <a  target="_blank" href="https://lin.ee/KNEUzLB"><img src="<?= get_template_directory_uri(); ?>/assets/img/line.png"></a>
                  </div>
              </div>
          </div>
          <nav>
              <ul>
                  <li><a href="<?= home_url()?>/about">ABOUT</a></li>
                  <li><a href="<?= home_url()?>/news">お知らせ</a></li>
                  <li><a href="<?= home_url()?>/donate">寄付・支援</a></li>
                  <li><a href="<?= home_url()?>/contact">CONTACT</a></li>
              </ul>
          </nav>
      </div>
      <div class="sp-header-container">
        <div class="logo-container">
            <a href="<?= home_url()?>"><img src="<?= get_template_directory_uri(); ?>/assets/img/logo.png" alt="千葉こども宅食プロジェクト"></a>
        </div>
        <div class="hamburger">
            <div class="bar top"></div>
            <div class="bar middle"></div>
            <div class="bar bottom"></div>
        </div>
      </div>
      <div class="sp-menu">
        <nav>
            <ul>
            <li><a href="<?= home_url()?>">TOP</a></li>
                <li><a href="<?= home_url()?>/about">ABOUT</a></li>
                <li><a href="<?= home_url()?>/news">お知らせ</a></li>
                <li><a href="<?= home_url()?>/donate">寄付・支援</a></li>
                <li><a href="<?= home_url()?>/contact">CONTACT</a></li>
            </ul>
        </nav>
        <div class="sns-container">
            <img src="<?= get_template_directory_uri(); ?>/assets/img/sdgs.png" class="sdgs">
            <div class="sns-links">
              <a  target="_blank" href="https://twitter.com/NPOBRIGHT"><img  src="<?= get_template_directory_uri(); ?>/assets/img/twitter.png"></a>
              <a  target="_blank" href="https://www.instagram.com/npo_bright/"><img src="<?= get_template_directory_uri(); ?>/assets/img/instagram.png"></a>
              <a  target="_blank" href="https://lin.ee/KNEUzLB"><img src="<?= get_template_directory_uri(); ?>/assets/img/line.png"></a>
            </div>
        </div>
      </div>
  </header>