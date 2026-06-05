<?php
/**
 *
 * @package    mahara
 * @subpackage lang (Japanese)
 * @translator Mitsuhiro Yoshida (https://mitstek.com/)
 * @started    2008-01-19 11:25:00 UTC
 * @updated    2026-06-05 12:54:01 UTC
 * @license    https://www.gnu.org/licenses/gpl-3.0.html GNU GPL version 3 or later
 * @copyright  For copyright information on Mahara, please see the README file distributed with this software.
 *
 */

defined('INTERNAL') || die();

$string['admin'] = '管理者';
$string['all'] = 'すべて';
$string['analyzer'] = 'Elasticsearchアナライザ';
$string['analyzerdescription1'] = 'デフォルト: %s';
$string['artefacttypes'] = 'アーティファクトタイプ';
$string['artefacttypesdescription'] = 'あなたがインデックスに含めたいアーティファクトタイプをチェックしてください。階層定義されたアーティファクトタイプのみ有効です。あなたの変更を反映させるにはキュー内のアーティファクトをリセットしてください。';
$string['artefacttypesmap'] = 'アーティファクトタイプ階層';
$string['artefacttypesmapdescription'] = 'それぞれのアーティファクトタイプの階層を「|」で区切って入力してください (1行あたり1アーティファクト)。';
$string['atoz'] = 'A -> Z';
$string['blogpost'] = '日誌エントリ';
$string['bypassindexname'] = 'バイパスインデックス';
$string['clusterconfig'] = 'クラスタ設定';
$string['clusterstatus'] = 'クラスタステータス: %s';
$string['cligetfailedqueuesizemessage'] = 'Elasticsearch 7のキューに 1 時間以上前の失敗したレコードがあります。';
$string['cliisqueueolderthanmessage'] = 'Elasticsearch 7のキューに %s 時間以上前の失敗したレコードがあります。';
$string['clicheckingsearchsucceededmessage'] = 'Elasticsearch 7のキューには未処理または失敗したレコードはありません。';
$string['collection'] = 'コレクション';
$string['confignotset'] = '(未設定)';
$string['contains'] = '含む';
$string['connectionerror'] = '接続エラー';
$string['createdby1'] = '作成者: <a href="%s">%s</a>';
$string['cronlimit'] = 'cronレコード制限';
$string['cronstatetitle'] = 'cronでインデクス作成する';
$string['cronlocked'] = '現在、cronはキューのインデックスを作成しています。';
$string['cronlockedsowillnotreset'] = 'cronがキューのインデックスを作成している間、あなたはインデックスをリセットできません。';
$string['dateoldestfirst'] = '日付 (古い順)';
$string['daterecentfirst'] = '日付 (新しい順)';
$string['deleted'] = '削除済み';
$string['deletedforumpost'] = '削除済みフォーラム投稿';
$string['deletedgroup'] = '削除済みグループ';
$string['document'] = 'ドキュメント';
$string['error'] = 'エラー:';
$string['errortypenotset'] = 'タイプが設定されていません。';
$string['errorunknown'] = '不明なエラー';
$string['filterresultsby'] = '結果をフィルタする';
$string['Folder'] = 'フォルダ';
$string['forum'] = 'フォーラム';
$string['forumpost'] = 'フォーラム投稿';
$string['forumpostedbylabel'] = '投稿者:';
$string['forumpostedby'] = '%s - %s';
$string['forumtopic'] = 'フォーラムトピック';
$string['Group'] = 'グループ';
$string['host'] = 'ホスト';
$string['hostdescription1'] = 'デフォルト: %s';
$string['indexingrunning'] = 'インデックス化cronジョブが動作しています。数分後、再度お試しください。';
$string['indexingrunningtry'] = 'あなたが実際にcronが動作していないことを把握している場合、./mash search-reset-cron-lockをご覧ください。';
$string['indexname'] = 'インデックス名';
$string['indexnamedescription1'] = 'デフォルト: %s';
$string['indexstatusbad'] = 'インデックスステータス (%s): %s';
$string['indexstatusunknown'] = '現在のインデックス「 %s 」のステータスはHTTPレスポンス「 %s 」のため不明です。';
$string['license'] = 'ライセンス';
$string['Media'] = 'メディア';
$string['monitorfailedqueuesize'] = '1時間以上の失敗レコード数';
$string['monitorqueuehasolditems'] = '%s 時間以上処理されていないElasticsearch 7キューのアイテム';
$string['monitorunprocessedqueuesize'] = '未処理レコード合計数';
$string['monitorunprocessedqueuerate'] = 'cron制限に対する未処理レコードのパーセンテージ';
$string['monitorqueuestatus'] = 'Elasticsearch 7キューステータス';
$string['monitorsubnavtitle'] = 'Elasticsearch 7';
$string['none'] = 'なし';
$string['noticeenabled'] = '現在、Elasticsearch 7プラグインは有効です。無効にするには<a href="%s" class="elasticsearch-status">「検索設定」</a>で選択解除してください。';
$string['noticenotactive'] = 'Elasticsearch 7 サーバにホスト %s およびポート %s で到達できません。Elasticsearch 7 サーバが動作していることを確認してください。';
$string['noticenotenabled'] = '現在、Elasticsearch 7プラグインは有効にされていません。有効化するには<a href="%s">「検索設定」</a>で選択してください。';
$string['ownedbygroup1'] = '作成グループ: <a href="%s">%s</a>';
$string['owner'] = 'オーナ';
$string['page'] = 'ページ';
$string['pages'] = 'ページ';
$string['pagetitle'] = '検索';
$string['passwordlength'] = '(パスワード長: %s)';
$string['person'] = '人';
$string['pluginstatus'] = 'プラグインステータス: %s';
$string['pluginstatusmessageindex404'] = 'インデックスが作成されているはずですが、作成されていないようです。ページをリロードするか、あなたのElasticsearch 7サーバを確認してください。';
$string['pluginstatustitleaccess'] = 'サーバアクセス';
$string['pluginstatustitlecluster_health'] = 'クラスタヘルス';
$string['pluginstatustitlecron'] = 'cron';
$string['pluginstatustitleindexstatus'] = 'インデックスステータス';
$string['pluginstatustitleserver_health'] = 'サーバヘルス';
$string['pluginstatusignoresslerror'] = '<code>productionmode</code>が「true」の場合、<code>ignoressl</code>設定は無視されます。Elasticsearch 7の有効なSSL証明書を使用するか、<code>productionmode</code>を「false」に設定してください。';
$string['port'] = 'Elasticsearchポート';
$string['portdescription1'] = 'デフォルト: %s';
$string['Portfolio'] = 'ポートフォリオ';
$string['record'] = 'レコード';
$string['records'] = 'レコード';
$string['relevance'] = '関連性';
$string['replicashards'] = 'レプリカシャード';
$string['reset'] = 'リセット';
$string['resetallindexes1'] = '検索インデックスを削除および再作成する';
$string['resetdescription1'] = 'このテーブルでは現在Elasticsearchサーバに送信されるキューにあるそれぞれのタイプのレコード数およびすでにインデックスに登録されているレコード数を表示しています。あなたはIDで個別に再度キューに追加できます。または特定のタイプのインデックスにあるものすべてを再度キューへ追加もできます。アイテムは検索プラグインのcronタスクが実行されるたび (5分ごと) にElasticsearchサーバに送信されます。下部の「すべてのインデックスをリセットする」ボタンをクリックした場合、このページの設定変更が保存されて<strong>全体の</strong>検索インデックスがリセットされます。そして、すべてのレコードが削除されて再度キューに追加されます。大規模なインスタンスではかなりの時間を要する場合があります。個別のタイプを再度キューに追加してより的を絞ったリセットを試みてください。';
$string['resetlegend'] = 'インデックスリセット';
$string['resettype'] = 'タイプ';
$string['resetitemsinqueue'] = 'キュー内';
$string['resetitemsinindex'] = 'インデックス内';
$string['resume'] = 'レジュメ';
$string['scheme'] = 'スキーマ';
$string['schemedescription1'] = 'デフォルト: %s';
$string['searchpagetitle'] = '人およびコンテンツを検索する';
$string['servererror'] = 'サーバへの接続時にエラーが発生しました: %s';
$string['shards'] = 'シャード';
$string['sortby'] = '並べ替え';
$string['systemmessage'] = 'システムメッセージ:';
$string['tags'] = 'タグ';
$string['tagsonly'] = 'タグのみ';
$string['Text'] = 'テキスト';
$string['types'] = 'Elasticsearchタイプ';
$string['typesdescription1'] = 'デフォルト: %s';
$string['unassignedshards'] = '未割り当てシャード: %s';
$string['usedonpage'] = '使用ページ';
$string['usedonpages'] = '使用ページ';
$string['Users'] = '人';
$string['xsearchresults'] = '検索結果: %s';
$string['xsearchresultsfory'] = '検索結果: %s / 検索キーワード: %s';
$string['ztoa'] = 'Z -> A';
$string['requeue'] = '再度キューに追加する';
$string['requeueitem'] = 'IDを入力してください。';
$string['requeueinputfieldarialabel'] = '再度キューに追加するエントリのIDまたは複数ID (カンマ区切り) を入力してください。すべてを再度キューに追加するには空白のままにしてください。';
$string['requeuebuttonarialabel'] = '%s エントリすべてまたはこのタイプで選択したIDを再度キューに追加する';
$string['resetdescription'] = 'このテーブルではElasticsearchサーバに送信するため現在キューに入れられているそれぞれのタイプのレコード数を表示しています。アイテムは検索プラグインのcronタスクが実行されるたび (5分ごと) にElasticsearchサーバに送信されます。検索インデックスをリセット、すべてのレコードを削除、そしてレコードを再度キューに入れるには下のボタンをクリックしてください。';
$string['resetalltypes'] = 'インデックスをリセットする';
