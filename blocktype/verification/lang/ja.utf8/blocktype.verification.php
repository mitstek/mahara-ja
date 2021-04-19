<?php
/**
 *
 * @package    mahara
 * @subpackage lang (Japanese)
 * @translator Mitsuhiro Yoshida (https://mitstek.com/)
 * @started    2008-01-19 11:25:00 UTC
 * @updated    2021-04-19 03:07:38 UTC
 * @license    https://www.gnu.org/copyleft/gpl.html GNU GPL version 3 or later
 * @copyright  For copyright information on Mahara, please see the README file distributed with this software.
 *
 */

defined('INTERNAL') || die();

$string['title'] = 'ポートフォリオレビュー';
$string['description'] = 'レビュー詳細を表示する';
$string['primarystatement'] = '主ステートメント';
$string['primarystatementdescription'] = 'あなたがこのステートメントを主ステートメントにした場合、ページの目立つ位置に表示されます。すでに主ステートメントが存在する場合、あなたは別のステートメントを追加できません。';
$string['blockcontent'] = 'ステートメントテキスト';
$string['blockcontentdescription'] = 'あなたが承認を希望するステートメントのテキストを記述してください。レビュアにはステートメントを承認するためのチェックボックスが表示されます。あなたがこのフィールドを空白にする場合、レビュアが自分のステートメントを記述できるようコメントフィールドを有効にしてください。';
$string['textdescription'] = 'あなたのステートメントのテキストを記述してください。レビュアにはステートメントを承認するためのチェックボックスが表示されます。あなたがこのフィールドを空白にする場合、レビュアが自分のステートメントを記述できるようコメントフィールドを有効にしてください。';
$string['addcomment'] = 'レビューコメントを追加する';
$string['addcommentdescription'] = 'あなたがコメントを許可した場合、レビュアには自分のステートメントを追加するためのテキストフィールドが設置されます。ポートフォリオのロック有無を問わずコメントステートメントは作成できます。';
$string['displayverifiername'] = 'レビュアの表示名';
$string['displayverifiernamedescription'] = 'ステートメントが承認された場合にレビュア名を表示するかどうか決定してください。タイムスタンプは常に表示されます。';
$string['availableto'] = '利用可能';
$string['groupadmin'] = 'グループ管理者';
$string['grouptutor'] = 'グループチューター';
$string['groupmember'] = 'グループメンバー';
$string['availabilitydate'] = '利用可能日';
$string['lockportfolio'] = 'ポートフォリオをロックする';
$string['notification'] = '作成者に通知する';
$string['notificationdescription'] = 'ステートメントが選択された場合、またはコメントが追加された場合、ポートフォリオ作成者に通知が送信されます。';
$string['resetstatement'] = 'ステートメントをリセットする';
$string['resetstatementdescription'] = '人がステートメントをリセットするために必要なロールを選択してください。ロールが選択されない場合、誰もステートメントをリセットできません。';
$string['toverifyspecific'] = 'レビュー予定:  %s';
$string['verifiedspecific'] = 'レビュー済み:  %s';
$string['verificationmodaltitle'] = 'レビュー: %s';
$string['unverify'] = 'あなたが続けた場合、このレビューは削除されます。';
$string['verifiedon'] = '%s にレビュー済み';
$string['verifiedonby'] = '<a href="%s">%s</a> - %s';
$string['savedraft'] = '下書きとして保存する';
$string['publish'] = '公開';
$string['cancel'] = 'キャンセル';
$string['addcommentdescriptionhtml'] = '<div><strong>下書きとして保存する:</strong> あなたのみあなたのコメントを閲覧できます。あなたはまだ変更できます。<br />
<strong>公開:</strong> ポートフォリオにアクセスできる人は誰でもあなたのコメントを閲覧できます。あなたは公開済みコメントを下書きステータスには戻せません。</div>';
$string['addcommentchecklist'] = 'あなたがこのステートメントを公開した場合、元に戻せません。';
$string['addcommentchecklistnames'] = 'あなたがこのステートメントを公開した場合、元に戻せません。元に戻したい場合、「詳細オプション」ボタンをクリックしてステートメントのリセットを次のいずれかの人に依頼してください: %s';
$string['addcommentchecklistlocking'] = 'あなたがこのステートメントを公開した場合、
- ポートフォリオ作成者はポートフォリオを変更できません。
- ポートフォリオ作成者は新たなレビュアを追加できません。
- あなたのステートメントを元に戻せません。';
$string['addcommentchecklistlockingnames'] = 'あなたがこのステートメントを公開した場合、
- ポートフォリオ作成者はポートフォリオを変更できません。
- ポートフォリオ作成者は新たなレビュアを追加できません。
- あなたのステートメントを元に戻せません。元に戻したい場合、「詳細オプション」ボタンをクリックしてステートメントのリセットを次のいずれかの人に依頼してください: %s';
$string['commentformplaceholder'] = 'コメントを執筆可能な人がこのページを表示した場合、レビューコメントフォームが表示されます。';
$string['verifycomment'] = 'コメントを追加する';
$string['addcommentsuccess'] = '「 %s 」へのコメントが正常に追加されました。';
$string['addcommentsuccessdraft'] = '「 %s 」への下書きコメントが正常に追加されました。';
$string['verifymessagesubjectnoname'] = 'あなたのポートフォリオにステートメントが追加されました:';
$string['verifymessagenoname'] = '次のステートメントが %s に承認されました:
%s';
$string['verifymessagesubject'] = '%s があなたのポートフォリオのステートメントを承認しました。';
$string['verifymessage'] = '%s が次のステートメントを %s に承認しました:
%s';
$string['blockneedscollection'] = '正しく表示するためにはこのブロックをコレクションのポートフォリオ完了ページに置く必要があります。';

?>
