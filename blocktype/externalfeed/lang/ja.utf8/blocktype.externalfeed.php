<?php
/**
 *
 * @package    mahara
 * @subpackage lang (Japanese)
 * @translator Mitsuhiro Yoshida (https://mitstek.com/)
 * @started    2008-01-19 11:25:00 UTC
 * @updated    2018-01-30 05:32:03 UTC
 * @license    https://www.gnu.org/copyleft/gpl.html GNU GPL version 3 or later
 * @copyright  For copyright information on Mahara, please see the README file distributed with this software.
 *
 */

defined('INTERNAL') || die();

$string['title'] = '外部フィード';
$string['description'] = '外部RSSまたはATOMフィードを埋め込みます。';
$string['authuser'] = 'HTTPユーザ名';
$string['authuserdesc'] = 'このフィードへのアクセスに必要なユーザ名 (HTTP基本認証) です (必要であれば)。';
$string['authpassword'] = 'HTTPパスワード';
$string['authpassworddesc'] = 'このフィードへのアクセスに必要なパスワード (HTTP基本認証) です (必要であれば)。';
$string['feedlocation'] = 'フィードロケーション';
$string['feedlocationdesc'] = '有効なRSSまたはATOMフィードのURL';
$string['insecuresslmode'] = '安全でないSSLモード';
$string['insecuresslmodedesc'] = 'SSL証明書認証を無効にします。これはお勧めできる設定ではありませんが有効ではないまたは信頼できない証明書を使用してフィードが提供されている場合に必要です。';
$string['itemstoshow'] = '表示するアイテム数';
$string['itemstoshowdescription'] = '範囲: 1～20';
$string['showfeeditemsinfull'] = 'フィードアイテムを完全に表示する';
$string['showfeeditemsinfulldesc'] = 'ここではフィードアイテムの要約を表示するか、それぞれのフィードアイテムの全文を表示するか選択してください。';
$string['invalidurl'] = '指定されたURLが有効ではありません。あなたはhttpおよびhttpsのURLのみフィードを表示できます。';
$string['invalidfeed1'] = 'このURLでは有効なフィードは検出されませんでした。';
$string['lastupdatedon'] = '最終更新日時: %s';
$string['publishedon'] = '公開日時: %s';
$string['defaulttitledescription'] = 'ここを空白にした場合、フィードのタイトルが使用されます。';
$string['reenterpassword'] = 'あなたはフィードのURLを変更しました。パスワードを再入力 (または削除) してください。';

?>
