<?php
/**
 *
 * @package    mahara
 * @subpackage lang (Japanese)
 * @translator Mitsuhiro Yoshida (https://mitstek.com/)
 * @started    2008-01-19 11:25:00 UTC
 * @updated    2026-06-18 15:13:06 UTC
 * @license    https://www.gnu.org/licenses/gpl-3.0.html GNU GPL version 3 or later
 * @copyright  For copyright information on Mahara, please see the README file distributed with this software.
 *
 */

defined('INTERNAL') || die();

$string['title'] = 'ポートフォリオレビュー';
$string['description'] = 'レビュー詳細を表示する';
$string['primarystatement'] = '主ステートメント';
$string['primary_help'] = '<h1>主ステートメント</h1><p>このステートメントをあなたの主ステートメントにした場合、ページ上でより目立つように表示されます。すでにページに主ステートメントがある場合、あなたは別のステートメントを追加できません。</p>';
$string['blockcontent'] = 'ステートメントテキスト';
$string['text_help'] = '<h1>ステートメントテキスト</h1><p>あなたが承認を希望するステートメントのテキストを入力してください。レビュア者にはステートメントを確認するためのチェックボックスが表示されます。このフィールドを空白のままにした場合、レビュー担当者が独自のステートメントを記入できるようコメントフィールドを有効にしてください。</p>';
$string['addcomment'] = 'レビューコメントを追加する';
$string['addcomment_help'] = '<h1>レビューコメントを追加する</h1><p>コメントを許可した場合、レビュアはテキストフィールドを使用して独自のステートメントを追加できます。これはデフォルトのステートメントと一緒に使用できます。ポートフォリオがロックされているかどうかにかかわらず、レビューコメントできます。</p>';
$string['displayverifiername'] = 'レビュア名を表示する';
$string['displayverifiername_help'] = '<h1>レビュア名を表示する</h1><p>ステートメントを承認したレビュアの氏名を表示するかどうかを決定します。タイムスタンプは常に表示されます。</p>';
$string['availableto'] = '利用可能';
$string['availableto_help'] = '<h1>利用可能</h1>ステートメントを承認するためにレビュアが持つ必要のあるロールを選択してください。このフィールドを空白のままにした場合、特別なロールは必要なく、ポートフォリオにアクセスできる人は誰でもステートメントを承認またはコメントを提供できます。ロールは累積されません。';
$string['groupadmin'] = 'グループ管理者';
$string['grouptutor'] = 'グループチュータ';
$string['groupmember'] = 'グループメンバ';
$string['availabilitydate'] = '利用可能日';
$string['availabilitydate_help'] = '<h1>利用可能日</h1><p>ステートメントが利用可能になる日付を選択してください。それ以前はレビュアにはその日までレビューできない旨を知らせるアラートが表示されます。その日付はアクセス通知にも記載されます。あなたが日付を追加しない場合、ステートメントはいつでも作成できます。</p>';
$string['lockportfolio'] = 'ポートフォリオをロックする';
$string['lockportfolio_help'] = '<h1>ポートフォリオをロックする</h1><p>ステートメントが承認された場合にポートフォリオをロックするかどうかを決定してください。複数のステートメントがある場合、ロックを許可する最初のステートメントが承認された時点でポートフォリオはロックされます。レビューコメント (選択されている場合) は引き続き作成できます。</p>';
$string['notification'] = '作成者に通知する';
$string['notification_help'] = '<h1>作成者に通知する</h1><p>ステートメントが承認された場合、またはコメントが追加された場合にポートフォリオ作成者に通知を送信します。</p>';
$string['resetstatement'] = 'ステートメントをリセットする';
$string['resetstatement_help'] = '<h1>ステートメントをリセットする</h1><p>ステートメントをリセットするために人が持つ必要のあるロールを選択してください。ロールが選択されていない場合、誰もステートメントをリセットできません。</p>';
$string['availabilitydatemessage'] = 'あなたはまだステートメントを承認したり、コメントが許可された場合にコメントを追加できません。これは %s 以降、可能となります。';
$string['toverifyspecific'] = 'レビュー予定:  %s';
$string['verifiedspecific'] = 'レビュー済み:  %s';
$string['verificationmodaltitle'] = 'レビュー: %s';
$string['verificationchecklist'] = '<p>あなたがこのステートメントを承認した場合、自分の決定を元に戻せません。</p>';
$string['verificationchecklistnames'] = '<p>あなたがこのステートメントを承認した場合、自分の決定を元に戻せません。あなたがそうしたい場合、「詳細オプション」ボタンをクリックしてステートメントのリセットを次のいずれかの人に依頼してください: %s</p>';
$string['verificationchecklistlocking'] = '<p>あなたがこのステートメントを承認した場合</p>
<ul>
<li>ポートフォリオ作成者は自分のポートフォリオを変更できません。</li>
<li>ポートフォリオ作成者は新たなレビュアを追加できません。</li>
<li>あなたは自分の決定を元に戻せません。</li>
</ul>';
$string['verificationchecklistlockingnames'] = '<p>あなたがこのステートメントを承認した場合</p>
<ul>
<li>ポートフォリオ作成者は自分のポートフォリオを変更できません。</li>
<li>ポートフォリオ作成者は新たなレビュアを追加できません。</li>
<li>あなたは自分の決定を元に戻せません。あなたがそうしたい場合、「詳細オプション」ボタンをクリックしてステートメントのリセットを次のいずれかの人に依頼してください: %s</li>
</ul>';
$string['unverify'] = 'あなたが続けた場合、このレビューは削除されます。';
$string['verifiedon'] = '%s にレビュー済み';
$string['verifiedonby'] = '<a href="%s">%s</a> - %s';
$string['savedraft'] = '下書きを保存する';
$string['publish'] = '公開';
$string['cancel'] = 'キャンセル';
$string['addcommentdescriptionhtml'] = '<div><strong>下書きとして保存する:</strong> あなたのみあなたのコメントを閲覧できます。あなたはまだ変更できます。<br>
<strong>公開:</strong> ポートフォリオにアクセスできる人は誰でもあなたのコメントを閲覧できます。あなたは公開済みコメントを下書きステータスには戻せません。</div>';
$string['addcommentchecklist'] = 'あなたがこのステートメントを公開した場合、元に戻せません。';
$string['addcommentchecklistnames'] = 'あなたがこのステートメントを公開した場合、元に戻せません。あなたがそうしたい場合、「詳細オプション」ボタンをクリックしてステートメントのリセットを次のいずれかの人に依頼してください: %s';
$string['addcommentchecklistlocking'] = 'あなたがこのステートメントを公開した場合
- ポートフォリオ作成者は自分のポートフォリオを変更できません。
- ポートフォリオ作成者は新たなレビュアを追加できません。
- あなたのステートメントを元に戻せません。';
$string['addcommentchecklistlockingnames'] = 'あなたがこのステートメントを公開した場合
- ポートフォリオ作成者は自分のポートフォリオを変更できません。
- ポートフォリオ作成者は新たなレビュアを追加できません。
- あなたのステートメントを元に戻せません。あなたがそうしたい場合、「詳細オプション」ボタンをクリックしてステートメントのリセットを次のいずれかの人に依頼してください: %s';
$string['commentformplaceholder'] = 'コメントを執筆可能な人がこのページを表示した場合、レビューコメントフォームが表示されます。';
$string['verifycomment'] = 'コメントを追加する';
$string['addcommentsuccess'] = '「 %s 」へのコメントが正常に追加されました。';
$string['addcommentsuccessdraft'] = '「 %s 」への下書きコメントが正常に追加されました。';
$string['resetcomment'] = 'コメントをリセットする';
$string['verifymessagesubjectnoname'] = 'あなたのポートフォリオでステートメントが承認されました:';
$string['verifymessagenoname'] = '次のステートメントが %s に承認されました:
%s';
$string['verifymessagesubject'] = '%s があなたのポートフォリオのステートメントを承認しました。';
$string['verifymessage'] = '%s が次のステートメントを %s に承認しました:
%s';
$string['blockneedscollection'] = '正しく表示するためにはこのブロックをコレクションのポートフォリオ完了ページに置く必要があります。';
