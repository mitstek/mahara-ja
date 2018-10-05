<?php
/**
 *
 * @package    mahara
 * @subpackage lang (Japanese)
 * @translator Mitsuhiro Yoshida (http://mitstek.com/)
 * @started    2008-01-19 11:25:00 UTC
 * @updated    2015-01-13 16:30:40 UTC
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL version 3 or later
 * @copyright  For copyright information on Mahara, please see the README file distributed with this software.
 *
 */

defined('INTERNAL') || die();

$string['typemaharamessage'] = 'システムメッセージ';
$string['typeusermessage'] = '他のユーザからのメッセージ';
$string['typefeedback'] = 'フィードバック';
$string['typewatchlist'] = 'ウォッチリスト';
$string['typeviewaccess'] = '新しいページアクセス';
$string['typecontactus'] = 'お問い合わせ';
$string['typeobjectionable'] = '好ましくないコンテンツ';
$string['typevirusrepeat'] = 'ウイルスアップロードの繰り返し';
$string['typevirusrelease'] = 'ウイルスフラグ解除';
$string['typeadminmessages'] = '管理メッセージ';
$string['typeinstitutionmessage'] = 'インスティテューションメッセージ';
$string['typegroupmessage'] = 'グループメッセージ';
$string['typenewpost'] = 'フォーラム投稿';
$string['type'] = '活動タイプ';
$string['attime'] = '-';
$string['prefsdescr'] = 'あなたがメールオプションのどちらを選択した場合でも受信箱に通知が到着します。しかし、受信箱に到着した通知は自動的に既読にされます。';
$string['messagetype'] = 'メッセージタイプ';
$string['subject'] = '件名';
$string['date'] = '日時';
$string['read'] = '既読';
$string['unread'] = '未読';
$string['markasread'] = '既読にする';
$string['selectall'] = 'すべてを選択する';
$string['selectallread'] = 'すべての未読通知';
$string['selectalldelete'] = 'すべての削除通知';
$string['recurseall'] = '選択を解除する';
$string['alltypes'] = 'すべてのタイプ';
$string['nodelete'] = '削除する通知はありません。';
$string['markedasread'] = 'あなたの通知を既読にしました。';
$string['failedtomarkasread'] = 'あなたの通知を既読にできませんでした。';
$string['deletednotifications1'] = '%s 件の通知が削除されました。';
$string['failedtodeletenotifications'] = 'あなたの通知の削除に失敗しました。';
$string['stopmonitoring'] = 'モニタリングを停止する';
$string['artefacts'] = 'アーティファクト';
$string['groups'] = 'グループ';
$string['monitored'] = 'モニタ';
$string['stopmonitoringsuccess'] = 'モニタリングを正常に停止しました。';
$string['stopmonitoringfailed'] = 'モニタリングの停止に失敗しました。';
$string['newwatchlistmessage'] = 'あなたのウォッチリストの新しい活動';
$string['newwatchlistmessageview1'] = 'ページ「 %s 」 (作成者: %s) が変更されました。';
$string['blockinstancenotification'] = 'ブロック「 %s 」が追加または変更されました。';
$string['nonamegiven'] = '名称がありません。';
$string['newviewsubject'] = '新しいページが作成されました。';
$string['newviewmessage'] = '%s が新しいページ「 %s 」を作成しました。';
$string['newcontactusfrom'] = '新しいお問い合わせ:';
$string['newcontactus'] = '新しいお問い合わせ';
$string['newcollectionaccessmessage'] = 'あなたはコレクション「 %s 」のアクセスリストに %s によって追加されました。';
$string['newcollectionaccessmessageviews'] = 'あなたはページ「 %s 」 (コレクション「 %3$s 」) のアクセスリストに %2$s によって追加されました。';
$string['newviewaccessmessage'] = 'あなたはページ「 %s 」のアクセスリストに %s によって追加されました。';
$string['newviewaccessmessageviews'] = 'あなたはページ「 %s 」のアクセスリストに %s によって追加されました。';
$string['newcollectionaccessmessagenoowner'] = 'あなたはコレクション「 %s 」のアクセスリストに追加されました。';
$string['newcollectionaccessmessagenoownerviews'] = 'あなたはページ「 %s 」 (コレクション「 %s 」) のアクセスリストに追加されました。';
$string['newviewaccessmessagenoowner'] = 'あなたはページ「 %s 」のアクセスリストに追加されました。';
$string['newviewaccessmessagenoownerviews'] = 'あなたはページ「 %s 」のアクセスリストに追加されました。';
$string['newcollectionaccesssubject'] = 'コレクション「 %s 」への新しいアクセス';
$string['newviewaccesssubject1'] = 'ページ「 %s 」への新しいアクセス';
$string['newviewaccesssubjectviews'] = 'ページ「 %s 」への新しいアクセス';
$string['viewmodified'] = 'がページを変更しました。';
$string['ongroup'] = 'グループ:';
$string['ownedby'] = 'オーナー:';
$string['objectionablecontentview'] = 'ページ「 %s 」の好ましくないコンテンツ - 報告者: %s';
$string['objectionablecontentviewartefact'] = 'ページ「 %s (%s) 」の好ましくないコンテンツ - 報告者: %s';
$string['objectionablecontentviewhtml'] = '<div style="padding: 0.5em 0; border-bottom: 1px solid #999;">「 %s 」の好ましくないコンテンツ - 報告者: %s<strong></strong><br />%s</div>

<div style="margin: 1em 0;">%s</div>

<div style="font-size: smaller; border-top: 1px solid #999;">
<p>クレーム対象: <a href="%s">%s</a></p>
<p>報告者: <a href="%s">%s</a></p>
</div>';
$string['objectionablecontentviewtext'] = '「 %s 」の好ましくないコンテンツ - 報告者: %s
------------------------------------------------------------------------

%s

------------------------------------------------------------------------
ページを閲覧するには次のリンクにアクセスしてください:
%s
報告者のプロファイルを閲覧するには次のリンクにアクセスしてください:
%s';
$string['objectionablecontentviewartefacthtml'] = '<div style="padding: 0.5em 0; border-bottom: 1px solid #999;">「  %s (%s)  」の好ましくないコンテンツ - 報告者: %s<strong></strong><br />%s</div>

<div style="margin: 1em 0;">%s</div>

<div style="font-size: smaller; border-top: 1px solid #999;">
<p>クレーム対象: <a href="%s">%s</a></p>
<p>報告者: <a href="%s">%s</a></p>
</div>';
$string['objectionablecontentviewartefacttext'] = '「  %s (%s)  」の好ましくないコンテンツ - 報告者: %s
------------------------------------------------------------------------

%s

------------------------------------------------------------------------
ページを閲覧するには次のリンクにアクセスしてください:
%s
報告者のプロファイルを閲覧するには次のリンクにアクセスしてください:
%s';
$string['newgroupmembersubj'] = '%s がグループメンバーになりました。';
$string['removedgroupmembersubj'] = '%s はグループメンバーではなくなりました。';
$string['addtowatchlist'] = 'ウォッチリストに追加する';
$string['removefromwatchlist'] = 'ウォッチリストから削除する';
$string['missingparam'] = '次の活動タイプに関する必須パラメータ %s が空です: %s';
$string['institutionrequestsubject'] = '%s が %s のメンバーシップをリクエストしました。';
$string['institutionrequestmessage'] = 'あなたは「インスティテューションメンバー」ページでユーザをインスティテューションに追加することができます:';
$string['institutioninvitesubject'] = 'あなたはインスティテューション %s への参加を招待されました。';
$string['institutioninvitemessage'] = 'あなたは「インスティテューション設定」ページでこのインスティテューションのメンバーシップを承認することができます:';
$string['deleteallnotifications'] = 'すべての通知を削除する';
$string['reallydeleteallnotifications'] = '本当にこの活動タイプに関してあなたの通知すべてを削除してもよろしいですか?';
$string['viewsubmittedsubject1'] = '%s への送信';
$string['viewsubmittedmessage1'] = '%s が「 %s 」を %s に送信しました。';
$string['adminnotificationerror'] = 'ユーザ通知エラーは恐らくあなたのサーバ設定に起因します。';

?>
