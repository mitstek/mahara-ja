<?php
/**
 *
 * @package    mahara
 * @subpackage lang (Japanese)
 * @translator Mitsuhiro Yoshida (http://mitstek.com/)
 * @started    2008-01-19 11:25:00 UTC
 * @updated    2013-09-28 11:58:55 UTC
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL version 3 or later
 * @copyright  For copyright information on Mahara, please see the README file distributed with this software.
 *
 */

defined('INTERNAL') || die();

$string['title'] = 'LDAP';
$string['description'] = 'LDAPサーバで認証する';
$string['notusable'] = 'PHP LDAP拡張モジュールをインストールしてください。';
$string['contexts'] = 'コンテクスト';
$string['distinguishedname'] = '識別名';
$string['hosturl'] = 'ホストURI';
$string['ldapfieldforpreferredname'] = '表示名のLDAPフィールド';
$string['ldapfieldforemail'] = 'メールアドレスのLDAPフィールド';
$string['ldapfieldforfirstname'] = '名のLDAPフィールド';
$string['ldapfieldforsurname'] = '姓のLDAPフィールド';
$string['ldapfieldforstudentid'] = '学生IDのLDAPフィールド';
$string['ldapversion'] = 'LDAPバージョン';
$string['nocreate'] = '新しいアカウントを作成しない';
$string['starttls'] = 'TLS暗号化';
$string['password'] = 'パスワード';
$string['searchsubcontexts'] = 'サブコンテクストを検索する';
$string['syncgroupsautocreate'] = '未作成のグループを自動作成する';
$string['syncgroupsbyclass'] = 'LDAPオブジェクトとして保存されているグループを同期する';
$string['syncgroupsbyuserfield'] = 'ユーザ属性として保存されているグループを同期する';
$string['syncgroupscontexts'] = 'これらのコンテクストのみ同期する';
$string['syncgroupscontextsdesc'] = 'ユーザ認証コンテクストをデフォルトとするには、空白のままにしてください。';
$string['syncgroupscron'] = 'cronジョブ経由でグループを自動同期する';
$string['syncgroupsexcludelist'] = 'これらの名称のLDAPグループを除く';
$string['syncgroupsgroupattribute'] = 'グループ属性';
$string['syncgroupsgroupclass'] = 'グループクラス';
$string['syncgroupsgrouptype'] = '自動作成グループのロールタイプ';
$string['syncgroupsincludelist'] = 'これらの名称のLDAPグループを含む';
$string['syncgroupsmemberattribute'] = 'グループメンバー属性';
$string['syncgroupsmemberattributeisdn'] = 'メンバー属性はDNですか?';
$string['syncgroupsnestedgroups'] = 'ネストグループを処理する';
$string['syncgroupssettings'] = 'グループ同期';
$string['syncgroupsuserattribute'] = 'グループ名が保存されるユーザ属性';
$string['syncgroupsusergroupnames'] = 'これらのグループ名のみ';
$string['syncgroupsusergroupnamesdesc'] = 'すべての値を受け入れるには、空白のままにしてください。グループ名はカンマで区切ってください。';
$string['syncuserscreate'] = 'cronジョブ経由でユーザを自動作成する';
$string['syncuserscron'] = 'cronジョブ経由でユーザを自動同期する';
$string['syncusersextrafilterattribute'] = '同期のための追加LDAPフィルタ';
$string['syncuserssettings'] = 'ユーザ同期';
$string['syncusersupdate'] = 'cronジョブ経由でユーザを情報を更新する';
$string['syncusersgonefromldap'] = 'ユーザがLDAPに存在しなくなった場合';
$string['syncusersgonefromldapdonothing'] = '何もしない';
$string['syncusersgonefromldapsuspend'] = 'ユーザアカウントを利用停止する';
$string['syncusersgonefromldapdelete'] = 'ユーザアカウントおよびコンテンツすべてを削除する';
$string['userattribute'] = 'ユーザ属性';
$string['usertype'] = 'ユーザタイプ';
$string['weautocreateusers'] = 'こちらでユーザを自動作成する';
$string['updateuserinfoonlogin'] = 'ログイン時、ユーザ情報を更新する';
$string['updateuserinfoonloginadnote'] = '注意: この設定を有効にすることで、MS ActiveDirectoryサイト/ユーザがログインできないようになる可能性があります。';
$string['cannotconnect'] = 'LDAPホストに接続できません。';

?>
