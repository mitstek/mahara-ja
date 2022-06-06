<?php
/**
 *
 * @package    mahara
 * @subpackage lang (Japanese)
 * @translator Mitsuhiro Yoshida (https://mitstek.com/)
 * @started    2008-01-19 11:25:00 UTC
 * @updated    2018-03-28 03:54:05 UTC
 * @license    https://www.gnu.org/copyleft/gpl.html GNU GPL version 3 or later
 * @copyright  For copyright information on Mahara, please see the README file distributed with this software.
 *
 */

defined('INTERNAL') || die();

$string['Framework'] = 'スマートエビデンスフレームワーク';
$string['frameworknav'] = 'スマートエビデンス';
$string['frameworks'] = 'インストール済みフレームワーク';
$string['frameworkdesc'] = 'あなたのポートフォリオと関連付けたいコンピテンシーフレームワークを選択してください。';
$string['frameworksdesc'] = 'システムにインストールされているフレームワークの一覧です。有効時にコレクションと関連付けられていない限り、無効にされたフレームワークは一覧表示されません。';
$string['taskscompleted'] = 'タスク完了';
$string['addpages'] = 'あなたがスマートエビデンスマップに表示させたい場合、さらにこのコレクションにページを追加できます。';
$string['addframework'] = 'フレームワークを追加する';
$string['frameworkupdated'] = 'フレームワークが更新されました。';
$string['matrixfile'] = 'マトリクスファイル';
$string['matrixfiledesc'] = 'JSONエンコード済みフレームワークを含む.matrixファイルです。';
$string['notvalidmatrixfile'] = 'これは有効な.matrixファイルではありません。';
$string['matrixfilenotfound'] = '有効な.matrixファイルが選択されていません。';
$string['invalidjson'] = 'これは有効な.matrixファイルではありません: JSONコンテンツを構文解析できません。';
$string['jsonmissingvars'] = 'これは有効な.matrixファイルではありません: 「framework」または「framework name」がありません。';
$string['manuallyremovematrices'] = 'インストールディレクトリ「 %s 」は削除できません。手動で削除してください。';
$string['changeframeworkproblems'] = 'あなたはフレームワークを変更できません。次のページにはこのフレームワークと関連付けられたエビデンスがあります:';
$string['accessdeniednoframework'] = 'このコレクションはスマートエビデンスページを表示できません。これには以下のいずれかの理由が考えられます:
<ul>
<li>スマートエビデンスプラグインがインストールまたは有効にされていない。</li>
<li>あなたが属しているインスティテューションではスマートエビデンスが許可されていない。</li>
<li>このコレクションにスマートエビデンスフレームワークが設定されていない。</li>
<li>このコレクションにページが存在しない。</li>
</ul>';
$string['firstviewlink'] = 'コレクションの<a href="%s">最初のページ</a>に移動してください。';
$string['noframeworkselected'] = 'なし';
$string['matrixpointupdated'] = 'スマートエビデンスが更新されました。';
$string['matrixpointinserted'] = 'スマートエビデンスが追加されました。';
$string['standard'] = '標準';
$string['standarddesc'] = 'このエビデンスに該当する標準を選択してください。あなたは標準を検索するためボックスに入力できます。';
$string['annotationclash'] = 'この標準に関してページにすでにアノテーションブロックがあります。';
$string['needtoactivate'] = 'アノテーションプラグインを有効にする必要があります。あなたのサイト管理者にご相談ください。';
$string['studentannotation'] = 'アノテーション:';
$string['assessment'] = '評価';
$string['begun'] = '評価準備完了';
$string['incomplete'] = '標準に合致しない';
$string['partialcomplete'] = '標準に一部合致する';
$string['completed'] = '標準に合致する';
$string['usedincollections'] = 'コレクションで使用済み';
$string['selfassess'] = '自己評価';
$string['uploadframeworkdesc1'] = 'JSONエンコード済みの.matrixファイルをアップロードします。マークアップの例に関して<a href="https://git.mahara.org/mahara/mahara/blob/16.10_STABLE/test/behat/upload_files/example.matrix">Mahara git repository</a>、個別のコンポーネントの例に関して<a href="https://manual.mahara.org/en/16.10/administration/smartevidence.html#create-a-framework-file">Maharaユーザマニュアル</a>をご覧ください。';
$string['savematrix'] = 'マトリクスをアップロードする';
$string['frameworkmissing'] = 'フレームワークは見つかりませんでした。';
$string['activeframework'] = 'フレームワーク有効化';
$string['displaystatusestitle'] = '評価ステータスを表示する';
$string['displaystatusestitledetail'] = 'あなたが表示したい評価ステータスを決定してください。';
$string['upgradeplugin'] = 'これらの設定を有効にするにはSmartEvidenceプラグインをアップグレードする必要があります。';
$string['noannotation'] = 'ページ「 %s 」 (標準エレメント「 %s 」) のアノテーションがありません。';
$string['addannotation'] = '標準「 %s 」のアノテーションをページ「 %s 」に追加する';
$string['assessmenttypecount'] = '標準エレメントを含むページ数';
$string['tabledesc'] = '以下、コレクションのスマートエビデンスマトリクスの構造です。';
$string['standardbegin'] = '標準セクションの先頭';
$string['uncollapsesection'] = '標準「 %s 」のテーブルセクションを表示するにはクリックしてください。';
$string['collapsesection'] = '標準「 %s 」のテーブルセクションを隠すにはクリックしてください。';
$string['collapsedsection'] = 'この標準のテーブルセクションは非表示にされています。';
$string['gonextpages'] = 'スマートエビデンスマトリクスのコレクションのページをさらに表示するには「次へ」ボタンをクリックしてください。';
$string['goprevpages'] = 'スマートエビデンスマトリクスのコレクションの前のページを表示するには「前へ」ボタンをクリックしてください。';
$string['headerelements'] = 'カラムヘッダ: 標準エレメント';
$string['headerreadyforassessmentcount'] = 'カラムヘッダ: 評価準備完了の標準エレメントを含むページ数';
$string['headernotmatchcount'] = 'カラムヘッダ: 未完了の標準エレメントを含むページ数';
$string['headerpartiallycompletecount'] = 'カラムヘッダ: 一部完了済み標準エレメントを含むページ数:';
$string['headercompletedcount'] = 'カラムヘッダ: 完了済み標準エレメントを含むページ数';
$string['headerpage'] = 'カラムヘッダ: ページタイトル';
$string['headerrow'] = '行ヘッダ: 標準エレメント';
$string['showelementdetails'] = '標準エレメント詳細を表示するにはクリックしてください。';
$string['statusdetail'] = 'ページ「 %s 」: %s';

?>
