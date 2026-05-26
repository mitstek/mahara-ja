<?php
/**
 *
 * @package    mahara
 * @subpackage lang (Japanese)
 * @translator Mitsuhiro Yoshida (https://mitstek.com/)
 * @started    2008-01-19 11:25:00 UTC
 * @updated    2026-05-26 06:32:45 UTC
 * @license    https://www.gnu.org/licenses/gpl-3.0.html GNU GPL version 3 or later
 * @copyright  For copyright information on Mahara, please see the README file distributed with this software.
 *
 */

defined('INTERNAL') || die();

$string['postsperpage'] = '1ページあたりのエントリ数';
$string['itemstoshow'] = '表示するエントリ';
$string['posted'] = '投稿';
$string['posted_by'] = '-';
$string['posted_in_journal'] = '日誌';
$string['postedin'] = '-';
$string['postedon'] = '投稿日時';
$string['updatedon'] = '最終更新日時';
$string['blockheadingtags'] = '「 %2$s 」がタグ付けされた日誌エントリ';
$string['blockheadingtagsomitboth'] = '(タグ「 %2$ 」を除外)';
$string['blockheadingtagsomitonly'] = '「 %2$s 」がタグ付けされていない日誌エントリ';
$string['taglist'] = '次のタグが付けられたエントリを表示する';
$string['taglistdesc2'] = 'あなたが除外したいそれぞれのタグの前にマイナス記号を入力してください。';
$string['excludetag'] = '除外タグ:';
$string['notags'] = '「 %s 」がタグ付けされた日誌エントリはありません。';
$string['notagsomit'] = '「 %s 」がタグ付けされていない日誌エントリはありません。';
$string['notagsboth'] = '「 %s 」がタグ付けおよび「 %s 」が除外された日誌エントリはありません。';
$string['notagsavailable'] = 'あなたはタグを作成していません。';
$string['notagsavailableerror'] = 'タグが選択されていません。ここで選択できるようにするにはあなたの日誌エントリにタグを追加する必要があります。';
$string['configerror'] = 'ブロック設定中にエラーが発生しました。';
$string['showjournalitemsinfull'] = '日誌アイテムをフルに表示する';
$string['showjournalitemsinfulldesc1'] = 'この設定を有効にした場合、日誌エントリが表示されます。そうでない場合、日誌エントリのタイトルのみ表示されます。';
$string['tag'] = 'タグ';
$string['description'] = '日誌全体です (「コンテンツ -> 日誌」をご覧ください)。';
$string['display_all'] = 'すべてのエントリ';
$string['display_specific'] = '特定エントリ';
$string['display_tagged'] = 'タグ付きエントリ';
$string['display_type'] = '表示タイプ';
$string['journal_entry_name_journal'] = '日誌エントリ名 (日誌)';
$string['search_for_entries'] = 'エントリを検索する';
$string['select_copy_permission'] = 'コピーパーミッションを選択する';
$string['select_entries'] = '表示するエントリを選択する';
$string['select_journals'] = '表示する日誌を選択する';
$string['show_entries_in_full'] = 'エントリをフルに表示する';
$string['skip_block_when_copying_page'] = 'ページコピー時にブロック全体をスキップする';
$string['title'] = '日誌';
$string['title__all'] = '日誌 (すべてのエントリ)';
$string['title__specific'] = '日誌 (特定エントリ)';
$string['title__tagged'] = '日誌 (タグ付きエントリ)';
$string['type_in_search_term'] = '検索語を入力する';
$string['x_to_y_of_total_entries'] = '%3$s エントリ中の %1$s から %2$s';
$string['count_desc'] = '1から100までの値を入力してください。';
$string['count_desc_10'] = '1から10までの値を入力してください。';
$string['count_help'] = '<h1>表示するエントリ数</h1>
<p>これは「1ページあたりのエントリ数」を設定した場合、すべてのページを含めて表示できる最大件数です。</p>
<p>この値を空白のままにした場合、エントリ数が制限されなくなります。その場合、「1ページあたりのエントリ数」を設定する必要があります。</p>
<p>ここに値を設定した場合、あなたは「1ページあたりのエントリ数」を空白のままにできます。その場合、すべてのエントリが直接表示されます。</p>';
$string['instconf.copytype_help'] = '<h1>コピーパーミッション</h1><p>他の人がこのページをコピーする場合、このセクションがどのようにコピーされるか選択してください。</p>';
$string['instconf.pagesize_help'] = '<h1>1ページあたりのエントリ数</h1>
<p>これは一度に表示されるエントリの最大数です。それ以外のエントリはページネーションからアクセスできます。これによりすべてのエントリを一度に表示する場合に比べてポートフォリオページの表示範囲をコンパクトに保てます。</p>
<p>あなたはこの値を空白のままにできます。その場合、すべてのエントリが表示されます。その場合、あなたは「表示するエントリ数」の値を設定する必要があります。</p>
<p>あなたがここで値を設定した場合、「表示するエントリ数」は空白のままにできます。その場合、最大数のエントリが直接表示されます。</p>';
$string['instconf.tagselect_help'] = '<h1>タグ選択</h1>
<p>あなたは検索結果を絞り込むために複数のタグを追加できるだけでなく、無視したいタグを指定できます。</p>
<p>あなたが複数タグを選択した場合、その日誌エントリがリストに表示されるには<strong>すべて</strong>の選択されたタグに一致する必要があります。</p>
<p>あなたに次のようにタグ付けされた日誌エントリがある場合:</p>
<ol>
<li>猫, ペット, 動物</li>
<li>猫, ペット, 動物, 小型</li>
<li>猫, ペット, 動物, 大型</li>
<li>猫, 野生, 動物</li>
<li>猫, 野生, 動物, 小型</li>
<li>猫, 野生, 動物, 大型</li>
<li>犬, 野生, 動物</li>
<li>犬, 野生, 動物, 小型</li>
<li>犬, 野生, 動物, 大型</li>
</ol>
<p>あなたが:</p>
<ul>
<li>タグ「動物」を選択した場合、そのブロックにすべての日誌エントリが表示されます。</li>
<li>タグ「猫」と「大型」を選択した場合、日誌エントリ3および6が表示されます。</li>
<li>タグ「動物」と「大型」を選択した場合、日誌エントリ3、6および9が表示されます。</li>
</ul>
<h2>除外タグ</h2>
<p>あなたはまた除外したいタグの前にマイナス記号を付けることで検索結果からそのタグを除外できます。</p>
<p>あなたが:</p>
<ul>
<li>タグ「猫」を選択して「ペット」を除外した場合 (タグを除外するには引用符なしで「-ペット」と入力してください)、日誌エントリー4、5および6が表示されます。</li>
<li>タグ「野生」および「動物」を選択して「小型」および「大型」を除外した場合 (タグを除外するには引用符なしで「-小型」「-大型」と入力してください)、日誌エントリ4および7が表示されます。</li>
</ul>';
