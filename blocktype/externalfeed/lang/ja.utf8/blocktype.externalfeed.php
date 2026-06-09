<?php
/**
 *
 * @package    mahara
 * @subpackage lang (Japanese)
 * @translator Mitsuhiro Yoshida (https://mitstek.com/)
 * @started    2008-01-19 11:25:00 UTC
 * @updated    2026-06-08 04:38:40 UTC
 * @license    https://www.gnu.org/licenses/gpl-3.0.html GNU GPL version 3 or later
 * @copyright  For copyright information on Mahara, please see the README file distributed with this software.
 *
 */

defined('INTERNAL') || die();

$string['title'] = '外部フィード';
$string['title_help'] = '<h1>セクションタイトル</h1><p>このフィールドを空白のままにした場合、フィードタイトルが使用されます。</p>';
$string['description'] = '外部RSSまたはATOMフィードを埋め込みます。';
$string['authuser'] = 'ユーザ名';
$string['authuser_help'] = '<h1>ユーザ名</h1><p>フィードへのアクセスにユーザ名およびパスワードが必要な場合、ユーザ名を入力してください。</p>';
$string['authpassword'] = 'パスワード';
$string['authpassword_help'] = '<h1>パスワード</h1><p>フィードへのアクセスにユーザ名およびパスワードが必要な場合、パスワードを入力してください。</p>';
$string['feedlocation'] = 'フィードロケーション';
$string['url_help'] = '<h1>フィードロケーション</h1><p>有効なRSSまたはATOMフィードのURLを入力してください。これによりフィードロケーションからコンテンツが取得されます。</p>';
$string['insecuresslmode'] = '安全ではないSSLモード';
$string['instconf.insecuresslmode_help'] = '<h1>安全ではないSSLモード</h1><p>SSL証明書の検証を無効にします。これは推奨されませんが、フィードが無効な証明書または信頼できない証明書を使用して配信されている場合、必要になる可能性があります。</p>';
$string['itemstoshow'] = '表示するアイテム数';
$string['itemstoshowdescription'] = '範囲: 1～20';
$string['showfeeditemsinfull'] = 'フィードアイテムを完全に表示する';
$string['instconf.full_help'] = '<h1>フィードアイテムを完全に表示する</h1><p>フィード内のそれぞれのアイテムに関して、ヘッディングのみを表示するか、コンテンツ全体を表示するか選択してください。</p>';
$string['invalidurl'] = '指定されたURLが有効ではありません。あなたはhttpおよびhttpsのURLのみフィードを表示できます。';
$string['invalidfeed1'] = 'このURLでは有効なフィードは検出されませんでした。';
$string['lastupdatedon'] = '最終更新日時: %s';
$string['publishedon'] = '公開日時: %s';
$string['reenterpassword'] = 'あなたはフィードのURLを変更しました。パスワードを再入力 (または削除) してください。';
