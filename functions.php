<?php

include( get_template_directory().'/assets/php/init.php' );

function remove_menus() {
// 	add_theme_support("title-tag");
// 	add_theme_support("post-thumbnails");
	global $menu;
    unset($menu[2]);  // ダッシュボード
    unset($menu[4]);  // メニューの線1
    // unset($menu[5]);  // 投稿
    // unset($menu[10]); // メディア
    // unset($menu[20]); // 固定ページ
    // unset($menu[25]); // コメント
    // unset($menu[59]); // メニューの線2
    // unset($menu[60]); // 外観
    // unset($menu[65]); // プラグイン
    // unset($menu[70]); // プロフィール
    // unset($menu[75]); // ツール
    // unset($menu[80]); // 設定
    // unset($menu[90]); // メニューの線3
}
add_action('admin_menu', 'remove_menus');

