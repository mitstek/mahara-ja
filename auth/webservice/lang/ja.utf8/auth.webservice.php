<?php
/**
 *
 * @package    mahara
 * @subpackage lang (Japanese)
 * @translator Mitsuhiro Yoshida (https://mitstek.com/)
 * @started    2008-01-19 11:25:00 UTC
 * @updated    2025-02-10 01:23:03 UTC
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL version 3 or later
 * @copyright  For copyright information on Mahara, please see the README file distributed with this software.
 *
 */

defined('INTERNAL') || die();

$string['webservice'] = 'ウェブサービス';
$string['title'] = 'ウェブサービス';
$string['description'] = 'Maharaデータベースで認証されたウェブサービスのみのユーザ';
$string['webservicesconfig'] = '設定';
$string['webservicesconfigdesc'] = 'ここであなたは様々なウェブサービスルールを変更、有効または無効にできます。';
$string['completeregistration'] = '登録を完了する';
$string['emailalreadytaken'] = 'このメールアドレスはすでにここで登録されています。';
$string['iagreetothetermsandconditions'] = '私は利用条件に同意します。';
$string['passwordformdescription'] = 'あなたのパスワードには少なくとも半角6文字必要です。また、少なくとも1文字の数字および2文字の英字を含む必要があります。';
$string['passwordinvalidform'] = 'あなたのパスワードには少なくとも半角6文字必要です。また、少なくとも1文字の数字および2文字の英字を含む必要があります。';
$string['registeredemailsubject'] = 'あなたは %s に登録されました。';
$string['registeredemailmessagetext'] = '%s さん

%s へのご登録ありがとうございます。サインアップ手続きを完了するには次のリンクにアクセスしてください:

%sregister.php?key=%s

リンクは24時間で有効期限切れとなります。

--
%s チーム';
$string['registeredemailmessagehtml'] = '<p>%s さん</p>
<p>%s へのご登録ありがとうございます。サインアップ手続きを完了するには次のリンクにアクセスしてください:</p>
<p><a href="%sregister.php?key=%s">%sregister.php?key=%s</a></p>
<p>リンクは24時間で有効期限切れとなります。</p>

<pre>--
%s チーム</pre>';
$string['registeredok'] = '<p>あなたの登録が正常に完了しました。あなたのアカウントを有効化するためのインストラクションをメールアカウントでご確認ください。</p>';
$string['registrationnosuchkey'] = '申し訳ございません、このキーでの登録はできないようです。恐らく、あなたが登録を完了するため24時間以上待機していたと思われます。そうでない場合、これは私たちに責任があります。';
$string['registrationunsuccessful'] = '申し訳ございません、あなたの登録は正常に完了しませんでした。これは私たちに責任があります。再度お試しください。';
$string['usernamealreadytaken'] = '申し訳ございません、このユーザ名はすでに取得されています。';
$string['usernameinvalidform'] = 'ユーザ名には空白を除く半角英数字および一般的な記号を使用できます。また、ユーザ名の長さは半角3-30文字にしてください。空白は許可されません。';
$string['usernameinvalidadminform'] = 'ユーザ名には空白を除く半角英数字および一般的な記号を使用できます。また、ユーザ名の長さは半角3-236文字にしてください。空白は許可されません。';
$string['youmaynotregisterwithouttandc'] = '<a href="terms.php">利用条件</a>に従うことに同意しない限り、あなたは登録できません。';
$string['control_webservices'] = 'ウェブサービスをOnまたはOffに切り替える:';
$string['masterswitch'] = 'ウェブサービスマスタスイッチ';
$string['protocolswitches'] = 'プロトコルをOnまたはOffに切り替える';
$string['manage_protocols'] = 'このインストレーションによりサポートされるプロトコルを有効または無効にします:';
$string['protocol'] = 'プロトコル';
$string['rest'] = 'REST';
$string['soap'] = 'SOAP';
$string['xmlrpc'] = 'XML-RPC';
$string['manage_certificates'] = '<a href="%s">ネットワーキング</a>サービスの一部として生成された証明書です。これらの値は特定のウェブサービストークンまたはサービスユーザに対してウェブサービスセキュリティ署名および暗号化が有効にされた場合にMaharaで使用されます (XML-RPCおよびレガシMNetのみ)。';
$string['certificates'] = 'ネットワーク証明書';
$string['servicefunctiongroups'] = 'サービスグループを管理する';
$string['servicegroup'] = 'サービスグループ: %s';
$string['sfgdescription'] = '実行権限を与えられたユーザに割り当てることのできるサービスグループへの関数一覧を作成します。';
$string['name'] = '名称';
$string['component'] = 'コンポーネント';
$string['functions'] = '関数';
$string['enableservice'] = 'サービスを有効または無効にする';
$string['existingserviceusers'] = 'このサービスにサービスユーザがリンクされているためトークンのみユーザにスイッチできません。';
$string['existingtokens'] = 'このサービスにトークンユーザが存在するため、認証済みサービスユーザにスイッチできません。';
$string['usersonly'] = 'ユーザのみ';
$string['tokensonly'] = 'トークンのみ';
$string['switchtousers'] = 'ユーザにスイッチする';
$string['switchtotokens'] = 'トークンにスイッチする';
$string['invalidservice'] = '無効なサービスが選択されました。';
$string['invalidfunction'] = '無効な関数が選択されました。';
$string['tokengenerationfailed'] = 'トークン生成に失敗しました。';
$string['parametercannotbevalueoptional'] = 'パラメータは任意の値にできません。';
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
$string['cannotfindimplfile'] = '外部関数を実装したファイルが見つかりません。';
$string['apptokens'] = 'アプリケーション接続';
$string['servicetokens'] = 'サービスアクセストークンを管理する';
$string['tokens'] = 'サービスアクセストークン';
$string['users'] = 'サービスユーザ';
$string['stdescription'] = 'アクセストークンを生成してユーザをサービスグループに割り当てます。';
$string['username'] = 'ユーザ';
$string['owner'] = 'オーナ';
$string['servicename'] = 'サービス';
$string['generate'] = 'トークンを生成する';
$string['invalidtoken'] = '無効なトークン: トークンは見つかりませんでした。';
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
$string['timetaken'] = '所要時間';
$string['timelogged'] = 'いつ';
$string['info'] = '情報';
$string['errors'] = 'エラーのみ';
$string['manageserviceusers'] = 'サービスユーザを管理する';
$string['sudescription'] = 'ユーザをサービスグループおよびインスティテューションに割り当てます。ユーザには1回のみ設定する必要があります。すべてのユーザは「ウェブサービス」認証方法を持つ必要があります。ユーザの「ウェブサービス」認証方法のインスタンスは所属しているインスティテューションのものを使用する必要があります。';
$string['serviceuser'] = 'サービスオーナ';
$string['serviceusername'] = 'サービスオーナ「 %s 」';
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
$string['tokenauth'] = 'トークン';
$string['userauth'] = 'ユーザ';
$string['authtype'] = '認証タイプ';
$string['sauthtype'] = '認証タイプ';
$string['enterparameters'] = '関数パラメータを入力してください。';
$string['testclientinstructions'] = 'これはウェブサービスのためのインタラクティブテストクライアント機能です。あなたは現在のシステムに対して関数を選択および実際に実行できます。あなたが実行する「すべて」の関数は実際に動作することに留意してください。';
$string['executed'] = '関数コールが実行されました。';
$string['invaliduserpass'] = '「 %s 」に対して無効なウェブサービス名およびウェブサービスパスワードが提供されました。';
$string['accesstokens'] = 'OAuthアクセストークン';
$string['notokens'] = 'あなたにはアプリケーショントークンがありません。';
$string['oauth'] = 'OAuth';
$string['oauthv1sregister'] = 'OAuthサービス登録';
$string['userapplications'] = 'OAuthコンシューマキー';
$string['accessto'] = 'アクセス対象';
$string['application'] = 'アプリケーション';
$string['callback'] = 'コールバックURI';
$string['consumer_key'] = 'コンシューマキー';
$string['consumer_secret'] = 'コンシューマシークレット';
$string['add'] = '追加';
$string['oauthserverdeleted'] = 'サーバが削除されました。';
$string['oauthtokendeleted'] = 'アプリケーショントークンが削除されました。';
$string['errorregister'] = 'サーバ登録に失敗しました。';
$string['serverkey'] = 'サーバキー: %s';
$string['application_uri'] = 'アプリケーションURI';
$string['application_title'] = 'アプリケーションタイトル';
$string['errorupdate'] = '更新に失敗しました。';
$string['erroruser'] = '無効なユーザが指定されました。';
$string['authorise'] = 'アプリケーションアクセス権を与える';
$string['oauth_access'] = 'このアプリケーションはあなたのユーザ詳細およびリソースにアクセスできます。';
$string['oauth_instructions'] = 'あなたがこのアプリケーションにアクセス権を与えたい場合、「アプリケーションアクセス権を与える」をクリックしてください。あなたがアクセス権を与えたくない場合、「キャンセル」をクリックしてください。';
$string['accesstofunctionnotallowed'] = '関数「 %s() 」へのアクセスは許可されていません。その関数を含むサービスが有効にされているかどうか確認してください。サービス設定において: サービスが制限されている場合でもユーザがリストに記載されているかどうか確認してください。さらにサービス設定ではIP制限およびサービスにケイパビリティが必要かどうか確認してください。';
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
$string['errorinvalidparam'] = 'パラメータ「 %s 」は無効です。';
$string['errorinvalidparamsapi'] = '無効な外部APIパラメータです。';
$string['errorinvalidparamsdesc'] = '無効な外部APIレスポンス記述です。';
$string['errorinvalidresponseapi'] = '無効な外部APIレスポンスです。';
$string['errorinvalidresponsedesc'] = '無効な外部APIレスポンス記述です。';
$string['errormissingkey'] = '単一構造の必須キーがありません: %s';
$string['errornotemptydefaultparamarray'] = '名称「 %s 」のウェブサービス記述パラメータは単一または複数構造です。デフォルトは空の配列にのみできます。ウェブサービス記述を確認してください。';
$string['erroronlyarray'] = '配列のみ許可されます。';
$string['erroroptionalparamarray'] = '名称「 %s 」のウェブサービス記述パラメータは単一または複数構造です。VALUE_OPTIONALとしては設定できません。ウェブサービス記述を確認してください。';
$string['errorresponsemissingkey'] = 'レスポンスエラー: 次の単一構造の必須キーがありません: %s';
$string['errorscalartype'] = 'スカラ型が要求されましたが、配列またはオブジェクトを受け取りました。';
$string['errorunexpectedkey'] = 'パラメータ配列に予期しないキー (%s) が検出されました。';
$string['execute'] = '実行';
$string['expires'] = '有効期限';
$string['externalservice'] = '外部サービス';
$string['failedtolog'] = 'ログインに失敗しました。';
$string['generalstructure'] = '全体構造';
$string['information'] = '情報';
$string['invalidaccount'] = '無効なウェブサービスアカウント: サービスユーザ設定を確認してください。';
$string['invalidextparam'] = '無効な外部APIパラメータ: %s';
$string['invalidextresponse'] = '無効な外部APIレスポンス: %s';
$string['invalidiptoken'] = '無効なトークン: あなたのIPはサポートされていません。';
$string['invalidtimedtoken'] = '無効なトークン: トークンの有効期限が切れています。';
$string['invalidtokensession'] = '無効なセッションベーストークン: セッションが見つからないか有効期限が切れています。';
$string['iprestriction'] = 'IP制限';
$string['key'] = 'キー';
$string['missingpassword'] = 'パスワードがありません。';
$string['missingusername'] = 'ユーザ名がありません。';
$string['notoken'] = 'トークンリストが空です。';
$string['nowsprotocolsenabled'] = '有効にされているウェブサービスプロトコルはありません。あなたは少なくとも1つの<a href="%s">プロトコル</a>を有効にする必要があります。';
$string['onesystemcontrolling'] = '1システムがMaharaをトークンでコントロールする';
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
$string['gen'] = '生成';
$string['no_token'] = 'トークン未生成';
$string['token_generated'] = 'トークン生成済み';
$string['securitykey'] = 'セキュリティキー (トークン)';
$string['selectedcapability'] = '選択済み';
$string['selectspecificuser'] = '特定のユーザを選択する';
$string['service'] = 'サービス';
$string['serviceusers'] = '認証済みユーザ';
$string['simpleauthlog'] = 'シンプル認証ログイン';
$string['step'] = 'ステップ';
$string['testclientdescription'] = '* ウェブサービステストクライアントは関数を<strong>実際</strong>に<strong>実行</strong>します。あなたが分からない関数はテストしないでください。
<br>
* まだ既存のウェブサービス関数すべてはテストクライアントに実装されていません。
<br>
* ユーザが関数にアクセスできないことを確認するためあなたが許可していない関数をテストできます。
<br>
* クリアなエラーメッセージを表示するには {$a->atag} でデバッギングを <strong>{$a->mode}</strong> に設定してください。
<br>
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
$string['nooauth'] = 'OAuthには有効にされていません。';
$string['accessdenied'] = 'アクセスが拒否されました。';
$string['accessdeniedforinst'] = 'インスティテューション「 %s 」のアクセスが拒否されました。';
$string['accessdeniedforinstuser'] = 'インスティテューション「 %s 」 (ユーザ 「 %s 」) へのアクセスが拒否されました。';
$string['accessdeniedforinstgroup'] = 'インスティテューション「 %s 」 (グループ「 %s 」) へのアクセスが拒否されました。';
$string['usernameexists'] = 'ユーザ名はすでに存在します: %s';
$string['invalidauthtype'] = '無効な認証タイプ「 %s 」です。';
$string['invalidauthtypeuser'] = '無効な認証タイプ「 %s (ユーザ: %s)」 です。';
$string['instexceedmax'] = 'インスティテューションが許容される最大値 「 %s 」 を超えました。';
$string['cannotdeleteaccount'] = '使用中および利用停止されていないアカウントは削除できません。アカウントID「 %s 」';
$string['nousernameorid'] = 'ユーザ名またはIDがありません。';
$string['nousernameoridgroup'] = 'グループ「 %s 」のユーザ名またはIDがありません。';
$string['invaliduser'] = '無効なアカウント「 %s 」です。';
$string['invaliduserid'] = '無効なアカウントID「 %s 」です。';
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
$string['catinvalid'] = 'カテゴリ「 %s 」が有効ではありません。';
$string['invalidjointype'] = '無効なJOINタイプの組み合わせです: %s';
$string['correctjointype'] = '正しいJOINタイプ (open, request, controlled) を選択する必要があります。';
$string['groupeditroles'] = '「 %s 」で指定したグループ編集ロールは次の中の1つである必要があります: %s';
$string['invalidmemroles'] = '無効なグループメンバシップロール「 %s (ユーザ: %s) 」です。';
$string['groupnotexist'] = 'グループ「 %s 」は存在しません。';
$string['instmustset'] = '「 %s 」にインスティテューションを設定する必要があります。';
$string['nogroup'] = 'グループが指定されていません。';
$string['membersinvalidaction'] = '無効な操作「 %s 」です - ユーザ「 %s (グループ: %s)」';

?>
