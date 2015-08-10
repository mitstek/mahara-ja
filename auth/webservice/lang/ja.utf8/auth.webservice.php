<?php
/**
 *
 * @package    mahara
 * @subpackage lang (Japanese)
 * @translator Mitsuhiro Yoshida (http://mitstek.com/)
 * @started    2008-01-19 11:25:00 UTC
 * @updated    2015-08-10 04:13:49 UTC
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL version 3 or later
 * @copyright  For copyright information on Mahara, please see the README file distributed with this software.
 *
 */

defined('INTERNAL') || die();

$string['webservice'] = 'ウェブサービス';
$string['title'] = 'ウェブサービス';
$string['description'] = '記述';
$string['webservicesconfig'] = '設定';
$string['webservicesconfigdesc'] = 'ここであなたはウェブサービスのルールを変更およびサービスを有効または無効にすることができます。';
$string['completeregistration'] = '登録を完了する';
$string['emailalreadytaken'] = 'このメールアドレスはすでに登録されています。';
$string['iagreetothetermsandconditions'] = '私は使用条件に同意します。';
$string['passwordformdescription'] = 'あなたのパスワードには少なくとも半角6文字必要です。また、少なくとも1文字の数字および2文字の英字を含む必要があります。';
$string['passwordinvalidform'] = 'あなたのパスワードには少なくとも半角6文字必要です。また、少なくとも1文字の数字および2文字の英字を含む必要があります。';
$string['registeredemailsubject'] = 'あなたは %s に登録されました。';
$string['registeredemailmessagetext'] = '%s さん

%s への登録ありがとうございます。サインアップ処理を完了するには、次のリンクに従ってください:

%sregister.php?key=%s

メールに含まれているリンクは24時間のみ有効です。

--
%s チーム';
$string['registeredemailmessagehtml'] = '<p>%s さん</p>
<p>%s への登録ありがとうございます。サインアップ処理を完了するには、次のリンクに従ってください:</p>
<p><a href="%sregister.php?key=%s">%sregister.php?key=%s</a></p>
<p>メールに含まれているリンクは24時間のみ有効です。</p>

<pre>--
%s チーム</pre>';
$string['registeredok'] = '<p>あなたの登録が正常に完了しました。アカウントの有効化に関するインストラクションに関して、あなたのメールアカウントを確認してください。</p>';
$string['registrationnosuchkey'] = '申し訳ございません、このキーでの登録はできないようです。恐らく、登録を完了するため、あなたが24時間以上待機していたと思われます。そうでない場合、これは私たちに責任があります';
$string['registrationunsuccessful'] = '申し訳ございません、あなたの登録は正常に完了しませんでした。これは私たちに責任があります。もう一度お試しください。';
$string['usernamealreadytaken'] = '申し訳ございません、このユーザ名はすでに取得されています。';
$string['usernameinvalidform'] = 'ユーザ名には空白を除く、半角英数字および標準的な記号を使用することができます。また、ユーザ名の長さは半角3-30文字にしてください。空白は許可されません。';
$string['usernameinvalidadminform'] = 'ユーザ名には空白を除く、半角英数字および標準的な記号を使用することができます。また、ユーザ名の長さは半角3-236文字にしてください。空白は許可されません。';
$string['youmaynotregisterwithouttandc'] = '<a href="terms.php">使用条件</a>に従うことを同意しない限り、あなたは登録することができません。';
$string['control_webservices'] = 'ウェブサービスをOnまたはOffに切り替える:';
$string['masterswitch'] = 'ウェブサービスマスタースイッチ';
$string['protocolswitches'] = 'プロトコルOn/Offスイッチ';
$string['manage_protocols'] = 'このインストレーションによってサポートされるプロトコルを有効または無効にします:';
$string['protocol'] = 'プロトコル';
$string['rest'] = 'REST';
$string['soap'] = 'SOAP';
$string['xmlrpc'] = 'XML-RPC';
$string['manage_certificates'] = '<a href="%s">ネットワーキング</a>サービスの一部として生成された証明書です。これらの値は特定のウェブサービストークンまたはサービスユーザに対して、WS-Security署名および暗号化が有効にされた場合に使用されます (XML-RPCおよびレガシーMNetのみ)。';
$string['certificates'] = 'ネットワーク証明書';
$string['servicefunctiongroups'] = 'サービスグループを管理する';
$string['servicegroup'] = 'サービスグループ: %s';
$string['sfgdescription'] = '実行権限を与えられたユーザに割り当てることのできるサービスグループへの関数一覧を構築します。';
$string['name'] = '名称';
$string['component'] = 'コンポーネント';
$string['functions'] = '関数';
$string['enableservice'] = 'サービスを有効/無効にする';
$string['existingserviceusers'] = 'このサービスにサービスユーザがリンクされているため、トークンのみユーザにスイッチできません。';
$string['existingtokens'] = 'このサービスにトークンユーザが存在するため、認証済みサービスユーザにスイッチできません。';
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
$string['invalidretdesc'] = '無効な戻り記述です。';
$string['invalidparamdesc'] = '無効なパラメータ記述です。';
$string['missingretvaldesc'] = '戻り値の記述がありません。';
$string['missingparamdesc'] = 'パラメータ記述がありません。';
$string['missingimplofmeth'] = '「 %s 」のメソッドが実装されていません。';
$string['cannotfindimplfile'] = '外部関数が実装されたファイルを見つけることができませんでした。';
$string['apptokens'] = 'アプリケーション接続';
$string['servicetokens'] = 'サービスアクセストークンを管理する';
$string['tokens'] = 'サービスアクセストークン';
$string['users'] = 'サービスユーザ';
$string['stdescription'] = 'トークンを生成してユーザをサービスグループに割り当てます。';
$string['username'] = 'ユーザ';
$string['owner'] = 'オーナー';
$string['servicename'] = 'サービス';
$string['generate'] = 'トークンを生成する';
$string['invalidtoken'] = '無効なトークン: トークンが見つかりませんでした。';
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
$string['oobinfo'] = '以下のコードは許可されたデータにあなたの外部アプリケーションがアクセスするための認証コードです。続けるには、関連付けられているアプリケーションの入力欄にコードをコピー＆ペーストしてください。';
$string['instructions'] = 'インスティテューション';
$string['webservicelogs'] = 'ウェブサービスログ';
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
$string['sfldescription'] = 'このサービスに利用可能な関数一覧を構築します。';
$string['functionname'] = '関数名';
$string['classname'] = 'クラス名';
$string['methodname'] = 'メソッド名';
$string['invalidinput'] = '無効な入力です。';
$string['configsaved'] = '設定が保存されました。';
$string['webservices_title'] = 'ウェブサービス設定';
$string['headingusersearchtoken'] = 'ウェブサービストークンユーザ検索';
$string['headingusersearchuser'] = 'ウェブサービスサービスユーザ検索';
$string['usersearchinstructions'] = 'アバタをクリックすることにより、ウェブサービスに関連付けられているユーザを選択してください。あなたはユーザの姓名のイニシャルをクリックすることにより、または検索ボックスに名前を入力することにより、ユーザを検索することができます。メールアドレスで検索したい場合、あなたは検索ボックスにメールアドレスを入力することもできます。';
$string['sha1fingerprint'] = 'SHA1フィンガープリント: %s';
$string['md5fingerprint'] = 'MD5フィンガープリント: %s';
$string['publickeyexpireson'] = 'パブリックキー有効期限: %s';
$string['function'] = '関数';
$string['method'] = 'メソッド';
$string['class'] = 'クラス';
$string['arguments'] = '変数';
$string['invalidparameter'] = '無効なパラメータ値が検出されました。実行を継続できません。';
$string['wsdoc'] = 'ウェブサービスドキュメンテーション';
$string['testclient'] = 'ウェブサービステストクライアント';
$string['tokenauth'] = 'トークン';
$string['userauth'] = 'ユーザ';
$string['authtype'] = '認証タイプ';
$string['sauthtype'] = '認証タイプ';
$string['enterparameters'] = '関数パラメータを入力してください。';
$string['testclientinstructions'] = 'これはウェブサービスのためのインタラクティブテストクライアント機能です。あなたは現在のシステムに対して、関数を選択および実際に実行することができます。あなたが実行するすべての関数は実際に動作することに留意してください。';
$string['executed'] = '関数コールが実行されました。';
$string['invaliduserpass'] = '「 %s 」に対して、無効なウェブサービス名およびウェブサービスパスワードが提供されました。';
$string['accesstokens'] = 'OAuthアクセストークン';
$string['notokens'] = 'あなたにはアプリケーショントークンがありません。';
$string['oauth'] = 'OAuth';
$string['oauthv1sregister'] = 'OAuthサービス登録';
$string['userapplications'] = 'OAuthコンシューマキー';
$string['accessto'] = 'アクセス対象';
$string['application'] = 'アプリケーション';
$string['callback'] = 'コールバックURL';
$string['consumer_key'] = 'コンシューマキー';
$string['consumer_secret'] = 'コンシューマ秘密鍵';
$string['add'] = '追加';
$string['oauthserverdeleted'] = 'サーバが削除されました。';
$string['oauthtokendeleted'] = 'アプリケーショントークンが削除されました。';
$string['errorregister'] = 'サーバ登録に失敗しました。';
$string['serverkey'] = 'サーバキー: %s';
$string['application_uri'] = 'アプリケーションURL';
$string['application_title'] = 'アプリケーションタイトル';
$string['errorupdate'] = '更新に失敗しました。';
$string['erroruser'] = '無効なユーザが指定されました。';
$string['authorise'] = 'アプリケーションアクセス権限を与える';
$string['oauth_access'] = 'このアプリケーションはあなたのユーザ詳細およびリソースにアクセスします。';
$string['oauth_instructions'] = 'あなたがこのアプリケーションへのアクセス権限を与えたい場合、「アプリケーションアクセス権限を与える」をクリックしてください。あなたがアクセス権限を与えたくない場合、「キャンセル」をクリックしてください。';
$string['accesstofunctionnotallowed'] = '関数「 %s() 」へのアクセスは許可されていません。サービスが関数を含むことを有効にされているかどうか確認してください。サービス設定において、サービスが制限されている場合でもユーザがリストに記載されているかどうか確認してください。さらにサービス設定ではIP制限およびサービスにケイパビリティが必要かどうか確認されます。';
$string['accessexception'] = 'アクセスコントロール例外';
$string['accessnotallowed'] = 'ウェブサービスへのアクセスが許可されていません。';
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
$string['errornotemptydefaultparamarray'] = '名称「 %s 」のウェブサービス記述パラメータは単一または複数構造です。デフォルトは空の配列にのみすることができます。ウェブサービス記述を確認してください。';
$string['erroronlyarray'] = '配列のみ許可されます。';
$string['erroroptionalparamarray'] = '名称「 %s 」のウェブサービス記述パラメータは単一または複数構造です。VALUE_OPTIONALに設定することはできません。ウェブサービス記述を確認してください。';
$string['errorresponsemissingkey'] = 'レスポンスエラー: 次の単一構造の必須キーがありません: %s';
$string['errorscalartype'] = 'スカラ型が要求されましたが、配列またはオブジェクトを受信しました。';
$string['errorunexpectedkey'] = 'パラメータ配列に予期されないキー (%s) が検出されました。';
$string['execute'] = '実行';
$string['expires'] = '有効期限';
$string['externalservice'] = '外部サービス';
$string['failedtolog'] = 'ログインに失敗しました。';
$string['generalstructure'] = '一般構造';
$string['information'] = '情報';
$string['invalidaccount'] = '無効なウェブサービスアカウント: サービスユーザ設定を確認してください。';
$string['invalidextparam'] = '無効な外部APIパラメータ: %s';
$string['invalidextresponse'] = '無効な外部APIレスポンス: %s';
$string['invalidiptoken'] = '無効なトークン: あなたのIPはサポートされていません。';
$string['invalidtimedtoken'] = '無効なトークン: トークンの有効期限が切れています。';
$string['invalidtokensession'] = '無効なセッションベースのトークン: セッションが見つからない、または有効期限が切れています。';
$string['iprestriction'] = 'IP制限';
$string['key'] = 'キー';
$string['missingpassword'] = 'パスワードがありません。';
$string['missingusername'] = 'ユーザ名がありません。';
$string['notoken'] = 'トークンリストが空です。';
$string['nowsprotocolsenabled'] = '有効にされているウェブサービスがありません。あなたは少なくとも1つの<a href="%s">プロトコル</a>を有効にする必要があります。';
$string['onesystemcontrolling'] = '1システムがMahraをトークンでコントロールする';
$string['operation'] = '操作';
$string['optional'] = '任意';
$string['phpparam'] = 'XML-RPC (PHP構造体)';
$string['potusers'] = '認証済みユーザではありません。';
$string['print'] = 'すべてをプリントする';
$string['removefunction'] = '削除';
$string['required'] = '必須';
$string['resettokenconfirm'] = '本当にこのウェブサービスキー (<strong>{%s}</strong> - <strong>{%s}</strong>) をリセットしても宜しいですか?';
$string['response'] = 'レスポンス';
$string['restcode'] = 'REST';
$string['restexception'] = 'REST';
$string['restparam'] = 'REST (POSTパラメータ)';
$string['restrictedusers'] = '認証済みユーザのみ';
$string['fortokenusers'] = 'ユーザトークンアクセス';
$string['usertokens'] = 'パーソナルユーザトークン';
$string['serviceaccess'] = 'サービスアクセス';
$string['gen'] = '生成';
$string['no_token'] = 'トークンは生成されていません。';
$string['token_generated'] = 'トークンが生成されました。';
$string['securitykey'] = 'セキュリティキー (トークン)';
$string['selectedcapability'] = '選択済み';
$string['selectspecificuser'] = '特定のユーザを選択する';
$string['service'] = 'サービス';
$string['serviceusers'] = '認証済みユーザ';
$string['simpleauthlog'] = '単純認証';
$string['step'] = 'ステップ';
$string['testclientdescription'] = '* ウェブサービステストクライアントは関数を<strong>実際/strong>に<strong>実行</strong>します。あなたが分からない関数はテストしないでください。
<br/>
* まだ既存のウェブサービス関数すべてはテストクライアントに実装されていません。
<br/>
* ユーザが関数にアクセスできないことを確認するには、あなたが許可していない関数をテストすることができます。
<br/>
* クリアなエラーメッセージを表示するには、{$a->atag} でデバッギングを <strong>{$a->mode}</strong> に設定してください。
<br/>
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
$string['webservicesenabled'] = 'ウェブサービスが有効にされました。';
$string['webservicesnotenabled'] = 'あなたは少なくとも1つのプロトコルを有効にする必要があります。';
$string['nooauth'] = 'OAuthには有効にされていません。';
$string['accessdenied'] = 'アクセスが拒否されました。';
$string['accessdeniedforinst'] = 'インスティテューション「 %s 」のアクセスが拒否されました。';
$string['accessdeniedforinstuser'] = 'インスティテューション「 %s 」 (ユーザ 「 %s 」) のアクセスが拒否されました。';
$string['accessdeniedforinstgroup'] = 'インスティテューション「 %s 」 (グループ「 %s 」) のアクセスが拒否されました。';
$string['usernameexists'] = 'ユーザ名はすでに存在します: %s';
$string['invalidauthtype'] = '無効な認証タイプ「 %s 」です。';
$string['invalidauthtypeuser'] = '無効な認証タイプ「 %s (ユーザ: %s)」 です。';
$string['instexceedmax'] = '最大ユーザアカウント数を超えたインスティテューション「 %s 」';
$string['cannotdeleteaccount'] = '使用中および未保留のアカウントを削除することはできません。ユーザID「 %s 」';
$string['nousernameorid'] = 'ユーザ名またはIDがありません。';
$string['nousernameoridgroup'] = 'グループ「 %s 」のユーザ名またはIDがありません。';
$string['invaliduser'] = '無効なユーザ「 %s 」です。';
$string['invaliduserid'] = '無効なユーザID「 %s 」です。';
$string['invalidusergroup'] = '無効なユーザ「 %s (グループ: %s)」 です。';
$string['mustsetauth'] = 'ユーザ「 %s 」の認証を更新するには、認証およびインスティテューションを設定する必要があります。';
$string['invalidusername'] = '無効なユーザ名「 %s 」です。';
$string['invalidremoteusername'] = '無効なリモートユーザ名「 %s 」です。';
$string['musthaveid'] = 'ID、ユーザIDまたはユーザ名が必要です。';
$string['notauthforuseridinstitution'] = 'ユーザID「 %s (インスティテューション: %s)」へのアクセスは認証されていません。';
$string['notauthforuseridinstitutiongroup'] = 'ユーザID「 %s (インスティテューション: %s)」からグループ「 %s 」へのアクセスは認証されていません。';
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
$string['nogroup'] = 'グループが選択されていません。';
$string['membersinvalidaction'] = '無効な操作「 %s 」です - ユーザ「 %s (グループ: %s)」';

?>
