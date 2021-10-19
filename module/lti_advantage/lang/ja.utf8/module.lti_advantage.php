<?php
/**
 *
 * @package    mahara
 * @subpackage lang (Japanese)
 * @translator Mitsuhiro Yoshida (https://mitstek.com/)
 * @started    2008-01-19 11:25:00 UTC
 * @updated    2021-10-19 06:00:06 UTC
 * @license    https://www.gnu.org/copyleft/gpl.html GNU GPL version 3 or later
 * @copyright  For copyright information on Mahara, please see the README file distributed with this software.
 *
 */

defined('INTERNAL') || die();

$string['ltiserviceexists'] = 'LTI Advantageサービスグループは登録されています。';
$string['maharaltiadvantage'] = 'LTI Advantage';
$string['short_name'] = '省略名';
$string['short_namedescription'] = '最大半角30文字です。この省略名は「現在の提出」テーブルの「提出先」カラムに表示されるLTIプロバイダ名です。';
$string['short_namecannotbeempty'] = '省略名は空白にできません。';
$string['issuer'] = '発行者';
$string['client_id'] = 'クライアントID';
$string['platform_login_auth_endpoint'] = 'OpenID Connect認証エンドポイント';
$string['platformvendorkeytitle'] = 'プラットフォームベンダ';
$string['platformvendorkeyoptionnone'] = 'プラットフォームを選択する';
$string['platformvendorkeyoptionbrightspace'] = 'Brightspace';
$string['platformvendorkeycannotbeempty'] = 'プラットフォームベンダを選択または入力してください。';
$string['platformvendorissnotfound'] = 'プラットフォームは返却データ内に「iss」を送信していません。キーがありません。';
$string['platformvendorkeyinvalid'] = 'リクエスト内にプラットフォームベンダキーが見つかりませんでした。返されたリクエスト内のキーは次のとおりです: %s';
$string['platformvendorkeynotfound'] = 'プラットフォームからの「iss」(%s) には「lti_advantage_registration」データベーステーブル内で合致する「Issuer」がありません。';
$string['platform_service_auth_endpoint'] = 'プラットフォームOAuth2アクセストークンURL';
$string['platform_jwks_endpoint'] = 'プラットフォームキーセットURL';
$string['platform_auth_provider'] = 'プラットフォームOAuth2オーディエンス';
$string['deployment_id'] = 'デプロイメントID';
$string['oauth2'] = 'OAuth2';
$string['nullprivatecert'] = '秘密鍵を生成または保存できませんでした。';
$string['nullpubliccert'] = '公開鍵を生成または保存できませんでした。';
$string['groupname'] = '%s';
$string['usercreationupdate'] = 'まもなくグループメンバーが更新されます。数分後、戻ってきてください。';
$string['domain'] = 'ドメイン';
$string['redirecturl'] = 'リダイレクトURL';
$string['openidconnectlogin'] = 'OpenID ConnectログインURL';
$string['keyset'] = 'キーセットURL';
$string['deployments'] = 'デプロイメント';
$string['deploymentsdesc'] = 'LTIプラットフォームのデプロイメントIDです。';
$string['issueralreadyinuse'] = '発行者はすでに別のクライアント接続に設定されています。';
$string['deploymentidcannotbeempty'] = '両方のデプロイメントIDフィールドを空白にできません。';
$string['deploymentidcannotbesame'] = '両方のデプロイメントIDフィールドを同一にできません。';
$string['deployment1_idalreadyinuse'] = 'この基本起動デプロイメントIDはすでに使用されています。';
$string['deployment2_idalreadyinuse'] = 'このNRPSデプロイメントIDはすでに使用されています。';
$string['deployment3_idalreadyinuse'] = 'このDeep LinkデプロイメントIDはすでに使用されています。';
$string['deploymentsbasiclaunchtitle'] = '基本起動';
$string['deploymentsnrpstitle'] = 'NRPS';
$string['deploymentsdeeplinkportfoliolisttitle'] = 'Deep Link (ポートフォリオリスト)';
$string['deeplinkportfoliostitle'] = 'ポートフォリオ';
$string['deeplinknoportfolios'] = 'あなたにはポートフォリオがありません。';
$string['confirmareyousure'] = '本当によろしいですか?';
$string['confirmwarning'] = '評価のために「 %s 」を提出した場合、あなたは採点が終了するまでコンテンツを編集できません。このポートフォリオを今すぐ提出してもよろしいですか?';
$string['confirmbtntxtconfirm'] = '確認';
$string['confirmbtntxtcancel'] = 'キャンセル';
