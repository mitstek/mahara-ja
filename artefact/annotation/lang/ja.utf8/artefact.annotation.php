<?php
/**
 *
 * @package    mahara
 * @subpackage lang (Japanese)
 * @translator Mitsuhiro Yoshida (https://mitstek.com/)
 * @started    2008-01-19 11:25:00 UTC
 * @updated    2017-09-08 07:13:50 UTC
 * @license    https://www.gnu.org/licenses/gpl-3.0.html GNU GPL version 3 or later
 * @copyright  For copyright information on Mahara, please see the README file distributed with this software.
 *
 */

defined('INTERNAL') || die();

$string['pluginname'] = 'アノテーション';
$string['Annotation'] = 'アノテーション';
$string['Annotations'] = 'アノテーション';
$string['annotation'] = 'アノテーション';
$string['annotations'] = 'アノテーション';
$string['Annotationfeedback'] = 'フィードバック';
$string['annotationfeedback'] = 'フィードバック';
$string['typeannotationfeedback'] = 'アノテーションのフィードバック';
$string['allowannotationfeedback'] = 'フィードバックを許可する';
$string['approvalrequired'] = 'フィードバックはモデレートされます。あなたがこのフィードバックの公開を選択した場合、オーナから承認されるまで他の人は閲覧できません。';
$string['canteditnotauthor'] = 'あなたはこのフィードバックの作成者ではありません。';
$string['annotationfeedbacknotinview'] = 'フィードバック「 %d 」はページ「 %d 」にありません。';
$string['cantedittooold'] = 'あなたは %d 分未満のフィードバックのみ編集できます。';
$string['cantedithasreplies'] = 'あなたは最も最近のフィードバックのみ編集できます。';
$string['annotationfeedbackmadepublic'] = 'フィードバックがパブリックにされました。';
$string['annotationfeedbackdeletedauthornotification'] = 'あなたの %s のフィードバックが削除されました: %s';
$string['annotationfeedbackdeletednotificationsubject'] = '%s のフィードバックが削除されました。';
$string['annotationfeedbackremoved'] = 'フィードバックが削除されました。';
$string['editannotationfeedbackdescription'] = 'あなたは新しい返信が投稿されていない %d 分未満のフィードバックを更新できます。この時間経過後、あなたのフィードバックの削除および新しいフィードバックの追加はできます。';
$string['annotationfeedbackupdated'] = 'フィードバックが更新されました。';
$string['commentremovedbyauthor'] = '投稿者により削除されたフィードバック';
$string['commentremovedbyowner'] = 'オーナにより削除されたフィードバック';
$string['commentremovedbyadmin'] = '管理者により削除されたフィードバック';
$string['editannotationfeedback'] = 'フィードバックを編集する';
$string['placeannotation'] = 'アノテーションを追加する';
$string['placeannotationfeedback'] = 'フィードバックを投稿する';
$string['annotationfeedbacksubmitted'] = 'フィードバックが送信されました。';
$string['annotationfeedbacksubmittedmoderatedanon'] = 'フィードバックが送信されました。モデレーションを待っています。';
$string['annotationfeedbacksubmittedprivateanon'] = 'プライベートフィードバックが送信されました。';
$string['makepublic'] = 'パブリックにする';
$string['makepublicnotallowed'] = 'あなたはこのフィードバックをパブリックにできません。';
$string['makepublicrequestsubject'] = 'プライベートフィードバックをパブリックに変更するリクエスト';
$string['makepublicrequestbyownermessage'] = '%s があなたのフィードバックをパブリックにするようリクエストしました。';
$string['makepublicrequestsent'] = 'フィードバックをパブリックにするリクエストのメッセージが %s に送信されました。';
$string['makepublicrequestbyauthormessage'] = '%s が自分のフィードバックをパブリックにするようリクエストしました。';
$string['annotationempty'] = 'このフィールドは必須です。';
$string['annotationfeedbackempty'] = 'あなたのフィードバックは空白です。メッセージを入力してください。';
$string['newannotationfeedbacknotificationsubject'] = '%s の新しいフィードバック';
$string['reallydeletethisannotationfeedback'] = '本当にこのフィードバックを削除してもよろしいですか?';
$string['annotationfeedbackisprivate'] = 'このフィードバックはプライベートです。';
$string['youhaverequestedpublic'] = 'あなたはこのフィードバックをパブリックにするようリクエストしました。';
$string['annotationfeedbacknotificationhtml'] = '<div style="padding: 0.5em 0; border-bottom: 1px solid #999;"><strong>%s がアノテーション %s にフィードバックを投稿しました。</strong><br>%s</div>

<div style="margin: 1em 0;">%s</div>

<div style="font-size: smaller; border-top: 1px solid #999;">
<p><a href="%s">このフィードバックにオンラインで返信する</a></p>
</div>';
$string['annotationfeedbacknotificationtext'] = '%s がアノテーション %s にフィードバックを投稿しました。
%s
------------------------------------------------------------------------

%s

------------------------------------------------------------------------
フィードバックをオンラインで閲覧および返信するには次のリンクにアクセスしてください:
%s';
$string['annotationfeedbackdeletedhtml'] = '<div style="padding: 0.5em 0; border-bottom: 1px solid #999;"><strong>アノテーション %s のフィードバックが削除されました。</strong><br>%s</div>

<div style="margin: 1em 0;">%s</div>

<div style="font-size: smaller; border-top: 1px solid #999;">
<p><a href="%s">%s</a></p>
</div>';
$string['annotationfeedbackdeletedtext'] = 'アノテーション %s のフィードバックが削除されました。
%s
------------------------------------------------------------------------

%s

------------------------------------------------------------------------
%s をオンラインで確認するには次のリンクにアクセスしてください:
%s';
$string['artefactdefaultpermissions'] = 'デフォルトアノテーションパーミッション';
$string['artefactdefaultpermissionsdescription'] = '選択されたアーティファクトタイプでは作成時にフィードバックが有効にされます。ユーザは個々のアーティファクトでこれらの設定をオーバーライドできます。';
$string['annotationinformationerror'] = '私たちにはアノテーションを表示するための正しい情報がありません。';
$string['invalidannotationfeedbacklinkerror'] = 'フィードバックはアーティファクトまたはページのいずれかにリンクされる必要があります。';
$string['entriesimportedfromleapexport'] = '他の場所でインポートできなかったLeap2Aエクスポートからインポートされたエントリです。';
$string['unknownstrategyforimport'] = 'エントリのインポートに不明な方法が選択されました。';
$string['invalidcreateannotationfeedback'] = '自分のためのフィードバックは作成できません。';
$string['nannotationfeedback'] = '%s フィードバック';
$string['progress_annotation'] = 'ページに %s アノテーションを追加する';
$string['progress_annotationfeedback'] = '他のユーザのアノテーションに %s フィードバックを投稿する';
$string['duplicatedannotation'] = '重複アノテーション';
$string['existingannotation'] = '既存のフィードバック';
$string['duplicatedannotationfeedback'] = '重複アノテーション';
$string['existingannotationfeedback'] = '既存のフィードバック';
$string['private'] = 'プライベート';
$string['public'] = 'パブリック';
$string['enteredon'] = '投稿日時';
$string['noreflectionentryfound'] = 'アノテーションの内省エントリが見つかりません。';
$string['nofeedback'] = 'このアノテーションにまだフィードバックはありません。';
$string['assessmentchangedto'] = '評価: %s';

?>
