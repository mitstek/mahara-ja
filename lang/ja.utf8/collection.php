<?php
/**
 *
 * @package    mahara
 * @subpackage lang (Japanese)
 * @translator Mitsuhiro Yoshida (https://mitstek.com/)
 * @started    2008-01-19 11:25:00 UTC
<<<<<<< HEAD
 * @updated    2025-03-25 02:37:51 UTC
=======
 * @updated    2017-10-10 10:29:27 UTC
>>>>>>> 92099ba5d5a5390b497675e7809f65e21f9a5091
 * @license    https://www.gnu.org/licenses/gpl-3.0.html GNU GPL version 3 or later
 * @copyright  For copyright information on Mahara, please see the README file distributed with this software.
 *
 */

defined('INTERNAL') || die();

$string['pluginname'] = 'コレクション';
$string['about'] = 'About';
$string['access'] = 'アクセス';
$string['accesscantbeused'] = 'アクセスオーバーライドは保存されませんでした。選択されたページアクセス (シークレットURL) は複数ページには使用できません。';
$string['accessoverride'] = 'アクセスオーバーライド';
$string['accesssaved'] = 'コレクションアクセスが正常に保存されました。';
$string['accessignored'] = '一部のシークレットURLアクセスタイプは無視されました。';
$string['add'] = '追加';
$string['addviews'] = 'ページを追加する';
$string['addviewstocollection'] = 'ページをコレクションに追加する';
<<<<<<< HEAD
$string['autocopytemplate'] = '現在の自動コピーテンプレート';
$string['autocopytemplatedesc'] = 'このコレクションをすべての新しいアカウントにコピーしたい場合、この設定を有効にしてください (あなたが設定した場合、cronジョブに基づき処理されます)。コレクションのコピーを許可するための共有パーミッションが自動的に設定されます。あなたはテンプレートも「Yes」に設定する必要があります。';
=======
>>>>>>> 92099ba5d5a5390b497675e7809f65e21f9a5091
$string['back'] = '戻る';
$string['cantlistgroupcollections'] = 'あなたはグループコレクションの一覧表示を許可されていません。';
$string['cantlistinstitutioncollections'] = 'あなたはインスティテューションコレクションの一覧表示を許可されていません。';
$string['canteditgroupcollections'] = 'あなたはグループコレクションの編集を許可されていません。';
$string['canteditinstitutioncollections'] = 'あなたはインスティテューションコレクションの編集を許可されていません。';
$string['canteditcollection'] = 'あなたはこのコレクションの編集を許可されていません。';
$string['cantcreatecollection'] = 'あなたはこのコレクションの作成を許可されていません。';
$string['cantdeletecollection'] = 'あなたはこのコレクションを削除できません。';
<<<<<<< HEAD
$string['cantdeletecollectionsubmission'] = '提出状態であるため、あなたはこのコレクションを削除できません。';
$string['canteditdontown'] = 'あなたの所有ではないためこのコレクションを編集できません。';
$string['canteditsubmitted1'] = '評価のために「%s 」提出されているため、あなたはこのコレクションを編集できません。あなたはリリースされるまで待つ必要があります。';
=======
$string['canteditdontown'] = 'あなたの所有ではないためこのコレクションを編集できません。';
$string['canteditsubmitted'] = '評価のため「 %s 」に送信されたため、あなたはこのコレクションを編集できません。あなたはリリースされるまで待つ必要があります。';
>>>>>>> 92099ba5d5a5390b497675e7809f65e21f9a5091
$string['collection'] = 'コレクション';
$string['Collection'] = 'コレクション';
$string['collections'] = 'コレクション';
$string['Collections'] = 'コレクション';
<<<<<<< HEAD
$string['ncollections'] = '%s コレクション';
=======
>>>>>>> 92099ba5d5a5390b497675e7809f65e21f9a5091
$string['groupcollections'] = 'グループコレクション';
$string['institutioncollections'] = 'インスティテューションコレクション';
$string['sitecollections'] = 'サイトコレクション';
$string['collectionaccess'] = 'コレクションアクセス';
$string['collectionaccessrules'] = 'コレクションアクセスルール';
$string['collectionaccesseditedsuccessfully'] = 'コレクションアクセスが正常に保存されました。';
<<<<<<< HEAD
$string['collectioneditaccess1'] = 'あなたはこのコレクション内の %d ページの共有パーミッションを編集しています。';
$string['collectionconfirmdelete1'] = '<p>本当にこのコレクションを削除してもよろしいですか? このコレクション内のすべてのページも削除されます。あなたが個別のページのみ削除したい場合、この操作を中止して該当するページを削除してください。</p>
<p>すべてを削除する前に<a href="%sexport/index.php?collection=%s">エクスポート</a>によるあなたのポートフォリオのバックアップ作成をご検討ください。</p>
<p><strong>注意:</strong> あなたがこのコレクションの削除を決定した場合、あなたがページでリンクしたファイルおよび日誌エントリすべてはまだ利用できます。しかし、ページに置かれたすべてのテキストブロックおよびコメントはページとともに削除されます。</p>';
$string['collectioncreatedsuccessfully'] = 'コレクションが正常に作成されました。';
$string['collectioncreatedsuccessfullyshare'] = 'あなたのコレクションが正常に作成されました。以下のアクセスリンクを使用してあなたのコレクションを他の人と共有してください。';
=======
$string['collectioneditaccess'] = 'あなたにはこのコレクション内の %d 件のページのアクセス権を編集しています。';
$string['collectionconfirmdelete'] = 'このコレクションに登録済みのページは削除されません。本当にこのコレクションを削除してもよろしいですか?';
$string['collectioncreatedsuccessfully'] = 'コレクションが正常に作成されました。';
$string['collectioncreatedsuccessfullyshare'] = 'あなたのコレクションが正常に作成されました。以下のアクセスリンクを使用してあなたのコレクションを他のユーザと共有してください。';
>>>>>>> 92099ba5d5a5390b497675e7809f65e21f9a5091
$string['collectiondeleted'] = 'コレクションが正常に削除されました。';
$string['collectiondescription'] = 'コレクションは相互にリンクして同一のアクセスパーミッションを持つ一連のページです。あなたは好きなだけコレクションを作成できますが、1ページを2つ以上のコレクションには表示できません。';
$string['collectiontitle'] = 'コレクションタイトル';
$string['confirmcancelcreatingcollection'] = 'このコレクションは完了していません。本当にキャンセルしてもよろしいですか?';
$string['continueeditaccess1'] = '続ける: 共有';
$string['collectionsaved'] = 'コレクションが正常に保存されました。';
$string['copyacollection'] = 'コレクションをコピーする';
$string['created'] = '作成';
$string['deletecollection'] = 'コレクションを削除する';
$string['deletespecifiedcollection'] = 'コレクション「 %s 」を削除する';
$string['cannotdeletecollectionduetocopies'] = 'このコレクションを削除できません。%s つの自動コピーされたテンプレートコピーに関連付けられています。';
$string['deletingcollection'] = 'コレクションの削除';
$string['deleteview'] = 'コレクションからページを削除する';
$string['description'] = 'コレクション説明';
$string['collectiondragupdate1'] = '「コレクションに登録済みのページ」にページを移動するには「ページをコレクションに追加する」ボックスからページ名をドラッグするか、チェックボックスをチェックして「ページを追加する」ボタンをクリックしてください。<br>
<<<<<<< HEAD
あなたはページ名をドラッグまたは矢印ボタンを使用することで「コレクションに登録済みのページ」エリアのページを並べ替えることができます。';
=======
あなたはページ名をドラッグまたは矢印ボタンにより「コレクションに登録済みのページ」エリアのページを並べ替えれます。';
>>>>>>> 92099ba5d5a5390b497675e7809f65e21f9a5091
$string['viewsincollection'] = 'コレクションに登録済みのページ';
$string['editcollection'] = 'コレクションを編集する';
$string['editingcollection'] = 'コレクションを編集する';
$string['edittitleanddesc'] = 'タイトルおよび説明を編集する';
$string['editviews'] = 'コレクションページを編集する';
$string['editviewaccess'] = 'ページアクセスを編集する';
$string['editaccess'] = 'コレクションアクセスを編集する';
<<<<<<< HEAD
$string['emptycollectionnoeditaccess1'] = 'あなたは空のコレクションを共有できません。少なくとも1ページを追加してください。';
=======
$string['emptycollectionnoeditaccess'] = 'あなたは空のコレクションのアクセスを編集できません。最初にページを追加してください。';
>>>>>>> 92099ba5d5a5390b497675e7809f65e21f9a5091
$string['emptycollection'] = '空のコレクション';
$string['manage'] = '管理';
$string['manageviews'] = 'ページを管理する';
$string['manageviewsspecific'] = '「 %s 」のページを管理する';
$string['name'] = 'コレクション名';
$string['needtoselectaview'] = 'あなたはコレクションに追加するページを選択する必要があります。';
$string['newcollection'] = '新しいコレクション';
$string['nocollections'] = 'まだコレクションはありません。';
$string['nocollectionsaddone'] = 'まだコレクションはありません。%sコレクションを追加してください%s。';
$string['nooverride'] = 'オーバーライドはありません。';
$string['noviewsavailable'] = '追加できるページはありません。';
<<<<<<< HEAD
$string['noviewsincollection'] = 'コレクションにページはありません。';
$string['noviewsaddsome'] = 'コレクションにページはありません。%sページを追加してください%s。';
$string['noviews'] = 'ページはありません。';
$string['overrideaccess'] = 'アクセスをオーバーライドする';
$string['onlyactivetemplatewarning'] = 'これはこのインスティテューション内のみでの自動コピーテンプレートです。この設定の変更によりテンプレートは新しいアカウントに自動的にコピーされないようになります (あなたが設定した場合、cronジョブに基づき処理されます)。';
$string['updatingautocopytemplatewarning'] = '1つのコレクションのみインスティテューションの有効な自動コピーテンプレートにできます。このコレクションをインスティテューション「 %s 」の自動コピーテンプレートに設定した場合、自動コピーコレクション「 %s 」は無効となります。無効にされた自動コピーコレクションはインスティテューション内で共有されなくなります。';
$string['manageoutcomes'] = 'アウトカムを管理する';
$string['addoutcomelink'] = 'アウトカムを追加する';
$string['confirmdeleteoutcomedb'] = '本当にこのアウトカムを削除してもよろしいですか? あなたはこの操作を元に戻せません。';
$string['confirmdeleteoutcome'] = '本当にこのアウトカムを削除してもよろしいですか? このアウトカムはまだ保存されていません。';
$string['deleteactivitiesfirst'] = '最初に関連する活動ページを削除する必要があります。';
$string['deletefailedoutcome'] = '「アウトカム %s」の削除に失敗しました。';
$string['shorttitle'] = '短いタイトル';
$string['shorttitledesc'] = '短いヘッディングとして使用するためにこのアウトカムの短いタイトルを入力してください。最大半角70文字入力できます。このフィールドは必須です。';
$string['fulltitle'] = 'フルタイトル';
$string['fulltitledesc'] = 'このアウトカムのフルタイトルを入力してください。最大半角255文字入力できます。';
$string['outcometype'] = 'アウトカムタイプ';
$string['outcometypedesc'] = 'このアウトカムのタイプを選択してください。';
$string['outcome'] = 'アウトカム';
$string['outcometitle'] = 'アウトカム %s';
$string['outcomesaveerror'] = 'アウトカム保存中にエラーが発生しました。';
$string['outcomesavesuccess'] = 'アウトカムが正常に保存されました。';
$string['outcomedeleted'] = 'アウトカムが削除されました。';
$string['completeoutcome'] = 'アウトカム「 %s 」が完了しました。';
$string['incompleteoutcomedisabled'] = '「 %s 」アウトカムを完了マークできません。';
$string['completeoutcomeaction'] = 'アウトカム「 %s 」が完了しました。リセットするにはクリックしてください。';
$string['incompleteoutcomeaction'] = 'アウトカム「 %s 」を完了マークする';
$string['deleteoutcome'] = 'アウトカムを削除する';
$string['deletenewoutcome'] = '%s を削除する';
$string['supporttitle'] = 'サポート実施中';
$string['outcomeupdated'] = 'アウトカムが更新されました。';
$string['outcomeupdatefailed'] = 'アウトカムの更新に失敗しました。';
$string['progress'] = '進捗';
$string['markcomplete'] = '本当にこのアウトカムを完了マークしてもよろしいですか?';
$string['markincomplete'] = '本当にこのアウトカムを元に戻して未完了とマークしてもよろしいですか?';
$string['addactivity'] = '活動を追加する';
$string['addactivityfor'] = '活動をアウトカム「 %s 」に追加する';
$string['nooutcomesmessage'] = 'このポートフォリオで定義されたアウトカムはありません。';
$string['nooutcometypes'] = 'このインスティテューションのアウトカムタイプはありません。';
$string['configureoutcomes'] = 'アウトカムを設定する';
$string['ondate'] = '- %s';
$string['manageoutcomesspecific'] = '「 %s 」のアウトカムを管理する';
$string['outcome_progress_description'] = '最大半角255文字まで入力できます。';
$string['activity'] = '活動';
$string['tabledesc'] = 'このアウトカムに含まれるページ';
$string['noactivities'] = 'このアウトカムにはまだ活動はありません。';
$string['completeactivityaction'] = '活動「 %s 」の承認を削除する';
$string['incompleteactivityaction'] = '活動「 %s 」を承認する';
$string['completeactivity'] = '活動「 %s 」が承認されました。';
$string['incompleteactivity'] = '活動「 %s 」は承認が必要です。';
$string['activityupdated'] = '活動ステータスが更新されました。';
$string['activityeupdatefailed'] = '活動ステータスの更新に失敗しました。';
$string['activitysignoffundo'] = 'あなたが「Yes」を選択した場合、活動から承認ステータスが削除されます。';
$string['activitysignoff'] = 'この活動を承認するには「Yes」を選択してください。';
$string['portfoliocompletion'] = 'ポートフォリオ完了';
=======
$string['noviewsaddsome'] = 'コレクションにページはありません。%sページを追加してください%s。';
$string['noviews'] = 'ページはありません。';
$string['overrideaccess'] = 'アクセスをオーバーライドする';
>>>>>>> 92099ba5d5a5390b497675e7809f65e21f9a5091
$string['potentialviews'] = '潜在的なページ';
$string['saveapply'] = '適用して保存する';
$string['savecollection'] = 'コレクションを保存する';
$string['smartevidence'] = 'スマートエビデンス';
<<<<<<< HEAD
$string['smartevidencedesc'] = 'スマートエビデンスフレームワークを管理します。';
$string['template'] = 'テンプレート';
$string['templatedesc'] = 'あなたがこのコレクション内ページをページごとに切り替えなくてもすべてテンプレートにしたい場合、この設定を有効にしてください。テンプレートにコピーされたページも自動的にテンプレートに変更されます。ブロックの削除は自動的に停止されますが、停止を無効にもできます。';
$string['update'] = '更新';
$string['usecollectionname'] = 'コレクション名を使用しますか?';
$string['usecollectionnamedesc'] = 'あなたがブロックタイトルの代わりにコレクション名を使用したい場合、このチェックボックスをチェックしたままにしてください。';
$string['numviewsincollection'] = 'コレクション %s ページ';
$string['viewsaddedtocollection1'] = '%s ページをコレクションに追加する';
$string['viewsaddedtocollection1different'] = '%s ページがコレクションに追加されました。コレクション内すべてのページの共有アクセスが変更されました。';
=======
$string['update'] = '更新';
$string['usecollectionname'] = 'コレクション名を使用しますか?';
$string['usecollectionnamedesc'] = 'あなたがブロックタイトルの代わりにコレクション名を使用したい場合、このチェックボックスをチェックしたままにしてください。';
$string['numviewsincollection'] = 'コレクション内ページ数: %s';
$string['viewsaddedtocollection1'] = '%s ページがコレクションに追加されました。';
$string['viewsaddedtocollection1different'] = '%s ページがコレクションに追加されました。コレクション内ページすべての共有アクセスが変更されました。';
>>>>>>> 92099ba5d5a5390b497675e7809f65e21f9a5091
$string['viewsaddedaccesschanged'] = '次のページのアクセスパーミッションが変更されました:';
$string['viewaddedsecreturl'] = 'シークレットURL経由でパブリックに利用可';
$string['viewcollection'] = 'コレクション詳細を表示する';
$string['viewcount'] = 'ページ';
$string['viewremovedsuccessfully'] = 'ページが正常に削除されました。';
$string['viewnavigation'] = 'ページナビゲーションバー';
$string['viewnavigationdesc'] = 'このコレクション内すべてのページに水平ナビゲーションバーをデフォルトで追加します。';
$string['viewstobeadded'] = '追加されるページ';
$string['viewconfirmremove'] = '本当にこのページをコレクションから削除してもよろしいですか?';
$string['collectioncopywouldexceedquota'] = 'このコレクションのコピーによりあなたのファイルクオータを超過してしまいます。';
<<<<<<< HEAD
$string['outcomeportfolio'] = 'アウトカムポートフォリオ';
$string['outcomeportfoliodesc'] = 'コレクションで管理されるアウトカム付きコレクションを作成します。';
$string['outcomecategory'] = 'アウトカムカテゴリ';
$string['outcomecategorydesc'] = 'あなたがこのポートフォリオで使用したいアウトカムのカテゴリを選択してください。';
$string['outcomecategorymissing'] = '<div class="alert alert-warning">インスティテューション「 %s 」のアウトカムカテゴリがありません。このインスティテューションで使用するアウトカムカテゴリをデータベースに追加してください。アウトカムカテゴリは次のCLIスクリプトで追加できます: populate_outcome_tables.php</div>';
$string['outcomes'] = 'アウトカム';
$string['outcomesoverallcompletion'] = 'アウトカムの総合的完成度';
$string['copiedparticle'] = 'コピー完了 %s';
$string['andparticle'] = 'および %s';
$string['countpages'] = '%d ページ';
$string['countblocks'] = '%d ブロック';
$string['countartefacts'] = '%d アーティファクト';
$string['fromtemplate'] = 'コピー元「 %s 」';
$string['copiedblogpoststonewjournal'] = 'コピーされた日誌投稿は新しい別の日誌に登録されました。';
$string['by'] = 'by';
$string['copycollection'] = 'コレクションをコピーする';
$string['youhavencollections'] = 'あなたには %d コレクションがあります。';
=======
$string['copiedpagesblocksandartefactsfromtemplate'] = '%d ページ、%d ブロックおよび %d アーティファクトを %s からコピーしました。';
$string['copiedblogpoststonewjournal'] = 'コピーされた日誌投稿は新しい別の日誌に登録されました。';
$string['by'] = 'by';
$string['copycollection'] = 'コレクションをコピーする';
$string['youhaveonecollection'] = 'あなたには 1 件の件のコレクションがあります。';
$string['youhavecollections'] = 'あなたには %s 件の件のコレクションがあります。';
>>>>>>> 92099ba5d5a5390b497675e7809f65e21f9a5091
$string['youhavenocollections'] = 'あなたにはコレクションがありません。';
$string['collectionssharedtogroup'] = 'このグループで共有されているコレクション';
$string['nosharedcollectionsyet'] = 'まだこのグループで共有されているコレクションはありません。';
$string['nextpage'] = '次のページ';
$string['prevpage'] = '前のページ';
$string['viewingpage'] = 'あなたの現在地 - ページ';
$string['navtopage'] = 'ページに移動する:';
<<<<<<< HEAD
$string['pageincollectiontitle'] = 'このページはコレクション「 %s 」の一部です。';
$string['overallcompletion'] = '承認および検証の全体的な完了状況';
$string['progresscompletiondesc'] = 'このコレクションの先頭に「ポートフォリオ完了」ページを追加します。';
$string['signedoff'] = '承認済み';
$string['needssignedoff'] = '要承認';
$string['verified'] = '検証済み';
$string['needsverified'] = '要検証';
$string['verification'] = '検証';
$string['progresspage'] = 'ポートフォリオ完了';
$string['progresspagedescription'] = 'コレクションのポートフォリオ完了ページのデフォルトレイアウトをセットアップします。';
$string['progressportfolios'] = 'ポートフォリオカウント';
$string['progressverifiers'] = 'レビュアパーセンテージ';
$string['activitypage'] = '活動ページ';
$string['sharedviewverifiedunchecked'] = '%s (%s) はまだレビューされていません。';
$string['sharedviewverifiedchecked'] = '%s (%s) はレビューされました。';
$string['userhasremovedaccesssubject'] = '%s が「 %s 」へのアクセスを削除しました。';
$string['ownerhasremovedaccesssubject'] = '%s が「 %s 」へのあなたのアクセスを取り消しました。';
$string['revokedbyowner'] = 'オーナがアクセスを取り消しました。';
$string['youhavebeengivenaccess'] = 'あなたには次のアクセスが与えられています';
$string['undoverification'] = 'ステートメントをリセットする';
$string['undoverificationformtitle'] = 'ステートメントをリセットする';
$string['undoverificationdescription'] = 'あなたがリセットしたいステートメントの1つを選択してください。続けた場合、あなたのステートメントのリセットを許可された人に通知されます。リクエストが処理された場合、承認は削除されます。また、あなたはステートメントを再度承認できます。';
$string['reasonforundo'] = 'ステートメントをリセットする理由:';
$string['notifyappointed'] = 'リセットリクエスト';
$string['undoreportsent'] = 'リセットリクエストが送信されました。';
$string['undoreportnotsent'] = 'リセットリクエストは送信されませんでした。リクエスト送信先が存在しません。あなたの管理者にご連絡ください。';
$string['verifiedbyme'] = 'マイステートメント';
$string['verifiedbymedescription'] = 'リセットするステートメントを選択してください。そしてこの変更の理由を提供してください。';
$string['undoreportsubject'] = 'ポートフォリオステートメントのリセットリクエスト';
$string['undoreportmessage'] = 'ステートメント「 %s 」(ポートフォリオ「 %s 」) が承認されました。しかし、承認者 %s はステートメントのリセットを希望しています。';
$string['accessdeniedundo'] = 'ステートメントはすでにリセットされています。これ以上、あなたはポートフォリオにアクセスできません。';
$string['undonesubject'] = 'ステートメントのリセットリクエストレビュー完了';
$string['undonemessage'] = '最初のステートメント承認者からのリクエストにより %s がステートメント「 %s 」(ポートフォリオ「 %s 」) をリセットしました。';
$string['owngrouponlyremovedaccesssubject'] = '「 %s 」へのアクセスが削除されました。';
$string['userhasremovedaccess'] = '%s はポートフォリオ「 %s 」にアクセスできないようになりました。';
$string['userrevokereason'] = '理由は次のとおりです:';
$string['removemyaccess'] = '私のアクセスを削除する';
$string['ownerhasremovedaccess'] = '%s がポートフォリオ「 %s 」へのあなたのアクセスを取り消しました。';
$string['owngrouponlyremovedaccess'] = 'グループメンバシップの変更によりあなたの「 %s 」へのアクセスが削除されました。';
$string['completionpercentage'] = '完了';
$string['revokemyaccessformtitle'] = 'ポートフォリオアクセスを取り消す';
$string['revokemyaccessdescription'] = '続けることにより、あなたはこのポートフォリオ全体へのアクセスを失います。あなたはこのポートフォリオを閲覧または参加できなくなります。このポートフォリオのオーナにはあなたにアクセスがなくなった旨の通知が送信されます。
<br>
あなたは補足メッセージを追加できます。';
$string['revokemyaccessreasontextbox'] = 'メッセージ';
$string['removemyaccesssubmit'] = '続ける';
$string['revokemyaccessconfirm'] = 'あなたは次のアクセスを失います:';
$string['revokemyaccessreason'] = 'メッセージ';
$string['revokemessagesent'] = 'アクセス取り消し';
$string['removemyaccessiconaria'] = '「 %s 」(所有者: %s) への私のアクセスを削除する';
$string['progressnotavailable'] = 'ポートフォリオ「 %s 」(%s) の完了進捗はまだ表示できません。';
$string['verifiednotavailable'] = 'あなたはポートフォリオ「 %s 」(%s) の主ステートメントを承認できません。';
$string['verifiednotavailabledate'] = 'ポートフォリオ「 %s 」(%s) のステートメントは %s 以前には承認できません。';
$string['verificationtobedone'] = 'ポートフォリオ「 %s 」(%s) のステートメントを承認する';
$string['verificationdone'] = 'ポートフォリオ「 %s 」(%s) のステートメント承認済み';
$string['removeaccess'] = 'ポートフォリオ「 %s 」(%s) への私のアクセスを削除する';
$string['lockedcollection'] = '%s までロックする';
$string['linktosubmissionoriginaltitle'] = 'オリジナルポートフォリオ';
$string['linktosubmissionoriginallink'] = '<a href="%s">%s</a>';
$string['linktosubmissionoriginaldeleted'] = '削除済み';
$string['linktosubmissionoriginaldescription'] = 'このポートフォリオは提出を目的として作成されたコピーです。あなたはリンクでオリジナルポートフォリオに移動できます。';
$string['linktosubmissionoriginaldeleteddescription'] = 'このポートフォリオは提出を目的として作成されたコピーです。オリジナルポートフォリオは削除されました。';
=======

?>
>>>>>>> 92099ba5d5a5390b497675e7809f65e21f9a5091
