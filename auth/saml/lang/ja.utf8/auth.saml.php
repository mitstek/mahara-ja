<?php
/**
 *
 * @package    mahara
 * @subpackage lang (Japanese)
 * @translator Mitsuhiro Yoshida (http://mitstek.com/)
 * @started    2008-01-19 11:25:00 UTC
 * @updated    2017-09-22 06:55:00 UTC
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL version 3 or later
 * @copyright  For copyright information on Mahara, please see the README file distributed with this software.
 *
 */

defined('INTERNAL') || die();

$string['attributemapfilenotamap'] = '属性マップファイル「 %s 」で属性マップが定義されていません。';
$string['attributemapfilenotfound'] = 'attributemapファイルがないか書き込み権がありません: %s';
$string['certificate1'] = 'SAMLサービスプロバイダ署名および暗号化認証';
$string['manage_certificate1'] = 'これはSAMLサービスプロバイダ<a href="%s">メタデータ</a>の一部として生成された証明書です。';
$string['nullprivatecert'] = '秘密鍵を生成または保存できませんでした。';
$string['nullpubliccert'] = '公開鍵を生成または保存できませんでした。';
$string['defaultinstitution'] = 'デフォルトインスティテューション';
$string['description'] = 'SAML 2.0アイデンティティプロバイダサービスで認証する';
$string['disco'] = 'アイデンティティプロバイダディスカバリ';
$string['errorbadinstitution'] = 'ユーザ接続のインスティテューションが解決されませんでした。';
$string['errorbadssphp'] = '無効なSimpleSAMLphpセッションハンドラです: PHPセッションを使用しないでください。';
$string['errorbadssphpmetadata'] = '無効なSimpleSAMLphp設定です: アイデンティティプロバイダメタデータが設定されていません。';
$string['errorbadssphpspentityid'] = '無効なサービスプロバイダエンティティIDです。';
$string['errorretryexceeded'] = '再試行の最大回数 (%s) を越えました - アイデンティティサービスに問題があります。';
$string['errnosamluser'] = 'ユーザが見つかりませんでした。';
$string['errorssphpsetup'] = 'SAMLが正しくセットアップされていません。あなたは最初にコマンドラインから「make ssphp」を実行する必要があります。';
$string['errorbadlib'] = 'SimpleSAMLPHPライブラリの「autoloader」ファイルが %s にありません。<br />あなたが「make ssphp」を使ってSimpleSAMLphpをインストールしていることを確認してください。また、ファイルを読み込むことができるか確認してください。';
$string['errorupdatelib'] = 'あなたの現在のSimpleSAMLPHPライブラリは旧バージョンです。あなたは「make cleanssphp && make ssphp」を実行する必要があります。';
$string['errornomcrypt'] = 'auth/samlのためにPHPライブラリ「mcrypt」がインストールされている必要があります。あなたがmcryptをインストールして有効化していることを確認してください。例:<br />sudo apt-get install php5-mcrypt<br />sudo php5enmod mcrypt<br />そしてウェブサーバを再起動してください。';
$string['errornomcrypt7php'] = 'auth/samlのためにPHPライブラリ「mcrypt」がインストールされている必要があります。あなたがmcryptをインストールして有効化していることを確認してください。例:<br />sudo apt-get install php7.0-mcrypt<br />sudo phpenmod mcrypt<br />そしてウェブサーバを再起動してください。';
$string['errornomemcache'] = 'auth/samlのためにmemcacheサーバが必要です。あなたのmemcacheサーバのパスを$cfg->memcacheservers設定変数に一覧記述するかPHPライブラリ「memcache」をローカルにインストールしてください:<br / >sudo apt-get install php5-memcache<br />sudo php5enmod memcache<br />そしてウェブサーバを再起動してください。';
$string['errornomemcache7php'] = 'auth/samlのためにmemcacheサーバが必要です。あなたのmemcacheサーバのパスを$cfg->memcacheservers設定変数に一覧記述するかPHPライブラリ「memcache」をローカルにインストールしてください:<br / >sudo apt-get install php-memcache<br />sudo phpenmod memcache<br />そしてウェブサーバを再起動してください。';
$string['errorbadconfig'] = 'SimpleSAMLPHP設定ディレクトリ「 %s 」が正しくありません。';
$string['errorbadmetadata'] = 'SAMLメタデータのフォーマットが正しくありません。XMLに1つの有効なアイデンティティプロバイダが含まれていることを確認してください。';
$string['errorbadinstitutioncombo'] = 'このインスティテューション属性およびインスティテューション値の組み合わせの認証インスタンスはすでに存在します。';
$string['errormissingmetadata'] = 'あなたは新しいアイデンティティプロバイダメタデータの追加を選択しましたが何も提供されていません。';
$string['errormissinguserattributes1'] = 'あなたは認証されたようですが私たちは必要なユーザ属性を受信していません。あなたのアイデンティティプロバイダが姓名およびメールアドレスに対するSSOフィールドを %s にリリースしているか確認してください。または管理者にご連絡ください。';
$string['errorregistrationenabledwithautocreate1'] = 'インスティテューションが登録を有効にされています。あなたがリモートユーザ名を使用していない限り、セキュリティ上の理由からユーザの自動作成を許可しません。';
$string['errorremoteuser1'] = '「usersuniquebyusername」が無効にされた場合、「remoteuser」との合致は必須です。';
$string['IdPSelection'] = 'アイデンティティプロバイダ選択';
$string['noidpsfound'] = 'アイデンティティプロバイダなし';
$string['idpentityid'] = 'アイデンティティプロバイダエンティティ';
$string['idpentityadded'] = 'このSAMLインスタンスにアイデンティティプロバイダメタデータを追加しました。';
$string['idpentityupdated'] = 'このSAMLインスタンスのアイデンティティプロバイダメタデータを更新しました。';
$string['idpentityupdatedduplicates'] = 'このSAMLインスタンスおよび他の %s インスタンスのアイデンティティプロバイダメタデータを更新しました。';
$string['idpprovider'] = 'プロバイダ';
$string['institutionattribute'] = 'インスティテューション属性 (%s を含む)';
$string['institutionidp'] = 'インスティテューションアイデンティティプロバイダSAMLメタデータ';
$string['institutionidpentity'] = '利用可能なアイデンティティプロバイダ';
$string['institutionvalue'] = '属性をチェックするためのインスティテューション値';
$string['libchecks'] = '正しいライブラリのインストールを確認する: %s';
$string['link'] = 'アカウントをリンクする';
$string['linkaccounts'] = 'リモートアカウント「 %s 」をローカルアカウント「 %s 」とリンクしてもよろしいですか?';
$string['loginlink'] = 'ユーザに自分のアカウントのリンクを許可する';
$string['logintolink'] = 'リモートアカウントにリンクするため %s にローカルログインする';
$string['logintolinkdesc'] = '<p><b>現在、あなたはリモートユーザ「 %s 」としてログインしています。リモートアカウントとリンクするためあなたのローカルアカウントを使ってログインしてください。あなたが %s にアカウントを持っていない場合、ユーザ登録してください。</b></p>';
$string['logo'] = 'ロゴ';
$string['institutionregex'] = 'インスティテューション省略名を部分的に文字列一致させる';
$string['login'] = 'SSO';
$string['newidpentity'] = '新しいアイデンティティプロバイダを追加する';
$string['notusable'] = 'SimpleSAMLPHPサービスプロバイダライブラリをインストールしてください。';
$string['obsoletesamlplugin'] = 'auth/samlプラグインを再設定する必要があります。<a href="%s">プラグイン設定</a>フォーム経由でプラグインを更新してください。';
$string['obsoletesamlinstance'] = 'SAML認証インスタンス <a href="%s">%s</a> (「 %s 」インスティテューション) を更新する必要があります。';
$string['reallyreallysure1'] = 'あなたはMaharaのサービスプロバイダメタデータを保存しようとしています。これは元に戻すことはできません。また、あなたの新しいメタデータをすべてのアイデンティティプロバイダと再共有するまで既存のインスティテューションに設定されているSAMLログインは動作しません。';
$string['reset'] = 'メタデータをリセットする';
$string['resetmetadata'] = 'Maharasメタデータの証明書をリセットします。これは元に戻すことはできません。また、あなたのメタデータをアイデンティティプロバイダと再共有する必要があります。';
$string['samlconfig'] = 'SAML設定';
$string['samlfieldforemail'] = 'メールアドレスのSSOフィールド';
$string['samlfieldforfirstname'] = '名のSSOフィールド';
$string['samlfieldforsurname'] = '姓のSSOフィールド';
$string['samlfieldforstudentid'] = '学生IDのSSOフィールド';
$string['spentityid'] = 'サービスプロバイダエンティティID';
$string['title'] = 'SAML';
$string['updateuserinfoonlogin'] = 'ログイン時、ユーザ情報を更新する';
$string['userattribute'] = 'ユーザ属性';
$string['simplesamlphplib'] = 'SimpleSAMLPHPライブラリディレクトリ';
$string['simplesamlphpconfig'] = 'SimpleSAMLPHP設定ディレクトリ';
$string['weautocreateusers'] = 'こちらでユーザを自動作成する';
$string['remoteuser'] = 'ユーザ属性をリモートユーザに合致させる';
$string['selectidp'] = 'あなたがログインしたいアイデンティティプロバイダを選択してください。';
$string['sha1'] = 'レガシーSHA1 (危険)';
$string['sha256'] = 'SHA256 (デフォルト)';
$string['sha384'] = 'SHA384';
$string['sha512'] = 'SHA512';
$string['sigalgo'] = '署名アルゴリズム';

?>
