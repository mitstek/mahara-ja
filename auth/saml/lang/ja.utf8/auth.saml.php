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
 * @updated    2015-08-06 15:37:52 UTC
 * @license    https://www.gnu.org/licenses/gpl-3.0.html GNU GPL
 * @copyright  (C) 2006 onwards Catalyst IT Ltd https://catalyst.net.nz
 *
 */

defined('INTERNAL') || die();

$string['defaultinstitution'] = 'デフォルトインスティテューション';
$string['description'] = 'SAML 2.0 IdPサービスで認証する';
$string['errorbadinstitution'] = 'ユーザ接続のインスティテューションが解決されませんでした。';
$string['errorretryexceeded'] = '再試行の最大回数 (%s) を越えました: アイデンティティサービスに問題があります。';
$string['errnosamluser'] = 'ユーザは見つかりませんでした。';
$string['errorbadlib'] = 'SimpleSAMLphpライブラリディレクトリ「 %s 」が正しくありません。';
$string['errorbadconfig'] = 'SimpleSAMLphp設定ディレクトリ %s が正しくありません。';
$string['errorbadcombo'] = 'リモートユーザを選択していない場合のみ、あなたはユーザ自動作成を選択できます。';
$string['errormissinguserattributes'] = 'あなたは認証されたようですが私たちは必要なユーザ属性を受信していません。あなたのアイデンティティプロバイダ (IdP) が姓名およびメールアドレスへのSSOフィールドをMaharaの動作しているサービスプロバイダにリリースしているか確認してください。またはこのサーバのウェブマスタにご連絡ください。';
$string['errorremoteuser'] = '「usersuniquebyusername」が無効にされた場合、リモートユーザとの合致は必須です。';
$string['institutionattribute'] = 'インスティテューション属性 (%s を含む)';
$string['institutionvalue'] = '属性と照合するインスティテューション値';
$string['institutionregex'] = 'インスティテューション省略名を部分的に文字列一致させる';
$string['notusable'] = 'SimpleSAMLphp SPライブラリをインストールしてください。';
$string['samlfieldforemail'] = 'メールアドレスのSSOフィールド';
$string['samlfieldforfirstname'] = '名のSSOフィールド';
$string['samlfieldforsurname'] = '姓のSSOフィールド';
$string['title'] = 'SAML';
$string['updateuserinfoonlogin'] = 'ログイン時、ユーザ情報を更新する';
$string['userattribute'] = 'ユーザ属性';
$string['simplesamlphplib'] = 'SimpleSAMLphpライブラリディレクトリ';
$string['simplesamlphpconfig'] = 'SimpleSAMLphp設定ディレクトリ';
$string['weautocreateusers'] = 'こちらでユーザを自動作成する';
$string['remoteuser'] = 'ユーザ属性をリモートユーザに合致させる';

?>
