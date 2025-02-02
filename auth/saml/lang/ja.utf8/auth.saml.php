<?php
/**
 *
 * @package    mahara
 * @subpackage lang (Japanese)
 * @translator Mitsuhiro Yoshida (https://mitstek.com/)
 * @started    2008-01-19 11:25:00 UTC
 * @updated    2022-03-21 02:49:29 UTC
 * @license    https://www.gnu.org/licenses/gpl-3.0.html GNU GPL version 3 or later
 * @copyright  For copyright information on Mahara, please see the README file distributed with this software.
 *
 */

defined('INTERNAL') || die();

$string['attributemapfilenotamap'] = '属性マップファイル「 %s 」で属性マップが定義されていません。';
$string['attributemapfilenotfound'] = '属性マップファイルがないか、書き込み権がありません: %s';
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
新旧証明書ともに有効です。すべてのアイデンティティプロバイダに新しい証明書を通知した後、あなたは「古い証明書を削除する」ボタンで古い証明書を削除できます。';
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
$string['errorbadlib'] = 'SimpleSAMLphpライブラリの「autoloader」ファイルが %s にありません。<br>「make ssphp」でSimpleSAMLphpをインストールできること、また、ファイルを読み込めることを確認してください。';
$string['errorupdatelib'] = 'あなたの現在のSimpleSAMLphpライブラリは旧バージョンです。あなたは「make cleanssphp && make ssphp」を実行する必要があります。';
$string['errornovalidsessionhandler'] = 'SimpleSAMLphpセッションハンドラの設定が正しくないか、現在サーバを利用できません。';
$string['errornomemcache'] = 'auth/samlのためのMemcacheの設定が正しくないか、現在Memcacheサーバを利用できません。';
$string['errornomemcache7php'] = 'auth/samlのためのMemcacheの設定が正しくないか、現在Memcacheサーバを利用できません。';
$string['errorbadconfig'] = 'SimpleSAMLphp設定ディレクトリ %s が正しくありません。';
$string['errorbadmetadata1'] = '不正なSAMLメタデータです。次の問題が検出されました: %s';
$string['errorbadinstitutioncombo'] = 'このインスティテューション属性およびインスティテューション値の組み合わせの認証インスタンスはすでに存在します。';
$string['errormissingmetadata'] = 'あなたは新しいアイデンティティプロバイダメタデータの追加を選択しましたが何も提供されていません。';
$string['errormissinguserattributes1'] = 'あなたは認証されているようですが、私たちは必要なユーザ属性を受け取っていません。あなたのアイデンティティプロバイダがSSOの姓名およびメールアドレスフィールドを %s にリリースしているか確認してください。または管理者にご連絡ください。';
$string['errorregistrationenabledwithautocreate1'] = 'インスティテューションが登録を有効にしています。セキュリティ上の理由から、あなたがリモートユーザ名を使用している場合を除き、アカウント自動作成は除外されます。';
$string['errorremoteuser1'] = '「usersuniquebyusername」が無効にされた場合、「remoteuser」との合致は必須です。';
$string['IdPSelection'] = 'アイデンティティプロバイダ選択';
$string['noidpsfound'] = 'アイデンティティプロバイダなし';
$string['idpentityid'] = 'アイデンティティプロバイダエンティティ';
$string['idpentityadded'] = 'このSAMLインスタンスのアイデンティティプロバイダメタデータを追加しました。';
$string['idpentityupdated'] = 'このSAMLインスタンスのアイデンティティプロバイダメタデータを更新しました。';
$string['idpentityupdatedduplicates'] = 'このSAMLインスタンスおよび他の %s インスタンスのアイデンティティプロバイダメタデータを更新しました。';
$string['metarefresh_metadata_url'] = '自動更新用メタデータURL';
$string['metarefresh_metadata_signature'] = 'メタデータ署名正当性確認';
$string['metadatarefreshfailed_subject'] = 'メタデータ自動更新失敗';
$string['metadatarefreshfailed_body'] = 'SAMLメタデータの自動更新を完了できませんでした。詳細はcronログを確認してください。エラーレスポンスは次のように表示される場合があります:';
$string['idpprovider'] = 'プロバイダ';
$string['idptable'] = 'インストール済みアイデンティティプロバイダ';
$string['institutionattribute'] = 'インスティテューション属性 (%s を含む)';
$string['institutionidp'] = 'インスティテューションアイデンティティプロバイダSAMLメタデータ';
$string['institutionidpentity'] = '利用可能なアイデンティティプロバイダ';
$string['institutions'] = 'インスティテューション';
$string['institutionvalue'] = '属性と照合するインスティテューション値';
$string['libchecks'] = '正しいライブラリがインストールされているか確認する: %s';
$string['link'] = 'アカウントをリンクする';
$string['linkaccounts'] = 'リモートアカウント「 %s 」をローカルアカウント「 %s 」とリンクしてもよろしいですか?';
$string['loginlink'] = '人に自分のアカウントへのリンクを許可する';
$string['logintolink'] = '%s にローカルログインしてリモートアカウントにリンクする';
$string['logintolinkdesc'] = '<p><b>現在、あなたはリモートアカウント「 %s 」としてログインしています。リモートアカウントとリンクするにはあなたのローカルアカウントでログインしてください。あなたが %s にアカウントを持っていない場合、登録してください。</b></p>';
$string['logo'] = 'ロゴ';
$string['institutionregex'] = 'インスティテューション省略名で部分的に文字列一致させる';
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
$string['samlfieldforfirstname'] = '名のSSOフィールド';
$string['samlfieldforsurname'] = '姓のSSOフィールド';
$string['samlfieldforstudentid'] = '学籍番号のSSOフィールド';
$string['samlfieldforavatar'] = 'アバタアイコンのSSOフィールド';
$string['samlfieldforavatardescription'] = '提供されるアバタにはBase64エンコードされたイメージストリングを含む必要があります。';
$string['samlfieldforrole'] = 'ロールのSSOフィールド';
$string['samlfieldforroleprefix'] = 'ロール接頭辞のSSOフィールド';
$string['samlfieldforidaffiliations'] = 'アフィリエーションIDのSSOフィールド';
$string['samlfieldforemailaffiliations'] = 'アフィリエーションメールアドレスのSSOフィールド';
$string['samlfieldforroleaffiliations'] = 'アフィリエーションロールのSSOフィールド';
$string['samlfieldforroleaffiliationdelimiter'] = 'ロールデリミタ文字';
$string['samlfieldforrolesiteadmin'] = '「サイト管理者」のロールマッピング';
$string['samlfieldforrolesitestaff'] = '「サイトスタッフ」のロールマッピング';
$string['samlfieldforroleinstadmin'] = '「インスティテューション管理者」のロールマッピング';
$string['samlfieldforroleinststaff'] = '「インスティテューションスタッフ」のロールマッピング';
$string['samlfieldforroleinstsupportadmin'] = '「インスティテューションサポート管理者」のロールマッピング';
$string['samlfieldfororganisationname'] = '「組織」のSSOフィールド';
$string['populaterolestoallsaml'] = 'すべてのSAMLインスタンスにロールをコピーする';
$string['populaterolestoallsamldescription'] = 'この設定が有効にされた場合、フォーム送信時にすべての「ロール」フィールドの値が同じアイデンティティプロバイダを使用する他のすべてのSAML認証インスタンスにコピーされます。その後、このフィールドは「No」にリセットされます。';
$string['samlfieldforautogroups'] = '「自動グループ管理者」のロールマッピング';
$string['samlfieldforautogroupsall'] = 'サイトのすべてのグループの自動グループ管理';
$string['samlfieldforautogroupsalldescription'] = 'この設定を有効にした場合、「自動グループ管理」ロールを持つ人はサイト全体のすべてのグループにグループ管理者として追加されます。そうでない場合、自分のインスティテューション内のグループのグループ管理者として追加されます。';
$string['samlfieldauthloginmsg'] = '不正ログインメッセージ';
$string['spentityid'] = 'サービスプロバイダエンティティID';
$string['title'] = 'SAML';
$string['updateuserinfoonlogin'] = 'ログイン時、アカウント詳細を更新する';
$string['userattribute'] = 'ユーザ属性';
$string['simplesamlphplib'] = 'SimpleSAMLphpライブラリディレクトリ';
$string['simplesamlphpconfig'] = 'SimpleSAMLphp設定ディレクトリ';
$string['weautocreateusers'] = 'こちらでアカウントを自動作成する';
$string['remoteuser'] = 'ユーザ属性をリモートユーザ名に合致させる';
$string['selectidp'] = 'あなたログインしたいアイデンティティプロバイダを選択してください。';
$string['sha1'] = 'レガシSHA1 (危険)';
$string['sha256'] = 'SHA256 (デフォルト)';
$string['sha384'] = 'SHA384';
$string['sha512'] = 'SHA512';
$string['sigalgo'] = '署名アルゴリズム';
$string['keypass'] = '秘密鍵パスフレーズ';
$string['keypassdesc'] = '秘密鍵を保護するためのパスフレーズです。';
$string['newkeypass'] = '新しい秘密鍵パスフレーズ';
$string['newkeypassdesc'] = 'あなたが現在のパスフレーズと異なるものにしたい場合の新しい秘密鍵を保護するためのパスフレーズです。';
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
