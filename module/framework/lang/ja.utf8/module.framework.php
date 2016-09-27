<?php
/**
 *
 * @package    mahara
 * @subpackage lang (Japanese)
 * @translator Mitsuhiro Yoshida (http://mitstek.com/)
 * @started    2008-01-19 11:25:00 UTC
 * @updated    2016-09-27 15:32:23 UTC
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL version 3 or later
 * @copyright  For copyright information on Mahara, please see the README file distributed with this software.
 *
 */

defined('INTERNAL') || die();

$string['Framework'] = 'スマートエビデンスフレームワーク';
$string['frameworknav'] = 'スマートエビデンス';
$string['frameworks'] = 'インストール済みスマートエビデンス';
$string['frameworkdesc'] = 'あなたのポートフォリオと関連付けたいコンピテンシーフレームワークを選択してください。';
$string['frameworksdesc'] = 'システムにインストールされているフレームワークの一覧です。有効時にコレクションと関連付けられていない限り、無効にされたフレームワークは一覧表示されません。';
$string['taskscompleted'] = 'タスク完了';
$string['addpages'] = 'あなたがスマートエビデンスマップに表示させたい場合、さらにこのコレクションにページを追加することができます。';
$string['addframework'] = 'フレームワークを追加する';
$string['frameworkupdated'] = 'フレームワークが更新されました。';
$string['matrixfile'] = 'マトリックスファイル';
$string['matrixfiledesc'] = 'JSONエンコード済みフレームワークを含む「.matrix」ファイルです。';
$string['notvalidmatrixfile'] = 'これは有効な「.matrix」ファイルではありません。';
$string['invalidjson'] = 'これは有効な「.matrix」ファイルではありません。JSONコンテンツを構文解析できません。';
$string['jsonmissingvars'] = 'これは有効な「.matrix」ファイルではありません。「フレームワーク」または「フレームワーク名」がありません。';
$string['manuallyremovematrices'] = 'インストールディレクトリ「 %s 」を削除することはできません。手動で削除してください。';
$string['changeframeworkproblems'] = 'あなたはフレームワークを変更できません。次のページにはこのフレームワークと関連付けられたエビデンスがあります:';
$string['accessdeniednoframework'] = 'このコレクションはスマートエビデンスページを表示できません。これは次の理由が考えられます:
<ul>
<li>スマートエビデンスプラグインがインストールまたは有効にされていない。</li>
<li>あなたが属しているインスティテューションではスマートエビデンスが許可されていない。</li>
<li>このコレクションではスマートエビデンスフレームワークが設定されていない。</li>
<li>このコレクションにページが存在しない。</li>
</ul>';
$string['firstviewlink'] = 'コレクションの<a href="%s">最初のページ</a>に移動してください。';
$string['noframeworkselected'] = 'なし';
$string['matrixpointupdated'] = 'スマートエビデンスが更新されました。';
$string['matrixpointinserted'] = 'スマートエビデンスが追加されました。';
$string['standard'] = '標準';
$string['standarddesc'] = 'このエビデンスに該当する標準を選択してください。あなたは標準を探すためにボックスに入力することができます。';
$string['annotationclash'] = 'この標準に関してページにすでにアノテーションブロックがあります。';
$string['needtoactivate'] = 'アノテーションプラグインを有効にする必要があります。あなたのサイト管理者にご相談ください。';
$string['studentannotation'] = 'アノテーション:';
$string['assessment'] = '評価';
$string['begun'] = '評価準備完了';
$string['incomplete'] = '標準に合致しない';
$string['partialcomplete'] = '一部標準に合致する';
$string['completed'] = '標準に合致する';
$string['usedincollections'] = 'コレクションで使用済み';
$string['selfassess'] = '自己評価';
$string['uploadframeworkdesc'] = 'JSONエンコード済みの.matrixファイルをアップロードします。マークアップ例に関して<a href="https://git.mahara.org/mahara/mahara/blob/master/test/behat/upload_files/example.matrix">Mahara git repository</a>をご覧ください。';
$string['savematrix'] = 'マトリックスをアップロードする';
$string['frameworkmissing'] = 'フレームワークが見つかりませんでした。';

?>
