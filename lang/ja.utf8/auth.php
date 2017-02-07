<?php
/**
 *
 * @package    mahara
 * @subpackage lang (Japanese)
 * @translator Mitsuhiro Yoshida (http://mitstek.com/)
 * @started    2008-01-19 11:25:00 UTC
 * @updated    2017-02-07 15:00:42 UTC
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL version 3 or later
 * @copyright  For copyright information on Mahara, please see the README file distributed with this software.
 *
 */

defined('INTERNAL') || die();

$string['host'] = 'ホスト名またはIPアドレス';
$string['wwwroot'] = 'WWWルート';
$string['protocol'] = 'プロトコル';
$string['port'] = 'ポート';
$string['changepasswordurl'] = 'パスワード変更URL';
$string['cannotremove'] = 'インスティテューションに関する唯一のプラグインのため、私たちはこの認証プラグインを削除することはできません。';
$string['cannotremoveinuse'] = '他のユーザに使用されているため、私たちはこの認証プラグインを削除することはできません。あなたがこのプラグインを削除できるようになる前にユーザレコードを更新する必要があります。';
$string['saveinstitutiondetailsfirst'] = '認証プラグインを設定する前にインスティテューション詳細を保存してください。';
$string['editauthority'] = '認証局を編集する';
$string['addauthority'] = '認証局を追加する';
$string['updateuserinfoonlogin'] = 'ログイン時、ユーザ情報を更新する';
$string['updateuserinfoonlogindescription'] = 'リモートサーバのユーザ情報を検索して、ユーザがログインするたびにあなたのローカルユーザレコードを更新します。';
$string['xmlrpcserverurl'] = 'XML-RPCサーバURL';
$string['ipaddress'] = 'IPアドレス';
$string['shortname'] = 'あなたのサイトの省略名';
$string['name'] = 'サイト名';
$string['nodataforinstance'] = '認証インスタンスのデータが見つかりませんでしたでした。';
$string['authname'] = '認証局名';
$string['weautocreateusers'] = 'こちらでユーザを自動作成する';
$string['theyautocreateusers'] = 'あちらでユーザを自動作成させる';
$string['parent'] = '親認証局';
$string['wessoout'] = 'あちらへSSOする';
$string['weimportcontent'] = 'こちらにコンテンツをインポートさせる';
$string['weimportcontentdescription'] = '(一部のアプリケーションのみ)';
$string['theyssoin'] = 'こちらにSSOさせる';
$string['authloginmsg2'] = 'あなたが親認証局を選択していない場合、ログインフォーム経由でログインを試みるユーザに表示されるメッセージを入力してください。';
$string['application'] = 'アプリケーション';
$string['cantretrievekey'] = 'リモートサーバのパブリックキー検索中、エラーが発生しました。<br />アプリケーションおよびWWWルートフィールドが正しいこと、およびリモートホストのネットワークが有効にされていることを確認してください。';
$string['ssodirection'] = 'SSOの方向';
$string['active'] = 'アクティブ';
$string['errorcertificateinvalidwwwroot'] = 'これは %s の証明書ですが、あなたは %s に対する使用を試みています。';
$string['errorcouldnotgeneratenewsslkey'] = '新しいSSLキーを生成することができませんでした。本当にこのマシンに OpenSSLおよびOpenSSL用PHPモジュールがインストールされていますか?';
$string['errnoauthinstances'] = '私たちには %s のホストに関して認証プラグインインスタンスが設定されていないようです。';
$string['errornotvalidsslcertificate'] = '有効なSSLサーバ証明書ではありません。';
$string['errnoxmlrpcinstances'] = '私たちには %s のホストに関してXMLRPCプラグインインスタンスが設定されていないようです。';
$string['errnoxmlrpcwwwroot'] = '私たちには %s のホストに関してレコードがありません。';
$string['errnoxmlrpcuser1'] = '現時点ではあなたを認証することができませんでした。可能性のある理由として下記が考えられます:

*あなたのSSOセッションが失効しました。他のアプリケーションに戻って %s にログインするためのリンクを再度クリックしてください。
*あなたの %s に対するSSOが許可されていません。あなたがSSOできるかどうか管理者にご確認ください。';
$string['toomanytries'] = 'あなたは最大ログイン回数を超過しました。このアカウントは5分間ロックされます。';
$string['unabletosigninviasso'] = 'SSO経由でサインインできません。';
$string['xmlrpccouldnotlogyouin'] = '申し訳ございません、あなたをログインさせることができませんでした。';
$string['xmlrpccouldnotlogyouindetail1'] = '申し訳ございません、今回はあなたを %s にログインさせることができませんでした。ログインを再度お試しください。問題が続く場合、あなたの管理者にご連絡ください。';
$string['requiredfields'] = '必須プロファイルフィールド';
$string['requiredfieldsset'] = '必須プロファイルフィールドセット';
$string['primaryemaildescription'] = '主メールアドレスです。あなたの主メールアドレス宛にクリック可能なリンクを含むメールが送信されます - メールアドレスを有効にするため、このリンクをクリックした後、システムにログインしてください。';
$string['validationprimaryemailsent'] = '確認メールが送信されました。メールアドレスを有効にするため、メールに記載されたリンクをクリックしてください。';
$string['noauthpluginconfigoptions'] = 'このプラグインに関する設定オプションはありません。';
$string['hostwwwrootinuse'] = 'すでに別のインスティテューション (%s) によってWWWルートが使用されています。';
$string['duplicateremoteusername'] = '外部認証ユーザ名はすでにユーザ %s によって使用されています。外部認証ユーザ名は認証メソッド内でユニークである必要があります。';
$string['duplicateremoteusernameformerror'] = '外部認証ユーザ名は認証メソッド内でユニークである必要があります。';
$string['cannotjumpasmasqueradeduser'] = '別のユーザとして代理ログインしているため、あなたは他のアプリケーションにジャンプできません。';
$string['mobileuploadnotenabled'] = '申し訳ございません、モバイルアップロードが有効にされていません。';
$string['mobileuploadtokennotset'] = 'あなたのモバイルアップロードトークンを空白にすることはできません。あなたのモバイルアプリケーション設定を確認した後、再度お試しください。';
$string['mobileuploadusernamenotset'] = 'あなたのモバイルアップロードユーザ名を空白にすることはできません。あなたのモバイルアプリケーション設定を確認した後、再度お試しください。';
$string['mobileuploadtokennotfound'] = '申し訳ございません、モバイルアップロードトークンが見つかりませんでした。あなたのサイトおよびモバイルアプリケーション設定を確認してください。';
$string['warninstitutionregistration'] = '$cfg->usersuniquebyusernameが有効にされていますがインスティテューションの登録が許可されています。セキュリティ上の理由からすべてのインスティテューションでは「ユーザ登録を許可する」を無効にする必要があります。これをウェブインターフェースで調整するため、あなたは一時的に「$cfg->usersuniquebyusername = false」を設定する必要があります。';
$string['warninstitutionregistrationinstitutions'] = '次のインスティテューションは登録が有効にされています:
%2$s';
$string['warnmultiinstitutionsoff'] = '$cfg->usersuniquebyusernameが有効にされていますがサイトオプション「ユーザに複数インスティテューションを許可する」は無効にされています。ログインするたびにユーザはインスティテューションを変える必要があるため、これは意味をなしません。この設定を「管理 -> サイト設定 -> サイトオプション -> インスティテューション設定」で有効にしてください。';

?>
