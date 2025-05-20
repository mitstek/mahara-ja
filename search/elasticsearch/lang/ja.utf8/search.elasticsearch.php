<?php
<<<<<<< HEAD

defined('INTERNAL') || die();

$string['Group'] = 'グループ';
$string['Media'] = 'メディア';
$string['Portfolio'] = 'ポートフォリオ';
$string['Text'] = 'テキスト';
$string['Users'] = '人';
=======
/**
 *
 * @package    mahara
 * @subpackage lang (Japanese)
 * @translator Mitsuhiro Yoshida (https://mitstek.com/)
 * @started    2008-01-19 11:25:00 UTC
 * @updated    2018-02-09 04:28:51 UTC
 * @license    https://www.gnu.org/licenses/gpl-3.0.html GNU GPL version 3 or later
 * @copyright  For copyright information on Mahara, please see the README file distributed with this software.
 *
 */

defined('INTERNAL') || die();

>>>>>>> 92099ba5d5a5390b497675e7809f65e21f9a5091
$string['admin'] = '管理者';
$string['all'] = 'すべて';
$string['analyzer'] = 'Elasticsearchアナライザ';
$string['analyzerdescription'] = '使用するElasticsearchアナライザクラスです。デフォルトはmahara_analyzerです。';
<<<<<<< HEAD
$string['artefacttypedescription'] = 'あなたがインデックスに含めたいアーティファクトタイプをチェックしてください。階層定義されたアーティファクトタイプのみ有効です。あなたの変更を反映させるにはキュー内のアーティファクトをリセットしてください。';
=======
$string['artefacttypedescription'] = 'あなたがインデックスに含めたいアーティファクトタイプをチェックしてください。階層定義されたアーティファクトタイプのみ有効です。あなたの変更を反映させるにはキュー内のアーティファクトをリセットする必要があります。';
>>>>>>> 92099ba5d5a5390b497675e7809f65e21f9a5091
$string['artefacttypelegend'] = 'アーティファクトタイプ';
$string['artefacttypemapdescription'] = 'それぞれのアーティファクトタイプの階層を「|」で区切って入力してください (1行あたり1アーティファクト)。';
$string['artefacttypemaplegend'] = 'アーティファクトタイプ階層';
$string['atoz'] = 'A -> Z';
<<<<<<< HEAD
$string['blog'] = '日誌';
$string['blogpost'] = '日誌エントリ';
$string['bypassindexname'] = 'バイパスインデックス';
$string['bypassindexnamedescription'] = '設定された場合、Maharaはメインインデックス名の代わりにこのインデックス名にインデックスデータを読み込みます (任意)。';
=======
$string['blogpost'] = '日誌エントリ';
$string['bypassindexname'] = 'バイパスインデックス';
$string['bypassindexnamedescription'] = '(任意) 設定された場合、Maharaはメインインデックス名の代わりにこのインデックス名にインデックスデータを読み込みます。';
>>>>>>> 92099ba5d5a5390b497675e7809f65e21f9a5091
$string['clusterstatus'] = 'Elasticsearchクラスタに問題があります。ステータスは「 %s 」です。未割り当てのシャードは「 %s 」です。';
$string['collection'] = 'コレクション';
$string['confignotset'] = '(未設定)';
$string['contains'] = '含む';
<<<<<<< HEAD
$string['createdby1'] = '作成者: <a href="%s">%s</a>';
=======
$string['createdby'] = '作成者: %s';
>>>>>>> 92099ba5d5a5390b497675e7809f65e21f9a5091
$string['createdbyanon'] = '作成者 (作成者名秘匿)';
$string['cronlimit'] = 'cronレコード制限';
$string['cronlimitdescription'] = 'それぞれのcron実行に関してキューからElasticsearchサーバに渡される最大レコード数です (無制限の場合、空白またはゼロにしてください)。';
$string['dateoldestfirst'] = '日付 (古い順)';
$string['daterecentfirst'] = '日付 (新しい順)';
$string['deleted'] = '削除済み';
$string['deletedforumpost'] = '削除済みフォーラム投稿';
$string['document'] = 'ドキュメント';
$string['elasticsearchtooold'] = 'あなたのElasticsearchのバージョン %s は古過ぎます。%s またはそれ以上を必要とします。';
$string['filterresultsby'] = '結果をフィルタする';
$string['forum'] = 'フォーラム';
$string['forumpost'] = 'フォーラム投稿';
<<<<<<< HEAD
$string['forumpostedby'] = '%s - %s';
$string['forumpostedbylabel'] = '投稿者:';
$string['forumtopic'] = 'フォーラムトピック';
$string['host'] = 'ホスト';
$string['hostdescription'] = 'Elasticsearchサーバのホスト名です。デフォルトは「127.0.0.1」です。';
$string['html'] = 'テキスト';
$string['indexingpassword'] = '認証書き込みパスワード';
$string['indexingpassworddescription'] = 'インデックスから読み込むパスワードと異なる場合、インデックス書きみ時にHTTP基本認証でElasticsearchに渡すパスワードです (任意)。';
$string['indexingrunning'] = 'インデックス化cronジョブが動作しています。数分後、再度お試しください。';
$string['indexingusername'] = '認証書き込みユーザ名';
$string['indexingusernamedescription'] = 'インデックスから読み込むユーザ名と異なる場合、インデックス書きみ時にHTTP基本認証でElasticsearchに渡すユーザ名です (任意)。';
$string['indexname'] = 'インデックス名';
$string['indexnamedescription'] = 'Elasticsearchインデックス名です。デフォルトは「mahara」です。';
$string['indexstatusbad'] = '現在のインデックス「 %s 」のステータスは「 %s 」です。修正する必要があります。';
$string['indexstatusok'] = '現在のインデックス「 %s 」のステータスは「 グリーン 」です。Elasticsearchは動作しています。';
$string['indexstatusunknown'] = '現在のインデックス「 %s 」のステータスはHTTPレスポンス「 %s 」のため不明です。';
$string['license'] = 'ライセンス';
=======
$string['forumpostedbylabel'] = '投稿者:';
$string['forumpostedby'] = '%s - %s';
$string['forumtopic'] = 'フォーラムトピック';
$string['Group'] = 'グループ';
$string['host'] = 'ホスト';
$string['hostdescription'] = 'Elasticsearchサーバのホスト名です。デフォルトは「127.0.0.1」です。';
$string['indexingusername'] = '認証書き込みユーザ名';
$string['indexingusernamedescription'] = '(任意) インデックスから読み込むユーザ名と異なる場合、インデックス書きみ時にHTTP基本認証でElasticsearchに渡すユーザ名です。';
$string['indexingpassword'] = '認証書き込みパスワード';
$string['indexingpassworddescription'] = '(任意) インデックスから読み込むパスワードと異なる場合、インデックス書きみ時にHTTP基本認証でElasticsearchに渡すパスワードです。';
$string['indexingrunning'] = 'インデックス化cronジョブが動作しています。数分後、再度お試しください。';
$string['indexname'] = 'インデックス名';
$string['indexnamedescription'] = 'Elasticsearchインデックス名です。デフォルトは「mahara」です。';
$string['indexstatusok'] = '現在のインデックス「 %s 」のステータスは「 グリーン 」です。Elasticsearchは動作しています。';
$string['indexstatusbad'] = '現在のインデックス「 %s 」のステータスは「 %s 」です。修正する必要があります。';
$string['indexstatusunknown'] = '現在のインデックス「 %s 」のステータスはHTTPレスポンス「 %s 」のため不明です。';
$string['license'] = 'ライセンス';
$string['Media'] = 'メディア';
>>>>>>> 92099ba5d5a5390b497675e7809f65e21f9a5091
$string['newindextype'] = 'あなたのElasticsearch設定に新しいインデックスタイプ「 %s 」が追加されました。これが適用されるためにはあなたのサイトを再インデックス化する必要があります。';
$string['newversion'] = '新しいElasticsearch PHPバージョン %s がMaharaに追加されました。これはElasticsearchサーバ %s またはそれ以上と互換性があります。これを適用するにはあなたのサイトを再インデックス化する必要があります。';
$string['none'] = 'なし';
$string['noticeenabled'] = '現在、Elasticsearchプラグインは有効にされています。Elasticsearchプラグインを無効にするには<a href="%s">検索設定</a>で選択解除してください。';
$string['noticenotactive'] = 'ホスト: %s およびポート %s のElasticsearchサーバにアクセスできません。動作しているか確認してください。';
$string['noticenotenabled'] = '現在、Elasticsearchプラグインは有効にされていません。Elasticsearchプラグインを有効にするには<a href="%s">検索設定</a>で選択してください。';
<<<<<<< HEAD
$string['nrecords'] = array(
    0 => '%s レコード',
);
$string['ownedbygroup1'] = '作成グループ: <a href="%s">%s</a>';
=======
>>>>>>> 92099ba5d5a5390b497675e7809f65e21f9a5091
$string['owner'] = 'オーナ';
$string['page'] = 'ページ';
$string['pages'] = 'ページ';
$string['pagetitle'] = '検索';
$string['password'] = '認証パスワード';
$string['passworddescription'] = '(任意) HTTP基本認証でElasticsearchに渡すパスワードです。';
$string['passwordlength'] = '(パスワード長: %s)';
$string['port'] = 'Elasticsearchポート';
$string['portdescription'] = 'Elasticsearchが使用するポートです。デフォルトは「9200」です。';
<<<<<<< HEAD
=======
$string['Portfolio'] = 'ポートフォリオ';
>>>>>>> 92099ba5d5a5390b497675e7809f65e21f9a5091
$string['record'] = 'レコード';
$string['records'] = 'レコード';
$string['relevance'] = '関連性';
$string['replicashards'] = 'レプリカシャード';
$string['replicashardsdescription'] = '作成されるシャードのコピー数です。注意: 1ノードのみの場合、レプリカに「0」を設定してください。';
$string['reset'] = 'リセット';
<<<<<<< HEAD
$string['resetallindexes1'] = 'すべてのインデックスをリセットする';
=======
$string['resetallindexes'] = 'すべてのインデックスをリセットする';
>>>>>>> 92099ba5d5a5390b497675e7809f65e21f9a5091
$string['resetdescription'] = 'このテーブルではElasticsearchサーバに送信するため現在キューに入れられているそれぞれのタイプのレコード数を表示しています。アイテムは検索プラグインのcronタスクが実行されるたび (5分ごと) にElasticsearchサーバに送信されます。検索インデックスをリセット、すべてのレコードを削除、そしてレコードを再度キューに入れるには下のボタンをクリックしてください。';
$string['resetlegend'] = 'インデックスリセット';
$string['resume'] = 'レジュメ';
$string['scheme'] = 'スキーマ';
$string['schemedescription'] = 'Elasticsearchサーバのスキーマです。デフォルトは「http」です。';
<<<<<<< HEAD
$string['searchpagetitle'] = '人およびコンテンツを検索する';
$string['servererror'] = 'サーバへの接続に問題が発生しました: %s';
=======
>>>>>>> 92099ba5d5a5390b497675e7809f65e21f9a5091
$string['shards'] = 'シャード';
$string['shardsdescription'] = '作成されるインデックスの個数 (シャード) です。';
$string['sortby'] = '並べ替え';
$string['tags'] = 'タグ';
$string['tagsonly'] = 'タグのみ';
<<<<<<< HEAD
=======
$string['Text'] = 'テキスト';
>>>>>>> 92099ba5d5a5390b497675e7809f65e21f9a5091
$string['types'] = 'Elasticsearchタイプ';
$string['typesdescription'] = 'インデックス化するカンマ区切りのエレメント一覧です。デフォルトは次のとおりです: usr,interaction_instance,interaction_forum_post,group,view,artefact';
$string['usedonpage'] = '使用ページ';
$string['usedonpages'] = '使用ページ';
$string['username'] = '認証ユーザ名';
<<<<<<< HEAD
$string['usernamedescription'] = 'HTTP基本認証でElasticsearchに渡すユーザ名です (任意)。';
=======
$string['usernamedescription'] = '(任意) HTTP基本認証でElasticsearchに渡すユーザ名です。';
$string['Users'] = 'ユーザ';
>>>>>>> 92099ba5d5a5390b497675e7809f65e21f9a5091
$string['wallpost'] = 'ウォール投稿';
$string['xsearchresults'] = '検索結果: %s';
$string['xsearchresultsfory'] = '検索結果: %s / 検索キーワード: %s';
$string['ztoa'] = 'Z -> A';
<<<<<<< HEAD
=======

?>
>>>>>>> 92099ba5d5a5390b497675e7809f65e21f9a5091
