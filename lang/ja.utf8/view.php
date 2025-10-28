<?php
/**
 *
 * @package    mahara
 * @subpackage lang (Japanese)
 * @translator Mitsuhiro Yoshida (https://mitstek.com/)
 * @started    2008-01-19 11:25:00 UTC
<<<<<<< HEAD
 * @updated    2025-04-29 04:06:19 UTC
=======
 * @updated    2019-03-29 12:17:42 UTC
>>>>>>> 92099ba5d5a5390b497675e7809f65e21f9a5091
 * @license    https://www.gnu.org/licenses/gpl-3.0.html GNU GPL version 3 or later
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
<<<<<<< HEAD
$string['share'] = '共有';
$string['sharefor1'] = '共有 (ID %s)';
$string['layout'] = 'レイアウト';
$string['managesharing'] = '共有を管理する';
$string['managesharingfor'] = '「 %s 」の共有パーミッションを管理する';
$string['managekeys'] = 'シークレットURLを管理する';
$string['managekeysfor'] = '「 %s 」のシークレットURLを管理する';
$string['sharingrulesfor'] = '「 %s 」の共有ルール';
=======
$string['editaccess'] = 'アクセスを編集する';
$string['editaccessfor'] = 'アクセスを編集する (ID %s)';
$string['layout'] = 'レイアウト';
$string['manageaccess'] = 'アクセスを管理する';
$string['manageaccessfor'] = '「 %s 」のアクセスを管理する';
$string['managekeys'] = 'シークレットURLを管理する';
$string['managekeysfor'] = '「 %s 」のシークレットURLを管理する';
$string['accessrulesfor'] = '「 %s 」のアクセスルール';
>>>>>>> 92099ba5d5a5390b497675e7809f65e21f9a5091
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
<<<<<<< HEAD
$string['allowcommentsonview1'] = '人がコメントを残せるようにします。';
$string['ownerformat'] = '氏名表示フォーマット';
$string['ownerformatdescription'] = '他の人があなたのページを閲覧する場合、あなたの氏名をどのように表示しますか?';
$string['createtags'] = 'タグから作成する';
$string['createtagsdesc1'] = 'あなたのページに自動的にコンテンツを取得するためタグを検索するか入力してください。あなたが2つ以上のタグを入力した場合、すべてのタグがタグ付けされたコンテンツのみページに表示されます。その後、あなたはブロックを再配置および削除できます。';
$string['anonymise'] = '匿名化する';
$string['anonymisedescription'] = 'ページの作成者としてのあなたの氏名を他の人から秘匿します。必要であれば管理者およびスタッフはあなたの氏名を確認できます。';
$string['Lock'] = 'ロック';
$string['Unlock'] = 'ロック解除';
$string['Locked'] = 'ロック';
$string['Unlocked'] = 'ロック解除';
=======
$string['allowcommentsonview1'] = 'ユーザがコメントを投稿できるようにします。';
$string['ownerformat'] = '氏名表示フォーマット';
$string['ownerformatdescription'] = '他のユーザがあなたのページを閲覧する場合、あなたの氏名をどのように表示しますか?';
$string['anonymise'] = '匿名化する';
$string['anonymisedescription'] = 'ページの作成者としてのあなたの氏名を他のユーザから秘匿します。必要であれば管理者はあなたの氏名を確認できます。';
$string['Locked'] = 'ロック';
>>>>>>> 92099ba5d5a5390b497675e7809f65e21f9a5091
$string['lockedgroupviewdesc'] = 'あなたがこのページをロックした場合、グループ管理者のみ編集できます。';
$string['profileviewtitle'] = 'プロファイルページ';
$string['dashboardviewtitle'] = 'ダッシュボードページ';
$string['grouphomepageviewtitle'] = 'グループホームページ';
$string['viewname'] = 'ページ名';
$string['templatedashboard'] = 'ダッシュボードテンプレート';
$string['templategrouphomepage'] = 'グループホームページテンプレート';
$string['templateprofile'] = 'プロファイルテンプレート';
<<<<<<< HEAD
$string['templateprogress'] = 'ポートフォリオ完了テンプレート';
$string['templateportfolio'] = 'ページテンプレート';
$string['templateportfoliotitle'] = 'タイトルなし';
$string['templateportfoliodescription1'] = '作成されるページのデフォルトレイアウトを設定します。あなたはブロックも追加できます。あなたがデフォルトページに追加したコンテンツは変更後に作成されるすべてのページに追加されることに留意してください。';
$string['templateactivity'] = '活動ページテンプレート';
$string['artefacts'] = 'アーティファクト';
$string['groupviews1'] = 'グループポートフォリオ';
$string['institutionviews'] = 'インスティテューションページ';
$string['institutionviewscollections1'] = 'インスティテューションポートフォリオ';
$string['reallyaddaccesstoemptyview'] = 'あなたのページにはブロックが含まれていません。本当にこれらの人にページのアクセス権を与えますか?';
=======
$string['templateportfolio'] = 'ページテンプレート';
$string['templateportfoliotitle'] = 'タイトルなし';
$string['templateportfoliodescription'] = 'あなたのユーザが作成するページのデフォルトレイアウトを設定します。あなたはブロックも追加できます。あなたがデフォルトページに追加したコンテンツはユーザが作成するページすべてに表示されることに留意してください。';
$string['artefacts'] = 'アーティファクト';
$string['groupviews'] = 'グループページおよびコレクション';
$string['institutionviews'] = 'インスティテューションページ';
$string['institutionviewscollections'] = 'インスティテューションページおよびコレクション';
$string['reallyaddaccesstoemptyview'] = 'あなたのページにはブロックが含まれていません。本当にこれらのユーザにページのアクセス権を与えますか?';
>>>>>>> 92099ba5d5a5390b497675e7809f65e21f9a5091
$string['viewdeleted'] = 'ページが削除されました。';
$string['deletethisview'] = 'このページを削除する';
$string['submitthisviewto1'] = 'このページを評価のために送信する ->';
$string['submitthiscollectionto1'] = 'このコレクションを評価のために送信する ->';
$string['forassessment1'] = '評価のために送信する';
$string['accessfromdate3'] = '%s 以前、誰もこのページを閲覧できません。';
$string['accessuntildate3'] = '%s 以降、誰もこのページを閲覧できません。';
$string['accessbetweendates3'] = '%s 以前または %s 以降、誰もこのページを閲覧できません。';
$string['artefactsinthisview'] = 'このページのアーティファクト';
$string['whocanseethisview'] = 'このページを閲覧できる人';
<<<<<<< HEAD
$string['pending'] = 'レビュー中のポートフォリオ';
$string['panelmenu'] = 'メニュー';
=======
>>>>>>> 92099ba5d5a5390b497675e7809f65e21f9a5091
$string['view'] = 'ページ';
$string['panelmenu'] = 'メニュー';
$string['vieworcollection'] = 'ページまたはコレクション';
$string['views'] = 'ページ';
<<<<<<< HEAD
$string['nviews1'] = '%s ページ';
$string['View'] = 'ページ';
$string['Views'] = 'ページ';
$string['portfolio'] = 'ポートフォリオ';
$string['portfolios'] = 'ポートフォリオ';
$string['nportfolios'] = '%s ポートフォリオ';
$string['Viewscollections1'] = 'ポートフォリオ';
$string['viewsubmittedtogroup1'] = 'このポートフォリオは<a href="%s">%s</a>に送信されました。';
$string['viewsubmittedtogroupon1'] = 'このポートフォリオは<a href="%s">%s</a>に対して %s に送信されました。';
$string['viewsubmittedtogroupgrade'] = 'このポートフォリオは課題「 <a href="%s">%s</a> 」 (%s) に対して %s に送信されました。';
$string['viewsubmittedtohoston'] = 'このポートフォリオは %s に送信されました。';
$string['viewsubmittedtohost'] = 'このポートフォリオは評価のために送信されました。';
$string['collectionsubmittedtogroup'] = 'このコレクションは<a href="%s">%s</a>に送信されました。';
$string['collectionsubmittedtogroupon'] = 'このコレクションは<a href="%s">%s</a>に対して %s に送信されました。';
$string['collectionsubmittedtogroupgrade'] = 'このコレクションは課題「 <a href="%s">%s</a> 」 (%s) に対して %s に送信されました。';
$string['collectionsubmittedtohost'] = 'このコレクションは評価のために送信されました。';
$string['collectionsubmittedtohoston'] = 'このコレクションは %s に送信されました。';
$string['submittedpendingrelease'] = 'アーカイブ後のリリース保留中です。';
$string['submittedpendingreleasefailed'] = 'リリースがアーカイブに失敗しました。再キューするには<a href="%s">エクスポートキュー</a>に移動してください。';
$string['archivenow'] = 'ポートフォリオ「 %s 」はアーカイブ後にリリースされます。';
$string['archivefailed'] = '提出のアーカイブに失敗しました。';
$string['archivesuccess'] = '正常にアーカイブしました。';
$string['submittedstatus'] = '提出ステータス';
$string['nobodycanseethisview2'] = 'あなたのみこのページを閲覧できます。';
$string['noviews2'] = 'ポートフォリオはありません。';
$string['youhavenoviews2'] = 'あなたにはポートフォリオはありません。';
$string['youhaventcreatedanyviewsyet'] = 'あなたはまだページを作成していません。';
$string['youhavenviews'] = 'あなたには %d ページがあります。';
$string['viewsownedbygroup'] = 'このグループが所有するページ';
$string['ownedbygroup'] = 'このグループによる所有';
$string['nogroupviewsyet'] = 'このグループにはページはまだありません。';
$string['viewscollectionssharedtogroup1'] = 'このグループで共有されているポートフォリオ';
$string['viewssharedtogroup'] = 'このグループで共有されているページ';
$string['sharedtogroup'] = 'このグループでの共有';
=======
$string['viewsandcollections'] = 'ページおよびコレクション';
$string['View'] = 'ページ';
$string['Views'] = 'ページ';
$string['Viewscollections'] = 'ページおよびコレクション';
$string['viewsubmittedtogroup'] = 'このページは<a href="%s">%s</a>に送信されました。';
$string['viewsubmittedtogroupon'] = 'このページは<a href="%s">%s</a>に対して %s に送信されました。';
$string['collectionsubmittedtogroup'] = 'このコレクションは<a href="%s">%s</a>に送信されました。';
$string['collectionsubmittedtogroupon'] = 'このコレクションは<a href="%s">%s</a>に対して %s に送信されました。';
$string['submittedpendingrelease'] = 'アーカイブ後のリリース保留中です。';
$string['nobodycanseethisview2'] = 'あなたのみこのページを閲覧できます。';
$string['noviews1'] = 'ページまたはコレクションはありません。';
$string['nviews'] = '%s ページ';
$string['youhavenoviews1'] = 'あなたにはページまたはコレクションはありません。';
$string['youhaventcreatedanyviewsyet'] = 'あなたはまだページを作成していません。';
$string['youhaveoneview'] = 'あなたには 1 件のページがあります。';
$string['youhaveviews'] = 'あなたには %s 件のページがあります。';
$string['viewsownedbygroup'] = 'このグループが所有するページ';
$string['nogroupviewsyet'] = 'このグループにはページはまだありません。';
$string['viewssharedtogroup'] = 'このグループで共有されているページ';
>>>>>>> 92099ba5d5a5390b497675e7809f65e21f9a5091
$string['nosharedviewsyet'] = 'このグループで共有されているページはまだありません。';
$string['viewssharedtogroupbyothers'] = '他の人がこのグループと共有しているページ';
$string['sharedviews'] = '共有ページ';
$string['submissionstogroup'] = 'このグループへの送信';
<<<<<<< HEAD
$string['viewsourceportfolio'] = 'オリジナルポートフォリオ「 %s 」';
$string['originalsubmissiondeleted'] = 'オリジナルポートフォリオ削除済み';
$string['showsubmissions'] = '送信済みポートフォリオを表示する';
$string['nosubmittedviewscollectionsyet1'] = 'このグループに送信されたポートフォリオはまだありません。';
$string['nosubmissionsfrom'] = 'グループに送信していないメンバ';
$string['submittogroup1'] = 'このグループにポートフォリオを送信する';
=======
$string['nosubmittedviewscollectionsyet'] = 'このグループに送信されたページまたはコレクションはまだありません。';
$string['nosubmissionsfrom'] = 'グループに送信していないメンバ';
$string['submittogroup'] = 'このグループにページまたはコレクションを送信する';
>>>>>>> 92099ba5d5a5390b497675e7809f65e21f9a5091
$string['yoursubmissions'] = 'あなたの送信';
$string['youhavesubmitted'] = 'あなたはこのグループに <a href="%s">%s</a> を送信しました。';
$string['youhavesubmittedon'] = 'あなたはこのグループに <a href="%s">%s</a> を %s に送信しました。';
$string['listedinpages'] = 'ページ内一覧';
$string['public'] = 'パブリック';
<<<<<<< HEAD
$string['registeredusers'] = '登録済みの人';
$string['friends'] = 'フレンド';
$string['users'] = '人';
$string['friend'] = 'フレンド';
$string['group'] = 'グループ';
$string['user'] = '人';
$string['everyoneingroup'] = 'グループ内全員';
$string['nospecialrole'] = '特別ロールなし';
$string['peer'] = 'ピア';
$string['manager'] = 'マネージャ';
$string['peermanager'] = 'ピアおよびマネージャ';
$string['verifier'] = 'レビュア';
$string['addverifier'] = 'レビュアを選択する';
$string['invalidaccessroleforuser1'] = '「 %s 」の共有パーミッションが更新されましたが、正しい内部ロールがないため、「 %s 」ロールをあなたのポートフォリオ「 %s 」に対して受け取れません。あなたの管理者に連絡してその人に「 %s 」ロールを与えるための支援をご依頼ください。';
=======
$string['registeredusers'] = '登録済みユーザ';
$string['friends'] = 'フレンド';
$string['groups'] = 'グループ';
$string['users'] = 'ユーザ';
$string['everyoneingroup'] = 'グループ内全員';
>>>>>>> 92099ba5d5a5390b497675e7809f65e21f9a5091
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
<<<<<<< HEAD
$string['publicaccessnotallowedforprobation'] = '申し訳ございません、新しく登録された人はシークレットURLの作成を許可されていません。';
$string['copyingsecreturl'] = 'シークレットURLをクリップボードにコピーしました。';
$string['inviteusertojoingroup'] = 'この人をグループへの参加に招待する';
$string['addusertogroup'] = 'この人をグループに追加する';
=======
$string['publicaccessnotallowedforprobation'] = '申し訳ございません、新しく登録されたユーザはシークレットURLの作成を許可されていません。';
$string['inviteusertojoingroup'] = 'このユーザをグループへの参加に招待する';
$string['addusertogroup'] = 'このユーザをグループに追加する';
>>>>>>> 92099ba5d5a5390b497675e7809f65e21f9a5091
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
$string['viewunobjectionablesubject'] = 'ページ %s が %s により好ましくないものではないとマークされました。';
$string['viewunobjectionablebody'] = '% (%s) が %s により確認され好ましくないコンテンツは含まれていないとマークされました。';
$string['updatewatchlistfailed'] = 'ウォッチリストの更新に失敗しました。';
$string['watchlistupdated'] = 'あなたのウォッチリストが更新されました。';
$string['viewvisitcount'] = 'アクセス数: %s (%s - %s)';
<<<<<<< HEAD
$string['profilenotshared'] = 'このプロファイルへのフルアクセスは制限されています。';
=======
$string['profilenotshared'] = 'このユーザプロファイルへのフルアクセスは制限されています。';
$string['friend'] = 'フレンド';
>>>>>>> 92099ba5d5a5390b497675e7809f65e21f9a5091
$string['profileicon'] = 'プロファイル画像';
$string['Updatedon'] = '更新日時:';
$string['Createdon'] = '作成日時:';
$string['Added'] = '追加済み';
<<<<<<< HEAD
$string['sharedbyme'] = '私からの共有';
$string['whosharewith'] = '誰と共有しますか?';
$string['accesslist'] = 'アクセスリスト';
$string['defaultaccesslistmessage1'] = 'あなた以外、あなたの選択されたポートフォリオを閲覧できません。アクセス権を与えるには人を追加してください。';
$string['sharewithmygroups'] = 'マイグループと共有する';
$string['sharewithmyinstitutions'] = 'マイインスティテューションと共有する';
$string['sharewithusers'] = '人と共有する';
=======
$string['share'] = '共有';
$string['sharedbyme'] = '私からの共有';
$string['sharewith'] = '共有対象';
$string['whosharewith'] = '誰と共有しますか?';
$string['accesslist'] = 'アクセスリスト';
$string['defaultaccesslistmessage'] = 'あなた以外、あなたの選択されたページおよびコレクションを閲覧できません。アクセス権を与えるにはユーザを追加してください。';
$string['sharewithmygroups'] = 'マイグループと共有する';
$string['sharewithmyinstitutions'] = 'マイインスティテューションと共有する';
$string['sharewithusers'] = 'ユーザと共有する';
>>>>>>> 92099ba5d5a5390b497675e7809f65e21f9a5091
$string['shareview1'] = '共有';
$string['sharedwithothers'] = '他の人と共有する';
$string['moreoptions'] = '高度なオプション';
$string['moreinstitutions'] = 'さらにインスティテューションを表示する';
$string['allviews'] = 'すべてのページ';
<<<<<<< HEAD
$string['peopleinmyinstitution'] = '「 %s 」の人';
$string['peopleinmyinstitutions'] = 'マイインスティテューションの人';
$string['otherpeople'] = '他の人';
$string['addaccess'] = '「 %s 」へのアクセスを追加する';
$string['addaccessinstitution'] = 'インスティテューション「 %s 」へのアクセスを追加する';
$string['addaccessgroup'] = 'グループ「 %s 」へのアクセスを追加する';
$string['sharewithmaximum'] = 'あなたはポートフォリオを最大 %d 人またはグループで共有できます。';
$string['shareallwithmaximum'] = 'あなたは選択されたポートフォリオを最大 %d 人またはグループで共有できます。';
$string['submitconfirm1'] = 'あなたが「 %s 」を「 %s 」に送信した場合、コピーが作成されて評価のために送信されます。あなたはオリジナルのポートフォリオの編集を継続できます。しかし、あなたはリリースされるまで送信済みのコピーは編集できません。本当にあなたのポートフォリオを送信してもよろしいですか?';
$string['portfoliosubmitted'] = 'ポートフォリオが送信されました。あなたは<a href="%s">あなたの送信を閲覧</a>できます。';
$string['viewnotsubmitted'] = '現在、ポートフォリオは送信されていません。';
=======
$string['addaccess'] = '「 %s 」へのアクセスを追加する';
$string['addaccessinstitution'] = 'インスティテューション「 %s 」へのアクセスを追加する';
$string['addaccessgroup'] = 'グループ「 %s 」へのアクセスを追加する';
$string['submitconfirm'] = '評価のために「 %s 」を「 %s 」に送信した場合、チュータが評価を終えるまであなたはコンテンツを編集できません。本当に今すぐ送信してもよろしいですか?';
$string['collectionsubmitted'] = 'コレクションが送信されました。';
>>>>>>> 92099ba5d5a5390b497675e7809f65e21f9a5091
$string['collectionviewsalreadysubmitted'] = 'このコレクション内のページはすでに送信されています: 「 %s 」
リリースまたはコレクションから削除されるまであなたはコレクションを送信できません。';
$string['viewalreadysubmitted'] = 'このページはすでに別の課題またはグループに送信されています。';
$string['collectionalreadysubmitted'] = 'このコレクションはすでに別の課題またはグループに送信されています。';
$string['collectionsubmissionexceptiontitle'] = 'コレクションを送信できませんでした。';
$string['collectionsubmissionexceptionmessage'] = '以下の理由からこのコレクションを送信できません:';
<<<<<<< HEAD
$string['cantsubmitcopyfailed'] = 'このポートフォリオのコピーを作成できませんでした。何も送信されていません。';
$string['cantsubmitemptycollection'] = 'このコレクションにはページが含まれていません。';
$string['cantsubmitneedgrouporsubmittedhost'] = '送信はグループまたは送信済みホストに実行される必要があります。';
$string['submittedtimetitle'] = '- 送信日時 %s';
=======
$string['cantsubmitemptycollection'] = 'このコレクションにはページが含まれていません。';
>>>>>>> 92099ba5d5a5390b497675e7809f65e21f9a5091
$string['viewsubmissionexceptiontitle'] = 'ページを送信できませんでした。';
$string['viewsubmissionexceptionmessage'] = '以下の理由からこのページを送信できません:';
$string['submitviewtogroup'] = '評価のため「 %s 」を「 %s 」に送信する';
$string['cantsubmitviewtogroup'] = 'あなたは評価を目的としてこのページをこのグループに送信できません。';
$string['cantsubmitcollectiontogroup'] = 'あなたはこのコレクションを送信できません。';
$string['cantsubmittogroup'] = 'あなたはこのグループに送信できません。';
$string['cantdeleteview'] = 'あなたはこのページを削除できません。';
$string['cantdeleteviewsubmission'] = '送信済みのため、あなたはこのページを削除できません。';
$string['deletespecifiedview'] = 'ページ「 %s 」を削除する';
<<<<<<< HEAD
$string['deleteviewconfirm1'] = '本当にこのページを削除してもよろしいですか? 元に戻せません';
$string['deleteviewconfirmbackup1'] = '<a href="%sexport/index.php?view=%s">エクスポート</a>によるこのページのバックアップ作成をご検討ください。';
$string['deleteviewconfirmnote3'] = '<strong>注意:</strong> あなたがこのページでリンクしたファイルおよび日誌エントリすべてはまだ利用可能です。<br>しかし、このページに投稿されたコメントはすべて削除されます。';
$string['deleteviewconfirmnote2'] = 'このページはコレクション<a href="%s">「 %s 」</a>の一部です。';
$string['editaccesspagedescription7'] = 'デフォルトではあなたのポートフォリオはあなたのみ閲覧できます。このページではあなたに加えて誰がポートフォリオにアクセスできるか決定します。';
$string['editaccessdescription'] = 'あなたは複数アイテムをチェックボックスで選択して同じ設定にできます。選択完了後、続けるにはスクロールダウンして「保存」をクリックしてください。';
$string['editaccessgrouppagedescription1'] = 'デフォルトではポートフォリオを追加および編集できるグループメンバのみグループポートフォリオを閲覧できます。あなたは複数アイテムをチェックボックスで選択して同じ設定にできます。選択完了後、続けるにはスクロールダウンして「保存」をクリックしてください。';
$string['editaccessinstitutionpagedescription'] = 'デフォルトではあなたのインスティテューションコレクションおよびページはあなたのインスティテューション管理者のみ閲覧できます。あなたは複数アイテムをチェックボックスで選択して同じ設定にできます。選択完了後、続けるにはスクロールダウンして「保存」をクリックしてください。';
$string['editaccesssitepagedescription'] = 'デフォルトではサイトコレクションおよびページはサイト管理者のみ閲覧できます。あなたは複数アイテムをチェックボックスで選択して同じ設定にできます。選択完了後、続けるにはスクロールダウンして「保存」をクリックしてください。';
$string['editsecreturlsintable'] = '個別に生成する必要があるためこのページでは<b>シークレットURL</b>を設定できません。シークレットURLを設定するには<a href="%s">コレクションおよびページの一覧</a>に戻ってください。';
$string['editaccessinvalidviewset2'] = '無効な一連のポートフォリオの共有パーミッションを編集しようとしました。';
=======
$string['deleteviewconfirm1'] = '本当にこのページを削除してもよろしいですか? 元に戻せません。';
$string['deleteviewconfirmbackup'] = '<a href="%sexport/">エクスポート</a>によるこのページのバックアップ作成をご検討ください。';
$string['deleteviewconfirmnote3'] = '<strong>注意:</strong> あなたがこのページでリンクしたファイルおよび日誌エントリすべてはまだ利用可能です。<br>しかし、このページに投稿されたコメントはすべて削除されます。';
$string['deleteviewconfirmnote2'] = 'このページはコレクション<a href="%s">「 %s 」</a>の一部です。';
$string['editaccesspagedescription6'] = 'デフォルトではあなたのページおよびコレクションをあなたのみ閲覧できます。このページではあなたに加えて誰がポートフォリオにアクセスできるか決定します。';
$string['editaccessdescription'] = 'あなたは複数アイテムをチェックボックスで選択して同じ設定にできます。選択完了後、続けるにはスクロールダウンして「保存」をクリックしてください。';
$string['editaccessgrouppagedescription'] = 'デフォルトではページおよびコレクションを追加および編集できるグループメンバのみグループコレクションおよびページを閲覧できます。あなたは複数アイテムをチェックボックスで選択して同じ設定にできます。選択完了後、続けるにはスクロールダウンして「保存」をクリックしてください。';
$string['editaccessinstitutionpagedescription'] = 'デフォルトではあなたのインスティテューションコレクションおよびページはあなたのインスティテューション管理者のみ閲覧できます。あなたは複数アイテムをチェックボックスで選択して同じ設定にできます。選択完了後、続けるにはスクロールダウンして「保存」をクリックしてください。';
$string['editaccesssitepagedescription'] = 'デフォルトではサイトコレクションおよびページはサイト管理者のみ閲覧できます。あなたは複数アイテムをチェックボックスで選択して同じ設定にできます。選択完了後、続けるにはスクロールダウンして「保存」をクリックしてください。';
$string['editsecreturlsintable'] = '個別に生成する必要があるためこのページでは<b>シークレットURL</b>を設定できません。シークレットURLを設定するには<a href="%s">コレクションおよびページの一覧</a>に戻ってください。';
$string['editaccessinvalidviewset'] = '無効な一連のページおよびコレクションのアクセスを編集しようとしました。';
>>>>>>> 92099ba5d5a5390b497675e7809f65e21f9a5091
$string['overridingstartstopdate'] = '開始/終了日のオーバーライド';
$string['overridingstartstopdatesdescription'] = '必要であれば、あなたは開始日および終了日をオーバーライドできます。仮に他のアクセス権を与えたとしても、他の人は開始日以前および終了日以降にあなたのページを閲覧できません。';
$string['emptylabel'] = 'このラベルのテキストを入力するにはここをクリックしてください。';
$string['empty_block'] = 'ここに配置するアーティファクトを左側のツリーより選択してください。';
$string['viewinformationsaved'] = 'ページ情報が正常に保存されました。';
$string['canteditdontown'] = 'あなたの所有ではないためこのページを編集できません。';
$string['canteditsubmitted'] = '評価を目的として %s に送信されたためあなたはこのページを編集できません。あなたはチュータがページをリリースするまで待つ必要があります。';
<<<<<<< HEAD
$string['canteditsubmission'] = '送信済みのため、あなたはこのページを編集できません。';
$string['notsubmitted'] = '未送信';
$string['Submitted'] = '送信済み';
$string['archiving'] = 'アーカイブ待ち';
$string['released'] = 'リリース済み';
=======
$string['Submitted'] = '送信済み';
>>>>>>> 92099ba5d5a5390b497675e7809f65e21f9a5091
$string['submittedforassessment'] = '評価のために送信済み';
$string['blocknotinview'] = 'ID「 %d 」のブロックはページにありません。';
$string['viewcreatedsuccessfully'] = 'ページが正常に作成されました。';
$string['viewaccesseditedsuccessfully'] = 'ページアクセスが正常に保存されました。';
$string['accesssavedsuccessfully'] = 'アクセス設定が正常に保存されました。';
$string['viewsavedsuccessfully'] = 'ページが正常に保存されました。';
<<<<<<< HEAD
$string['savedtotimeline'] = 'タイムラインに保存されました。';
$string['updatedaccessfornumviews1'] = '%d ページのアクセスルールが更新されました。';
$string['cantversionviewinvalid'] = '提供されたページIDが有効ではありません。';
$string['cantversionvieweditpermissions'] = 'あなたにはこのページを編集するためのパーミッションがありません。';
$string['cantversionviewsubmitted'] = '評価を目的として送信されたためあなたはこのページを編集できません。あなたはリリースされるまで待つ必要があります。';
$string['cantversionviewgroupeditwindow'] = 'あなたはこのページを編集できません。グループ編集可能期間外です。';
$string['cantversionoldlayout'] = 'あなたは古いレイアウトのタイムラインバージョンのページを保存できません。あなたは新しいグリッドレイアウトに変換する必要があります。変換するには単にページを編集してください。レイアウトが変換されます。';
$string['cantaddannotationinoldlayout'] = 'あなたはこのページにアノテーションを追加できません。最初にページを編集してページレイアウトを変換してください。';
$string['invalidcolumn'] = 'カラム %s は範囲外です。';
$string['confirmcancelcreatingview'] = 'このページは作成完了していません。本当にキャンセルしてもよろしいですか?';
$string['groupviewurltaken'] = 'このURLのページはすでに存在します。';
$string['editblockspagedescription'] = '<p>あなたのページを作成するには以下のボタンよりコンテンツブロックをドラッグ&ドロップしてください。</p>';
$string['displayview'] = 'ページを表示する';
$string['editthisview'] = '編集';
$string['expandcontract'] = 'ブロックタイプ一覧を展開/折りたたむ';
$string['returntoviews1'] = 'ポートフォリオに戻る';
$string['returntoinstitutionportfolios1'] = 'インスティテューションポートフォリオに戻る';
$string['returntositeportfolios1'] = 'サイトポートフォリオに戻る';
=======
$string['updatedaccessfornumviews1'] = '%d ページのアクセスルールが更新されました。';
$string['invalidcolumn'] = 'カラム %s は範囲外です。';
$string['confirmcancelcreatingview'] = 'このページは作成完了していません。本当にキャンセルしてもよろしいですか?';
$string['groupviewurltaken'] = 'このURLのページはすでに存在します。';
$string['editblockspagedescription'] = '<p>あなたのページを作成するには以下のタブよりコンテンツブロックをドラッグ&ドロップしてください。</p>';
$string['displayview'] = 'ページを表示する';
$string['editthisview'] = 'このページを編集する';
$string['expandcontract'] = 'ブロックタイプ一覧を展開/折りたたむ';
$string['returntoviews'] = 'ページおよびコレクションに戻る';
$string['returntoinstitutionportfolios'] = 'インスティテューションページおよびコレクションに戻る';
$string['returntositeportfolios'] = 'サイトページおよびコレクションに戻る';
>>>>>>> 92099ba5d5a5390b497675e7809f65e21f9a5091
$string['success.addblocktype'] = 'ブロックが正常に追加されました。';
$string['err.addblocktype'] = 'あなたのページにブロックを追加できませんでした。';
$string['success.moveblockinstance'] = 'ブロックが正常に移動されました。';
$string['err.moveblockinstance'] = '指定した位置にブロックを移動できませんでした。';
$string['success.removeblockinstance'] = 'ブロックが正常に削除されました。';
$string['err.removeblockinstance'] = 'ブロックを削除できませんでした。';
$string['success.addcolumn'] = 'カラムが正常に追加されました。';
$string['err.addcolumn'] = '新しいカラムの追加に失敗しました。';
$string['success.changetheme'] = 'テーマが正常に更新されました。';
$string['err.changetheme'] = 'テーマを更新できませんでした。';
$string['success.copyblockinstance'] = 'ブロックを正常にコピーしました。';
$string['err.copyblockinstance'] = 'ブロックのコピーに失敗しました。';
$string['success.changeblockinstance'] = '正常にプレースホルダブロックを変更しました。';
$string['err.changeblockinstance'] = 'プレースホルダブロックの変更に失敗しました。';
$string['success.revertblockinstance'] = 'ブロックを正常に元に戻しました。';
$string['err.revertblockinstance'] = 'ブロックを元に戻せませんでした。';
$string['success.configureblockinstance'] = 'ブロックを正常に設定しました。';
$string['err.configureblockinstance'] = 'ブロックの設定に失敗しました。';
$string['success.acsearch'] = '正常に検索できました。';
$string['err.acsearch'] = '検索に失敗しました。';
$string['confirmcloseblockinstance'] = '本当にあなたの変更を保存せずに続けてもよろしいですか?';
$string['confirmdeleteblockinstance'] = '本当にこのブロックを削除してもよろしいですか?';
$string['blockinstanceconfiguredsuccessfully'] = 'ブロックが正常に設定されました。';
$string['blockconfigurationrenderingerror'] = 'ブロックを表示できなかったため設定に失敗しました。';
<<<<<<< HEAD
$string['blocks_edit_one_column_node'] = '警告: あなたはレスポンシブ表示モードです。

あなたは安全にコンテンツを編集できます。ブロックを追加または移動した場合、保存されたレイアウトが更新されます。';
$string['blocksinstructionajaxlive2'] = 'これはあなたのページのプレビューです。変更は自動的に保存されます。<br>新しいブロックを作成するには「+」ボタンをページ上にドラッグしてください。そして、そのブロックのタイプを選択してください。ブロックの位置を変更するにはページ上でドラッグしてください。';
$string['blockchangedsuccess'] = 'プレースホルダブロックを「 %s 」ブロックに正常に変更しました。';
$string['blockchangederror'] = '「 %s 」ブロックへの変更に失敗しました。';
$string['blockchangedbacksuccess'] = 'ブロックをプレースホルダブロックに戻しました。';
$string['blockchangedbackerror'] = 'ブロックをプレースホルダブロックに戻せませんでした。';
$string['addblock'] = 'ブロックを追加する: %s';
$string['blockcell'] = 'セル';
$string['blockorder'] = 'ポジション';
$string['rownr'] = '行 %s';
$string['nrrows'] = '%s 行';
$string['addnewblockdrag1'] = 'ドラッグまたはクリックして新しいブロックを追加する';
$string['addnewblockaccessible'] = 'クリックして新しいブロックを追加する';
$string['addnewblock'] = '新しいブロックを追加する';
=======
$string['blocksintructionnoajax'] = 'あなたのページに追加するブロックおよび場所を選択してください。あなたはタイトルバーの矢印ボタンを使ってブロックの配置を変更できます。';
$string['blocksinstructionajaxlive'] = 'このエリアではあなたのページがどのように見えるのかプレビューを表示しています。変更は自動的に保存されます。<br>ブロックを追加するにはページにドラッグしてください。あなたはページ内でブロックをドラッグして位置を変更することもできます。';
$string['addblock'] = 'ブロックを追加する: %s';
$string['blockcell'] = 'セル';
$string['cellposition'] = '行 %s カラム %s';
$string['blockorder'] = 'ポジション';
$string['blockordertopcell'] = 'セルトップ';
$string['blockorderafter'] = '「 %s 」の後';
$string['rownr'] = '行 %s';
$string['nrrows'] = '%s 行';
>>>>>>> 92099ba5d5a5390b497675e7809f65e21f9a5091
$string['addnewblockhere'] = 'ここに新しいブロックを追加する';
$string['add'] = '追加';
$string['addcolumn'] = 'カラムを追加する';
$string['remove'] = '削除';
<<<<<<< HEAD
$string['moveblock2'] = 'ブロックを移動する';
$string['moveblock'] = '%s ブロックを移動する';
$string['movethisblock'] = 'このブロックを移動する';
$string['Configure1'] = '編集';
$string['configureblock3'] = 'ブロックを編集する';
$string['configureblock1'] = '%s ブロックを設定する (ID %s)';
$string['configurethisblock1'] = 'このブロックを設定する (ID %s)';
$string['closeconfiguration'] = '設定を閉じる';
$string['removeblock2'] = 'ブロックを削除する';
$string['removeblock1'] = '%s ブロックを削除する (ID %s)';
$string['removethisblock1'] = 'このブロックを削除する (ID %s)';
$string['copyblockId'] = 'ブロックをコピーする (ID %s)';
$string['copyblocktitleId'] = '%s ブロックをコピーする (ID %s)';
$string['copyblock'] = 'コピーする';
$string['blocktitle'] = 'ブロックタイトル';
$string['celltitle'] = 'セル';
$string['blockrecovery'] = 'バックアップをリストアする';
$string['blockrecoverydescription'] = 'あなたの元のコンテンツに戻せます。';
$string['restorebackupstring'] = '本当にあなたの現在のコンテンツと置換してもよろしいですか?';
$string['restore_backup_desc'] = 'これはあなたが最後に保存した変更前のブロックコンテンツです。これを復元した場合、現在のコンテンツと置換されます。';
$string['basicoptions'] = '基本オプション';
$string['advancedoptions'] = '高度なオプション';
$string['Row'] = '行';
$string['layoutpreviewimage'] = 'レイアウトプレビューイメージ';
$string['Help'] = 'ヘルプ';
$string['blockhelp'] = 'ブロックヘルプ';
$string['by'] = 'by';
$string['viewtitleby'] = '%s by <a href="%s">%s</a>';
$string['viewauthor'] = 'by <a href="%s">%s</a>';
$string['viewauthornolink'] = 'by %s';
=======
$string['removecolumn'] = 'このカラムを削除する';
$string['moveblockleft'] = '%s ブロックを左に移動する';
$string['movethisblockleft'] = 'このブロックを左に移動する';
$string['moveblockdown'] = '%s ブロックを下に移動する';
$string['movethisblockdown'] = 'このブロックを下に移動する';
$string['moveblockup'] = '%s ブロックを上に移動する';
$string['movethisblockup'] = 'このブロックを上に移動する';
$string['moveblockright'] = '%s ブロックを右に移動する';
$string['movethisblockright'] = 'このブロックを右に移動する';
$string['moveblock'] = '%s ブロックを移動する';
$string['movethisblock'] = 'このブロックを移動する';
$string['Configure'] = '設定';
$string['configureblock1'] = '%s ブロックを設定する (ID %s)';
$string['configurethisblock1'] = 'このブロックを設定する (ID %s)';
$string['closeconfiguration'] = '設定を閉じる';
$string['removeblock1'] = '%s ブロックを削除する (ID %s)';
$string['removethisblock1'] = 'このブロックを削除する (ID %s)';
$string['blocktitle'] = 'ブロックタイトル';
$string['changemyviewlayout'] = 'マイページのレイアウトを変更する';
$string['createcustomlayout'] = 'カスタムレイアウトを作成する';
$string['createnewlayout'] = '新しいレイアウトを作成する';
$string['basicoptions'] = '基本オプション';
$string['advancedoptions'] = '高度なオプション';
$string['viewcolumnspagedescription'] = '最初にあなたのページのカラム数を選択してください。あなたは次のステップでカラム幅を変更できます。';
$string['viewlayoutpagedescription'] = 'あなたのページをどのように配置するか選択してください。';
$string['changeviewlayout'] = 'マイページのカラムレイアウトを変更する';
$string['numberofcolumns'] = 'カラム数';
$string['changecolumnlayoutfailed'] = 'カラムレイアウトを変更できませんでした。他のユーザが同時にレイアウトを編集したようです。後で再度お試しください。';
$string['changerowlayoutfailed'] = '行のレイアウトを変更できませんでした。他のユーザが同時にレイアウトを編集したようです。後で再度お試しください。';
$string['Row'] = '行';
$string['addarow'] = '行を追加する';
$string['removethisrow'] = 'この行を削除する';
$string['columnlayout'] = 'カラムレイアウト';
$string['layoutpreview'] = 'レイアウトプレビュー';
$string['layoutpreviewimage'] = 'レイアウトプレビューイメージ';
$string['Help'] = 'ヘルプ';
$string['by'] = 'by';
$string['viewtitleby'] = '%s by <a href="%s">%s</a>';
$string['viewauthor'] = 'by <a href="%s">%s</a>';
>>>>>>> 92099ba5d5a5390b497675e7809f65e21f9a5091
$string['in'] = '-';
$string['noblocks'] = '申し訳ございません、このカテゴリにブロックはありません。';
$string['timeofsubmission'] = '送信日時';
$string['column'] = 'カラム';
$string['row'] = '行';
$string['columns'] = 'カラム';
$string['rows'] = '行';
<<<<<<< HEAD
=======
$string['100'] = '100';
$string['50,50'] = '50-50';
$string['33,33,33'] = '33-33-33';
$string['25,25,25,25'] = '25-25-25-25';
$string['20,20,20,20,20'] = '20-20-20-20-20';
$string['67,33'] = '67-33';
$string['33,67'] = '33-67';
$string['25,25,50'] = '25-25-50';
$string['50,25,25'] = '50-25-25';
$string['25,50,25'] = '25-50-25';
$string['15,70,15'] = '15-70-15';
$string['20,30,30,20'] = '20-30-30-20';
$string['noviewlayouts'] = '%s カラムページのレイアウトがありません。';
$string['cantaddcolumn'] = 'あなたはこれ以上、このページにカラムを追加できません。';
$string['cantremovecolumn'] = 'あなたはこのページから最後のカラムを削除できません。';
>>>>>>> 92099ba5d5a5390b497675e7809f65e21f9a5091
$string['blocktypecategory.external'] = '外部';
$string['blocktypecategory.fileimagevideo'] = 'メディア';
$string['blocktypecategory.general'] = '一般';
$string['blocktypecategory.internal'] = '個人情報';
$string['blocktypecategorydesc.external'] = '外部オプションを表示するにはクリックしてください。';
$string['blocktypecategorydesc.fileimagevideo'] = 'メディアオプションを表示するにはクリックしてください。';
$string['blocktypecategorydesc.general'] = '一般オプションを表示するにはクリックしてください。';
$string['blocktypecategorydesc.internal'] = '個人情報オプションを表示するにはクリックしてください。';
$string['blocktypecategorydesc.blog'] = '日誌オプションを表示するにはクリックしてください。';
<<<<<<< HEAD
$string['draft'] = '下書き';
$string['drafttextblockdescription'] = 'あなたがテキストを誰にも表示したくない場合、ブロックを下書きとして保存してください。テキストが公開された場合、再度下書きには戻せません。';
=======
>>>>>>> 92099ba5d5a5390b497675e7809f65e21f9a5091
$string['notitle'] = 'タイトルなし';
$string['clickformoreinformation1'] = '詳細情報を表示およびコメントを投稿するにはクリックしてください。';
$string['detailslinkalt'] = '(詳細)';
$string['Browse'] = '閲覧';
$string['Search'] = '検索';
$string['noartefactstochoosefrom'] = '申し訳ございません、選択するアーティファクトはありません。';
$string['access'] = 'アクセス';
$string['noaccesstoview'] = 'あなたにはこのページにアクセスするためのパーミッションがありません。';
<<<<<<< HEAD
$string['wrongblocktype'] = '提供されたIDは有効なブロックのものではありません。';
$string['changeviewtheme'] = 'あなたがこのページに選択したテーマは廃止されています。別のテーマを選択してください。';
$string['nothemeselected1'] = 'インスティテューションテーマを使用する';
$string['usesitetheme'] = 'サイトテーマを使用する';
$string['quickedit'] = 'クイック編集';
$string['Template'] = 'テンプレート';
$string['allowcopying'] = 'コピーを許可する';
$string['retainviewrights2'] = 'ポートフォリオのコピー時にアクセスを保持する';
$string['templatedescriptionplural3'] = 'あなたが選択したポートフォリオに人がアクセスできる場合、その人は自分のコピーを作成できます。';
$string['retainviewrightsdescription3'] = '他の人によりコピーされたポートフォリオからあなたが選択したものを閲覧できるようアクセス権を与えます。希望すればコピー後に閲覧アクセスを無効にできます。このポートフォリオのコピーから作成されたポートフォリオが同じアクセス権を保持することはありません。';
$string['retainviewrightsgroupdescription3'] = '他の人がコピーしたポートフォリオの中から選択したものをこのグループのメンバが閲覧できるようアクセス権を与えます。希望すればコピー後に閲覧アクセスを無効にできます。このポートフォリオのコピーから作成されたポートフォリオが同じアクセス権を保持することはありません。';
$string['choosetemplatepageandcollectiondescription'] = '<p>ここでは新しいページ作成の出発点としてあなたがコピーを許可されているページを検索できます。あなたはページの名称をクリックしてそれぞれのページのプレビューを表示できます。あなたがコピーしたいページを見つけた場合、ページのコピーを作成するため該当する「ページをコピーする」ボタンをクリックしてコピーされたページの修正を開始してください。あなたは関連する「コレクションをコピーする」ボタンをクリックしてページが属しているコレクション全体をコピーできます。</p>';
$string['choosetemplategrouppageandcollectiondescription'] = '<p>ここでは新しいページ作成の出発点としてこのグループがコピーを許可されているページを検索できます。あなたはページの名称をクリックしてそれぞれのページのプレビューを表示できます。あなたがコピーしたいページを見つけた場合、ページのコピーを作成するため該当する「ページをコピーする」ボタンをクリックしてコピーされたページの修正を開始してください。あなたは関連する「コレクションをコピーする」ボタンをクリックしてページが属しているコレクション全体をコピーできます。</p><p><strong>注意:</strong> 現在、日誌、日誌エントリ、プランおよびレジュメ情報をグループでコピーできません。</p>';
$string['choosetemplateinstitutionpageandcollectiondescription'] = '<p>ここでは新しいページ作成の出発点としてこのインスティテューションがコピーを許可されているページを検索できます。あなたはページの名称をクリックしてそれぞれのページのプレビューを表示できます。あなたがコピーしたいページを見つけた場合、ページのコピーを作成するため該当する「ページをコピーする」ボタンをクリックしてコピーされたページの修正を開始してください。あなたは関連する「コレクションをコピーする」ボタンをクリックしてページが属しているコレクション全体をコピーできます。</p><p><strong>注意:</strong> 現在、日誌、日誌エントリ、プランおよびレジュメ情報をインスティテューションでコピーできません。</p>';
$string['choosetemplatesitepageandcollectiondescription1'] = '<p>ここでは新しいページ作成の出発点としてサイトレベルでコピー可能なページを検索できます。あなたはページの名称をクリックしてそれぞれのページのプレビューを表示できます。あなたがコピーしたいページを見つけた場合、ページのコピーを作成するため該当する「ページをコピーする」ボタンをクリックしてコピーされたページの修正を開始してください。あなたは関連する「コレクションをコピーする」ボタンをクリックしてページが属しているコレクション全体をコピーできます。</p><p><strong>注意:</strong> 現在、日誌、日誌エントリ、プランおよびレジュメ情報をサイトレベルのページでコピーできません。</p>';
=======
$string['changeviewtheme'] = 'あなたがこのページに選択したテーマは廃止されています。別のテーマを選択してください。';
$string['nothemeselected1'] = 'インスティテューションテーマを使用する';
$string['Template'] = 'テンプレート';
$string['allowcopying'] = 'コピーを許可する';
$string['retainviewrights1'] = 'ページまたはコレクションのコピー時にページアクセスを保持する';
$string['templatedescriptionplural2'] = 'あなたが選択したページまたはコレクションにユーザがアクセスできる場合、そのユーザは自分のコピーを作成できます。';
$string['retainviewrightsdescription2'] = '他のユーザがコピーしたページまたはコレクションの中から選択したものをあなたが閲覧できるようアクセス権を与えます。希望すればコピー後にユーザが閲覧アクセスを無効にできます。このページまたはコレクションのコピーからコピーされたページまたはコレクションが同じアクセス権を保持することはありません。';
$string['retainviewrightsgroupdescription2'] = '他のユーザがコピーしたページまたはコレクションの中から選択したものをこのグループのメンバが閲覧できるようアクセス権を与えます。希望すればコピー後にユーザが閲覧アクセスを無効にできます。このページまたはコレクションのコピーからコピーされたページまたはコレクションが同じアクセス権を保持することはありません。';
$string['choosetemplatepageandcollectiondescription'] = '<p>ここでは新しいページ作成の出発点としてあなたがコピーを許可されているページを検索できます。あなたはページの名称をクリックしてそれぞれのページのプレビューを表示できます。あなたがコピーしたいページを見つけた場合、ページのコピーを作成するため該当する「ページをコピーする」ボタンをクリックしてコピーされたページの修正を開始してください。あなたは関連する「コレクションをコピーする」ボタンをクリックしてページが属しているコレクション全体もコピーできます。</p>';
$string['choosetemplategrouppageandcollectiondescription'] = '<p>ここでは新しいページ作成の出発点としてこのグループがコピーを許可されているページを検索できます。あなたはページの名称をクリックしてそれぞれのページのプレビューを表示できます。あなたがコピーしたいページを見つけた場合、ページのコピーを作成するため該当する「ページをコピーする」ボタンをクリックしてコピーされたページの修正を開始してください。あなたは関連する「コレクションをコピーする」ボタンをクリックしてページが属しているコレクション全体もコピーできます。</p><p><strong>注意:</strong> 現在、日誌、日誌エントリ、プランおよびレジュメ情報をグループでコピーできません。</p>';
$string['choosetemplateinstitutionpageandcollectiondescription'] = '<p>ここでは新しいページ作成の出発点としてこのインスティテューションがコピーを許可されているページを検索できます。あなたはページの名称をクリックしてそれぞれのページのプレビューを表示できます。あなたがコピーしたいページを見つけた場合、ページのコピーを作成するため該当する「ページをコピーする」ボタンをクリックしてコピーされたページの修正を開始してください。あなたは関連する「コレクションをコピーする」ボタンをクリックしてページが属しているコレクション全体もコピーできます。</p><p><strong>注意:</strong> 現在、日誌、日誌エントリ、プランおよびレジュメ情報をインスティテューションでコピーできません。</p>';
$string['choosetemplatesitepageandcollectiondescription1'] = '<p>ここでは新しいページ作成の出発点としてサイトレベルでコピー可能なページを検索できます。あなたはページの名称をクリックしてそれぞれのページのプレビューを表示できます。あなたがコピーしたいページを見つけた場合、ページのコピーを作成するため該当する「ページをコピーする」ボタンをクリックしてコピーされたページの修正を開始してください。あなたは関連する「コレクションをコピーする」ボタンをクリックしてページが属しているコレクション全体もコピーできます。</p><p><strong>注意:</strong> 現在、日誌、日誌エントリ、プランおよびレジュメ情報をサイトレベルのページでコピーできません。</p>';
$string['copiedblocksandartefactsfromtemplate'] = '%d 個のブロックおよび %d 件のアーティファクトを %s からコピーしました。';
>>>>>>> 92099ba5d5a5390b497675e7809f65e21f9a5091
$string['filescopiedfromviewtemplate'] = '%s からコピーされたファイル';
$string['viewfilesdirname'] = 'ページファイル';
$string['viewfilesdirdesc'] = 'コピーされたページのファイルです。';
$string['thisviewmaybecopied'] = 'コピーが許可されています。';
$string['thisviewmaynotbecopied'] = 'コピーは許可されていません。';
<<<<<<< HEAD
$string['copythisportfolio'] = 'このポートフォリオをコピーする';
$string['copyview'] = 'ページをコピーする';
$string['createemptyview'] = '空のページを作成する';
$string['copyaview'] = 'ページをコピーする';
$string['copyvieworcollection1'] = 'ポートフォリオをコピーする';
$string['confirmaddtitle1'] = 'ポートフォリオを作成する';
$string['confirmadddesc'] = 'あなたが作成したいものを選択してください:';
$string['confirmcopytitle'] = 'コピーを確認する';
$string['confirmcopydesc'] = 'あなたがコピーしたいものを選択してください:';
$string['confirmcopydesctogroup'] = 'アウトカムポートフォリオをコピーしたいグループを選択してください:';
$string['Untitled'] = 'タイトルなし';
$string['copyforexistingmembersprogress'] = 'ポートフォリオを既存のグループメンバにコピーする';
$string['existinggroupmembercopy'] = '既存のグループメンバにコピーする';
$string['existinggroupmembercopydesc2'] = '選択されたポートフォリオを既存のすべてのグループメンバの個人ポートフォリオエリアにコピーします。保存後、スライドスイッチはリセットされます。グループメンバはコピーを1回のみ取得できます。';
$string['copyfornewusers'] = '新しいアカウントにコピーする';
$string['copyfornewusersdescription3'] = '新しいアカウントが作成される場合、選択したポートフォリオのパーソナルコピーを新しいアカウント内に自動作成します。選択したポートフォリオをこれらの人が後で同様にコピーできるようにしたい場合、通常、コピーを許可してください。';
$string['copyfornewmembers'] = '新しいインスティテューションメンバにコピーする';
$string['copyfornewmembersdescription3'] = '%s のすべての新しいメンバに対して選択したポートフォリオのパーソナルコピーを自動作成します。選択したポートフォリオをこれらの人が後で同様にコピーできるようにしたい場合、通常、コピーを許可してください。';
$string['copyfornewgroups'] = '新しいグループにコピーする';
$string['copyfornewgroupsdescription2'] = '選択したポートフォリオを以下のロールの新しいグループすべてにコピーします:';
=======
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
$string['copyfornewusers'] = '新しいユーザにコピーする';
$string['copyfornewusersdescription2'] = '新しいユーザが作成された場合、選択したページまたはコレクションをユーザのアカウント内にパーソナルコピーとして自動作成します。選択したページまたはコレクションをこれらのユーザが後で同様にコピーできるようにしたい場合、コピーを許可してください。';
$string['copyfornewmembers'] = '新しいインスティテューションメンバにコピーする';
$string['copyfornewmembersdescription2'] = '%s のすべての新しいメンバに対して選択したページまたはコレクションのパーソナルコピーを自動作成します。選択したページまたはコレクションをこれらのユーザが後で同様にコピーできるようにしたい場合、コピーを許可してください。';
$string['copyfornewgroups'] = '新しいグループにコピーする';
$string['copyfornewgroupsdescription1'] = '選択したページおよびコレクションを以下のロールの新しいグループすべてにコピーします:';
>>>>>>> 92099ba5d5a5390b497675e7809f65e21f9a5091
$string['owner'] = 'オーナ';
$string['Owner'] = 'オーナ';
$string['owners'] = 'オーナ';
$string['show'] = '表示';
$string['searchviewsbyowner'] = 'ページをオーナで検索します:';
$string['selectaviewtocopy'] = 'あなたがコピーしたいページを選択してください:';
$string['listviews'] = 'ページを一覧表示する';
$string['nocopyableviewsfound'] = 'あなたがコピーできるページはありません。';
$string['noownersfound'] = 'オーナは見つかりませんでした。';
$string['Preview'] = 'プレビュー';
<<<<<<< HEAD
$string['viewscopiedfornewusersmustbecopyable'] = 'あなたは新しいアカウントにページがコピーされるよう設定する前にコピーを許可する必要があります。';
$string['viewswithretainviewrightsmustbecopyable'] = 'あなたはページが閲覧アクセスを保持するよう設定する前にコピーを許可する必要があります。';
$string['viewscopiedfornewgroupsmustbecopyable'] = 'あなたは新しいグループにページがコピーされるよう設定する前にコピーを許可する必要があります。';
$string['copynewusergroupneedsloggedinaccess'] = '新しいアカウントまたはグループにコピーされたページは登録済みの人にアクセス権を与える必要があります。';
$string['viewcopywouldexceedquota'] = 'このページを追加した場合、あなたのファイルクオータを越えてしまいます。';
$string['viewcreatewouldexceedquota'] = 'このページを作成した場合、あなたのファイルクオータを越えてしまいます。';
$string['blockcopypermission'] = 'ブロックコピー許可';
$string['blockcopypermissiondesc'] = 'このページを他の人がコピーできるようにした場合、あなたはこのブロックをどのようにコピーできるか選択できます。';
=======
$string['viewscopiedfornewusersmustbecopyable'] = 'あなたは新しいユーザにページがコピーされるよう設定する前にページのコピーを許可する必要があります。';
$string['viewswithretainviewrightsmustbecopyable'] = 'あなたはページが閲覧アクセスを保持するよう設定する前にコピーを許可する必要があります。';
$string['viewscopiedfornewgroupsmustbecopyable'] = 'あなたは新しいグループにページがコピーされるよう設定する前にコピーを許可する必要があります。';
$string['copynewusergroupneedsloggedinaccess'] = '新しいユーザまたはグループにコピーされるページに関してログインユーザにアクセス権を与える必要があります。';
$string['viewcopywouldexceedquota'] = 'このページを追加した場合、あなたのファイルクオータを越えてしまいます。';
$string['viewcreatewouldexceedquota'] = 'このページを作成した場合、あなたのファイルクオータを越えてしまいます。';
$string['blockcopypermission'] = 'ブロックコピー許可';
$string['blockcopypermissiondesc'] = 'このページを他のユーザがコピーできるようにした場合、あなたはこのブロックをどのようにコピーできるか選択できます。';
>>>>>>> 92099ba5d5a5390b497675e7809f65e21f9a5091
$string['defaultsort'] = 'アルファベット順';
$string['latestcreated'] = '作成日時';
$string['latestmodified'] = '最終更新日時';
$string['latestviewed'] = '最終閲覧日時';
$string['mostvisited'] = '閲覧回数';
$string['mostcomments1'] = 'コメント数';
$string['dashboard'] = 'ダッシュボード';
$string['Profile'] = 'プロファイル';
<<<<<<< HEAD
$string['profile'] = 'プロファイル';
$string['Portfolio'] = 'ポートフォリオ';
$string['Portfolios'] = 'ポートフォリオ';
$string['Pages'] = 'ページ';
$string['Collection'] = 'コレクション';
$string['Grouphomepage'] = 'グループホームページ';
$string['grouphomepage'] = 'グループホームページ';
$string['Progress'] = 'ポートフォリオ完了';
$string['progress'] = 'ポートフォリオ完了';
$string['activity'] = '活動';
$string['Activity'] = '活動';
$string['grouphomepagedescription'] = 'グループホームページにはこのグループのAboutタブに表示されるコンテンツを含みます。';
$string['pageaccessrules'] = 'ページアクセスルール';
$string['sharedwithme'] = '私への共有';
$string['sharedwithellipsis'] = '共有対象 ...';
$string['sharedwithdescription'] = 'あなたがこのブロックに表示したい他の人のポートフォリオを選択してください。';
=======
$string['Portfolio'] = 'ポートフォリオ';
$string['Grouphomepage'] = 'グループホームページ';
$string['grouphomepagedescription'] = 'グループホームページにはこのグループのAboutタブに表示されるコンテンツを含みます。';
$string['pageaccessrules'] = 'ページアクセスルール';
$string['sharedwithme'] = '私への共有';
>>>>>>> 92099ba5d5a5390b497675e7809f65e21f9a5091
$string['titleanddescription'] = 'タイトル、説明、タグ';
$string['titleanddescriptionnotags'] = 'タイトル、説明';
$string['titleanddescriptionandtagsandowner'] = 'タイトル、説明、タグ、オーナ';
$string['tagsonly'] = 'タグのみ';
$string['tagsonly1'] = 'タグ';
<<<<<<< HEAD
$string['matchalltags'] = 'すべてのタグに合致する';
$string['matchalltagsdesc'] = 'タグをカンマで区切ってください。例: 猫,ぶち猫';
$string['sharedviewsdescription'] = 'このページではあなたが共有しているページの中から直近に修正またはコメントされたページが一覧表示されます。これらの共有ページには直接あなたが共有しているページ、オーナのフレンドが共有しているページ、あなたのグループが共有しているページがあります。';
$string['sharedwith'] = '共有対象';
$string['sharewith'] = '共有対象';
$string['general'] = '一般';
$string['searchfor'] = '検索 ...';
$string['institutions'] = 'インスティテューション';
$string['groups'] = 'グループ';
=======
$string['sharedviewsdescription'] = 'このページではあなたが共有しているページの中から直近に修正またはコメントされたページが一覧表示されます。これらの共有ページには直接あなたが共有しているページ、オーナのフレンドが共有しているページ、あなたのグループが共有しているページがあります。';
$string['sharedwith'] = '共有対象';
$string['general'] = '一般';
$string['searchfor'] = '検索 ...';
$string['institutions'] = 'インスティテューション';
>>>>>>> 92099ba5d5a5390b497675e7809f65e21f9a5091
$string['search'] = '検索';
$string['Me'] = '私';
$string['entersearchquery'] = '検索クエリを入力してください。';
$string['allow'] = '許可';
$string['comments'] = 'コメント';
$string['moderate'] = 'モデレート';
<<<<<<< HEAD
$string['review'] = 'レビュー';
=======
>>>>>>> 92099ba5d5a5390b497675e7809f65e21f9a5091
$string['sharedby'] = '共有';
$string['retractable'] = '格納';
$string['retractabledescription'] = 'ヘッダクリック時にこのブロックが格納されるようにするにはこのオプションを有効にしてください。';
$string['retractedonload'] = '自動格納';
$string['retractedonloaddescription'] = 'このブロックが自動的に格納されるようにするにはこのオプションを有効にしてください。';
$string['textbox1'] = 'ノート';
$string['image'] = 'イメージ';
$string['addcontent'] = 'コンテンツを追加する';
$string['theme'] = 'テーマ';
<<<<<<< HEAD
$string['choosethemedesc'] = 'ページのテーマを選択します。';
$string['lockblocks1'] = 'ブロックの削除を防ぐ';
$string['lockblocksdescription2'] = 'あなたはページ編集時のブロックの削除を防げます。あなたはブロックの場所およびサイズはそのまま変更できます。あなたはこの設定をいつでも変更して必要に応じてブロックを削除できます。';
$string['lockblocksdescriptioninstitution1'] = 'あなたはパーソナルまたはグループポートフォリオエリアへのページコピー時のブロックの削除を防げます。この設定はこのサイトまたはインスティテューションページのあなたの編集に影響しません。';
$string['instructions'] = 'インストラクション';
$string['advanced'] = '高度';
$string['timeline'] = 'タイムライン';
$string['timelinespecific'] = '%s のタイムライン';
$string['savetimeline'] = 'タイムラインに保存する';
$string['savetimelinespecific'] = '%s のタイムラインを保存する';
$string['noversionsexist'] = 'ページ「 %s 」に表示するための保存されたバージョンはありません。';
$string['previousversion'] = '前のバージョン';
$string['nextversion'] = '次のバージョン';
$string['versionnumber'] = 'バージョン %s';
$string['gotonextversion'] = '次のバージョンに移動する';
$string['gotopreviousversion'] = '前のバージョンに移動する';
$string['loadingtimelinecontent'] = '「 %s 」のタイムラインを読み込んでいます。ページに多くのバージョンがある場合、この処理に時間を要する場合があります。';
$string['timelinemissingcontent'] = '一部のコンテンツが不足しているため %s を表示できません (バージョン %s)。';
$string['bottom'] = 'ボトム';
$string['top'] = 'トップ';
$string['blockssizeupdated'] = 'ブロックサイズが正常に変更されました。';
$string['dimensionsnotset'] = 'ブロックサイズが設定されていません。';
$string['dontaskagain'] = '承認および記憶する';
$string['pleaseconfirmtranslate'] = 'ページレイアウトを変換する';
$string['confirmconversionmessage'] = 'Mahara 19.10の一部として私たちはページレイアウトの新しい作成方法を導入しました。このページを編集できるようにするにはあなたは古いレイアウトを新しいレイアウトに変換する必要があります。
あなたがこのページのみを変換したい場合、「承認」をクリックしてください。すべてのページを変換して再度このメッセージを表示したくない場合、「承認および記憶する」をクリックしてください。このオプションはあなたの<a href="%s">プレファレンス</a>で変更できます。編集せずにページに戻るには「キャンセル」をクリックしてください。';
$string['accessibleview'] = 'アクセシブルレイアウト';
$string['accessibleviewdescription'] = '1カラムページレイアウトを作成してドラッグ＆ドロップの代わりにキーボードで編集します。';
$string['itemgrabbed'] = 'アイテムグラブ: %s';
$string['itemdropped'] = 'アイテムドロップ: %s';
$string['itemreorder'] = 'リストが並べ替えられました。%s アイテムのポジションが %s / %s になりました。';
$string['reordercancelled'] = '並べ替えがキャンセルされました。';
$string['accessibilitymodedescription1'] = 'このページではアクセシブルレイアウトが有効にされています。ページにブロックを追加するには「新しいブロックを追加する」ボタンをクリックしてください。<br>
このモードではページはページ幅一杯に次々と表示されます。ブロックの位置を変更するにはそのブロックに移動して「Enter」キーでそのブロックを掴んだ後、あなたのキーボードの矢印キーでブロックのリストを上下に動かしてください。';
$string['blocktypeis'] = '%s ブロックタイプ';
$string['coverimage'] = 'カバーイメージ';
$string['coverimagefolder'] = 'カバーイメージ';
$string['coverimagedescription'] = '推奨サイズは幅180px、高さ130pxです。';
$string['locktemplate'] = 'テンプレート';
$string['locktemplatedescription'] = 'この設定を有効にした場合、個人アカウントにページをコピーした人はページまたはアーティファクトのインストラクションを変更できないようになります。';
$string['linktooriginaltemplate'] = 'オリジナルテンプレート';
$string['linktooriginaltemplatedescription'] = 'このページはテンプレートをベースにしています。これはテンプレートへのリンクです。';
$string['linktooriginaltemplatedescriptiondeleted'] = 'このページはテンプレートをベースにしています。';
$string['deletedview'] = 'ページ削除';
$string['copylocked'] = 'コピーロック';
$string['copylockeddescription'] = 'これはテンプレートコピーです。このコピーのインストラクションフィールドをロック/ロック解除するにはこの設定を変更してください。';
$string['linktosubmissionoriginaltitle'] = 'オリジナルポートフォリオ';
$string['linktosubmissionoriginallink'] = '<a href="%s">%s</a>';
$string['linktosubmissionoriginaldescription'] = 'このポートフォリオは提出を目的として作成されたコピーです。あなたはリンクでオリジナルポートフォリオに移動できます。';
$string['linktosubmissionoriginaldeleted'] = '削除済み';
$string['linktosubmissionoriginaldeleteddescription'] = 'このポートフォリオは提出を目的として作成されたコピーです。オリジナルポートフォリオは削除されました。';
$string['linkedtosourceportfoliotitle'] = '提出';
$string['linkedtosourceportfoliodescription'] = 'この設定を「No」に切り替えた場合、オリジナルのポートフォリオとの関連付けが解除されます。あなたが提出を目的として作成したこのコピーは通常のポートフォリオと同様に使用できます。';
$string['linkedtosourceportfoliodescriptioninacollection'] = 'このページは送信されたコレクションの一部です。コレクション設定でコレクション全体の提出ステータスを変更できます。';
$string['canteditcollectionlocked'] = 'コレクションがロックされているため、ポートフォリオページを編集できません。';
$string['canteditprogress'] = 'コレクションがロックされているか、ページがテンプレートからコピーされているため、ポートフォリオ完了ページを編集できません。';
$string['accessdeniedaccesss'] = 'あなたはこれ以上アクセスパーミッションを変更できません。';
$string['signoff'] = '承認';
$string['signoffhelp'] = 'あなたが完了したページを表示します。';
$string['signoffhelppage'] = 'あなたのすべてのエビデンス追加を終了した場合、このページを「承認」マークしてください。';
$string['signoffdesc1'] = 'ポートフォリオのオーナはすべての要件を満たした場合にこのページを承認して次のステップに進む準備の完了を示せます。これはポートフォリオ完了ページがあるコレクションでの使用が最適です。';
$string['verify'] = '検証';
$string['verifydesc2'] = 'ポートフォリオ完了手続きの一環としてマネージャがこのページを確認する必要があるかどうかを決定してください。';
$string['signedoff'] = '承認';
$string['verified'] = '検証';
$string['signoffpagetitle'] = '承認ページ';
$string['signoffpagedesc'] = 'あなたがすべての必要条件を満たしたことを示したい場合、「Yes」を選択してこのページを承認してください。中止するには「No」を選択してください。';
$string['signoffpageundodesc1'] = '「Yes」を選択した場合、あなたは承認のステータスを削除することになります。また、ワークフローの一部である場合、検証も削除されます。中断する場合、「No」を選択してください。';
$string['signoffpageconfirm'] = 'この処理を実行してもよろしいですか?';
$string['verifypagetitle'] = 'ページを検証する';
$string['verifypagedesc'] = 'ポートフォリオのオーナがこのページすべての必要条件を満たしていると検証した場合、「Yes」を選択してください。検証せずにページに戻るには「No」を選択してください。';
$string['signoffdetails'] = '承認詳細';
$string['updatesignoff'] = 'ページ承認を更新する';
$string['updateverify'] = 'ページ検証を更新する';
$string['viewsignoffdetails'] = '承認詳細情報を表示する';
$string['readyforverification'] = 'このページは検証準備を完了しています。';
$string['signedoffbyondate'] = '%s がこのページを %s に承認しました。';
$string['verifiedbyondate'] = '%s がこのページを %s に検証しました。';
$string['cannoteditaftersignoff'] = 'あなたはページ承認後に「 %s 」を更新できません。';
$string['removedverifynotificationsubject'] = '%s の検証が削除されました。';
$string['removedverifynotification'] = 'ページのオーナ %s が承認を削除しました。そのためあなたの検証も削除されました。再度検証をマークできる状態であるか確認するためページにアクセスしてください。';
$string['signoffviewupdated'] = '承認ステータスが更新されました。';
$string['verifyviewupdated'] = '検証ステータスが更新されました。';
$string['wrongsignoffviewrequest'] = 'あなたにはリクエストされた処理を実行するためのパーミッションがありません。';
$string['startdate_rule'] = '開始日は完了日の前に設定してください。';
$string['add_activity_button'] = '活動ページを追加する';
$string['activity_info_fieldset'] = '活動情報';
$string['activity_info_title'] = '活動説明';
$string['activity_info_desc'] = '学習者が到達すべき活動を記述してください。これはページタイトルの長いバージョンです。';
$string['activity_info_subject'] = '件名';
$string['activity_info_subject_desc'] = 'この活動に最も適した件名を選択してください。';
$string['activity_info_supervisor'] = '担当スタッフ';
$string['activity_info_activity_info_supervisor_desc'] = 'この活動を担当するグループチュータまたはグループ管理者を選択してください。';
$string['activity_info_start_date'] = '開始日';
$string['activity_info_end_date'] = '終了日';
$string['activity_info_start_date_desc'] = '学習者がこの活動で作業を開始する日付を選択してください。';
$string['activity_info_end_date_desc'] = '学習者がこの活動で作業を終了する日付を選択してください。';
$string['activity_info_achievement_levels'] = '達成レベル';
$string['activity_info_achievement_levels_desc'] = 'この特定の活動に対する達成レベルを定義してください。';
$string['activity_info_achievement_level'] = 'レベル %s';
$string['activity_info_achievement_level_0'] = '未実証';
$string['activity_info_staff'] = '担当スタッフ';
$string['timeframe'] = '期間';
$string['subject'] = '件名';
$string['strategy_support'] = '戦略およびサポート';
$string['strategy_support_desc'] = 'あなたが学習者をサポートするための戦略およびサポート推奨を記述してください。';
$string['resources_support'] = 'リソース';
$string['resources_support_desc'] = 'あなたの使用リソースおよび学習者のサポート方法を記述してください。';
$string['learner_support'] = '学習者サポート';
$string['learner_support_desc'] = 'この活動を達成するためにあなたが学習者をどのようにサポートしたか記述してください。';
$string['supportupdatedfor'] = '「 %s 」更新完了';
=======

?>
>>>>>>> 92099ba5d5a5390b497675e7809f65e21f9a5091
