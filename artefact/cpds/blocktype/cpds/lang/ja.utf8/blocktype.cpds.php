<?php
/**
 *
 * @package    mahara
 * @subpackage lang (Japanese)
 * @translator Mitsuhiro Yoshida (https://mitstek.com/)
 * @started    2008-01-19 11:25:00 UTC
 * @updated    2026-05-26 07:32:11 UTC
 * @license    https://www.gnu.org/licenses/gpl-3.0.html GNU GPL version 3 or later
 * @copyright  For copyright information on Mahara, please see the README file distributed with this software.
 *
 */

defined('INTERNAL') || die();

$string['title'] = 'CPD活動';
$string['description'] = 'あなたの継続的専門能力開発 (CPD) の記録を表示します。';
$string['title_help'] = '<h1>セクションタイトル</h1><p>このフィールドを空白のままにした場合、デフォルトタイトルが使用されます。</p>';
$string['nocpdsaddone'] = 'まだCPDはありません。%sCPDを追加してください%s!';
$string['notselected'] = '選択なし';
$string['taglist'] = 'タグ付けされた活動を表示する';
$string['notagsavailable'] = 'あなたはCPD活動にタグ付けしていません。';
$string['notagsavailableerror'] = 'タグが選択されていません。あなたがここで選択できるようにするにはCPDエントリにタグを追加する必要があります。';
$string['tagselect_help'] = '<h1>タグ選択</h1>
<p>あなたは検索結果を絞り込むために複数のタグを追加できるます。</p>
<hr>
<strong>詳細</strong>
<p>あなたが複数のタグを選択した場合、CPD活動がリストに表示されるには、<strong>すべて</strong>の選択されたタグに一致している必要があります。</p>
<p>あなたに次のようにタグ付けされたエントリがある場合:</p>
<ol>
<li>有給, フルタイム, 仕事</li>
<li>有給, フルタイム, 仕事, 屋外</li>
<li>有給, フルタイム, 仕事, 屋内</li>
<li>有給, パートタイム, 仕事</li>
<li>有給, パートタイム, 仕事, 屋外</li>
<li>有給, パートタイム, 仕事, 屋内</li>
<li>ボランティア, パートタイム, 仕事</li>
<li>ボランティア, パートタイム, 仕事, 屋外</li>
<li>ボランティア, パートタイム, 仕事, 屋内</li>
</ol>
<p>あなたが:</p>
<ul>
<li>タグ「仕事」を選択した場合、そのブロックにすべてのエントリが表示されます。</li>
<li>タグ「有給」と「屋内」を選択した場合、日誌エントリ3および6が表示されます。</li>
<li>タグ「仕事」と「屋内」を選択した場合、エントリ3、6および9が表示されます。</li>
</ul>';
$string['startdate'] = '活動開始日';
$string['startdate_help'] = '<h1>開始日</h1><p>この日付以降に活動が開始されたエントリをフィルタリングします。</p>';
$string['enddate'] = '活動終了日';
$string['enddate_help'] = '<h1>終了日</h1><p>この日付またはそれ以前の開始日を持つエントリをフィルタリングします。</p>';
$string['startenddate'] = '活動日';
$string['dateserror'] = '開始日は終了日の前に設定してください。';
$string['addactivity'] = '活動を追加する';
$string['addnewactivity'] = '新しい活動を追加する';
$string['sortorder'] = '並べ替え順';
$string['sortorder_help'] = '<h1>並べ替え順</h1>
<p>あなたの活動を表示するには以下2つの方法があります:</p>
<dl>
<dt>新しい順 (デフォルト)</dt>
<dd>リストは開始日順で最新の活動から表示されます。</dd>
<dt>古い順</dt>
<dd>リストは最も古い活動から始まります。</dd>
</ul>';
$string['addactivities.experience_help'] = '<h1>経験</h1>
<p>あなたが活動内容を表示したいCPD経験を選択してください。</p>
<hr>
<h2>詳細</h2><p>あなたが特定のCPD活動に対して時間を登録している場合、ここでその活動を絞り込むことで必要時間数および完了時間数が自動的に表示されます。</p>
<p>情報はテーブルに表示されるため、あなたは追加した詳細すべてを確認できます。あなたの経験の進捗状況をより視覚的に把握したい場合、「CPD概要」セクションをページに配置してください。</p>';
$string['addactivities.category_help'] = '<h1>カテゴリ</h1>
<p>あなたの完了時間を表示したいカテゴリを選択してください。カテゴリを選択しない場合、あなたが選択した経験全体の時間が表示されます。</p>
<hr>
<h2>詳細</h2><p>カテゴリはサブカテゴリをその親カテゴリとグループ化できるよう作成された順で一覧表示されています。ここではそれぞれのカテゴリおよびサブカテゴリを総称して「カテゴリ」と呼びます。</p>';
$string['postsperpage'] = '1ページあたりのエントリ数';
$string['count_desc'] = '1から100までの値を入力してください。';
$string['count_help'] = '<h1>1ページあたりのエントリ数</h1>
<p>あなたが選択した件数よりも多くのエントリがある場合、ページネーションが表示されます。あなたはエントリページ間を移動できます。</p>';
$string['experiencedesctitle'] = '%s 経験要件:';
$string['categorydesctitle'] = '%s カテゴリ要件:';
$string['requirementsminimum'] = '最小時間';
$string['requirementsmaximum'] = '最大時間';
$string['requirementscountable'] = '適正時間';
$string['requirementsreflections'] = '内省';
$string['requirementsoutof'] = '/';
