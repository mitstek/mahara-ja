<?php
/**
 * Mahara: Electronic portfolio, weblog, resume builder and social networking
 * Copyright (C) 2006 onwards Catalyst IT Ltd (https://www.catalyst.net.nz)
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
 * along with this program.  If not, see <https://www.gnu.org/licenses/>.
 *
 * @package    mahara
 * @subpackage lang (Japanese)
 * @translator Mitsuhiro Yoshida (https://mitstek.com/)
 * @started    2008-01-19 11:25:00 UTC
 * @updated    2015-08-30 13:48:46 UTC
 * @license    https://www.gnu.org/copyleft/gpl.html GNU GPL
 * @copyright  (C) 2006 onwards Catalyst IT Ltd https://catalyst.net.nz
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
$string['invalidfeed'] = 'フィードが有効ではないようです。報告されたエラーは次のとおりです: %s';
$string['lastupdatedon'] = '最終更新日時: %s';
$string['defaulttitledescription'] = 'ここを空白にした場合、フィードのタイトルが使用されます。';
$string['reenterpassword'] = 'あなたはフィードのURLを変更しました。パスワードを再入力 (または削除) してください。';

?>
