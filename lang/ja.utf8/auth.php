<?php

defined('INTERNAL') || die();

$string['active'] = 'アクティブ';
$string['addauthority'] = '認証局を追加する';
$string['application'] = 'アプリケーション';
$string['authloginmsg2'] = 'あなたが親認証局を選択していない場合、ログインフォームでログインを試みるユーザに表示されるメッセージを入力してください。';
$string['authloginmsgnoparent'] = 'ユーザがログインフォームでログインを試みた場合に表示するメッセージを入力してください。';
$string['authname'] = '認証局名';
$string['cannotjumpasmasqueradeduser'] = '別のユーザとして代理ログインしているためあなたは他のアプリケーションにジャンプできません。';
$string['cannotremove'] = 'このインスティテューションの唯一のプラグインのため私たちはこの認証プラグインを削除することはできません。';
$string['cannotremoveinuse'] = 'ユーザに使用されているため私たちはこの認証プラグインを削除することはできません。あなたがこのプラグインを削除できるようにするにはユーザレコードを更新する必要があります。';
$string['cantretrievekey'] = 'アプリケーションおよびWWWルートフィールドが正しいことを確認してください。また、リモートホストのネットワーキングが有効にされていることを確認してください。';
$string['changepasswordurl'] = 'パスワード変更URL';
$string['duplicateremoteusername'] = '外部認証ユーザ名はすでにユーザ %s によって使用されています。外部認証ユーザ名は認証メソッド内でユニークである必要があります。';
$string['duplicateremoteusernameformerror'] = '外部認証ユーザ名は認証メソッド内でユニークである必要があります。';
$string['editauthority'] = '認証局を編集する';
$string['errnoauthinstances'] = '私たちには %s のホストに関して認証プラグインインスタンスが設定されていないようです。';
$string['errnoxmlrpcinstances'] = '私たちには %s のホストに関してXMLRPCプラグインインスタンスが設定されていないようです。';
$string['errnoxmlrpcuser1'] = '現時点ではあなたを認証できませんでした。可能性のある理由として以下が考えられます:

*あなたのSSOセッションが失効しました。他のアプリケーションに戻って %s にログインするためのリンクを再度クリックしてください。
*あなたの %s に対するSSOが許可されていません。あなたがSSOできるかどうか管理者に確認してください。';
$string['errnoxmlrpcwwwroot'] = '私たちには %s のホストに関してレコードがありません。';
$string['errorcertificateinvalidwwwroot'] = 'これは %s の証明書ですが、あなたは %s に対する使用を試みています。';
$string['errorcouldnotgeneratenewsslkey'] = '新しいSSLキーを生成できませんでした。本当にこのマシンに OpenSSLおよびOpenSSL用PHPモジュールがインストールされていますか?';
$string['errornotvalidsslcertificate'] = '有効なSSLサーバ証明書ではありません。';
$string['host'] = 'ホスト名またはIPアドレス';
$string['hostwwwrootinuse'] = 'すでに別のインスティテューション (%s) によってWWWルートが使用されています。';
$string['ipaddress'] = 'IPアドレス';
$string['name'] = 'サイト名';
$string['noauthpluginconfigoptions'] = 'このプラグインに関する設定オプションはありません。';
$string['nodataforinstance'] = '認証インスタンスのデータが見つかりませんでした。 ';
$string['parent'] = '親認証局';
$string['port'] = 'ポート';
$string['primaryemaildescription'] = '主メールアドレスです。あなたの主メールアドレス宛にクリック可能なリンクを含むメールが送信されます - メールアドレスを有効にするためこのリンクをクリックした後、システムにログインしてください。';
$string['protocol'] = 'プロトコル';
$string['requiredfields'] = '必須プロファイルフィールド';
$string['requiredfieldsset'] = '必須プロファイルフィールドセット';
$string['saveinstitutiondetailsfirst'] = '認証プラグインを設定する前にインスティテューション詳細を保存してください。';
$string['shortname'] = 'あなたのサイトの省略名';
$string['ssodirection'] = 'SSOの方向';
$string['theyautocreateusers'] = 'あちらでユーザを自動作成させる';
$string['theyssoin'] = 'こちらにSSOさせる';
$string['toomanytries'] = 'あなたは最大ログイン試行回数を超過しました。このアカウントは5分間ロックされます。';
$string['unabletosigninviasso'] = 'SSO経由でサインインできません。';
$string['updateuserinfoonlogin'] = 'ログイン時、ユーザ情報を更新する';
$string['updateuserinfoonlogindescription'] = 'リモートサーバのユーザ情報を検索してユーザがログインするたびにあなたのローカルユーザレコードを更新します。';
$string['validationprimaryemailsent'] = '確認メールが送信されました。メールアドレスを有効にするためメール内のリンクをクリックしてください。';
$string['warninstitutionregistration'] = '$cfg->usersuniquebyusernameが有効にされていますがインスティテューションの登録が許可されています。セキュリティ上の理由からすべてのインスティテューションでは「登録を許可する」を無効にする必要があります。これをウェブインターフェースで調整するためあなたは一時的に「$cfg->usersuniquebyusername = false」を設定する必要があります。';
$string['warninstitutionregistrationinstitutions'] = array(
    0 => '次のインスティテューションでは登録が有効にされています:
%2$s',
);
$string['warnmultiinstitutionsoff'] = '$cfg->usersuniquebyusernameが有効にされていますがサイトオプション「ユーザに複数インスティテューションを許可する」は無効にされています。ログインするたびにユーザはインスティテューションを変える必要があるためこれは意味をなしません。この設定を「管理 -> サイト設定 -> サイトオプション -> インスティテューション設定」で有効にしてください。';
$string['weautocreateusers'] = 'こちらでユーザを自動作成する';
$string['weimportcontent'] = 'こちらにコンテンツをインポートさせる';
$string['weimportcontentdescription'] = '(一部のアプリケーションのみ)';
$string['wessoout'] = 'あちらへSSOする';
$string['wwwroot'] = 'WWWルート';
$string['xmlrpccouldnotlogyouin'] = '申し訳ございません、あなたをログインさせることができませんでした。';
$string['xmlrpccouldnotlogyouindetail1'] = '申し訳ございません、今回はあなたを %s にログインさせることができませんでした。ログインを再度お試しください。問題が続く場合、あなたの管理者にご連絡ください。';
$string['xmlrpcserverurl'] = 'XML-RPCサーバURL';
