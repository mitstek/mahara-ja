<?php
/**
 *
 * @package    mahara
 * @subpackage lang (Japanese)
 * @translator Mitsuhiro Yoshida (https://mitstek.com/)
 * @started    2008-01-19 11:25:00 UTC
 * @updated    2021-03-22 21:19:21 UTC
 * @license    https://www.gnu.org/copyleft/gpl.html GNU GPL version 3 or later
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
<br />
新旧証明書ともに有効です。すべてのアデンティティプロバイダに新しい証明書を通知した後、あなたは「古い証明書を削除する」ボタンで古い証明書を削除できます。';
$string['nullprivatecert'] = '秘密鍵を生成または保存できませんでした。';
$string['nullpubliccert'] = '公開鍵を生成または保存できませんでした。';
$string['defaultinstitution'] = 'デフォルトインスティテューション';
$string['description'] = 'SAML 2.0アイデンティティプロバイダサービスで認証する';
$string['disco'] = 'アイデンティティプロバイダディスカバリ';
$string['errorbadinstitution'] = 'アカウント接続のインスティテューションが解決されませんでした。';
$string['errorbadssphp'] = '無効なSimpleSAMLphpセッションハンドラです: PHPセッションを使用しないでください。';
$string['errorbadssphpmetadata'] = '無効なSimpleSAMLphp設定です: 設定されたアイデンティティプロバイダメタデータがありません。';
$string['errorbadssphpspentityid'] = '無効なサービスプロバイダエンティティIDです。';
$string['errorextrarequiredfield'] = '「こちらでアカウントを自動作成する」が有効にされている場合、このフィールドは必須です。';
$string['errorretryexceeded'] = '再試行の最大回数 (%s) を越えました: アイデンティティサービスに問題があります。';
$string['errnosamluser'] = 'アカウントが見つかりませんでした。';
$string['errorssphpsetup'] = 'SAMLが正しく設定されていません。あなたは最初にコマンドラインから「make ssphp」を実行する必要があります。';
$string['errorbadlib'] = 'SimpleSAMLphpライブラリの「autoloader」ファイルが %s にありません。<br />「make ssphp」でSimpleSAMLphpをインストールできること、また、ファイルを読み込めることを確認してください。';
$string['errorupdatelib'] = 'あなたの現在のSimpleSAMLphpライブラリは旧バージョンです。あなたは「make cleanssphp && make ssphp」を実行する必要があります。';
$string['errornovalidsessionhandler'] = 'SimpleSAMLphpセッションハンドラの設定が正しくないか現在サーバを利用できません。';
$string['errornomemcache'] = 'auth/samlのためのMemcacheの設定が正しくないか、現在Memcacheサーバを利用できません。';
$string['errornomemcache7php'] = 'auth/samlのためのMemcacheの設定が正しくないか、現在Memcacheサーバを利用できません。';
$string['errorbadconfig'] = 'SimpleSAMLphp設定ディレクトリ %s が正しくありません。';
$string['errorbadmetadata1'] = 'SAMLメタデータのフォーマットが正しくありません。次の問題が検出されました: %s';
$string['errorbadinstitutioncombo'] = 'このインスティテューション属性およびインスティテューション値の組み合わせの認証インスタンスはすでに存在します。';
$string['errormissingmetadata'] = 'あなたは新しいアイデンティティプロバイダメタデータの追加を選択しましたが何も提供されていません。';
$string['errormissinguserattributes1'] = 'あなたは認証されたようですが私たちは必要なユーザ属性を受け取っていません。あなたのアイデンティティプロバイダがSSOの姓名およびメールアドレスフィールドを %s にリリースしているか確認してください。または管理者にご連絡ください。';
$string['errorregistrationenabledwithautocreate1'] = 'インスティテューションが登録を有効にしています。あなたがリモートユーザ名を使用していない限りセキュリティ上の理由からアカウントの自動作成を許可しません。';
$string['errorremoteuser1'] = '「usersuniquebyusername」が無効にされた場合、「remoteuser」との合致は必須です。';
$string['IdPSelection'] = 'アイデンティティプロバイダ選択';
$string['noidpsfound'] = 'アイデンティティプロバイダなし';
$string['idpentityid'] = 'アイデンティティプロバイダエンティティ';
$string['idpentityadded'] = 'このSAMLインスタンスにアイデンティティプロバイダメタデータを追加しました。';
$string['idpentityupdated'] = 'このSAMLインスタンスのアイデンティティプロバイダメタデータを更新しました。';
$string['idpentityupdatedduplicates'] = 'このSAMLインスタンスおよび他の %s インスタンスのアイデンティティプロバイダメタデータを更新しました。';
$string['metarefresh_metadata_url'] = '自動更新のためのメタデータURL';
$string['idpprovider'] = 'プロバイダ';
$string['idptable'] = 'インストール済みアイデンティティプロバイダ';
$string['institutionattribute'] = 'インスティテューション属性 (%s を含む)';
$string['institutionidp'] = 'インスティテューションアイデンティティプロバイダSAMLメタデータ';
$string['institutionidpentity'] = '利用可能なアイデンティティプロバイダ';
$string['institutions'] = 'インスティテューション';
$string['institutionvalue'] = '属性をチェックするためのインスティテューション値';
$string['libchecks'] = '正しいライブラリのインストールを確認する: %s';
$string['link'] = 'アカウントをリンクする';
$string['linkaccounts'] = 'リモートアカウント「 %s 」をローカルアカウント「 %s 」とリンクしてもよろしいですか?';
$string['loginlink'] = '人に自分のアカウントのリンクを許可する';
$string['logintolink'] = 'リモートアカウントにリンクするため %s にローカルログインする';
$string['logintolinkdesc'] = '<p><b>現在、あなたはリモートアカウント「 %s 」としてログインしています。リモートアカウントとリンクするためあなたのローカルアカウントを使ってログインしてください。あなたが %s にアカウントを持っていない場合、登録してください。</b></p>';
$string['logo'] = 'ロゴ';
$string['institutionregex'] = 'インスティテューション省略名を部分的に文字列一致させる';
$string['login'] = 'SSO';
$string['newidpentity'] = '新しいアイデンティティプロバイダを追加する';
$string['notusable'] = 'SimpleSAMLphpライブラリをインストールしてセッション用にMemcacheサーバを設定ください。';
$string['obsoletesamlplugin'] = 'auth/samlプラグインを再設定する必要があります。<a href="%s">プラグイン設定</a>フォーム経由でプラグインを更新してください。';
$string['obsoletesamlinstance'] = 'SAML認証インスタンス <a href="%s">%s</a> (「 %s 」インスティテューション) を更新する必要があります。';
$string['reallyreallysure1'] = 'あなたはMaharaのサービスプロバイダメタデータを保存しようとしています。これは元に戻せません。また、あなたの新しいメタデータをすべてのアイデンティティプロバイダと再共有するまで既存のインスティテューションに設定されているSAMLログインは動作しません。';
$string['reset'] = 'メタデータをリセットする';
$string['resetmetadata'] = 'Maharaのメタデータの証明書をリセットします。これは元に戻せません。また、あなたのメタデータをアイデンティティプロバイダと再共有する必要があります。';
$string['samlconfig'] = 'SAML設定';
$string['samlfieldforemail'] = 'メールアドレスのSSOフィールド';
$string['samlfieldforfirstname'] = '名のSSOフィールド';
$string['samlfieldforsurname'] = '姓のSSOフィールド';
$string['samlfieldforstudentid'] = '学籍番号のSSOフィールド';
$string['samlfieldforavatar'] = 'アバタアイコンのSSOフィールド';
$string['samlfieldforavatardescription'] = '提供されるアバタにはBase64エンコードされたイメージストリングを含む必要があります。';
$string['samlfieldforrole'] = 'ロールのSSOフィールド';
$string['samlfieldforroleprefix'] = 'ロール接頭辞のSSOフィールド';
$string['samlfieldforrolesiteadmin'] = '「サイト管理者」のロールマッピング';
$string['samlfieldforrolesitestaff'] = '「サイトスタッフ」のロールマッピング';
$string['samlfieldforroleinstadmin'] = '「インスティテューション管理者」のロールマッピング';
$string['samlfieldforroleinststaff'] = '「インスティテューションスタッフ」のロールマッピング';
$string['samlfieldfororganisationname'] = '組織のSSOフィールド';
$string['populaterolestoallsaml'] = 'すべてのSAMLインスタンスにロールをコピーする';
$string['populaterolestoallsamldescription'] = 'この設定が有効にされた場合、フォーム送信時にすべての「ロール」フィールドの値が同じアイデンティティプロバイダを使用する他のすべてのSAML認証インスタンスにコピーされます。その後、このフィールドは「No」にリセットされます。';
$string['samlfieldforautogroups'] = '「自動グループ管理者」のロールマッピング';
$string['samlfieldforautogroupsall'] = 'サイトのすべてのグループの自動グループ管理';
$string['samlfieldforautogroupsalldescription'] = 'この設定を有効にした場合、「自動グループ管理」ロールを持つ人はサイト全体のすべてのグループのグループ管理者として追加されます。そうでない場合、自分のインスティテューション内のグループのグループ管理者として追加されます。';
$string['samlfieldauthloginmsg'] = '不正ログインメッセージ';
$string['spentityid'] = 'サービスプロバイダエンティティID';
$string['title'] = 'SAML';
$string['updateuserinfoonlogin'] = 'ログイン時、アカウント詳細を更新する';
$string['userattribute'] = 'ユーザ属性';
$string['simplesamlphplib'] = 'SimpleSAMLphpライブラリディレクトリ';
$string['simplesamlphpconfig'] = 'SimpleSAMLphp設定ディレクトリ';
$string['weautocreateusers'] = 'こちらでアカウントを自動作成する';
$string['remoteuser'] = 'ユーザ属性をリモートユーザ名に合致させる';
$string['selectidp'] = 'あなたがログインに使いたいアイデンティティプロバイダを選択してください。';
$string['sha1'] = 'レガシーSHA1 (危険)';
$string['sha256'] = 'SHA256 (デフォルト)';
$string['sha384'] = 'SHA384';
$string['sha512'] = 'SHA512';
$string['sigalgo'] = '署名アルゴリズム';
$string['keypass'] = '秘密鍵パスフレーズ';
$string['keypassdesc'] = '秘密鍵を保護するためのパスフレーズです。';
$string['newkeypass'] = '新しい秘密鍵パスフレーズ';
$string['newkeypassdesc'] = 'あなたが現在のパスフレーズと変更したい場合の新しい秘密鍵を保護するためのパスフレーズです。';
$string['createnewkeytext'] = '新しい鍵/証明書を作成する';
$string['newkeycreated'] = '新しい鍵/証明書が作成されました。';
$string['deleteoldkeytext'] = '古い鍵/証明書を削除する';
$string['oldkeydeleted'] = '古い鍵/証明書が削除されました。';
$string['keyrollfailed'] = '古い鍵/証明書の削除に失敗しました。';
$string['missingnamespace'] = 'XMLはEntityDescriptorタグ内でのネームスペース「 %s 」の定義を要求します。';
$string['ssolabelfor'] = '%s ログイン';
$string['noentityidpfound'] = 'アイデンティティプロバイダIDが見つかりませんでした。';
$string['noentityidpneednamespace'] = 'あなたのXML EntityDescriptorタグは「xmlns=」の定義を必要としますか?';
$string['novalidauthinstanceprovided'] = 'あなたの選択は可能ではありません。異なるインスティテューションを選択してください。';
$string['identityprovider'] = 'アイデンティティプロバイダ';
$string['selectmigrateto'] = '移動するインスティテューションを選択する ...';
$string['samlneedtoremovephar'] = '%s ファイルを削除できません。ファイルを削除して再度「make ssphp」を実行してください。';

?>
