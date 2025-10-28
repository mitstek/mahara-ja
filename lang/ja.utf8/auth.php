<?php

defined('INTERNAL') || die();

$string['active'] = 'アクティブ';
$string['addauthority'] = '認証局を追加する';
$string['alternativelogins'] = '管理ログイン';
$string['application'] = 'アプリケーション';
$string['authloginmsg2'] = 'あなたが親認証局を選択していない場合、ログインフォームでログインを試みる誰かに表示されるメッセージを入力してください。';
$string['authloginmsgnoparent'] = '誰かがログインフォームでログインを試みた場合に表示するメッセージを入力してください。';
$string['authname'] = '認証局名';
$string['cannotjumpasmasqueradeduser'] = '別の誰かとして代理ログインしているためあなたは他のアプリケーションにジャンプできません。';
$string['cannotremove'] = '私たちはこの認証プラグインを削除できません。これはこのインスティテューションに存在する唯一のプラグインです。';
$string['cannotremoveinuse'] = '私たちはこの認証プラグインを削除できません。これは誰か他の人に使用されています。あなたはこのプラグインを削除できるようにする前にレコードを更新する必要があります。';
$string['cantretrievekey'] = 'リモートサーバの公開鍵検索中にエラーが発生しました。<br>アプリケーションおよびWWWルートフィールドが正しいことを確認してください。また、リモートホストのネットワーキングが有効にされていることを確認してください。';
$string['changepasswordurl'] = 'パスワード変更URL';
$string['duplicateremoteusername'] = '外部認証ユーザ名はすでに %s により使用されています。外部認証ユーザ名は認証方法内でユニークである必要があります。';
$string['duplicateremoteusernameformerror'] = '外部認証ユーザ名は認証方法内でユニークである必要があります。';
$string['editauthority'] = '認証局を編集する';
$string['errnoauthinstances'] = '私たちには %s のホストに認証プラグインインスタンスが設定されていないようです。';
$string['errnoxmlrpcinstances'] = '私たちには %s のホストにXMLRPCプラグインインスタンスが設定されていないようです。';
$string['errnoxmlrpcuser1'] = '現時点ではあなたを認証できませんでした。可能性のある理由として以下が考えられます:

*あなたのSSOセッションが失効しました。他のアプリケーションに戻って %s にログインするためのリンクを再度クリックしてください。
*あなたの %s へのSSOが許可されていません。あなたがSSOできるかどうか管理者に確認してください。';
$string['errnoxmlrpcwwwroot'] = '私たちには %s のホストにレコードがありません。';
$string['errorcertificateinvalidwwwroot'] = 'これは %s の証明書ですが、あなたは %s への使用を試みています。';
$string['errorcouldnotgeneratenewsslkey'] = '新しいSSLキーを生成できませんでした。本当にこのマシンに OpenSSLおよびOpenSSL用PHPモジュールがインストールされていますか?';
$string['errornotvalidsslcertificate'] = '有効なSSLサーバ証明書ではありません。';
$string['errorunabletologin'] = 'あなたはログインできません。';
$string['host'] = 'ホスト名またはIPアドレス';
$string['hostwwwrootinuse'] = 'すでに別のインスティテューション (%s) によりWWWルートが使用されています。';
$string['ipaddress'] = 'IPアドレス';
$string['name'] = 'サイト名';
$string['noauthpluginconfigoptions'] = 'このプラグインに関する設定オプションはありません。';
$string['nodataforinstance1'] = '認証インスタンス「 %s 」のデータは見つかりませんでした。';
$string['nullprivatecert'] = '秘密鍵を生成できませんでした。';
$string['nullpubliccert'] = '公開証明書を生成できませんでした。';
$string['parent'] = '親認証局';
$string['port'] = 'ポート';
$string['primaryemaildescription'] = '主メールアドレスです。あなたの主メールアドレス宛にクリック可能なリンクを含むメールが送信されます - メールアドレスを有効にするためこのリンクをクリックした後、システムにログインしてください。';
$string['protocol'] = 'プロトコル';
$string['requiredfields'] = '必須プロファイルフィールド';
$string['requiredfieldsset'] = '必須プロファイルフィールドセット';
$string['saveinstitutiondetailsfirst'] = '認証プラグインを設定する前にインスティテューション詳細を保存してください。';
$string['shortname'] = 'あなたのサイトの省略名';
$string['ssodirection'] = 'SSOの方向';
$string['theyautocreateusers'] = 'あちらでアカウントを自動作成させる';
$string['theyssoin'] = 'こちらにSSOさせる';
$string['toomanytries'] = 'あなたは最大ログイン試行回数を超過しました。このアカウントは5分間ロックされます。';
$string['unabletosigninviasso'] = '外部認証 (SSO) 経由でサインインできません。';
$string['updateuserinfoonlogin'] = 'ログイン時、個人情報を更新する';
$string['updateuserinfoonlogindescription'] = 'リモートサーバの個人情報を検索して人がログインするたびにあなたのローカルレコードを更新します。';
$string['validationprimaryemailsent'] = '確認メールが送信されました。メールアドレスを有効にするためメール内のリンクをクリックしてください。';
$string['warninstitutionregistration'] = '$cfg->usersuniquebyusernameが有効にされていますがインスティテューションの登録が許可されています。セキュリティ上の理由からすべてのインスティテューションでは「登録を許可する」を無効にする必要があります。これをウェブインタフェースで調整するためあなたは一時的に「$cfg->usersuniquebyusername = false」を設定する必要があります。';
$string['warninstitutionregistrationinstitutions'] = array(
    0 => '次のインスティテューションでは登録が有効にされています:
%2$s',
);
$string['warnmultiinstitutionsoff'] = '$cfg->usersuniquebyusernameが有効にされていますがサイトオプション「人に複数インスティテューションを許可する」は無効にされています。ログインするたびに人はインスティテューションを変える必要があるためこれは意味をなしません。この設定を「管理 → サイト設定 → インスティテューション設定」で有効にしてください。';
$string['weautocreateusers'] = 'こちらでアカウントを自動作成する';
$string['weimportcontent'] = 'こちらにコンテンツをインポートさせる';
$string['weimportcontentdescription'] = '(一部のアプリケーションのみ)';
$string['wessoout'] = 'あちらへSSOする';
$string['wwwroot'] = 'WWWルート';
$string['xmlrpccouldnotlogyouin'] = '申し訳ございません、あなたをログインさせることができませんでした。';
$string['xmlrpccouldnotlogyouindetail1'] = '申し訳ございません、今回はあなたを %s にログインさせることができませんでした。しばらくして再度ログインをお試しください。\\r
問題が続く場合、あなたの管理者にご連絡ください。';
$string['xmlrpcserverurl'] = 'XML-RPCサーバURL';
