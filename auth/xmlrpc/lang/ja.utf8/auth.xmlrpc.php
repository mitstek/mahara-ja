<?php
/**
 *
 * @package    mahara
 * @subpackage lang (Japanese)
 * @translator Mitsuhiro Yoshida (https://mitstek.com/)
 * @started    2008-01-19 11:25:00 UTC
 * @updated    2026-06-02 13:15:10 UTC
 * @license    https://www.gnu.org/licenses/gpl-3.0.html GNU GPL version 3 or later
 * @copyright  For copyright information on Mahara, please see the README file distributed with this software.
 *
 */

defined('INTERNAL') || die();

$string['title'] = 'XML-RPC';
$string['xmlrpcconfig'] = 'XML-RPC設定';
$string['description'] = '外部アプリケーションからSSO認証する';
$string['notusable'] = 'XML-RPC、CurlおよびOpenSSL PHP拡張モジュールをインストールしてください。';
$string['networkingdisabledonthissite'] = 'このサイトではネットワーキングが無効にされています。';
$string['networkservers'] = 'ネットワークサーバ';
$string['youhaveloggedinfrom1'] = '<a href="%s">%s</a>に戻る';
$string['authloginmsgtitle'] = '不正ログインメッセージ';
$string['auth_config.authloginmsg_help'] = '<h1>不正ログインメッセージ</h1>
<p>人がこのリモートアプリケーション経由でのみログインできる場合、標準ログインフォーム使用時点で表示される短いメッセージをここに入力してください。メッセージにはリモートアプリケーションでMaharaにアクセスする方法を説明してください。</p><p>このメッセージはサイドバーのログインフォームの上に表示されるため、簡潔にまとめてください。</p>';
$string['componentdeprecated'] = 'XML-RPC/MNet認証方法は非推奨です。Maharaの次のリリースで廃止されます。代わりにLTIを使用してください。';
