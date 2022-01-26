<?php

/**
 * WordPress の基本設定
 *
 * このファイルは、インストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さずにこのファイルを "wp-config.php" という名前でコピーして
 * 直接編集して値を入力してもかまいません。
 *
 * このファイルは、以下の設定を含みます。
 *
 * * MySQL 設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link https://ja.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.osdn.jp/%E7%94%A8%E8%AA%9E%E9%9B%86#.E3.83.86.E3.82.AD.E3.82.B9.E3.83.88.E3.82.A8.E3.83.87.E3.82.A3.E3.82.BF 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define('DB_NAME', 'multisite_henrik');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'root');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', '');

/** MySQL のホスト名 */
define('DB_HOST', '');

/** データベースのテーブルを作成する際のデータベースの文字セット */
define('DB_CHARSET', 'utf8mb4');

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define('DB_COLLATE', '');

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ')aAd#DnWa6oQ&Ixt)B+}[,a2;+QGdu`%FA)rsP:n*c1Hxa7/R0`@yW-cIP$(Prie');
define('SECURE_AUTH_KEY',  'SZA*Eks[y7^1zbuDRK1,g@C@Y:LpDiGT/&&I$FDge/JEj7~ z3L]!<3RxTvJ|xg>');
define('LOGGED_IN_KEY',    't;gahfz.-Ewh|m9mu^A)I.un[^L^EYgJxG-4nZ0KAE=x.mNdp!;bL4IG_mRG?Q<<');
define('NONCE_KEY',        '60 KTwYGl~XXK ,ugerdiR>+m7l#)`?9,tsLB>HU$FAi.l#>]G&.CIs2quvqYnIr');
define('AUTH_SALT',        'K?aK|gYRWs)YN6CHMQ]Zk^hWQdAcU!c:GG(Fe!#pj:E=Y_WxB_)kP&}mCwv Iu;W');
define('SECURE_AUTH_SALT', ';[xH/_d+C~o7h8BsC71&;}sgkC.:xo_ C^!86BfPD#r~^UBZ `+-w6|^?vybo5to');
define('LOGGED_IN_SALT',   'xcN{_kQn+$4M_*?eC@ARXH>(fDvD*~-Z;53:5`X{=YcxL,b*&y~yUnl3FUU}2g|`');
define('NONCE_SALT',       '4h+a8%s;T!DPYVN|adBa]M;fdu_u|R2w{fWiz0|7F~}4GXfsiJlXN^#~^&fNRQan');

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数についてはドキュメンテーションをご覧ください。
 *
 * @link https://ja.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* カスタム値は、この行と「編集が必要なのはここまでです」の行の間に追加してください。 */

// マルチサイト有効のため追記
define('WP_ALLOW_MULTISITE', true);
define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', false);
define('DOMAIN_CURRENT_SITE', 'localhost');
define('PATH_CURRENT_SITE', '/multisite_henrik/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);
/* 編集が必要なのはここまでです ! WordPress でのパブリッシングをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
