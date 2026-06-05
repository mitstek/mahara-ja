<?php
/**
 *
 * @package    mahara
 * @subpackage lang (Japanese)
 * @translator Mitsuhiro Yoshida (https://mitstek.com/)
 * @started    2008-01-19 11:25:00 UTC
 * @updated    2026-06-05 13:17:30 UTC
 * @license    https://www.gnu.org/licenses/gpl-3.0.html GNU GPL version 3 or later
 * @copyright  For copyright information on Mahara, please see the README file distributed with this software.
 *
 */

defined('INTERNAL') || die();

$string['pluginname'] = 'OpenID Connect';
$string['title'] = 'OpenID Connect';
$string['description'] = 'OpenID Connectで認証する';
$string['login'] = 'OpenID Connect';
$string['errorauthnoauthcode'] = '認証コードを受信していません。';
$string['errorauthnocreds'] = 'OpenID Connectクライアント認証情報を設定してください。';
$string['errorauthnoendpoints'] = 'OpenID Connectサーバエンドポイントを設定してください。';
$string['errorauthinvalididtoken'] = '無効なid_tokenを受信しました。';
$string['errorauthnoidtoken'] = 'OpenID Connect id_tokenを受信していません。';
$string['errorauthunknownstate'] = '不明なステータス';
$string['errorbadinstitution'] = 'アカウントを作成するインスティテューションを決定できませんでした。';
$string['errorjwtbadpayload'] = 'JWTペイロードを読み込めませんでした。';
$string['errorjwtcouldnotreadheader'] = 'JWTヘッダを読み込めませんでした。';
$string['errorjwtempty'] = '空または非文字列のJWTを受信しました。';
$string['errorjwtinvalidheader'] = '無効なJWTヘッダ';
$string['errorjwtmalformed'] = '不正なJWTを受信しました。';
$string['errorjwtunsupportedalg'] = 'JWS AlgまたはJWEはサポートされていません。';
$string['errornodatabaseconfigs'] = 'データベース接続がありません。あなたはconfig.phpファイルで$cfg->ssphpsqldsn、$cfg->ssphpsqlusernameおよび$cfg->ssphpsqlpasswordを設定する必要があります。';
$string['erroroidcclientnocreds'] = 'クライアントIDが提供されていません。';
$string['erroroidcclientnoauthendpoint'] = '認証エンドポイントが提供されていません。';
$string['erroroidcclientnouserinfoendpoint'] = 'ユーザ情報エンドポイントが提供されていません。';
$string['erroroidcclientnotokenendpoint'] = 'トークンエンドポイントが提供されていません。';
$string['confirm'] = 'アカウントをリンクする';
$string['link'] = 'アカウントをOpenID Connectにリンクする';
$string['linkaccounts'] = 'OpenID Connectアカウント <b>%s</b> とローカルアカウント <b>%s</b> をリンクしますか?
<br><br>
リンク完了後、あなたはOpenID Connectでログインできるようになります。';
$string['logintolink'] = '%s アカウントをOpenID Connectにリンクする';
$string['logintolinkdesc'] = '<p><b>現在、あなたはOpenID Connectアカウント「 %s 」にログインしています。このアカウントをあなたの既存のローカル %s アカウントにリンクするには以下のフォームを使用してローカルアカウントでログインしてください。リンク完了後、あなたはOpenID Connectでログインできるようになります。</b></p>';
$string['settings_title'] = 'インスタンス名';
$string['settings_autocreateusers'] = '自動的にアカウントを作成する';
$string['settings_clientid'] = 'クライアントID';
$string['settings_clientsecret'] = 'クライアントシークレット';
$string['settings_authendpoint'] = '認証エンドポイント';
$string['auth_config.authendpoint_help'] = '<h1>認証エンドポイント</h1><p>ログインが実行されるエンドポイントです。例えば次のようになります: <em>https://mahara.example/auth/saml/sp/module.php/oidc/authorize.php</em></p>';
$string['settings_userinfoendpoint'] = '個人情報エンドポイント';
$string['auth_config.userinfoendpoint_help'] = '<h1>個人情報エンドポイント</h1><p>個人情報の取得が実行されるエンドポイントです。例えば次のようになります: <em>https://mahara.example/auth/saml/sp/module.php/oidc/userinfo.php</em></p>';
$string['settings_logoutendpoint'] = 'ログアウトエンドポイント';
$string['auth_config.logoutendpoint_help'] = '<h1>ログアウトエンドポイント</h1><p>トークンヒントを使用したログアウトが実行されるエンドポイントです。例えば次のようになります: <em>https://mahara.example/auth/saml/sp/module.php/oidc/logout.php</em></p>';
$string['settings_tokenendpoint'] = 'トークンエンドポイント';
$string['auth_config.tokenendpoint_help'] = '<h1>トークンエンドポイント</h1><p>トークンがリフレッシュされるエンドポイントです。例えば次のようになります: <em>https://mahara.example/auth/saml/sp/module.php/oidc/token.php</em></p>';
$string['settings_username'] = 'ユーザ名属性';
$string['auth_config.usernamefield_help'] = '<h1>ユーザ名属性</h1><p>IDプロバイダから提供されるデフォルトのOIDC一意識別子ではなく、ユーザ名と照合します。これをクレームパラメータ (例: \'oid\') またはプロファイルフィールド (例: \'email\') と照合するように設定します。</p>';
$string['settings_resource'] = 'リソース';
$string['settings_maharascope'] = '「mahara」スコープを使用する';
$string['settings_institutionattribute'] = 'インスティテューション合致属性';
$string['settings_institutionvalue'] = 'インスティテューション合致値';
$string['settings_domainhint'] = 'ドメインヒント';
$string['auth_config.domainhint_help'] = '<h1>ドメインヒント</h1><p>認証リクエストのログインフローを使用する場合、この値を「domain_hint」パラメータとして渡してください。</p><p>一部のOpenID Connectプロバイダではログインプロセスを簡略化するためにこの機能を利用しています。あなたのプロバイダでこの機能がサポートされているかどうかご確認ください。</p>';
$string['refreshtoken'] = 'トークンをリフレッシュする';
$string['tokenrefreshfailure'] = 'トークンリフレッシュに失敗しました: %s: %s';
$string['tokenrefreshexpired'] = 'トークンリフレッシュに失敗しました: トークン有効期限切れ';
$string['oldtokentorefresh'] = 'このアカウントのOIDCトークンの有効期限が切れました。ログアウトして再度OpenID Connectでログインしてください。';
$string['buttontokentorefresh'] = 'あなたのOIDCトークンをリフレッシュする';
$string['oidc_make_group_readable'] = 'ウェブサーバが読めるようにするには以下のファイルが存在してグループ所有権を持つ必要があります:';
$string['installoidc'] = 'OIDCをクライアントとして使用したい場合、あなたのインスティテューションを編集してOIDC認証インスタンスを追加してください。
<br><br>
しかし、あなたのサイトをOIDCアイデンティティサーバとして使用したい場合、不足した設定変数を設定してセットアップのために<a href="%s">OpenID Connectクライアントレジストリ</a>にアクセスする必要があります。
<br>
インストール完了後、あなたは外部システムがこのIDサーバに接続するために必要な<a href="%s">設定</a>情報を共有できるようになります。
<br>
あなたはOIDCのcronタスクを設定して期限切れのトークンを消去できます。cron設定情報は<a href="%s">cron情報ページ</a>から入手できます。
<br><br>';
$string['oidc_idp_missing_settings1'] = '<strong>OIDCをアイデンティティプロバイダ (IdP) として使用するための設定がありません。</strong><br><br>';
$string['oidc_idp_not_set'] = 'このサイトはIDサーバとして有効にされていません。有効にするには$cfg->saml_as_idpをtrueに設定してください。';
$string['oidc_idp_admin_not_set'] = 'サイトIDサーバのパスワードが設定されていません。有効にするには$cfg->saml_admin_passwordに強力なパスワードを設定してください。';
$string['oidc_idp_admin_all_set'] = '設定されたすべての設定変数';
