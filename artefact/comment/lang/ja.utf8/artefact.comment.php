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
 * @updated    2016-08-17 15:19:19 UTC
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
$string['approvalrequired'] = 'コメントはモデレートされています。あなたがこのコメントをパブリックにした場合、オーナーにより承認されるまで他のユーザに表示されることはありません。';
$string['attachfile'] = '添付ファイル';
$string['Attachments'] = '添付ファイル';
$string['cantedithasreplies'] = 'あなたは最新コメントのみ編集することができます。';
$string['canteditnotauthor'] = 'あなたはこのコメントの投稿者ではありません。';
$string['cantedittooold'] = 'あなたは投稿後 %d 分未満のコメントのみ編集することができます。';
$string['commentmadepublic'] = 'コメントがパブリックにされました。';
$string['commentdeletedauthornotification'] = 'あなたの %s のコメントが削除されました:
%s';
$string['commentdeletednotificationsubject'] = '%s のコメントが削除されました。';
$string['commentnotinview'] = 'コメント %d はビュー %d にありません。';
$string['commentremoved'] = 'コメントが削除されました。';
$string['commentremovedbyauthor'] = '投稿者によりコメントが削除されました。';
$string['commentremovedbyowner'] = 'オーナーによりコメントが削除されました。';
$string['commentremovedbyadmin'] = '管理者によりコメントが削除されました。';
$string['commentupdated'] = 'コメントが更新されました。';
$string['editcomment'] = 'コメントを編集する';
$string['editcommentdescription'] = 'あなたは新しい返信が追加されていない %d 分未満のコメントを更新することができます。この時間経過後、あなたはコメントを削除して新たなコメントを追加することはできます。';
$string['entriesimportedfromleapexport'] = 'Leap2Aエクスポートよりインポートされて他の場所にインポートできなかったエントリです。';
$string['feedback'] = 'フィードバック';
$string['feedbackattachdirname'] = 'コメントファイル';
$string['feedbackattachdirdesc'] = 'あなたのポートフォリオのコメントに添付されたファイル';
$string['feedbackattachmessage'] = 'あなたの %s フォルダに添付ファイルが追加されました。';
$string['feedbackonviewbyuser'] = '%s のフィードバック by %s';
$string['feedbacksubmitted'] = 'フィードバックが送信されました。';
$string['makepublic'] = 'パブリックにする';
$string['makepublicnotallowed'] = 'あなたはこのコメントをパブリックにすることはできません。';
$string['makepublicrequestsubject'] = 'プライベートコメントのパブリックへの変更リクエスト';
$string['makepublicrequestbyauthormessage'] = 'あなたがコメントをパブリックにするよう %s がリクエストしました。';
$string['makepublicrequestbyownermessage'] = 'あなたのコメントをパブリックにするよう %s がリクエストしました。';
$string['makepublicrequestsent'] = 'コメントをパブリックにするリクエストメッセージが %s に送信されました。';
$string['messageempty'] = 'メッセージが空白です。あなたがファイルを添付した場合のみ、空白メッセージは許可されます。';
$string['Moderate'] = 'モデレート';
$string['moderatecomments'] = 'コメントをモデレートする';
$string['moderatecommentsdescription'] = 'あなたに承認されるまでコメントはプライベートのままにされます。';
$string['newfeedbacknotificationsubject'] = '%s の新しいフィードバック';
$string['placefeedback'] = 'フィードバックを投稿する';
$string['reallydeletethiscomment'] = '本当にこのコメントを削除してもよろしいですか?';
$string['thiscommentisprivate'] = 'このコメントは非公開です。';
$string['typefeedback'] = 'フィードバック';
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

?>
