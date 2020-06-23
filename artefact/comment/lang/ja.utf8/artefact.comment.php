<?php
/**
 *
 * @package    mahara
 * @subpackage lang (Japanese)
 * @translator Mitsuhiro Yoshida (https://mitstek.com/)
 * @started    2008-01-19 11:25:00 UTC
 * @updated    2016-08-17 15:18:48 UTC
 * @license    https://www.gnu.org/copyleft/gpl.html GNU GPL version 3 or later
 * @copyright  For copyright information on Mahara, please see the README file distributed with this software.
 *
 */

defined('INTERNAL') || die();

$string['pluginname'] = 'コメント';
$string['Comment'] = 'コメント';
$string['Comments'] = 'コメント';
$string['comment'] = 'コメント';
$string['comments'] = 'コメント';
$string['Allow'] = '許可';
$string['allowcomments'] = 'コメントを許可する';
$string['approvalrequired'] = 'コメントはモデレートされます。あなたがこのコメントをパブリックにした場合、オーナーに承認されるまで他の人に表示されることはありません。';
$string['attachfile'] = '添付ファイル';
$string['Attachments'] = '添付ファイル';
$string['cantedithasreplies'] = 'あなたは最新コメントのみ編集できます。';
$string['canteditnotauthor'] = 'あなたはこのコメントの投稿者ではありません。';
$string['cantedittooold'] = 'あなたは投稿後 %d 分未満のコメントのみ編集できます。';
$string['commentmadepublic'] = 'コメントがパブリックにされました。';
$string['commentdeletedauthornotification'] = 'あなたの %s のコメントが削除されました:
%s';
$string['commentdeletednotificationsubject'] = '%s のコメントが削除されました。';
$string['commentnotinview'] = 'コメント %d はページ %d にありません。';
$string['commentratings'] = 'コメントレーティングを有効にする';
$string['commentremoved'] = 'コメントが削除されました。';
$string['commentremovedbyauthor'] = '投稿者によりコメントが削除されました。';
$string['commentremovedbyowner'] = 'オーナーによりコメントが削除されました。';
$string['commentremovedbyadmin'] = '管理者によりコメントが削除されました。';
$string['commentupdated'] = 'コメントが更新されました。';
$string['editcomment'] = 'コメントを編集する';
$string['editcommentdescription'] = 'あなたは新しい返信が追加されていない %d 分未満のコメントを更新できます。この時間経過後、あなたはコメントを削除して新たなコメントを追加することはできます。';
$string['entriesimportedfromleapexport'] = '他の場所でインポートできなかったLeap2Aエクスポートよりインポートされたエントリです。';
$string['feedback'] = 'フィードバック';
$string['feedbackattachdirname'] = 'コメントファイル';
$string['feedbackattachdirdesc'] = 'あなたのポートフォリオのコメントに添付されたファイル';
$string['feedbackattachmessage'] = 'あなたの %s フォルダに添付ファイルが追加されました。';
$string['feedbackonviewbyuser'] = '%s のフィードバック by %s';
$string['feedbacksubmitted'] = 'フィードバックが送信されました。';
$string['feedbacksubmittedmoderatedanon'] = 'フィードバックが送信されました。モデレーションを待っています。';
$string['feedbacksubmittedprivateanon'] = 'プライベートフィードバックが送信されました。';
$string['lastcomment'] = '最新コメント';
$string['makepublic'] = 'パブリックにする';
$string['makepublicnotallowed'] = 'あなたはこのコメントをパブリックにできません。';
$string['makepublicrequestsubject'] = 'プライベートコメントのパブリックへの変更リクエスト';
$string['makepublicrequestbyauthormessage'] = 'あなたがコメントをパブリックにするよう %s がリクエストしました。';
$string['makepublicrequestbyownermessage'] = 'あなたのコメントをパブリックにするよう %s がリクエストしました。';
$string['makepublicrequestsent'] = 'コメントをパブリックにするリクエストメッセージが %s に送信されました。';
$string['messageempty'] = 'あなたのメッセージは空白です。メッセージを入力するかファイルを添付してください。';
$string['Moderate'] = 'モデレート';
$string['moderatecomments'] = 'コメントをモデレートする';
$string['moderatecommentsdescription'] = 'あなたに承認されるまでコメントはプライベートのままにされます。';
$string['newfeedbacknotificationsubject'] = '%s の新しいフィードバック';
$string['placefeedback'] = 'フィードバックを投稿する';
$string['progress_feedback'] = '%s ユーザページにコメントする';
$string['rating'] = 'レーティング';
$string['reallydeletethiscomment'] = '本当にこのコメントを削除してもよろしいですか?';
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
オンラインでコメントを閲覧および返信するには次のリンクにアクセスしてください:
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
%s をオンラインで閲覧するには次のリンクにアクセスしてください:
%s';
$string['artefactdefaultpermissions'] = 'デフォルトのコメントパーミッション';
$string['artefactdefaultpermissionsdescription'] = '選択されたアーティファクトでは作成時にコメントの投稿が有効にされます。ユーザは個別のアーティファクトでこれらの設定をオーバーライドできます。';

?>
