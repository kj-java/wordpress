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
 * @link http://wpdocs.osdn.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86
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
define( 'DB_NAME', 'miu' );

/** MySQL データベースのユーザー名 */
define( 'DB_USER', 'root' );

/** MySQL データベースのパスワード */
define( 'DB_PASSWORD', 'root' );

/** MySQL のホスト名 */
define( 'DB_HOST', 'localhost' );

/** データベースのテーブルを作成する際のデータベースの文字セット */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'NT8FAZQTT+`pa~poMCt!Qv1F9r ZC;!N}GF-$iHCOc/`~jQiz>-dBIT]=S9>VE[5' );
define( 'SECURE_AUTH_KEY',  '-?2JJgf)D`o68RKjgtGE$>MYwvb6{x?LkFb?OXqy:}p<EZcDf2Gma8onyj5*?@q3' );
define( 'LOGGED_IN_KEY',    '2;cZe~#A6df0bv@*]j!GvVm+Jf]8-!|+ZcL0H+PS5)c<yZrRj+Ws!z/S?G4L&Rcp' );
define( 'NONCE_KEY',        ',lxM:dyXq&BB%T=5{rcQMLvLbc:kjiX6-mp4%_EK@ev)V~(ec_h8AW^ZO(v;y X1' );
define( 'AUTH_SALT',        '#wHLJ3v,?zra32g ^ )N%`?$&k@ti|!e Ut[Aa !$gjLnr~?/Z+yZTD+11$C!ERY' );
define( 'SECURE_AUTH_SALT', '-,8NZhfR~5%[^Et>D|hya:)dwzJ R+-:szQSnJD`0CA<x@9u(dY.6pJd$& p$<qd' );
define( 'LOGGED_IN_SALT',   'G{ljJ~4^2ykBs7[^IE:fd90u~0v]oN q/@bNy-7^8doo@p/{PK~k?qm5AW@l6Xae' );
define( 'NONCE_SALT',       'KC)<u%QAIZ{j{P*Lm;$8i+ K3=-@e4/<8G(g..5.xqL%+T:0:TX&(3i}ZV,$iel&' );

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
 * その他のデバッグに利用できる定数については Codex をご覧ください。
 *
 * @link http://wpdocs.osdn.jp/WordPress%E3%81%A7%E3%81%AE%E3%83%87%E3%83%90%E3%83%83%E3%82%B0
 */
define('WP_DEBUG', false);

/* 編集が必要なのはここまでです ! WordPress でのパブリッシングをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
