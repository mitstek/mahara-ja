<?php
/**
 *
 * @package    mahara
 * @subpackage lang (Japanese)
 * @translator Mitsuhiro Yoshida (https://mitstek.com/)
 * @started    2008-01-19 11:25:00 UTC
 * @updated    2026-08-22 15:13:43 UTC
 * @license    https://www.gnu.org/licenses/gpl-3.0.html GNU GPL version 3 or later
 * @copyright  For copyright information on Mahara, please see the README file distributed with this software.
 *
 */

defined('INTERNAL') || die();

$string['administration'] = '管理';
$string['installation'] = 'インストレーション';
$string['release'] = 'バージョン %s (%s)';
$string['copyright'] = 'Copyright &copy; 2006 onwards, <a href="https://mahara.org/community/contributors">Catalyst IT Limited and others</a>';
$string['installmahara'] = 'Maharaをインストールする';
$string['component'] = 'コンポーネントまたはプラグイン';
$string['componentdeprecated'] = 'コンポーネント「 %s 」非推奨';
$string['plugindeprecated'] = 'プラグイン非推奨';
$string['continue'] = '続ける';
$string['coredata'] = 'コアデータ';
$string['coredatasuccess'] = 'コアデータを正常にインストールしました。';
$string['fromversion'] = 'アップグレード前';
$string['Information'] = 'インフォメーション';
$string['installingplugin'] = '%s のインストール';
$string['installsuccess'] = '次のバージョンを正常にインストールしました:';
$string['toversion'] = 'アップグレード後';
$string['localdatasuccess'] = 'ローカルカスタマイゼーションを正常にインストールしました。';
$string['notinstalled'] = 'インストール未了';
$string['nothingtoupgrade'] = 'アップグレードするものはありません。';
$string['performinginstallation'] = 'インストール実行中 ...';
$string['performingupgrades'] = 'アップグレード実行中 ...';
$string['runupgrade'] = 'アップグレードを実行する';
$string['gotoinstallpage'] = '拡張機能ページでインストールする';
$string['successfullyinstalled'] = 'Maharaが正常にインストールされました。';
$string['thefollowingupgradesareready'] = '以下のアップグレードの準備ができました:';
$string['thefollowingpluginsareready'] = '以下の新しいプラグインを利用できます:';
$string['registerthismaharasite'] = 'このMaharaサイトを登録する';
$string['upgradeloading'] = '読み込み中 ...';
$string['upgrades'] = 'アップグレード';
$string['newplugins'] = '新しいプラグイン';
$string['upgradingplugin'] = '%s のアップグレード';
$string['upgradesuccess'] = 'アップグレードが正常に完了しました。';
$string['upgradesuccesstoversion'] = '次のバージョンへのアップグレードが正常に完了しました:';
$string['upgradefailure'] = 'アップグレードに失敗しました。';
$string['noupgrades'] = 'アップグレードするものはありません。あなたは最新版を使用しています。';
$string['youcanupgrade'] = 'あなたはMaharaを %s (%s) から %s (%s) へアップグレードできます。';
$string['upgradeinprogress'] = 'アップグレードは %s に開始されたましたが完了しませんでした。<a href="?rerun=1">このアップグレードを実行します</a>。';
$string['Plugin'] = 'プラグイン';
$string['plugin'] = 'プラグイン';
$string['jsrequiredforupgrade'] = 'あなたがインストールまたはアップグレードを実行するにはJavaScriptを有効にする必要があります。';
$string['dbnotutf8warning'] = 'あなたはUTF-8データベースを使用していません。Maharaはすべてのデータを内部的にUTF-8で保存します。あなたはこのアップグレードを試せますが、データベースのUTF-8へのコンバートをお勧めします。';
$string['dbnotutf8mb4_binwarning'] = 'あなたはutf8mb4文字セット (4-Byte UTF-8 Unicode Encoding) データベースを使用していません。Maharaは内部的にすべてのデータをutf8mb4として保存します。あなたはこのアップグレードを試せますが、あなたのデータベースを文字セット「utf8mb4」 および照合順序 「utf8mb4_bin」 を使用するよう変換をお勧めします。';
$string['dbcollationmismatch'] = 'あなたのデータベースカラムはデータベースデフォルトとは異なるコレーションを使用しています。すべてのカラムがデータベースと同じコレーションを使用することを確実にしてください。';
$string['maharainstalled'] = 'Maharaはすでにインストールされています。';
$string['cliadminpassword1'] = '管理アカウントのパスワード';
$string['cliadminemail1'] = '管理アカウンのメールアドレス';
$string['clisitename'] = 'サイト名';
$string['cliupdatesitenamefailed'] = 'サイト名の更新に失敗しました。';
$string['cliinstallerdescription'] = 'Maharaをインストールして必要なデータディレクトリを作成します。';
$string['cliinstallingmahara'] = 'Maharaをインストールする';
$string['cli_list_empty'] = 'リストする結果はありません。';
$string['versionnumber'] = 'バージョン: %s';
$string['plugintype'] = 'プラグイン: %s';
$string['updateeventlogconfigoption'] = 'あなたのconfig.phpファイルで$cfg->eventloglevel設定値を「masq」から「masquerade」に更新する必要があります。';
$string['registrationisoptout'] = '匿名登録データはオプトアウトになりました。';
$string['cli_upgrade_description'] = 'インストールされたMaharaのバージョンにMaharaデータベースおよびデータをアップグレードします。';
$string['cli_upgrade_title'] = 'Maharaをアップグレードする';
$string['cli_upgrade_force'] = '強制的にアップグレードして戻る';
$string['cli_upgrade_flag'] = '未完了のアップグレードが検出されました。再度アップグレードするにはコマンドに「-f」オプションを追加してください。';
$string['cliclearingcaches'] = 'Maharaキャッシュをクリアする';
$string['cliclearcachesdescription'] = 'キャッシュのクリアによりサーバにキャッシュされたデータが削除されます。キャッシュのクリアに危険性はありませんが、サーバおよびクライアントが新しい情報を計算してキャッシュするまであなたのサイトが遅くなる場合があります。';
$string['clearcachesheading'] = 'キャッシュをクリアする';
$string['clearcachessubmit'] = 'キャッシュをクリアする';
$string['clearingcachessucceed'] = 'すべてのキャッシュがクリアされました。';
$string['clearingcacheserror'] = 'キャッシュのクリア中にエラーが発生しました。このエラーに関する詳細情報を取得するにはログを確認してください。';
$string['maharanotinstalled'] = '現在、Maharaはインストールされていません。アップグレードの前にMaharaをインストールしてください。';
$string['adminhome'] = '管理ホーム';
$string['configsite'] = 'サイト設定';
$string['configusers'] = '人の管理';
$string['groups'] = 'グループ';
$string['managegroups'] = 'グループ管理';
$string['Extensions'] = '拡張機能';
$string['configextensions'] = '拡張機能管理';
$string['manageinstitutions'] = 'インスティテューション管理';
$string['webservicesmenu'] = 'ウェブサービス設定';
$string['embeddedurls'] = '埋め込みURL';
$string['sitesettings'] = 'サイト設定';
$string['sitesettingssdesc'] = 'サイト名、言語、テーマ等の基本的な内容を設定します。';
$string['staticpages'] = '固定ページ';
$string['institutionstaticpages'] = 'インスティテューション固定ページ';
$string['institutionstaticpages_help'] = '<h1>インスティテューション固定ページ</h1><p>変更はあなたのインスティテューションメンバにのみに表示されます。あなたがメンバに代わりにサイトのデフォルトコンテンツを表示させたいページでは「サイトデフォルトを使用する」を有効にしてください。</p><hr><h2>詳細情報</h2>
<p>サイトにはいくつかのページが組み込まれています:</p>
<dl>
  <dt>About<dt><dd>あなたのインスティテューションに関する重要な情報をフッタにリンクして共有します。</dd>
  <dt>ホーム (ダッシュボード)<dt> <dd>あなたのインスティテューションメンバのダッシュボードのパーソナライズされたセクションの上にコンテンツを追加してください。これはインスティテューション全体のお知らせに役立ちます。</dd>
  <dt>ログアウトホーム</dt> <dd>あなたのインスティテューションメンバに表示されるコンテンツをホームページに追加してください。</dd>
</dl>
<p>ある人が複数インスティテューションに属している場合、Maharaは固定ページの主インスティテューションとして1つのインスティテューションを割り当てます。その人はどのインスティテューションを主インスティテューションにするか選択できません。</p>';
$string['staticpageinstitutionbad'] = 'あなたはインスティテューション「 %s 」の固定ページにアクセスまたは編集できません。';
$string['usedefault'] = 'サイトデフォルトを使用する';
$string['editsitepage.pageusedefault_help'] = '<h1>サイトデフォルトを使用する</h1><p>このページにサイトのデフォルトコンテンツを表示します。</p>';
$string['staticpagesdesc'] = 'ホームページおよび「About」のコンテンツを編集します。';
$string['staticpagesinstdesc'] = 'インスティテューション固定ページのコンテンツを編集します。';
$string['institutionprivacypagedescription'] = 'サイトプライバシ保護方針に加えてあなたのインスティテューションに表示されるプライバシ保護方針を編集してください。あなたが最後に編集したバージョンは自動的に最新のプライバシ保護方針となります。あなたには参考として最新のサイトプライバシ保護方針が表示されています。';
$string['institutiontermspagedescription'] = 'サイト利用条件に加えてあなたのインスティテューションに表示される利用条件を編集してください。あなたが最後に編集したバージョンは自動的に最新の利用条件となります。あなたには参考として最新のサイト利用条件が表示されています。';
$string['institutionprivacytermsdesc'] = 'インスティテューションのプライバシ保護方針または利用条件を追加または編集します。';
$string['noinstitutionprivacy'] = 'このインスティテューションにはまだプライバシ保護方針がありません。';
$string['noinstitutionterms'] = 'このインスティテューションにはまだ利用条件がありません。';
$string['menus'] = 'メニュー';
$string['menusdescription'] = '「リンクおよびリソースメニュー」およびフッタメニュー内のリンクおよびファイルを管理します。';
$string['sharesitefilesdesc1'] = 'サイトポートフォリオを共有します。';
$string['shareinstitutionfilesdesc1'] = 'インスティテューションポートフォリオを共有します。';
$string['sitefiles'] = 'サイトファイル';
$string['sitefonts'] = 'フォント';
$string['sitefontsdesc'] = 'スキン内で誰でも利用できるフォントをアップロードおよび管理します。';
$string['sitelicenses'] = 'ライセンス';
$string['sitelicensesadd'] = 'ライセンスを追加する';
$string['sitelicensesdesc'] = '人が自分のコンテンツで使用できるライセンス一覧を設定します。';
$string['sitelicensesdisablednote1'] = '<b>注意</b>: 現在、ライセンスメタデータは無効にされています。人がライセンスを指定できるようにするにはあなたは「<a href="%sadmin/site/options.php">サイト設定</a>」の「サイト設定」セクションでライセンスメタデータを有効にする必要があります。';
$string['sitelicensesedit'] = 'ライセンスを編集する';
$string['sitefilesdescription'] = '「リンクおよびリソースメニュー」およびサイトページに配置できるファイルをアップロードおよび管理します。';
$string['siteskins'] = 'サイトスキン';
$string['siteskinsdesc'] = '誰でも利用できるページスキンを作成および管理します。';
$string['siteviews'] = 'サイトページ';
$string['siteviewscollections1'] = 'サイトポートフォリオ';
$string['siteviewsdesc'] = 'サイト全体のページ、ページテンプレートおよびコレクションを作成および管理します。';
$string['site_template'] = 'ビルトイン';
$string['site_template_desc'] = 'ビルトインサイトテンプレート';
$string['networking'] = 'ネットワーキング';
$string['networkingdesc'] = '別のサイトへのネットワーキングを設定します。';
$string['cookieconsent'] = 'クッキーコンセント';
$string['cookieconsentdesc'] = '「クッキーコンセント」プライバシシステムを設定します。';
$string['thememissing'] = 'テーマ「 %s 」がありません。このテーマはデフォルトテーマに設定されています。';
$string['parentthememissing'] = 'テーマ「 %s 」の親テーマ「 %s 」がないため修正する必要があります。このテーマはデフォルトテーマに設定されています。';
$string['staffusers1'] = 'サイトスタッフ';
$string['staffusersdesc1'] = 'サイトスタッフのパーミッションを割り当てます。';
$string['adminusers1'] = 'サイト管理者';
$string['adminusersdescription'] = 'サイト管理者アクセス権を割り当てます。';
$string['settings'] = '設定';
$string['institution'] = 'インスティテューション';
$string['institutions'] = 'インスティテューション';
$string['Institutions'] = 'インスティテューション';
$string['ninstitutions'] = '%s インスティテューション';
$string['institutiondetails'] = 'インスティテューション詳細';
$string['institutionauth'] = 'インスティテューション認証局';
$string['institutionsettingsdesc'] = 'インスティテューションを設定および管理します。';
$string['lastinstitution'] = '前のインスティテューション';
$string['adminnotifications'] = '管理者通知';
$string['administratornotifications'] = '管理者通知';
$string['notifications_help'] = '<h1>管理者通知</h1>
<p>Tこのページにはすべての管理者および管理通知に関する管理者の通知設定が一覧表示されています。それぞれのタイプの通知に関して、少なくとも1人の管理者が受信するよう設定する必要があります。</p>';
$string['adminnotificationsdescription'] = '管理者が受信するシステム通知の概要です。';
$string['uploadcsv1'] = 'CSVでアカウントを追加または更新する';
$string['uploadcsvbutton'] = 'アカウントを追加または更新する';
$string['uploadcsvdesc'] = '新しいアカウントの詳細または既存アカウントの更新を含むCSVファイルをアップロードします。';
$string['uploadgroupcsv'] = 'CSVでグループを追加する';
$string['uploadgroupmemberscsv'] = 'CSVでグループメンバを更新する';
$string['usersearch'] = '人検索';
$string['searchforaperson'] = '人を探す';
$string['usersearchdescription1'] = 'すべての人を検索してアカウントに管理行為を実施します。';
$string['peoplesearchinstructions'] = 'あなたは氏名またはメールアドレスを検索ボックスに入力して人を検索できます。あなたの検索を絞り込むためのオプションを表示するには「高度なオプション」をクリックしてください。';
$string['emailaddresshidden'] = 'メールアドレス秘匿';
$string['inactive'] = 'アカウント非アクティブ';
$string['inactivefor1'] = '現在、「 %s 」 はアクティブアカウントではありません。';
$string['noadminspecified'] = '少なくとも1名の現在の管理者が必要です。';
$string['adminmenu_back'] = 'ダッシュボードに戻る';
$string['administergroups'] = 'グループを管理する';
$string['administergroupsdesc'] = 'グループ、その管理者および利用可能なスペースを管理します。';
$string['groupcategoriesdescription'] = 'グループカテゴリを追加および編集します。';
$string['uploadgroupcsvdesc'] = '新しいグループまたは既存のグループの更新を含むCSVファイルをアップロードします。';
$string['uploadgroupmemberscsvdescription'] = 'グループメンバを含むCSVファイルをアップロードします。';
$string['institutionmembersdescription'] = '人をインスティテューションに関連付けます。';
$string['institutionstaffdesc1'] = 'インスティテューションスタッフのパーミッションを割り当てます。';
$string['institutionadminsdescription'] = 'インスティテューション管理者アクセス権を割り当てます。';
$string['institutionviews'] = 'インスティテューションページ';
$string['institutionviewsdesc'] = 'インスティテューションのページ、ページテンプレートおよびコレクションを作成および管理します。';
$string['institutionfiles'] = 'インスティテューションファイル';
$string['institutionfilesdescription'] = 'インスティテューションページで使用するファイルをアップロードおよび管理します。';
$string['pluginsfields'] = 'プラグイン設定';
$string['pluginadmin'] = 'プラグイン管理';
$string['pluginadmindescription'] = 'プラグインをインストールおよび設定します。';
$string['missingplugindisabled1'] = 'インストール済みプラグイン「 %s 」が見つからなかったため、無効にされました。';
$string['installedpluginsmissing'] = '次のプラグインがインストールされていますが、見つかりませんでした。';
$string['ensurepluginsexist'] = 'あなたのすべてインストール済みプラグインが %s 配下で利用可能およびウェブサーバから読み込めることを確認してください。';
$string['plugintypedescription_blocktype'] = 'ページに配置するプレースホルダブロック内で表示されるブロックの表示順を変更するには個別のブロックを移動してください。数字は特定のブロックタイプがサイトですでに何回使用されているか示します。';
$string['htmlfilters'] = 'HTMLフィルタ';
$string['htmlfiltersdescription1'] = 'HTML Purifierのフィルタをインストールします。';
$string['newfiltersdescription1'] = '新しいHTMLフィルタをインストールするにはファイルをフォルダ %s に展開して「インストール」ボタンを選択してください。';
$string['filtersinstalled'] = 'フィルタがインストールされました。';
$string['nofiltersinstalled'] = 'インストールされたHTMLフィルタはありません。';
$string['allowediframesites1'] = 'iframeソース';
$string['iframemanagement'] = 'iframeソース管理';
$string['iframesitesdescriptionshort'] = 'iframe経由で利用可能な外部コンテンツの埋め込みを許可します。';
$string['allowediframesitesdescription1'] = 'これらのサイトからのiframe経由のコンテンツ埋め込みは許可されています。';
$string['newurl.url_help'] = '<h1>サイト</h1><p>iframeソースURLの先頭で一致するテキスト (https://なし) です。使用できるのは文字、数字および記号 (\'.\', \'/\', \'_\', \'-\' ) のみです。</p>';
$string['newurl.name_help'] = '<h1>表示名</h1>
<p>「外部メディア」セクション設定時に作成者に表示されるサイト名です。</p>';
$string['iframeinvalidsite'] = 'このフィールドには有効なホストおよび任意のパスを入力してください。フィールドには半角英数字、「.」「/」「_」および「-」のみ使用できます。';
$string['iframeiconhost'] = 'アイコンホスト';
$string['urlalreadyexists'] = 'このURLはすでに存在します。あなたはURLを重複して追加できません。';
$string['newurl.iframeiconhost_help'] = '<h1>アイコン</h1>
<p>必要に応じてファビコンイメージに別のホストを指定してください。同じサイト名のすべてのサイトはこのアイコンを使用します。</p>';
$string['cleanurls'] = 'クリーンURL';
$string['cleanurlsdescription'] = '<p>あなたのサイトのプロファイル、グループホームページおよびポートフォリオページを人間に解読可能なURLを使用するよう設定できます。例えば以下のようになります:
<ul>
<li>https://mahara.example.com/user/bob</li>
<li>https://mahara.example.com/group/bobs-group</li>
<li>https://mahara.example.com/user/bob/bobs-portfolio-page</li>
</ul>

あなたのサーバ管理者はこのオプションを有効にする前に受信リクエストのURLを書き換えれるようウェブサーバを設定する必要があります。</p>
<p>この作業のインストラクションに関してMahara wikiの<a href="https://git.mahara.org/catalyst/mahara/-/wikis/System-administration/Configuring-clean-URLs">「クリーンURL設定 (英語)」</a>をご覧ください。</p>';
$string['cleanurlsdisabled'] = 'クリーンURLは無効にされています。';
$string['cleanurlsettings'] = 'クリーンURL設定';
$string['regenerateurls'] = 'URLを再生成する';
$string['regenerateurlsdescription'] = 'すべてのクリーンURLをサイトから削除した後、ユーザ名、グループ名およびページタイトルを使用してクリーンURLを自動的に再生成します。';
$string['regenerateurlsconfirm1'] = '本当にこの処理を実行してもよろしいですか? 既存のカスタムURLすべてが置換されます。';
$string['generateduserurls'] = '%s プロファイルURLを生成しました。';
$string['generatedgroupurls'] = '%s グループホームページURLを生成しました。';
$string['generatedviewurls'] = '%s ポートフォリオページURLを生成しました。';
$string['cleanurlsdescriptionshort'] = '人間が解読可能なURLを使用するようサイトを設定します。';
$string['embeddedurlstitle1'] = '埋め込みURL';
$string['embeddedurls_help'] = '<h1>埋め込みURL</h1>
<p>あなたのサイトURLを変更した場合、テキストセクション、日誌エントリ、インストラクション、フォーラム投稿および同様のコンテンツに埋め込まれたイメージおよびリンクが破損してしまいます。</p><p>古いURLを指定して更新が必要かどうか指定してください。</p>';
$string['embeddedurlsdescription1'] = '<p>あなたのサイトのURLを変更した場合、ページインストラクション、テキストブロックおよびフォーラム等のテキスト内にあるサイトコンテンツへの既存のリンクは間違った場所を指定することになります。</p><p>潜在的に古いURLが検出された場合、あなたはここで古いURLのドメインを指定および更新して修正できます。</p>';
$string['nopotentialembeddedurls1'] = '<p>潜在的な古いURLは検出されませんでした。</p>';
$string['potentialembeddedurls1'] = '<p>古いURLが検出されました。</p>';
$string['oldurl'] = '古いサイトURL';
$string['checkurl.from_help'] = '<h1>古いサイトURLをチェックする</h1>
<p>古いサイトのURL (例:「https://oldsite.com」) を入力して更新が必要なものがないか確認してください。</p>';
$string['checkurl'] = 'URLをチェックする';
$string['domigrateurls'] = 'URLを更新する';
$string['migrateurlsdescription'] = '「 %s 」で始まる埋め込みURLすべてを「 %s 」で始まるよう変更します。';
$string['migrateurlsconfirm1'] = 'URLの更新を承認する';
$string['migratedbasicurls'] = '%s コンテンツURLを更新しました。';
$string['migratedblockurls'] = '%s ブロックコンテンツURLを更新しました。';
$string['section_view_instructions'] = 'ページインストラクション';
$string['section_view_description'] = 'ページ説明';
$string['section_group'] = 'グループ説明';
$string['section_artefact'] = 'アーティファクトコンテンツ';
$string['section_interaction'] = 'フォーラム説明';
$string['section_interactionpost'] = 'フォーラムコンテンツ';
$string['section_block'] = 'ブロックコンテンツ';
$string['section_static_pages'] = '固定ページコンテンツ';
$string['section_wall_post'] = 'ウォールコンテンツ';
$string['section_artefact_resume_certification'] = 'レジュメ: 証明コンテンツ';
$string['section_artefact_resume_educationhistory'] = 'レジュメ: 教育履歴';
$string['section_artefact_resume_book'] = 'レジュメ: 書籍コンテンツ';
$string['section_verification_comment'] = '検証コメント';
$string['section_artefact_resume_membership'] = 'レジュメ: メンバシップ';
$string['section_artefact_resume_employmenthistory'] = 'レジュメ: 職歴';
$string['potentialfor'] = '%s の結果';
$string['warnings'] = '警告';
$string['applyingchanges'] = '変更を適用する';
$string['groupcategories'] = 'グループカテゴリ';
$string['allowgroupcategories'] = 'グループカテゴリを許可する';
$string['groupcategories.allowgroupcategories_help'] = '<h1>グループカテゴリ</h1>
<p>この設定を有効にした場合、あなたはグループをカテゴリに分類して見つけやすくできます。</p><p>あなたがグループを作成または編集する場合、それぞれのグループに単一のカテゴリを割り当てできます。</p><p>カテゴリはすべてのインスティテューションに適用されるため、個々のインスティテューションに制限できないことに留意してください。</p>';
$string['sitecategories'] = 'サイトのカテゴリ';
$string['siteoptions.allowgroupcategories_help'] = '<h1>グループカテゴリ</h1><p>この設定を有効にした場合、サイト管理者はグループに割り当てるカテゴリを作成できます。</p>';
$string['groupoptionsset'] = 'グループオプションが更新されました。';
$string['groupcategorydeleted'] = 'カテゴリが削除されました。';
$string['groupcategoryupdated'] = 'カテゴリが更新されました。';
$string['groupcategoryadded'] = 'カテゴリが追加されました。';
$string['confirmdeletecategory'] = '本当にこのカテゴリを削除してもよろしいですか?';
$string['groupquotas'] = '「 %s 」のグループクオータ';
$string['groupadminsforgroup'] = '「 %s 」のグループ管理者';
$string['makeusersintoadmins'] = '選択した一般アカウントを管理者アカウントにする';
$string['makeadminsintousers'] = '選択した管理者アカウントを一般アカウントに戻す';
$string['groupadminsupdated'] = 'グループ管理者が更新されました。';
$string['groupquotaupdated'] = 'グループクオータが更新されました。';
$string['addnewgroupcategory'] = '新しいグループカテゴリを入力する';
$string['submissions'] = '提出';
$string['archivedsubmissions'] = 'アーカイブ済み提出';
$string['archivedsubmissionsdesc'] = 'アーカイブ済み提出を管理します。';
$string['currentsubmissions'] = '現在の提出';
$string['releasesubmissionlabel'] = 'リリース';
$string['submittedto'] = '提出先';
$string['submittedon'] = '送信日時';
$string['ID'] = 'ID';
$string['filenameleap'] = 'Leap2Aファイル';
$string['filenameleaphtml'] = 'アーカイブファイル';
$string['archivedon'] = 'アーカイブ';
$string['filemissing'] = '%s (ファイル不明)';
$string['filemissingdesc'] = 'ファイル「 %s%s 」がサーバにありません。';
$string['Field'] = 'フィールド';
$string['Value'] = '値';
$string['sendweeklyupdates'] = '週ごとの更新状況を送信する';
$string['sendweeklyupdatesdescription'] = 'あなたのサイトの統計情報を含む週ごとの更新状況の<a href="https://mahara.org/">mahara.org</a>への送信を許可します。';
$string['newregistrationpolicyinfo1'] = '<ul>
<li>Maharaがどのように使用されているかをより良く把握するため、私たちは登録データポリシを更新しました。これによりサイトは匿名データを週ごとに提供しない場合、オプトアウトする必要があります。</li>
<li>私たちは収集する匿名データの内容を変更しました。</li>
</ul>';
$string['registerwithmahara1'] = 'データ収集をオプトアウトする';
$string['registerwithmaharadescription1'] = 'あなたのサイトの匿名化データをMaharaプロジェクトに送信しないよう設定できます。Maharaプロジェクトチームの製品開発を支援するため、私たちはあなたのサイトの登録継続をお勧めします。';
$string['Register'] = '登録';
$string['Registration'] = '登録';
$string['view_registration'] = '登録を表示する';
$string['registrationcancelled'] = 'あなたはいつでも<a href="%sadmin/registersite.php">サイト登録ページ</a>にアクセスして登録できます。';
$string['registrationfailedtrylater'] = '登録に失敗しました (エラーコード: %s)。後ほど再度お試しください。';
$string['registrationoptoutsuccessful'] = '正常に登録がオプトアウトされました。これ以上データは送信されません。';
$string['registrationsuccessfulthanksforregistering'] = '正常に登録されました - ご登録ありがとうございます。';
$string['registermaharasite'] = 'サイト登録';
$string['registeryoursitesummary'] = '<p>あなたのMaharaサイトを<a href="https://mahara.org/">mahara.org</a>に登録することで私たちの世界中のMaharaインストール状況把握に役立ちます。</p>';
$string['registeryourmaharasitedetail1'] = '<p>サイトはMaharaプロジェクトに自動的に登録されます。登録は無料であり私たちが世界中のMaharaインストール状況を把握するための助けとなります。</p>
<p>Maharaプロジェクトは個人情報および個人を特定できるデータを収集しません。ほとんどのデータはプロジェクトが傾向を特定できるよう集約された形で収集されます。あなたは以下でどのようなデータが収集されて週ごとに送信されるか確認できます。</p>
<p>あなたがデータ収集に関して質問がある場合、<a href="mailto:info@mahara.org?subject=Site registration data collection">ご連絡ください</a>。</p>';
$string['sendingweeklyupdates1'] = 'あなたは週ごとの更新状況を送信しています。';
$string['notsendingweeklyupdates'] = 'あなたは週ごとの更新状況を送信していません。';
$string['siteisregisteredsince1'] = '%s 以来、あなたのサイトは<a href="https://mahara.org/">mahara.org</a>に登録されています。';
$string['sitenotregistered'] = '現在、あなたのサイトはMaharaプロジェクトに登録されていません。私たちがあなたの利用状況をより詳しく知るために以下でオプトインしてください。';
$string['siteisregistered1'] = 'あなたのサイトは<a href="https://mahara.org/">mahara.org</a>に登録された上で週ごとのデータを送信しています。';
$string['siteregistrationpolicy1'] = '登録ポリシは次のように変更されました。';
$string['startsendingdata'] = 'あなたのサイトは週ごとの更新状況を<a href="https://mahara.org/">mahara.org</a>に送信しています。';
$string['Close'] = 'クローズ';
$string['closesite'] = 'サイトをクローズする';
$string['closesitemessage'] = 'メンテナンスメッセージ';
$string['closesitedetail'] = 'あなたは管理者を除くすべての人に対してサイトをクローズできます。これはデータベースアップグレードの準備に有用です。あなたがサイトを再オープンするか、アップグレードが正常に完了するまで管理者のみログインできます。';
$string['closesitemsglbl'] = 'メンテナンスメッセージ:';
$string['Open'] = 'オープン';
$string['reopensite'] = 'サイトを再オープンする';
$string['reopensitedetail'] = 'あなたのサイトはクローズされています。アップグレードが検出されるまでサイト管理者はログインしたままにできます。';
$string['siteinformation'] = 'サイト情報';
$string['viewfullsitestatistics'] = 'サイト統計詳細を表示する';
$string['institutioncreated_all'] = 'サイトインストール';
$string['databasesize'] = 'データベースサイズ';
$string['diskusage'] = 'ディスク使用量';
$string['maharaversion'] = 'Maharaバージョン';
$string['activeusers'] = 'アクティブアカウント保持者';
$string['loggedinsince2'] = '<ul>
<li>今日: %s</li>
<li>先週: %s</li>
<li>過去1年: %s</li>
<li>すべて: %s</li>
</ul>';
$string['groupmemberaverage'] = '1人あたり平均して %s グループに属しています。';
$string['viewsperuser'] = 'ポートフォリオを作成している人は1人あたり約 %s ページを保有しています。';
$string['Cron'] = 'cron';
$string['cron_normal'] = '正常動作';
$string['cron_never_run1'] = '<strong class="error text-danger">cronが動作していません。</strong><br>セットアップ方法に関して<a href="https://git.mahara.org/catalyst/mahara/-/wikis/System-administration/Installing-Mahara">インストレーションガイド</a>をご覧ください。';
$string['cron_not_running'] = '<strong class="error text-danger">cronが正常に動作していません。</strong>';
$string['cron_slow'] = 'cronタスク実行遅延:';
$string['cron_stuck'] = '非常に遅いcronタスクは壊れている可能性があります:';
$string['cron_paused'] = '<strong class="error text-danger">cronが動作していません。</strong><br>現在、サイトはクローズされています。cronを実行するにはサイトを再度オープンしてください。';
$string['Loggedin'] = 'ログイン';
$string['youraverageuser'] = 'あなたの平均的な人 ...';
$string['statsmaxfriends1'] = 'フレンド数: %2$s<br>(<a href="%3$s">%4$s には最大 %1$d 人のフレンドがいます</a>)';
$string['statsnofriends'] = 'フレンド数: 0';
$string['statsmaxviews1'] = '作成ページ数: %2$s<br>(<a href="%3$s">%4$s は最大 %1$d ページを所有しています</a>)';
$string['statsnoviews'] = '作成ページ数: 0';
$string['statsmaxgroups1'] = '所属グループ数: %2$s<br>(<a href="%3$s">%4$s は最大 %1$d のグループに属しています</a>)';
$string['statsnogroups'] = '所属グループ数: 0';
$string['statsnoquota'] = 'ストレージ未使用';
$string['statsmaxquotaused1'] = 'ディスククオータ使用: %s<br>(<a href="%s">%s は最大 %s のディスククオータを使用しています</a>)';
$string['groupcountsbytype'] = 'グループタイプ別グループ数';
$string['groupcountsbyjointype'] = 'アクセスタイプ別グループ数';
$string['blockcountsbytype'] = 'ポートフォリオページで使用頻度の高いブロック';
$string['uptodate'] = 'あなたのローカルコードベースはMaharaコア最新版です。';
$string['latestversionis1'] = '最新メジャリリース: <a href="%s">Mahara %s</a>';
$string['latestbranchversionis'] = 'このリリースの最新マイナバージョン: <a href="%s">%s</a>';
$string['versionnotinsupport'] = '%s はサポート対象外です。';
$string['versionnotinsupportdev'] = 'サポート対象外の開発バージョン';
$string['viewsbytype'] = 'タイプ別ページ';
$string['institutionloginstabletitle'] = 'アクティブインスティテューション';
$string['institutionloginstablesubtitle'] = '%s - %s';
$string['visitedtimesrank'] = '訪問回数: %s 回 / ランク数: %s 件';
$string['pageownedby'] = 'オーナ';
$string['contentstats'] = '今週の修正数: %s 回 / 合計修正数: %s 回';
$string['exportstatsascsv'] = '統計をCSVフォーマットでエクスポートする';
$string['downloadstatsascsv'] = 'CSVフォーマットの統計';
$string['nostats'] = '利用可能な統計はありません。';
$string['site'] = 'サイト';
$string['exportgroupscsv'] = 'グループをCSVフォーマットでエクスポートする';
$string['exportgroupmembershipscsv'] = 'グループメンバシップをCSVフォーマットでエクスポートする';
$string['exportgroupmembershipscsvspecific'] = '「 %s 」のグループメンバシップをCSVフォーマットでエクスポートする';
$string['nostatistics'] = '現在、このインスティテューションに表示できる統計はありません。';
$string['institutionstatisticsfor'] = '「 %s 」のインスティテューション統計';
$string['institutioncreated'] = 'インスティテューション作成';
$string['People'] = '人';
$string['Groups'] = 'グループ';
$string['Content'] = 'コンテンツ';
$string['configurereport'] = 'レポートを設定する';
$string['Columns'] = 'カラム';
$string['siteadminsonly'] = 'サイト管理者のみ';
$string['adminsonly'] = '管理者のみ';
$string['adminsandstaffonly'] = '管理者およびスタッフのみ';
$string['advanced'] = '高度';
$string['allowpublicviews1'] = 'パブリックポートフォリオ';
$string['siteoptions.allowpublicviews_help'] = '<h1>パブリックポートフォリオ</h1><p>この設定を有効にした場合、人は自分のポートフォリオをアカウント保持者だけでなく、一般に公開できます。</p><p>「パブリックプロファイル」が有効にされている場合、これを無効にしてもパブリックプロファイルには影響しません。</p>';
$string['allowsecreturls'] = 'シークレットURL';
$string['siteoptions.allowsecreturls_help'] = '<h1>シークレットURL</h1><p>この設定を有効にした場合、ポートフォリオ作成者はポートフォリオを完全に公開する代わりにシークレットURLを介してアカウントのない人とポートフォリオを共有できます。</p>';
$string['institution.allowinstitutionpublicviews_help'] = '<h1>パブリックポートフォリオ</h1>
<p>この設定を有効にした場合、インスティテューションメンバはポートフォリオを公開できます。</p><p>この設定を無効にした場合、メンバは所属する別のインスティテューションで公開ポートフォリオを作成したり、自分のポートフォリオのシークレットURLを設定できる場合があります。</p>';
$string['allowinstitutionsecreturls'] = 'シークレットURL';
$string['institution.allowinstitutionsecreturls_help'] = '<h1>シークレットURL</h1><p>この設定を有効にした場合、ポートフォリオ作成者はポートフォリオを完全に公開する代わりにシークレットURLを介してアカウントのない人とポートフォリオを共有できます。</p><p>この設定を無効にした場合、メンバは所属する別のインスティテューションを経由でシークレットURLを使用できる場合があります。</p>';
$string['allowpeersviewcontent1'] = 'ピアはポートフォリオコンテンツを閲覧できる';
$string['institution.allowpeersviewcontent_help'] = '<h1>ピアはポートフォリオコンテンツを閲覧できる</h1>
<p>この設定を有効にした場合、ピアはピア評価が必要なページのすべてのコンテンツを閲覧できます。</p><p>この設定を無効にした場合、ピアはそれらのページのセクションヘッディングのみ閲覧できます。また、ピア評価のないページには何も表示されません。</p><p>「ピアおよびマネージャ」ロールを持つアカウント保持者は「マネージャ」ロールにより、この設定に関係なく常にポートフォリオ全体を閲覧できます。</p>';
$string['allowinstitutionsmartevidence1'] = 'スマートエビデンス';
$string['institution.allowinstitutionsmartevidence_help'] = '<h1>スマートエビデンス</h1><p>この設定を有効にした場合、ポートフォリオ作成者はコレクションの冒頭にコンピテンシフレームワークを追加できます。</p><hr><h2>詳細</h2>
<p>スマートエビデンスでは学習者はポートフォリオでコンピテンシフレームワークを使用して作業できます。概要ページにはエビデンスのあるコンピテンシ、評価者または自分自身 (自己評価が許可されている場合) に承認されたコンピテンシおよびまだ取り組む必要のあるコンピテンシが表示されます。</p>';
$string['institutionsmartevidencenotallowed'] = 'あなたがスマートエビデンスオプションを設定するには「プラグイン管理」ページで「スマートエビデンス」モジュールを有効にする必要があります。';
$string['allowpublicprofiles'] = 'パブリックプロファイル';
$string['siteoptions.allowpublicprofiles_help'] = '<h1>パブリックプロファイル</h1><p>この設定を有効にした場合、人はプロファイルページをアカウント保持者のみに表示するのではなく、一般公開できます。</p>';
$string['allowanonymouspages'] = '匿名ポートフォリオ';
$string['siteoptions.allowanonymouspages_help'] = '<h1>匿名ポートフォリオ</h1><p>この設定を有効にした場合、ページ作成者としての自分の氏名を非表示にできます。管理者およびスタッフは引き続き作成者の氏名を確認できます。</p>';
$string['allowcommentsbydefault'] = 'ページコメントデフォルト';
$string['siteoptions.allowcommentsbydefault_help'] = '<h1>ページコメントデフォルト</h1><p>ページでの会話を促進するためにデフォルトでページへのコメントを許可します。ポートフォリオ作成者は個々のページの設定をいつでも変更できます。</p>';
$string['anonymouscomments'] = '匿名コメント';
$string['siteoptions.anonymouscomments_help'] = '<h1>匿名コメント</h1><p>誰でもパブリックページまたはシークレットURLでアクセスできるページにコメントを残せます。</p>';
$string['loggedinprofileviewaccess1'] = 'すべてのアカウント保持者のプロファイルアクセス';
$string['siteoptions.loggedinprofileviewaccess_help'] = '<h1>すべてのアカウント保持者のプロファイルアクセス</h1><p>この設定を有効にした場合、すべてのアカウント保持者はお互いのプロファイルページを閲覧できます。</p><p>この設定を無効にした場合、最初プロファイルページはすべてのアカウント保持者に表示されますが、オーナはアクセスをより少人数のグループに制限できます。</p><p>同じインスティテューションのメンバは常にお互いのプロファイルを閲覧できます。</p><p>config.phpで隔離インスティテューションが有効にされている場合、ユーザは自分のインスティテューションのメンバおよびサイト管理者のプロファイルのみ閲覧できます。</p>';
$string['antispam'] = 'アンチスパム';
$string['antispam_help'] = '<h1>アンチスパム</h1><p>「お問い合わせ」および「登録」等の公開フォームには3段階の保護が用意されています。スパムとして分類された送信は決して黙って拒否されることはありません。エラーメッセージが表示された上で再試行を求められます。</p>
<ul>
<li><strong>なし:</strong> チェックは実行されません。</li>
<li><strong>シンプル:</strong> 不正なメールアドレスまたは過剰な数のURLを含む送信を拒否します。</li>
<li><strong>高度:</strong> インターネット接続が必須です。メールアドレスの確認および禁止URLの検出のために追加のチェックを実行します。</li>
</ul>';
$string['commentsortorder'] = 'コメント並べ替え順';
$string['commentsortorder_help'] = '<h1>コメント並べ替え順</h1>
<p>アーティファクトのコメントを最も古いものから表示するか、最も新しいものから表示するか設定します。</p>';
$string['commentthreaded'] = 'スレッドコメント';
$string['institution.commentthreaded_help'] = '<h1>スレッドコメント</h1>
<p>この設定を有効にした場合、コメントリストの最後に返信を追加するのではなく、個々のコメントに直接返信できます。</p>';
$string['defaultaccountinactiveexpire'] = 'デフォルトのアカウント休止期間';
$string['defaultaccountinactiveexpire_help'] = '<h1>デフォルトのアカウント休止期間</h1><p>この設定を有効にした場合、この期間ログインしていない人は非アクティブとしてマークされた上でログインできなくなります。</p><p>期間を日、週、月または年で設定してください。「終了日なし」を選択した場合、非アクティブ時間は無効となります。</p>';
$string['defaultaccountinactivewarn'] = '休止および有効期限の警告期間';
$string['defaultaccountinactivewarn_help'] = '<h1>休止および有効期限の警告期間</h1><p>この設定を有効にした場合、アカウント有効期限が切れるか、非アクティブになる前に登録済み主メールアドレス宛に警告通知が送信されます。</p><p>期間を日、週、月または年で設定してください。「終了日なし」を選択した場合、警告は無効となります。</p>';
$string['defaultregistrationexpirylifetime'] = 'デフォルトの登録存続期間';
$string['defaultregistrationexpirylifetime_help'] = '<h1>デフォルトの登録存続期間</h1><p>保留中の登録申請が有効期限切れになるまでの期間です。</p><p>期間を日、週、月または年で設定してください。「終了日なし」を選択した場合、登録期限は無効となります。</p>';
$string['defaultaccountlifetime'] = 'デフォルトのアカウント存続期間';
$string['defaultaccountlifetime_help'] = '<h1>デフォルトのアカウント存続期間</h1><p>この設定を有効にした場合、アカウントは作成日から指定された期間後に有効期限切れとなります。アカウントの有効期限が切れた人はログインできません。</p><p>期間を日、週、月または年で設定してください。「終了日なし」を選択した場合、アカウントの有効期限は無効となります。</p>';
$string['defaultaccountlifetimeupdate'] = 'アカウント存続期間のオーバーライド';
$string['defaultaccountlifetimeupdate_help'] = '<h1>アカウント存続期間のオーバーライド</h1><p>既存のアカウントに対してデフォルトのアカウント有効期間を適用する方法を選択してください。</p>';
$string['defaultaccountlifetimeupdatenone'] = '新しく作成されたアカウントのみ';
$string['defaultaccountlifetimeupdatesome'] = '新しいアカウントおよびアカウント存続期間未設定のアカウント (サイト管理者を除く)';
$string['defaultaccountlifetimeupdateall'] = 'すべてのアカウント (サイト管理者を除く)';
$string['passwordpolicy'] = 'パスワードポリシ';
$string['passwordpolicytitle_help'] = '<h1>パスワードポリシ</h1><p>組み込み「内部」認証方法を使用してアカウントのパスワード最小文字数および複雑さの要件を設定します。</p>';
$string['passwordpolicylength'] = '最小パスワード長';
$string['passwordpolicytype'] = 'パスワード複雑性';
$string['deprecatedmobileapp'] = '申し訳ございません、このモバイルアプリケーションは廃止されました。あなたは代わりにMaharaモバイルを使用する必要があります。Androidデバイス用は次からダウンロードしてください: https://play.google.com/store/apps/details?id=org.mahara.mobile またAppleデバイス用は次からダウンロードしてください: https://itunes.apple.com/us/app/mahara-mobile/id1172638950';
$string['embeddedcontent'] = '埋め込みコンテンツ';
$string['embeddedcontentdescription'] = '人がポートフォリオにビデオまたは他のサイトのコンテンツを埋め込めるようにしたい場合、あなたは以下で信頼できるサイトを選択できます。';
$string['Everyone'] = '誰でも';
$string['generatesitemap1'] = 'サイトマップ';
$string['siteoptions.generatesitemap_help'] = '<h1>サイトマップ</h1><p>この設定を有効にした場合、公開されているすべてのページ、グループおよびフォーラムトピックの機械可読サイトマップが生成されます。サイトマップは検索エンジンに送信できます。</p><hr>
<h2>詳細</h2><p>サイトマップは<a href="https://www.sitemaps.org">sitemaps.org</a>フォーマットの一連のXMLファイルです。サイトマップインデックスは<code>[yoursite]/download.php?type=sitemap</code>にあります。前日に変更されたページを含む毎日のスナップショットが一覧表示されます。</p>';
$string['homepageinfo1'] = 'ホームページおよびダッシュボード情報';
$string['siteoptions.homepageinfo_help'] = '<h1>ホームページおよびダッシュボード情報</h1><p>サイトに関する情報およびホームページでの使用方法を表示します。アカウント保持者はダッシュボードでその情報を秘匿できます。</p>';
$string['homepageredirect'] = 'カスタムランディングページ';
$string['siteoptions.homepageredirect_help'] = '<h1>カスタムランディングページ</h1><p>ログイン後に最初に表示されるページとしてダッシュボード以外のページを設定します。誰かが要ログインのリンクにアクセスした場合、そのリダイレクトが優先されます。</p>';
$string['homepageredirecturl'] = 'ランディングページ';
$string['homepageredirecturldescription'] = 'この設定を動作させるにはすべての登録済みの人がページにアクセスできる必要があります。';
$string['hstsoverride'] = 'HSTSオーバーライド';
$string['siteoptions.hstsoverride_help'] = '<h1>HSTSオーバーライド</h1><p>ダウンストリームサービスがすでにHTTP Strict Transport Security (HSTS) ヘッダを設定している場合、この設定を有効にして、2回設定されないようにします。</p>';
$string['islandingpage'] = 'このページがサイトのカスタムランディングページとして使用されます。';
$string['landingpagegone'] = 'あなたがパーミッションを変更する前、ページ「 %s 」はサイトのカスタムランディングページでした。このページはカスタムランディングページとしてはサイト設定より削除されました。';
$string['landingpagegonesubject'] = 'カスタムランディングページが削除されました。';
$string['landingpagegonemessage'] = 'ログインしてサイト設定で新しいカスタムランディングページを選択してください。';
$string['landingpagegonemessagedeleted'] = 'ページが削除されたためサイトのカスタムランディングページとしてのページ「 %s 」は削除されました。ログインしてサイト設定で新しいカスタムランディングページを選択してください。';
$string['institutionautosuspend'] = '有効期限切れインスティテューションの自動停止';
$string['siteoptions.institutionautosuspend_help'] = '<h1>有効期限切れインスティテューションの自動停止</h1>
<p>この設定を有効にした場合、有効期限切れのインスティテューションは毎日の有効期限チェック中に自動的に一時停止されます。一時停止されたインスティテューションのメンバは一時停止が解除されるまでログインできません。</p>';
$string['institutionexpirynotification'] = 'インスティテューション有効期限警告';
$string['institutionexpirynotification_help'] = '<h1>インスティテューション有効期限警告</h1>
<p>この設定を有効にした場合、インスティテューションの有効期限が切れるかなり前にサイト管理者およびインスティテューションに警告通知が送信されます。</p><p>期間を日、週、月、年または「終了日なし」で選択してください。</p>';
$string['language'] = '言語';
$string['none'] = 'なし';
$string['nousernames'] = 'ユーザ名を表示しない';
$string['siteoptions.nousernames_help'] = '<h1>ユーザ名を表示しない</h1><p>この設定を有効にした場合、アカウント保持者はユーザ名で他のユーザを表示または検索できません。この制限はスタッフおよび管理者には適用されません。クリーンURLが有効されている場合、プロファイルページのURLにはユーザ名の代わりに表示名または実名が使用されます。</p>';
$string['onlineuserssideblockmaxusers1'] = '「オンライン中の人」の制限';
$string['onlineuserssideblockmaxusers_help'] = '<h1>「オンライン中の人」の制限</h1><p>「オンライン中の人」ダッシュボードのサイドバーに表示される最大ユーザ数です。</p>';
$string['country'] = '国';
$string['pathtoclam'] = 'ClamAVのパス';
$string['pathtoclam_help'] = '<h1>ClamAVのパス</h1><p>T「<code>clamscan</code>」または「<code>clamdscan</code>」へのファイルシステムパスです。ClamAVが実行されない場合、ファイルは感染したものとして扱われた上で自動的に隔離されます。セキュリティ上の理由から、この設定は「pathtoclam」変数を使用したWeb経由ではなく、config.phpで設定する必要があります。</p>';
$string['pathtoclamnotset'] = '(未設定)';
$string['progresscompletion'] = 'ポートフォリオ完了';
$string['institution.progresscompletion_help'] = '<h1>ポートフォリオ完了</h1><p>この設定を有効にした場合、コレクションの先頭にページ承認および検証ステータスを表示する「ポートフォリオ完了」ページを追加できます。</p>';
$string['outcomeportfolio'] = 'アウトカムポートフォリオ';
$string['institution.outcomeportfolio_help'] = '<h1>アウトカムポートフォリオ</h1><p>この設定を有効にした場合、このインスティテューションに関連付けられたグループはアウトカムポートフォリオを作成できます。</p>';
$string['registerterms'] = '登録同意';
$string['siteoptions.registerterms_help'] = '<h1>登録同意</h1><p>登録を完了する前にサイトのプライバシに関するステートメントおよび利用規約に同意するよう人に要求します。このオプションを有効にする前にあなたのサイト (および追加の同意が必要なインスティテューション) の法的ページを編集してください。</p>';
$string['licensemetadata'] = 'ライセンスメタデータ';
$string['siteoptions.licensemetadata_help'] = '<h1>ライセンスメタデータ</h1><p>この設定を有効にした場合、ポートフォリオ作成者は作成またはアップロードするコンテンツのライセンス情報 (ライセンス、および任意でライセンサおよび元URLを含む) を入力するよう求められます。</p><hr><h2>詳細</h2><p>ライセンスはURLとして保存されます。</p><p>サイト管理者がライセンスのリストを設定している場合、それぞれの名称およびアイコンが表示されます。</p>';
$string['licenseallowcustom1'] = 'カスタムライセンス';
$string['siteoptions.licenseallowcustom_help'] = '<h1>カスタムライセンス</h1><p>この設定を有効にした場合、作成者はライセンスとして任意のURLを入力できます。この設定を無効にした場合、サイト管理者が設定したライセンスからのみ選択できます。</p>';
$string['recaptchakeysmissing1'] = 'reCAPTCHAは有効にされましたが、あなたがサイトキーおよびシークレットキーを提供するまで機能しません。';
$string['recaptchanotpassed'] = 'reCAPTCHAが正しく入力されていません。再度お試しください。';
$string['recaptchaonregisterform1'] = '登録およびお問い合わせフォームのreCAPTCHA';
$string['siteoptions.recaptchaonregisterform_help'] = '<h1>登録およびお問い合わせフォームのreCAPTCHA</h1><p>この設定を有効にした場合、未ログイン時に自己登録または「お問い合わせ」フォームに入力する人はスパムアカウントまたはメッセージを減らすためにreCAPTCHAテストに合格する必要があります。</p><p>あなたは<a href="https://cloud.google.com/security/products/recaptcha">Google reCAPTCHA</a>から入手可能なreCAPTCHAサイトキーおよびシークレットキーが必要です。</p>';
$string['recaptchaprivatekey1'] = 'reCAPTCHAシークレットキー';
$string['recaptchaprivatekey_help'] = '<h1>reCAPTCHAシークレットキー</h1><p>あなたのサイトのreCAPTCHAアカウントのシークレットキーです。</p>';
$string['recaptchapublickey1'] = 'reCAPTCHAサイトキー';
$string['recaptchapublickey_help'] = '<h1>reCAPTCHAサイトキー</h1><p>あなたのサイトのreCAPTCHAアカウントのサイトキーです。</p>';
$string['remoteavatars'] = 'リモートアバタ';
$string['siteoptions.remoteavatars_help'] = '<h1>リモートアバタ</h1><p>この設定を有効にした場合、<a href="https://www.gravatar.com">Gravatar</a>はプロファイル画像を設定していない人にプロファイル画像を提供します。Gravatarにその人の画像がない場合、デフォルトのMahara画像が表示されます。</p>
<h2>使用しない場合</h2><p>このオプションを使用するには人とウェブサーバの両方がGravatarにアクセスできる必要があります。外部アクセスのないイントラネット専用サイトでこのオプションを有効にした場合、不要なページ読み込みの遅延が発生します。</p>
<h2>カスタムアバタサーバ</h2>
<p>Gravatarプロトコルをサポートするカスタムアバタサーバを使用するにはconfig.phpでベースURLを設定してください。</p>';
$string['searchplugin'] = '検索プラグイン';
$string['searchplugin_help'] = '<h1>検索プラグイン</h1><p>追加検索プラグインがインストールされている場合、使用する検索エンジンを選択してください。</p><p>Elasticsearchは高度な分析にも必要な全文検索プラグインです。これらの追加レポートを利用できるようにするには「ロギング設定」で「イベントログレポート」を有効にしてください。</p>';
$string['searchconfigerror1'] = '検索プラグイン「 %s 」の設定が正しくありません。「拡張機能」 → 「プラグインタイプ: search」の設定を確認してください。設定確認後、あなたは検索の「リセット」ボタンを押す必要がある場合があります。';
$string['searchuserspublic'] = 'パブリック検索内の人';
$string['siteoptions.searchuserspublic_help'] = '<h1>パブリック検索内の人</h1><p>この設定を有効にした場合、パブリックプロファイルのあるアカウント保持者がパブリック検索結果に表示される可能性があります。</p><p>ここではconfig.phpで「publicsearchallowed」を設定した上でElasticsearch等のパブリック検索をサポートする検索プラグインが必要です。この設定を変更するにはElasticsearchを再インデックス化する必要があります。</p>';
$string['sessionlifetime'] = 'セッションライフタイム';
$string['sessionlifetimedescription'] = '時間 (分)';
$string['sessionlifetime_help'] = '<h1>セッションライフタイム</h1><p>人が自動的にログアウトされるまでの非アクティブ時間 (分) です。</p>';
$string['setsiteoptionsfailed1'] = 'このオプションの設定に失敗しました。';
$string['setsiteoptionsfailednotice'] = '%s フィールドオプションの設定に失敗しました。';
$string['showstudentid'] = '学籍番号表示';
$string['siteoptions.showstudentid_help'] = '<h1>学籍番号表示</h1><p>この設定を有効にした場合、サイト全体で氏名の横に人の学籍番号が表示されます。</p>';
$string['showonlineuserssideblock'] = '「オンライン中」表示';
$string['siteoptions.showonlineuserssideblock_help'] = '<h1>「オンライン中」表示</h1><p>この設定を有効にした場合、アカウント保持者はダッシュボードのサイドバー「オンラインの人」で過去10分間にオンラインであった人のリストを確認できます。</p>';
$string['showselfsearchsideblock1'] = 'ポートフォリオ検索';
$string['siteoptions.showselfsearchsideblock_help'] = '<h1>ポートフォリオ検索</h1><p>この設定を有効にした場合、「マイポートフォリオを検索する」サイドバーがダッシュボードに表示されます。</p>';
$string['showtagssideblock1'] = 'タグクラウド';
$string['siteoptions.showtagssideblock_help'] = '<h1>タグクラウド</h1><p>この設定を有効にした場合、アカウント保持者はダッシュボードのサイドバーで最も頻繁に使用するタグのリストを確認できます。</p>';
$string['simple'] = 'シンプル';
$string['sitedefault'] = 'サイトデフォルト';
$string['lang_help'] = '<h1>言語</h1><p>サイトのデフォルト言語を選択してください。</p><hr><h2>詳細</h2><p>選択した言語はあなたのサイト全体のメニューアイテムおよびコンテクストヘルプのサイトデフォルト言語です。あなたが追加言語をインストールした場合、人はアカウント設定から言語プレファレンスを変更できます。</p>';
$string['sitecountrydescription'] = 'サイトのデフォルトの国です。';
$string['sitename'] = 'サイト名';
$string['sitename_help'] = '<h1>サイト名</h1>
<p>サイト名はサイト内の様々な場所 (ブラウザのタブ等) に表示されます。あなたのサイトが参照されている場合、「Mahara」と表示されるのではなく、システムが生成した通知に表示されます。</p>';
$string['siteoptionspagedescription'] = 'ここであなたはサイト全体にデフォルトとして適用されるグローバルオプションを設定できます。<br>メモ: 無効にされたオプションはあなたのconfig.phpファイルでオーバーライドできます。';
$string['siteoptionsset'] = 'サイトオプションが更新されました。';
$string['theme_help'] = '<h1>テーマ</h1><p>サイトのデフォルトテーマです。</p><hr><h2>詳細</h2><p>あなたのテーマがリストにない場合、エラーログをご確認ください。</p><p>インスティテューションは<a href="../users/institutions.php">インスティテューション</a>セクションで設定された独自のデフォルトテーマを持てます。</p>';
$string['skins'] = 'スキン';
$string['institution.skins_help'] = '<h1>スキン</h1><p>このインスティテューションのメンバは自分のページでスキンを使用できます。</p>';
$string['smallviewheaders'] = 'スモールページヘッダ';
$string['smallviewheadersdescription1'] = 'ポートフォリオページの閲覧または編集時にスモールヘッダおよびサイトナビゲーションを表示します。';
$string['spamhaus2'] = 'Spamhaus URL拒否リスト';
$string['siteoptions.spamhaus_help'] = '<h1>Spamhaus URL拒否リスト</h1><p>Spamhaus DNSBLと照合してURLを確認します。Spamhaus拒否リストは非営利目的で低トラフィックの利用の場合は無料です。このオプションを有効にする前に<a href="https://www.spamhaus.org/organization/dnsblusage/">Spamhaus DNSブロックリストのフェアユースポリシ</a>をお読みください。</p>';
$string['staffaccessreports1'] = 'スタッフおよびサポート管理者によるレポートアクセス';
$string['siteoptions.staffreports_help'] = '<h1>スタッフおよびサポート管理者によるレポートアクセス</h1><p>この設定を有効にした場合、サイトおよびインスティテューションスタッフおよびサポート管理者は自インスティテューションの「アカウント詳細」「法的同意」「マスカレーディングセッション」および「ポートフォリオアクセス」レポートにアクセスできます。それ以外の場合、これらのレポートは管理者のみアクセスできます。</p>';
$string['institutionstaffallreports1'] = 'インスティテューションスタッフおよびサポート管理者によるすべてのレポートアクセス';
$string['siteoptions.staffstats_help'] = '<h1>インスティテューションスタッフおよびサポート管理者によるすべてのレポートアクセス</h1><p>インスティテューションスタッフおよびサポート管理者がインスティテューションのすべてのレポートにアクセスできるようにします。</p><p>それ以外の場合、これらのレポートは管理者に制限されます。</p>';
$string['surbl2'] = 'SURBL URL拒否リスト';
$string['siteoptions.surbl_help'] = '<h1>SURBL URL拒否リスト</h1><p>SURBL拒否リストと照合してURLを確認します。1,000人未満の組織は無料です。このオプションを有効にする前に<a href="https://www.surbl.org/usage-policy">SURBL使用ポリシ</a>をお読みください。</p>';
$string['disableexternalresources'] = 'HTML内の外部リソースを無効にする';
$string['siteoptions.disableexternalresources_help'] = '<h1>HTML内の外部リソースを無効にする</h1><p>この設定を有効にした場合、作成者はイメージ等の外部サイトのコンテンツをテキストおよびその他のHTMLコンテンツに埋め込みできなくなります。これはフィッシング攻撃を防ぐのに役立つため、セキュリティ上の理由から推奨されます。詳細は<a href="http://htmlpurifier.org/live/configdoc/plain.html#URI.DisableExternalResources">HTML Purifierドキュメンテーション</a>をご覧ください。</p>';
$string['tagssideblockmaxtags'] = 'クラウド内の最大タグ数';
$string['tagssideblockmaxtagsdescription'] = 'タグクラウド内に表示されるデフォルトのタグ数です。';
$string['trustedsites'] = '信頼できるサイト';
$string['updatesitesettings'] = 'サイト設定を更新する';
$string['usersallowedmultipleinstitutions'] = '人に複数インスティテューションを許可する';
$string['siteoptions.usersallowedmultipleinstitutions_help'] = '<h1>人に複数インスティテューションを許可する</h1>
<p>この設定を有効にした場合、人は一度に複数のインスティテューションに所属できます。人は承認を条件としていつでもインスティテューションへの参加を申請できます。また、インスティテューションは人の承認を条件として人を招待できます。</p>
<p>隔離インスティテューションが有効にされている場合、人は1つのインスティテューションにしか所属できません。</p>';
$string['institutionstrictprivacy'] = '厳格なプライバシ';
$string['siteoptions.institutionstrictprivacy_help'] = '<h1>厳格なプライバシ</h1>
<p>EUのGDPRまたは同様の法律を遵守するため等、サイトの利用規約およびプライバシに関する声明への全員の同意を義務付けます。独自の声明のあるインスティテューションのメンバはそれらにも同意する必要があります。</p> <p>サイトに複数のインスティテューションに属する人がいる場合、このオプションは使用できません。このオプションを有効にするには最初にアカウントを単一のインスティテューションに移動する必要があります。</p><p>法的声明に必要な変更に関して、あなたの弁護士にご相談ください。Maharaプロジェクトでは法的アドバイスを提供していません。</p>';
$string['institutionstrictprivacysuspendaccount'] = 'アカウント利用停止';
$string['siteoptions.institutionstrictprivacysuspendaccount_help'] = '<h1>アカウント利用停止</h1><p>この設定を有効にした場合、すべての法的声明に同意しない人はポップアップフォームを経由で自分のアカウントを一時停止できます。</p><p>この設定を無効にした場合、利用規約への同意を拒否した場合でもアカウントを停止できません。</p><p>いずれの場合でも、すべての法的声明に同意するまで人は自分のアカウントにアクセスできません。</p>';
$string['requireregistrationconfirm'] = '登録承認';
$string['siteoptions.requireregistrationconfirm_help'] = '<h1>登録承認</h1><p>すべてのインスティテューションに新しい自己登録アカウントの承認を義務付けます。これによりスパマおよび権限のない人の気付かないアカウント作成を防げます。</p><hr><h2>詳細</h2><p>このオプションが有効されていない場合、それぞれのインスティテューションは承認を必要とするかどうか決定できます。サイトおよびインスティテューションが承認を必要としない場合、インスティテューション管理者が登録を承認しない場合でも、アカウントは自動的に「インスティテューションなし」で作成されます。</p><p>サイトで隔離インスティテューションが有効にされている場合、この設定はデフォルトで有効にされます。サイト管理者またはインスティテューション管理者は変更できません。すべてのアカウントは承認が必要となります。</p>';
$string['userscanchooseviewthemes'] = '作成者がページテーマを選択できる';
$string['siteoptions.userscanchooseviewthemes_help'] = '<h1>作成者がページテーマを選択できる/h1><p>この設定を有効にした場合、作成者はポートフォリオページごとにテーマを選択できます。他の人には選択したテーマでページが表示されます。</p>';
$string['userscanhiderealnames'] = '実名を秘匿する';
$string['adduser.hiderealname_help'] = '<h1>実名を秘匿する</h1><p>この設定を有効にした場合、表示名のある人は実名ではなく表示名でのみ検索できます。</p><p>サイトのインスティテューション管理では常に実名で人を検索できます。</p>';
$string['siteoptions.userscanhiderealnames_help'] = '<h1>実名を秘匿する</h1><p>この設定を有効にした場合、表示名のある人は実名ではなく表示名でのみ検索できます。他の人は表示名でのみ検索できます。</p><p>サイトのインスティテューション管理では常に実名で人を検索できます。</p>';
$string['usersseenewthemeonlogin'] = '次回ログイン時、他の人に新しいテーマが表示されます。';
$string['viruschecking'] = 'ウイルスチェック';
$string['siteoptions.viruschecking_help'] = '<h1>ウイルスチェック</h1><p>この設定を有効にした場合、アップロードされたすべてのファイルがClamAVを使用してウイルスチェックされます。あなたのサーバにClamAVをインストールする必要があります。多くのLinuxディストリビューションには<code>clamav</code>パッケージが含まれています。あなたは<a href="https://www.clamav.net">ClamAVウェブサイト</a>からダウンロードもできます。</p>';
$string['whocancreategroups'] = 'グループ作成';
$string['whocancreategroups_help'] = '<h1>グループ作成</h1><p>新しいグループを作成できる人を選択してください。</p>';
$string['whocancreatepublicgroups'] = 'パブリックグループを作成する';
$string['createpublicgroups_help'] = '<h1>パブリックグループ作成</h1><p>公開表示可能なグループを作成できる人を選択してください。</p><hr><h2>詳細</h2><p>パブリックグループでは誰でも (検索エンジンを含む)「About」ページおよびフォーラムディスカッションを閲覧できますが、フォーラム投稿またはプロファイル表示にはアカウントが必要です。</p><p>グループ管理者はメンバ一覧へのアクセスを制限できます。</p><p>config.phpで隔離インスティテューションが有効にされている場合、サイト管理者のみパブリックグループを作成できます。</p>';
$string['wysiwyg'] = 'HTMLエディタ';
$string['siteoptions.wysiwyg_help'] = '<h1>HTMLエディタ</h1><p>HTMLエディタをデフォルトで有効にするかどうか設定してください。「人による決定」に設定されている場合、それぞれの人はアカウント設定で選択できます。それ以外の場合、設定はサイト全体に適用されます。</p>';
$string['wysiwyguserdefined'] = '人による決定';
$string['eventloglevel'] = 'イベントログ';
$string['eventloglevel_help'] = '<h1>イベントログ</h1><p>データベースに記録するイベントを選択してください: すべてのイベントまたはマスカレーディングセッションのみ。</p><hr><h2>詳細</h2><p>高度なアナリティクスにはすべてのイベントのログが必要ですが、混雑したサイトでは大量のデータが生成される可能性があります。</p><p>マスカレーディングセッションレポートは「レポート」セクションで利用可能です。</p><p>この設定に関係なく、すべてのイベントは常にアクセスログに記録されます。</p>';
$string['eventlogexpiry'] = 'イベントログ有効期限';
$string['eventlogexpiry_help'] = '<h1>イベントログ有効期限</h1><p>イベントログデータを保持する期間を設定してください。</p><p>期間を日、週、月または年で選択するか、「終了日なし」を選択してすべてのデータを無期限に保持します。ログを無期限に保持する場合、あなたのデータベースが急速に大きくなる可能性があることに留意してください。</p>';
$string['eventloglevelnone'] = 'なし';
$string['eventloglevelmasq'] = 'マスカレーディング';
$string['eventloglevelall'] = 'すべて';
$string['eventlogadvancedanalytics'] = '高度なアナリティクス';
$string['siteoptions.eventlogenhancedsearch_help'] = '<h1>高度なアナリティクス</h1><p>高度なアナリティクスにはElasticsearchの有効化およびすべてのイベントの記録が必要です。追加レポートは「レポート」セクションで利用可能です。</p>';
$string['sitefilesaccess'] = 'サイトファイルへのアクセス';
$string['siteoptions.sitefilesaccess_help'] = '<h1>サイトファイルへのアクセス</h1><p>アカウント保持者がサブフォルダ内のサイトファイルにアクセスできるようにします。デフォルトではトップレベルのディレクトリにあるファイルのみ利用可能です。</p>';
$string['defaultmultipleblogs'] = '複数日誌';
$string['siteoptions.defaultmultipleblogs_help'] = '<h1>複数日誌</h1><p>この設定を有効にした場合、新しいアカウント保持者はデフォルトで複数日誌を作成できるようになります。アカウント設定ページでこの設定を変更できます。</p>';
$string['defaultreviewsselfdeletion'] = '自己削除の前にアカウントをレビューする';
$string['reviewsselfdeletion'] = '自己削除の前にアカウントをレビューする';
$string['mathjax'] = 'MathJax';
$string['mathjaxconfig'] = 'MathJax設定';
$string['timezone'] = 'タイムゾーン';
$string['notimezoneselected'] = 'タイムゾーン未選択';
$string['about'] = 'About';
$string['discardpageedits'] = 'このページの変更を破棄しますか?';
$string['staticpagespagedescription1'] = 'ここであなたはホームページ、登録済みの人のダッシュボード、フッタ内でリンクされている「About」ページ等、一部の内蔵ページのコンテンツを編集できます。';
$string['home'] = 'ホーム (ダッシュボード)';
$string['loadsitecontentfailed'] = 'サイトページコンテンツの読み込みに失敗しました。';
$string['loggedouthome'] = 'ログアウトホーム';
$string['pagename'] = 'ページ名';
$string['pagesaved'] = 'ページが保存されました。';
$string['pagecontent'] = 'ページコンテンツ';
$string['privacy'] = 'プライバシ保護方針';
$string['legal'] = '法律';
$string['savechanges'] = '変更を保存する';
$string['savefailed'] = '保存に失敗しました。';
$string['sitepageloaded'] = 'サイトページが読み込まれました。';
$string['termsandconditions'] = '利用条件';
$string['uploadcopyright'] = 'アップロード著作権宣言文';
$string['privacypagedescription'] = 'サイト全体のプライバシ保護方針を編集してください。あなたが最後に編集したバージョンが自動的に最新のプライバシ保護方針となります。';
$string['termspagedescription'] = 'サイト全体の利用条件を編集してください。あなたが最後に編集したバージョンが自動的に最新の利用条件となります。';
$string['owngroupsonly'] = '自分のグループのみ表示する';
$string['sitefile'] = 'サイトファイル';
$string['adminpublicdirname'] = 'パブリック';
$string['adminpublicdirdescription'] = 'ログアウトした人からアクセス可能なファイルです。';
$string['adminpublicdirduplicatewarning'] = 'サイトの「公開」ディレクトリを自動的に設定できません。<br>
「管理メニュー → サイト設定 → ファイル」にアクセスして「Name」カラムのリンクをコピーしてください。「folder=」の後の数字を抜き出すことであなたが「public」フォルダにしたいフォルダのIDを見つけてください。<br>
次にデータベース設定テーブルでその値を手動で設定してください。例えば次の行を実行します ([folder_ID]をフォルダ番号に置き換えてください): %s<br>
最後にあなたが公開したいファイルをこのフォルダに移動してください。';
$string['badmenuitemtype'] = '不明なアイテムタイプ';
$string['badurl'] = '無効なリンクが提供されました。';
$string['oneormorelinksarebad'] = '1つまたはそれ以上のリンクが有効ではありません。';
$string['confirmdeletemenuitem'] = '本当にこのアイテムを削除してもよろしいですか?';
$string['deletingmenuitem'] = 'アイテムの削除中';
$string['deletefailed'] = 'アイテムの削除に失敗しました。';
$string['deletefailedonlyadmin'] = 'あなたはこのアカウントを削除できません。これは唯一のシステム管理者アカウントです。';
$string['externallink'] = '外部リンク';
$string['editlinksandresources'] = '「リンクおよびリソース」を編集する';
$string['linkedto'] = 'リンク先';
$string['linksandresourcesmenu'] = 'リンクおよびリソースメニュー';
$string['loadingmenuitems'] = 'アイテムの読み込み中';
$string['loadmenuitemsfailed'] = 'アイテムの読み込みに失敗しました。';
$string['loggedinmenu'] = 'ログイン後の「リンクおよびリソース」';
$string['loggedoutmenu'] = 'パブリックの「リンクおよびリソース」';
$string['menuitemdeleted'] = 'アイテムが削除されました。';
$string['menuitemsaved'] = 'アイテムが保存されました。';
$string['menuitemsloaded'] = 'アイテムが読み込まれました。';
$string['name'] = '名称';
$string['nositefiles'] = '利用できるサイトファイルはありません。';
$string['public'] = 'パブリック';
$string['savingmenuitem'] = 'アイテムの保存中';
$string['type'] = 'タイプ';
$string['footermenu'] = 'フッタメニュー';
$string['footermenudescription'] = 'フッタ内のリンクを有効または無効にします。';
$string['footerupdated'] = 'フッタが更新されました。';
$string['extralicensesdescription'] = '注意: 次のライセンスは一部のコンテンツで使用されていますが設定されていません。';
$string['licensenamelabel'] = 'URL';
$string['licensedisplaynamelabel'] = '表示名';
$string['licenseshortnamelabel'] = '頭字語';
$string['licenseiconlabel'] = 'アイコン';
$string['addsitelicense'] = 'ライセンスを追加する';
$string['licensedeleted'] = 'ライセンスが削除されました。';
$string['licensesave'] = '保存';
$string['licensesaved'] = 'ライセンスが保存されました。';
$string['licenseurldup'] = 'URLはユニークである必要があります。ここでは %s が繰り返し使用されています。';
$string['licenseurlnone'] = '%s のURLを指定してください。';
$string['networkingextensionsmissing'] = '申し訳ございません、あなたのインストール済みPHPでは1つまたはそれ以上の必須拡張モジュールが不足しているため、Maharaネットワーキングを設定できません:';
$string['publickey'] = '公開鍵';
$string['publickeydescription2'] = 'この公開鍵は自動的に生成され %s 日ごとにローテートされます。';
$string['publickeyexpires'] = '公開鍵有効期限';
$string['enablenetworking'] = 'ネットワーキングを有効にする';
$string['networkingenabled'] = 'ネットワーキングが有効にされました。';
$string['networkingdisabled'] = 'ネットワーキングが無効にされました。';
$string['networkingpagedescription'] = 'Maharaのネットワーキング機能では同一または別サーバで稼動中のMaharaまたはMoodleと連携できるようにします。ネットワーキングが有効にされた場合、あなたはMoodleまたはMaharaにログインする人のシングルサインオン設定にネットワーキングを使用できます。';
$string['networkingunchanged'] = 'ネットワーク設定は変更されませんでした。';
$string['promiscuousmode'] = 'すべてのホストを自動登録する';
$string['promiscuousmodedisabled'] = '自動登録が無効にされました。';
$string['promiscuousmodeenabled'] = '自動登録が有効にされました。';
$string['wwwroot'] = 'WWWルート';
$string['deletekey'] = 'この鍵を削除する';
$string['keydeleted'] = '公開鍵が削除および再生成されました。';
$string['proxysettings'] = 'プロクシ設定';
$string['proxyaddress'] = 'プロクシアドレス';
$string['proxyaddressset'] = 'プロクシアドレスセット';
$string['proxyauthmodel'] = 'プロクシ認証モデル';
$string['proxyauthmodelbasic'] = 'Basic (NCSA)';
$string['proxyauthmodelset'] = 'プロクシ認証モデルが設定されました。';
$string['proxyauthcredentials'] = 'プロクシ認証情報';
$string['proxyauthcredntialsset'] = 'プロクシ認証情報セット';
$string['emailsettings'] = 'メール設定';
$string['emailsmtphosts'] = 'SMTPホスト';
$string['emailsmtpport'] = 'SMTPポート';
$string['emailsmtpuser'] = 'ユーザ名';
$string['smtpuser_help'] = '<h1>ユーザ名</h1><p>あなたのサーバで認証が必要な場合、SMTPユーザ名を入力してください。</p>';
$string['emailsmtppass'] = 'パスワード';
$string['smtppass_help'] = '<h1>パスワード</h1><p>あなたのサーバで認証が必要な場合、SMTPパスワードを入力してください。</p>';
$string['emailsmtpsecure'] = 'SMTP暗号化';
$string['emailsmtpsecuressl'] = 'SSL';
$string['emailsmtpsecuretls'] = 'TLS';
$string['emailnoreplyaddress'] = 'システムメールアドレス';
$string['noreplyaddress_help'] = '<h1>システムメールアドレス</h1><p>サイトメールが送信される送信元メールアドレスです。</p>';
$string['internalnotificationexpire'] = '通知有効期限';
$string['internalnotificationexpire_help'] = '<h1>通知有効期限</h1><p>指定された日数が経過した場合、あなたの受信トレイから以下の通知タイプが削除されます:</p>
<ul>
<li>ページアクセス通知</li>
<li>ウォッチリスト通知</li>
<li>インスティテューション通知</li>
</ul>';
$string['notificationsettings'] = '通知設定';
$string['notificationsettingsdescription1'] = 'ここであなたは新しいアカウント保持者が受信する通知のデフォルトオプションを設定できます。人はこれらの設定を自分の「アカウントメニュー → 設定 → 通知」ページでオーバーライドできます。<br>あなたがメールオプションのどちらを選択した場合でも通知は受信ボックスに到着しますが、自動的に既読マークされます。';
$string['allow_inst_admins_to_manage_issue_reports'] = 'インスティテューション管理者がイシュレポートを受信する';
$string['allow_inst_admins_to_escalate_issue_reports'] = 'インスティテューション管理者がイシュレポートをエスカレーションできる';
$string['escalation_email'] = 'エスカレーションメール';
$string['csvfile'] = 'CSVファイル';
$string['emailusersaboutnewaccount1'] = 'アカウント詳細をメール送信する';
$string['forceuserstochangepassword'] = 'パスワード変更を強制する';
$string['configureauthplugin'] = 'あなたが人を追加するには最初に認証プラグインを設定する必要があります。';
$string['csvmaxusersdescription'] = 'このファイルには %s 以上含めません。';
$string['csverroremptyfile'] = 'CSVファイルが空です。';
$string['invalidfilename'] = 'ファイル「 %s 」が存在しません。';
$string['invalidfilenameformatforcsv'] = 'ファイルフォーマット「 %s 」が有効ではありません。有効なカンマ区切り値 (.csv) のファイルをアップロードしてください。';
$string['uploadcsverrorinvalidfieldname'] = 'フィールド名「 %s 」が無効、またはヘッダ行より多いフィールドが指定されています。';
$string['uploadcsverrorrequiredfieldnotspecified'] = '必須フィールド「 %s 」がフォーマット行で指定されていません。';
$string['uploadcsverrornorecords'] = 'ファイルにレコードが含まれていないようです (ヘッダに問題はありません)。';
$string['uploadcsverrorunspecifiedproblem1'] = '何らかの理由によりあなたのCSVファイルのレコードを追加できませんでした。あなたのファイルが正しいフォーマットの場合、これはバグだと思われます。CSVファイルを添付した<a href="https://bugs.launchpad.net/mahara/+filebug">バクレポートを作成してください</a> (忘れずにパスワードを空白にしてください!)。また、可能でしたら、エラーログファイルも添付してください。';
$string['uploadcsverrorwrongnumberoffields'] = 'あなたのファイルの %s 行目にエラーがあります: フィールド数が正しくありません。';
$string['uploadcsverrorinvalidemail'] = 'あなたのファイルの %s 行目にエラーがあります: この人のメールアドレスは正しいフォーマットではありません。';
$string['uploadcsverrorincorrectnumberoffields'] = 'あなたのファイルの %s 行目にエラーがあります: この行には正しい数のフィールドが含まれていません。';
$string['uploadcsverrorinvalidpassword1'] = 'あなたのファイルの %s 行目にエラーがあります: %s';
$string['uploadcsverrorinvalidusername'] = 'あなたのファイルの %s 行目にエラーがあります: この人のユーザ名は正しいフォーマットではありません。';
$string['uploadcsverrormandatoryfieldnotspecified'] = 'このファイルの %s 行目には必須の「 %s 」フィールドが含まれていません。';
$string['uploadcsverroruseralreadyexists'] = 'このファイルの %s 行目で指定されているユーザ名「 %s 」はすでに存在します。';
$string['uploadcsverroremailaddresstaken'] = 'このファイルの %s 行目で指定されているメールアドレス「 %s 」はすでに他の人に取得されています。';
$string['uploadcsverrorduplicateremoteuser'] = 'このファイルの %s 行目で指定されているリモートユーザ名「 %s 」はすでに他の人に取得されています。';
$string['uploadcsverrorremoteusertaken'] = 'このファイルの %s 行目で指定されているリモートユーザ名「 %s 」はすでに「 %s 」に取得されています。';
$string['uploadcsverrorusernotininstitution'] = 'あなたのファイルの %s 行目にエラーがあります: 「 %s 」はインスティテューション「 %s 」のメンバではありません。';
$string['uploadcsverroruserinaninstitution'] = 'あなたのファイルの %s 行目にエラーがあります: 「 %s 」は次のインスティテューションのメンバです: %s あなたはこの人の認証方法を「No Institution」に変更できません。';
$string['uploadcsverrorinvalidexpirydate'] = 'あなたのファイルの %s 行目にエラーがあります: 有効期限「 %s 」が有効ではありません。有効な日付フォーマットを使用してください。';
$string['uploadcsverroruserrolemissing'] = 'あなたのファイルの %s 行目にエラーがあります: ユーザロール「 %s 」のクラスがありません。「UserRole%s」クラスが存在してアクセス可能であることを確認してください。';
$string['uploadcsverrorexpirydateinpast'] = 'あなたのファイルの %s 行目にエラーがあります: 有効期限「 %s 」を過去にはできません。';
$string['uploadcsvpagedescription8'] = '<p>あなたは<acronym title="Comma Separated Values">CSV</acronym>ファイルのアップロードで新しいアカウントを作成または既存のアカウントを更新できます。</p>

<p>あなたのCSVファイルの先頭行にはCSVデータのフォーマットを記述してください。例えば以下のようになります:</p>

<pre>username,password,email,firstname,lastname,studentid</pre>

<p>あなたが新しいアカウントを作成する場合、この行には以下のフィールドを含む必要があります:</p>
<ul class="fieldslist">
<li>username</li>
<li>firstname</li>
<li>lastname</li>
<li>email</li>
<li>password</li>
</ul>

<p>あなたが外部認証方式を使用するアカウントを設定した場合でも「password」フィールドは必要です。その場合、パスワード変更を強制しないよう注意してください。既存のアカウントを更新する場合、「password」フィールドは省略できます。</p>

<p>あなたのCSVファイルには初期値を事前設定するための他のプロファイルフィールドを使用できます。任意フィールドは以下のとおりです:</p>

%s';
$string['uploadcsverrortoomanyusers'] = 'あなたのCSVファイルに含まれる行が多すぎます。あなたのファイルに %s 以上含めません。';
$string['uploadcsverrordatamustbenumeric'] = '%s 行目: カテゴリ (category) の値は数字にしてください。';
$string['uploadgroupcsverrordisplaynamealreadyexists'] = 'あなたのファイルの %s 行目にエラーがあります: 表示名 (displayname ) 「 %s 」 はすでに存在します。';
$string['uploadgroupcsverrorinvalidshortname'] = 'あなたのファイルの %s 行目にエラーがあります: グループ省略名 (shortname) 「 %s 」が有効ではありません。';
$string['uploadgroupcsverrorshortnamemissing'] = 'あなたのファイルの %s 行目にエラーがあります: グループ省略名 (shortname) 「 %s 」のグループは存在しません。';
$string['uploadgroupcsverrorinvalidgrouptype'] = 'あなたのファイルの %s 行目にエラーがあります: グループタイプ (grouptype) 「 %s 」が有効ではありません。';
$string['uploadgroupcsverrorinvalideditroles'] = 'あなたのファイルの %s 行目にエラーがあります: 編集ロール (editroles) 「 %s 」が有効ではありません。';
$string['uploadgroupcsverrorshortnamealreadytaken1'] = 'あなたのファイルの %s 行目にエラーがあります: 省略名「 %s 」 (shortname) はすでに取得されています。有効な代替は「 %s 」です。';
$string['uploadgroupcsverrorusernamesnotlastfield'] = '「usernames」フィールドはヘッダの最終フィールドにしてください。';
$string['uploadgroupcsverroropencontrolled'] = '%s 行目: グループにはオープンおよび管理メンバシップを同時に設定できません。';
$string['uploadgroupcsverroropenrequest'] = '%s 行目: オープンメンバシップのグループではメンバシップをリクエストできません。';
$string['uploadgroupcsverrorviewnotifyrequest'] = '%s 行目: viewnotifyの値は %s-%s の間の数字にしてください。';
$string['uploadgroupcsverrordoesnotallowgroupcategory1'] = '%s 行目: このサイトではグループカテゴリを許可していません。あなたがグループカテゴリを使用したい場合、サイト管理者は「管理エリア → グループ → グループカテゴリ」で有効にできます。';
$string['uploadgroupcsverrorcategorydoesnotexist'] = '%s 行目: カテゴリ「 %s 」が存在しません。';
$string['uploadgroupcsvpagedescription3'] = '<p>このページを使用して<acronym title="Comma Separated Values">CSV</acronym>ファイルで新しいグループをアップロードできます。</p>

<p>あなたのCSVファイルの先頭行にはデータのフォーマットを記述してください。必須フィールドは以下のとおりです:</p>

<pre>shortname,displayname,roles</pre

<p>それぞれの「shortname」の長さは半角2-255文字にしてください。「shortname」には半角英数字小文字、「.」、「-」および「_」を使用できます。</p>

<p>「roles」フィールドには以下の設定値を使用できます: %s</p>

%s

<p>必要に応じてあなたのCSVファイルには他のフィールドを使用できます。フィールドの完全なリストは以下のとおりです:</p>

%s';
$string['uploadgroupcsveditrolesdescription'] = '<p>editrolesフィールドには次のいずれかを使用できます: %s</p>
%s';
$string['editgroup.editroles_help'] = '<p>editrolesフィールドには次のいずれかを使用できます: %s</p>
%s';
$string['uploadgroupmemberscsverrorduplicateusername'] = 'あなたのファイルの %s 行目にエラーがあります: グループ省略名 (shortname) 「 %s 」およびユーザ名 (username) 「 %s 」はすでにこのファイルで指定されています。';
$string['uploadgroupmemberscsverrorinvalidrole'] = 'あなたのファイルの %s 行目にエラーがあります: 指定されたグループにロール「 %s 」は有効ではありません。';
$string['uploadgroupmemberscsverrornoadminlisted'] = 'あなたのファイルの %s 行目にエラーがあります: グループ省略名 (shortname) 「 %s 」にはロール「admin」を指定されたグループメンバはいませんでした。';
$string['uploadgroupmemberscsverrornosuchshortname'] = 'あなたのファイルの %s 行目にエラーがあります: グループ省略名 (shortname) 「 %s 」が存在しないかインスティテューション「 %s 」に属していません。';
$string['uploadgroupmemberscsverrornosuchusername'] = 'あなたのファイルの %s 行目にエラーがあります: ユーザ名 (username) 「 %s 」は存在しません。';
$string['uploadgroupmemberscsverrorusernotininstitution'] = 'あなたのファイルの %s 行目にエラーがあります: ユーザ名 (username) 「 %s 」はインスティテューション「 %s 」に属していません。';
$string['uploadgroupmemberscsvpagedescription3'] = '<p>あなたはこの機能を使用してこのインスティテューションで管理されるグループ内のグループメンバを更新できます。あなたは<acronym title="Comma Separated Values">CSV</acronym>ファイルで新しいメンバをアップロードできます。</p>

<p>CSVファイルの先頭行にはCSVデータのフォーマットを記述してください。例えば以下のようになります:</p>

<pre>shortname,username,role</pre>

<p>この行には上のフィールドすべてを含む必要がありますが、順序は自由に記述してください。</p>

<p>shortnameフィールドはあなたが<a href="%s" title="%s">ここ</a>でグループを作成した時に使用した省略名と同じにする必要があります。</p>

<p>roleフィールドにはグループタイプに応じて次の設定値を使用できます: <tt>admin</tt>、<tt>member</tt>または<tt>tutor</tt></p>

<div class="warning">CSVファイルアップロードにより毎回グループ管理者を含む既存のすべてのグループメンバが完全に削除されます。あなたのCSVファイル内に少なくとも1名の管理者が存在することを確認してください。</div>';
$string['uploadcsvsomeuserscouldnotbeemailed'] = '一部の人にメール送信できませんでした。メールアドレスが有効ではないかMaharaが動作しているサーバがメールを適切に送信できるよう設定されていません。サーバのエラーログにはさらに詳細が記録されています。現在のところ、これらの人には手動で連絡してください:';
$string['uploadcsvfailedusersexceedmaxallowed'] = 'あなたのファイル内の人が多過ぎるため誰も追加されませんでした。許可されたインスティテューションの最大数をメンバ数が超過しました。';
$string['updateusers'] = 'アカウントを更新する';
$string['updategroups'] = 'グループを更新する';
$string['csvfileprocessedsuccessfully'] = 'あなたのCSVファイルが正常に処理されました。';
$string['nousersadded'] = '誰も追加されませんでした。';
$string['nogroupsadded'] = 'グループは追加されませんでした。';
$string['numbernewusersadded'] = '新しいアカウントが追加されました: %s';
$string['numbernewgroupsadded'] = '新しいグループが追加されました: %s';
$string['numberusersupdated'] = 'アカウントが更新されました: %d';
$string['numbergroupsupdated'] = 'グループが更新されました: %d';
$string['showupdatedetails'] = '更新詳細を表示する';
$string['uploadcsvemailingnewusers'] = '新しいアカウント保持者に通知する';
$string['uploadcsvemailingupdatedusers'] = '更新アカウント保持者に通知する';
$string['uploadcsvdone'] = '処理完了';
$string['bulkleap2aimport'] = 'Leap2Aファイルからアカウントをインポートする';
$string['bulkleap2aimportdescription1'] = '<p>あなたのサーバ内にある複数のLeap2Aファイルからアカウントを一度にインポートできます。あなたはサーバのファイルシステムにあるすべてのLeap2A ZIPファイルおよびユーザ名をファイル名にマッピングしたusernames.csvと呼ばれる単一CSVファイルを含むZIPファイルを指定する必要があります。</p>
<p>usernames.csvは以下のようになります:</p>
<pre>
&nbsp;&nbsp;bob,mahara-export-leap-user8-1265165366.zip<br>
&nbsp;&nbsp;nigel,mahara-export-leap-user1-1266458159.zip
</pre>
<p>mahara-export-leap-user8-1265165366.zipおよびmahara-export-leap-user1-1266458159.zipはサブディレクトリusers内のファイルです:</p>
<p>あなたのZIPファイルの構造 例) 「import.zip」は以下のようになります:</p>
<pre>
import.zip<br>
<span class="icon icon-file icon-regular"></span> usernames.csv<br>
<span class="icon icon-folder-open icon-regular"></span> users<br>
<span class="icon icon-file icon-regular"></span> mahara-export-leap-user8-1265165366.zip<br>
<span class="icon icon-file icon-regular"></span> mahara-export-leap-user1-1266458159.zip<br>
</pre>
<p>通常、このZIPファイルはMahara内蔵のバルクエクスポートを使用して生成されます。</p>
<p>あなたが多くのアカウントをインポートする場合、注意してください。インポート処理に長時間を要する場合があります。</p>';
$string['importfile'] = 'バルクエクスポートファイル';
$string['emailimportedusersaboutnewaccountdescription'] = '人に新しいアカウント詳細を知らせるためのメールを送信します。';
$string['importfilemissinglisting'] = 'ファイル名「usernames.csv」のバルクエクスポートファイルがありません。あなたはこれらのアカウントのエクスポートにMaharaバルクエクスポータを使用しましたか?';
$string['importfilenotafile'] = 'フォーム送信中にエラーが発生しました: ファイルを認識できませんでした。';
$string['importfilenotreadable'] = 'フォーム送信中にエラーが発生しました: ファイルを読み込めませんでした。';
$string['bulkleap2aimportfiledescription1'] = 'あなたのサーバ内にあるエクスポートされたアカウントすべて (Leap2Aフォーマット) およびユーザ名のCSVリストを含むZIPファイルのパスを入力してください。例) 「/home/example/data/import.zip」';
$string['importednuserssuccessfully'] = '%d / %d のアカウントを正常にインポートしました。';
$string['Import'] = 'インポート';
$string['bulkimportdirdoesntexist'] = 'ディレクトリ %s が存在しません。';
$string['unabletoreadbulkimportdir'] = 'ディレクトリ %s を読めません。';
$string['unabletoreadcsvfile'] = 'CSVファイル %s を読めません。';
$string['importfileisnotazipfile'] = 'インポートファイル %s はZIPファイルとして検出されませんでした。';
$string['unzipfailed'] = 'Leap2Aファイル %s の展開に失敗しました。詳細はエラーログをご覧ください。';
$string['importfailedfornusers'] = '%d / %d のアカウントのインポートに失敗しました。';
$string['invalidlistingfile'] = '無効なユーザ名リストです。あなたはこれらのアカウントのエクスポートにMaharaバルクエクスポータを使用しましたか?';
$string['importing'] = 'インポート中';
$string['adminuserspagedescription1'] = '<p>ここであなたはどの人をサイトの管理者にするか選択できます。現在の管理者は「現在の管理者」フィールドに潜在的な管理者は「潜在的な管理者」フィールドに一覧表示されます。</p><p>システムには少なくとも1名のサイト管理者を設定する必要があります。</p>';
$string['institutionadminuserspagedescription1'] = 'ここであなたはどのインスティテューションメンバをインスティテューション管理者にするか選択できます。現在の管理者は「現在の管理者」フィールドに潜在的な管理者は「インスティテューションメンバ」フィールドに一覧表示されます。';
$string['potentialadmins'] = '潜在的な管理者';
$string['currentadmins'] = '現在の管理者';
$string['adminusersupdated'] = '管理者が更新されました。';
$string['institutionsupportadminpagedescription'] = 'ここではあなたのインスティテューションでインスティテューションサポート管理者になるインスティテューションメンバを選択できます。現在のサポート管理者は「インスティテューションサポート管理者」フィールドに表示されます。潜在的なサポート管理者は「インスティテューションメンバ」フィールドに表示されます。';
$string['supportadminusersupdated'] = 'サポート管理者が更新されました。';
$string['staffuserspagedescription1'] = 'ここであなたはどの人をサイトのスタッフにするか選択できます。現在のスタッフは「現在のスタッフ」フィールドに潜在的なスタッフは「潜在的なスタッフ」フィールドに一覧表示されます。';
$string['institutionstaffuserspagedescription1'] = 'ここであなたはどのインスティテューションメンバをあなたのインスティテューションのスタッフにするか選択できます。現在のスタッフは「インスティテューションスタッフ」フィールドに潜在的なスタッフは「インスティテューションメンバ」フィールドに一覧表示されます。';
$string['potentialstaff'] = '潜在的なスタッフ';
$string['currentstaff'] = '現在のスタッフ';
$string['makeusersintostaff'] = '選択したインスティテューションメンバをスタッフにする';
$string['makestaffintousers'] = '選択したスタッフを通常のインスティテューションメンバに戻す';
$string['staffusersupdated'] = 'スタッフが更新されました。';
$string['deleteusers'] = 'アカウントを削除する';
$string['deleteaccountuser'] = '%s %s のアカウントを削除する';
$string['confirmdeleteusers1'] = '本当に選択された人のアカウントを削除してもよろしいですか?';
$string['exportingnotsupportedyet'] = 'プロファイルのエクスポートはまだサポートされていません。';
$string['exportuserprofiles'] = 'プロファイルをエクスポートする';
$string['nousersselected'] = '誰も選択されていません。';
$string['nocontentselected'] = 'ポートフォリオが選択されていません。';
$string['suspenduser'] = '人を利用停止する';
$string['suspendthisuser'] = '%s %s のアカウントを利用停止する';
$string['suspendeduserstitle'] = '利用停止および有効期限切れアカウント';
$string['suspendedusers'] = '利用停止された人';
$string['suspensionreason'] = '利用停止理由';
$string['errorwhilesuspending'] = '利用停止中にエラーが発生しました。';
$string['suspendedusersdesc'] = '利用停止および有効期限切れアカウントを表示して再有効化または削除します。';
$string['unsuspendusers'] = '人の利用停止を解除する';
$string['usersdeletedsuccessfully'] = 'アカウントが正常に削除されました。';
$string['usersunsuspendedsuccessfully'] = '人の利用停止が正常に解除されました。';
$string['suspendingadmin'] = '利用停止担当管理者';
$string['usersuspended'] = '人が利用停止されました。';
$string['userunsuspended'] = '人の利用停止が解除されました。';
$string['expiredusers'] = '有効期限切れアカウント';
$string['expired'] = '有効期限切れ';
$string['expires'] = '有効期限切れ';
$string['unexpireusers'] = '有効期限切れアカウントを再有効化する';
$string['usersreactivated'] = 'アカウントが再有効化されました。';
$string['accountsettings'] = 'アカウント設定';
$string['siteaccountsettings'] = 'サイトアカウント設定';
$string['changeusername'] = 'ユーザ名を変更する';
$string['resetpassword'] = 'パスワードをリセットする';
$string['forcepasswordchange'] = '次回ログイン時、パスワード変更を強制する';
$string['primaryemail'] = '主メールアドレス';
$string['sitestaff'] = 'サイトスタッフ';
$string['siteadmins'] = 'サイト管理者';
$string['siteadmin'] = 'サイト管理者';
$string['accountexpiry'] = 'アカウント有効期限';
$string['suspended'] = '利用停止中';
$string['suspendedreason'] = '利用停止理由';
$string['suspendedreasondescription'] = '次回ログイン時、人に表示されるテキストです。';
$string['unsuspenduser'] = '人の利用停止を解除する';
$string['thisuserissuspended'] = 'この人は利用停止されました。';
$string['suspendedinfo'] = 'この人は %s により %s に利用停止されました。';
$string['expiredinfo'] = 'このアカウントは %s に有効期限切れとなりました。';
$string['unexpiredesc1'] = 'このアカウントを再有効化するには下の「アカウント有効期限」フィールドのチェックを外してあなたの変更を保存してください。';
$string['deleteuser'] = 'アカウントを削除する';
$string['userdeletedsuccessfully'] = 'アカウントが正常に削除されました。';
$string['confirmdeleteuser'] = '本当にこのアカウントを削除してもよろしいですか?';
$string['filequota1'] = 'ファイルクオータ';
$string['quotaused'] = 'クオータ使用量';
$string['recalculatequota'] = 'クオータを再計算する';
$string['recalculatequotadescription'] = 'クオータが同期されていない場合にクオータをリセットします。';
$string['probationbulkconfirm'] = '本当にこれらのアカウントのスパム保護観察ステータスを変更してもよろしいですか?';
$string['probationbulksetspamprobation'] = 'スパム保護観察を設定する';
$string['probationbulkset'] = '設定';
$string['probationtitle'] = 'スパム発信者保護観察ステータス';
$string['probationzeropoints'] = '保護観察なし';
$string['probationxpoints'] = '%d ポイント';
$string['probationreportcolumn'] = '保護観察';
$string['addusertoinstitution1'] = 'インスティテューションに追加する';
$string['removeuserfrominstitution1'] = 'このインスティテューションから削除する';
$string['confirmremoveuserfrominstitution'] = '本当にこの人をこのインスティテューションから削除してもよろしいですか?';
$string['usereditdescription1'] = 'あなたはここでこのアカウントを管理できます。アカウント管理には詳細変更、利用停止、削除およびインスティテューションのメンバシップ変更を含みます。';
$string['suspenduserdescription'] = 'アカウントの利用停止が解除されるまで利用停止された人はログインできません。';
$string['deleteusernote'] = 'この処理は<strong>元に戻せません</strong>ので注意してください。';
$string['youcannotadministerthisuser'] = 'あなたはこのアカウントを管理できません。';
$string['userinstitutionjoined'] = '人がインスティテューション「 %s 」に追加されました。';
$string['userinstitutionremoved'] = '人がインスティテューション「 %s 」から削除されました。';
$string['userinstitutionupdated'] = 'インスティテューション「 %s 」のアカウント設定が更新されました。';
$string['usernamechangenotallowed'] = '選択された認証方法ではユーザ名の変更が許可されていません。';
$string['usersitesettingschanged'] = 'サイトアカウント設定が更新されました。';
$string['passwordchangenotallowed'] = '選択された認証方法ではパスワードの変更が許可されていません。';
$string['thisuserdeleted'] = 'このアカウントは削除されました。';
$string['disableemail'] = 'メールを無効にする';
$string['exportqueue'] = 'エクスポートキュー';
$string['exportqueuedesc'] = '保留中のコンテンツエクスポートを表示します。';
$string['exportcontentname'] = 'エクスポートコンテンツ';
$string['selectuserexport1'] = 'エクスポートのために再度キューに追加するコンテンツ「 %s 」を選択する';
$string['selectuserexportdelete'] = 'エクスポートキューから削除するコンテンツ「 %s 」を選択する';
$string['exportpending'] = '%s 現在の保留';
$string['exportfailed'] = '失敗 %s';
$string['exportqueuedeleted'] = '%s 行が正常に削除されました。';
$string['exportqueuearchived'] = '%s 行が正常に更新されました。';
$string['exportdataascsv'] = 'すべてのデータをCSVフォーマットでエクスポートする';
$string['nocsvresults'] = 'CSVファイルの結果は見つかりませんでした。';
$string['exportdownloademailsubject1'] = 'あなたの「 %s 」のエクスポートのダウンロード準備ができました。';
$string['exportdownloademailmessage1'] = '%s さん、あなたの「 %s 」のエクスポートのダウンロード準備ができました。このファイルは生成後、最大24時間のみ利用できます。ファイルをダウンロードするには次のリンクにアクセスしてください:';
$string['exportdownloadurl'] = 'エクスポートされたファイルをダウンロードする';
$string['addaccount'] = 'アカウントを追加する';
$string['adduserdescription'] = '新しいアカウントを作成します。';
$string['basicinformationforthisuser'] = 'このアカウントの基本情報です。';
$string['clickthebuttontocreatetheuser'] = 'アカウントを作成するにはボタンをクリックしてください。';
$string['createnewuserfromscratch'] = '新しいアカウントを最初から作成する';
$string['createuser'] = 'アカウントを作成する';
$string['failedtoobtainuploadedleapfile'] = 'アップロードされたLeap2Aファイルの取得に失敗しました。';
$string['failedtounzipleap2afile'] = 'Leap2Aファイルの展開に失敗しました。詳細はエラーログを確認してください。';
$string['fileisnotaziporxmlfile'] = 'このファイルはZIPファイルまたはXMLファイルとして認識されませんでした。';
$string['howdoyouwanttocreatethisuser'] = 'このアカウントをどのように作成しますか?';
$string['leap2aimportfailed'] = '<p><strong>申し訳ございません、Leap2Aファイルのインポートに失敗しました。</strong></p><p>これはあなたが有効なLeap2Aファイルをアップロードに選択しなかったから、またはこのMaharaのバージョンではあなたのLeap2Aファイルがサポートされていないからだと考えられます。また、Leap2Aファイルが有効な場合、Maharaのバグがあなたのファイルのアップロードを失敗させていることも考えられます。</p><p><a href="add.php">戻ってファイルのアップロードを再度お試しください</a>。この問題が続く場合、エラー状況を<a href="https://mahara.org/forums/">Maharaフォーラム</a>に投稿してください。その場合、あなたのファイルのコピーを準備してください。</p>';
$string['newuseremailnotsent'] = 'ウェルカムメールの送信に失敗しました。';
$string['newusercreated'] = '新しいアカウントが正常に作成されました。';
$string['noleap2axmlfiledetected'] = 'leap2a.xmlファイルが検出されませんでした - 再度あなたのエクスポートファイルを確認してください。';
$string['Or'] = 'または';
$string['userwillreceiveemailandhastochangepassword'] = '新しいアカウント詳細を記載したメールが送信されます。初回ログイン時、パスワードの変更を求められます。';
$string['uploadzipfile'] = 'エクスポート済みZIPファイルをアップロードする';
$string['importaccount'] = 'アカウントをインポートする';
$string['usercreationmethod'] = '1 - 作成方法';
$string['basicdetails'] = '2 - 基本情報';
$string['create'] = '3 - 作成';
$string['loginas'] = '代理ログイン';
$string['loginasthisuser'] = 'この人としてログインする';
$string['loginasuser'] = '%s としてログインする';
$string['loginasdenied'] = '許可なく別の人としてのログインを試みました。';
$string['loginastwice'] = 'すでにログインしているにもかかわらず、別の人としてのログインを試みました。';
$string['loginasrestorenodata'] = 'リストアするデータがありません。';
$string['loginasoverridepasswordchange'] = 'あなたは別の人としてログインしているためパスワード変更画面を無視して%とにかくログインすること%sを選択できます。';
$string['loginasoverridelegalaccept'] = 'あなたは別の人としてログインしているため法的表示に同意せずに%sとにかくログインすること%sを選択できます。';
$string['Add'] = '追加';
$string['all'] = 'すべて';
$string['admininstitutions'] = 'インスティテューションを管理する';
$string['editinstitution'] = 'インスティテューションを編集する';
$string['adminauthorities'] = '認証局を管理する';
$string['addinstitution'] = 'インスティテューションを追加する';
$string['authplugin'] = '認証プラグイン';
$string['deleteinstitution'] = 'インスティテューションを削除する';
$string['deleteinstitutionconfirm1'] = '本当にこのインスティテューションを削除してもよろしいですか? そのインスティテューションがアウトカムポートフォリオを使用している場合、ウェブサービスおよびアウトカム情報は削除されます。グループはサイトと関連付けられます。';
$string['institutionstillhas'] = 'このインスティテューションにはまだ %s が登録されています。';
$string['institutionauthinuseby'] = 'このインスティテューションの認証はまだ %s により使用されています。';
$string['institutiononly'] = 'インスティテューションのみ';
$string['institutionaddedsuccessfully2'] = 'インスティテューションが正常に追加されました。';
$string['institutiondeletedsuccessfully'] = 'インスティテューションが正常に削除されました。';
$string['noauthpluginforinstitution'] = 'あなたのサイト管理者はこのインスティテューションの認証プラグインを設定していません。';
$string['adminnoauthpluginforinstitution'] = 'このインスティテューションの認証プラグインを設定してください。';
$string['institutionname'] = 'インスティテューション名';
$string['institutionnameinvalid'] = 'インスティテューション名が有効ではありません。';
$string['institutionshortname'] = 'インスティテューション省略名';
$string['institutionnamealreadytaken'] = 'このインスティテューション名はすでに取得されています。';
$string['institutiondisplayname'] = 'インスティテューション表示名';
$string['institutionexpiry'] = 'インスティテューション有効期限';
$string['expiry_help'] = '<h1>インスティテューション有効期限</h1>
<p>有効期限が設定されている場合、サイトおよびインスティテューション管理者は「インスティテューション有効期限警告」設定に基づいてインスティテューションの有効期限が切れる前に通知を受け取ります。</p><p>「有効期限切れインスティテューションの自動停止」が有効にされている場合、インスティテューションは有効期限に自動的に停止されます。そのインスティテューションのメンバはログインできなくなります。</p><p>サイト管理者は「<a href="options.php">サイト設定</a> → インスティテューション設定」で両方の設定を確認できます。</p>';
$string['institution.expiry_help'] = '<h1>有効期限</h1><p>次のフォーマットを使用してください: YYYY/MM/DD</p>';
$string['institutionlanguage'] = '言語';
$string['institution.lang_help'] = '<h1>言語</h1>
<p>インスティテューションメンバのデフォルト言語です。</p><p>それぞれのメンバはアカウントプレファレンスまたは言語スイッチャでこれを変更できます.</p>';
$string['includedinstitutions'] = '含まれるインスティテューション (省略名)';
$string['excludedinstitutions'] = '除外されるインスティテューション (省略名)';
$string['noinstitution'] = 'どのインスティテューションのメンバでもないアカウントを含む';
$string['defaultlangforinstitution'] = '%s デフォルト';
$string['institutionupdatedsuccessfully'] = 'インスティテューションが正常に更新されました。';
$string['registrationallowed'] = '登録を許可する';
$string['registrationconfirm'] = '登録承認';
$string['institution.registerconfirm_help'] = '<h1>登録承認</h1>
<p>この設定を有効にした場合、インスティテューション管理者はそれぞれの登録を承認する必要があります。</p> <p>このオプションを変更できない場合、サイト管理者がすべてのインスティテューションに対してこのオプションを必須にしています。</p>';
$string['defaultmembershipperiod'] = 'デフォルトのメンバシップ期間';
$string['showonlineusers'] = 'オンライン中の人を表示する';
$string['licensemandatory1'] = '必須ライセンス選択';
$string['institution.licensemandatory_help'] = '<h1>必須ライセンス選択</h1>
<p>この設定を有効にした場合、作成者は作成またはアップロードするすべてのアーティファクトのライセンスを選択する必要があります。</p>';
$string['licensedefault'] = 'デフォルトライセンス';
$string['institution.licensedefault_help'] = '<h1>デフォルトライセンス</h1>
<p>インスティテューションメンバが作成またはアップロードしたコンテンツのデフォルトライセンスを設定してください。メンバはアカウント設定または個々のアーティファクトでこれをオーバーライドできます。どのライセンスを選択するかわからない場合、あなたの組織の法務チームにご相談ください。</p>';
$string['licensedefaultmandatory'] = '作成者にライセンスの選択を要求する場合、あなたはここでデフォルトライセンスを選択する必要があります。あなたがデフォルトライセンスを選択したくない場合、あなたのインスティテューションメンバにライセンスを要求しないでください。';
$string['suspension'] = '利用停止';
$string['institution.theme_help'] = '<h1>テーマ</h1>
<p>ログイン済みのインスティテューションメンバに表示されるテーマです。「サイトデフォルト」が選択された場合、サイト管理者がデフォルトテーマを更新するたびにテーマが変更されます。設定可能なテーマを選択した場合、あなたはテーマの一部の色をカスタマイズできます。</p>';
$string['Logo'] = 'ロゴ';
$string['Logomobile'] = 'モバイルロゴ';
$string['deletelogo'] = 'ロゴを削除する';
$string['deletelogoxsmobile'] = 'モバイルロゴを削除する';
$string['deletelogodescription2'] = 'あなたのインスティテューションテーマの標準的なヘッダロゴに戻します。';
$string['deletelogoxsdescription3'] = 'あなたのインスティテューションテーマの標準ヘッダモバイルロゴに戻します。';
$string['customtheme'] = 'カスタムテーマ設定';
$string['customtheme.background'] = 'ヘッダ背景色';
$string['customtheme.backgroundfg'] = 'ヘッダテキスト背景色';
$string['customtheme.link'] = 'リンク';
$string['customtheme.headings'] = 'ヘッディング';
$string['customtheme.navbg'] = 'ナビゲーション背景色';
$string['customtheme.navfg'] = 'ナビゲーションテキスト';
$string['customtheme.subbg'] = 'サブナビゲーション背景色';
$string['customtheme.subfg'] = 'サブナビゲーションテキスト';
$string['customtheme.sidebarbg'] = 'サイドバー背景色';
$string['customtheme.sidebarfg'] = 'サイドバーコンテンツ背景色';
$string['customtheme.sidebarlink'] = 'サイドバーリンク';
$string['customtheme.rowbg'] = '列背景色';
$string['customstylesforinstitution'] = '%s のカスタムスタイル';
$string['resetcolours'] = '色をリセットする';
$string['resetcoloursdesc2'] = 'デフォルト色をリストアします。';
$string['authenticatedby'] = '認証方法';
$string['remoteusername'] = '外部認証のユーザ名';
$string['institutionsettings'] = 'インスティテューション設定';
$string['institutionsettingsdescription'] = 'あなたが管理者であるインスティテューションに関してこの人のメンバシップ設定を変更できます。';
$string['changeinstitution'] = 'インスティテューションを変更する';
$string['institutionstaff'] = 'インスティテューションスタッフ';
$string['institutionadmin'] = 'インスティテューション管理者';
$string['institutionadmins'] = 'インスティテューション管理者';
$string['institutionadministrator'] = 'インスティテューション管理者';
$string['institutionadmindescription1'] = 'この人がこのインスティテューションのすべての人を管理できるようにします。';
$string['institutionsupportadmin'] = 'インスティテューションサポート管理者';
$string['institutionsupportadmindescription'] = 'この人がこのインスティテューションの権限の少ない他の人 (例 メンバおよびスタッフ) として代理ログインすることを許可します。';
$string['settingsfor'] = '設定:';
$string['institutionmembers'] = 'インスティテューションメンバ';
$string['notadminforinstitution'] = 'あなたはこのインスティテューションの管理者ではありません。';
$string['institutionmemberspagedescription'] = 'このページではあなたのインスティテューションにメンバシップをリクエストした人を確認およびメンバとして追加できます。また、あなたのインスティテューションから人を削除および招待できます。';
$string['suspendordeletethisuser'] = 'このアカウントを利用停止または削除する';
$string['mergeaccount'] = 'アカウントをマージする';
$string['mergeaccounts'] = 'アカウントをマージする';
$string['mergeuserfrom'] = '1 - マージするアカウントを選択する';
$string['mergeuserto'] = '2 - ターゲットアカウントを選択する';
$string['mergeusersubmit'] = '3 - アカウントをマージする';
$string['mergeuserfromaccount'] = '別のアカウントにマージするアカウントを選択してください。';
$string['mergeusertoaccount'] = '他のアカウントからコンテンツを受け取るアカウントを選択してください。';
$string['mergeusertoaccountnote'] = '<strong>注意:</strong>このアカウントは更新されます。';
$string['merge_title'] = 'あなたがこのアカウントにマージするアカウントに関する情報です。';
$string['merge_displayname'] = '表示名';
$string['merge_firstname'] = '名';
$string['merge_lastname'] = '姓';
$string['merge_username'] = 'ユーザ名';
$string['merge_primary_email'] = '主メールアドレス';
$string['merge_emails'] = '副メールアドレス';
$string['merge_institutions'] = 'インスティテューションメンバシップ';
$string['merge_institution_roles'] = 'インスティテューションロール';
$string['merge_counts'] = 'アイテム数';
$string['mergeaccountoptions'] = '<strong>メモ:</strong> 以下のコンテンツは移動されません:
<ul><li>ダッシュボードページ</li>
<li>プロファイルページ</li>
<li>表示名</li>
<li>姓名</li>
<li>プロファイル画像</li></ul>
<p>メールアドレスはターゲットアカウントの副メールアドレスとして保存されます。</p>';
$string['deleteaccount_help'] = '<h1>マージするアカウントを削除する</h1>
<p>この設定を有効にした場合、アカウントはターゲットとマージされた後、削除されます。</p><p>この設定を無効にした場合、アカウントは統合されて保持されますが、コンテンツは含まれなくなります。</p>';
$string['searchforaccount'] = 'アカウントを検索する';
$string['usermergedfromto'] = '%s アカウントを %s アカウントにマージしました。';
$string['usermergedfromtoanddeleted'] = '%s アカウントを %s アカウントにマージして %s アカウントを削除しました。';
$string['merge_deleteaccount'] = 'マージするアカウントを削除する';
$string['institutionusersinstructionsrequesters2'] = '「 %1$s 」フィールドの一覧ではあなたのインスティテューションへの参加をリクエストした人すべてが表示されます。あなたは特定の人を探すため検索ボックスを使用できます。あなたがインスティテューションに人を追加したい場合、またはメンバシップリクエストを拒否したい場合、最初に「 %1$s 」フィールドで選択して右矢印ボタンをクリックして「 %2$s 」フィールドに移動してください。「メンバを追加する」ボタンにより「 %2$s 」フィールド内の人すべてをインスティテューションに追加します。「リンクエストを拒否する」ボタンにより「 %2$s 」フィールドに表示されているメンバシップリクエストを削除します。';
$string['institutionusersinstructionsnonmembers2'] = '「 %1$s 」フィールドの一覧ではまだあなたのインスティテューションのメンバではない人すべてが表示されます。あなたは特定の人を探すため検索ボックスを使用できます。インスティテューションへの参加に人を招待したい場合、最初に「 %1$s 」フィールドで選択して右矢印ボタンをクリックして「 %2$s 」フィールドに移動してください。「人を招待する」ボタンにより「 %2$s 」フィールド内の人すべてに招待を送信します。これらの人は招待を受け入れるまであなたのインスティテューションと関連付けられません。サイト管理者には「メンバを追加する」ボタンが表示されすぐにインスティテューションに人を追加できます。';
$string['institutionusersinstructionslastinstitution2'] = '「 %1$s 」フィールドの一覧ではまだあなたのインスティテューションのメンバではない人、選択されたインスティテューションを離脱した人すべてが表示されます。あなたは特定の人を探すため検索ボックスを使用できます。インスティテューションへの参加に人を招待したい場合、最初に「 %1$s 」フィールドで選択して右矢印ボタンをクリックして「 %2$s 」フィールドに移動してください。「人を招待する」ボタンにより「 %2$s 」フィールド内の人すべてに招待を送信します。これらの人は招待を受け入れるまであなたのインスティテューションと関連付けられません。サイト管理者には「メンバを追加する」ボタンが表示されすぐにインスティテューションに人を追加できます。';
$string['institutionusersinstructionsmembers2'] = '「 %1$s 」フィールドの一覧ではあなたのインスティテューションのメンバすべてが表示されます。あなたは特定の人を探すため検索ボックスを使用できます。インスティテューションからメンバを削除したい場合、最初に「 %1$s 」フィールドで選択して右矢印ボタンをクリックして「 %2$s 」フィールドに移動してください。「メンバを削除する」ボタンにより「 %2$s 」フィールド内の人すべてをインスティテューションから削除します。アカウントは削除されません。';
$string['institutionusersinstructionsinvited2'] = '「 %1$s 」フィールドの一覧ではインスティテューションへの参加の招待が送信されてまだ受け入れまたは拒否していない人すべてが表示されます。あなたは特定の人を探すため検索ボックスを使用できます。ある人へのインスティテューション招待を取り消したい場合、最初に「 %1$s 」フィールドで選択して右矢印ボタンをクリックして「 %2$s 」フィールドに移動してください。「招待を取り消す」ボタンにより「 %2$s 」フィールド内の人のあなたのインスティテューションへの招待を取り消します。「 %1$s 」フィールドに表示されている他の人はまだあなたのインスティテューションに参加できます。';
$string['editmembers1'] = 'メンバを管理する';
$string['editstaff1'] = 'スタッフを管理する';
$string['editsupportadmins1'] = 'サポート管理者を管理する';
$string['editadmins1'] = '管理者を管理する';
$string['membershipexpiry'] = 'メンバシップ有効期限';
$string['membershipexpirydescription'] = '人がインスティテューションから自動的に削除される日付です。';
$string['studentid'] = 'IDナンバ';
$string['institutionstudentiddescription'] = 'インスティテューション固有の任意の識別子です。インスティテューションメンバはこのフィールドを編集できません。';
$string['userstodisplay'] = '表示する人:';
$string['institutionusersrequesters1'] = 'リクエストされたインスティテューションメンバシップ';
$string['institutionusersnonmembers1'] = 'リクエストされていないインスティテューションメンバシップ';
$string['institutionusersmembers1'] = '現在のインスティテューションメンバ';
$string['addnewmembers'] = '新しいメンバを追加する';
$string['usersrequested'] = 'メンバシップをリクエストした人';
$string['userstobeadded'] = 'メンバとして追加される人';
$string['userstoaddorreject'] = '追加/拒否される人';
$string['addmembers'] = 'メンバを追加する';
$string['inviteuserstojoin'] = '人にインスティテューションへの参加を招待する';
$string['userswhohaveleft'] = 'インスティテューション %s から離脱した人';
$string['Non-members'] = '非メンバ';
$string['userstobeinvited'] = '招待される人';
$string['inviteusers'] = '人を招待する';
$string['removeusersfrominstitution'] = 'インスティテューションから人を削除する';
$string['currentmembers'] = '現在のメンバ';
$string['userstoberemoved'] = '削除されるメンバ';
$string['removeusers'] = '人を削除する';
$string['declinerequests'] = 'リクエストを拒否する';
$string['nousersupdated'] = '更新されたアカウントはありません。';
$string['errorupdatinginstitutionusers'] = 'インスティテューションメンバ更新中にエラーが発生しました。';
$string['revokeinvitation'] = '招待を取り消す';
$string['invitedusers'] = '招待された人';
$string['userstobeuninvited'] = '招待を取り消される人';
$string['moveuserstoadd'] = '選択したメンバリクエストをメンバに変更する';
$string['moveusersfromadd'] = '選択したメンバをメンバリクエストに変更する';
$string['moveuserstoinvite'] = '選択した非メンバを招待済みに変更する';
$string['moveusersfrominvite'] = '選択した招待済みを非メンバに変更する';
$string['moveuserstoinviteinstitution'] = '選択した旧 %s のメンバを招待済みに変更する';
$string['moveusersfrominviteinstitution'] = '選択した招待済みの人を旧 %s のメンバに変更する';
$string['movememberstoremove'] = '選択したメンバを削除済みメンバに変更する';
$string['movemembersfromremove'] = '選択した削除済みメンバをメンバに変更する';
$string['moveuserstouninvited'] = '選択した招待済みの人を未招待に変更する';
$string['moveusersfromuninvited'] = '選択した未招待の人を招待済みに変更する';
$string['institutionusersupdated_addUserAsMember'] = '人が追加されました。';
$string['institutionusersupdated_declineRequestFromUser'] = 'リクエストが拒否されました。';
$string['institutionusersupdated_removeMembers'] = '人が削除されました。';
$string['institutionusersupdated_inviteUser'] = '招待が送信されました。';
$string['institutionusersupdated_uninvite_users'] = '招待が取り消されました。';
$string['maxuseraccounts1'] = '許可される最大アカウント数';
$string['institutionmaxusersexceeded'] = 'このインスティテューションはメンバ数が上限に達しました。この人を追加できるようにするにはあなたはこのインスティテューションが許可するメンバ数を増やす必要があります。';
$string['institutionuserserrortoomanyusers'] = 'これらの人は追加されませんでした。メンバ数はインスティテューションで許可される最大メンバ数を超えることはできません。あなたは少数の人を追加するか、インスティテューションから人を削除するか、サイト管理者に最大メンバ数を増やすよう依頼できます。';
$string['institutionuserserrortoomanyinvites'] = 'あなたの招待は送信されませんでした。既存のメンバ + 未処理の招待者数はインスティテューションで許可される最大メンバ数を超えることはできません。あなたは少数の人を招待するか、インスティテューションから人を削除するか、サイト管理者に最大メンバ数を増やすよう依頼できます。';
$string['maxnumberofgroups'] = '許可される最大グループ数';
$string['institutionmaxgroupsexceeded'] = 'このインスティテューションにはすでに %s のグループが登録されています。一部のグループを削除するか、グループ上限を増やしてください。';
$string['maxmembersexceeded'] = 'このインスティテューションにはすでに %s のメンバが登録されています。一部のメンバを削除するか、アカウント上限を増やしてください。';
$string['Shortname'] = '省略名';
$string['Members'] = 'メンバ';
$string['Maximummembers'] = '最大メンバ数';
$string['Maximumgroups'] = '最大グループ数';
$string['Staff'] = 'スタッフ';
$string['Admins'] = '管理者';
$string['Supportadmins'] = 'サポート管理者';
$string['noinstitutions'] = 'インスティテューションはありません。';
$string['noinstitutionsdescription'] = 'あなたが人をインスティテューションと関連付けたい場合、最初にインスティテューションを作成してください。';
$string['noinstitutionreports'] = 'インスティテューションレポートを表示できません。';
$string['noinstitutionreportsdescription2'] = 'サイトがスタッフまたはサポート管理者にインスティテューションレポートを閲覧できるようにするにはインスティテューションレポートアクセスを有効にする必要があります。サイト管理者は<a href="%sadmin/site/options.php">サイト設定</a>の「インスティテューション設定」でこの設定を有効にできます。';
$string['noinstitutionstaticpages'] = 'あなたにはインスティテューション固定ページを編集するためのパーミッションがないかまだインスティテューションが作成されていません。';
$string['noinstitutionstaticpagesadmin'] = 'あなたがサイト管理者の場合、<a href="%s">サイト設定</a>でデフォルト固定ページを編集してください。';
$string['institutiontagsdesc'] = 'インスティテューションタグが有効にされている場合、メンバが利用できるタグを設定します。';
$string['approve'] = '承認';
$string['deny'] = '拒否';
$string['approveregistrationfor2'] = '「 %s %s <%s> 」の登録を承認する';
$string['approveregistrationmessage'] = '人の登録を承認してインスティテューション「 %s 」に追加します。本当にこの登録を承認してもよろしいですか?';
$string['denyregistrationfor'] = '「 %s %s 」の登録を拒否する';
$string['denyregistrationmessage'] = '人の登録を拒否します。本当にこの登録を拒否してもよろしいですか?';
$string['nopendingregistrations'] = 'このインスティテューションの登録保留はありません。';
$string['pendingregistration'] = '登録保留';
$string['pendingregistrations'] = '登録保留';
$string['pendingregistrationspagedescription2'] = '<p>このページではあなたのインスティテューションで自己登録およびメンバシップをリクエストした人を閲覧できます。あなたは登録リクエストを承認または拒否できます。<p>
<p>登録を承認した場合、人にはアカウントの有効化に関して詳細なインストラクションを記載した通知が送信されます。人が有効化リンクをクリックした場合、インスティテューションのメンバとして追加されます。有効化リンクは24時間で有効期限切れとなり人の詳細は削除されます。まだ登録したい場合、同じ手続きを再度開始する必要があります。</p>
<p>登録を拒否した場合、人に自動的に通知されます。</p>';
$string['pendingregistrationdesc'] = 'あなたのインスティテューションへの自己登録した人のメンバシップを承認または拒否します。';
$string['pendingdeletiondesc'] = '自分のアカウントを削除したい人の削除を承認または拒否します。';
$string['pendingusercompletion1'] = '承認が送信されました。人の登録処理の完了を待っています。';
$string['nosuchinstitution'] = 'そのようなインスティテューションはありません。';
$string['registrationapprovedsuccessfully'] = '登録が正常に承認されました。';
$string['registrationapprovedmessage'] = '登録メッセージ:';
$string['registrationapproveddesc'] = '新しく登録した人への追加情報です。';
$string['registrationdeniedreason'] = '拒否理由';
$string['registrationdeniedreasondesc'] = 'サイト名が拒否された理由に関する情報です。';
$string['registrationdeniedsuccessful'] = '登録が正常に拒否されました';
$string['registrationdeniedunsuccessful'] = '登録拒否に失敗しました。';
$string['registrationreason'] = '登録理由';
$string['makeuserinstitutionstaff'] = '初回ログイン時、このメールアドレスのオーナにインスティテューションスタッフのパーミッションを自動的に割り当てます。';
$string['errorwhileunsuspending'] = '利用停止解除中にエラーが発生しました。';
$string['institutionsuspended'] = 'インスティテューションが利用停止されました。';
$string['institutionunsuspended'] = 'インスティテューションの利用停止が解除されました。';
$string['institutionlogoutusers'] = 'ログアウト %s 人';
$string['suspendedinstitution'] = '利用停止';
$string['suspendinstitution'] = 'インスティテューションを利用停止する';
$string['suspendinstitutiondescription'] = 'ここであなたはインスティテューションを利用停止できます。利用停止されたインスティテューションの人はインスティテューションが利用停止解除されるまでログインできません。';
$string['suspendedinstitutionmessage'] = 'このインスティテューションは利用停止されています。';
$string['unsuspendinstitution'] = 'インスティテューションの利用停止を解除する';
$string['unsuspendinstitutiondescription'] = 'ここであなたはインスティテューションの利用停止を解除できます。利用停止されたインスティテューションの人はインスティテューションが利用停止解除されるまでログインできません。<br><strong>注意:</strong> 有効期限をリセットまたは無効にしないまま利用停止を解除した場合、毎日、再度利用停止される可能性があります。';
$string['unsuspendinstitutiondescription_warning'] = '<strong>注意:</strong> 有効期限をリセットまたは無効にしないまま利用停止を解除した場合、毎日、再度利用停止される可能性があります。';
$string['unsuspendinstitutiondescription_instadmin'] = '利用停止されたインスティテューションの人はログインできません。インスティテューションの利用停止を解除するには管理者にご連絡ください。';
$string['bulkexport'] = 'アカウントをエクスポートする';
$string['bulkexportempty'] = 'エクスポートに適したものはありません。ユーザ名のリストを再度確認してください。';
$string['bulkexportinstitution'] = 'すべてのメンバをエクスポートするインスティテューション';
$string['bulkexporttitle1'] = 'アカウントをバルクエクスポートする';
$string['bulkexportdescription1'] = 'エクスポートフォーマットを選択した後、エクスポートするインスティテューションを選択<strong>または</strong>ユーザ名のリストを指定してください。';
$string['bulkexportusernames'] = 'エクスポートするユーザ名';
$string['bulkexportusernamesdescription'] = 'データとともにエクスポートするアカウントのリストです (1行あたり1ユーザ名)。';
$string['couldnotexportusers'] = '次のアカウントをエクスポートできませんでした: %s';
$string['exportingusername'] = 'エクスポート %s ...';
$string['ignoringbulkexportuser'] = 'ユーザ名「 %s 」の人が見つからなかったため無視します。';
$string['Search'] = '検索';
$string['Institution'] = 'インスティテューション';
$string['confirm'] = '承認';
$string['invitedby'] = '招待者';
$string['requestto'] = 'リクエスト先';
$string['useradded'] = '人が追加されました。';
$string['invitationsent'] = '招待が送信されました。';
$string['withselectedusers'] = '選択したアカウントに対して';
$string['withselectedusersedit'] = '選択したアカウントを編集する';
$string['withselectedusersreports'] = '選択したアカウントのレポートを取得する';
$string['getreports'] = 'レポートを取得する';
$string['selectuser'] = '人「 %s 」を選択する';
$string['bulkactions'] = 'バルク処理';
$string['editselectedusersdescription1'] = 'あなたが検索ページで選択したアカウントの利用停止、削除または認証方法を変更します。';
$string['editselectedportfoliosdescription'] = 'あなたが検索ページで選択したアカウントに対して選択したコレクションをロックまたはロック解除します。「ロック解除」を選択した場合、あなたはコレクションにレビュアを追加できます。「ロック」を選択した場合、レビュアは削除されます。';
$string['uneditableusers'] = 'あなたは編集できない %s アカウントを選択しました。アカウントはリストから取り除かれました。';
$string['exportusersascsv'] = 'アカウントをCSVフォーマットでエクスポートする';
$string['downloadusersascsv'] = 'CSVフォーマットのアカウント';
$string['downloaddataascsv'] = 'CSVフォーマットの %s 統計';
$string['Download'] = 'ダウンロード';
$string['suspendusers'] = '人を利用停止する';
$string['Suspend'] = '利用停止';
$string['bulksuspenduserssuccess'] = '%d 名の人を利用停止しました。';
$string['changeauthmethod'] = '認証方法を変更する';
$string['someusersnotinauthinstanceinstitution'] = 'あなたが選択した人の一部はこの認証方法に関連付けられたインスティテューションに属していません。';
$string['bulkchangeauthmethodsuccess'] = '%d アカウントの認証方法をリセットしました。';
$string['bulkchangeauthmethodresetpassword'] = 'あなたはパスワードを必要とする認証方法を選択しました。%d 名の人にはパスワードが割り当てられていないためパスワードがリセットされるまでログインできません。';
$string['bulkdeleteuserssuccess'] = '%d アカウントを削除しました。';
$string['bulkprobationpointssuccess'] = '%1$d アカウントに保護観察ポイント %2$d を設定しました。';
$string['selectedusers'] = '選択済みのアカウント';
$string['selectednusers'] = '%s 人が選択されました。';
$string['remoteuser'] = 'リモートユーザ名';
$string['quotapercent'] = 'クオータ使用量';
$string['userreports'] = '人レポート';
$string['userreportsdescription'] = 'あなたが検索ページで選択したアカウントに関する情報を表示またはダウンロードします。';
$string['unabletodeleteself1'] = 'あなたは自分自身を削除できません。';
$string['unabletodeletealladmins1'] = 'あなたはすべてのサイト管理者を削除できません。';
$string['unabletosuspendself'] = 'あなたは自分自身を利用停止できません。';
$string['unabletosuspendalladmins'] = 'あなたはすべてのサイト管理者を利用停止できません。';
$string['verifierload'] = 'レビュア負荷別のポートフォリオのパーセンテージ';
$string['verifierpercentage'] = 'レビュアに割り当てられたポートフォリオのパーセンテージ';
$string['countportfolios'] = '%s テンプレートポートフォリオ選択済み';
$string['allocated'] = '割り当て済み';
$string['unallocated'] = '未割り当て';
$string['currentverifiersovertime'] = '現在のレビュアの推移';
$string['currentverifiers'] = '現在のレビュア';
$string['manageportfoliosmethod'] = 'ポートフォリオを管理する';
$string['locking_collection_locked'] = 'コレクション 「 %s 」 は現在ロックされています。';
$string['locking_collection_unlocked'] = 'コレクション 「 %s 」 はロック解除されました。';
$string['locking_collection_verifier_add'] = 'レビュア「 %s 」 が追加されました。';
$string['locking_collection_verifier_remove'] = 'レビュア「 %s 」 が削除されました。';
$string['notificationssaved'] = '通知設定が保存されました。';
$string['onlyshowingfirst'] = '最初のみ表示する';
$string['resultsof'] = '検索結果';
$string['deprecated'] = '- 非推奨';
$string['installed'] = 'インストール済み';
$string['errors'] = 'エラー';
$string['install'] = 'インストール';
$string['reinstall'] = '再インストール';
$string['None'] = 'なし';
$string['Simple'] = 'シンプル';
$string['Advanced'] = '高度';
$string['sitesettingslegend'] = 'サイト設定';
$string['accesssettingslegend'] = 'アクセス設定';
$string['groupsettingslegend'] = 'グループ設定';
$string['searchsettingslegend'] = '検索設定';
$string['institutionsettingslegend'] = 'インスティテューション設定';
$string['accountsettingslegend'] = 'アカウント設定';
$string['securitysettingslegend'] = 'セキュリティ設定';
$string['sideblocksettingslegend'] = 'サイドブロック設定';
$string['loggingsettingslegend'] = 'ロギング設定';
$string['groupname'] = 'グループ名';
$string['groupshortname'] = '省略名';
$string['groupmembers'] = 'メンバ';
$string['groupadmins'] = '管理者';
$string['grouptype'] = 'グループタイプ';
$string['groupvisible'] = '可視性';
$string['groupmanage'] = '管理';
$string['groupmanagespecific'] = '「 %s 」を管理する';
$string['groupdelete'] = '削除';
$string['loggedinfilter'] = 'ログイン日時でフィルタする:';
$string['anyuser'] = 'すべての人';
$string['usershaveloggedin'] = 'ログインしたことのある人';
$string['usershaveneverloggedin'] = 'ログインしたことのない人';
$string['usershaveloggedinsince'] = '次の日時以降ログインしたことのある人';
$string['usershavenotloggedinsince'] = '次の日時以降ログインしたことのない人';
$string['duplicateemailfilter1'] = '重複メールアドレス';
$string['objectionable'] = '好ましくないコンテンツ';
$string['objectionablefilter'] = '好ましくないコンテンツの人';
$string['noemailfound'] = 'メールアドレスは見つかりませんでした。';
$string['lastlogin'] = '最終ログイン';
$string['masqueradingreasonrequired'] = 'マスカレーディングの理由を要求する';
$string['masqueradingnotified'] = '人にマスカレーディングを通知する';
$string['masquerade'] = '続ける';
$string['masqueradeas'] = '代理ログイン';
$string['masqueradeasperson'] = '%s %s として代理ログインする';
$string['masqueradereason'] = '理由';
$string['masqueradenotificationdone'] = 'このマスカレーディングセッションが人に通知されました。';
$string['masqueradetime'] = 'マスカレーディング開始日時';
$string['masquerader'] = 'マスカレーディング管理者';
$string['masqueradee'] = '人';
$string['nomasquerades'] = 'マスカレーディングセッションのログが有効にされて以降、別の誰かとして代理ログインした管理者はいません。';
$string['loginaslog'] = 'マスカレーディングセッション';
$string['masqueradingnotloggedwarning'] = '<b>注意</b>: マスカレーディングセッションのロギングは現在無効にされています。このテーブルのデータを閲覧するには管理者が「 <a href="%sadmin/site/options.php">サイト設定</a> 」の「ロギング設定」を有効にする必要があります。';
$string['masqueradenotificationsubject'] = '管理者があなたとしてログインしました。';
$string['masqueradenotificationnoreason'] = '管理者「 %s 」が %s のあなたのアカウントにログインしました。';
$string['masqueradenotificationreason'] = '管理者「 %s 」が %s のあなたのアカウントにログインしました。理由は次のとおりです: %s';
$string['nomasqueradeasself'] = 'あなた自身として代理ログインできません。';
$string['progressbar'] = 'プロファイル完了';
$string['progressbarsaved'] = 'プログレスバーが正常に保存されました。';
$string['progressbardisablednote2'] = '<b>注意</b>: 現在、プロファイル完了は無効にされています。人がプロファイル完了に関して進捗を追跡できるようにするにはあなたは「<a href="%sadmin/site/options.php">サイト設定</a>」の「サイドブロック設定」セクションで有効にする必要があります。';
$string['profilecompletiondesc'] = 'プロファイル完了が有効にされている場合、完了済みプロファイルに反映されるコンテンツを選択してください。';
$string['profilecompletenessdesc1'] = 'プロファイル完了では人がプロファイルをどの程度完了しているか確認できるサイドバーのビジュアルインディケータを使用できるようにします。あなたはプロファイル完了に反映させるアーティファクトを選択できます。他のすべてのアーティファクトを使用できますが完了カウントの要素とはなりません。';
$string['profilecompletenesspreview'] = 'あなたは「プロファイル完了プレビュー」サイドブロックでプロファイル完了がどのように表示されるかプレビューできます。';
$string['exporttoqueue'] = 'キューにエクスポートする';
$string['validating'] = 'データの確認中 ...';
$string['checkingupdates'] = '更新データの確認中 ...';
$string['committingchanges'] = '変更の保存中 ...';
$string['cli_pwreset_authupdated'] = '認証方法が「内部」に更新されました。';
$string['cli_pwreset_failure'] = 'エラー: 「 %s 」のパスワードを正常にリセットできませんでした。';
$string['cli_pwreset_forcepasswordchange'] = '次回ログイン時、パスワードの変更を強制します (あなたが「--password」オプションを使用する場合、デフォルトは「true」です。そうではない場合、「false」を使用してください)。';
$string['cli_pwreset_info'] = 'コマンドラインPHPスクリプトによりあなたは人のパスワードをリセットできます。これはパスワードのリセットが許可されている認証方法の人にのみ動作します (例:「内部」)。';
$string['cli_pwreset_makeinternal'] = '人の認証方法を「内部」に変更します (デフォルトは「false」です)。';
$string['cli_pwreset_nointernalauth'] = 'エラー: デフォルト「内部」認証方法は見つかりませんでした。';
$string['cli_pwreset_nosuchuser'] = 'エラー: ユーザ名「 %s 」の人はデータベース内に存在しません。';
$string['cli_pwreset_notsupported'] = 'エラー: 「 %s 」はパスワードリセットをサポートしない認証方法を使用しています。あなたが認証方法を「内部」認証に変更したい場合、「-i=true」オプションを使用してください。';
$string['cli_pwreset_password'] = '新しいパスワードです。このパラメータが提供されていない場合、スクリプトはあなたにパスワードの入力を促します。';
$string['cli_pwreset_prompt1'] = '新しいパスワードを入力してください。';
$string['cli_pwreset_prompt2'] = '新しいパスワードを再度入力してください。';
$string['cli_pwreset_success'] = '「 %s 」のパスワードが正常にリセットされました。';
$string['cli_pwreset_success_forcepasswordchange'] = '次回ログイン時、人はパスワードのリセットを強制されます。';
$string['cli_pwreset_typo'] = '申し訳ございません、パスワードが合致しません。';
$string['cli_updateemail_info'] = 'あなたはこのコマンドラインPHPスクリプトで人のメールアドレスを追加または更新できます。あなたは新しいメールアドレスの主アドレスへの設定もできます。';
$string['cli_updateemail_email'] = '新しいメールアドレス';
$string['cli_updateemail_oldemail'] = '置換対象メールアドレス';
$string['cli_updateemail_makeprimary'] = '新しいメールアドレスを主アドレスにする';
$string['cli_updateemail_added_email'] = 'メールアドレス「 %s 」が「 %s 」に追加されました。';
$string['cli_updateemail_update_email'] = 'メールアドレスが「 %s 」から「 %s 」に更新されました (ユーザ: %s)。';
$string['cli_updateemail_oldemail_not_found'] = '置換対象メールアドレスが見つかりませんでした。';
$string['cli_updateemail_email_primary'] = 'メールアドレス「 %s 」が主メールアドレスとして設定されました。';
$string['cli_updateemail_email_alredy_exists'] = 'メールアドレスがすでに存在します。あなたがメールアドレスを主アドレスに設定したい場合、以下のコマンドを実行してください:
sudo -u www-data php update_email.php -u=%s -e=%s -oe=%s -mp=true';
$string['cli_updateemail_done'] = '完了';
$string['cli_close_site_info'] = 'このコマンドラインPHPスクリプトによりあなたが非サイト管理者であってもサイトをクローズおよび再オープンできます (これは管理ホームページで「サイトをクローズする」ボタンをクリックした場合と同じです)。';
$string['cli_close_site_siteclosed'] = 'メンテナンスのためサイトがクローズされました。';
$string['cli_close_site_siteopen'] = 'サイトがオープンされました。';
$string['cli_backupdir_notwritable'] = '言語バックアップディレクトリ「 %s 」に書き込み権がありません。';
$string['cli_langpack'] = '言語コード一覧 例) 「ja,de,pt_BR,fr」';
$string['cli_langpack_backup'] = '任意: アップデートの前に言語ディレクトリをバックアップします。';
$string['cli_langpack_backup_done'] = '言語「 %s 」のバックアップを完了しました。';
$string['cli_langpack_backup_failed'] = '*** 警告 *** 「 %s 」のバックアップを作成できません。';
$string['cli_langpack_en'] = 'Mahara自体でストリングが定義されているため英語言語パックを更新する必要はありません。あなたは「local/lang/」で特別言語ストリングを設定できます。';
$string['cli_langpack_etag_set'] = '次の言語のETagを設定しました: %s';
$string['cli_langpack_extract_done'] = '新しい「 %s 」言語パックが所定の位置にコピーされました。';
$string['cli_langpack_extract_failed'] = '*** 警告 *** 「 %s 」からファイルを展開できません - 理由: %s';
$string['cli_langpack_ignore'] = '言語パック「 %s 」はすでに最新版のためアップデートをスキップします。';
$string['cli_langpack_info'] = 'あなたの言語パックをコマンドラインで更新するには次のことができます:

1) 言語をコードでリストアップして言語パックをインストールまたは更新します。例)ja = 日本語、de = ドイツ語、fr = フランス語

sudo -u www-data php admin/cli/sync_langpacks.php -l=ja,de,fr

これにより「dataroot」内の「langpacks_backup」ディレクトリに既存の言語 (すでに存在する場合) のバックアップが作成されます。

2) あなたがバックアップを作成したくない場合、「-b=false」フラグを追加してください。

例)
sudo -u www-data php admin/cli/sync_langpacks.php -l=ja,de,fr -b=false

3) バックアップを元に戻す必要がある場合、あなたは「-r=true」フラグを使用できます。

例)
sudo -u www-data php admin/cli/sync_langpacks.php -l=ja,de,fr -r=true

Maharaシステム内で設定されているため「en」言語のアップデートは無視されます。';
$string['cli_langpack_missing'] = '言語パックが指定されていません。';
$string['cli_langpack_revert'] = '最新バックアップバージョンの言語に戻します。';
$string['cli_langdir_notwritable'] = '言語ディレクトリ「 %s 」に書き込み権がありません。';
$string['cli_language_make_backup'] = 'バックアップを作成しますか? %s';
$string['cli_language_status'] = 'すでに言語「 %s 」はインストールされています: %s';
$string['cli_langpack_url'] = '言語パックURL「 %s 」';
$string['cli_langpack_url_failed'] = '*** 警告 *** 「 %s 」の言語パックが存在しないかダウンロードできません。リターンコード: %s';
$string['cli_langpack_upload'] = '一時ディレクトリに言語パック「 %s 」を保存しています。';
$string['cli_restore_done'] = '「 %s 」のバックアップのリストアを完了しました。';
$string['cli_restore_warning'] = '*** 警告 *** 「 %s 」のバックアップをリストアできません。';
$string['cli_tmpdir_notwritable'] = '一時アップロードディレクトリ「 %s 」に書き込み権がありません。';
$string['cli_lang_branch'] = 'シリーズ「 %s 」の言語パックを取得するためのMaharaシリーズバージョン';
$string['cli_fast_index'] = 'Elasticsearchファーストインデックサは次のcron実行を待たずにサイトのインデックス化をすぐに実行できます。代わりに最初の終了直後に次の実行を開始します。';
$string['cli_unabletoupdatecron'] = '検索cronデータベースレコードを更新できません。';
$string['cli_problemindexing'] = 'インデックス化中に問題が発生しました。';
$string['cli_done'] = 'インデックス化を完了しました。';
$string['cli_param_dryrun'] = 'ドライランで何が起きるか表示します。デフォルトで「true」が設定されています。実際にデータベースを更新するには「-d=false」を設定してください。';
$string['cli_param_onlydryrun'] = '-- ドライランのみ - 何も変更されません --';
$string['cli_deleteinactiveusers_beforedate'] = '最終ログイン日がこの日付より前のアカウントを削除します。日付には次のような日時ストリングを使用できます: 「2018-02-25」または「-6 months」';
$string['cli_deleteinactiveusers_limit'] = 'それぞれの削除で処理するアカウント数を制限します。';
$string['cli_deleteinactiveusers_cleanusers'] = '同時に「usr」テーブルからアカウントの削除を試みます。';
$string['cli_deleteinactiveusers_info1'] = 'あなたはこのコマンドラインPHPスクリプトで特定の条件 (特定の日付以降にログインしていない、特定のグループに属している等) に基づき古いアカウントを削除できます。アカウントが共同作業に参加していない場合のみあなたは「cleanusers」フラグでデータベースからアカウントを完全に削除できます。';
$string['cli_deleteinactiveusers_neverloggedin'] = '管理者により設定されて一度もログインしていなアカウントを削除します。';
$string['cli_param_baddate'] = '提供された日付「 %s 」は有効ではありません。';
$string['cli_deleteinactiveusers_usercount'] = '削除対象アカウントは「 %s 」名です。';
$string['cli_deleteinactiveusers_userunabletoclean'] = 'アカウント「 %s 」(ID %s) を完全に削除できません。';
$string['cli_deleteinactiveusers_userunabletodelete'] = 'アカウント「 %s 」(ID %s) を削除できません。';
$string['cli_deleteinactiveusers_nouserstodelete'] = '削除するアカウントはありません。';
$string['cli_deleteinactiveusers_problem'] = 'インスティテューションパラメータが多すぎます。「--institution」または「--incl_inst」または「--excl_inst」でインスティテューションをフィルタしてください。';
$string['cli_deleteinactiveusers_onlydryrun1'] = 'ここでは以下の設定によるドライランのみ実行します。
インスティテューション: %s
グループ: %s
次の日付以前: %s
「usr」テーブルから削除するアカウント数: %s
未ログイン数: %s';
$string['cli_deleteinactiveusers_onlydryrun1_inst_params'] = '含まれるインスティテューション: %s
除外されるインスティテューション: %s
インスティテューション外のアカウントを含めますか? %s';
$string['cli_deleteinactivegroups_info'] = 'このコマンドラインPHPスクリプトではあなたが古いグループを削除できます。これは現在メンバがいないグループにのみ動作します。「onlyadmins」フラグが設定された場合、オーナ/管理者が1名のみのグループを対象に含めます。';
$string['cli_deleteinactivegroups_beforedate'] = 'この日付より最終修正日が前のグループを削除します。日付には次のような日時ストリングを使用できます: 「2018-02-25」または「-6 months」';
$string['cli_deleteinactivegroups_limit'] = 'それぞれの削除で処理するグループ数を制限します。';
$string['cli_deleteinactivegroups_cleangroups'] = '同時に「group」テーブルからグループの削除を試みます。';
$string['cli_deleteinactivegroups_onlyadmins'] = 'メンバがオーナ/管理者のみのグループも含みます。';
$string['cli_deleteinactivegroups_onlydryrun'] = 'ここでは以下の設定によるドライランのみ実行します。
インスティテューション: %s
次の日付以前: %s
「group」テーブルから削除するグループ数: %s
オーナ/管理者のみのグループも削除する: %s
%s';
$string['cli_deleteinactivegroups_danger'] = '*** 選択された設定によりすべてのグループを削除します ***
あなたがこれを希望する場合、未来の日付に「--beforedate」を設定してください。';
$string['cli_deleteinactivegroups_groupcount'] = '削除対象グループ数: %s';
$string['cli_deleteinactivegroups_nogroupstodelete'] = '削除するグループはありません。';
$string['cli_deleteinactivegroups_emptygroups'] = 'メンバなしのグループのみ削除します。';
$string['cli_deleteinactivegroups_groupunabletoclean'] = 'グループ「 %s 」(ID %s) を完全に削除できません。';
$string['withselectedcontentexport'] = 'アイテムを再度エクスポートキューに追加する';
$string['withselectedcontentdelete'] = '選択したアイテムをエクスポートキューから削除する';
$string['withselectedcontentrelease'] = '選択したアイテムをリリースする';
$string['withselectedcontentreleaseandreturn'] = '選択したアイテムをリリースしてアカウントに戻る';
$string['allothers'] = 'その他すべて';
$string['cli_portfolio_export_info'] = 'あなたはコマンドラインPHPスクリプトによりアカウント保持者のポートフォリオをHTMLまたはLeap2Aフォーマットでエクスポートできます。';
$string['cli_portfolio_export_filenotfound'] = 'ファイルが見つかりませんでした。';
$string['cli_portfolio_export_invalidformat'] = '無効なエクスポートフォーマットです。';
$string['cli_portfolio_export_invalidfilter'] = '無効なフィルタキーです。';
$string['cli_portfolio_export_filepath'] = 'ユーザ名一覧を含むCSVファイルのパスです。例) /tmp/accounts_bulkexport.csv';
$string['cli_portfolio_export_format'] = 'エクスポートフォーマットタイプです。例) 「html」(HTMLフォーマット)、「leap」(Leap2Aフォーマット)、「pdf」(PDFフォーマット)';
$string['cli_portfolio_export_offset'] = '--filepathが設定されていない場合、データベースから取得する際に使用される補正値です。';
$string['cli_portfolio_export_limit'] = '--filepathが設定されていない場合、データベースから取得する際の結果の制限です。';
$string['cli_portfolio_export_filterkey'] = '有効なフィルタカラム:firstname, lastname, email, username';
$string['cli_portfolio_export_filtervalue'] = 'フィルタカラム値の開始文字です。例) --filepathが設定されていない場合、「Test」および「Tesla」を探すには「Tes」を指定します。';
$string['cli_portfolio_export_infolimitfilter'] = '最大 %s アカウントのポートフォリオをエクスポートする (カラム「%s」- 開始文字「%s」)';
$string['cli_portfolio_export_infofilter'] = 'すべてのアカウントのポートフォリオをエクスポートする (カラム「%s」- 開始文字「%s」)';
$string['cli_portfolio_export_infolimit'] = '最大 %s アカウントのポートフォリオをエクスポートする';
$string['cli_portfolio_export_infoout'] = 'すべての有効なアカウントのポートフォリオをエクスポートする';
$string['cli_portfolio_export_users'] = 'ドライラン: %s アカウントおよび %s ポートフォリオが「 %s 」フォーマットでエクスポートされます。';
$string['cli_portfolio_export_fromcsv'] = 'CSVファイルからアカウントを選択する';
$string['cli_portfolio_export_nousers'] = 'アカウントが見つかりませんでした。';
$string['cli_portfolio_export_username'] = 'ユーザ名 %s のエクスポートを開始しました。';
$string['cli_portfolio_export_username_skipped'] = '... スキップ: %s のエクスポート対象ポートフォリオはありません。';
$string['cli_portfolio_export_userfile_failed'] = 'エクスポートに失敗しました。理由: %s';
$string['cli_portfolio_export_zip'] = '同梱ZIPファイルを作成しています。お待ちください ...';
$string['cli_portfolio_export_zipout'] = '%s アカウントを %s にエクスポートしました。';
$string['cli_param_dryrun_export'] = '何が起きるか確認するためのドライランです。デフォルトでは「true」が設定されています。実際にエクスポートを実行するには「-d=false」を設定してください。';
$string['cli_time_elapsed'] = '所要時間: %s';
$string['cli_outcomes_delete_description'] = '既存のアウトカムにリンクされていない場合、アウトカム関連テーブルからデータを削除します。';
$string['cli_outcomes_typefile_description'] = 'アウトカムタイプテーブルデータを含む読み込み可能なCSVファイルへのパスです。例) /tmp/outcome_types_tables.csv';
$string['cli_outcomes_subjectfile_description'] = 'アウトカム件名テーブルデータを含む読み込み可能なCSVファイルへのパスです。例) /tmp/outcomes_subjects_tables.csv';
$string['cli_outcomes_institution_description'] = '「delete」と併用することで指定したインスティテューションからのみアイテムを削除します。例) mahara';
$string['cli_outcomes_institutionnotfound'] = 'インスティテューション「 %s 」が見つかりませんでした。';
$string['cli_outcomes_institution_enable'] = 'インスティテューションの「アウトカムポートフォリオ」設定を有効にします。';
$string['cli_outcomes_info'] = 'アウトカム関連テーブル「outcome_category」「outcome_type」「outcome_subject_category」および「 outcome_subject」に値を設定します。指定されたインスティテューションでは「アウトカムポートフォリオ」設定を有効にする必要があります。';
$string['cli_outcomes_bad_institution'] = 'インスティテューション %s の「アウトカムポートフォリオ」設定が有効である必要があります。この設定を自動的に有効にするにはコマンドを「--enable」付きで実行してください。';
$string['cli_outcomes_type_headers_error'] = 'あなたのファイルのヘッダを確認してください。ヘッダは次のようにする必要があります: Outcome category | Institution | Outcome type | Outcome type abbreviation | CSS class';
$string['cli_outcomes_subject_headers_error'] = 'あなたのファイルのヘッダを確認してください。ヘッダは次のようにする必要があります: Outcome subject category | Institution | Subject | Subject abbreviation';
$string['cli_outcomes_subject_added'] = '件名データがデータベースに追加されました。';
$string['cli_outcomes_no_subject_added'] = '件名データはデータベースに追加されませんでした。テーブルにすでに入力されている可能性があります。';
$string['cli_outcomes_type_added'] = 'アウトカムタイプデータがデータベースに追加されました。';
$string['cli_outcomes_no_type_added'] = 'アウトカムタイプデータはデータベースに追加されませんでした。テーブルにすでに入力されている可能性があります。';
$string['cli_outcomes_deleteing'] = '未使用アウトカム関連データを削除する ...';
$string['cli_outcomes_deleted'] = '%s 行をテーブル「 %s 」から削除しました。';
$string['cli_outcomes_nothing_deleted'] = '削除するものはありません。';
$string['cli_audit_groupshortname'] = 'グループ省略名';
$string['cli_audit_usernames'] = '一覧記載されたユーザ名またはユーザ名を含むCSVファイルです。例) -u=person1 -u=person2 or -u/tmp/usernames.csv';
$string['cli_audit_startdate'] = 'この日付以降に作成されたポートフォリオ';
$string['cli_audit_enddate'] = 'この日付以前に作成されたポートフォリオ';
$string['cli_audit_info1'] = '開始および終了日間に作成されたコレクションを特定のユーザ名の人とグループで共有します。';
$string['cli_audit_userfield'] = '任意: ユーザ名用カラム';
$string['cli_audit_randomfield'] = '任意: ランダム識別子用カラム';
$string['cli_audit_randomname'] = '任意: 1人のみ処理する場合、ランダム名を割当てできます。';
$string['cli_audit_unshare'] = '任意: 代わりにグループからコレクションの共有を解除します。';
$string['cli_audit_collection_removed'] = '- removed';
$string['cli_audit_collection_to_group'] = 'コレクション「 %s 」(作成: %s) をグループで共有する:';
$string['cli_bad'] = '失敗 %s: %s';
$string['cli_success'] = '成功: %s';
$string['cli_process_usernames'] = '処理対象ユーザ名:';
$string['cli_inactive_users'] = '時間間隔の間にサイトにログインしたアカウント保持者を検索します。
アカウント保持者がコンテンツを作成していない場合等、管理者が簡単にアカウントを削除できるかどうか判断するのに役立つ時間間隔の間のサイト利用状況に関する基本的な情報が表示されます。';
$string['cli_inactive_interval'] = '今日より前の非アクティブ時間間隔です。データベースインターバル期間を指定してください。';
$string['cli_inactive_users_found'] = '%s 名のユーザがログインしました (過去 %s 回内)。';
$string['cli_no_inactive_users'] = 'ログインしたユーザはいません (過去 %s 回内)。';
$string['cli_inactive_done'] = 'レビューー完了';
$string['cli_inactive_id'] = 'Mahara ID';
$string['cli_inactive_username'] = 'ユーザ名';
$string['cli_inactive_lastlogin'] = '最終ログイン';
$string['cli_inactive_only_dashboard_profile'] = 'デフォルトページのみ';
$string['cli_inactive_new_pages'] = '時間間隔の新しいポートフォリオ';
$string['cli_inactive_new_artefacts'] = '時間間隔の新しいアーティファクト';
$string['cli_inactive_in_groups'] = 'グループ参加';
$string['cli_inactive_quota_used'] = 'クオータ使用量';
$string['cli_inactive_quota_percent'] = 'クオータ使用量パーセンテージ';
$string['cli_auth_method_info'] = 'あなたはこのコマンドラインPHPスクリプトでアカウント認証方法を一括更新できます。';
$string['cli_auth_method_from'] = '切り替え元アカウント認証方法ID';
$string['cli_auth_method_to'] = '切り替え先アカウント認証方法ID';
$string['cli_auth_method_default_remote'] = '欠落しているリモート名をアカウントユーザ名に設定する';
$string['cli_auth_method_list'] = '利用可能な認証方法を一覧表示する';
$string['cli_auth_method_skip'] = '更新時に問題のあるアカウントをスキップして最後にプリントアウトする';
$string['cli_auth_method_auth_ids_required'] = 'あなたは認証方法に「from」IDおよび「to」IDの両方を指定する必要があります。';
$string['cli_auth_method_only_one_auth'] = '認証方法は1つのみです。ウェブサイトから新しい認証方法を追加してください。';
$string['cli_auth_method_auth_ids_matching'] = '認証方法が重複しています。あなたは「from」および「to」に異なるIDを指定する必要があります。';
$string['cli_auth_method_from_invalid'] = '「from 」認証IDが無効です。';
$string['cli_auth_method_to_invalid'] = '「to」認証IDが無効です。';
$string['cli_auth_method_done'] = '新しい認証方法へのアカウント移動を完了しました!';
$string['cli_auth_method_unable_to_move_account_skipped'] = '「 %s 」アカウントをID「 %s 」の認証方法に移動できません。アカウント「 %s 」はすでにリモートユーザ名「 %s 」を使用しています。';
$string['cli_auth_method_unable_to_move_account_skipped_missing'] = 'アカウントにリモートユーザ名が設定されていないため、「 %s 」アカウントをID「 %s 」の認証方法に移動できません。';
$string['cli_auth_method_unable_to_continue'] = '続行できません。ドライランで問題を発見および修正するか、「スキップ 」オプションで実行してください。';
$string['cli_auth_method_skipped_list'] = '問題のある行を手動で削除する必要があります。';
$string['cli_auth_method_to_move'] = '「 %s 」アカウントをID「 %s 」の認証方法に移動しています。';
$string['cli_auth_method_dry_run_only'] = 'ドライランのみ - %s アカウントが認証方法を変更しました。%s アカウントを手動更新する必要があります。';
$string['cli_auth_method_change_done'] = '%s アカウントが認証方法を変更しました。%s アカウントを手動更新する必要があります。';
$string['cli_auth_method_ignore_admins'] = '認証方法変更時にサイト管理者を無視します。';
$string['behatvariables'] = 'Behatステップ';
$string['nobehatfeaturefiles'] = 'Behatフィーチャファイルは見つかりませんでした。';
$string['behatmatchingrows'] = '%s -';
$string['behatnocoresteps'] = '<p>behat.ymlファイルからBehatステップを読めません。読めるようにするには<a href="https://git.mahara.org/catalyst/mahara/-/wikis/Testing/Behat-testing/Setting-up-Behat">あなたのBehatデータルートディレクトリのオーナを「www-data」にしてください</a>。</p>';
$string['behatstepnotused'] = '現在、このBehatステップは使用されていません。';
$string['author'] = '作成者';
$string['content'] = 'コンテンツ';
$string['creationdate'] = '作成日時';
$string['version'] = 'バージョン';
$string['viewversion'] = 'バージョン %s を表示する';
$string['editversion'] = 'バージョン %s を編集する';
$string['versionalreadyexist'] = 'バージョン %s の「 %s 」はすでに存在します。';
$string['siteprivacy'] = 'サイトプライバシ保護方針';
$string['siteprivacyconsentdate'] = 'サイトプライバシ保護方針同意がレビューされました。';
$string['sitetermsandconditions'] = 'サイト利用条件';
$string['sitetermsconsentdate'] = 'サイト利用条件同意がレビューされました。';
$string['addoneversionlink'] = '必要であれば<a href="%s">追加してください</a>。';
$string['privacyversionfor'] = 'プライバシ保護方針のバージョン「 %s 」は次のとおりです:';
$string['termsversionfor'] = '利用条件のバージョン「 %s 」は次のとおりです:';
$string['institutionprivacystatement'] = 'インスティテューションプライバシ保護方針';
$string['institutiontermsandconditions'] = 'インスティテューション利用条件';
$string['institutionprivacyconsentdate'] = 'インスティテューションプライバシ保護方針同意がレビューされました。';
$string['institutiontermsconsentdate'] = 'インスティテューション利用条件同意がレビューされました。';
$string['lastupdated'] = '最終更新日時';
$string['newprivacy'] = 'あなたのアカウントに入る前に以下に表示されている情報をお読みください。';
$string['privacyagreement'] = '私は % に同意します。';
$string['privacyagreementdescription'] = 'あなたは「Yes」の選択により上のプライバシ保護方針の条項に同意することになります。';
$string['agreementsaved'] = '同意が保存されました。';
$string['refuseprivacy'] = 'プライバシ保護方針または利用条件を拒否する';
$string['privacyrefusaldetails'] = 'プライバシ保護方針または利用条件に同意しない場合、あなたのアカウントは利用停止されます。';
$string['legalconsentrefusaldetails'] = '法的表示に同意しない場合、あなたのアカウントにアクセスできません。';
$string['privacyrefusal'] = 'プライバシ保護方針を拒否しました。';
$string['registerrefusal'] = 'あなたが %s に同意しない場合、アカウントは作成されません。';
$string['enterreason'] = '拒否理由をここに入力してください ...';
$string['privacyrefusalnoreason'] = 'プライバシ保護方針または利用規約に同意しない場合、あなたは理由を提示する必要があります。';
$string['privacylowcase'] = 'プライバシ保護方針';
$string['termsandconditionslowcase'] = '利用条件';
$string['hasrefused'] = 'は %s を拒否しました。';
$string['suspendaccount'] = 'アカウントを利用停止する';
$string['privacyandtotheterms'] = 'プライバシ保護方針および利用条件';
$string['privacyandtheterms'] = 'プライバシ保護方針および利用条件';
$string['consentdate'] = '同意/拒否日付';
$string['legalconsent'] = '法的同意';
$string['userprivacyagreements'] = '以下、人が同意したすべてのプライバシ保護方針が表示されています。';
$string['usertermsagreements'] = '以下、人が同意したすべての利用条件が表示されています。';
$string['privacytermsdesc'] = 'あなたのサイトのプライバシ保護方針および利用条件を編集します。';
$string['approveuserdeletionfor'] = '%s %s <%s> のアカウント削除を承認する';
$string['approveuserdeletionmessage'] = '続けた場合、あなたはアカウント「 %s 」を削除することになります。すべての個人コンテンツは完全に削除されます。本当にこのリクエストを承認してもよろしいですか?';
$string['deletionapprovedsuccessfully'] = 'アカウント削除が正常に承認されました。';
$string['deletionapprovedfailed'] = 'アカウント削除に失敗しました。';
$string['deletiondeniedreason'] = '拒否理由';
$string['deletiondeniedreasondesc'] = '削除リクエストが拒否された理由に関する情報です。';
$string['deletionreason'] = '削除理由';
$string['denyuserdeletionfor'] = '「 %s %s 」のアカウント削除を拒否する';
$string['denyuserdeletionmessage'] = '続けた場合、あなたはアカウントの削除を拒否することになります。理由を提供してください。';
$string['nopendingdeletions'] = 'このインスティテューションにアカウント削除リクエストの保留はありません。';
$string['pendingdeletion'] = '削除保留';
$string['pendingdeletions'] = '削除保留';
$string['pendingdeletionspagedescription'] = '<p>あなたはこのページでサイトからのアカウント削除をリクエストした人を確認および削除承認できます。<p>
<p>アカウント削除承認によりアカウントからすべての個人コンテンツが完全に削除されます。アカウント削除後、リクエストした人にメールで理由が通知されます。</p>';
$string['userdeletiondeniedsuccessful'] = 'リクエストが正常に拒否されました。';
$string['userdeletiondeniedunsuccessful'] = 'アカウント削除の拒否に失敗しました。';
$string['consented'] = '同意済み';
$string['groupid'] = 'グループID';
$string['blocktypeupdatedsuccess'] = 'ブロックタイプ並べ替え順を更新しました。';
$string['groupdefaultsettings'] = 'デフォルトグループ設定';
$string['introtext'] = 'あなたは新しいグループが作成される場合に使用されるデフォルト設定を変更できます。一部の設定は特定のロールの人のみ利用できます。特定のロールの人が利用できないオプションは新しいグループ作成時に無視されて代わりにデフォルト値が使用されます。';
$string['savedgroupconfigsuccessfully'] = 'デフォルトグループ設定を保存しました。';
$string['defaultreset'] = 'デフォルトにリセットする';
$string['defaultresetlabel'] = 'リセット';
$string['componentmap'] = 'コンポーネントライブラリ';
$string['development'] = '開発';
$string['exportthirdpartycsv'] = 'プラグイン情報をCSVフォーマットでエクスポートする';
$string['Path'] = 'パス';
$string['styleguide'] = 'スタイルガイド';
$string['thirdpartypluginstitle'] = 'サードパーティプラグイン';
$string['thirdpartyplugins4'] = 'これはNPM、Composerおよびmanual dependenciesで管理されているサードパーティプラグインのリストです。';
$string['url'] = 'url';
$string['pluginartefact'] = 'プラグインタイプ: アーティファクト';
$string['pluginauth'] = 'プラグインタイプ: 認証';
$string['pluginblocktype'] = 'プラグインタイプ: ブロックタイプ';
$string['pluginexport'] = 'プラグインタイプ: エクスポート';
$string['plugingrouptype'] = 'プラグインタイプ: グループタイプ';
$string['pluginimport'] = 'プラグインタイプ: インポート';
$string['plugininteraction'] = 'プラグインタイプ: インタラクション';
$string['pluginmodule'] = 'プラグインタイプ: モジュール';
$string['pluginnotification'] = 'プラグインタイプ: 通知';
$string['pluginsearch'] = 'プラグインタイプ: 検索';
$string['upgradeproblemwithremoteusername'] = 'リモートユーザ名「 %s 」は正しく更新できなかったため「 %s 」として保存されました。問題を解決するため、あなたのデータベースを確認してください。';
$string['add_block_to_view_block_desc'] = 'コピーする既存のブロックのIDです。';
$string['add_block_to_view_origin_view'] = 'あなたがコピーしたいブロックが存在するページのページIDです。';
$string['add_block_to_view_dest_view'] = 'あなたがブロックをコピーしたいページのコピー先ページIDです。あなたが多くのページにブロックをコピーしたい場合、このパラメータを使用しないでください。';
$string['add_block_to_view_block_added_another'] = '指定された種類のブロックタイプがすでに存在している場合でも別のブロックタイプを追加します。';
$string['add_block_to_view_add_anyway_notice'] = '[注意] これはブロックが既に存在していても関係なく追加されます。';
$string['add_block_to_view_add_to_top'] = 'これはコピー先ページのトップにブロックを追加します。';
$string['add_block_to_view_add_to_top_notice'] = '[注意] これはコピー先ページのトップにブロックを追加します。';
$string['add_block_to_view_replace'] = '合致するブロックのインスタンスが存在する場合、それをページから置換します。';
$string['add_block_to_view_re_add_notice'] = '[注意] 合致するブロックが存在する場合、それを削除して再度ページに追加します。';
$string['add_block_to_view_announce_blocktype_viewtype'] = '[注意] ブロックタイプ「 %s 」のページタイプ「 %s 」への追加を検討しています!';
$string['add_block_to_view_dryrun_notice'] = '- - - - - これはページにブロックを追加するためのドライランです。- - - - -';
$string['add_block_to_view_block_to_add'] = 'ページID「 %s 」のブロックをID「 %s 」のアカウントに追加します。';
$string['add_block_to_view_block_replaced'] = 'ページID「 %s 」のブロックをID「 %s 」のアカウントに置き換えました。';
$string['add_block_to_view_block_added'] = 'ページID「 %s 」のブロックがID「 %s 」のアカウントに追加されました。';
$string['add_block_to_view_skip_exists_not_add'] = 'ページ ID 「 %s 」をスキップします。「 %s 」ブロックがID「 %s 」のアカウントに既に存在しているため、私たちはそれを置換または追加しません。';
$string['add_block_to_view_dry'] = 'ドライラン:';
$string['add_block_to_view_unable_to_replace'] = '一致するブロックが複数あるため、「 %s 」が所有するページ 「 %s 」のブロックを置換できません。-f を使用して余分なブロックを追加するか、ダブルアップを手動で削除してください。';
$string['add_block_to_view_skip'] = 'ページID「 %s 」をスキップします。次のIDのアカウントに対するブロックが存在します: %s';
$string['add_block_to_view_single'] = '[注意] このブロックはID「 %s 」のページ (アカウントID「 %s 」のユーザが所有) にのみコピーされます';
$string['add_block_to_view_mismatch_view_type_warning'] = '宛先ページ「 %s 」がオリジンページタイプに合致しません。';
$string['add_block_to_view_personal_only'] = 'あなたはパーソナルページのみコピーできます。';
$string['add_block_from_block_not_on_view'] = 'ID「 %s 」のブロックはID「 %s 」のページにありません。';
$string['add_block_to_view_old_layout'] = 'ID「 %s 」のオリジンページを新しいGridstackレイアウトに更新する必要があります。変換するにはページを編集してください。';
$string['add_block_to_view_info'] = 'ブロックおよびその設定を他の人のページまたは特定の人のページにコピーします。
ブロックは同じページタイプにコピーされます。例えばオリジナルブロックがダッシュボードページにある場合、ブロックはダッシュボードページにのみコピーされます。
コピー先のページにすでに同じタイプのブロックがある場合、ブロックはコピーされません。
例えば「私に共有されているポートフォリオ」ブロックは他の 
ダッシュボードページにまだない場合にコピーされます。';
$string['reset_view_to_template_dry_short'] = 'ドライラン:';
$string['reset_view_to_template_complete'] = 'ページID「 %s 」(%s 所有) がテンプレートID「 %s 」と一致しました。';
$string['reset_page_to_template_info'] = '指定されたテンプレートIDのコンテンツと一致するようページをリセットします。';
$string['reset_page_to_template_view'] = 'ブロックを含むページのページIDがコピーされます。';
$string['reset_page_to_template_target_view'] = '(任意) ページのページIDです。1つのページだけをリセットする場合に使用します。そうではない場合、テンプレートと同じタイプのすべてのページがリセットされます。';
$string['reset_view_to_template_dryrun_notice'] = '- - - - - これはテンプレートに合わせてページをリセットするためのDRY RUNです。- - - - -';
$string['reset_view_to_template_single'] = '[注意] テンプレートはID「 %s 」のアカウントが所有するID「 %s 」のページのコンテンツだけをリセットします。';
$string['reset_view_to_template_not_single'] = '[エラー] あなたはすべてのポートフォリオページのリセットを許可されていません。リセット先のページIDを指定してください。';
$string['reset_view_to_template_batch'] = 'リセットするページの上限です。最初に小さなバッチでのリセットをお勧めします。';
$string['reset_view_to_template_batch_complete'] = 'バッチコピー完了!';
$string['reset_view_to_template_batch_info'] = '[注意] 「 %s 」のバッチのみ実行しています。';
$string['reset_view_to_template_info'] = '[ログ] 処理中です: タイプ「 %s 」に一致するページのコンテンツをテンプレート (ID %s - 所有: %s 「 %s 」) に置き換えます。';
$string['adduser.maildisabled_help'] = '<h1>メールを無効にする</h1><p>新しいアカウント保持者に対する主メールアドレスへの通知の送信を停止します。</p>';
$string['uploadcsv.maildisabled_help'] = '<h1>メールを無効にする</h1><p>新しいアカウント保持者に対する主メールアドレスへの通知の送信を停止します。</p>';
$string['adduser.theme_help'] = '<h1>テーマ</h1>
<p>あなたがサイトを閲覧する際のテーマを選択してください。この設定は他の人があなたのポートフォリオを閲覧する際のテーマには影響しません。ポートフォリオは常にインスティテューションテーマまたはページごとに選択可能な場合はあなたがページで指定した特定のテーマに基づいて表示されます。</p>';
$string['uploadcsv.theme_help'] = '<h1>テーマ</h1>
<p>あなたがサイトを閲覧する際のテーマを選択してください。この設定は他の人があなたのポートフォリオを閲覧する際のテーマには影響しません。ポートフォリオは常にインスティテューションテーマまたはページごとに選択可能な場合はあなたがページで指定した特定のテーマに基づいて表示されます。</p>';
$string['adduser.multipleblogs_help'] = '<h1>複数日誌</h1><p>デフォルトではあなたはサイトに1つの日誌を持てます。複数日誌を有効にした場合、タグの使用だけではなく、あなたのコンテンツをより簡単に整理できるようになります。</p>';
$string['uploadcsv.multipleblogs_help'] = '<h1>複数日誌</h1><p>デフォルトではあなたはサイトに1つの日誌を持てます。複数日誌を有効にした場合、タグの使用だけではなく、あなたのコンテンツをより簡単に整理できるようになります。</p>';
$string['adduser.resizeonuploaduserdefault_help'] = '<h1>アップロード時に大きなイメージをリサイズする</h1><p>この設定を有効にした場合、最大サイズを超えるイメージはアップロード時にリサイズされます。あなたは個別のアップロードでこれを無効にできます。</p>';
$string['uploadcsv.resizeonuploaduserdefault_help'] = '<h1>アップロード時に大きなイメージをリサイズする</h1><p>この設定を有効にした場合、最大サイズを超えるイメージはアップロード時にリサイズされます。あなたは個別のアップロードでこれを無効にできます。</p>';
$string['siteoptions.country_help'] = '<h1>国</h1><p>選択された国はサイト全体での国選択におけるデフォルトとなります。</p><hr><h2>詳細</h2><p>国名は国際標準化機構 (ISO) が発行した<a href="https://www.iso.org/iso-3166-country-codes.html">ISO 3166</a>で定義されているとおりに表示されます。</p><p>あなたのサイト内の国名を変更するにはそれぞれの翻訳の「mahara.php」言語ファイルを編集するか、<a href="https://git.mahara.org/catalyst/mahara/-/wikis/Development/Language-strings#custom-lang-strings-in-local">ローカルディレクトリ</a>にストリングを作成してください。</p>';
$string['edituser_site.email_help'] = '<h1>主メールアドレス</h1>
<p>この人の新しい主メールアドレスを入力してください。これはユニークであり、まだ使用されていないものである必要があります。</p><p>この新しいアドレスは人が変更するまですべての通信に使用されます。</p><p>以前の主メールアドレスは副アドレスとして保持されます。</p>';
