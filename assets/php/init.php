<?php

function init_about() {
	register_post_type("about", [
		"labels" => [
			'name'               => "概要",
			'singular_name'      => "概要",
			'add_new'            => "概要を追加",
			'add_new_item'       => "概要を追加",
			'new_item'           => "概要を追加",
			'edit_item'          => "概要を編集",
			'view_item'          => "概要をみる",
			'all_items'          => "一覧",
			'search_items'       => "概要を探す",
			'not_found'          => "概要は見つかりませんでした",
			'not_found_in_trash' => "ゴミ箱は空です",
			'parent_item_colon'  => "",
			'menu_name'          => "About"
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
		'about_cat',   //カスタムタクソノミー名
		'about',   //このタクソノミーが使われる投稿タイプ
		array(
			'label' => '概要カテゴリー',  //カスタムタクソノミーのラベル
			'labels' => array(
			'popular_items' => 'よく使う概要カテゴリー',
			'edit_item' =>'概要カテゴリーを編集',
			'add_new_item' => '新規追加',
			'search_items' => '概要カテゴリーを検索'
			),
			'public' => true,  // 管理画面及びサイト上に公開
			'description' => '概要カテゴリー',  //説明文
			'hierarchical' => true,  //カテゴリー形式
			'show_in_rest' => true  //Gutenberg で表示
		)
	);
}

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

function init_thought() {
	register_post_type("thought", [
		"labels" => [
			'name'               => "ソート",
			'singular_name'      => "ソート",
			'add_new'            => "ソートを追加",
			'add_new_item'       => "ソートを追加",
			'new_item'           => "ソートを追加",
			'edit_item'          => "ソートを編集",
			'view_item'          => "ソートをみる",
			'all_items'          => "一覧",
			'search_items'       => "ソートを探す",
			'not_found'          => "ソートは見つかりませんでした",
			'not_found_in_trash' => "ゴミ箱は空です",
			'parent_item_colon'  => "",
			'menu_name'          => "Thought"
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
		'thought_cat',   //カスタムタクソノミー名
		'thought',   //このタクソノミーが使われる投稿タイプ
		array(
			'label' => 'ソートカテゴリー',  //カスタムタクソノミーのラベル
			'labels' => array(
			'popular_items' => 'よく使うソートカテゴリー',
			'edit_item' =>'ソートカテゴリーを編集',
			'add_new_item' => '新規追加',
			'search_items' => 'ソートカテゴリーを検索'
			),
			'public' => true,  // 管理画面及びサイト上に公開
			'description' => 'ソートカテゴリー',  //説明文
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



function init_review() {
    register_post_type("review", [
		"labels" => [
			'name'               => "レビュー",
			'singular_name'      => "レビュー",
			'add_new'            => "レビューを追加",
			'add_new_item'       => "レビューを追加",
			'new_item'           => "レビューを追加",
			'edit_item'          => "レビューを編集",
			'view_item'          => "レビューをみる",
			'all_items'          => "一覧",
			'search_items'       => "レビューを探す",
			'not_found'          => "レビューは見つかりませんでした",
			'not_found_in_trash' => "ゴミ箱は空です",
			'parent_item_colon'  => "",
			'menu_name'          => "Review"
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
		'review_cat',   //カスタムタクソノミー名
		'review',   //このタクソノミーが使われる投稿タイプ
		array(
			'label' => 'カテゴリー',  //カスタムタクソノミーのラベル
			'labels' => array(
			'popular_items' => 'よく使うカテゴリー',
			'edit_item' =>'カテゴリーを編集',
			'add_new_item' => '新規追加',
			'search_items' => 'カテゴリーを検索'
			),
			'public' => true,  // 管理画面及びサイト上に公開
			'description' => 'レビューのカテゴリー',  //説明文
			'hierarchical' => true,  //カテゴリー形式
			'show_in_rest' => true  //Gutenberg で表示
		)
	);
}

function init_link() {
    register_post_type("link", [
		"labels" => [
			'name'               => "リンク",
			'singular_name'      => "リンク",
			'add_new'            => "リンクを追加",
			'add_new_item'       => "リンクを追加",
			'new_item'           => "リンクを追加",
			'edit_item'          => "リンクを編集",
			'view_item'          => "リンクをみる",
			'all_items'          => "一覧",
			'search_items'       => "リンクを探す",
			'not_found'          => "リンクは見つかりませんでした",
			'not_found_in_trash' => "ゴミ箱は空です",
			'parent_item_colon'  => "",
			'menu_name'          => "Link"
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
		'link_cat',   //カスタムタクソノミー名
		'link',   //このタクソノミーが使われる投稿タイプ
		array(
			'label' => 'カテゴリー',  //カスタムタクソノミーのラベル
			'labels' => array(
			'popular_items' => 'よく使うカテゴリー',
			'edit_item' =>'カテゴリーを編集',
			'add_new_item' => '新規追加',
			'search_items' => 'カテゴリーを検索'
			),
			'public' => true,  // 管理画面及びサイト上に公開
			'description' => 'リンクのカテゴリー',  //説明文
			'hierarchical' => true,  //カテゴリー形式
			'show_in_rest' => true  //Gutenberg で表示
		)
	);
}

function init_contact() {
    register_post_type("contact", [
		"labels" => [
			'name'               => "コンタクト",
			'singular_name'      => "コンタクト",
			'add_new'            => "コンタクトを追加",
			'add_new_item'       => "コンタクトを追加",
			'new_item'           => "コンタクトを追加",
			'edit_item'          => "コンタクトを編集",
			'view_item'          => "コンタクトをみる",
			'all_items'          => "一覧",
			'search_items'       => "コンタクトを探す",
			'not_found'          => "コンタクトは見つかりませんでした",
			'not_found_in_trash' => "ゴミ箱は空です",
			'parent_item_colon'  => "",
			'menu_name'          => "Contact"
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
		'contact_cat',   //カスタムタクソノミー名
		'contact',   //このタクソノミーが使われる投稿タイプ
		array(
			'label' => 'カテゴリー',  //カスタムタクソノミーのラベル
			'labels' => array(
			'popular_items' => 'よく使うカテゴリー',
			'edit_item' =>'カテゴリーを編集',
			'add_new_item' => '新規追加',
			'search_items' => 'カテゴリーを検索'
			),
			'public' => true,  // 管理画面及びサイト上に公開
			'description' => 'コンタクトのカテゴリー',  //説明文
			'hierarchical' => true,  //カテゴリー形式
			'show_in_rest' => true  //Gutenberg で表示
		)
	);
}

add_action("init", "init_about");
add_action("init", "init_works");
add_action("init", "init_thought");
add_action("init", "init_note");
add_action("init", "init_review");
add_action("init", "init_link");
add_action("init", "init_contact");

