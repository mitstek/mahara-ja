<?php
/**
 *
 * @package    mahara
 * @subpackage lang (Japanese)
 * @translator Mitsuhiro Yoshida (https://mitstek.com/)
 * @started    2008-01-19 11:25:00 UTC
 * @updated    2025-05-19 00:53:59 UTC
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
$string['settings_authendpoint_default'] = 'ログインが実行されるエンドポイント
<br>
例: https://mahara.example/auth/saml/sp/module.php/oidc/authorize.php';
$string['settings_userinfoendpoint'] = '個人情報エンドポイント';
$string['settings_userinfoendpoint_default'] = '個人情報が取得されるエンドポイント
<br>
例: https://mahara.example/auth/saml/sp/module.php/oidc/userinfo.php';
$string['settings_logoutendpoint'] = 'ログアウトエンドポイント';
$string['settings_logoutendpoint_default'] = 'トークンのヒントでログアウトするエンドポイント
<br>
例: https://mahara.example/auth/saml/sp/module.php/oidc/logout.php';
$string['settings_tokenendpoint'] = 'トークンエンドポイント';
$string['settings_tokenendpoint_default'] = 'トークンがリフレッシュされるエンドポイント
<br>
例: https://mahara.example/auth/saml/sp/module.php/oidc/token.php';
$string['settings_resource'] = 'リソース';
$string['settings_resource_default'] = 'イシュア名<br>例: https://mahara.example/';
$string['settings_maharascope'] = '「mahara」スコープを使用する';
$string['settings_maharascope_description'] = '「mahara」スコープを使用する場合、アイデンティティプロバイダはこのスコープを受け入れた上で私たちが以下で照合するインスティテューションに対するクレームを返す必要があります。';
$string['settings_institutionattribute'] = 'インスティテューション合致属性';
$string['settings_institutionvalue'] = 'インスティテューション合致値';
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
