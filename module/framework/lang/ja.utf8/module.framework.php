<?php
/**
 *
 * @package    mahara
 * @subpackage lang (Japanese)
 * @translator Mitsuhiro Yoshida (https://mitstek.com/)
 * @started    2008-01-19 11:25:00 UTC
 * @updated    2020-03-26 01:59:26 UTC
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
$string['changeframeworkproblems'] = 'あなたはフレームワークを変更できません。次のページには前のフレームワークと関連付けられたエビデンスがあります:';
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
$string['uploadframeworkdesc1'] = 'JSONエンコード済みの.matrixファイルをアップロードします。マークアップの例に関して<a href="https://git.mahara.org/mahara/mahara/blob/16.10_STABLE/test/behat/upload_files/example.matrix">Mahara git repository</a>、個別のコンポーネントの例に関して<a href="https://manual.mahara.org/en/16.10/administration/smartevidence.html#create-a-framework-file">Maharaマニュアル</a>をご覧ください。';
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
$string['copyframework'] = 'コピーするフレームワークを選択する';
$string['copyexistingframework'] = '既存のフレームワークをコピーする';
$string['editframework'] = '編集するフレームワークを選択する';
$string['editsavedframework'] = '保存済みフレームワークを編集する';
$string['editdescription1'] = '編集できるにはフレームワークが無効およびコレクションで現在使用されていない必要があります。';
$string['editdescription2'] = 'フレームワークを編集する場合、あなたはフレームワークの保存済みデータを変更することになります。';
$string['copyframeworkdescription'] = 'あなたはインストール済みフレームワークすべてをコピーおよび新しいフレームワークファイルのベースとして使用できます。';
$string['successmessage'] = 'あなたのフレームワークが送信されました。';
$string['titledesc'] = 'フレームワークのタイトルは短くしてください。タイトルはフレークワークを選択するためのドロップダウンメニューおよびスマートエビデンスページのタイトルとして表示されます。';
$string['instdescription'] = 'このスマートエビデンスフレームワークを使用するインスティテューションを選択してください。あなたは使用するインスティテューションを1つに制限できます。また、すべてのインスティテューションによるアクセスを許可することもできます。';
$string['frameworktitle'] = 'あなたのフレームワークのタイトル';
$string['defaultdescription'] = 'あなたのフレームワークの説明';
$string['descriptioninfo'] = 'フレームワークを説明する詳細情報を記述してください。あなたはシンプルHTMLを使用できます。';
$string['selfassessed'] = '自己評価';
$string['evidencestatuses'] = 'エビデンスステータス';
$string['evidencedesc'] = 'フレームワークの一部がどのように完了しているか示す異なる状態に名称を付けてください。エビデンスの送信を示す「開始」を含む4つのオプションがあります。他の3つは評価ステータスです。';
$string['Begun'] = '開始';
$string['Incomplete'] = '未完了';
$string['Partialcomplete'] = '一部完了';
$string['Completed'] = '完了';
$string['standards'] = '標準';
$string['shortnamestandard'] = '標準カテゴリの省略名です。半角100文字に制限されます。';
$string['titlestandard'] = '標準カテゴリのタイトルです。半角255文字に制限されます。';
$string['descstandard'] = 'この説明はあなたがスマートエビデンスページの標準にホバーした時に表示されます。あなたはシンプルHTMLを使用できます。';
$string['descstandarddefault'] = 'この標準カテゴリの説明';
$string['standardid'] = '標準ID';
$string['standardiddesc'] = 'ここでは整数を指定してください。';
$string['standardiddesc1'] = 'この標準エレメントが含まれる標準を選択してください。';
$string['standardelements'] = '標準エレメント';
$string['standardelement'] = '標準エレメント';
$string['standardelementdesc'] = 'この説明はあなたがスマートエビデンスページでこの標準エレメントにホバーした時に表示されます。これはあなたがこの標準を「アノテーション」ブロックで選択した場合にも表示されます。あなたはシンプルHTMLを使用できます。';
$string['standardelementdefault'] = '標準エレメントの説明';
$string['elementid'] = 'エレメントID';
$string['elementiddesc'] = 'これはこの標準エレメントのIDです。階層を表示するため連続する数字が使用されます。';
$string['invalidjsonineditor'] = '現在のフォームには無効なJSONを含みます。ページをスクロールダウンしてエラー詳細を確認してください。';
$string['validjson'] = '現在のフォームコンテンツは有効であり送信できます。';
$string['moveright'] = '右に移動する';
$string['moveleft'] = '左に移動する';
$string['deletelast'] = '最後を削除する';
$string['deleteall'] = 'すべてを削除する';
$string['selfassesseddescription'] = 'スタッフメンバーが評価を実施できるようにするか (デフォルト)、ポートフォリオ作成者が自己評価の目的で標準を使用して評価ステータスを自分で選択できるようにするか選択してください。';
$string['standardsdescription'] = 'あなたのフレームワークを分けるためのカテゴリを作成します。あなたは後で個別の標準エレメントおよびサブエレメントを標準カテゴリに割り当てることができます。あなたは少なくとも1つのカテゴリを持つ必要があります。';
$string['standardelementsdescription'] = '個別の標準エレメントを作成します。例) コンテンツを割り当てることのできる記述子。必要であれば「親ID」オプションを使用して標準エレメントを階層順にできます。';
$string['parentelementid'] = '親エレメントID';
$string['parentelementdesc'] = '階層内でエレメントを現在の標準エレメントの下に置きたい場合、親として選択してください。';
$string['jsondatanotsubmitted'] = 'あなたのフォームデータはデータベースに送信されませんでした。あなたが入力した情報を別のファイルに保存した後、フォームをリフレッシュして再度試すか、「アップロード」タブを使用して直接JSONをアップロードしてください。';
$string['editor'] = 'エディタ';
$string['Management'] = '管理';
$string['all'] = 'すべて';
$string['removestandardorelementconfirm'] = '本当にこのアイテムを削除してもよろしいですか? あなたがこのアイテムを削除した場合、関連する標準エレメントも削除されます。';

?>
