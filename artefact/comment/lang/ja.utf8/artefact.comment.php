<?php
/**
 *
 * @package    mahara
 * @subpackage lang (Japanese)
 * @translator Mitsuhiro Yoshida (http://mitstek.com/)
 * @started    2008-01-19 11:25:00 UTC
 * @updated    2016-09-23 16:53:48 UTC
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL version 3 or later
 * @copyright  For copyright information on Mahara, please see the README file distributed with this software.
 *
 */

defined('INTERNAL') || die();

$string['pluginname'] = 'コメント';
$string['Comment'] = 'コメント';
$string['Comments'] = 'コメント';
$string['comment'] = 'コメント';
$string['comments'] = 'コメント';
$string['addcomment'] = 'コメントを追加する';
$string['Allow'] = '許可';
$string['allowcomments'] = 'コメントを許可する';
$string['approvalrequired'] = 'コメントはモデレートされています。あなたがこのコメントをパブリックにした場合、オーナーにより承認されるまで他のユーザに表示されることはありません。';
$string['attachfile'] = '添付ファイル';
$string['Attachments'] = '添付ファイル';
$string['cantedithasreplies'] = 'あなたは最新コメントのみ編集することができます。';
$string['canteditnotauthor'] = 'あなたはこのコメントの投稿者ではありません。';
$string['cantedittooold'] = 'あなたは投稿後 %d 分以内のコメントのみ編集することができます。';
$string['commentmadepublic'] = 'コメントがパブリックにされました。';
$string['commentdeletedauthornotification'] = 'あなたの %s のコメントが削除されました:
%s';
$string['commentdeletednotificationsubject'] = '%s のコメントが削除されました。';
$string['commentnotinview'] = 'コメント %d はページ %d にありません。';
$string['commentremoved'] = 'コメントが削除されました。';
$string['commentremovedbyauthor'] = '投稿者によりコメントが削除されました。';
$string['commentremovedbyowner'] = 'オーナーによりコメントが削除されました。';
$string['commentremovedbyadmin'] = '管理者によりコメントが削除されました。';
$string['commentupdated'] = 'コメントが更新されました。';
$string['editcomment'] = 'コメントを編集する';
$string['editcommentdescription'] = 'あなたは新しい返信が追加されていない %d 分以内のコメントを更新することができます。この時間終了後、あなたはコメントを削除して新たなコメントを追加することはできます。';
$string['entriesimportedfromleapexport'] = 'Leap2Aエクスポートよりインポートされて他の場所にインポートできなかったエントリです。';
$string['feedback'] = 'フィードバック';
$string['feedbackattachdirname'] = 'コメントファイル';
$string['feedbackattachdirdesc'] = 'あなたのポートフォリオのコメントに添付されたファイル';
$string['feedbackattachmessage'] = 'あなたの %s フォルダに添付ファイルが追加されました。';
$string['commentonviewbyuser'] = '%s のコメント by %s';
$string['commentsubmitted'] = 'コメントが送信されました。';
$string['commentsubmittedmoderatedanon'] = 'コメントが送信されました、モデレーションを待っています。';
$string['commentsubmittedprivateanon'] = 'プライベートコメントが送信されました。';
$string['forcepubliccomment'] = 'パブリック';
$string['forceprivatecomment'] = 'プライベート: この返信はあなたおよび先行するコメントの投稿者にのみ表示されます。';
$string['lastcomment'] = '最新コメント';
$string['makepublic'] = 'パブリックにする';
$string['makepublicnotallowed'] = 'あなたはこのコメントをパブリックにすることはできません。';
$string['makepublicrequestsubject'] = 'リクエスト: プライベートコメントをパブリックに変更する';
$string['makepublicrequestbyauthormessage'] = 'あなたがコメントをパブリックにするよう %s がリクエストしました。';
$string['makepublicrequestbyownermessage'] = 'あなたがあなたのコメントをパブリックにするよう %s がリクエストしました。';
$string['makepublicrequestsent'] = 'コメントをパブリックにするリクエストメッセージが %s に送信されました。';
$string['messageempty'] = 'あなたのメッセージは空白です。メッセージまたは添付ファイルを入力してください。';
$string['Moderate'] = 'モデレート';
$string['moderatecomments'] = 'コメントをモデレートする';
$string['moderatecommentsdescription1'] = 'あなたに承認されるまでページのコメントはプライベートのままにされます。ファイルおよび日誌エントリ等の個々のコメントはモデレーションから除外されます。';
$string['newcommentnotificationsubject'] = '%s の新しいコメント';
$string['progress_feedback'] = '%s ユーザページにコメントする';
$string['rating'] = 'レーティング';
$string['reallydeletethiscomment'] = '本当にこのコメントを削除してもよろしいですか?';
$string['reply'] = '返信';
$string['replyto'] = '返信:';
$string['replytonoaccess'] = 'あなたはこのコメントに対する返信の投稿を許可されていません。';
$string['replytonoprivatereplyallowed'] = 'あなたはこのコメントに対するプライベート返信の投稿を許可されていません。';
$string['replytonopublicreplyallowed'] = 'あなたはこのコメントに対するパブリック返信の投稿を許可されていません。';
$string['thiscommentisprivate'] = 'このコメントは非公開です。';
$string['typefeedback'] = 'フィードバック';
$string['viewcomment'] = 'コメントを表示する';
$string['youhaverequestedpublic'] = 'あなたはこのコメントをパブリックにするようリクエストしました。';
$string['feedbacknotificationhtml'] = '<div style="padding: 0.5em 0; border-bottom: 1px solid #999;"><strong>%s が %s にコメントを投稿しました。</strong><br />%s</div>

<div style="margin: 1em 0;">%s</div>

<div style="font-size: smaller; border-top: 1px solid #999;">
<p><a href="%s">このコメントにオンラインで返信する</a></p>
</div>';
$string['feedbacknotificationtext'] = '%s が %s にコメントを投稿しました。
%s
------------------------------------------------------------------------

%s

------------------------------------------------------------------------
オンラインでコメントを閲覧および返信するには次のリンクをクリックしてください:
%s';
$string['feedbackdeletedhtml'] = '<div style="padding: 0.5em 0; border-bottom: 1px solid #999;"><strong>%s のコメントが削除されました。</strong><br />%s</div>

<div style="margin: 1em 0;">%s</div>

<div style="font-size: smaller; border-top: 1px solid #999;">
<p><a href="%s">%s</a></p>
</div>';
$string['feedbackdeletedtext'] = '%s のコメントが削除されました。
%s
------------------------------------------------------------------------

%s

------------------------------------------------------------------------
%s をオンラインで閲覧するには次のリンクをクリックしてください:
%s';
$string['artefactdefaultpermissions'] = 'デフォルトのコメントパーミッション';
$string['artefactdefaultpermissionsdescription'] = '選択されたアーティファクトでは作成時にコメントの投稿が有効にされます。ユーザはそれぞれのアーティファクトでこれらの設定をオーバーライドすることができます。';
$string['commentratings'] = 'コメントレーティングを有効にする';
$string['ratingicons'] = 'レーティングの表示に使用するアイコン';
$string['ratinglength'] = 'レーティング選択数';
$string['ratingcolour'] = '色';
$string['ratingcolourdesc'] = 'レーティングの選択に表示する色です。選択されたレーティングは単色のアイコンで表示されます。未選択のレーティングはアイコンの輪郭が単色で表示されます。';
$string['star'] = '星';
$string['heart'] = 'ハート';
$string['thumbsup'] = 'サムズアップ';
$string['ok'] = 'チェックマーク';
$string['ratingexample'] = '生成例';
$string['removerating'] = 'レーティングを削除する';
$string['ratingoption'] = 'レーティング %s / %s を設定する';

?>
