<?php

// 管理画面

add_editor_style('editor-style.css');

add_action( 'admin_menu', 'remove_menus' );
function remove_menus(){
//     remove_menu_page( 'index.php' ); //ダッシュボード
    remove_menu_page( 'edit.php' ); //投稿メニュー
    // remove_menu_page( 'upload.php' ); //メディア
//     remove_menu_page( 'edit.php?post_type=page' ); //ページ追加
    remove_menu_page( 'edit-comments.php' ); //コメントメニュー
    // remove_menu_page( 'themes.php' ); //外観メニュー
    // remove_menu_page( 'plugins.php' ); //プラグインメニュー
    // remove_menu_page( 'tools.php' ); //ツールメニュー
    // remove_menu_page( 'options-general.php' ); //設定メニュー
    remove_menu_page( 'wpcf7' );
	remove_menu_page( 'edit.php?post_type=smart-custom-fields' );
}

// 管理画面end

// scf 追加
function my_register_fields( $settings, $type, $id, $meta_type ) {
  // オプションページに限定x
  if ( 'scf_options_seggtings' !== $type ) {
		return $settings;
	}
  $Setting = SCF::add_setting( 'id-1', '画像とリンクの設定');
  $items = array(
    array(
      'type'  => 'image',
      'name'  => 'logo-img',   
      'size'  => 'thumbnail',                        
      'label' => 'ロゴ画像',
      'notes' => '※協賛企業のロゴ',
    ),
    array(
      'type'  => 'text',     
      'name'  => 'name',
      'label' => '企業名',
      'notes' => '※企業一覧ページに表示',
    ),
    array(
      'type'  => 'text',     
      'name'  => 'url',
      'label' => 'リンクURL',
      'notes' => '※クリックでのURL',
    ),
    array(
      'type'  => 'textarea',     
      'name'  => 'comment',
      'label' => 'コメント',
      'notes' => '※業一覧ページに表示',
    ),
  );  
  $Setting->add_group( 'supporters', true, $items ); 
  $settings[] = $Setting;
  return $settings;
 }
 
 add_filter( 'smart-cf-register-fields', 'my_register_fields', 10, 4 );

// scf 追加 end

// smart custom field オプションページ設定

SCF::add_options_page( 'ページタイトル', '協力企業', 'manage_options', 'scf_options_seggtings', 'dashicons-building', 20);
// smart custom field オプションページ設定 end -

// カスタム投稿タイプ
add_action( 'init', 'create_post_type' );
function create_post_type() {
    register_post_type( 'news',[ // 投稿タイプ名の定義
        'labels' => [
            'name'          => 'お知らせ', // 管理画面上で表示する投稿タイプ名
            'singular_name' => 'news',    // カスタム投稿の識別名
        ],
        'public'        => true,  // 投稿タイプをpublicにするか
        'has_archive'   => true, // アーカイブ機能ON/OFF
        'menu_position' => 5,     // 管理画面上での配置場所
        'show_in_rest'  => true,  // 5系から出てきた新エディタ「Gutenberg」を有効にする
        'menu_icon'       => 'dashicons-megaphone',
		'supports'            =>[
                            'title',        // 編集ページのタイトル
                            'editor',       // 編集ページの本文エディタ
                            'thumbnail',]    // 編集ページのアイキャッチ画像
    ],);
  
}

// カスタム投稿タイプ -end-


// news の アイキャッチ画像 テーマ全体で有効
add_theme_support( 'post-thumbnails', array( 'post','page','news' ) );

// アイキャッチ取得
function catch_that_image() {
	global $post, $posts;
	$first_img = '';
	ob_start();
	ob_end_clean();
	$output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
	$first_img = $matches [1] [0];
 
	if(has_post_thumbnail()) {
		$img_id = get_post_thumbnail_id();
		$img_url = wp_get_attachment_image_src($img_id, 'thumbnail', true);
		$first_img = $img_url[0];
	}
	if(empty($first_img)) {
		// アイキャッチ画像があればそちらを表示する
		if(has_post_thumbnail()) {
			$img_id = get_post_thumbnail_id();
			$img_url = wp_get_attachment_image_src($img_id, 'thumbnail', true);
			$first_img = $img_url[0];
		} else {
			// 記事内で画像がなかった時のための画像を指定（ディレクトリ先や画像名称は任意）
			$first_img = esc_url(get_template_directory_uri()) . "/assets/img/default.jpeg";
		}
	}
 
	return $first_img;
}


/*
出力時
<img src="<?php echo catch_that_image(); ?>" alt="アイキャッチ" />
*/
// アイキャッチ end

