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
 * @updated    2011-05-09 16:38:36 UTC
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL
 * @copyright  (C) 2006 onwards Catalyst IT Ltd http://catalyst.net.nz
 *
 */

defined('INTERNAL') || die();

$string['typemaharamessage'] = 'システムメッセージ';
$string['typeusermessage'] = '他のユーザからのメッセージ';
$string['typewatchlist'] = 'ウォッチリスト';
$string['typeviewaccess'] = '新しいページアクセス';
$string['typecontactus'] = 'お問い合わせ';
$string['typeobjectionable'] = '好ましくないコンテンツ';
$string['typevirusrepeat'] = 'ウイルスアップロードの繰り返し';
$string['typevirusrelease'] = 'ウイルスフラグリリース';
$string['typeadminmessages'] = '管理メッセージ';
$string['typeinstitutionmessage'] = 'インスティテューションメッセージ';
$string['typegroupmessage'] = 'グループメッセージ';
$string['type'] = '活動タイプ';
$string['attime'] = '-';
$string['prefsdescr'] = 'あなたがメールオプションのどちらを選択しても、活動ログに通知が記録されます。また、活動ログに記録された通知は自動的に既読にされます。';
$string['subject'] = '件名';
$string['date'] = '日時';
$string['read'] = '既読';
$string['unread'] = '未読';
$string['markasread'] = '既読にする';
$string['selectall'] = 'すべてを選択する';
$string['recurseall'] = '選択を解除する';
$string['alltypes'] = 'すべてのタイプ';
$string['markedasread'] = 'あなたの通知を既読にしました。';
$string['failedtomarkasread'] = 'あなたの通知を既読にできませんでした。';
$string['deletednotifications'] = '%s 件の通知が削除されました。';
$string['failedtodeletenotifications'] = 'あなたの通知の削除に失敗しました。';
$string['stopmonitoring'] = 'モニタリングを停止する';
$string['artefacts'] = 'アーティファクト';
$string['groups'] = 'グループ';
$string['monitored'] = 'モニター';
$string['stopmonitoringsuccess'] = 'モニタリングを正常に停止しました。';
$string['stopmonitoringfailed'] = 'モニタリングの停止に失敗しました。';
$string['newwatchlistmessage'] = 'あなたのウォッチリストの新しい活動';
$string['newwatchlistmessageview'] = '%s がページ「 %s 」を変更しました。';
$string['newviewsubject'] = '新しいページが作成されました。';
$string['newviewmessage'] = '%s が新しいページ「 %s 」を作成しました。';
$string['newcontactusfrom'] = '新しいお問い合わせ:';
$string['newcontactus'] = '新しいお問い合わせ';
$string['newviewaccessmessage'] = 'あなたはページ「 %s 」のアクセスリストに %s によって追加されました。';
$string['newviewaccessmessagenoowner'] = 'あなたはページ「 %s 」のアクセスリストに追加されました。';
$string['newviewaccesssubject'] = '新しいページアクセス';
$string['viewmodified'] = 'がページを変更しました。';
$string['ongroup'] = 'グループ:';
$string['ownedby'] = 'オーナー:';
$string['objectionablecontentview'] = '好ましくないコンテンツ - ページ: %s / 報告者: %s';
$string['objectionablecontentviewartefact'] = '好ましくないコンテンツ - ページ: %s (%s) / 報告者: %s';
$string['objectionablecontentviewhtml'] = '<div style="padding: 0.5em 0; border-bottom: 1px solid #999;">「 %s 」の好ましくないコンテンツ / 報告者: %s<strong></strong><br />%s</div>

<div style="margin: 1em 0;">%s</div>

<div style="font-size: smaller; border-top: 1px solid #999;">
<p>クレーム対象: <a href="%s">%s</a></p>
<p>報告者: <a href="%s">%s</a></p>
</div>';
$string['objectionablecontentviewtext'] = '「 %s 」の好ましくないコンテンツ / 報告者: %s
------------------------------------------------------------------------

%s

------------------------------------------------------------------------
ページを閲覧するには次のリンクをクリックしてください:
%s
報告者のプロファイルを閲覧するには次のリンクをクリックしてください:
%s';
$string['objectionablecontentviewartefacthtml'] = '<div style="padding: 0.5em 0; border-bottom: 1px solid #999;">「 %s 」の好ましくないコンテンツ / アーティファクト: %s / 報告者: %s<strong></strong><br />%s</div>

<div style="margin: 1em 0;">%s</div>

<div style="font-size: smaller; border-top: 1px solid #999;">
<p>クレーム対象: <a href="%s">%s</a></p>
<p>報告者: <a href="%s">%s</a></p>
</div>';
$string['objectionablecontentviewartefacttext'] = '「 %s 」の好ましくないコンテンツ / アーティファクト: %s / 報告者: %s
------------------------------------------------------------------------

%s

------------------------------------------------------------------------
ページを閲覧するには次のリンクをクリックしてください:
%s
報告者のプロファイルを閲覧するには次のリンクをクリックしてください:
%s';
$string['newgroupmembersubj'] = '%s がグループメンバーになりました!';
$string['removedgroupmembersubj'] = 'もう %s はグループメンバーではありません。';
$string['addtowatchlist'] = 'ウォッチリストに追加する';
$string['removefromwatchlist'] = 'ウォッチリストから削除する';
$string['missingparam'] = '次の活動タイプに関する必須パラメータ %s が空です: %s';
$string['institutionrequestsubject'] = '%s が %s のメンバーシップをリクエストしました。';
$string['institutionrequestmessage'] = 'あなたはインスティテューションメンバーページで、ユーザをインスティテューションに追加することができます:';
$string['institutioninvitesubject'] = 'あなたはインスティテューション %s への参加を招待されました。';
$string['institutioninvitemessage'] = 'あなたはインスティテューション設定ページで、このインスティテューションのメンバーシップを承認することができます:';
$string['deleteallnotifications'] = 'すべての通知を削除する';
$string['reallydeleteallnotifications'] = '本当にこの活動タイプに関して、あなたのすべての通知を削除してもよろしいですか?';
$string['viewsubmittedsubject'] = '%s に送信されたページ';
$string['viewsubmittedmessage'] = '%s がページ「 %s 」を %s に送信しました。';
$string['adminnotificationerror'] = 'ユーザ通知エラーは恐らくあなたのサーバ設定に起因します。';

?>
