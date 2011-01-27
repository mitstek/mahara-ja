<?php
/**
 * Mahara: Electronic portfolio, weblog, resume builder and social networking
 * Copyright (C) 2006 onwards Catalyst IT Ltd (http://www.catalyst.net.nz)
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @package    mahara
 * @subpackage lang (Japanese)
 * @translator Mitsuhiro Yoshida (http://mitstek.com/)
 * @started    2008-01-19 11:25:00 UTC
 * @updated    2011-01-27 05:33:40 UTC
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL
 * @copyright  (C) 2006 onwards Catalyst IT Ltd http://catalyst.net.nz
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
$string['approvalrequired'] = 'コメントはモデレートされています。あなたがこのコメントをパブリックにした場合、オーナーにより承認されるまで、他のユーザに表示されることはありません。';
$string['attachfile'] = '添付ファイル';
$string['Attachments'] = '添付ファイル';
$string['cantedithasreplies'] = 'あなたは最新のコメントのみ編集することができます。';
$string['canteditnotauthor'] = 'あなたはこのコメントの投稿者ではありません。';
$string['cantedittooold'] = 'あなたは投稿後 %d 分以内のコメントのみ編集することができます。';
$string['commentmadepublic'] = 'コメントがパブリックにされました。';
$string['commentdeletedauthornotification'] = 'あなたの %s のコメントが削除されました:';
$string['commentdeletednotificationsubject'] = '%s のコメントが削除されました。';
$string['commentnotinview'] = 'コメント %d はページ %d にありません。';
$string['commentratings'] = 'コメントレーティングを有効にする';
$string['commentremoved'] = 'コメントが削除されました。';
$string['commentremovedbyauthor'] = '投稿者によりコメントが削除されました。';
$string['commentremovedbyowner'] = 'オーナーによりコメントが削除されました。';
$string['commentremovedbyadmin'] = '管理者によりコメントが削除されました。';
$string['commentupdated'] = 'コメントが更新されました。';
$string['editcomment'] = 'コメントを編集する';
$string['editcommentdescription'] = 'あなたは新しい返信が追加されていない %d 分以内のコメントを更新することができます。この時間終了後、あなたはコメントを削除して、新たなコメントを追加することはできます。';
$string['entriesimportedfromleapexport'] = 'LEAPエクスポートよりインポートされた、他の場所にインポートできなかったエントリです。';
$string['feedback'] = 'フィードバック';
$string['feedbackattachdirname'] = 'コメントファイル';
$string['feedbackattachdirdesc'] = 'あなたのポートフォリオのコメントに添付されたファイル';
$string['feedbackattachmessage'] = 'あなたの %s フォルダに添付ファイルが追加されました。';
$string['feedbackonviewbyuser'] = '%s のフィードバック by %s';
$string['feedbacksubmitted'] = 'フィードバックが送信されました。';
$string['lastcomment'] = '最新のコメント';
$string['makepublic'] = 'パブリックにする';
$string['makepublicnotallowed'] = 'あなたはこのコメントをパブリックにすることはできません。';
$string['makepublicrequestsubject'] = 'リクエスト: プライベートコメントをパブリックに変更する';
$string['makepublicrequestbyauthormessage'] = 'あなたがコメントをパブリックにするよう、%s がリクエストしました。';
$string['makepublicrequestbyownermessage'] = 'あなたがあなたのコメントをパブリックにするよう、%s がリクエストしました。';
$string['makepublicrequestsent'] = 'コメントをパブリックにするリクエストメッセージが %s に送信されました。';
$string['messageempty'] = 'あなたのメッセージは空白です。メッセージまたは添付ファイルを入力してください。';
$string['Moderate'] = 'モデレート';
$string['moderatecomments'] = 'コメントをモデレートする';
$string['moderatecommentsdescription'] = 'あなたに承認されるまで、コメントはプライベートのままにされます。';
$string['newfeedbacknotificationsubject'] = '%s の新しいフィードバック';
$string['placefeedback'] = 'フィードバックを投稿する';
$string['rating'] = 'レーティング';
$string['reallydeletethiscomment'] = '本当にこのコメントを削除してもよろしいですか?';
$string['thiscommentisprivate'] = 'このコメントはプライベート (非公開) です。';
$string['typefeedback'] = 'フィードバック';
$string['viewcomment'] = 'コメントを表示する';
$string['youhaverequestedpublic'] = 'あなたはこのコメントをパブリックにするよう、リクエストしました。';
$string['feedbacknotificationhtml'] = '<div style="padding: 0.5em 0; border-bottom: 1px solid #999;"><strong>%s が %s にコメントを投稿しました。</strong><br />%s</div>

<div style="margin: 1em 0;">%s</div>

<div style="font-size: smaller; border-top: 1px solid #999;">
<p><a href="%s">このコメントにオンライン上で返信する</a></p>
</div>';
$string['feedbacknotificationtext'] = '%s が %s にコメントを投稿しました。
%s
------------------------------------------------------------------------

%s

------------------------------------------------------------------------
オンライン上でコメントを閲覧および返信するには、次のリンクをクリックしてください:
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
%s をオンライン上で閲覧するには、次のリンクをクリックしてください:
%s';
$string['artefactdefaultpermissions'] = 'デフォルトのコメントパーミッション';
$string['artefactdefaultpermissionsdescription'] = '選択されたアーティファクトでは、作成時にコメントの投稿が有効にされます。ユーザはそれぞれのアーティファクトにて、これらの設定をオーバーライドすることができます。';

?>
