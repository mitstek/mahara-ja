<?php
/**
 *
 * @package    mahara
 * @subpackage lang (Japanese)
 * @translator Mitsuhiro Yoshida (https://mitstek.com/)
 * @started    2008-01-19 11:25:00 UTC
 * @updated    2026-10-08 02:49:26 UTC
 * @license    https://www.gnu.org/licenses/gpl-3.0.html GNU GPL version 3 or later
 * @copyright  For copyright information on Mahara, please see the README file distributed with this software.
 *
 */

defined('INTERNAL') || die();

$string['editgroup.open_help'] = '<h1>オープン</h1><p>人はグループ管理者の承認なしにグループに参加できます。</p>';
$string['editgroup.controlled_help'] = '<h1>コントール</h1><p>グループ管理者は本人の同意なしにグループに人を追加できます。メンバはグループを脱退できません。</p>';
$string['editgroup.request_help'] = '<h1>リクエスト</h1><p>人はメンバシップリクエストをグループ管理者へ送信できます。</p>';
$string['editgroup.invitefriends_help'] = '<h1>フレンド招待</h1><p>グループメンバがフレンドをこのグループに招待できるようにします。この設定にかかわらず、グループ管理者はいつでも誰にでも招待状を送信できます。</p>';
$string['editgroup.suggestfriends_help'] = '<h1>レコメンデーション</h1><p>グループメンバがグループホームページのボタンからこのグループへの参加のレコメンデーションをフレンドに送信できるようにします。</p>';
$string['editgroup.editroles_help'] = '<h1>コンテンツ作成および編集</h1>
<p>グループが所有するポートフォリオ、日誌、ファイルおよびプランを作成および編集できるユーザを選択してください。課題プランの場合、グループコンテンツの作成および編集を「一般メンバを除くすべての人」または「グループ管理者」に制限します。個々のファイルに対するパーミッションはグループファイルエリアで変更できます。</p>
<p>メンバおよび管理者のみのグループでは「グループ管理者」および「一般メンバ以外のすべての人」は同じです。</p>';
$string['editgroup.submittableto_help'] = '<h1>提出</h1><p>この設定を有効にした場合、メンバはグループにポートフォリオを提出できます。提出後、ポートフォリオはロックされます。これらのポートフォリオはグループチュータまたは管理者がリリースするまで編集できません。</p>';
$string['editgroup.allowarchives_help'] = '<h1>提出をアーカイブする</h1><p>この設定を有効にした場合、提出物のリリース処理中にポートフォリオがZIPファイルとしてアーカイブされます。</p><hr>
<h2>詳細</h2>
<p>このオプションは「提出」が選択された上でサイトでZIPファイルの作成が許可されている場合にのみ利用できます。</p>
<p>一般的にポートフォリオをエクスポートできる場合、サイトはアーカイブを作成できます。そうでない場合、あなたのサイト管理者に連絡してサーバにPHP ZIP拡張機能のインストールを依頼してください。</p>';
$string['editgroup.grouparchivereports_help'] = '<h1>提出アーカイブにアクセスする</h1><p>この設定を有効にした場合、グループ管理者はアーカイブされたサブミッションにアクセスおよびダウンロードできます。</p>';
