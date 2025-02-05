<?php

defined('INTERNAL') || die();

$string['accessdenied'] = 'アクセスが拒否されました。';
$string['accessdeniedbadge'] = 'あなたにはこのバッジを閲覧するためのアクセス権がありません。';
$string['accessdeniedexception'] = 'あなたにはこのページを閲覧するためのアクセス権がありません。';
$string['accessdeniednourlsecret'] = 'あなたにはこの機能へのアクセス権がありません。あなたのconfig.phpファイルからURLの一部として「urlsecret」の値を提供してください。';
$string['accessdeniedobjection'] = 'アクセスが拒否されました。問題点はすでに別の管理者により解決されています。';
$string['accessdeniedsuspension'] = 'このポートフォリオはレビュー中です。';
$string['apcstatoff'] = 'あなたのサーバはapc.stat=0によりAPCを動作しているようです。Maharaはこの設定をサポートしていません。php.iniファイルでapc.stat=1に設定してください。

あなたが共有ホスティングを利用している場合、ホスティングプロバイダに依頼する以外、apc.statを有効にするためにできることは多くありません。別のホストへの移行を考えても良いでしょう。';
$string['artefactmissing'] = 'データルートからアーティファクトを取得できません。';
$string['artefactnotfound'] = 'ID %s のアーティファクトは見つかりませんでした。';
$string['artefactnotfoundexception'] = 'あなたが探しているアーティファクトは見つかりませんでした。';
$string['artefactnotfoundmaybedeleted'] = 'ID %s のアーティファクトは見つかりませんでした (もしかしてすでに削除されていますか?)。';
$string['artefactnotinview'] = 'アーティファクト %s はページ %s にありません。';
$string['artefactonlyviewableinview'] = 'このタイプのアーティファクトはページ内でのみ閲覧できます。';
$string['artefactpluginmethodmissing'] = 'アーティファクトプラグイン %s で必要な %s が実装されていません。';
$string['artefactsnotfound'] = '次のIDのアーティファクトは見つかりませんでした: %s';
$string['artefacttypeclassmissing'] = 'すべてのアーティファクトタイプにはクラスを実装する必要があります。%s がありません。';
$string['artefacttypemismatch'] = 'アーティファクトタイプが一致しません。あなたはこの %s に関して %s としての使用を試みています。';
$string['artefacttypenametaken'] = 'アーティファクトタイプ %s はすでに他のプラグイン (%s) に取得されています。';
$string['badsessionhandle'] = 'セッション保存ハンドラ「 %s 」が正しく設定されていません。あなたの「config.php」ファイルの設定を確認してください。';
$string['blockconfigdatacalledfromset'] = 'configデータを直接設定しないでください。代わりにPluginBlocktype::instance_config_saveを使用してください。';
$string['blockinstancenotfound'] = 'ID %s のブロックインスタンスは見つかりませんでした。';
$string['blocktypelibmissing'] = 'ブロック %s (アーティファクトプラグイン %s ) のlib.phpがありません。';
$string['blocktypemissingconfigform'] = 'ブロックタイプ %s にinstance_config_formを実装する必要があります。';
$string['blocktypenametaken'] = 'ブロックタイプ %s はすでに他のプラグイン (%s) に取得されています。';
$string['blocktypeprovidedbyartefactnotinstallable'] = 'これはアーティファクトプラグイン %s の一部としてインストールされます。';
$string['cannotputblocktypeintoview'] = 'このページには %s ブロックタイプを追加できません。';
$string['classmissing'] = 'クラス %s (タイプ %s - プラグイン %s) がありません。';
$string['collectionnotfound'] = 'ID %s のコレクションは見つかりませんでした。';
$string['couldnotmakedatadirectories'] = '何らかの理由で一部のコアデータディレクトリを作成できませんでした。Maharaが事前にdatarootディレクトリの書込み権を確認したためこのエラーが発生することはないと考えられます。datarootディレクトリのパーミッションを確認してください。';
$string['cssnotpresent'] = 'あなたのhtdocs/theme/raw/styleディレクトリ内にCSSファイルが存在しません。あなたがgitチェックアウトからMaharaを動作させている場合、CSSファイルを構築するために「make css」を実行してください。あなたがZIPダウンロードよりMaharaを動作させている場合、再度ダウンロードおよび展開をお試しください。';
$string['curllibrarynotinstalled'] = 'あなたのサーバ設定にはcURL拡張モジュールが含まれていません。Moodleインテグレーションおよび外部フィードを検索するためMaharaではこのモジュールを必要とします。このモジュールがphp.iniに設定されているか確認してください。インストールされていない場合、インストールしてください。';
$string['datarootinsidedocroot'] = 'あなたはドキュメントルート内にデータルートを設定したようです。これには誰でも (他の人のセッションをハイジャックするため) 直接セッションデータをリクエストできる多大なセキュリティ上の問題があります。また、他の人がアップロードしたアクセス許可されていないファイルに誰でもアクセスできます。データルートをドキュメントルートの外に設定してください。';
$string['datarootnotwritable'] = 'あなたが定義したデータルートディレクトリ「 %s 」に書込み権がありません。これはセッションデータ、ファイル、その他アップロードする必要のあるファイルをアップロードできないことを意味します。ディレクトリが存在しているか確認してください。ディレクトリが存在している場合、ディレクトリにウェブサーバアカウントの所有権を与えてください。';
$string['dbconnfailed'] = 'Maharaがアプリケーションデータベースに接続できませんでした。

* あなたがMaharaを利用している場合、少し待った後、再度お試しください。
* あなたが管理者である場合、データベース設定およびデータベースが利用可能か確認してください。

エラー内容は次のとおりです:
';
$string['dbnotutf8'] = 'あなたはUTF-8データベースを使用していません。Maharaはすべてのデータを内部的にUTF-8として保存します。あなたのデータベースを削除した後、UTF-8エンコーディングで再作成してください。';
$string['dbnotutf8mb4_bin'] = 'あなたはutf8mb4文字セット (4-Byte UTF-8 Unicode Encoding) データベースを使用していません。Maharaは内部的にすべてのデータをutf8mb4として保存します。あなたのデータベースを文字セット「utf8mb4」および照合順序「utf8mb4_bin」で削除および再作成してください。';
$string['dbversioncheckfailed'] = 'あなたのデータベースサーバのバージョンはMaharaを正常に動作させるのに十分な新しいバージョンではありません。あなたのサーバは %s %s ですが、Maharaは少なくともバージョン %s を必要とします。';
$string['domextensionnotloaded'] = 'あなたのサーバ設定にはDOM拡張モジュールが含まれていません。様々なソースのXMLデータを構文解析するためMaharaではこのモジュールを必要とします。';
$string['errorat'] = ' &nbsp;-&nbsp; ';
$string['fileuploadtoobig'] = 'あなたがアップロードを試みているファイルはアップロードを許可されている最大ファイルサイズ「 %s 」を超えています。';
$string['fileuploadtoomany'] = 'あなたがアップロードを試みているファイル数が多すぎます。あなたは最大 %s 個のファイルをアップロードできます。';
$string['gdextensionnotloaded'] = 'あなたのサーバ設定にはGD拡張モジュールが含まれていません。アップロードされたイメージのリサイズおよび他の処理を実行するためMaharaではこのモジュールを必要とします。このモジュールがphp.iniに設定されているか確認してください。インストールされていない場合、インストールしてください。';
$string['gdfreetypenotloaded'] = 'あなたのサーバ設定のGD拡張モジュールにはFreeTypeサポートが含まれていません。GD拡張モジュールでFreeTypeサポートが設定されているか確認してください。';
$string['gdlibrarylacksgifsupport'] = 'インストール済みPHP GDライブラリはGIFイメージの作成および読み込みをサポートしていません。GIFイメージのアップロードにはフルサポートが必要です。';
$string['gdlibrarylacksjpegsupport'] = 'インストール済みPHP GDライブラリはJPEG/JPGイメージの作成および読み込みをサポートしていません。JPEG/JPGイメージのアップロードにはフルサポートが必要です。';
$string['gdlibrarylackspngsupport'] = 'インストール済みPHP GDライブラリはPNGイメージの作成および読み込みをサポートしていません。PNGイメージのアップロードにはフルサポートが必要です。';
$string['institutionprivacystatementnotfound'] = '「 %s 」のプライバシ保護方針 (ID: %s) は見つかりませんでした。';
$string['interactioninstancenotfound'] = 'ID %s の活動インスタンスは見つかりませんでした。';
$string['intlextensionnotloaded'] = 'あなたのサーバ設定にはPHP intl拡張モジュールが含まれていません。Maharaは言語ロケールに関連する情報を構文解析するためこの拡張モジュールを必要とします。';
$string['invaliddirection'] = '無効な移動先: %s';
$string['invalidlayoutselection'] = 'あなたは存在しないレイアウトの選択を試みました。';
$string['invaliduser'] = '無効なアカウントが選択されました。';
$string['invalidviewaction'] = '無効なページコントロール操作: %s';
$string['isolatedinstitutionsremoverules'] = '隔離インスティテューションが有効にされているため、私たちは %s 件のアクセスルールを秘匿しました。フォームを保存した場合、秘匿ルールは削除されます。';
$string['jsonextensionnotloaded'] = 'あなたのサーバ設定にはJSON拡張モジュールが含まれていません。ブラウザへのデータ送受信のためMaharaではこのモジュールを必要とします。このモジュールがphp.iniに設定されているかどうか確認してください。インストールされていない場合、インストールしてください。';
$string['magicquotesgpc'] = 'あなたは危険なPHP設定「magic_quotes_gpc」をonにしています。Maharaはこの問題の対処を試みますが設定変更を強くお勧めします。あなたが共有ホスティングを利用してPHPの設定変更が許可されている場合、.htaccessファイルに次の行を含んでください:
php_flag magic_quotes_gpc off';
$string['magicquotesruntime'] = 'あなたは危険なPHP設定「magic_quotes_runtime」をonにしています。Maharaはこの問題の対処を試みますが設定変更を強くお勧めします。あなたが共有ホスティングを利用してPHPの設定変更が許可されている場合、.htaccessファイルに次の行を含んでください:
php_flag magic_quotes_runtime off';
$string['mahararootusermissing'] = 'データベースに「root」アカウントが存在しないため私たちは継続できません。このアカウントはMaharaが正常に動作するため必要です。再度rootアカウントを作成するにはあなたが使用しているMaharaのバージョンを別にインストールした上で「usr」および「usr_custom_layout」テーブル内の「user」 (id = 0) に何が含まれているか確認してください。そしてアップグレードを再開する前にあなたのMaharaインスタンスにそのデータを追加してください。';
$string['mbstringextensionnotloaded'] = 'あなたのサーバ設定にはmbstring拡張モジュールが含まれていません。各種言語のマルチバイトストリングを解析するためMaharaではこのモジュールを必要とします。';
$string['mbstringneeded'] = 'PHPのmbstring拡張モジュールをインストールしてください。あなたがユーザ名にUTF-8文字を使用している場合、この拡張モジュールが必要です。インストールしない場合、人はログインできない可能性があります。';
$string['memcacheusememcached'] = '「memcache」セッションストレージは廃止されました。「memcached」を使用してください。';
$string['missingparamblocktype'] = '最初に追加するブロックタイプを選択してください。';
$string['missingparamid'] = 'IDがありません。';
$string['missingparamorder'] = '並べ替え順設定がありません。';
$string['mnetconverttolti'] = 'MNet認証がまだ1つまたはそれ以上のアカウント (%s) で使用されています。MNetは非推奨であり、まもなく削除される予定です。LTIを設定してMNet使用アカウントをLTI認証に移行してください。';
$string['mysqldbextensionnotloaded'] = 'あなたのサーバ設定にはmysqliまたはmysql拡張モジュールが含まれていません。リレーショナルデータベースにデータを保存するためMaharaではこのモジュールを必要とします。このモジュールがphp.iniに設定されているか確認してください。インストールされていない場合、インストールしてください。';
$string['mysqlmodulenolongersupported1'] = 'あなたのサーバ設定にはmysqli拡張モジュールが含まれていません。このモジュールがphp.iniに設定されているか確認してください。インストールされていない場合、インストールしてください。Maharaはバージョン16.10でmysql拡張モジュールのサポートを終了しました。';
$string['nomemcachedserver'] = 'memcacheサーバ「 %s 」に接続できません。$cfg->memcacheservers値が正しいか確認してください。';
$string['nomemcacheserversdefined'] = 'セッションハンドラ「 %s 」の関連サーバが定義されていません。$cfg->memcacheservers値を設定してください。例)localhost:11211';
$string['nopasswordsaltset'] = 'サイト全体のパスワードsaltが設定されていません。あなたのconfig.phpを編集して「passwordsaltmain」パラメータに妥当なシークレットフレーズを設定してください。';
$string['nophpextension'] = 'PHP拡張モジュール「 %s 」が有効にされていません。拡張モジュールを有効にしてあなたのウェブサーバを再起動するか異なるセッションオプションを選択してください。';
$string['noreplyaddressmissingorinvalid'] = 'システムメールアドレスに空白または有効ではないメールアドレスが設定されています。<a href="%s">サイトオプション内の「メール設定」</a>の設定内容を確認してください。';
$string['notartefactowner'] = 'あなたはこのアーティファクトを所有していません。';
$string['notenoughsessionentropy'] = 'あなたのsession.entropy_length設定は小さすぎます。生成されるセッションIDをランダムおよび予測不能にするためあなたのphp.ini内で少なくとも16以上の値を設定してください。';
$string['notfound'] = '不明';
$string['notfoundexception'] = 'あなたが探しているページは見つかりませんでした。';
$string['notinstitutionmember'] = 'あなたはこのページが属しているインスティテューションのメンバではないためこのページを閲覧できません。';
$string['notinthesamegroup'] = 'あなたは同じグループのメンバではないためこのプロファイルを閲覧できません。';
$string['notinthesameinstitution'] = 'あなたは同じインスティテューションのメンバではないためこのプロファイルを閲覧できません。';
$string['notproductionsite'] = 'このサイトは実運用モードではありません。一部のデータは利用できないか古い可能性があります。';
$string['noviewcontrolaction'] = '不明な編集操作: %s';
$string['onlyoneblocktypeperview'] = 'ページに2つ以上の「 %s 」ブロックタイプは追加できません。';
$string['onlyoneprofileviewallowed'] = 'あなたは1つのプロファイルページのみ許可されています。';
$string['openbasedirenabled'] = 'あなたのサーバではPHPの「open_basedir」制限が有効にされています。';
$string['openbasedirpaths'] = 'Maharaは次のパス内でのみファイルを開けます: %s';
$string['openbasedirwarning'] = '一部の外部サイトへのリクエストを完了できない可能性があります。特にフィードの更新が停止してしまう場合があります。';
$string['outdatedcompiledcssbs'] = 'あなたのコンパイルされたCSSは古いバージョンのBootstrapのものです。「make clean-css && make css」を実行して最新バージョンに更新してください。';
$string['parameterexception'] = '必須パラメータがありません。';
$string['passwordsaltweak'] = 'あなたのサイト全体のパスワードsaltの強さが十分ではありません。あなたのconfig.phpを編集してさらに長いシークレットフレーズを「passwordsaltmain」パラメータに設定してください。';
$string['pdo_sqliteextensionnotloaded'] = '
    あなたのサーバ設定にはPHP pdo_sqllite拡張モジュールが含まれていません。あなたのMaharaをアイデンティティプロバイダとして動作させたい場合、MaharaはOIDCのためこの拡張モジュールを必要とします。pdo_sqlliteをインストールした後、あなたのサーバで「make ssphpoidc」を実行してください。';
$string['peopleinmultipleinstitutions'] = '「隔離インスティテューション」を有効にできません。

すべてのアカウントが1つのインスティテューションのみのメンバであることを確認してください。これらのアカウントを表示するには「管理メニュ → 人 → 人検索」を参照してください。「インスティテューション」カラムには1名につき1エントリのみあることを確認してください。

サイトに戻るにはconfig.phpファイルの隔離インスティテューションを無効にしてください。

';
$string['pgsqldbextensionnotloaded'] = 'あなたのサーバ設定にはpgsql拡張モジュールが含まれていません。リレーショナルデータベースにデータを保存するためMaharaではこのモジュールを必要とします。このモジュールがphp.iniに設定されているか確認してください。インストールされていない場合、インストールしてください。';
$string['phpversion'] = 'MaharaはPHP %s 以下では動作しません。あなたのPHPバージョンをアップグレードするか、Maharaを別のホストに移動してください。';
$string['pleaseloginforjournals'] = 'あなたの日誌および記事すべてを閲覧するにはログアウトした後に再度ログインする必要があります。';
$string['plpgsqlnotavailable'] = 'あなたのPostgresインストレーションではPL/pgSQL言語が有効にされていません。そのためMaharaでもPL/pgSQL言語を有効にできません。あなたのデータベースに手動でPL/pgSQLをインストールしてください。この作業のインストラクションに関して次をご覧ください: https://wiki.mahara.org/wiki/System_Administrator%27s_Guide/Enabling_Plpgsql';
$string['pluginnotactive1'] = 'プラグイン「 %s 」が有効にされていません。有効にするには「管理」 → 「拡張機能」 → 「プラグイン管理」に移動してください。';
$string['postmaxlessthanuploadmax'] = 'あなたのPHP post_max_size (%s) はupload_max_filesize (%s) よりも小さく設定されています。%s より大きなファイルをアップロードした場合、エラー表示なしにアップロードが失敗してしまいます。通常、post_max_sizeはupload_max_filesizeよりも大きく設定する必要があります。';
$string['previewimagegenerationfailed'] = '申し訳ございません、プレビューイメージの生成中に問題が発生しました。';
$string['randomkeyminlength'] = '長さは8桁以上の正の整数にしてください。';
$string['registerglobals'] = 'あなたは危険なPHP設定「register_globals」をonにしています。Maharaはこの問題の対処を試みますが設定変更を強くお勧めします。あなたが共有ホスティングを利用してPHPの設定変更が許可されている場合、.htaccessファイルに次の行を含んでください:
php_flag register_globals off';
$string['resavecustomthemes'] = 'あなたの直近のアップグレードが設定可能テーマの正常表示を停止したようです。設定可能テーマをアップグレードするには「管理 → インスティテューション → 設定」に移動してインスティテューションの設定を変更した後、フォームを保存してください。<br>次のインスティテューションが設定可能テーマを使用しています:';
$string['safemodeon'] = 'あなたのサーバはセーフモードで動作しているようです。Maharaはセーフモードでの運用をサポートしていません。php.iniファイルまたはサイトのApache設定でセーフモードを無効にしてください。

あなたが共有ホスティングを利用している場合、ホスティングプロバイダに依頼する以外、safe_modeを無効にするためにできることは多くありません。別のホストへの移行を考えても良いでしょう。';
$string['sessionextensionnotloaded'] = 'あなたのサーバ設定にはsession拡張モジュールが含まれていません。人のログインをサポートするためMaharaではこのモジュールを必要とします。このモジュールがphp.iniに設定されているか確認してください。インストールされていない場合、インストールしてください。';
$string['sessionpathnotwritable'] = 'あなたのセッションデータディレクトリ「 %s 」に書込み権がありません。ディレクトリが存在していない場合、ディレクトリを作成してください。ディレクトリが存在している場合、ディレクトリにウェブサーバアカウントの所有権を与えてください。';
$string['sideblockmenuclash'] = 'サイドブロック名「 %s 」はすでに使用されています。異なる名称を選択してください。';
$string['siteoutofsyncfor'] = 'このサイトには %s ファイルが示すものより新しいデータベース情報があります。';
$string['siteprivacystatementnotfound'] = 'ID %s のサイトプライバシ保護方針は見つかりませんでした。';
$string['smallpostmaxsize'] = 'あなたのPHP post_max_size (%s) 設定は小さすぎます。%s より大きなファイルをアップロードした場合、エラー表示なしにアップロードが失敗してしまいます。';
$string['switchtomysqli'] = 'あなたのサーバには<strong>mysqli</strong> PHP拡張モジュールがインストールされていません。そのためMaharaは非推奨のオリジナル<strong>mysql</strong> PHP拡張モジュールに戻っています。私たちは<a href="https://php.net/manual/en/book.mysqli.php">mysqli</a>のインストールをお勧めします。';
$string['themenameinvalid'] = 'テーマ名「 %s 」に無効な文字が含まれています。';
$string['timezoneidentifierunusable'] = 'あなたのウェブサイトのPHPはタイムゾーンID (%z) に対して有益な値を返していないようです。Leap2Aエクスポート等の日付フォーマットが壊れる可能性があります。%z はPHPの日付フォーマットコードです。通常、この問題はWindows上で実行されるPHPの制限に起因します。';
$string['unabletosetmultipleblogs'] = '「 %s 」のページ「 %s 」のコピーによる複数日誌の有効化に失敗しました。これは<a href="%s">アカウント</a>ページで手動で設定できます。';
$string['unknowndbtype'] = 'あなたのサーバ設定は不明なデータベースタイプを参照しています。有効な値は「postgres」および「mysql」です。config.php内のデータベースタイプ設定を変更してください。';
$string['unrecoverableerror'] = '回復不能なエラーが発生しました。恐らく、あなたはシステムバグに遭遇したと思われます。';
$string['unrecoverableerrortitle'] = '%s - サイト利用不可';
$string['updatesitetimezone'] = '現在のサイトのタイムゾーンを「サイト設定」 → 「サイトオプション」 → 「サイト設定」で設定する必要があります。あなたのconfig.phpに「$cfg->dbtimezone」行がある場合、削除した後、サイトオプションで設定してください。';
$string['urlsecretweak'] = 'このサイトに設定されている$cfg->urlsecretがデフォルト値から変更されていません。あなたのconfig.phpを編集して$cgf->urlsecretパラメータに異なるストリングを設定してください (urlsecretを使用したくない場合、nullを設定してください)。';
$string['versionphpmissing1'] = 'プラグイン %s %s のversion.phpがありません。あなたがプラグイン %s をインストールする予定ではない場合、%s のフォルダを削除してください。';
$string['viewnotfound'] = 'ID %s のページは見つかりませんでした。';
$string['viewnotfoundbyname'] = 'ページ %s (作成: %s) は見つかりませんでした。';
$string['viewnotfoundexceptionmessage'] = 'あなたは存在しないページにアクセスを試みました。';
$string['viewnotfoundexceptiontitle'] = 'ページは見つかりませんでした。';
$string['viewtemplatenotfound'] = 'デフォルトページテンプレートは見つかりませんでした。';
$string['wrongparamtype'] = '関数またはメソッドに正しくない種類の引数が渡されました。';
$string['wrongsessionhandle'] = 'セッション保存ハンドラ「 %s 」はMaharaではサポートされていません。';
$string['wwwrootnothttps'] = 'あなたが定義したwwwroot ( %s ) はHTTPSではありません。しかし、あなたのインストレーションの他の設定 (sslproxy等) ではwwwrootがHTTPSアドレスである必要があります。

あなたのwwwroot設定をHTTPSアドレスに更新してください。または正しくない設定を修正してください。';
$string['xmlextensionnotloaded'] = 'あなたのサーバ設定には %s 拡張モジュールが含まれていません。様々なソースのXMLデータを構文解析するためMaharaではこのモジュールを必要とします。このモジュールがphp.iniに設定されているか確認してください。インストールされていない場合、インストールしてください。';
$string['youcannotviewthisusersprofile'] = 'あなたはこのプロファイルを閲覧できません。';
