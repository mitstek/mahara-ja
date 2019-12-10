<?php
/**
 *
 * @package    mahara
 * @subpackage lang (Japanese)
 * @translator Mitsuhiro Yoshida (https://mitstek.com/)
 * @started    2008-01-19 11:25:00 UTC
 * @updated    2017-09-21 01:57:08 UTC
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL version 3 or later
 * @copyright  For copyright information on Mahara, please see the README file distributed with this software.
 *
 */

defined('INTERNAL') || die();

$string['title'] = 'LDAP';
$string['ldapconfig'] = 'LDAP設定';
$string['description'] = 'LDAPサーバで認証する';
$string['notusable'] = 'PHP LDAP拡張モジュールをインストールしてください。';
$string['attributename'] = '値を基にグループを同期する場合に使用するLDAP属性名です (必須および大文字小文字を区別します)。';
$string['cannotdeleteandsuspend'] = '「-d」および「-s」は同時に指定できません。';
$string['cli_info_sync_groups'] = 'このコマンドラインPHPスクリプトはLDAPディレクトリとグループのインスティテューションリストの同期を試みます。
存在しないグループは作成され「インスティテューション名 : LDAP属性値」のような名称になります。';
$string['cli_info_sync_groups_attribute'] = 'このコマンドラインPHPスクリプトはLDAP属性の異なる値を基にLDAPディレクトリとグループのインスティテューションリストの同期を試みます。
存在しないグループは作成され「インスティテューション名 : LDAP属性値」のような名称になります。';
$string['cli_info_sync_users'] = 'このコマンドラインPHPスクリプトはLDAPディレクトリとMaharaアカウントのインスティテューションリストの同期を試みます。';
$string['contexts'] = 'コンテクスト';
$string['distinguishedname'] = '識別名';
$string['dodelete'] = 'LDAPに存在しなくなったアカウントを削除する';
$string['dosuspend'] = 'LDAPに存在しなくなったアカウントを利用停止する';
$string['doupdate'] = 'LDAPデータ (LONG) により既存のアカウントを更新する';
$string['dryrun'] = 'ダミー実行です。データベース処理は実行されません。';
$string['excludelist'] = 'これらの正規表現に名称が合致するLDAPグループを除く';
$string['extrafilterattribute'] = 'ユーザ検索を制限するための追加LDAPフィルタ';
$string['grouptype'] = '作成するMaharaグループタイプ - デフォルト「standard」';
$string['hosturl'] = 'ホストURL';
$string['includelist'] = 'これらの正規表現に名称が合致するLDAPグループのみ処理する';
$string['institutionname'] = '処理するインスティテューション名 (必須)';
$string['ldapfieldforpreferredname'] = '表示名のLDAPフィールド';
$string['ldapfieldforemail'] = 'メールアドレスのLDAPフィールド';
$string['ldapfieldforfirstname'] = '名のLDAPフィールド';
$string['ldapfieldforsurname'] = '姓のLDAPフィールド';
$string['ldapfieldforstudentid'] = '学籍番号のLDAPフィールド';
$string['ldapversion'] = 'LDAPバージョン';
$string['nocreate'] = '新しいアカウントを作成しない';
$string['nocreatemissinggroups'] = 'すでにインスティテューションに設定されていない場合、LDAPグループを作成しません。';
$string['nomatchingauths'] = 'このインスティテューションのLDAP認証プラグインは見つかりませんでした。';
$string['starttls'] = 'TLS暗号化';
$string['password'] = 'パスワード';
$string['searchcontexts'] = 'これらのコンテクストにおける検索を制限します (認証プラグインで設定された値をオーバライドします)。';
$string['searchsubcontexts'] = 'サブコンテクストを検索する';
$string['searchsubcontextscliparam'] = 'サブコンテクスト内で (1) または (0) ではないものを検索します (認証プラグインで設定された値をオーバライドします)。';
$string['syncgroupsautocreate'] = '未作成のグループを自動作成する';
$string['syncgroupsbyclass'] = 'LDAPオブジェクトとして保存されているグループを同期する';
$string['syncgroupsbyuserfield'] = 'ユーザ属性として保存されているグループを同期する';
$string['syncgroupscontexts'] = 'これらのコンテクストのみ同期する';
$string['syncgroupscontextsdesc'] = 'ユーザ認証コンテクストをデフォルトとするには空白のままにしてください。';
$string['syncgroupscron'] = 'cronジョブでグループを自動同期する';
$string['syncgroupsexcludelist'] = 'これらの名称のLDAPグループを除く';
$string['syncgroupsgroupattribute'] = 'グループ属性';
$string['syncgroupsgroupclass'] = 'グループクラス';
$string['syncgroupsgrouptype'] = '自動作成グループのロールタイプ';
$string['syncgroupsincludelist'] = 'これらの名称のLDAPグループのみ含む';
$string['syncgroupsmemberattribute'] = 'グループメンバー属性';
$string['syncgroupsmemberattributeisdn'] = 'メンバー属性はDNですか?';
$string['syncgroupsnestedgroups'] = 'ネストグループを処理する';
$string['syncgroupssettings'] = 'グループ同期';
$string['syncgroupsuserattribute'] = 'グループ名が保存されるユーザ属性';
$string['syncgroupsusergroupnames'] = 'これらのグループ名のみ';
$string['syncgroupsusergroupnamesdesc'] = 'すべての値を受け入れるには空白のままにしてください。グループ名はカンマで区切ってください。';
$string['syncuserscreate'] = 'cronジョブでユーザを自動作成する';
$string['syncuserscron'] = 'cronジョブでユーザを自動同期する';
$string['syncusersextrafilterattribute'] = '同期のための追加LDAPフィルタ';
$string['syncuserssettings'] = 'ユーザ同期';
$string['syncusersupdate'] = 'cronジョブでユーザ情報を更新する';
$string['syncusersgonefromldap'] = 'ユーザがLDAPに存在しなくなった場合';
$string['syncusersgonefromldapdonothing'] = '何もしない';
$string['syncusersgonefromldapsuspend'] = 'ユーザアカウントを利用停止する';
$string['syncusersgonefromldapdelete'] = 'ユーザアカウントおよびコンテンツすべてを削除する';
$string['userattribute'] = 'ユーザ属性';
$string['usertype'] = 'ユーザタイプ';
$string['weautocreateusers'] = 'こちらでユーザを自動作成する';
$string['updateuserinfoonlogin'] = 'ログイン時、ユーザ情報を更新する';
$string['cannotconnect'] = 'LDAPホストに接続できません。';

?>
