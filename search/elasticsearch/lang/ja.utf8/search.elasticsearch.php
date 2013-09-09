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
 * @updated    2013-09-09 06:21:40 UTC
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL
 * @copyright  (C) 2006 onwards Catalyst IT Ltd http://catalyst.net.nz
 *
 */

defined('INTERNAL') || die();

$string['admin'] = '管理者';
$string['all'] = 'すべて';
$string['analyzer'] = 'Elasticsearchアナライザ';
$string['analyzerdescription'] = '使用するElasticsearchアナライザクラスです。デフォルトは「mahara_analyzer」です。';
$string['artefacttypedescription'] = 'あなたがインデックスに含みたいアーティファクトタイプをチェックしてください。階層定義されたアーティファクトタイプのみ有効です。変更を反映させるため、あなたはキュー内のアーティファクトをリセットする必要があります。';
$string['artefacttypelegend'] = 'アーティファクトタイプ';
$string['artefacttypemapdescription'] = 'それぞれのアーティファクトタイプに関して、「|」で区切られた階層を入力してください (1行あたり1アーティファクト)。';
$string['artefacttypemaplegend'] = 'アーティファクトタイプ階層';
$string['atoz'] = 'A -> Z';
$string['blogpost'] = '日誌タイプ';
$string['bypassindexname'] = 'バイパスインデックス';
$string['bypassindexnamedescription'] = '(任意) 設定された場合、Maharaはメインインデックス名の代わりに、このインデックス名にインデックスデータを読み込みます。';
$string['collection'] = 'コレクション';
$string['confignotset'] = '(未設定)';
$string['createdby'] = '作成者: %s';
$string['cronlimit'] = 'Cronレコード制限';
$string['cronlimitdescription'] = 'それぞれのcron実行に関して、キューからElasticsearchサーバに送られる最大レコード数です (無制限の場合、空白またはゼロにしてください)。';
$string['dateoldestfirst'] = '日付 (古い順)';
$string['daterecentfirst'] = '日付 (新しい順)';
$string['deleted'] = '削除済み';
$string['deletedforumpost'] = '削除済みフォーラム投稿';
$string['filterresultsby'] = 'フィルタ結果';
$string['forum'] = 'フォーラム';
$string['forumpost'] = 'フォーラム投稿';
$string['forumtopic'] = 'フォーラムトピック';
$string['Group'] = 'グループ';
$string['host'] = 'ホスト';
$string['hostdescription'] = 'Elasticsearchサーバのホスト名です。デフォルトは「127.0.0.1」です。';
$string['indexname'] = 'インデックス名';
$string['indexnamedescription'] = 'Elasticsearchインデックス名です。デフォルトは「mahara」です。';
$string['license'] = 'ライセンス';
$string['Media'] = 'メディア';
$string['noticeenabled'] = '現在、イラスティック検索プラグインは有効にされています。イラスティック検索プラグインを無効にするには、<a href="%s">サイトオプションの検索設定</a>にて、選択解除してください。';
$string['noticenotenabled'] = '現在、Elasticsearchプラグインは無効にされています。Elasticsearchプラグインを有効にするには、<a href="%s">サイトオプションの検索設定</a>にて、選択してください。';
$string['noticepostgresrequired'] = '現在のところ、ElasticsearchプラグインはPostgresqlデータベースのみで動作します。';
$string['noticepostgresrequiredtitle'] = '機能利用不可';
$string['owner'] = 'オーナー';
$string['page'] = 'ページ';
$string['pages'] = 'ページ';
$string['pagetitle'] = '検索';
$string['password'] = '認証パスワード';
$string['passworddescription'] = '(任意) HTTP基本認証経由でElasticsearchに渡すためのパスワードです。';
$string['passwordlength'] = '(パスワード長: %s)';
$string['port'] = 'Elasticsearchポート';
$string['portdescription'] = 'Elasticsearchが使用するポートです。デフォルトは「9200」です。';
$string['Portfolio'] = 'ポートフォリオ';
$string['record'] = 'レコード';
$string['records'] = 'レコード';
$string['relevance'] = '関連性';
$string['resetallindexes'] = 'すべてのインデックスをリセットする';
$string['resetdescription'] = 'このテーブルでは、Elasticsearchサーバに送信するためにキューに入っているそれぞれのタイプの現在のレコード数を表示しています。アイテムは検索プラグインのcronタスクが実行されるたびに、Elasticsearchサーバに送信されます (5分ごと)。検索インデックスをリセット、すべてのレコードを削除、そしてレコードを再度キューに入れるには、下のボタンをクリックしてください。';
$string['resetlegend'] = 'インデックスリセット';
$string['resume'] = 'レジュメ';
$string['sortby'] = '並べ替え';
$string['tags'] = 'タグ';
$string['tagsonly'] = 'タグのみ';
$string['Text'] = 'テキスト';
$string['types'] = 'Elasticsearchタイプ';
$string['typesdescription'] = 'インデックスするカンマ区切りのエレメント一覧です。デフォルトは次のとおりです: usr,interaction_instance,interaction_forum_post,group,view,artefact';
$string['usedonpage'] = 'ページ使用';
$string['usedonpages'] = 'ページ使用';
$string['username'] = '認証ユーザ名';
$string['usernamedescription'] = '(任意) HTTP基本認証経由でElasticsearchに渡すためのユーザ名です。';
$string['Users'] = 'ユーザ';
$string['wallpost'] = 'ウォール投稿';
$string['xsearchresultsfory'] = '検索結果: %s / 検索キーワード: %s';
$string['ztoa'] = 'Z -> A';

?>
