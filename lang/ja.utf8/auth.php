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
 * @updated    2010-09-03 15:09:02 UTC
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL
 * @copyright  (C) 2006 onwards Catalyst IT Ltd http://catalyst.net.nz
 *
 */

defined('INTERNAL') || die();

$string['host'] = 'ホスト名またはIPアドレス';
$string['wwwroot'] = 'WWWルート';
$string['port'] = 'ポート番号';
$string['protocol'] = 'プロトコル';
$string['changepasswordurl'] = 'パスワード変更URI';
$string['cannotremove'] = 'インスティテューションに関する唯一のプラグインのため、私たちはこの認証プラグインを削除することはできません。';
$string['cannotremoveinuse'] = '他のユーザに使用されているため、私たちはこの認証プラグインを削除することはできません。あなたが、このプラグインを削除できるようになる前に、ユーザレコードを更新する必要があります。';
$string['saveinstitutiondetailsfirst'] = '認証プラグインを設定する前に、インスティテューション詳細を保存してください。';
$string['editauthority'] = '認証局を編集する';
$string['addauthority'] = '認証局を追加する';
$string['updateuserinfoonlogin'] = 'ログイン時、ユーザ情報を更新する';
$string['updateuserinfoonlogindescription'] = 'リモートサーバのユーザ情報を検索し、ユーザがログインするたびに、あなたのローカルユーザレコードを更新します。';
$string['xmlrpcserverurl'] = 'XML-RPCサーバURI';
$string['ipaddress'] = 'IPアドレス';
$string['shortname'] = 'あなたのサイトの省略名';
$string['name'] = 'サイト名';
$string['nodataforinstance'] = '認証インスタンスのデータが見つかりません。';
$string['authname'] = '認証局名';
$string['weautocreateusers'] = 'こちらでユーザを自動作成する';
$string['theyautocreateusers'] = 'あちらでユーザを自動作成させる';
$string['parent'] = '親認証局';
$string['wessoout'] = 'あちらへSSOする';
$string['weimportcontent'] = 'こちらにコンテンツをインポートさせる';
$string['weimportcontentdescription'] = '(一部のアプリケーションのみ)';
$string['theyssoin'] = 'こちらにSSOさせる';
$string['authloginmsg'] = 'ユーザがMaharaログインフォーム経由でログインを試みる場合、表示されるメッセージを入力してください。';
$string['application'] = 'アプリケーション';
$string['cantretrievekey'] = 'リモートサーバのパブリックキー検索中、エラーが発生しました。<br />アプリケーションおよびWWWルートフィールドが正しいこと、およびリモートホストのネットワークが有効にされていることを確認してください。';
$string['ssodirection'] = 'SSOの方向';
$string['errorcertificateinvalidwwwroot'] = 'これは %s の証明書ですが、あなたは %s に対する使用を試みています。';
$string['errorcouldnotgeneratenewsslkey'] = '新しいSSLキーを生成することができませんでした。本当に、このマシンにopensslおよびopenssl用PHPモジュールがインストールされていますか?';
$string['errnoauthinstances'] = '私たちには%s のホストに関して、認証プラグインインスタンスが設定されていないようです。';
$string['errornotvalidsslcertificate'] = '有効なSSLサーバ証明書ではありません。';
$string['errnoxmlrpcinstances'] = '私たちには%s のホストに関して、XMLRPCプラグインインスタンスが設定されていないようです。';
$string['errnoxmlrpcwwwroot'] = '私たちには%s のホストに関して、レコードがありません。';
$string['errnoxmlrpcuser'] = '現時点ではあなたを認証することができませんでした。可能性のある理由として下記が考えられます:

*あなたのSSOセッションが失効しました。他のアプリケーションに戻って、Maharaにログインするためのリンクを再度クリックしてください。
*あなたのMaharaに対するSSOが許可されていません。あなたがSSOできるかどうか管理者にご確認ください。';
$string['unabletosigninviasso'] = 'SSO経由でサインインできません。';
$string['xmlrpccouldnotlogyouin'] = '申し訳ございません、あなたをログインさせることができませんでした :(';
$string['xmlrpccouldnotlogyouindetail'] = '申し訳ございません、今回はあなたをMaharaにログインさせることができませんでした。ログインを再度お試しください。問題が続く場合、あなたの管理者にご連絡ください。';
$string['requiredfields'] = '必須プロファイルフィールド';
$string['requiredfieldsset'] = '必須プロファイルフィールドセット';
$string['noauthpluginconfigoptions'] = 'このプラグインに関する設定オプションはありません。';
$string['hostwwwrootinuse'] = 'すでに別のインスティテューション (%s) により、WWWルートが使用されています。';
$string['duplicateremoteusername'] = '外部認証ユーザ名はすでにユーザ %s によって使用されています。外部認証ユーザ名は認証メソッド内でユニーク (固有) である必要があります。';
$string['duplicateremoteusernameformerror'] = '外部認証ユーザ名は認証メソッド内でユニーク (固有) である必要があります。';

?>
