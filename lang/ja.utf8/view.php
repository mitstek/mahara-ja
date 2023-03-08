<?php
/**
 *
 * @package    mahara
 * @subpackage lang (Japanese)
 * @translator Mitsuhiro Yoshida (https://mitstek.com/)
 * @started    2008-01-19 11:25:00 UTC
 * @updated    2020-10-15 09:33:22 UTC
 * @license    http://www.gnu.org/licenses/gpl-3.0.html GNU GPL version 3 or later
 * @copyright  For copyright information on Mahara, please see the README file distributed with this software.
 *
 */

defined('INTERNAL') || die();

$string['basics'] = '基本';
$string['createview'] = 'ページを作成する';
$string['edittitle'] = 'タイトルを編集する';
$string['edittitleanddescription'] = 'タイトルおよび説明を編集する';
$string['editcontent1'] = '編集';
$string['editcontentandlayout'] = 'コンテンツおよびレイアウトを編集する';
$string['editlayout'] = 'レイアウトを編集する';
$string['editaccess'] = 'アクセスを編集する';
$string['editaccessfor'] = 'アクセスを編集する (ID %s)';
$string['layout'] = 'レイアウト';
$string['manageaccess'] = 'アクセスを管理する';
$string['manageaccessfor'] = '「 %s 」のアクセスを管理する';
$string['managekeys'] = 'シークレットURLを管理する';
$string['managekeysfor'] = '「 %s 」のシークレットURLを管理する';
$string['accessrulesfor'] = '「 %s 」のアクセスルール';
$string['next'] = '次へ';
$string['back'] = '戻る';
$string['title'] = 'ページタイトル';
$string['undo'] = '元に戻す';
$string['viewurl'] = 'ページURL';
$string['viewurldescription'] = 'あなたのページの読みやすいURLです。このフィールドの長さは半角3-100文字にしてください。';
$string['userviewurltaken'] = 'このURLはすでに取得されています。別のURLを選択してください。';
$string['description'] = 'ページ説明';
$string['settings'] = '設定';
$string['startdate'] = 'アクセス開始日時';
$string['stopdate'] = 'アクセス終了日時';
$string['skin'] = 'スキン';
$string['overrideconflict'] = '1つまたはそれ以上のパーミッションが日付のオーバーライドと衝突しています。これらのアクセスパーミッションは日付のオーバーライド外では有効ではありません。';
$string['pagepartofcollection'] = 'あなたのページはコレクション「 %s 」の一部です。あなたがこのページに設定したパーミッションはコレクション全体に適用されます。';
$string['stopdatecannotbeinpast1'] = '終了日には過去の日付を設定できません。';
$string['startdatemustbebeforestopdate'] = '開始日は終了日の前に設定してください。';
$string['newstopdatecannotbeinpast'] = '「 %s 」へのアクセス終了日には過去の日付を設定できません。';
$string['newstartdatemustbebeforestopdate'] = '「 %s 」へのアクセス開始日は終了日の前に設定してください。';
$string['unrecogniseddateformat'] = '認識できない日付フォーマット';
$string['allowcommentsonview1'] = 'ユーザがコメントを投稿できるようにします。';
$string['ownerformat'] = '氏名表示フォーマット';
$string['ownerformatdescription'] = '他のユーザがあなたのページを閲覧する場合、あなたの氏名をどのように表示しますか?';
$string['createtags'] = 'タグから作成する';
$string['createtagsdesc1'] = 'あなたのページに自動的にコンテンツを取得するためタグを検索するか入力してください。あなたが2つ以上のタグを入力した場合、すべてのタグがタグ付けされたコンテンツのみページに表示されます。その後、あなたはブロックを再配置および削除できます。';
$string['anonymise'] = '匿名化する';
$string['anonymisedescription'] = 'ページの作成者としてのあなたの氏名を他のユーザから秘匿します。必要であれば管理者はあなたの氏名を確認できます。';
$string['Locked'] = 'ロック';
$string['lockedgroupviewdesc'] = 'あなたがこのページをロックした場合、グループ管理者のみ編集できます。';
$string['profileviewtitle'] = 'プロファイルページ';
$string['dashboardviewtitle'] = 'ダッシュボードページ';
$string['grouphomepageviewtitle'] = 'グループホームページ';
$string['viewname'] = 'ページ名';
$string['templatedashboard'] = 'ダッシュボードテンプレート';
$string['templategrouphomepage'] = 'グループホームページテンプレート';
$string['templateprofile'] = 'プロファイルテンプレート';
$string['templateportfolio'] = 'ページテンプレート';
$string['templateportfoliotitle'] = 'タイトルなし';
$string['templateportfoliodescription'] = 'あなたのユーザが作成するページのデフォルトレイアウトを設定します。あなたはブロックも追加できます。あなたがデフォルトページに追加したコンテンツはユーザが作成するページすべてに表示されることに留意してください。';
$string['artefacts'] = 'アーティファクト';
$string['groupviews'] = 'グループページおよびコレクション';
$string['institutionviews'] = 'インスティテューションページ';
$string['institutionviewscollections'] = 'インスティテューションページおよびコレクション';
$string['reallyaddaccesstoemptyview'] = 'あなたのページにはブロックが含まれていません。本当にこれらのユーザにページのアクセス権を与えますか?';
$string['viewdeleted'] = 'ページが削除されました。';
$string['viewsubmitted'] = 'ページが送信されました。';
$string['deletethisview'] = 'このページを削除する';
$string['submitthisviewto1'] = 'このページを評価のために送信する ->';
$string['submitthiscollectionto1'] = 'このコレクションを評価のために送信する ->';
$string['forassessment1'] = '評価のために送信する';
$string['accessfromdate3'] = '%s 以前、誰もこのページを閲覧できません。';
$string['accessuntildate3'] = '%s 以降、誰もこのページを閲覧できません。';
$string['accessbetweendates3'] = '%s 以前または %s 以降、誰もこのページを閲覧できません。';
$string['artefactsinthisview'] = 'このページのアーティファクト';
$string['whocanseethisview'] = 'このページを閲覧できる人';
$string['pending'] = 'レビュ中のポートフォリオ';
$string['view'] = 'ページ';
$string['panelmenu'] = 'メニュ';
$string['vieworcollection'] = 'ページまたはコレクション';
$string['views'] = 'ページ';
$string['viewsandcollections'] = 'ページおよびコレクション';
$string['View'] = 'ページ';
$string['Views'] = 'ページ';
$string['portfolio'] = 'ポートフォリオ';
$string['portfolios'] = 'ポートフォリオ';
$string['Viewscollections'] = 'ページおよびコレクション';
$string['viewsubmittedtogroup1'] = 'このポートフォリオは<a href="%s">%s</a>に送信されました。';
$string['viewsubmittedtogroupon1'] = 'このポートフォリオは<a href="%s">%s</a>に対して %s に送信されました。';
$string['viewsubmittedtogroupgrade'] = 'このポートフォリオは課題「 <a href="%s">%s</a> 」 (%s) に対して %s に送信されました。';
$string['collectionsubmittedtogroup'] = 'このコレクションは<a href="%s">%s</a>に送信されました。';
$string['collectionsubmittedtogroupon'] = 'このコレクションは<a href="%s">%s</a>に対して %s に送信されました。';
$string['collectionsubmittedtogroupgrade'] = 'このコレクションは課題「 <a href="%s">%s</a> 」 (%s) に対して %s に送信されました。';
$string['submittedpendingrelease'] = 'アーカイブ後のリリース保留中です。';
$string['nobodycanseethisview2'] = 'あなたのみこのページを閲覧できます。';
$string['noviews1'] = 'ページまたはコレクションはありません。';
$string['nviews'] = '%s ページ';
$string['youhavenoviews1'] = 'あなたにはページまたはコレクションはありません。';
$string['youhaventcreatedanyviewsyet'] = 'あなたはまだページを作成していません。';
$string['youhavenviews'] = 'あなたには %d ページがあります。';
$string['viewsownedbygroup'] = 'このグループが所有するページ';
$string['ownedbygroup'] = 'このグループによる所有';
$string['nogroupviewsyet'] = 'このグループにはページはまだありません。';
$string['viewscollectionssharedtogroup'] = 'このグループで共有されているページおよびコレクション';
$string['viewssharedtogroup'] = 'このグループで共有されているページ';
$string['sharedtogroup'] = 'このグループでの共有';
$string['nosharedviewsyet'] = 'このグループで共有されているページはまだありません。';
$string['viewssharedtogroupbyothers'] = '他の人がこのグループと共有しているページ';
$string['sharedviews'] = '共有ページ';
$string['submissionstogroup'] = 'このグループへの送信';
$string['nosubmittedviewscollectionsyet'] = 'このグループに送信されたページまたはコレクションはまだありません。';
$string['nosubmissionsfrom'] = 'グループに送信していないメンバ';
$string['submittogroup'] = 'このグループにページまたはコレクションを送信する';
$string['yoursubmissions'] = 'あなたの送信';
$string['youhavesubmitted'] = 'あなたはこのグループに <a href="%s">%s</a> を送信しました。';
$string['youhavesubmittedon'] = 'あなたはこのグループに <a href="%s">%s</a> を %s に送信しました。';
$string['listedinpages'] = 'ページ内一覧';
$string['public'] = 'パブリック';
$string['registeredusers'] = '登録済みユーザ';
$string['friends'] = 'フレンド';
$string['groups'] = 'グループ';
$string['users'] = 'ユーザ';
$string['friend'] = 'フレンド';
$string['group'] = 'グループ';
$string['user'] = 'ユーザ';
$string['everyoneingroup'] = 'グループ内全員';
$string['nospecialrole'] = '特別ロールなし';
$string['peer'] = 'ピア';
$string['manager'] = 'マネージャ';
$string['peermanager'] = 'ピアおよびマネージャ';
$string['token'] = 'シークレットURL';
$string['editsecreturlaccess'] = 'シークレットURLアクセスを編集する';
$string['editsecreturlaccessfor'] = 'シークレットURLアクセスを編集する (ID %s)';
$string['newsecreturl'] = '新しいシークレットURL';
$string['reallydeletesecreturl'] = '本当にこのURLを削除してもよろしいですか?';
$string['secreturldeleted'] = 'あなたのシークレットURLが削除されました。';
$string['secreturlupdated'] = 'シークレットURLが更新されました。';
$string['generatesecreturl'] = '「 %s 」の新しいシークレットURLを生成します。';
$string['secreturls'] = 'シークレットURL';
$string['existingURLS'] = '既存のURL';
$string['publicaccessnotallowed'] = 'あなたのインスティテューションまたはサイト管理者がパブリックページおよびシークレットURLを無効にしました。あなたがここで閲覧できるシークレットURL一覧すべては現在休止中です。';
$string['publicaccessnotallowedforprobation'] = '申し訳ございません、新しく登録されたユーザはシークレットURLの作成を許可されていません。';
$string['inviteusertojoingroup'] = 'このユーザをグループへの参加に招待する';
$string['addusertogroup'] = 'このユーザをグループに追加する';
$string['addedtowatchlist'] = 'このページがあなたのウォッチリストに追加されました。';
$string['attachment'] = '添付ファイル';
$string['removedfromwatchlist'] = 'このページがあなたのウォッチリストから削除されました。';
$string['addtowatchlist'] = 'ページをウォッチリストに追加する';
$string['removefromwatchlist'] = 'ページをウォッチリストから削除する';
$string['addtowatchlistartefact'] = 'ページ「 %s 」をウォッチリストに追加する';
$string['removefromwatchlistartefact'] = 'ページ「 %s 」をウォッチリストから削除する';
$string['alreadyinwatchlist'] = 'このページはすでにあなたのウォッチリストにあります。';
$string['attachedfileaddedtofolder'] = '添付ファイル「 %s 」があなたの「 %s 」フォルダに追加されました。';
$string['date'] = '日時';
$string['print'] = '印刷';
$string['viewobjectionableunmark'] = 'ページ「 %s 」またはその中に好ましくないコンテンツが含まれていると報告されています。好ましくないコンテンツが含まれていない場合、あなたはボタンをクリックしてこの注意を取り除いた上で他の管理者に通知できます。';
$string['viewunobjectionablesubject'] = 'ページ %s が %s によって好ましくないものではないとマークされました。';
$string['viewunobjectionablebody'] = '% (%s) が %s によって確認され好ましくないコンテンツは含まれていないとマークされました。';
$string['updatewatchlistfailed'] = 'ウォッチリストの更新に失敗しました。';
$string['watchlistupdated'] = 'あなたのウォッチリストが更新されました。';
$string['viewvisitcount'] = 'アクセス数: %s (%s - %s)';
$string['profilenotshared'] = 'このユーザプロファイルへのフルアクセスは制限されています。';
$string['profileicon'] = 'プロファイル画像';
$string['Updatedon'] = '更新日時:';
$string['Createdon'] = '作成日時:';
$string['Added'] = '追加済み';
$string['share'] = '共有';
$string['sharedbyme'] = '私からの共有';
$string['sharewith'] = '共有対象';
$string['whosharewith'] = '誰と共有しますか?';
$string['accesslist'] = 'アクセスリスト';
$string['defaultaccesslistmessage'] = 'あなた以外、あなたの選択されたページおよびコレクションを閲覧できません。アクセス権を与えるにはユーザを追加してください。';
$string['sharewithmygroups'] = 'マイグループと共有する';
$string['sharewithmyinstitutions'] = 'マイインスティテューションと共有する';
$string['sharewithusers'] = 'ユーザと共有する';
$string['shareview1'] = '共有';
$string['sharedwithothers'] = '他の人と共有する';
$string['moreoptions'] = '高度なオプション';
$string['moreinstitutions'] = 'さらにインスティテューションを表示する';
$string['allviews'] = 'すべてのページ';
$string['addaccess'] = '「 %s 」へのアクセスを追加する';
$string['addaccessinstitution'] = 'インスティテューション「 %s 」へのアクセスを追加する';
$string['addaccessgroup'] = 'グループ「 %s 」へのアクセスを追加する';
$string['submitconfirm'] = '評価のために「 %s 」を「 %s 」に送信した場合、チュータが評価を終えるまであなたはコンテンツを編集できません。本当に今すぐ送信してもよろしいですか?';
$string['collectionsubmitted'] = 'コレクションが送信されました。';
$string['collectionviewsalreadysubmitted'] = 'このコレクション内のページはすでに送信されています: 「 %s 」
リリースまたはコレクションから削除されるまであなたはコレクションを送信できません。';
$string['viewalreadysubmitted'] = 'このページはすでに別の課題またはグループに送信されています。';
$string['collectionalreadysubmitted'] = 'このコレクションはすでに別の課題またはグループに送信されています。';
$string['collectionsubmissionexceptiontitle'] = 'コレクションを送信できませんでした。';
$string['collectionsubmissionexceptionmessage'] = '以下の理由からこのコレクションを送信できません:';
$string['cantsubmitemptycollection'] = 'このコレクションにはページが含まれていません。';
$string['viewsubmissionexceptiontitle'] = 'ページを送信できませんでした。';
$string['viewsubmissionexceptionmessage'] = '以下の理由からこのページを送信できません:';
$string['submitviewtogroup'] = '評価のため「 %s 」を「 %s 」に送信する';
$string['cantsubmitviewtogroup'] = 'あなたは評価を目的としてこのページをこのグループに送信できません。';
$string['cantsubmitcollectiontogroup'] = 'あなたはこのコレクションを送信できません。';
$string['cantsubmittogroup'] = 'あなたはこのグループに送信できません。';
$string['cantdeleteview'] = 'あなたはこのページを削除できません。';
$string['deletespecifiedview'] = 'ページ「 %s 」を削除する';
$string['deleteviewconfirm1'] = '本当にこのページを削除してもよろしいですか? 元に戻せません。';
$string['deleteviewconfirmbackup'] = '<a href="%sexport/">エクスポート</a>によるこのページのバックアップ作成をご検討ください。';
$string['deleteviewconfirmnote3'] = '<strong>注意:</strong> あなたがこのページでリンクしたファイルおよび日誌エントリすべてはまだ利用可能です。<br />しかし、このページに投稿されたコメントはすべて削除されます。';
$string['deleteviewconfirmnote2'] = 'このページはコレクション<a href="%s">「 %s 」</a>の一部です。';
$string['editaccesspagedescription6'] = 'デフォルトではあなたのページおよびコレクションをあなたのみ閲覧できます。このページではあなたに加えて誰がポートフォリオにアクセスできるか決定します。';
$string['editaccessdescription'] = 'あなたは複数アイテムをチェックボックスで選択して同じ設定にできます。選択完了後、続けるにはスクロールダウンして「保存」をクリックしてください。';
$string['editaccessgrouppagedescription'] = 'デフォルトではページおよびコレクションを追加および編集できるグループメンバのみグループコレクションおよびページを閲覧できます。あなたは複数アイテムをチェックボックスで選択して同じ設定にできます。選択完了後、続けるにはスクロールダウンして「保存」をクリックしてください。';
$string['editaccessinstitutionpagedescription'] = 'デフォルトではあなたのインスティテューションコレクションおよびページはあなたのインスティテューション管理者のみ閲覧できます。あなたは複数アイテムをチェックボックスで選択して同じ設定にできます。選択完了後、続けるにはスクロールダウンして「保存」をクリックしてください。';
$string['editaccesssitepagedescription'] = 'デフォルトではサイトコレクションおよびページはサイト管理者のみ閲覧できます。あなたは複数アイテムをチェックボックスで選択して同じ設定にできます。選択完了後、続けるにはスクロールダウンして「保存」をクリックしてください。';
$string['editsecreturlsintable'] = '個別に生成する必要があるためこのページでは<b>シークレットURL</b>を設定できません。シークレットURLを設定するには<a href="%s">コレクションおよびページの一覧</a>に戻ってください。';
$string['editaccessinvalidviewset'] = '無効な一連のページおよびコレクションのアクセスを編集しようとしました。';
$string['overridingstartstopdate'] = '開始/終了日のオーバーライド';
$string['overridingstartstopdatesdescription'] = '必要であれば、あなたは開始日および終了日をオーバーライドできます。仮に他のアクセス権を与えたとしても、他の人は開始日以前および終了日以降にあなたのページを閲覧できません。';
$string['emptylabel'] = 'このラベルのテキストを入力するにはここをクリックしてください。';
$string['empty_block'] = 'ここに配置するアーティファクトを左側のツリーより選択してください。';
$string['viewinformationsaved'] = 'ページ情報が正常に保存されました。';
$string['canteditdontown'] = 'あなたの所有ではないためこのページを編集できません。';
$string['canteditsubmitted'] = '評価を目的として %s に送信されたため、あなたはこのページを編集できません。あなたはチュータがページをリリースするまで待つ必要があります。';
$string['Submitted'] = '送信済み';
$string['submittedforassessment'] = '評価のため送信済み';
$string['blocknotinview'] = 'ID「 %d 」のブロックはページにありません。';
$string['viewcreatedsuccessfully'] = 'ページが正常に作成されました。';
$string['viewaccesseditedsuccessfully'] = 'ページアクセスが正常に保存されました。';
$string['viewsavedsuccessfully'] = 'ページが正常に保存されました。';
$string['savedtotimeline'] = 'タイムラインに保存されました。';
$string['updatedaccessfornumviews1'] = '%d ページのアクセスルールが更新されました。';
$string['cantversionviewinvalid'] = '提供されたページIDが有効ではありません。';
$string['cantversionvieweditpermissions'] = 'あなたにはこのページを編集するパーミッションがありません。';
$string['cantversionviewsubmitted'] = '評価を目的として送信されたため、あなたはこのページを編集できません。あなたはリリースされるまで待つ必要があります。';
$string['cantversionviewgroupeditwindow'] = 'あなたはこのページを編集できません。グループ編集可能期間外です。';
$string['cantversionoldlayout'] = 'あなたは古いレイアウトのタイムラインバージョンのページを保存できません。あなたは新しいグリッドレイアウトに変換する必要があります。変換するには単にページを編集してください。レイアウトが変換されます。';
$string['cantaddannotationinoldlayout'] = 'あなたはこのページにアノテーションを追加できません。最初にページを編集してページレイアウトを変換してください。';
$string['invalidcolumn'] = 'カラム %s は範囲外です。';
$string['confirmcancelcreatingview'] = 'このページは作成完了していません。本当にキャンセルしてもよろしいですか?';
$string['groupviewurltaken'] = 'このURLのページはすでに存在します。';
$string['editblockspagedescription'] = '<p>あなたのページを作成するには以下のボタンよりブロックを選択してドラッグ&ドロップしてください。</p>';
$string['displayview'] = 'ページを表示する';
$string['editthisview'] = '編集';
$string['expandcontract'] = 'ブロックタイプ一覧を展開/折りたたむ';
$string['returntoviews'] = 'ページおよびコレクションに戻る';
$string['returntoinstitutionportfolios'] = 'インスティテューションページおよびコレクションに戻る';
$string['returntositeportfolios'] = 'サイトページおよびコレクションに戻る';
$string['success.addblocktype'] = 'ブロックが正常に追加されました。';
$string['err.addblocktype'] = 'あなたのページにブロックを追加できませんでした。';
$string['success.moveblockinstance'] = 'ブロックが正常に移動されました。';
$string['err.moveblockinstance'] = '指定されたポジションにブロックを移動できませんでした。';
$string['success.removeblockinstance'] = 'ブロックが正常に削除されました。';
$string['err.removeblockinstance'] = 'ブロックを削除できませんでした。';
$string['success.addcolumn'] = 'カラムが正常に追加されました。';
$string['err.addcolumn'] = '新しいカラムの追加に失敗しました。';
$string['success.removecolumn'] = 'カラムが正常に削除されました。';
$string['err.removecolumn'] = 'カラムの削除に失敗しました。';
$string['success.changetheme'] = 'テーマが正常に更新されました。';
$string['err.changetheme'] = 'テーマを更新できませんでした。';
$string['confirmdeleteblockinstance'] = '本当にこのブロックを削除してもよろしいですか?';
$string['blockinstanceconfiguredsuccessfully'] = 'ブロックが正常に設定されました。';
$string['blockconfigurationrenderingerror'] = 'ブロックを表示できなかったため設定に失敗しました。';
$string['blocksintructionnoajax'] = 'あなたのページに追加するブロックおよび場所を選択してください。あなたはタイトルバーの矢印ボタンを使ってブロックの配置を変更できます。';
$string['blocksinstructionajaxlive1'] = 'このエリアではあなたのページがどのように見えるのかプレビュを表示しています。変更は自動的に保存されます。<br />ブロックを追加するには「新しいブロックを追加する」をページにドラッグしてください。その後、あなたはそれがどのタイプのブロックであるか選択できます。あなたはページ内でブロックをドラッグして位置を変更することもできます。';
$string['blockchangedsuccess'] = 'プレースホルダブロックを「 %s 」ブロックに正常に変更しました。';
$string['blockchangederror'] = '「 %s 」ブロックへの変更に失敗しました。';
$string['blockchangedbacksuccess'] = 'ブロックをプレースホルダブロックに戻しました。';
$string['blockchangedbackerror'] = 'ブロックをプレースホルダブロックに戻せませんでした。';
$string['addblock'] = 'ブロックを追加する: %s';
$string['blockcell'] = 'セル';
$string['blockorder'] = 'ポジション';
$string['rownr'] = '行 %s';
$string['nrrows'] = '%s 行';
$string['addnewblock'] = 'ドラッグして新しいブロックを追加する';
$string['addnewblockaccessibility'] = 'クリックして新しいブロックを追加する';
$string['addnewblockhere'] = 'ここに新しいブロックを追加する';
$string['add'] = '追加';
$string['addcolumn'] = 'カラムを追加する';
$string['remove'] = '削除';
$string['removecolumn'] = 'このカラムを削除する';
$string['moveblock2'] = 'ブロックを移動する';
$string['moveblock'] = '%s ブロックを移動する';
$string['movethisblock'] = 'このブロックを移動する';
$string['Configure'] = '設定';
$string['configureblock2'] = 'ブロックを設定する';
$string['configureblock1'] = '%s ブロックを設定する (ID %s)';
$string['configurethisblock1'] = 'このブロックを設定する (ID %s)';
$string['closeconfiguration'] = '設定を閉じる';
$string['removeblock2'] = 'ブロックを削除する';
$string['removeblock1'] = '%s ブロックを削除する (ID %s)';
$string['removethisblock1'] = 'このブロックを削除する (ID %s)';
$string['blocktitle'] = 'ブロックタイトル';
$string['celltitle'] = 'セル';
$string['basicoptions'] = '基本オプション';
$string['advancedoptions'] = '高度なオプション';
$string['Row'] = '行';
$string['layoutpreviewimage'] = 'レイアウトプレビュイメージ';
$string['Help'] = 'ヘルプ';
$string['blockhelp'] = 'ブロックヘルプ';
$string['by'] = 'by';
$string['viewtitleby'] = '%s by <a href="%s">%s</a>';
$string['viewauthor'] = 'by <a href="%s">%s</a>';
$string['in'] = '-';
$string['noblocks'] = '申し訳ございません、このカテゴリにブロックはありません。';
$string['timeofsubmission'] = '送信日時';
$string['column'] = 'カラム';
$string['row'] = '行';
$string['columns'] = 'カラム';
$string['rows'] = '行';
$string['blocktypecategory.external'] = '外部';
$string['blocktypecategory.fileimagevideo'] = 'メディア';
$string['blocktypecategory.general'] = '一般';
$string['blocktypecategory.internal'] = '個人情報';
$string['blocktypecategorydesc.external'] = '外部オプションを表示するにはクリックしてください。';
$string['blocktypecategorydesc.fileimagevideo'] = 'メディアオプションを表示するにはクリックしてください。';
$string['blocktypecategorydesc.general'] = '一般オプションを表示するにはクリックしてください。';
$string['blocktypecategorydesc.internal'] = '個人情報オプションを表示するにはクリックしてください。';
$string['blocktypecategorydesc.blog'] = '日誌オプションを表示するにはクリックしてください。';
$string['notitle'] = 'タイトルなし';
$string['clickformoreinformation1'] = '詳細情報を表示およびコメントを投稿するにはクリックしてください。';
$string['detailslinkalt'] = '(詳細)';
$string['Browse'] = '閲覧';
$string['Search'] = '検索';
$string['noartefactstochoosefrom'] = '申し訳ございません、選択するアーティファクトはありません。';
$string['access'] = 'アクセス';
$string['noaccesstoview'] = 'あなたにはこのページにアクセスするパーミッションがありません。';
$string['wrongblocktype'] = '提供されたIDは有効なブロックのものではありません。';
$string['changeviewtheme'] = 'あなたがこのページに選択したテーマは廃止されています。別のテーマを選択してください。';
$string['nothemeselected1'] = 'インスティテューションテーマを使用する';
$string['Template'] = 'テンプレート';
$string['allowcopying'] = 'コピーを許可する';
$string['retainviewrights1'] = 'ページまたはコレクションのコピー時にページアクセスを保持する';
$string['templatedescriptionplural2'] = 'あなたが選択したページまたはコレクションにユーザがアクセスできる場合、そのユーザは自分のコピーを作成できます。';
$string['retainviewrightsdescription2'] = '他のユーザによりコピーされたページまたはコレクションからあなたが選択したものを閲覧できるようアクセス権を与えます。希望すればコピー後にユーザが閲覧アクセスを無効にできます。このページまたはコレクションのコピーからコピーされたページまたはコレクションが同じアクセス権を保持することはありません。';
$string['retainviewrightsgroupdescription2'] = '他のユーザがコピーしたページまたはコレクションの中から選択したものをこのグループのメンバが閲覧できるようアクセス権を与えます。希望すればコピー後にユーザが閲覧アクセスを無効にできます。このページまたはコレクションのコピーからコピーされたページまたはコレクションが同じアクセス権を保持することはありません。';
$string['choosetemplatepageandcollectiondescription'] = '<p>ここでは新しいページ作成の出発点としてあなたがコピーを許可されているページを検索できます。あなたはページの名称をクリックしてそれぞれのページのプレビュを表示できます。あなたがコピーしたいページを見つけた場合、ページのコピーを作成するため該当する「ページをコピーする」ボタンをクリックしてコピーされたページの修正を開始してください。あなたは関連する「コレクションをコピーする」ボタンをクリックしてページが属しているコレクション全体をコピーできます。</p>';
$string['choosetemplategrouppageandcollectiondescription'] = '<p>ここでは新しいページ作成の出発点としてこのグループがコピーを許可されているページを検索できます。あなたはページの名称をクリックしてそれぞれのページのプレビュを表示できます。あなたがコピーしたいページを見つけた場合、ページのコピーを作成するため該当する「ページをコピーする」ボタンをクリックしてコピーされたページの修正を開始してください。あなたは関連する「コレクションをコピーする」ボタンをクリックしてページが属しているコレクション全体をコピーできます。</p><p><strong>注意:</strong> 現在、日誌、日誌エントリ、プランおよびレジュメ情報をグループでコピーできません。</p>';
$string['choosetemplateinstitutionpageandcollectiondescription'] = '<p>ここでは新しいページ作成の出発点としてこのインスティテューションがコピーを許可されているページを検索できます。あなたはページの名称をクリックしてそれぞれのページのプレビュを表示できます。あなたがコピーしたいページを見つけた場合、ページのコピーを作成するため該当する「ページをコピーする」ボタンをクリックしてコピーされたページの修正を開始してください。あなたは関連する「コレクションをコピーする」ボタンをクリックしてページが属しているコレクション全体をコピーできます。</p><p><strong>注意:</strong> 現在、日誌、日誌エントリ、プランおよびレジュメ情報をインスティテューションでコピーできません。</p>';
$string['choosetemplatesitepageandcollectiondescription1'] = '<p>ここでは新しいページ作成の出発点としてサイトレベルでコピー可能なページを検索できます。あなたはページの名称をクリックしてそれぞれのページのプレビュを表示できます。あなたがコピーしたいページを見つけた場合、ページのコピーを作成するため該当する「ページをコピーする」ボタンをクリックしてコピーされたページの修正を開始してください。あなたは関連する「コレクションをコピーする」ボタンをクリックしてページが属しているコレクション全体をコピーできます。</p><p><strong>注意:</strong> 現在、日誌、日誌エントリ、プランおよびレジュメ情報をサイトレベルのページでコピーできません。</p>';
$string['copiedblocksandartefactsfromtemplate'] = '%d 個のブロックおよび %d 件のアーティファクトを %s からコピーしました。';
$string['filescopiedfromviewtemplate'] = '%s からコピーされたファイル';
$string['viewfilesdirname'] = 'ページファイル';
$string['viewfilesdirdesc'] = 'コピーされたページのファイル';
$string['thisviewmaybecopied'] = 'コピーが許可されています。';
$string['thisviewmaynotbecopied'] = 'コピーは許可されていません。';
$string['copythisview'] = 'このページをコピーする';
$string['copyview'] = 'ページをコピーする';
$string['createemptyview'] = '空のページを作成する';
$string['copyaview'] = 'ページをコピーする';
$string['copyvieworcollection'] = 'ページまたはコレクションをコピーする';
$string['confirmaddtitle'] = 'ページまたはコレクションを作成する';
$string['confirmadddesc'] = 'あなたが作成したいものを選択してください:';
$string['confirmcopytitle'] = 'コピーを確認する';
$string['confirmcopydesc'] = 'あなたがコピーしたいものを選択してください:';
$string['Untitled'] = 'タイトルなし';
$string['copyforexistingmembersprogress'] = 'ポートフォリオを既存のグループメンバにコピーする';
$string['existinggroupmembercopy'] = '既存のグループメンバにコピーする';
$string['existinggroupmembercopydesc1'] = '選択されたページ/コレクションを既存のすべてのグループメンバの個人ポートフォリオエリアにコピーします。保存後、スライドスイッチはリセットされます。グループメンバはコピーを1回のみ取得します。';
$string['copyfornewusers'] = '新しいユーザにコピーする';
$string['copyfornewusersdescription2'] = '新しいユーザが作成された場合、選択したページまたはコレクションをユーザのアカウント内にパーソナルコピーとして自動作成します。選択したページまたはコレクションをこれらのユーザが後で同様にコピーできるようにしたい場合、コピーを許可してください。';
$string['copyfornewmembers'] = '新しいインスティテューションメンバにコピーする';
$string['copyfornewmembersdescription2'] = '%s のすべての新しいメンバに対して選択したページまたはコレクションのパーソナルコピーを自動作成します。選択したページまたはコレクションをこれらのユーザが後で同様にコピーできるようにしたい場合、コピーを許可してください。';
$string['copyfornewgroups'] = '新しいグループにコピーする';
$string['copyfornewgroupsdescription1'] = '選択したページおよびコレクションを以下のロールの新しいグループすべてにコピーします:';
$string['owner'] = 'オーナ';
$string['Owner'] = 'オーナ';
$string['owners'] = 'オーナ';
$string['show'] = '表示';
$string['searchviewsbyowner'] = 'ページをオーナで検索します:';
$string['selectaviewtocopy'] = 'あなたがコピーしたいページを選択してください:';
$string['listviews'] = 'ページを一覧表示する';
$string['nocopyableviewsfound'] = 'あなたがコピーできるページはありません。';
$string['noownersfound'] = 'オーナは見つかりませんでした。';
$string['Preview'] = 'プレビュ';
$string['viewscopiedfornewusersmustbecopyable'] = 'あなたは新しいユーザにページがコピーされるよう設定する前にページのコピーを許可する必要があります。';
$string['viewswithretainviewrightsmustbecopyable'] = 'あなたはページが閲覧アクセスを保持するよう設定する前にページのコピーを許可する必要があります。';
$string['viewscopiedfornewgroupsmustbecopyable'] = 'あなたは新しいグループがページをコピーできるよう設定する前にページのコピーを許可する必要があります。';
$string['copynewusergroupneedsloggedinaccess'] = '新しいユーザまたはグループにコピーされるページに関してログインユーザにアクセス権を与える必要があります。';
$string['viewcopywouldexceedquota'] = 'このページを追加した場合、あなたのファイルクオータを越えてしまいます。';
$string['viewcreatewouldexceedquota'] = 'このページを作成した場合、あなたのファイルクオータを越えてしまいます。';
$string['blockcopypermission'] = 'ブロックのコピーパーミッション';
$string['blockcopypermissiondesc'] = 'このページを他のユーザがコピーできるようにした場合、あなたはこのブロックをどのようにコピーできるか選択できます。';
$string['defaultsort'] = 'アルファベット順';
$string['latestcreated'] = '作成日時';
$string['latestmodified'] = '最終更新日時';
$string['latestviewed'] = '最終閲覧日時';
$string['mostvisited'] = '閲覧回数';
$string['mostcomments1'] = 'コメント数';
$string['dashboard'] = 'ダッシュボード';
$string['Profile'] = 'プロファイル';
$string['profile'] = 'プロファイル';
$string['Portfolio'] = 'ポートフォリオ';
$string['Portfolios'] = 'ポートフォリオ';
$string['Grouphomepage'] = 'グループホームページ';
$string['grouphomepage'] = 'グループホームページ';
$string['grouphomepagedescription'] = 'グループホームページにはこのグループのAboutタブに表示されるコンテンツを含みます。';
$string['pageaccessrules'] = 'ページアクセスルール';
$string['sharedwithme'] = '私への共有';
$string['titleanddescription'] = 'タイトル、説明、タグ';
$string['titleanddescriptionnotags'] = 'タイトル、説明';
$string['titleanddescriptionandtagsandowner'] = 'タイトル、説明、タグ、オーナ';
$string['tagsonly'] = 'タグのみ';
$string['tagsonly1'] = 'タグ';
$string['matchalltags'] = 'すべてのタグに合致する';
$string['matchalltagsdesc'] = 'タグをカンマで区切ってください。例: 猫,ぶち猫';
$string['sharedviewsdescription'] = 'このページではあなたが共有しているページの中から直近に修正またはコメントされたページが一覧表示されます。これらの共有ページには直接あなたが共有しているページ、オーナのフレンドが共有しているページ、あなたのグループが共有しているページがあります。';
$string['sharedwith'] = '共有対象';
$string['general'] = '一般';
$string['searchfor'] = '検索 ...';
$string['institutions'] = 'インスティテューション';
$string['search'] = '検索';
$string['Me'] = '私';
$string['entersearchquery'] = '検索クエリを入力してください。';
$string['allow'] = '許可';
$string['comments'] = 'コメント';
$string['moderate'] = 'モデレート';
$string['sharedby'] = '共有';
$string['retractable'] = '格納';
$string['retractabledescription'] = 'ヘッダクリック時にこのブロックが格納されるようにするにはこのオプションを有効にしてください。';
$string['retractedonload'] = '自動格納';
$string['retractedonloaddescription'] = 'このブロックが自動的に格納されるようにするにはこのオプションを有効にしてください。';
$string['textbox1'] = 'ノート';
$string['image'] = 'イメージ';
$string['addcontent'] = 'コンテンツを追加する';
$string['theme'] = 'テーマ';
$string['choosethemedesc'] = 'ページのテーマを選択します。';
$string['lockblocks'] = 'ブロックをロックする';
$string['lockblocksdescription'] = 'あなたはページのブロックをロックしてページコピー時の削除を防ぐことができます。';
$string['instructions'] = 'インストラクション';
$string['advanced'] = '高度';
$string['timeline'] = 'タイムライン';
$string['timelinespecific'] = '%s のタイムライン';
$string['savetimeline'] = 'タイムラインに保存する';
$string['savetimelinespecific'] = '%s のタイムラインに保存する';
$string['noversionsexist'] = 'ページ「 %s 」に表示するための保存されたバージョンはありません。';
$string['previousversion'] = '前のバージョン';
$string['nextversion'] = '次のバージョン';
$string['versionnumber'] = 'バージョン %s';
$string['gotonextversion'] = '次のバージョンに移動する';
$string['gotopreviousversion'] = '前のバージョンに移動する';
$string['loadingtimelinecontent'] = '「 %s 」のタイムラインを読み込んでいます。ページに多くのバージョンがある場合、この処理に時間を要する場合があります。';
$string['bottom'] = '最下部';
$string['top'] = '最上部';
$string['blockssizeupdated'] = 'ブロックサイズが正常に変更されました。';
$string['dimensionsnotset'] = 'ブロックサイズが設定されていません。';
$string['dontaskagain'] = '承認および記憶する';
$string['pleaseconfirmtranslate'] = 'ページレイアウトを変換する';
$string['confirmconversionmessage'] = 'Mahara 19.10の一部として私たちはページレイアウトの新しい作成方法を導入しました。このページを編集するにはあなたは古いレイアウトを新しいレイアウトに変換する必要があります。
あなたがこのページのみを変換したい場合、「承認」をクリックしてください。すべてのページを変換して再度このメッセージを表示したくない場合、「承認および記憶する」をクリックしてください。このオプションはあなたの<a href="%s">プリファレンス</a>で変更できます。編集せずにページに戻るには「キャンセル」をクリックしてください。';
$string['accessibleview'] = 'アクセシブルなレイアウト';
$string['accessibleviewdescription'] = '1カラムページレイアウトを作成してドラッグ＆ドロップの代わりにキーボードで編集します。';
$string['itemgrabbed'] = 'アイテムグラブ: %s';
$string['itemdropped'] = 'アイテムドロップ: %s';
$string['itemreorder'] = 'リストが並べ替えられました。%s アイテムのポジションが %s / %s になりました。';
$string['reordercancelled'] = '並べ替えがキャンセルされました。';
$string['accessibilitymodedescription'] = 'このページはアクセシビリティレイアウトが有効にされています。
このモードではページはフルのページ幅を持ちます。また、ページは順番に表示されます。
ブロックポジションを変更するにはブロックに移動して「Enter」キーで掴んで矢印キーでブロックのリストの上下に移動してください。';
$string['blocktypeis'] = '%s ブロックタイプ';

?>
