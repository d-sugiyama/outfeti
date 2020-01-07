<?php

function init_works() {
	register_post_type("works", [
		"labels" => [
			'name'               => "作品",
			'singular_name'      => "作品",
			'add_new'            => "作品を追加",
			'add_new_item'       => "作品を追加",
			'new_item'           => "作品を追加",
			'edit_item'          => "作品を編集",
			'view_item'          => "作品をみる",
			'all_items'          => "一覧",
			'search_items'       => "作品を探す",
			'not_found'          => "作品は見つかりませんでした",
			'not_found_in_trash' => "ゴミ箱は空です",
			'parent_item_colon'  => "",
			'menu_name'          => "Works"
		],
		"public" => true,
		"has_archive" => true,
		"hierarchical" => false,
		"supports" => [
			"title",
			"editor",
			"page-attributes"
		],
		"menu_position" => 1,
		"menu_icon" => ""
	]);

	register_taxonomy(
		'works_cat',   //カスタムタクソノミー名
		'works',   //このタクソノミーが使われる投稿タイプ
		array(
			'label' => '作品カテゴリー',  //カスタムタクソノミーのラベル
			'labels' => array(
			'popular_items' => 'よく使う作品カテゴリー',
			'edit_item' =>'作品カテゴリーを編集',
			'add_new_item' => '新規追加',
			'search_items' => '作品カテゴリーを検索'
			),
			'public' => true,  // 管理画面及びサイト上に公開
			'description' => '作品カテゴリー',  //説明文
			'hierarchical' => true,  //カテゴリー形式
			'show_in_rest' => true  //Gutenberg で表示
		)
	);
}


function init_note() {
    register_post_type("note", [
		"labels" => [
			'name'               => "ノート",
			'singular_name'      => "ノート",
			'add_new'            => "ノートを追加",
			'add_new_item'       => "ノートを追加",
			'new_item'           => "ノートを追加",
			'edit_item'          => "ノートを編集",
			'view_item'          => "ノートをみる",
			'all_items'          => "一覧",
			'search_items'       => "ノートを探す",
			'not_found'          => "ノートは見つかりませんでした",
			'not_found_in_trash' => "ゴミ箱は空です",
			'parent_item_colon'  => "",
			'menu_name'          => "Note"
		],
		"public" => true,
		"has_archive" => true,
		"hierarchical" => false,
		"supports" => [
			"title",
			"editor",
			"page-attributes"
		],
		"menu_position" => 2,
		"menu_icon" => ""
	]);
	register_taxonomy(
		'note_cat',   //カスタムタクソノミー名
		'note',   //このタクソノミーが使われる投稿タイプ
		array(
			'label' => 'カテゴリー',  //カスタムタクソノミーのラベル
			'labels' => array(
			'popular_items' => 'よく使うノートカテゴリー',
			'edit_item' =>'ノートカテゴリーを編集',
			'add_new_item' => '新規追加',
			'search_items' => 'ノートカテゴリーを検索'
			),
			'public' => true,  // 管理画面及びサイト上に公開
			'description' => 'ノートカテゴリー',  //説明文
			'hierarchical' => true,  //カテゴリー形式
			'show_in_rest' => true  //Gutenberg で表示
		)
	);
}



function init_collection() {
    register_post_type("collection", [
		"labels" => [
			'name'               => "コレクション",
			'singular_name'      => "コレクション",
			'add_new'            => "コレクションを追加",
			'add_new_item'       => "コレクションを追加",
			'new_item'           => "コレクションを追加",
			'edit_item'          => "コレクションを編集",
			'view_item'          => "コレクションをみる",
			'all_items'          => "一覧",
			'search_items'       => "コレクションを探す",
			'not_found'          => "コレクションは見つかりませんでした",
			'not_found_in_trash' => "ゴミ箱は空です",
			'parent_item_colon'  => "",
			'menu_name'          => "Collection"
		],
		"public" => true,
		"has_archive" => true,
		"hierarchical" => false,
		"supports" => [
			"title",
			"editor",
			"page-attributes"
		],
		"menu_position" => 3,
		"menu_icon" => ""
	]);	
	register_taxonomy(
		'collection_cat',   //カスタムタクソノミー名
		'collection',   //このタクソノミーが使われる投稿タイプ
		array(
			'label' => 'カテゴリー',  //カスタムタクソノミーのラベル
			'labels' => array(
			'popular_items' => 'よく使うカテゴリー',
			'edit_item' =>'カテゴリーを編集',
			'add_new_item' => '新規追加',
			'search_items' => 'カテゴリーを検索'
			),
			'public' => true,  // 管理画面及びサイト上に公開
			'description' => 'コレクションのカテゴリー',  //説明文
			'hierarchical' => true,  //カテゴリー形式
			'show_in_rest' => true  //Gutenberg で表示
		)
	);
}

add_action("init", "init_works");
add_action("init", "init_note");
add_action("init", "init_collection");

