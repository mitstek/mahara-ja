<?php
/**
 * Mahara: Electronic portfolio, weblog, resume builder and social networking
 * Copyright (C) 2006 onwards Catalyst IT Ltd (http://www.catalyst.net.nz)
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @package    mahara
 * @subpackage lang (Japanese)
 * @translator Mitsuhiro Yoshida (http://mitstek.com/)
 * @started    2008-01-19 11:25:00 UTC
 * @updated    2013-09-25 04:35:45 UTC
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL
 * @copyright  (C) 2006 onwards Catalyst IT Ltd http://catalyst.net.nz
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
