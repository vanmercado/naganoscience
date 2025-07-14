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
define('DB_NAME', 'ai129yg9j2_nagano');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'ai129yg9j2');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', 'gtSDuvNs');

/** MySQL のホスト名 */
define('DB_HOST', '127.0.0.1');

/** データベースのテーブルを作成する際のデータベースの文字セット */
define( 'DB_CHARSET', 'utf8mb4' );

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define( 'DB_COLLATE', '' );

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'b8 i36&QFPF[{WKvay+Oicl{7:QMGLr4-kmP,i ;ysC$*p3--Q:.|;K+B^~N<j~s');
define('SECURE_AUTH_KEY',  'T5H>x8|mmJ^G4;;uCqT~pfPaa4R7P|[XNkCFnlw[=rS5>$!2+J7|vlC8u:kJx+@,');
define('LOGGED_IN_KEY',    'w9S7)/oymWaQO%y5ZQD7rU`#uCESB6)f4x1pm{26J#>lkr4r++J{L=;M;(a%pB+O');
define('NONCE_KEY',        '%2>]`={hP*Z(uV#2/g~7wsXU(/3s]p_(X+5!ES,Ef}6>pbQb/yqMdpxkw,mPjtN=');
define('AUTH_SALT',        ':ag^cB>HLIyo3#Be/}J#t5Z#z3,k=^(|,+d*)!g.)adWXlpj%78)i1P&K+qf7TTg');
define('SECURE_AUTH_SALT', 'F<Ax @=Pl^+r[zmeq(+BhF]/[hf9ABCPG^Ev>OYIXJApKt0-z1f?G00sYbL(Rr.#');
define('LOGGED_IN_SALT',   'p@ffZ[T&OJzHLGiWr)e`A*o$&F7AA.+qt(V/*.c?6$~5ZjD:}<=CV;LaQ]o2|fWd');
define('NONCE_SALT',       ' H95q&Hy^^dO=$@X}o6gt:9TN} 3-OPS2>IT|xI_rctX`_!x~<n!V5o%mJRhRB)i');

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix = 'nagano_sience_';

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
define( 'WP_DEBUG', false );
define('DISALLOW_FILE_EDIT', TRUE);

/* 編集が必要なのはここまでです ! WordPress でのパブリッシングをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
