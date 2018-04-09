<?php
/**
 *
 * @package    mahara
 * @subpackage lang (Japanese)
 * @translator Mitsuhiro Yoshida (http://mitstek.com/)
 * @started    2008-01-19 11:25:00 UTC
 * @updated    2015-04-20 16:45:34 UTC
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL version 3 or later
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
$string['blogpost'] = '日誌タイプ';
$string['bypassindexname'] = 'バイパスインデックス';
$string['bypassindexnamedescription'] = '(任意) 設定された場合、Maharaはメインインデックス名の代わりにこのインデックス名にインデックスデータを読み込みます。';
$string['collection'] = 'コレクション';
$string['confignotset'] = '(未設定)';
$string['createdby'] = '作成者: %s';
$string['cronlimit'] = 'cronレコード制限';
$string['cronlimitdescription'] = 'それぞれのcron実行に関してキューからElasticsearchサーバに送られる最大レコード数です (無制限の場合、空白またはゼロにしてください)。';
$string['dateoldestfirst'] = '日付 (古い順)';
$string['daterecentfirst'] = '日付 (新しい順)';
$string['deleted'] = '削除済み';
$string['deletedforumpost'] = '削除済みフォーラム投稿';
$string['filterresultsby'] = '結果をフィルタする';
$string['forum'] = 'フォーラム';
$string['forumpost'] = 'フォーラム投稿';
$string['forumtopic'] = 'フォーラムトピック';
$string['Group'] = 'グループ';
$string['host'] = 'ホスト';
$string['hostdescription'] = 'Elasticsearchサーバのホスト名です。デフォルトは「127.0.0.1」です。';
$string['indexingrunning'] = 'インデックス化cronジョブが動作しています。数分後、再度お試しください。';
$string['indexname'] = 'インデックス名';
$string['indexnamedescription'] = 'Elasticsearchインデックス名です。デフォルトは「mahara」です。';
$string['license'] = 'ライセンス';
$string['Media'] = 'メディア';
$string['noticeenabled'] = '現在、イラスティック検索プラグインは有効にされています。イラスティック検索プラグインを無効にするには<a href="%s">サイトオプションの検索設定</a>で選択解除してください。';
$string['noticenotactive'] = 'ホスト: %s およびポート %s のElasticsearchサーバにアクセスできません。動作しているかどうか確認してください。';
$string['noticenotenabled'] = '現在、Elasticsearchプラグインは無効にされています。Elasticsearchプラグインを有効にするには<a href="%s">サイトオプションの検索設定</a>で選択してください。';
$string['noticepostgresrequired'] = '現在のところ、ElasticsearchプラグインはPostgresqlデータベースのみで動作します。';
$string['noticepostgresrequiredtitle'] = '機能利用不可';
$string['owner'] = 'オーナー';
$string['page'] = 'ページ';
$string['pages'] = 'ページ';
$string['pagetitle'] = '検索';
$string['password'] = '認証パスワード';
$string['passworddescription'] = '(任意) HTTP基本認証でElasticsearchに渡すためのパスワードです。';
$string['passwordlength'] = '(パスワード長: %s)';
$string['port'] = 'Elasticsearchポート';
$string['portdescription'] = 'Elasticsearchが使用するポートです。デフォルトは「9200」です。';
$string['Portfolio'] = 'ポートフォリオ';
$string['record'] = 'レコード';
$string['records'] = 'レコード';
$string['relevance'] = '関連性';
$string['reset'] = 'リセット';
$string['resetallindexes'] = 'すべてのインデックスをリセットする';
$string['resetdescription'] = 'このテーブルではElasticsearchサーバに送信するためにキューに入れられているそれぞれのタイプの現在のレコード数を表示しています。アイテムは検索プラグインのcronタスクが実行されるたびにElasticsearchサーバに送信されます (5分ごと)。検索インデックスをリセット、すべてのレコードを削除、そしてレコードを再度キューに入れるには下のボタンをクリックしてください。';
$string['resetlegend'] = 'インデックスリセット';
$string['resume'] = 'レジュメ';
$string['sortby'] = '並べ替え';
$string['tags'] = 'タグ';
$string['tagsonly'] = 'タグのみ';
$string['Text'] = 'テキスト';
$string['types'] = 'Elasticsearchタイプ';
$string['typesdescription'] = 'インデックス化するカンマ区切りのエレメント一覧です。デフォルトは次のとおりです: usr,interaction_instance,interaction_forum_post,group,view,artefact';
$string['usedonpage'] = 'ページ使用';
$string['usedonpages'] = 'ページ使用';
$string['username'] = '認証ユーザ名';
$string['usernamedescription'] = '(任意) HTTP基本認証でElasticsearchに渡すためのユーザ名です。';
$string['Users'] = 'ユーザ';
$string['wallpost'] = 'ウォール投稿';
$string['xsearchresultsfory'] = '検索結果: %s / 検索キーワード: %s';
$string['ztoa'] = 'Z -> A';

?>
