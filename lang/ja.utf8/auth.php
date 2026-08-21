<?php
/**
 *
 * @package    mahara
 * @subpackage lang (Japanese)
 * @translator Mitsuhiro Yoshida (https://mitstek.com/)
 * @started    2008-01-19 11:25:00 UTC
 * @updated    2026-08-21 07:26:42 UTC
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
$string['cannotremoveinuse'] = '私たちはこの認証プラグインを削除できません。これは誰か他の人に使用されています。あなたはこのプラグインを削除できるようにする前にレコードを更新する必要があります。';
$string['saveinstitutiondetailsfirst'] = '認証プラグインを設定する前にインスティテューション詳細を保存してください。';
$string['editauthority'] = '認証局を編集する';
$string['addauthority'] = '認証局を追加する';
$string['updateuserinfoonlogin'] = 'ログイン時、個人情報を更新する';
$string['auth_config.updateuserinfoonlogin_help'] = '<h1>ログイン時、アカウント情報を更新する</h1>
<p>この設定を有効にした場合、ログイン時にリモートサイトからアカウントデータが取得されて変更がローカルアカウントに適用されます。</p>';
$string['updateuserinfoonlogindescription'] = 'リモートサーバの個人情報を検索して人がログインするたびにあなたのローカルレコードを更新します。';
$string['xmlrpcserverurl'] = 'XML-RPCサーバURL';
$string['ipaddress'] = 'IPアドレス';
$string['shortname'] = 'あなたのサイトの省略名';
$string['name'] = 'サイト名';
$string['auth_config.name_help'] = '<h1>サイト名</h1>
<p>リモートサイトを識別するために表示される名称です。</p>';
$string['nodataforinstance1'] = '認証インスタンス「 %s 」のデータは見つかりませんでした。';
$string['authname'] = '認証局名';
$string['auth_config.instancename_help'] = '<h1>認証局名</h1><p>この認証プロバイダを識別するのに役立つ名称です。</p>';
$string['weautocreateusers'] = 'こちらでアカウントを自動作成する';
$string['auth_config.weautocreateusers_help'] = '<h1>こちらでアカウントを自動作成する</h1>
<p>この設定を有効にした場合、認証に成功したもののまだアカウントのない人にアカウントが自動作成されます。</p>';
$string['theyautocreateusers'] = 'あちらでアカウントを自動作成させる';
$string['auth_config.theyautocreateusers_help'] = '<h1>あちらでアカウントを自動作成させる</h1>
<p>この設定を有効にした場合、リモートサイトに初めてアクセスした人のアカウントが自動作成されます。</p>';
$string['parent'] = '親認証局';
$string['auth_config.parent_help'] = '<h1>親認証局</h1>
<p>親認証を設定した場合、人はその認証またはMoodle等のリモートアプリケーションのいずれかを使用してログインできます。例えばLDAPを親として設定した場合、人はLDAP認証情報を使用してこのサイトのログインフォームまたはMoodle経由でログインできます。どちらの方法でも同じアカウントにアクセスできます。</p>
<p>親権限が設定されていない場合、人はこのフォームで設定されたリモートアプリケーションを経由でのみログインできます。</p>';
$string['wessoout'] = 'あちらへSSOする';
$string['weimportcontent'] = 'こちらにコンテンツをインポートさせる';
$string['auth_config.weimportcontent_help'] = '<h1>こちらにコンテンツをインポートさせる</h1>
<p>この設定を有効にした場合、リモートサイトの人はMaharaにコンテンツをインポートできます。これには「こちらにSSOさせる」を有効にする必要があります。また、「アカウント自動作成」も有効にすることをお勧めします。すべてのネットワーク対応アプリケーションがこの機能をサポートしているわけではありません。</p>';
$string['weimportcontentdescription'] = '(一部のアプリケーションのみ)';
$string['theyssoin'] = 'こちらにSSOさせる';
$string['authloginmsg2'] = 'あなたが親認証局を選択していない場合、ログインフォームでログインを試みる誰かに表示されるメッセージを入力してください。';
$string['application'] = 'アプリケーション';
$string['auth_config.appname_help'] = '<h1>アプリケーション</h1>
<p>あなたが通信を希望するリモートサイトで実行されているアプリケーションです。</p>';
$string['cantretrievekey'] = 'リモートサーバの公開鍵検索中にエラーが発生しました。<br>アプリケーションおよびWWWルートフィールドが正しいことを確認してください。また、リモートホストのネットワーキングが有効にされていることを確認してください。';
$string['ssodirection'] = 'SSOの方向';
$string['auth_config.ssodirection_help'] = '<h1>SSOの方向</h1><p>どのアプリケーションをメインにするか決定してください。結果として人はそれを出発点として使用します。</p>
<dl><dt>こちらにSSOさせる</dt><dd>この設定を有効にした場合、リモートサイトの人はユーザ名およびパスワードを入力せずにMaharaサイトにアクセスできます。</dd></dt>
<dt>あちらへSSOする</dt><dd>この設定を有効にした場合、人は再度サインインすることなくMaharaからリモートサイトに移動できます。</dd></dt></dl>';
$string['active'] = 'アクティブ';
$string['errorunabletologin'] = 'あなたはログインできません。';
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
$string['unabletosigninviasso'] = '外部認証 (SSO) 経由でサインインできません。';
$string['xmlrpccouldnotlogyouin'] = '申し訳ございません、あなたをログインさせることができませんでした。';
$string['xmlrpccouldnotlogyouindetail1'] = '申し訳ございません、今回はあなたを %s にログインさせることができませんでした。しばらくして再度ログインをお試しください。
問題が続く場合、あなたの管理者にご連絡ください。';
$string['requiredfields'] = '必須プロファイルフィールド';
$string['requiredfieldsset'] = '必須プロファイルフィールドセット';
$string['primaryemaildescription'] = '主メールアドレスです。あなたの主メールアドレス宛にクリック可能なリンクを含むメールが送信されます - メールアドレスを有効にするためこのリンクをクリックした後、システムにログインしてください。';
$string['validationprimaryemailsent'] = '確認メールが送信されました。メールアドレスを有効にするためメール内のリンクをクリックしてください。';
$string['noauthpluginconfigoptions'] = 'このプラグインに関する設定オプションはありません。';
$string['hostwwwrootinuse'] = 'すでに別のインスティテューション (%s) によりWWWルートが使用されています。';
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
