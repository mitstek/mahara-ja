<?php
/**
 *
 * @package    mahara
 * @subpackage lang (Japanese)
 * @translator Mitsuhiro Yoshida (http://mitstek.com/)
 * @started    2008-01-19 11:25:00 UTC
 * @updated    2015-10-22 18:47:34 UTC
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL version 3 or later
 * @copyright  For copyright information on Mahara, please see the README file distributed with this software.
 *
 */

defined('INTERNAL') || die();

$string['phpversion'] = 'MaharaはPHP %s 以下では動作しません。あなたのPHPバージョンをアップグレードするか、Maharaを別のホストに移動してください。';
$string['jsonextensionnotloaded'] = 'あなたのサーバ設定にはJSON拡張モジュールが含まれていません。ブラウザへのデータ送受信のため、Maharaではこのモジュールを必要とします。このモジュールがphp.iniに設定されているかどうか確認してください。インストールされていない場合、インストールしてください。';
$string['pgsqldbextensionnotloaded'] = 'あなたのサーバ設定にはpgsql拡張モジュールが含まれていません。リレーショナルデータベースにデータを保存するため、Maharaではこのモジュールを必要とします。このモジュールがphp.iniに設定されているかどうか確認してください。インストールされていない場合、インストールしてください。';
$string['mysqldbextensionnotloaded'] = 'あなたのサーバ設定にはmysqliまたはmysql拡張モジュールが含まれていません。リレーショナルデータベースにデータを保存するため、Maharaではこのモジュールを必要とします。このモジュールがphp.iniに設定されているかどうか確認してください。インストールされていない場合、インストールしてください。';
$string['unknowndbtype'] = 'あなたのサーバ設定は不明なデータベースタイプを参照しています。有効な値は「postgres」および「mysql」です。config.php内のデータベースタイプ設定を変更してください。';
$string['domextensionnotloaded'] = 'あなたのサーバ設定にはdom拡張モジュールが含まれていません。様々なソースのXMLデータを構文解析するため、Maharaではこのモジュールを必要とします。';
$string['xmlextensionnotloaded'] = 'あなたのサーバ設定には%s 拡張モジュールが含まれていません。様々なソースのXMLデータを構文解析するため、Maharaではこのモジュールを必要とします。このモジュールがphp.iniに設定されているかどうか確認してください。インストールされていない場合、インストールしてください。';
$string['gdextensionnotloaded'] = 'あなたのサーバ設定にはgd拡張モジュールが含まれていません。アップロードされたイメージのリサイズおよび他の処理を実行するため、Maharaではこのモジュールを必要とします。このモジュールがphp.iniに設定されているかどうか確認してください。インストールされていない場合、インストールしてください。';
$string['gdfreetypenotloaded'] = 'あなたのサーバ設定のgd拡張モジュールにはFreetypeサポートが含まれていません。gd拡張モジュールでFreetypeサポートが設定されているかどうか確認してください。';
$string['sessionextensionnotloaded'] = 'あなたのサーバ設定にはsession拡張モジュールが含まれていません。ユーザログインをサポートするため、Maharaではこのモジュールを必要とします。このモジュールがphp.iniに設定されているかどうか確認してください。インストールされていない場合、インストールしてください。';
$string['curllibrarynotinstalled'] = 'あなたのサーバ設定にはcurl拡張モジュールが含まれていません。Moodle統合および外部フィードを検索するため、Maharaではこのモジュールを必要とします。このモジュールがphp.iniに設定されているかどうか確認してください。インストールされていない場合、インストールしてください。';
$string['registerglobals'] = 'あなたは危険なPHP設定、register_globalsをonにしています。Maharaはこの問題の対処を試みますが、設定の修正を強くお勧めします。あなたが共有ホスティングを利用していて、PHPの設定変更が許可されている場合、.htaccessファイルに次の行を含んでください:
php_flag register_globals off';
$string['magicquotesgpc'] = 'あなたは危険なPHP設定、magic_quotes_gpcをonにしています。Maharaはこの問題の対処を試みますが、設定の修正を強くお勧めします。あなたが共有ホスティングを利用していて、PHPの設定変更が許可されている場合、.htaccessファイルに次の行を含んでください:
php_flag magic_quotes_gpc off';
$string['magicquotesruntime'] = 'あなたは危険なPHP設定、magic_quotes_runtimeをonにしています。Maharaはこの問題の対処を試みますが、設定の修正を強くお勧めします。あなたが共有ホスティングを利用していて、PHPの設定変更が許可されている場合、.htaccessファイルに次の行を含んでください:
php_flag magic_quotes_runtime off';
$string['magicquotessybase'] = 'あなたは危険なPHP設定、magic_quotes_sybaseをonにしています。Maharaはこの問題の対処を試みますが、設定の修正を強くお勧めします。あなたが共有ホスティングを利用していて、PHPの設定変更が許可されている場合、.htaccessファイルに次の行を含んでください:
php_flag magic_quotes_sybase off';
$string['safemodeon'] = 'あなたのサーバはセーフモードで動作しているようです。Maharaはセーフモードでの運用をサポートしていません。php.iniファイルまたはサイトのApache設定でセーフモードを無効にしてください。

あなたが共有ホスティングサービスを利用している場合、ホスティングプロバイダに依頼する以外、safe_modeを無効にするためにできることは多くありません。別のホスティングサービスへの変更を考えても良いでしょう。';
$string['apcstatoff'] = 'あなたのサーバはapc.stat=0によりAPCを動作しているようです。Maharaはこの設定をサポートしていません。php.iniファイルでapc.stat=1に設定してください。

あなたが共有ホスティングサービスを利用している場合、ホスティングプロバイダに依頼する以外、apc.statを有効にするためにできることは多くありません。別のホスティングサービスへの変更を考えても良いでしょう。';
$string['datarootinsidedocroot'] = 'あなたはドキュメントルート内にデータルートを設定したようです。これには多大なセキュリティ上の問題があり、誰でも (他の人のセッションをハイジャックするため) 直接セッションデータをリクエストすることができます。また、他の人がアップロードした、アクセスを許可されていないファイルにアクセスすることができます。データルートをドキュメントルートの外に設定してください。';
$string['datarootnotwritable'] = 'あなたが定義したルートディレクトリ「 %s 」に書込み権がありません。これはセッションデータ、ユーザファイル、その他アップロードする必要のあるファイルをアップロードできないことを意味します。ディレクトリが存在しているかどうか確認してください。ディレクトリが存在している場合、ディレクトリにウェブサーバユーザの所有権を与えてください。';
$string['sessionpathnotwritable'] = 'あなたのセッションデータディレクトリ「 %s 」に書込み権がありません。ディレクトリが存在していない場合、ディレクトリを作成してください。ディレクトリが存在している場合、ディレクトリにウェブサーバユーザの所有権を与えてください。';
$string['wwwrootnothttps'] = 'あなたが定義したwwwroot ( %s ) は正しいHTTPSではありません。しかし、あなたのインストレーションの他の設定 (sslproxy等) ではwwwrootがHTTPSである必要があります。

あなたのwwwroot設定をHTTPSに更新するか、正しくない設定を修正してください。';
$string['couldnotmakedatadirectories'] = '何らかの理由で、いくつかのコアデータディレクトリを作成することができませんでした。前もって、Maharaがデータディレクトリの書込み権を確認しましたので、このエラーが発生することはないと考えられます。データルートディレクトリのパーミッションを確認してください。';
$string['dbconnfailed'] = 'Maharaがアプリケーションデータベースに接続できませんでした。

* あなたがMaharaを使用している場合、少し待った後、再度お試しください。
* あなたが管理者の場合、あなたのデータベースの設定およびデータベースが利用可能かどうか確認してください。

エラー内容は:';
$string['dbnotutf8'] = 'あなたはUTF-8データベースを使用していません。Maharaではすべてのデータを内部にUTF-8で保存します。あなたのデータベースをドロップして、UTF-8エンコーディングを使用するよう再作成してください。';
$string['dbversioncheckfailed'] = 'あなたのデータベースサーバのバージョンはMaharaを正常に動作させるのに十分な新しいバージョンではありません。あなたのサーバは%s %s ですが、Maharaは少なくともバージョン %s を必要とします。';
$string['plpgsqlnotavailable'] = 'あなたのPostgresではPL/pgSQL言語が有効にされていません。また、MaharaもPL/pgSQL言語を有効にすることはできません。あなたのデータベースに手動でPL/pgSQLをインストールしてください。この作業のインストラクションに関して、次をご覧ください: https://wiki.mahara.org/wiki/System_Administrator%27s_Guide/Enabling_Plpgsql';
$string['mysqlnotriggerprivilege'] = 'データベーストリガの作成に関して、Maharaはパーミッションを必要とします。しかし、データベーストリガを作成できないようです。あなたのMySQLインストール内にて、適切なユーザにトリガ権限が割り当てられていることを確認してください。この作業のインストラクションに関して、次をご覧ください: https://wiki.mahara.org//wiki/System_Administrator%27s_Guide/Granting_Trigger_Privilege';
$string['mbstringneeded'] = 'PHPのmbstring拡張モジュールをインストールしてください。あなたがユーザ名にUTF-8文字を使用している場合、この拡張モジュールが必要です。インストールしない場合、ユーザはログインすることができません。';
$string['cssnotpresent'] = 'あならのhtdocs/theme/raw/styleディレクトリ内にCSSファイルが存在しません。あなたがgitチェックアウトからMaharaを動作させている場合、CSSファイルを構築するために「make css」をじっこうしてください。あなたがZIPダウンロードよりMaharaを動作させている場合、再度ダウンロードおよび解凍をお試しください。';
$string['blocktypenametaken'] = 'ブロックタイプ %s はすでに他のプラグイン (%s) に取得されています。';
$string['artefacttypenametaken'] = 'アーティファクトタイプ %s はすでに他のプラグイン (%s) に取得されています。';
$string['artefacttypemismatch'] = 'アーティファクトタイプが一致しません。あなたはこの %s に関して、%s としての使用を試みています。';
$string['classmissing'] = 'クラス %s (タイプ %s - プラグイン %s) がありません。';
$string['artefacttypeclassmissing'] = 'すべてのアーティファクトタイプにはクラスを実装する必要があります。%s がありません。';
$string['artefactpluginmethodmissing'] = 'アーティファクトプラグイン %s で必要な %s が実装されていません。';
$string['blocktypelibmissing'] = 'アーティファクトプラグイン %s 内にブロック %s のlib.phpがありません。';
$string['unabletosetmultipleblogs'] = 'ユーザ「 %s 」のビュー「 %s 」のコピーによる複数日誌の有効化に失敗しました。これは<a href="%s">アカウント</a>ページにて、手動で設定することができます。';
$string['pleaseloginforjournals'] = 'あなたの日誌および記事すべてを閲覧すにはログアウトした後に再度ログインする必要があります。';
$string['blocktypemissingconfigform'] = 'ブロックタイプ %s ではinstance_config_formを実装する必要があります。';
$string['versionphpmissing'] = 'プラグイン %s %s のversion.phpがありません!';
$string['blocktypeprovidedbyartefactnotinstallable'] = 'これはアーティファクトプラグイン %s の一部としてインストールされます。';
$string['blockconfigdatacalledfromset'] = 'configデータを直接設定しないでください。代わりにPluginBlocktype::instance_config_saveを使用してください。';
$string['invaliddirection'] = '無効な移動先: %s';
$string['onlyoneprofileviewallowed'] = 'あなたは1件のプロファイルページのみ許可されています。';
$string['onlyoneblocktypeperview'] = '1つ以上の %s ブロックタイプをページに追加できません。';
$string['unrecoverableerror'] = '回復不能なエラーが発生しました。恐らく、あなたはシステムバグに遭遇したと思われます。';
$string['unrecoverableerrortitle'] = '%s - サイト利用不可';
$string['parameterexception'] = '必須パラメータが指定されていません。';
$string['notfound'] = '不明';
$string['notfoundexception'] = 'あなたが探しているページは見つかりませんでした。';
$string['accessdenied'] = 'アクセスが拒否されました。';
$string['accessdeniedobjection'] = 'アクセスが拒否されました。問題点はすでに別の管理者により解決されています。';
$string['accessdeniedexception'] = 'あなたにはこのページを閲覧するアクセス権がありません。';
$string['viewnotfoundexceptiontitle'] = 'ページが見つかりませんでした。';
$string['viewnotfoundexceptionmessage'] = 'あなたは存在しないページにアクセスを試みました!';
$string['viewnotfound'] = 'ID %s のページは見つかりませんでした。';
$string['viewnotfoundbyname'] = 'ページ %s (ユーザ: %s) が見つかりませんでした。';
$string['youcannotviewthisusersprofile'] = 'あなたはこのユーザのプロファイルを閲覧できません。';
$string['invalidlayoutselection'] = 'あなたは存在しないレイアウトの選択を試みました!';
$string['invalidnumrows'] = 'あなたは許可された最大行以上のレイアウトの作成を試みました (これは可能であるべきではありません。あなたのサイト管理者にご連絡ください)。';
$string['previewimagegenerationfailed'] = '申し訳ございません、プレビューイメージの生成中に問題が発生しました。';
$string['artefactnotfoundmaybedeleted'] = 'ID %s のアーティファクトは見つかりませんでした (もしかして、削除されましたか?)。';
$string['artefactnotfound'] = 'ID %s のアーティファクトは見つかりませんでした。';
$string['artefactsnotfound'] = 'このIDのアーティファクトは見つかりませんでした: %s。';
$string['artefactnotinview'] = 'アーティファクト %s はページ %s にありません。';
$string['artefactonlyviewableinview'] = 'このタイプのアーティファクトはページ内でのみ閲覧することができます。';
$string['notartefactowner'] = 'あなたはこのアーティファクトを所有していません。';
$string['blockinstancenotfound'] = 'ID %s のブロックインスタンスは見つかりませんでした。';
$string['interactioninstancenotfound'] = 'ID %s の活動インスタンスは見つかりませんでした。';
$string['invalidviewaction'] = '無効なページコントロール: %s';
$string['missingparamblocktype'] = '最初に追加するブロックタイプを選択してください。';
$string['missingparamcolumn'] = 'カラム設定がありません。';
$string['missingparamrow'] = '行設定がありません。';
$string['missingparamorder'] = '並べ替え順の設定がありません。';
$string['missingparamid'] = 'IDがありません。';
$string['themenameinvalid'] = 'テーマ名「 %s 」に無効な文字が含まれています。';
$string['timezoneidentifierunusable'] = 'あなたのウェブサイトのPHPはタイムゾーンID (%z) に対して、有益な値を返していないようです - Leap2Aエクスポート等の日付フォーマットが壊れる可能性があります。%z はPHPの日付フォーマットコードです。通常、この問題はWindows上で実行されるPHPの制限に起因します。';
$string['postmaxlessthanuploadmax'] = 'あなたのPHP post_max_size (%s) はupload_max_filesize (%s) よりも小さく設定されています。%s より大きなファイルをアップロードした場合、エラー表示なしにアップロードが失敗してしまいます。通常、post_max_sizeはupload_max_filesizeよりも大きく設定する必要があります。';
$string['smallpostmaxsize'] = 'あなたのPHP post_max_size (%s) 設定は小さすぎます。%s より大きなファイルをアップロードした場合、エラー表示なしにアップロードが失敗してしまいます。';
$string['notenoughsessionentropy'] = 'あなたのsession.entropy_length設定は小さすぎます。生成されるセッションIDをランダムおよび予測不能にするため、あなたのphp.ini内で少なくとも16以上の値を設定してください。';
$string['switchtomysqli'] = 'あなたのサーバには<strong>mysqli</strong> PHP拡張モジュールがインストールされていません。そのため、Maharaは廃止予定のオリジナル<strong>mysql</strong> PHP拡張モジュールに戻っています。私たちは<a href="http://php.net/manual/en/book.mysqli.php">mysqli</a>のインストールをお勧めします。';
$string['noreplyaddressmissingorinvalid'] = 'システムメールアドレスに空白または有効ではないメールアドレスが設定されています。<a href="%s">サイトオプション内の「Eメール設定」</a>の設定内容を確認してください。';
$string['openbasedirenabled'] = 'あなたのサーバではPHPの「open_basedir」制限が有効にされています。';
$string['openbasedirpaths'] = 'Maharaは次のパス内でのみファイルを開くことができます: %s';
$string['openbasedirwarning'] = 'いくつかの外部サイトへのリクエストを完了できない可能性があります。特にフィードの更新が停止してしまう場合があります。';
$string['gdlibrarylacksgifsupport'] = 'インストール済みPHP GDライブラリはGIFイメージの作成および読み込みをサポートしません。GIFイメージのアップロードにはフルサポートが必要です。';
$string['gdlibrarylacksjpegsupport'] = 'インストール済みPHP GDライブラリはJPEG/JPGイメージの作成および読み込みをサポートしません。JPEG/JPGイメージのアップロードにはフルサポートが必要です。';
$string['gdlibrarylackspngsupport'] = 'インストール済みPHP GDライブラリはPNGイメージの作成および読み込みをサポートしません。PNGイメージのアップロードにはフルサポートが必要です。';
$string['nopasswordsaltset'] = 'サイト全体のパスワードsaltが設定されていません。あなたのconfig.phpを編集して、「passwordsaltmain」パラメータに妥当なシークレットフレーズを設定してください。';
$string['passwordsaltweak'] = 'あなたのサイト全体のパスワードsaltの強さが十分ではありません。あなたのconfig.phpを編集して、さらに長いシークレットフレーズを「passwordsaltmain」パラメータに設定してください。';
$string['notproductionsite'] = 'このサイトは実運用モードに入っていません。いくつかのデータは利用できないか、古い可能性があります。';

?>
