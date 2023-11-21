<?php
/**
 *
 * @package    mahara
 * @subpackage lang (Japanese)
 * @translator Mitsuhiro Yoshida (https://mitstek.com/)
 * @started    2008-01-19 11:25:00 UTC
 * @updated    2022-10-11 23:40:12 UTC
 * @license    https://www.gnu.org/licenses/gpl-3.0.html GNU GPL version 3 or later
 * @copyright  For copyright information on Mahara, please see the README file distributed with this software.
 *
 */

defined('INTERNAL') || die();

$string['admin'] = '管理者';
$string['all'] = 'すべて';
$string['analyzer'] = 'Elasticsearchアナライザ';
$string['analyzerdescription'] = '使用するElasticsearchアナライザクラスです。デフォルトは次のとおりです: %s';
$string['artefacttypes'] = 'アーティファクトタイプ';
$string['artefacttypesdescription'] = 'あなたがインデックスに含めたいアーティファクトタイプをチェックしてください。階層定義されたアーティファクトタイプのみ有効です。あなたの変更を反映させるにはキュー内のアーティファクトをリセットしてください。';
$string['artefacttypesmap'] = 'アーティファクトタイプ階層';
$string['artefacttypesmapdescription'] = 'それぞれのアーティファクトタイプの階層を「|」で区切って入力してください (1行あたり1アーティファクト)。';
$string['atoz'] = 'A -> Z';
$string['blogpost'] = '日誌エントリ';
$string['bypassindexname'] = 'バイパスインデックス';
$string['bypassindexnamedescription'] = '設定された場合、Maharaはメインインデックス名の代わりにこのインデックス名にインデックスデータを読み込みます (任意)。';
$string['clusterconfig'] = 'クラスタ設定';
$string['clusterstatus'] = 'クラスタステータス: %s';
$string['cligetfailedqueuesizemessage'] = 'Elasticsearch 7のキューに 1 時間以上前の失敗したレコードがあります。';
$string['cliisqueueolderthanmessage'] = 'Elasticsearch 7のキューに %s 時間以上前の未処理レコードがあります。';
$string['clicheckingsearchsucceededmessage'] = 'Elasticsearch 7のキューには未処理または失敗したレコードはありません。';
$string['collection'] = 'コレクション';
$string['confignotset'] = '(未設定)';
$string['contains'] = '含む';
$string['connectionerror'] = '接続エラー';
$string['createdby'] = '作成者: %s';
$string['cronlimit'] = 'cronレコード制限';
$string['cronlimitdescription'] = 'それぞれのcron実行に関してキューからElasticsearchサーバに渡される最大レコード数です (無制限の場合、空白またはゼロにしてください)。';
$string['cronstatetitle'] = 'cronでインデクス作成する';
$string['cronstatedescription'] = 'これによりあなたはcron実行時にキュー内のアイテムのインデックス作成を有効または無効にできます。';
$string['dateoldestfirst'] = '日付 (古い順)';
$string['daterecentfirst'] = '日付 (新しい順)';
$string['deleted'] = '削除済み';
$string['deletedforumpost'] = '削除済みフォーラム投稿';
$string['document'] = 'ドキュメント';
$string['error'] = 'エラー:';
$string['errorunknown'] = '不明なエラー';
$string['filterresultsby'] = '結果をフィルタする';
$string['forum'] = 'フォーラム';
$string['forumpost'] = 'フォーラム投稿';
$string['forumpostedbylabel'] = '投稿者:';
$string['forumpostedby'] = '%s - %s';
$string['forumtopic'] = 'フォーラムトピック';
$string['Group'] = 'グループ';
$string['host'] = 'ホスト';
$string['hostdescription'] = 'Elasticsearchサーバのホスト名です。デフォルトは次のとおりです: %';
$string['indexingpassword'] = '認証書き込みパスワード';
$string['indexingpassworddescription'] = 'インデックスからの読み込みと異なる場合、インデックスへの書きみ時にHTTP基本認証でElasticsearchに渡すパスワードです (任意)。';
$string['indexingrunning'] = 'インデックス化cronジョブが動作しています。数分後、再度お試しください。';
$string['indexingrunningtry'] = 'あなたが実際にcronが動作していないことを把握している場合、./mash search-reset-cron-lockをご覧ください。';
$string['indexingusername'] = '認証書き込みユーザ名';
$string['indexingusernamedescription'] = 'インデックスからの読み込みと異なる場合、インデックスへの書きみ時にHTTP基本認証でElasticsearchに渡すユーザ名です (任意)。';
$string['indexname'] = 'インデックス名';
$string['indexnamedescription'] = 'Elasticsearchインデックス名です。デフォルトは次のとおりです: %s';
$string['indexstatusbad'] = 'インデックスステータス (%s): %s';
$string['indexstatusunknown'] = '現在のインデックス「 %s 」のステータスはHTTPレスポンス「 %s 」のため不明です。';
$string['license'] = 'ライセンス';
$string['Media'] = 'メディア';
$string['monitorfailedqueuesize'] = '1時間以上の失敗レコード数';
$string['monitorqueuehasolditems'] = 'Elasticsearch 7のキューにある %s 時間以上前の未処理アイテム';
$string['monitorunprocessedqueuesize'] = '未処理レコード合計数';
$string['monitorqueuestatus'] = 'Elasticsearch 7キューステータス';
$string['monitorsubnavtitle'] = 'Elasticsearch 7';
$string['none'] = 'なし';
$string['noticeenabled'] = '現在、Elasticsearch 7プラグインは有効です。無効にするには<a href="%s" class="elasticsearch-status">「検索設定」</a>で選択解除してください。';
$string['noticenotactive'] = 'Elasticsearch 7 サーバにホスト %s およびポート %s で到達できません。Elasticsearch 7 サーバが動作していることを確認してください。';
$string['noticenotenabled'] = '現在、Elasticsearch 7プラグインは有効にされていません。有効化するには<a href="%s">「検索設定」</a>で選択してください。';
$string['owner'] = 'オーナ';
$string['page'] = 'ページ';
$string['pages'] = 'ページ';
$string['pagetitle'] = '検索';
$string['password'] = '認証パスワード';
$string['passworddescription'] = 'HTTP基本認証でElasticsearch 7に渡すパスワードです (任意)。';
$string['passwordlength'] = '(パスワード長: %s)';
$string['pluginstatus'] = 'プラグインステータス: %s';
$string['pluginstatusmessageindex404'] = 'インデックスが作成されているはずですが、作成されていないようです。ページをリロードするか、あなたのElasticsearch 7サーバを確認してください。';
$string['pluginstatustitleaccess'] = 'サーバアクセス';
$string['pluginstatustitlecluster_health'] = 'クラスタヘルス';
$string['pluginstatustitlecron'] = 'cron';
$string['pluginstatustitleindexstatus'] = 'インデックスステータス';
$string['pluginstatustitleserver_health'] = 'サーバヘルス';
$string['pluginstatusignoresslerror'] = '<code>productionmode</code>が「true」の場合、<code>ignoressl</code>設定は無視されます。Elasticsearch 7の有効なSSL証明書を使用するか、<code>productionmode</code>を「false」に設定してください。';
$string['port'] = 'Elasticsearchポート';
$string['portdescription'] = 'Elasticsearchと通信するためのポートです。デフォルトは次のとおりです: %';
$string['Portfolio'] = 'ポートフォリオ';
$string['record'] = 'レコード';
$string['records'] = 'レコード';
$string['relevance'] = '関連性';
$string['replicashards'] = 'レプリカシャード';
$string['replicashardsdescription'] = '作成されるシャードのコピー数です。注意: 1ノードのみの場合、レプリカに「0」を設定してください。';
$string['reset'] = 'リセット';
$string['resetallindexes'] = 'すべてのインデックスをリセットする';
$string['resetdescription'] = 'このテーブルではElasticsearchサーバに送信するため現在キューに入れられているそれぞれのタイプのレコード数を表示しています。アイテムは検索プラグインのcronタスクが実行されるたびにElasticsearchサーバに送信されます (5分ごと)。検索インデックスをリセット、すべてのレコードを削除、そしてレコードを再度キューに入れるには下のボタンをクリックしてください。';
$string['resetlegend'] = 'インデックスリセット';
$string['resettype'] = 'タイプ';
$string['resetitemsinqueue'] = 'キュー内';
$string['resetitemsinindex'] = 'インデックス内';
$string['resume'] = 'レジュメ';
$string['scheme'] = 'スキーマ';
$string['schemedescription'] = 'Elasticsearch 7サーバのスキーマです。デフォルトは次のとおりです: %';
$string['servererror'] = 'サーバへの接続時にエラーが発生しました: %s';
$string['shards'] = 'シャード';
$string['shardsdescription'] = '作成されるインデックスの個数 (シャード) です。';
$string['sortby'] = '並べ替え';
$string['systemmessage'] = 'システムメッセージ:';
$string['tags'] = 'タグ';
$string['tagsonly'] = 'タグのみ';
$string['Text'] = 'テキスト';
$string['types'] = 'Elasticsearchタイプ';
$string['typesdescription'] = 'インデックス作成のためのカンマ区切りの要素一覧です。デフォルトは次のとおりです: %';
$string['unassignedshards'] = '未割り当てシャード: %s';
$string['usedonpage'] = '使用ページ';
$string['usedonpages'] = '使用ページ';
$string['username'] = '認証ユーザ名';
$string['usernamedescription'] = 'HTTP基本認証でElasticsearch 7に渡すユーザ名です (任意)。';
$string['Users'] = '人';
$string['xsearchresults'] = '検索結果: %s';
$string['xsearchresultsfory'] = '検索結果: %s / 検索キーワード: %s';
$string['ztoa'] = 'Z -> A';
