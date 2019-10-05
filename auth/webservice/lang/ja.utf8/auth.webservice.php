<?php
/**
 *
 * @package    mahara
 * @subpackage lang (Japanese)
 * @translator Mitsuhiro Yoshida (https://mitstek.com/)
 * @started    2008-01-19 11:25:00 UTC
 * @updated    2018-09-30 07:41:07 UTC
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL version 3 or later
 * @copyright  For copyright information on Mahara, please see the README file distributed with this software.
 *
 */

defined('INTERNAL') || die();

$string['webservice'] = 'ウェブサービス';
$string['title'] = 'ウェブサービス';
$string['description'] = 'ウェブサービスのみのユーザをMaharaのデータベースで認証する';
$string['webservicesconfig'] = '設定';
$string['webservicesconfigdesc'] = 'ここであなたは様々なウェブサービスルールを変更すること、有効または無効にできます。';
$string['webservicesconfigdescshort'] = 'あなたのサイトのウェブサービスアクセスを設定および管理します。';
$string['webserviceconnectionsconfigdesc'] = '登録済みプラグインの接続オブジェクトをセットアップすることにより外部システムと通信できます。';
$string['completeregistration'] = '登録を完了する';
$string['emailalreadytaken'] = 'このメールアドレスはすでにここで登録されています。';
$string['iagreetothetermsandconditions'] = '私は利用条件に同意します。';
$string['passwordinvalidform1'] = 'あなたのパスワードは少なくとも半角英数字 %s 文字にしてください。パスワードでは大文字小文字を区別します。また、あなたのユーザ名と異なるものにしてください。あなたのパスワードには %s を含む必要があります。';
$string['registeredemailsubject'] = 'あなたは %s に登録されました。';
$string['registeredemailmessagetext'] = '%s さん

%s へのご登録ありがとうございます。サインアップ処理を完了するには次のリンクにアクセスしてください:

%sregister.php?key=%s

リンクは24時間で有効期限が切れます。

--
%s チーム';
$string['registeredemailmessagehtml'] = '<p>%s さん</p>
<p>%s へのご登録ありがとうございます。サインアップ処理を完了するには次のリンクにアクセスしてください:</p>
<p><a href="%sregister.php?key=%s">%sregister.php?key=%s</a></p>
<p>リンクは24時間で有効期限が切れます。</p>

<pre>--
%s チーム</pre>';
$string['registeredok'] = '<p>あなたの登録が正常に完了しました。あなたのメールアカウントでアカウントを有効にするためのインストラクションを確認してください。</p>';
$string['registrationnosuchkey'] = '申し訳ございません、このキーでの登録はできないようです。恐らく、あなたが登録を完了するため24時間以上待機していたと思われます。そうでない場合、これは私たちに責任があります';
$string['registrationunsuccessful'] = '申し訳ございません、あなたの登録は正常に完了しませんでした。これは私たちに責任があります。再度お試しください。';
$string['usernameinvalidform'] = 'ユーザ名には空白を除く半角英数字および標準的な記号を使用できます。また、ユーザ名の長さは半角3-30文字にしてください。空白は許可されません。';
$string['usernameinvalidadminform'] = 'ユーザ名には空白を除く半角英数字および標準的な記号を使用できます。また、ユーザ名の長さは半角3-236文字にしてください。空白は許可されません。';
$string['youmaynotregisterwithouttandc'] = '<a href="terms.php">利用条件</a>に従うことを同意しない限り、あなたは登録できません。';
$string['pluginconnections'] = '接続オブジェクト';
$string['nodefinedconnections'] = 'プラグインで定義されているウェブサービス接続はありません。最初に接続を定義してください。';
$string['instancelistempty'] = 'このインスティテューションの接続オブジェクトはありません。';
$string['addconnection'] = 'クライアント接続を追加する';
$string['editconnection'] = 'クライアント接続を編集する';
$string['clientconnections'] = 'クライアント接続';
$string['plugin'] = '接続プラグイン';
$string['clienturl'] = 'ウェブサービスURL';
$string['password'] = 'パスワード';
$string['parameters'] = '渡すための固定パラメータ';
$string['certificate'] = 'XML-RPCパートナー証明書';
$string['enable'] = '接続有効';
$string['json'] = 'JSONエンコード';
$string['isfatal'] = 'エラー時に致命的にする';
$string['type'] = 'ウェブサービスタイプ';
$string['nameexists'] = '名称がすでに使用されています。';
$string['emptytoken'] = 'トークンを提供する必要があります。';
$string['emptyuser'] = 'ユーザを提供する必要があります。';
$string['emptyuserpass'] = 'パスワードを提供する必要があります。';
$string['emptycert'] = '証明書を提供する必要があります。';
$string['header'] = 'ヘッダ名';
$string['useheader'] = 'ヘッダに認証を付加する';
$string['invalidauthtypecombination'] = '%s に無効な認証タイプが選択されました。';
$string['emptycertextended'] = '証明書ベースの認証を使用する場合、あなたはトークまたはユーザ名/パスワードも入力する必要があります。';
$string['emptyoauthkey'] = 'OAuth1.xにコンシューマキーを提供する必要があります。';
$string['emptyoauthsecret'] = 'OAuth1.xに秘密鍵を提供する必要があります。';
$string['consumer'] = 'コンシューマキー';
$string['secret'] = '秘密鍵';
$string['control_webservices'] = 'ウェブサービスをOnまたはOffに切り替える:';
$string['webservice_requester_enabled_label'] = 'ウェブサービスリクエスタマスタースイッチ';
$string['webservice_requester_enabled_label2'] = '外向きのウェブサービスリクエストを許可する:';
$string['webservice_provider_enabled_label'] = 'ウェブサービスプロバイダマスタースイッチ';
$string['webservice_provider_enabled_label2'] = '内向きのウェブサービスリクエストを許可する:';
$string['webservice_master_switches'] = 'ウェブサービス機能を有効にする';
$string['connectionsswitch'] = '管理クライアント接続をOnまたはOffに切り替える';
$string['manage_protocols1'] = 'ウェブサービスプロバイダとしてサポートされるプロトコルを有効または無効にする:';
$string['protocol'] = 'プロトコル';
$string['oauth'] = 'OAuth';
$string['rest'] = 'REST';
$string['soap'] = 'SOAP';
$string['xmlrpc'] = 'XML-RPC';
$string['manage_certificates'] = '<a href="%s">ネットワーキング</a>サービスの一部として生成された証明書です。これらの値は特定のウェブサービストークンまたはサービスユーザに対してウェブサービスセキュリティ署名および暗号化が有効にされた場合に使用されます (XML-RPCおよびレガシーMNetのみ)。';
$string['certificates'] = 'ネットワーク証明書';
$string['servicefunctiongroups'] = 'サービスグループを管理する';
$string['servicegroup'] = 'サービスグループ: %s';
$string['sfgdescription'] = '実行権限を与えられたユーザに割り当てることのできるサービスグループへの関数一覧を作成します。';
$string['name'] = '名称';
$string['component'] = 'コンポーネント';
$string['customservicegroup'] = '(カスタム)';
$string['functions'] = '関数';
$string['enableservice'] = 'サービスを有効または無効にする';
$string['restricteduserswarning'] = '警告: このサービスには既存のトークンユーザが存在するためあなたが「 %s 」を有効にした場合、アクセスできないようになります。';
$string['tokenuserswarning'] = '警告: このサービスには既存のトークンユーザが存在するためあなたが「 %s 」を無効にした場合、アクセスできないようになります。';
$string['usersonly'] = 'ユーザのみ';
$string['tokensonly'] = 'トークンのみ';
$string['switchtousers'] = 'ユーザにスイッチする';
$string['switchtotokens'] = 'トークンにスイッチする';
$string['invalidservice'] = '無効なサービスが選択されました。';
$string['invalidfunction'] = '無効な関数が選択されました。';
$string['tokengenerationfailed'] = 'トークンの生成に失敗しました。';
$string['parametercannotbevalueoptional'] = 'パラメータは任意の値にすることはできません。';
$string['invalidresponse'] = '無効なレスポンス';
$string['invalidstatedetected'] = '無効な状態が検出されました。';
$string['codingerror'] = 'コーディングエラー';
$string['accessextfunctionnotconf'] = '外部関数へのアクセスが設定されていません。';
$string['missingfuncname'] = '関数名がありません。';
$string['invalidretdesc'] = '無効な戻り値の記述です。';
$string['invalidparamdesc'] = '無効なパラメータの記述です。';
$string['missingretvaldesc'] = '戻り値の記述がありません。';
$string['missingparamdesc'] = 'パラメータの記述がありません。';
$string['missingimplofmeth'] = '「 %s 」のメソッドが実装されていません。';
$string['cannotfindimplfile'] = '外部関数の実装されたファイルを見つけることができませんでした。';
$string['servicenamemustbeunique'] = 'この名称はすでに別のサービスグループで使用されています。';
$string['serviceshortnamemustbeunique'] = 'この省略名はすでに別のサービスグループで使用されています。';
$string['apptokens'] = 'アプリケーション接続';
$string['apptokensdesc'] = 'ウェブサービスアクセスのトークンを生成します。';
$string['connections'] = '接続マネージャ';
$string['connectionsdesc'] = '既存のウェブサービス接続を管理します。';
$string['servicetokens'] = 'サービスアクセストークンを管理する';
$string['tokens'] = 'サービスアクセストークン';
$string['users'] = 'サービスユーザ';
$string['stdescription'] = 'アクセストークンを生成してユーザをサービスグループに割り当てます。';
$string['username'] = 'ユーザ';
$string['owner'] = 'オーナー';
$string['servicename'] = 'サービス';
$string['generate'] = 'トークンを生成する';
$string['invalidtoken'] = '無効なトークン: トークンが見つかりませんでした。';
$string['invalidtokennotsupplied'] = '無効なトークンが選択されたかトークンが提供されていません。';
$string['token'] = 'トークン';
$string['tokenid'] = 'トークン「 %s 」';
$string['invaliduserselected'] = '無効なユーザが選択されました。';
$string['invaliduserselectedinstitution'] = 'ユーザ検索から無効なユーザのトークンインスティテューションが選択されました。';
$string['noservices'] = 'サービスが設定されていません。';
$string['wssigenc'] = 'ウェブサービスセキュリティを有効にする (XML-RPCのみ)';
$string['titlewssigenc'] = 'ウェブサービスセキュリティ';
$string['last_access'] = '最終アクセス';
$string['verifier'] = 'ベリファイアトークン';
$string['oob'] = 'アウトオブバンドOAuth認証';
$string['oobinfo'] = '以下のコードは許可されたデータにあなたの外部アプリケーションがアクセスするための認証コードです。続けるには関連付けられているアプリケーションの入力欄にコードをコピー＆ペーストしてください。';
$string['instructions'] = 'インストラクション';
$string['webservicelogs'] = 'ウェブサービスログ';
$string['webservicelogsdesc'] = 'ウェブサービスのログを設定および表示します。';
$string['webservicelogsnav'] = 'ログ';
$string['timetaken'] = '所要時間';
$string['timelogged'] = 'いつ';
$string['info'] = '情報';
$string['errors'] = 'エラーのみ';
$string['manageserviceusers'] = 'サービスユーザを管理する';
$string['sudescription'] = 'ユーザにサービスグループおよびインスティテューションを割り当てます。 ユーザには1回のみ設定する必要があります。すべてのユーザは「ウェブサービス」認証方法を持つ必要があります。ユーザの「ウェブサービス」認証方法のインスタンスは所属しているインスティテューションのものを使用する必要があります。';
$string['serviceuser'] = 'サービスオーナー';
$string['serviceusername'] = 'サービスオーナー「 %s 」';
$string['invalidserviceuser'] = '無効なサービスユーザが選択されました。';
$string['nouser'] = 'ユーザを選択してください。';
$string['duplicateuser'] = 'すでにウェブサービスにユーザアカウントが設定されています。';
$string['servicefunctionlist'] = 'サービスに割り当てられている関数';
$string['sfldescription'] = 'このサービスで利用可能な関数一覧を作成します。';
$string['functionname'] = '関数名';
$string['classname'] = 'クラス名';
$string['methodname'] = 'メソッド名';
$string['invalidinput'] = '無効な入力です。';
$string['configsaved'] = '設定が保存されました。';
$string['webservices_title'] = 'ウェブサービス設定';
$string['headingusersearchtoken'] = 'ウェブサービス: トークンユーザ検索';
$string['headingusersearchuser'] = 'ウェブサービス: サービスユーザ検索';
$string['usersearchinstructions'] = 'アバタをクリックすることによりウェブサービスに関連付けられているユーザを選択してください。あなたはユーザの姓名のイニシャルをクリックまたは検索ボックスに名前を入力することによりユーザを検索できます。メールアドレスで検索したい場合、あなたは検索ボックスにメールアドレスを入力することもできます。';
$string['sha1fingerprint'] = 'SHA1フィンガープリント: %s';
$string['md5fingerprint'] = 'MD5フィンガープリント: %s';
$string['publickeyexpireson'] = '公開鍵有効期限: %s';
$string['function'] = '関数';
$string['wsdocdescription'] = '説明';
$string['method'] = 'メソッド';
$string['class'] = 'クラス';
$string['arguments'] = '変数';
$string['invalidparameter'] = '無効なパラメータ値が検出されたため実行を継続できません。';
$string['wsdoc'] = 'ウェブサービスドキュメンテーション';
$string['testclient'] = 'ウェブサービステストクライアント';
$string['testclientnav'] = 'テストクライアント';
$string['tokenauth'] = 'トークン';
$string['userauth'] = 'ユーザ';
$string['certauth'] = '証明書';
$string['wsseauth'] = 'WSSE';
$string['oauth1auth'] = 'OAuth1.x';
$string['authtype'] = '認証タイプ';
$string['sauthtype'] = '認証タイプ';
$string['enterparameters'] = '関数パラメータを入力してください。';
$string['testclientinstructions'] = 'これはウェブサービスのためのインタラクティブテストクライアント機能です。あなたは現在のシステムに対して関数を選択および実際に実行できます。あなたが実行するすべての関数は実際に動作することに留意してください。';
$string['executed'] = '関数コールが実行されました。';
$string['invaliduserpass'] = '「 %s 」に対して無効なウェブサービス名およびウェブサービスパスワードが提供されました。';
$string['iterationtitle'] = '%s イテレーション: %s';
$string['unabletoruntestclient'] = 'ウェブサービステストクライアントはhttpsの下で実運用モードで動作させるか、あなたのconfig.php内に「$cfg->productionmode = false」を記述する必要があります。';
$string['accesstokens'] = 'OAuthアクセストークン';
$string['notokens'] = 'あなたにはアプリケーショントークンがありません。';
$string['externalapps'] = '外部アプリ';
$string['externalappsdesc'] = 'ウェブサービスアクセスの外部アプリケーションを登録します。';
$string['oauth1'] = 'OAuth1.x';
$string['externalappsregister'] = '外部アプリ登録';
$string['userapplications1'] = '外部アプリ設定';
$string['accessto'] = 'アクセス対象';
$string['application'] = 'アプリケーション';
$string['callback'] = 'コールバックURI';
$string['consumer_key'] = 'コンシューマキー';
$string['consumer_secret'] = 'コンシューマ秘密鍵';
$string['add'] = '追加';
$string['oauthserverdeleted'] = 'サーバが削除されました。';
$string['oauthtokendeleted'] = 'アプリケーショントークンが削除されました。';
$string['errorregister'] = 'サーバ登録に失敗しました。';
$string['application_uri'] = 'アプリケーションURI';
$string['application_title'] = 'アプリケーションタイトル';
$string['errorupdate'] = '更新に失敗しました。';
$string['erroruser'] = '無効なユーザが指定されました。';
$string['authorise'] = 'アプリケーションアクセス権限を与える';
$string['oauth_access'] = 'このアプリケーションはあなたのユーザ詳細およびリソースにアクセスします。';
$string['oauth_instructions'] = 'あなたがこのアプリケーションにアクセス権限を与えたい場合、「アプリケーションアクセス権限を与える」をクリックしてください。あなたがアクセス権限を与えたくない場合、「キャンセル」をクリックしてください。';
$string['setauthinstancefailed'] = 'インスティテューション「 %s 」の「ウェブサービス」認証設定に失敗しました。「管理 -> インスティテューション -> 設定」ページで再度追加してください。';
$string['accesstofunctionnotallowed'] = '関数「 %s() 」へのアクセスは許可されていません。サービスが関数を含むことを有効にされているかどうか確認してください。サービス設定において: サービスが制限されている場合でもユーザがリストに記載されているかどうか確認してください。さらにサービス設定ではIP制限およびサービスにケイパビリティが必要かどうか確認されます。';
$string['accessexception'] = 'アクセスコントロール例外';
$string['accessnotallowed'] = 'ウェブサービスへのアクセスは許可されていません。';
$string['addfunction'] = '関数を追加する';
$string['addfunctions'] = '関数を追加する';
$string['addservice'] = '新しいサービスを追加する: {$a->name} (id: {$a->id})';
$string['apiexplorer'] = 'APIエクスプローラ';
$string['authmethod'] = '認証方法';
$string['context'] = 'コンテクスト';
$string['createtoken'] = 'トークンを作成する';
$string['createtokenforuser'] = 'ユーザのトークンを作成する';
$string['createuser'] = '特定のユーザを作成する';
$string['default'] = '「 %s 」のデフォルト';
$string['deleteservice'] = 'サービスを削除する: {$a->name} (id: {$a->id})';
$string['doc'] = 'ドキュメンテーション';
$string['documentation'] = 'ウェブサービスドキュメンテーション';
$string['enabledocumentation'] = '開発者ドキュメンテーションを有効にする';
$string['enableprotocols'] = 'プロトコルを有効にする';
$string['enablews'] = 'ウェブサービスを有効にする';
$string['error'] = 'エラー: %s';
$string['errorcodes'] = 'エラーメッセージ';
$string['errorinvalidparam'] = 'パラメータ「 %s 」が無効です。';
$string['errorinvalidparamsapi'] = '無効な外部APIパラメータです。';
$string['errorinvalidparamsdesc'] = '無効な外部API記述です。';
$string['errorinvalidresponseapi'] = '無効な外部APIレスポンスです。';
$string['errorinvalidresponsedesc'] = '無効な外部APIレスポンス記述です。';
$string['errormissingkey'] = '単一構造の必須キーがありません: %s';
$string['errornotemptydefaultparamarray'] = '名称「 %s 」のウェブサービス記述パラメータは単一または多重構造です。デフォルトは空の配列にのみできます。ウェブサービス記述を確認してください。';
$string['erroronlyarray'] = '配列のみ許可されます。';
$string['erroroptionalparamarray'] = '名称「 %s 」のウェブサービス記述パラメータは単一または多重構造です。VALUE_OPTIONALに設定することはできません。ウェブサービス記述を確認してください。';
$string['errorresponsemissingkey'] = 'レスポンスエラー: 次の単一構造の必須キーがありません: %s';
$string['errorscalartype'] = 'スカラ型が要求されましたが配列またはオブジェクトを受信しました。';
$string['errorunexpectedkey'] = 'パラメータ配列に予期されないキー (%s) が検出されました。';
$string['errorunexpectedcustomkey'] = 'パラメータ配列に予期されないカスタムキー (%s) が検出されました。これらはMaharaでは無視されます。このメッセージはあなたがパラメータをレビューして無視されていることに気付けるようにするだめだけの情報です。';
$string['execute'] = '実行';
$string['expires'] = '有効期限';
$string['externalservice'] = '外部サービス';
$string['generalstructure'] = '一般構造';
$string['information'] = '情報';
$string['invalidlogin'] = 'ログインに失敗しました。あなたのユーザ名およびパスワードを確認してください。';
$string['invalidaccount'] = '無効なウェブサービスアカウント: サービスユーザ設定を確認してください。';
$string['invalidextparam'] = '無効な外部APIパラメータ: %s';
$string['invalidextresponse'] = '無効な外部APIレスポンス: %s';
$string['invalidiptoken'] = '無効なトークン: あなたのIPはサポートされていません。';
$string['invalidtimedtoken'] = '無効なトークン: トークンの有効期限が切れています。';
$string['invalidtokensession'] = '無効なセッションベースのトークン: セッションが見つからないか有効期限が切れています。';
$string['iprestriction'] = 'IP制限';
$string['list'] = 'リスト';
$string['key'] = 'キー';
$string['missingpassword'] = 'パスワードがありません。';
$string['missingusername'] = 'ユーザ名がありません。';
$string['notoken'] = 'トークンリストが空です。';
$string['nowsprotocolsenabled'] = '有効にされているウェブサービスプロトコルがありません。あなたは少なくとも1つの<a href="%s">プロトコル</a>を有効にする必要があります。';
$string['onesystemcontrolling'] = '1システムがMahraをトークンでコントロールする';
$string['operation'] = '操作';
$string['optional'] = '任意';
$string['phpparam'] = 'XML-RPC (PHP構造体)';
$string['potusers'] = '認証済みユーザではありません。';
$string['print'] = 'すべてを印刷する';
$string['removefunction'] = '削除';
$string['required'] = '必須';
$string['resettokenconfirm'] = '本当にこのウェブサービスキー (<strong>{%s}</strong> - <strong>{%s}</strong>) をリセットしてもよろしいですか?';
$string['response'] = 'レスポンス';
$string['restcode'] = 'REST';
$string['restexception'] = 'REST';
$string['restparam'] = 'REST (POSTパラメータ)';
$string['restrictedusers'] = '認証済みユーザのみ';
$string['fortokenusers'] = 'ユーザトークンアクセス';
$string['usertokens'] = 'パーソナルユーザトークン';
$string['serviceaccess'] = 'サービスアクセス';
$string['tokenclient'] = 'クライアントアプリ';
$string['tokenclientunknown'] = '(未指定)';
$string['tokenmanuallycreated'] = '手動作成済み';
$string['gen'] = '生成';
$string['no_token'] = 'トークン未生成';
$string['token_generated'] = 'トークン生成済み';
$string['securitykey'] = 'セキュリティキー (トークン)';
$string['selectedcapability'] = '選択済み';
$string['selectspecificuser'] = '特定のユーザを選択する';
$string['service'] = 'サービス';
$string['serviceusers'] = '認証済みユーザ';
$string['servicenamelabel'] = '名称';
$string['servicenamedesc'] = 'このサービスグループに関する人間が読解可能な名称です。';
$string['serviceshortnamelabel'] = '省略名';
$string['serviceshortnamedesc'] = 'このサービスグループに関するコンピュータが解読可能な名称です。これは外部サービスがこのサービスグループを参照する必要がある場合に使用される名称です。';
$string['servicecomponentnote'] = 'このサービスはコンポーネント「 %s 」の機能を提供します。';
$string['simpleauthlog'] = '単純認証ログイン';
$string['step'] = 'ステップ';
$string['testclientdescshort'] = 'あなたのサイトに対して関数を実行することによりウェブサービスをテストします。';
$string['testclientdescription'] = '* ウェブサービステストクライアントは関数を<strong>実際</strong>に<strong>実行</strong>します。あなたが分からない関数はテストしないでください。
<br />
* まだ既存のウェブサービス関数すべてはテストクライアントに実装されていません。
<br />
* ユーザが関数にアクセスできないことを確認するためあなたは許可していない関数をテストできます。
<br />
* クリアなエラーメッセージを表示するには {$a->atag} でデバッギングを <strong>{$a->mode}</strong> に設定してください。
<br />
* {$a->amfatag}にアクセスしてください。';
$string['testwithtestclient'] = 'サービスをテストする';
$string['tokenauthlog'] = 'トークン認証';
$string['userasclients'] = 'クライアントトークンとしてのユーザ';
$string['validuntil'] = '有効期限';
$string['wrongusernamepassword'] = 'ユーザ名またはパスワードが正しくありません。';
$string['institutiondenied'] = 'インスティテューションへのアクセスが拒否されました。';
$string['wsauthnotenabled'] = 'ウェブサービス認証プラグインが無効にされています。';
$string['wsdocumentation'] = 'ウェブサービスドキュメンテーション';
$string['wspassword'] = 'ウェブサービスパスワード';
$string['wsusername'] = 'ウェブサービスユーザ名';
$string['webservicesenabled'] = 'ウェブサービス有効化済み';
$string['webservicesnotenabled'] = 'あなたは少なくとも1つのプロトコルを有効にする必要があります。';
$string['nooauth'] = 'OAuthには有効にされていません。';
$string['accessdenied'] = 'アクセスが拒否されました。';
$string['accessdeniedforinst'] = 'インスティテューション「 %s 」へのアクセスが拒否されました。';
$string['accessdeniedforinstuser'] = 'インスティテューション「 %s 」 (ユーザ 「 %s 」) へのアクセスが拒否されました。';
$string['accessdeniedforinstgroup'] = 'インスティテューション「 %s 」 (グループ「 %s 」) へのアクセスが拒否されました。';
$string['usernameexists2'] = 'ユーザ名「 %s 」は有効ではありません。';
$string['invalidauthtype'] = '無効な認証タイプ「 %s 」です。';
$string['invalidauthtypeuser'] = '無効な認証タイプ「 %s (ユーザ: %s)」 です。';
$string['invalidsocialprofile'] = '無効なソーシャルプロファイル「 %s 」です。';
$string['instexceedmax'] = '最大ユーザアカウント数を超えたインスティテューション「 %s 」';
$string['cannotdeleteaccount'] = '使用中および未保留のアカウントを削除することはできません。ユーザID「 %s 」';
$string['nousernameorid'] = 'ユーザ名またはIDがありません。';
$string['nousernameoridgroup'] = 'グループ「 %s 」のユーザ名またはIDがありません。';
$string['invaliduser'] = '無効なユーザ「 %s 」です。';
$string['invaliduserid'] = '無効なユーザID「 %s 」です。';
$string['invalidusergroup'] = '無効なユーザ「 %s (グループ: %s)」 です。';
$string['mustsetauth'] = 'ユーザ「 %s 」の認証を更新するには認証およびインスティテューションを設定する必要があります。';
$string['invalidusername'] = '無効なユーザ名「 %s 」です。';
$string['invalidremoteusername'] = '無効なリモートユーザ名「 %s 」です。';
$string['musthaveid'] = 'ID、ユーザIDまたはユーザ名が必要です。';
$string['notauthforuseridinstitution'] = 'ユーザID「 %s (インスティテューション: %s)」へのアクセスは許可されていません。';
$string['notauthforuseridinstitutiongroup'] = 'ユーザID「 %s (インスティテューション: %s)」からグループ「 %s 」へのアクセスは許可されていません。';
$string['invalidfavourite'] = '無効なお気に入り「 %s 」です。';
$string['groupexists'] = 'グループはすでに存在します: %s';
$string['instmustbeongroup'] = 'グループ「 %s 」にインスティテューションを設定する必要があります。';
$string['noname'] = '名称または省略名が指定されていません。';
$string['catinvalid'] = 'カテゴリ「 %s 」が無効です。';
$string['invalidjointype'] = '無効なJOINタイプの組み合わせです: %s';
$string['correctjointype'] = '正しいJOINタイプ (open, request, controlled) を選択する必要があります。';
$string['groupeditroles'] = '「 %s 」で指定したグループ編集ロールは次の中の1つである必要があります: %s';
$string['invalidmemroles'] = '無効なグループメンバーシップロール「 %s (ユーザ: %s) 」です。';
$string['groupnotexist'] = 'グループ「 %s 」は存在しません。';
$string['instmustset'] = '「 %s 」にインスティテューションを設定する必要があります。';
$string['nogroup'] = 'グループが指定されていません。';
$string['membersinvalidaction'] = '無効な操作「 %s 」です - ユーザ「 %s (グループ: %s)」';
$string['passwordmustbechangedviawebsite'] = 'あなたはパスワードを変更する必要があります。あなたのパスワードを更新するにはブラウザでログインしてください。';
$string['featuredisabled'] = 'ウェブサービス機能が有効にされていません。詳細情報に関してあなたのサイト管理者にご連絡ください。';
$string['institutionunknown'] = '- 不明 -';
$string['unabletodeleteadmin'] = '管理者であるためID「 %s 」のユーザを削除することはできません。';
$string['notuserblog'] = '日誌は「 %s 」によって所有されていません。';

?>
