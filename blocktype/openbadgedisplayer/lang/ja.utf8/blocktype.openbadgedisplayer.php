<?php
/**
 *
 * @package    mahara
 * @subpackage lang (Japanese)
 * @translator Mitsuhiro Yoshida (https://mitstek.com/)
 * @started    2008-01-19 11:25:00 UTC
 * @updated    2025-05-19 00:55:32 UTC
 * @license    https://www.gnu.org/licenses/gpl-3.0.html GNU GPL version 3 or later
 * @copyright  For copyright information on Mahara, please see the README file distributed with this software.
 *
 */

defined('INTERNAL') || die();

$string['title'] = 'オープンバッジ';
$string['description'] = 'あなたのオープンバッジを表示する';
$string['issuerdetails'] = 'イシュア詳細';
$string['badgedetails'] = 'バッジ詳細';
$string['issuancedetails'] = '発行詳細';
$string['name'] = '名称';
$string['url'] = 'URL';
$string['organization'] = '組織';
$string['evidence'] = 'エビデンス';
$string['issuedon'] = '発行日';
$string['expires'] = '有効期限';
$string['desc'] = '説明';
$string['criteria'] = 'クライテリア';
$string['nbadges'] = '%s バッジ';
$string['nobackpack'] = 'バックパックは見つかりませんでした。<br>あなたの<a href="%s">バックパック</a>のメールアドレスを<a href="%s">プロファイル</a>に追加してください。';
$string['nobadgegroups'] = 'パブリックバッジコレクション / バッジは見つかりませんでした。';
$string['nobadgesselectone'] = '選択されたバッジはありません。';
$string['nobackpackidin1'] = 'あなたのメールアドレス「 %s 」はサービス「 %s 」内に見つかりませんでした。';
$string['nobadgegroupsin1'] = '次のサービス内にパブリックバッジコレクションまたはバッジは見つかりませんでした: %s (メールアドレス: %s)';
$string['confighelp'] = 'このブロックで表示するバッジコレクションを選択してください。<br>あなたのコレクションおよびバッジを管理するには次のサービスにアクセスしてください:<br>%s';
$string['obppublicbadges'] = 'オープンバッジパスポート内すべてのパブリックバッジ';
$string['title_backpack'] = 'Mozillaバックパック';
$string['title_passport'] = 'オープンバッジパスポート';
$string['title_badgr'] = 'Badgrバックパック';
$string['fetchingbadges'] = 'エントリを取得しています。しばらくお待ちください。';
$string['missingbadgesources'] = 'ソース設定がありません。あなたのconfig.phpファイルに追加してください。例:
<br>
<br>
$cfg->openbadgedisplayer_source = \'{"backpack":"https://backpack.provider.org/"}\'';
$string['selectall'] = 'すべてを選択する';
$string['selectnone'] = 'すべての選択を解除する';
$string['deprecatedhost'] = '<p class="alert alert-warning">次のサービスからのバッジは廃止されたため表示されません: %s</p>';
$string['featuredisabled'] = 'openbadgedisplayerブロックタイプが有効ではありません。';
$string['badgrsourcemissing1'] = 'あなたのconfig.phpファイルのソース設定にBadgrがありません。';
$string['badgrusername'] = 'Badgrユーザ名';
$string['badgrpassword'] = 'Badgrパスワード';
$string['badgrtokentitle'] = 'Badgr';
$string['badgrtoken'] = 'Badgrトークン: %s';
$string['badgrtokenadded'] = 'Badgrトークンがアカウントに追加されました。';
$string['badgrtokendeleted'] = 'Badgrトークンが削除されました。';
$string['badgrtokennotfound'] = '提供された認証情報ではBadgrトークンは見つかりませんでした。';
$string['nobadgruid2'] = 'あなたがBadgrを使用できるようにするにはトークンを設定する必要があります。Badgrを設定するには「アカウントメニュー → 設定 → アプリ → Badgr」に移動してください。';
$string['resetobsoletebadgrtokensubject'] = 'あなたのBadgrトークンをリセットする必要があります。';
$string['resetobsoletebadgrtokenmessage1'] = '%s さん

現在、あなたの %s で使用中のBadgrトークンは廃止されています。

このトークンはあなたのポートフォリオページ内でBadgrバッジの表示に使用されます。

「アカウントメニュー → 設定 → 接続済みアプリ → Badgr」にアクセスして新しいものを設定してください。';
