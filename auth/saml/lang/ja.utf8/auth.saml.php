<?php
/**
 *
 * @package    mahara
 * @subpackage lang (Japanese)
 * @translator Mitsuhiro Yoshida (https://mitstek.com/)
 * @started    2008-01-19 11:25:00 UTC
 * @updated    2026-06-15 00:41:08 UTC
 * @license    https://www.gnu.org/licenses/gpl-3.0.html GNU GPL version 3 or later
 * @copyright  For copyright information on Mahara, please see the README file distributed with this software.
 *
 */

defined('INTERNAL') || die();

$string['attributemapfilenotamap'] = '属性マップファイル「 %s 」で属性マップが定義されていません。';
$string['attributemapfilenotfound'] = '属性マップファイルがないか書き込み権がありません: %s';
$string['currentcertificate'] = 'SAMLサービスプロバイダ署名および暗号化証明書';
$string['oldcertificate'] = '古いSAMLサービスプロバイダ署名および暗号化証明書';
$string['newcertificate'] = '新しいSAMLサービスプロバイダ署名および暗号化証明書';
$string['confirmdeleteidp'] = '本当にこのアイデンティティプロバイダを削除してもよろしいですか?';
$string['spmetadata'] = 'サービスプロバイダメタデータ';
$string['metadatavewlink'] = '<a href="%s">メタデータを表示する</a>';
$string['newpublickey'] = '新しい公開鍵';
$string['ssphpnotconfigured'] = 'SimpleSAMLphpが設定されていません。';
$string['manage_certificate2'] = 'これはSAMLサービスプロバイダの一部として生成された証明書です。';
$string['manage_new_certificate'] = 'これはSAMLサービスプロバイダの一部として生成された新しい証明書です。
<br>
新旧証明書ともに有効です。すべてのアデンティティプロバイダに新しい証明書を通知した後、あなたは「古い証明書を削除する」ボタンで古い証明書を削除できます。';
$string['nullprivatecert'] = '秘密鍵を保存できませんでした。';
$string['nullpubliccert'] = '公開証明書を保存できませんでした。';
$string['defaultinstitution'] = 'デフォルトインスティテューション';
$string['description'] = 'SAML 2.0アイデンティティプロバイダサービスで認証する';
$string['disco'] = 'アイデンティティプロバイダディスカバリ';
$string['errorbadinstitution'] = 'アカウント接続のためのインスティテューションが解決されていません。';
$string['errorbadssphp'] = '無効なSimpleSAMLphpセッションハンドラです: PHPセッションを使用しないでください。';
$string['errorbadssphpmetadata'] = '無効なSimpleSAMLphp設定です: アイデンティティプロバイダメタデータが設定されていません。';
$string['errorbadssphpspentityid'] = '無効なサービスプロバイダエンティティIDです。';
$string['errorextrarequiredfield'] = '「こちらでアカウントを自動作成する」が有効にされている場合、このフィールドは必須です。';
$string['errorretryexceeded'] = '再試行の最大回数 (%s) を越えました: アイデンティティサービスに問題があります。';
$string['errnosamluser'] = 'アカウントは見つかりませんでした。';
$string['errorssphpsetup'] = 'SAMLが正しく設定されていません。あなたは最初にコマンドラインから「make ssphp」を実行する必要があります。';
$string['errorbadlib'] = 'SimpleSAMLphpライブラリの「autoloader」ファイルが %s で見つかりませんでした。<br>「make ssphp」でSimpleSAMLphpをインストールしてファイルを読めることを確認してください。';
$string['errorbadmodule'] = 'SimpleSAMLPHPモジュール「 %s 」が見つかりませんでした。<br>モジュールのインストールおよび有効化を確認してください。';
$string['errorupdatelib'] = 'あなたの現在のSimpleSAMLphpライブラリは旧バージョンです。あなたは「make cleanssphp && make ssphp」を実行する必要があります。';
$string['errornovalidsessionhandler'] = 'SimpleSAMLphpセッションハンドラの設定が正しくないか現在サーバを利用できません。';
$string['errornomemcache'] = 'auth/samlのためのMemcacheの設定が正しくないか現在Memcacheサーバを利用できません。';
$string['errornomemcache7php'] = 'auth/samlのためのMemcacheの設定が正しくないか現在Memcacheサーバを利用できません。';
$string['errorbadconfig'] = 'SimpleSAMLphp設定ディレクトリ %s が正しくありません。';
$string['errorbadmetadata1'] = '不正なSAMLメタデータです。次の問題が検出されました: %s';
$string['errorbadinstitutioncombo'] = 'このインスティテューション属性およびインスティテューション値の組み合わせの認証インスタンスはすでに存在します。';
$string['errormissingmetadata'] = 'あなたは新しいアイデンティティプロバイダメタデータの追加を選択しましたが何も提供されていません。';
$string['errormissinguserattributes1'] = 'あなたは認証されているようですが、私たちは必要なユーザ属性を受け取っていません。あなたのアイデンティティプロバイダがSSOの姓名およびメールアドレスフィールドを %s にリリースしているか確認してください。または管理者にご連絡ください。';
$string['errorregistrationenabledwithautocreate1'] = 'セキュリティ上の理由から、あなたがリモートユーザ名を使用している場合を除き、アカウント自動作成は除外されます。';
$string['errorremoteuser1'] = '「usersuniquebyusername」が無効にされた場合、「remoteuser」との合致は必須です。';
$string['IdPSelection'] = 'アイデンティティプロバイダ選択';
$string['noidpsfound'] = 'アイデンティティプロバイダなし';
$string['idpentityid'] = 'アイデンティティプロバイダエンティティ';
$string['idpentityadded'] = 'このSAMLインスタンスのアイデンティティプロバイダメタデータを追加しました。';
$string['idpentityupdated'] = 'このSAMLインスタンスのアイデンティティプロバイダメタデータを更新しました。';
$string['idpentityupdatedduplicates'] = 'このSAMLインスタンスおよび他の %s インスタンスのアイデンティティプロバイダメタデータを更新しました。';
$string['metarefresh_metadata_url'] = '自動更新用メタデータURL';
$string['auth_config.metarefresh_metadata_url_help'] = '<h1>自動更新用メタデータURL</h1>
<p>有効なURLが提供されている場合、最新のSAMLメタデータが自動的にダウンロードおよび保存されるため、手動で更新する必要がなくなります。メタデータをチェックするにはcronが実行されている必要があります。このURLから取得したデータは手動入力したXMLメタデータよりも優先されます。</p>';
$string['metarefresh_metadata_signature'] = 'メタデータ署名正当性確認';
$string['auth_config.metarefresh_metadata_signature_help'] = '<h1>メタデータ署名正当性確認</h1>
<p>メタデータ更新URLが設定されている場合、メタデータの署名に使用された証明書のフィンガープリントを入力してください。署名の検証が不要な場合、空白のままにしてください。</p>';
$string['metadatarefreshfailed_subject'] = 'メタデータ自動更新失敗';
$string['metadatarefreshfailed_body'] = 'SAMLメタデータの自動更新を完了できませんでした。詳細はcronログを確認してください。エラーレスポンスは次のように表示される場合があります:';
$string['idpprovider'] = 'プロバイダ';
$string['idptable'] = 'インストール済みアイデンティティプロバイダ';
$string['institutionattribute'] = 'インスティテューション属性 (%s を含む)';
$string['auth_config.institutionattribute_help'] = '<h1>インスティテューション属性</h1>
<p>人がどのインスティテューションに属しているかを示すIDプロバイダから渡された属性です (例:「eduPersonOrgDN」)。</p>';
$string['institutionidp'] = 'インスティテューションアイデンティティプロバイダSAMLメタデータ';
$string['auth_config.institutionidp_help'] = '<h1>インスティテューションアイデンティティプロバイダSAMLメタデータ</h1>
<p>あなたが接続したいIDプロバイダのXML形式のメタデータを入力してください。</p>
<p>新しいアイデンティティプロバイダを追加するには「利用可能なアイデンティティプロバイダ」から「新しいアイデンティティプロバイダを追加する」を選択した後、このフィールドにメタデータを入力してください。</p>アイデンティティアイデンティティ
<p>既存のアイデンティティプロバイダを使用するには「利用可能なアイデンティティプロバイダ」から選択してください。あなたがメタデータに加えた変更は使用するすべてのインスティテューションに影響するため、編集には注意してください。</p>';
$string['institutionidpentity'] = '利用可能なアイデンティティプロバイダ';
$string['institutions'] = 'インスティテューション';
$string['institutionvalue'] = 'インスティテューションチェック値';
$string['auth_config.institutionvalue_help'] = '<h1>インスティテューションチェック値</h1>
<p>アイデンティティプロバイダの「インスティテューション属性」と照合して人がどのインスティテューションに属しているかを判断する値です。「インスティテューション省略名で部分的に文字列一致させる」が有効にされている場合、この値は正規表現にできます。</p>';
$string['libchecks'] = '正しいライブラリがインストールされているか確認する: %s';
$string['link'] = 'アカウントをリンクする';
$string['linkaccounts'] = 'リモートアカウント「 %s 」をローカルアカウント「 %s 」とリンクしてもよろしいですか?';
$string['loginlink'] = '自分のアカウントにリンクする';
$string['auth_config.loginlink_help'] = '<h1>自分のアカウントにリンクする</h1>
<p>この設定を有効にした場合、人はローカルアカウントをSAMLアカウントにリンクできるようになります。これには「ユーザ名属性をリモートユーザ名に合致させる」を有効にする必要があります。</p>';
$string['logintolink'] = '%s にローカルログインしてリモートアカウントにリンクする';
$string['logintolinkdesc'] = '<p><b>現在、あなたはリモートアカウント「 %s 」としてログインしています。リモートアカウントとリンクするにはあなたのローカルアカウントでログインしてください。あなたが %s にアカウントを持っていない場合、登録してください。</b></p>';
$string['logo'] = 'ロゴ';
$string['institutionregex'] = 'インスティテューション省略名で部分的に文字列一致させる';
$string['auth_config.institutionregex_help'] = '<h1>インスティテューション省略名で部分的に文字列一致させる</h1>
<p>この設定を有効にした場合、「インスティテューションチェック値」の値は正規表現として扱われます。</p>';
$string['login'] = 'SSO';
$string['newidpentity'] = '新しいアイデンティティプロバイダを追加する';
$string['notusable'] = 'SimpleSAMLphpライブラリをインストールしてセッション用にMemcacheサーバを設定ください。';
$string['obsoletesamlplugin'] = 'auth/samlプラグインを再設定する必要があります。<a href="%s">プラグイン設定</a>フォームでプラグインを更新してください。';
$string['obsoletesamlinstance'] = 'SAML認証インスタンス <a href="%s">%s</a> (「 %s 」インスティテューション) を更新する必要があります。';
$string['reallyreallysure1'] = 'あなたはMaharaのサービスプロバイダメタデータを保存しようとしています。これは元には戻せません。すべてのアイデンティティプロバイダとあなたの新しいメタデータを再共有するまでは既存のSAMLログインは機能しません。';
$string['reset'] = 'メタデータをリセットする';
$string['resetmetadata'] = 'Maharaのメタデータの証明書をリセットします。これは元には戻せません。また、あなたのメタデータをアイデンティティプロバイダと再共有する必要があります。';
$string['samlconfig'] = 'SAML設定';
$string['samlfieldforemail'] = 'メールアドレスのSSOフィールド';
$string['auth_config.emailfield'] = '<h1>メールアドレスのSSOフィールド</h1><p>アイデンティティプロバイダから渡されたメールアドレスを含む属性名です。</p>';
$string['samlfieldforfirstname'] = '名属性';
$string['auth_config.firstnamefield_help'] = '<h1>名属性</h1><p>アイデンティティプロバイダから渡された名を含む属性名です。</p>';
$string['samlfieldforsurname'] = '姓属性';
$string['auth_config.surnamefield_help'] = '<h1>姓属性</h1><p>アイデンティティプロバイダから渡された姓を含む属性名です。</p>';
$string['samlfieldforstudentid'] = 'ID属性';
$string['auth_config.studentidfield_help'] = '<h1>ID属性</h1><p>アイデンティティプロバイダから渡された (学生) IDを含む属性名です。</p>';
$string['samlfieldforavatar'] = 'アバタアイコン属性';
$string['auth_config.avatar_help'] = '<h1>アバタアイコン属性</h1><p>アイデンティティプロバイダから渡されるアバタアイコン属性を含む属性名です。</p><p>アバタはBase64エンコードされた画像文字列でなければなりません。</p>';
$string['samlfieldforrole'] = 'ロールのSSOフィールド';
$string['samlfieldforroleprefix'] = 'ロール接頭辞属性';
$string['auth_config.roleprefix_help'] = '<h1>ロール接頭辞属性</h1><p>アイデンティティプロバイダがロール情報を渡す場合、ここで接頭辞を設定してその接頭辞で始まるロールのみがMaharaに処理されるようにします。これによりアイデンティティプロバイダは異なるサービスプロバイダに異なるロールを割り当てできます。この接頭辞に一致するロールを持つ人のみがログインできます。</p>';
$string['samlfieldforidaffiliations'] = 'アフィリエーションID属性';
$string['auth_config.idaffiliations_help'] = '<h1>アフィリエーションID属性</h1><p>アイデンティティプロバイダプロバイダはアカウント保持者のアフィリエーション情報を渡せます。このフィールドは以下と連携します:</p>
<ul>
  <li>アフィリエーションメール属性</li>
  <li>アフィリエーションロール属性</li>
  <li>アフィリエーションロールデリミタ属性</li>
</ul>
<p>設定した場合、最初にユーザ名がチェックされます。次に関連するIDがチェックされてシステム内で一致するものが見つかるまでチェックが続けられます。一致するものが見つからない場合、メインIDのユーザ名がリモートユーザ名として使用されます。</p>';
$string['samlfieldforemailaffiliations'] = 'アフィリエーションメール属性';
$string['auth_config.emailaffiliations_help'] = '<h1>アフィリエーションメール属性</h1><p>アイデンティティプロバイダはアカウント保持者のアフィリエーション情報を渡せます。このフィールドは以下と連携します:</p>
<ul>
  <li>アフィリエーションID属性</li>
  <li>アフィリエーションロール属性</li>
  <li>アフィリエーションロールデリミタ属性</li>
</ul>
<p>設定した場合、システムは最も高いアフィリエーションロールを識別します。その人の初回ログイン時に関連するメールアドレスを主メールアドレスとして設定します。空白のままにした場合、代わりに「メール属性」の値が使用されます。</p>';
$string['samlfieldforroleaffiliations'] = 'アフィリエーションロール属性';
$string['auth_config.roleaffiliations_help'] = '<h1>アフィリエーションロール属性</h1><p>アイデンティティプロバイダはアカウント保持者のアフィリエーションロール情報を渡せます。このフィールドは以下と連携します:</p>
<ul>
  <li>アフィリエーションID属性</li>
  <li>アフィリエーションロール属性</li>
  <li>アフィリエーションロールデリミタ属性</li>
</ul>
<p>「ロールデリミタ」フィールドおよび「ロールマッピング」フィールドとともに設定した場合、アフィリエーションロール配列に示されているインスティテューションでその人に関連するロールが付与されます。例えば渡されたロールが「staffmember@institution_a」および「administrator@institution_b」であり、ロールマッピングがインスティテューションスタッフ「staffmember」、インスティテューション管理者「administrator」である場合、その人は「institution_a」でスタッフメンバ、「institution_b」でインスティテューション管理者となります。</p>';
$string['samlfieldforroleaffiliationdelimiter'] = 'ロールデリミタ文字';
$string['auth_config.roleaffiliationdelimiter_help'] = '<h1>ロールデリミタ文字</h1><p>アイデンティティプロバイダはアカウント保持者のアフィリエーションロール情報を渡せます。このフィールドは以下と連携します:</p>
<ul>
  <li>アフィリエーションID属性</li>
  <li>アフィリエーションロール属性</li>
  <li>アフィリエーションロールデリミタ属性</li>
</ul>
<p>ロールマッピングフィールドが設定された場合、その人はアフィリエーションロール配列に示されているインスティテューションで関連するロールを付与されます。デリミタは文字列をロールおよびインスティテューションのコンポーネントに分割します。例えばデリミタが「@」の場合、「staffmember@institution_a」は「role = staffmember」および「institution = institution_a」に分割されて以下のマッピングとなります:</p>
<ul>
  <li>staffmember@institution_a: 「institution_a」のインスティテューションスタッフ</li>
  <li>administrator@institution_b:「institution_b」のインスティテューション管理者</li>
</ul>';
$string['samlfieldforrolesiteadmin'] = '「サイト管理者」のロールマッピング';
$string['samlfieldforrolesitestaff'] = '「サイトスタッフ」のロールマッピング';
$string['samlfieldforroleinstadmin'] = '「インスティテューション管理者」のロールマッピング';
$string['samlfieldforroleinststaff'] = '「インスティテューションスタッフ」のロールマッピング';
$string['samlfieldforroleinstsupportadmin'] = '「インスティテューションサポート管理者」のロールマッピング';
$string['samlfieldfororganisationname'] = '組織属性';
$string['auth_config.organisationname_help'] = '<h1>組織属性</h1><p>アイデンティティプロバイダから渡された組織属性を含む属性名です。</p>';
$string['populaterolestoallsaml'] = 'すべてのSAMLインスタンスにロールをコピーする';
$string['populaterolestoallsamldescription'] = 'この設定が有効にされた場合、フォーム送信時にすべての「ロール」フィールドの値が同じアイデンティティプロバイダを使用する他のすべてのSAML認証インスタンスにコピーされます。その後、このフィールドは「No」にリセットされます。';
$string['samlfieldforautogroups'] = '「自動グループ管理者」のロールマッピング';
$string['samlfieldforautogroupsall'] = 'サイトのすべてのグループのグループ管理';
$string['auth_config.roleautogroupsall_help'] = '<h1>サイトのすべてのグループのグループ管理</h1>
<p>この設定を有効にした場合、「グループ管理」ロールの人が<strong>サイトのすべてのグループ</strong>のグループ管理者として追加されます。</p><p>この設定を無効にした場合、インスティテューション内のグループにのみ追加されます。</p>';
$string['samlfieldauthloginmsg'] = '不正ログインメッセージ';
$string['auth_config.authloginmsg_help'] = '<h1>不正ログインメッセージ</h1>
<p>人がSSO経由でのみログインできる場合、標準ログインフォーム使用時点で表示される短いメッセージをここに入力してください。メッセージにはSSO経由でサイトにアクセスする方法を説明してください。このメッセージはサイドバーのログインフォームの上に表示されるため、簡潔にまとめてください。</p>';
$string['spentityid'] = 'サービスプロバイダエンティティID';
$string['spentityid_help'] = '<h1>サービスプロバイダエンティティID</h1>
<p>IDプロバイダに対してこのMaharaインスタンスを識別するためのユニークIDです。例: <code>example.org/mahara</code></p>';
$string['title'] = 'SAML';
$string['updateuserinfoonlogin'] = 'ログイン時にアカウントを更新する';
$string['auth_config.updateuserinfoonlogin_help'] = '<h1>ログイン時にアカウントを更新する</h1><p>この設定を有効にした場合、ログインするたびにIDプロバイダからユーザの姓名およびメールアドレスが更新されます。</p>';
$string['userattribute'] = 'ユーザ名属性';
$string['auth_config.userattribute_help'] = '<h1>ユーザ名属性</h1><p>アイデンティティプロバイダから渡されたユーザ名を含む属性の名称です。</p>';
$string['simplesamlphplib'] = 'SimpleSAMLphpライブラリディレクトリ';
$string['simplesamlphpconfig'] = 'SimpleSAMLphp設定ディレクトリ';
$string['weautocreateusers'] = 'こちらでアカウントを自動作成する';
$string['auth_config.weautocreateusers_help'] = '<h1>アカウント自動作成</h1>
<p>この設定を有効にした場合、認証に成功したもののまだアカウントのない人に自動的にアカウントが作成されます。</p>';
$string['remoteuser'] = 'ユーザ名をリモートユーザ名に合致させる';
$string['auth_config.remoteuser_help'] = '<h1>ユーザ名属性をリモートユーザ名に合致させる</h1>
<p>SAMLのユーザ名属性値をMaharaユーザ名ではなく、リモートユーザ名フィールドに合致させます。</p>';
$string['selectidp'] = 'あなたログインしたいアイデンティティプロバイダを選択してください。';
$string['sha1'] = 'レガシSHA1 (危険)';
$string['sha256'] = 'SHA256 (デフォルト)';
$string['sha384'] = 'SHA384';
$string['sha512'] = 'SHA512';
$string['sigalgo'] = '署名アルゴリズム';
$string['sigalgo_help'] = '<h1>署名アルゴリズム</h1>
<p>SAMLリクエストの署名に使用されるアルゴリズムです。</p><p>SHA1が必要な場合を除き、SHA256またはそれ以上を使用してください。</p>';
$string['keypass'] = '秘密鍵パスフレーズ';
$string['keypass_help'] = '<h1>秘密鍵パスフレーズ</h1><p>秘密鍵を保護するためのパスフレーズです。</p>';
$string['newkeypass'] = '新しい秘密鍵パスフレーズ';
$string['newkeypass_help'] = '<h1>新しい秘密鍵パスフレーズ</h1><p>あなたが更新を希望する場合の新しい秘密鍵のパスフレーズです。</p>';
$string['createnewkeytext'] = '新しい鍵/証明書を作成する';
$string['newkeycreated'] = '新しい鍵/証明書が作成されました。';
$string['deleteoldkeytext'] = '古い鍵/証明書を削除する';
$string['oldkeydeleted'] = '古い鍵/証明書が削除されました。';
$string['keyrollfailed'] = '古い鍵/証明書の削除に失敗しました。';
$string['missingnamespace'] = 'XMLはEntityDescriptorタグ内でのネームスペース「 %s 」の定義を要求します。';
$string['ssolabelfor'] = '%s ログイン';
$string['noentityidpfound'] = 'アイデンティティプロバイダIDは見つかりませんでした。';
$string['noentityidpneednamespace'] = 'あなたのXML EntityDescriptorタグは「xmlns=」の定義を必要としますか?';
$string['novalidauthinstanceprovided'] = 'あなたの選択は可能ではありません。異なるインスティテューションを選択してください。';
$string['identityprovider'] = 'アイデンティティプロバイダ';
$string['selectmigrateto'] = '移動するインスティテューションを選択する ...';
$string['samlneedtoremovephar'] = '%s ファイルを削除できません。ファイルを削除して再度「make ssphp」を実行してください。';
$string['instancename'] = 'インスタンス名';
$string['oidc_login'] = 'Maharaアイデンティティプロバイダ';
$string['oidc_loginheader'] = 'ログイン対象: %s';
$string['oidc_logintext'] = 'このサイトのあなたの認証情報でログインしてください。<br>注意: あなたのアカウントは内部認証を使用する必要があります。';
