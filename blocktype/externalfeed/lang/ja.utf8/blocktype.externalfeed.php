<?php
/**
 * Mahara: Electronic portfolio, weblog, resume builder and social networking
 * Copyright (C) 2006 onwards Catalyst IT Ltd (http://www.catalyst.net.nz)
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @package    mahara
 * @subpackage lang (Japanese)
 * @translator Mitsuhiro Yoshida (http://mitstek.com/)
 * @started    2008-01-19 11:25:00 UTC
 * @updated    2013-05-02 22:38:25 UTC
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL
 * @copyright  (C) 2006 onwards Catalyst IT Ltd http://catalyst.net.nz
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
$string['feedlocationdesc'] = '有効なRSSまたはATOMフィードのURI';
$string['insecuresslmode'] = '安全ではないSSLモード';
$string['insecuresslmodedesc'] = 'SSL証明書認証を無効にします。これはお勧めできる設定ではありませんが、無効または信頼できない証明書を使ってフィードが提供されている場合に必要であると思われます。';
$string['itemstoshow'] = '表示するアイテム数';
$string['itemstoshowdescription'] = '範囲: 1～20';
$string['showfeeditemsinfull'] = 'フィードアイテムを完全に表示しますか?';
$string['showfeeditemsinfulldesc'] = 'ここではフィードアイテムの要約を表示するか、それぞれのフィードアイテムの詳細を表示するか選択してください。';
$string['invalidurl'] = '指定されたURIが有効ではありません。あなたはhttpおよびhttpsのURIからのみフィードを表示することができます。';
$string['invalidfeed'] = 'フィードが有効ではないようです。レポートされたエラーは次のとおりです: %s';
$string['lastupdatedon'] = '最終更新日時: %s';
$string['defaulttitledescription'] = 'ここを空白にした場合、フィードのタイトルが使用されます。';
$string['reenterpassword'] = 'あなたはフィードのURIを変更しました。パスワードを再入力 (または削除) してください。';

?>
