<?php
/**
 *
 * @package    mahara
 * @subpackage lang (Japanese)
 * @translator Mitsuhiro Yoshida (https://mitstek.com/)
 * @started    2008-01-19 11:25:00 UTC
 * @updated    2018-02-09 04:28:51 UTC
 * @license    https://www.gnu.org/copyleft/gpl.html GNU GPL version 3 or later
 * @copyright  For copyright information on Mahara, please see the README file distributed with this software.
 *
 */

defined('INTERNAL') || die();

$string['admin'] = '管理者';
$string['all'] = 'すべて';
$string['analyzer'] = 'Elasticsearchアナライザ';
$string['analyzerdescription'] = '使用するElasticsearchアナライザクラスです。デフォルトはmahara_analyzerです。';
$string['artefacttypedescription'] = 'あなたがインデックスに含みたいアーティファクトタイプをチェックしてください。階層定義されたアーティファクトタイプのみ有効です。あなたの変更を反映させるにはキュー内のアーティファクトをリセットする必要があります。';
$string['artefacttypelegend'] = 'アーティファクトタイプ';
$string['artefacttypemapdescription'] = 'それぞれのアーティファクトタイプに関して「|」で区切られた階層を入力してください (1行あたり1アーティファクト)。';
$string['artefacttypemaplegend'] = 'アーティファクトタイプ階層';
$string['atoz'] = 'A -> Z';
$string['blogpost'] = '日誌エントリ';
$string['bypassindexname'] = 'バイパスインデックス';
$string['bypassindexnamedescription'] = '(任意) 設定された場合、Maharaはメインインデックス名の代わりにこのインデックス名にインデックスデータを読み込みます。';
$string['clusterstatus'] = 'Elasticsearchクラスタに問題があります。ステータスは「 %s 」です。未割り当てのシャードは「 %s 」です。';
$string['collection'] = 'コレクション';
$string['confignotset'] = '(未設定)';
$string['contains'] = '含む';
$string['createdby'] = '作成者: %s';
$string['createdbyanon'] = '作成者 (作成者名非表示)';
$string['cronlimit'] = 'cronレコード制限';
$string['cronlimitdescription'] = 'それぞれのcron実行に関してキューからElasticsearchサーバに送られる最大レコード数です (無制限の場合、空白またはゼロにしてください)。';
$string['dateoldestfirst'] = '日付 (古い順)';
$string['daterecentfirst'] = '日付 (新しい順)';
$string['deleted'] = '削除済み';
$string['deletedforumpost'] = '削除済みフォーラム投稿';
$string['document'] = 'ドキュメント';
$string['elasticsearchtooold'] = 'あなたのElasticsearchのバージョン %s は古過ぎます。%s またはそれ以上を必要とします。';
$string['filterresultsby'] = '結果をフィルタする';
$string['forum'] = 'フォーラム';
$string['forumpost'] = 'フォーラム投稿';
$string['forumpostedbylabel'] = '投稿:';
$string['forumpostedby'] = '%s - %s';
$string['forumtopic'] = 'フォーラムトピック';
$string['Group'] = 'グループ';
$string['host'] = 'ホスト';
$string['hostdescription'] = 'Elasticsearchサーバのホスト名です。デフォルトは「127.0.0.1」です。';
$string['indexingusername'] = '認証書き込みユーザ名';
$string['indexingusernamedescription'] = '(任意) インデックス読み込みと異なる場合、インデックス書きみ時にHTTP基本認証でElasticsearchに渡すユーザ名です。';
$string['indexingpassword'] = '認証書き込みパスワード';
$string['indexingpassworddescription'] = '(任意) インデックス読み込みと異なる場合、インデックス書きみ時にHTTP基本認証でElasticsearchに渡すパスワードです。';
$string['indexingrunning'] = 'インデックス化cronジョブが動作しています。数分後、再度お試しください。';
$string['indexname'] = 'インデックス名';
$string['indexnamedescription'] = 'Elasticsearchインデックス名です。デフォルトは「mahara」です。';
$string['indexstatusok'] = '現在のインデックス「 %s 」のステータスは「 グリーン 」です。Elasticsearchは動作しています。';
$string['indexstatusbad'] = '現在のインデックス「 %s 」のステータスは「 %s 」です。修正する必要があります。';
$string['indexstatusunknown'] = '現在のインデックス「 %s 」のステータスはHTTPレスポンス「 %s 」のため不明です。';
$string['license'] = 'ライセンス';
$string['Media'] = 'メディア';
$string['newindextype'] = 'あなたのElasticsearch設定に新しいインデックスタイプ「 %s 」が追加されました。これが適用されるためにはあなたのサイトを再インデックス化する必要があります。';
$string['newversion'] = '新しいElasticsearch PHPバージョン %s がMaharaに追加されました。これはElasticsearchサーバ %s またはそれ以上と互換性があります。これを適用するにはあなたのサイトを再インデックス化する必要があります。';
$string['none'] = 'なし';
$string['noticeenabled'] = '現在、Elasticsearchプラグインは有効にされています。Elasticsearchプラグインを無効にするには<a href="%s">検索設定</a>で選択解除してください。';
$string['noticenotactive'] = 'ホスト: %s およびポート %s のElasticsearchサーバにアクセスできません。動作しているか確認してください。';
$string['noticenotenabled'] = '現在、Elasticsearchプラグインは無効にされています。Elasticsearchプラグインを有効にするには<a href="%s">検索設定</a>で選択してください。';
$string['owner'] = 'オーナー';
$string['page'] = 'ページ';
$string['pages'] = 'ページ';
$string['pagetitle'] = '検索';
$string['password'] = '認証パスワード';
$string['passworddescription'] = '(任意) HTTP基本認証でElasticsearchに渡すパスワードです。';
$string['passwordlength'] = '(パスワード長: %s)';
$string['port'] = 'Elasticsearchポート';
$string['portdescription'] = 'Elasticsearchが使用するポートです。デフォルトは「9200」です。';
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
$string['resume'] = 'レジュメ';
$string['scheme'] = 'スキーマ';
$string['schemedescription'] = 'Elasticsearchサーバのスキーマです。デフォルトは「http」です。';
$string['shards'] = 'シャード';
$string['shardsdescription'] = '作成されるインデックスの個数 (シャード) です。';
$string['sortby'] = '並べ替え';
$string['tags'] = 'タグ';
$string['tagsonly'] = 'タグのみ';
$string['Text'] = 'テキスト';
$string['types'] = 'Elasticsearchタイプ';
$string['typesdescription'] = 'インデックス化するカンマ区切りのエレメント一覧です。デフォルトは次のとおりです: usr,interaction_instance,interaction_forum_post,group,view,artefact';
$string['usedonpage'] = '使用ページ';
$string['usedonpages'] = '使用ページ';
$string['username'] = '認証ユーザ名';
$string['usernamedescription'] = '(任意) HTTP基本認証でElasticsearchに渡すユーザ名です。';
$string['Users'] = 'ユーザ';
$string['wallpost'] = 'ウォール投稿';
$string['xsearchresults'] = '検索結果: %s';
$string['xsearchresultsfory'] = '検索結果: %s / 検索キーワード: %s';
$string['ztoa'] = 'Z -> A';

?>
