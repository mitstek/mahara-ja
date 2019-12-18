<?php
/**
 *
 * @package    mahara
 * @subpackage lang (Japanese)
 * @translator Mitsuhiro Yoshida (https://mitstek.com/)
 * @started    2008-01-19 11:25:00 UTC
 * @updated    2015-08-06 15:37:02 UTC
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL version 3 or later
 * @copyright  For copyright information on Mahara, please see the README file distributed with this software.
 *
 */

defined('INTERNAL') || die();

$string['defaultinstitution'] = 'デフォルトインスティテューション';
$string['description'] = 'SAML 2.0 IdPサービスで認証する';
$string['errorbadinstitution'] = 'ユーザ接続のインスティテューションが解決されませんでした。';
$string['errorbadssphp'] = '無効なSimpleSAMLphpセッションハンドラです - PHPセッションを使用しないでください。';
$string['errorbadssphplib'] = '無効なSimpleSAML phpライブラリ設定です。';
$string['errorretryexceeded'] = '再試行の最大回数 (%s) を越えました: アイデンティティサービスに問題があります。';
$string['errnosamluser'] = 'ユーザが見つかりませんでした。';
$string['errorbadlib'] = 'SimpleSAMLPHPライブラリディレクトリ「 %s 」が正しくありません。';
$string['errorbadconfig'] = 'SimpleSAMLPHP設定ディレクトリ「 %s 」が正しくありません。';
$string['errorbadcombo'] = 'リモートユーザを選択していない場合のみ、あなたはユーザ自動作成を選択できます。';
$string['errorbadinstitutioncombo'] = 'このインスティテューション属性およびインスティテューション値の組み合わせの認証インスタンスはすでに存在します。';
$string['errormissinguserattributes1'] = 'あなたは認証されたようですが私たちは必要なユーザ属性を受信していません。あなたのアイデンティティプロバイダ (IdP) が姓名およびメールアドレスに対するSSOフィールドを %s にリリースしているか確認してください。または管理者にご連絡ください。';
$string['errorregistrationenabledwithautocreate'] = 'インスティテューションが登録を有効にしています。セキュリティ上の理由からユーザ自動作成を除きます。';
$string['errorremoteuser'] = '「usersuniquebyusername」が無効にされた場合、リモートユーザとの合致は必須です。';
$string['institutionattribute'] = 'インスティテューション属性 (%s を含む)';
$string['institutionvalue'] = '属性をチェックするためのインスティテューション値';
$string['link'] = 'アカウントをリンクする';
$string['linkaccounts'] = 'リモートアカウント %s をローカルアカウント %s とリンクしてもよろしいですか?';
$string['loginlink'] = 'ユーザに自分のアカウントのリンクを許可する';
$string['logintolink'] = 'リモートアカウントにリンクするため %s にローカルログインする';
$string['logintolinkdesc'] = '<p><b>現在、あなたはリモートユーザ %s としてログインしています。リモートアカウントとリンクするためあなたのローカルアカウントを使ってログインしてください。あなたが %s にアカウントを持っていない場合、ユーザ登録してください。</b></p>';
$string['institutionregex'] = 'インスティテューション省略名を部分的に文字列一致させる';
$string['login'] = 'SSO';
$string['notusable'] = 'SimpleSAMLPHP SPライブラリをインストールしてください。';
$string['samlfieldforemail'] = 'メールアドレスのSSOフィールド';
$string['samlfieldforfirstname'] = '名のSSOフィールド';
$string['samlfieldforsurname'] = '姓のSSOフィールド';
$string['title'] = 'SAML';
$string['updateuserinfoonlogin'] = 'ログイン時、ユーザ情報を更新する';
$string['userattribute'] = 'ユーザ属性';
$string['simplesamlphplib'] = 'SimpleSAMLPHPライブラリディレクトリ';
$string['simplesamlphpconfig'] = 'SimpleSAMLPHP設定ディレクトリ';
$string['weautocreateusers'] = 'こちらでユーザを自動作成する';
$string['remoteuser'] = 'ユーザ属性をリモートユーザに合致させる';

?>
