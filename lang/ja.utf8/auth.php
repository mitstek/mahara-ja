<?php
/**
 *
 * @package    mahara
 * @subpackage lang (Japanese)
 * @translator Mitsuhiro Yoshida (https://mitstek.com/)
 * @started    2008-01-19 11:25:00 UTC
<<<<<<< HEAD
 * @updated    2025-05-20 23:20:20 UTC
=======
 * @updated    2017-05-13 18:16:12 UTC
>>>>>>> 92099ba5d5a5390b497675e7809f65e21f9a5091
 * @license    https://www.gnu.org/licenses/gpl-3.0.html GNU GPL version 3 or later
 * @copyright  For copyright information on Mahara, please see the README file distributed with this software.
 *
 */

defined('INTERNAL') || die();

$string['host'] = 'ホスト名またはIPアドレス';
$string['wwwroot'] = 'WWWルート';
$string['protocol'] = 'プロトコル';
$string['port'] = 'ポート';
$string['changepasswordurl'] = 'パスワード変更URL';
$string['cannotremove'] = '私たちはこの認証プラグインを削除できません。これはこのインスティテューションに存在する唯一のプラグインです。';
<<<<<<< HEAD
$string['cannotremoveinuse'] = '私たちはこの認証プラグインを削除できません。これは誰か他の人に使用されています。あなたはこのプラグインを削除できるようにする前にレコードを更新する必要があります。';
$string['saveinstitutiondetailsfirst'] = '認証プラグインを設定する前にインスティテューション詳細を保存してください。';
$string['editauthority'] = '認証局を編集する';
$string['addauthority'] = '認証局を追加する';
$string['updateuserinfoonlogin'] = 'ログイン時、個人情報を更新する';
$string['updateuserinfoonlogindescription'] = 'リモートサーバの個人情報を検索して人がログインするたびにあなたのローカルレコードを更新します。';
=======
$string['cannotremoveinuse'] = 'ユーザに使用されているため私たちはこの認証プラグインを削除できません。あなたがこのプラグインを削除できるようにするにはユーザレコードを更新する必要があります。';
$string['saveinstitutiondetailsfirst'] = '認証プラグインを設定する前にインスティテューション詳細を保存してください。';
$string['editauthority'] = '認証局を編集する';
$string['addauthority'] = '認証局を追加する';
$string['updateuserinfoonlogin'] = 'ログイン時、ユーザ情報を更新する';
$string['updateuserinfoonlogindescription'] = 'リモートサーバのユーザ情報を検索してユーザがログインするたびにあなたのローカルユーザレコードを更新します。';
>>>>>>> 92099ba5d5a5390b497675e7809f65e21f9a5091
$string['xmlrpcserverurl'] = 'XML-RPCサーバURL';
$string['ipaddress'] = 'IPアドレス';
$string['shortname'] = 'あなたのサイトの省略名';
$string['name'] = 'サイト名';
<<<<<<< HEAD
$string['nodataforinstance1'] = '認証インスタンス「 %s 」のデータは見つかりませんでした。';
=======
$string['nodataforinstance'] = '認証インスタンスのデータは見つかりませんでしたでした。';
>>>>>>> 92099ba5d5a5390b497675e7809f65e21f9a5091
$string['authname'] = '認証局名';
$string['weautocreateusers'] = 'こちらでアカウントを自動作成する';
$string['theyautocreateusers'] = 'あちらでアカウントを自動作成させる';
$string['parent'] = '親認証局';
$string['wessoout'] = 'あちらへSSOする';
$string['weimportcontent'] = 'こちらにコンテンツをインポートさせる';
$string['weimportcontentdescription'] = '(一部のアプリケーションのみ)';
$string['theyssoin'] = 'こちらにSSOさせる';
<<<<<<< HEAD
$string['authloginmsg2'] = 'あなたが親認証局を選択していない場合、ログインフォームでログインを試みる誰かに表示されるメッセージを入力してください。';
$string['authloginmsgnoparent'] = '誰かがログインフォームでログインを試みた場合に表示するメッセージを入力してください。';
$string['application'] = 'アプリケーション';
$string['cantretrievekey'] = 'リモートサーバの公開鍵検索中にエラーが発生しました。<br>アプリケーションおよびWWWルートフィールドが正しいことを確認してください。また、リモートホストのネットワーキングが有効にされていることを確認してください。';
$string['ssodirection'] = 'SSOの方向';
$string['active'] = 'アクティブ';
$string['errorunabletologin'] = 'あなたはログインできません。';
=======
$string['authloginmsg2'] = 'あなたが親認証局を選択していない場合、ログインフォームでログインを試みるユーザに表示されるメッセージを入力してください。';
$string['application'] = 'アプリケーション';
$string['cantretrievekey'] = 'リモートサーバのパブリックキー検索中にエラーが発生しました。<br>アプリケーションおよびWWWルートフィールドが正しいことを確認してください。また、リモートホストのネットワーキングが有効にされていることを確認してください。';
$string['ssodirection'] = 'SSOの方向';
$string['active'] = 'アクティブ';
>>>>>>> 92099ba5d5a5390b497675e7809f65e21f9a5091
$string['errorcertificateinvalidwwwroot'] = 'これは %s の証明書ですが、あなたは %s への使用を試みています。';
$string['errorcouldnotgeneratenewsslkey'] = '新しいSSLキーを生成できませんでした。本当にこのマシンに OpenSSLおよびOpenSSL用PHPモジュールがインストールされていますか?';
$string['errnoauthinstances'] = '私たちには %s のホストに認証プラグインインスタンスが設定されていないようです。';
$string['errornotvalidsslcertificate'] = '有効なSSLサーバ証明書ではありません。';
$string['errnoxmlrpcinstances'] = '私たちには %s のホストにXMLRPCプラグインインスタンスが設定されていないようです。';
$string['errnoxmlrpcwwwroot'] = '私たちには %s のホストにレコードがありません。';
$string['errnoxmlrpcuser1'] = '現時点ではあなたを認証できませんでした。可能性のある理由として以下が考えられます:

*あなたのSSOセッションが失効しました。他のアプリケーションに戻って %s にログインするためのリンクを再度クリックしてください。
*あなたの %s へのSSOが許可されていません。あなたがSSOできるかどうか管理者に確認してください。';
$string['toomanytries'] = 'あなたは最大ログイン試行回数を超過しました。このアカウントは5分間ロックされます。';
<<<<<<< HEAD
$string['unabletosigninviasso'] = '外部認証 (SSO) 経由でサインインできません。';
$string['xmlrpccouldnotlogyouin'] = '申し訳ございません、あなたをログインさせることができませんでした。';
$string['xmlrpccouldnotlogyouindetail1'] = '申し訳ございません、今回はあなたを %s にログインさせることができませんでした。しばらくして再度ログインをお試しください。
問題が続く場合、あなたの管理者にご連絡ください。';
=======
$string['unabletosigninviasso'] = 'SSO経由でサインインできません。';
$string['xmlrpccouldnotlogyouin'] = '申し訳ございません、あなたをログインさせることができませんでした。';
$string['xmlrpccouldnotlogyouindetail1'] = '申し訳ございません、今回はあなたを %s にログインさせることができませんでした。しばらくして再度ログインをお試しください。問題が続く場合、あなたの管理者にご連絡ください。';
>>>>>>> 92099ba5d5a5390b497675e7809f65e21f9a5091
$string['requiredfields'] = '必須プロファイルフィールド';
$string['requiredfieldsset'] = '必須プロファイルフィールドセット';
$string['primaryemaildescription'] = '主メールアドレスです。あなたの主メールアドレス宛にクリック可能なリンクを含むメールが送信されます - メールアドレスを有効にするためこのリンクをクリックした後、システムにログインしてください。';
$string['validationprimaryemailsent'] = '確認メールが送信されました。メールアドレスを有効にするためメール内のリンクをクリックしてください。';
$string['noauthpluginconfigoptions'] = 'このプラグインに関する設定オプションはありません。';
$string['hostwwwrootinuse'] = 'すでに別のインスティテューション (%s) によりWWWルートが使用されています。';
<<<<<<< HEAD
$string['duplicateremoteusername'] = '外部認証ユーザ名はすでに %s により使用されています。外部認証ユーザ名は認証方法内でユニークである必要があります。';
$string['duplicateremoteusernameformerror'] = '外部認証ユーザ名は認証方法内でユニークである必要があります。';
$string['cannotjumpasmasqueradeduser'] = '別の誰かとして代理ログインしているためあなたは他のアプリケーションにジャンプできません。';
$string['warninstitutionregistration'] = '$cfg->usersuniquebyusernameが有効にされていますがインスティテューションの登録が許可されています。セキュリティ上の理由からすべてのインスティテューションでは「登録を許可する」を無効にする必要があります。これをウェブインタフェースで調整するためあなたは一時的に「$cfg->usersuniquebyusername = false」を設定する必要があります。';
$string['warninstitutionregistrationinstitutions'] = '次のインスティテューションでは登録が有効にされています:
%2$s';
$string['warnmultiinstitutionsoff'] = '$cfg->usersuniquebyusernameが有効にされていますがサイトオプション「人に複数インスティテューションを許可する」は無効にされています。ログインするたびに人はインスティテューションを変える必要があるためこれは意味をなしません。この設定を「管理 → サイト設定 → インスティテューション設定」で有効にしてください。';
$string['alternativelogins'] = '管理ログイン';
$string['nullprivatecert'] = '秘密鍵を生成できませんでした。';
$string['nullpubliccert'] = '公開証明書を生成できませんでした。';
=======
$string['duplicateremoteusername'] = '外部認証ユーザ名はすでにユーザ %s により使用されています。外部認証ユーザ名は認証方法内でユニークである必要があります。';
$string['duplicateremoteusernameformerror'] = '外部認証ユーザ名は認証方法内でユニークである必要があります。';
$string['cannotjumpasmasqueradeduser'] = '別のユーザとして代理ログインしているためあなたは他のアプリケーションにジャンプできません。';
$string['mobileuploadnotenabled'] = '申し訳ございません、モバイルアップロードが有効にされていません。';
$string['mobileuploadtokennotset'] = 'あなたのモバイルアップロードトークンを空白にできません。あなたのモバイルアプリケーション設定を確認した後、再度お試しください。';
$string['mobileuploadusernamenotset'] = 'あなたのモバイルアップロードユーザ名を空白にできません。あなたのモバイルアプリケーション設定を確認した後、再度お試しください。';
$string['mobileuploadtokennotfound'] = '申し訳ございません、モバイルアップロードトークンは見つかりませんでした。あなたのサイトおよびモバイルアプリケーション設定を確認してください。';
$string['warninstitutionregistration'] = '$cfg->usersuniquebyusernameが有効にされていますがインスティテューションの登録が許可されています。セキュリティ上の理由からすべてのインスティテューションでは「登録を許可する」を無効にする必要があります。これをウェブインタフェースで調整するためあなたは一時的に「$cfg->usersuniquebyusername = false」を設定する必要があります。';
$string['warninstitutionregistrationinstitutions'] = '次のインスティテューションでは登録が有効にされています:
%2$s';
$string['warnmultiinstitutionsoff'] = '$cfg->usersuniquebyusernameが有効にされていますがサイトオプション「ユーザに複数インスティテューションを許可する」は無効にされています。ログインするたびにユーザはインスティテューションを変える必要があるためこれは意味をなしません。この設定を「管理 -> サイト設定 -> サイトオプション -> インスティテューション設定」で有効にしてください。';

?>
>>>>>>> 92099ba5d5a5390b497675e7809f65e21f9a5091
