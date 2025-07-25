<?php
/**
 *
 * @package    mahara
 * @subpackage lang (Japanese)
 * @translator Mitsuhiro Yoshida (https://mitstek.com/)
 * @started    2008-01-19 11:25:00 UTC
 * @updated    2025-07-08 23:12:32 UTC
 * @license    https://www.gnu.org/licenses/gpl-3.0.html GNU GPL version 3 or later
 * @copyright  For copyright information on Mahara, please see the README file distributed with this software.
 *
 */

defined('INTERNAL') || die();

$string['title'] = 'コース完了';
$string['name'] = 'コース情報';
$string['description'] = '外部ソースからコース完了に関する情報を表示します。';
$string['defaulttitledescription'] = 'ここを空白にした場合、デフォルトタイトルが生成されます。';
$string['blocktitleforowner'] = '%s のコース完了';
$string['placeholdermessage'] = 'このブロックは使用可能になる前に完全に設定する必要があります。完全に設定できるのはブロックがパーソナルポートフォリオページにある場合のみです。';
$string['completeconfiguration1'] = '表示するコース情報はありません。コース完了を表示するにはこのブロックを編集してください。';
$string['completeconfigurationnotpossible'] = 'このブロックのインスティテューションウェブサービス接続を構築する必要があります。ウェブサービスの設定に関してサイト管理者にお尋ねください。';
$string['unabletofetchdata'] = 'このページオーナのデータを取得できません。';
$string['fromdate'] = '開始日';
$string['fromdatedescription'] = 'この日付以降に開始されたコースのみ表示します。次のフォーマットを使用してください: %s';
$string['todate'] = '終了日';
$string['todatedescription'] = 'この日付以前に開始されたコースのみ表示します。次のフォーマットを使用してください: %s';
$string['externaluserid'] = '外部アカウントID';
$string['dateoutofsync'] = 'これは「終了日」より古くする必要があります。';
$string['nocourses1'] = 'まだ設定されたコース情報はありません。';
$string['hours'] = '時間';
$string['totalhours'] = '合計時間';
$string['course'] = 'コース';
$string['courses'] = 'コース';
$string['ncourses'] = '%s コース';
$string['coursetype'] = 'コースタイプ';
$string['connectedwithexternalaccount'] = '外部アカウントが見つかりました';
$string['coursesresultsfromto'] = '%s から %s の間にコースが見つかりました。';
$string['coursesresultsfrom'] = '%s 以降にコースが見つかりました。';
$string['coursesresultsto'] = '%s 以前にコースが見つかりました。';
$string['completedondate'] = '完了日';
$string['organisation'] = '組織';
$string['plugininfo'] = '<p>外部サイトから人のコース完了に関する情報を表示する場合、あなたは以下の設定が必要です:</p>
<ol>
<li>「blocktype/courseinfo」プラグインを有効にしてください。</li>
<li>「管理メニュー → ウェブサービス → 設定」で「外向きのウェブサービスリクエストを許可する」を有効にした上で「Rest」プロトコルを有効にしてください。</li>
<li>「管理メニュー → ウェブサービス → 接続マネージャ」に移動してあなたが接続を確立したいインスティテューションを選択してください。そしてドロップダウンメニューで「PluginBlocktypeCourseinfo:courseinfo - Course completion」オプションを選択して「追加」をクリックしてください。</li>
<li>次のようにフォームに入力してください:
<ul>
<li>名称: このインスティテューションの名称を入力してください。例)インスティテューションA: Moodle</li>
<li>接続有効:  「Yes」を設定してください。</li>
<li>ウェブサービスタイプ: 「REST」を選択してください。</li>
<li>認証タイプ: 「トークン」を選択してください。</li>
<li>ウェブサービスURL: 外部ソースのRESTサーバのURLを設定してください。例) https://moodle/webservice/rest/server.php</li>
<li>トークン: ここで必要な外部関数にアクセス可能な外部サービス側で生成されたトークンを設定してください。</li>
<li>渡す固定パラメータ: URLで渡す必要のある特別パラメータを追加してください。例) Moodleの場合、あなたは「moodlewsrestformat=json」を追加する必要があります。</li>
<li>JSONエンコード: 「Yes」を設定してください。</li>
<li>アカウントIDの外部関数: 提供されたメールアドレスを基に外部ウェブサービスの関数がアカウントIDを戻せる場合、これを設定してください。例) Moodleの場合「core_user_get_users_by_field」です。</li>
<li>コース完了の外部関数: 提供されたアカウントIDを基に外部ウェブサービスの関数がコース完了情報を戻せる場合、これを設定してください。例) Moodleの場合、「local_wdhb_get_course_completion_data」のようなカスタム関数です。</li>
</ul>
<li>フォームを保存してください。</li>
</ol>
<p>人が自分のページに「コース完了」ブロックを追加した場合、外部アカウントIDを取得してブロックに保存します。そしてページ閲覧時にそのアカウントIDの完了済みコースを取得して表示します。</p>';
$string['novalidconnections'] = '有効な接続オブジェクトはありません。';
$string['novalidconnectionauthtype'] = '有効なウェブサービスタイプはありません。「REST」タイプを使用する必要があります。';
$string['connectionresultsinvalid'] = '外部ソースから結果を取得できません。';
$string['userid_function_title'] = 'アカウントIDの外部関数';
$string['coursecompletion_function_title'] = 'コース完了の外部関数';
