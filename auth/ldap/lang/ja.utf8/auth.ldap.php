<?php
/**
 *
 * @package    mahara
 * @subpackage lang (Japanese)
 * @translator Mitsuhiro Yoshida (https://mitstek.com/)
 * @started    2008-01-19 11:25:00 UTC
 * @updated    2026-06-09 01:24:09 UTC
 * @license    https://www.gnu.org/licenses/gpl-3.0.html GNU GPL version 3 or later
 * @copyright  For copyright information on Mahara, please see the README file distributed with this software.
 *
 */

defined('INTERNAL') || die();

$string['title'] = 'LDAP';
$string['ldapconfig'] = 'LDAP設定';
$string['description'] = 'LDAPサーバで認証する';
$string['notusable'] = 'PHP LDAP拡張モジュールをインストールしてください。';
$string['emailmissing'] = 'メールアドレスがありません。';
$string['attributename'] = '値を基にグループを同期する場合に使用するLDAP属性名です (必須および大文字小文字を区別します)。';
$string['cannotdeleteandsuspend'] = '「-d」および「-s」は同時に指定できません。';
$string['cli_info_sync_groups'] = 'このコマンドラインPHPスクリプトはLDAPディレクトリとグループのインスティテューションリストの同期を試みます。
存在しないグループは「インスティテューション名 : LDAPグループ名」のような名称で作成されます。';
$string['cli_info_sync_groups_attribute'] = 'このコマンドラインPHPスクリプトはLDAP属性の異なる値を基にLDAPディレクトリとグループのインスティテューションリストの同期を試みます。
存在しないグループは「インスティテューション名 : LDAP属性値」のような名称で作成されます。';
$string['cli_info_sync_users'] = 'このコマンドラインPHPスクリプトはLDAPディレクトリとMaharaアカウントのインスティテューションリストの同期を試みます。';
$string['contexts'] = 'コンテクスト';
$string['contexts_help'] = '<h1>コンテクスト</h1>
<p>アカウントが配置されているコンテキストを<tt>;</tt>で区切って入力してください。例えば次のようになります: <em>ou=users,o=org;ou=other,o=org</em>.</p>';
$string['distinguishedname'] = '識別名';
$string['bind_dn_help'] = '<h1>識別名</h1><p>検索対象の「bind-user」を入力してください。例えば次のようになります: <em>cn=ldapuser,ou=public,o=org</em> 匿名バインドの場合、空白のままにしてください。</p>';
$string['dodelete'] = 'LDAPに存在しなくなったアカウントを削除する';
$string['dosuspend'] = 'LDAPに存在しなくなったアカウントを利用停止する';
$string['doupdate'] = '既存のアカウントをLDAPデータ (long) で更新する';
$string['dryrun'] = 'ダミー実行です。データベース処理は実行されません。';
$string['excludelist'] = 'これらの正規表現に名称が合致するLDAPグループを除く';
$string['extrafilterattribute'] = 'アカウント検索を制限するための追加LDAPフィルタ';
$string['grouptype'] = '作成するMaharaグループタイプ - デフォルト「standard」';
$string['hosturl'] = 'ホストURL';
$string['host_url_help'] = '<h1>ホストURL</h1>
<p>ホストURLを入力してください。例えば次のようになります: <em>ldap://ldap.example.com</em> フェイルオーバーに対応する場合、「<tt>;</tt>」で使用して複数のサーバを分離してください。</p>';
$string['includelist'] = 'これらの正規表現に名称が合致するLDAPグループのみ処理する';
$string['institutionname'] = '処理するインスティテューション名 (必須)';
$string['ldapfieldforpreferredname'] = '表示名のLDAPフィールド';
$string['preferrednamefield_help'] = '<h1>表示名のLDAPフィールド</h1>
<p>人の表示名が格納されているLDAPフィールド名です。</p>';
$string['ldapfieldforemail'] = 'メールアドレスのLDAPフィールド';
$string['emailfield_help'] = '<h1>メールアドレスのLDAPフィールド</h1>
<p>人のメールアドレスが格納されているLDAPフィールド名です。</p>';
$string['ldapfieldforfirstname'] = '名のLDAPフィールド';
$string['firstnamefield_help'] = '<h1>名のLDAPフィールド</h1>
<p>人の名が格納されているLDAPフィールド名です。</p>';
$string['ldapfieldforsurname'] = '姓のLDAPフィールド';
$string['surnamefield_help'] = '<h1>姓のLDAPフィールド</h1>
<p>人の名が格納されているLDAPフィールド名です。</p>';
$string['ldapfieldforstudentid'] = '学籍番号のLDAPフィールド';
$string['studentidfield_help'] = '<h1>学籍番号のLDAPフィールド</h1>
<p>人 (学生) の学籍番号が格納されているLDAPフィールド名です。</p>';
$string['ldapversion'] = 'LDAPバージョン';
$string['ldapversion_help'] = '<h1>LDAPバージョン</h1><p>あなたのサーバが使用しているLDAPプロトコルのバージョンです。</p>';
$string['loginlink'] = '自分の内部アカウントをリンクする';
$string['loginlink_help'] = '<h1>自分の内部アカウントをリンクする</h1><p>この設定を有効にした場合、LDAPから提供されたメールアドレスがMaharaアカウントと一致する場合に限り、人は内部認証方法を使用するアカウントを自身のLDAPアカウントと連携できます。</p>';
$string['nocreate'] = '新しいアカウントを作成しない';
$string['nocreatemissinggroups'] = 'まだインスティテューションにLDAPグループが設定されていない場合は作成しません。';
$string['nomatchingauths'] = 'このインスティテューションのLDAP認証プラグインは見つかりませんでした。';
$string['starttls'] = 'TLS暗号化';
$string['password'] = 'パスワード';
$string['bind_pw_help'] = '<h1>パスワード</h1><p>「識別名」のパスワードを入力してください。</p>';
$string['searchcontexts'] = 'これらのコンテクストでの検索を制限します (認証プラグインで設定された値をオーバライドします)。';
$string['searchsubcontexts'] = 'サブコンテクストを検索する';
$string['search_sub_help'] = '<h1>サブコンテクストを検索する</h1><p>サブコンテキスト内で人を検索します。</p>';
$string['searchsubcontextscliparam'] = 'サブコンテクスト内で (1) または (0) ではないものを検索します (認証プラグインで設定された値をオーバライドします)。';
$string['syncgroupsautocreate'] = '未作成のグループを自動作成する';
$string['syncgroupsbyclass'] = 'LDAPオブジェクトとして保存されているグループを同期する';
$string['auth_config.syncgroupsbyclass_help'] = '<h1>LDAPオブジェクトとして保存されているグループを同期する</h1>
<p>あなたのグループがLDAP内に独立したレコードとして保存されている場合、このオプションを有効にしてください。例えば以下のようになります:</p>
<pre>
dn: cn=languagestudents,ou=groups,dc=mahara,dc=org
objectClass: groupOfUniqueNames
cn: languagestudents
uniqueMember: uid=user1,dc=mahara,dc=org
uniqueMember: uid=user2,dc=mahara,dc=org
uniqueMember: cn=frenchclass,ou=groups,dc=mahara,dc=org
</pre>';
$string['syncgroupsbyuserfield'] = 'アカウント属性として保存されているグループを同期する';
$string['auth_config.syncgroupsbyuserfield_help'] = '<h1>アカウント属性として保存されているグループを同期する</h1>
<p>それぞれのLDAPアカウントレコードに人がどのグループに所属しているか示す属性がある場合、このオプションを有効にしてください。同期cronはその属性のそれぞれの一意の値 (または「これらのグループ名のみ」フィールドに一覧表示されているもの) に対してグループを作成した後、それぞれの人を適切なグループに追加します。</p>';
$string['syncgroupscontexts'] = 'グループ同期コンテクスト';
$string['auth_config.syncgroupscontexts_help'] = '<h1>グループ同期コンテクスト</h1>
<p>グループが存在するコンテクストを「;」で区切って記述してください。例えば次のようになります: <em>ou=groups,o=org;ou=other,o=org</em> </p><p>空白のままにした場合、同期cronはアカウントの「コンテクスト」設定と同じコンテクストを使用します。</p>';
$string['syncgroupscron'] = 'cronジョブによるグループ同期';
$string['auth_config.syncgroupscron_help'] = '<h1>cronジョブによるグループ同期</h1>
<p>この設定を有効にした場合、cronタスクがLDAPレコードに基づいてグループおよびそのメンバシップを作成および更新します。デフォルトではこのタスクは毎日午前0時 (サーバ時間) に実行されます。スケジュールまたは設定を変更するには「auth_cron」テーブルを編集するか、<code>htdocs/auth/ldap/cli/</code>にあるスクリプトを使用してください。</p>
<p>グループを同期する場合、あなたは「LDAPオブジェクトとして保存されているグループを同期する」および「アカウント属性として保存されているグループを同期する」を有効にする必要があります。このタスクでメンバを追加および削除できます。グループがLDAPに存在しなくなった場合、グループのメンバはすべて削除されます。</p>
<p>cronが実行されていない場合、この設定は有効となりません。セットアップインストラクションに関して<a href="https://git.mahara.org/catalyst/mahara/-/wikis/System-administration/Installing-Mahara">インストレーションガイド</a>をご覧ください。</p>';
$string['syncgroupsexcludelist'] = 'これらの名称のLDAPグループを除く';
$string['syncgroupsgroupattribute'] = 'グループ属性';
$string['auth_config.syncgroupsgroupattribute_help'] = '<h1>グループ属性</h1>
<p>グループ名にマッピングされるLDAP属性です。多くの場合、「cn」です。</p>';
$string['syncgroupsgroupclass'] = 'グループクラス';
$string['auth_config.syncgroupsgroupclass_help'] = '<h1>グループクラス</h1>
<p>グループに割り当てられるLDAPオブジェクトクラスです。</p>';
$string['syncgroupsgrouptype'] = '自動作成グループのロールタイプ';
$string['syncgroupsincludelist'] = 'これらの名称のLDAPグループのみ含む';
$string['syncgroupsmemberattribute'] = 'グループメンバ属性';
$string['auth_config.syncgroupsmemberattribute_help'] = '<h1>グループメンバ属性</h1>
<p>グループメンバを保存するLDAP属性です。多くの場合、「uniqueMember」です。</p>';
$string['syncgroupsmemberattributeisdn'] = 'メンバ属性タイプ: 識別名';
$string['auth_config.syncgroupsmemberattributeisdn_help'] = '<h1>メンバ属性タイプ: 識別名</h1><p>「グループメンバ属性」フィールドのそれぞれのエントリが「識別名」である場合、この設定を有効にしてください。</p><p>それぞれのエントリがユーザ名のみの場合、無効にしてください。</p>';
$string['syncgroupsnestedgroups'] = 'ネストグループ';
$string['auth_config.syncgroupsnestedgroups_help'] = '<h1>ネストグループ</h1>
<p>グループに他のグループをメンバとして含めれる場合、このオプションを有効にしてください。同期処理ではネストされたグループのメンバを親グループに再帰的に追加します。循環参照が検出された場合、安全に処理を停止します。</p>';
$string['syncgroupssettings'] = 'グループ同期';
$string['syncgroupsuserattribute'] = 'グループ名が保存されるアカウント属性';
$string['syncgroupsusergroupnames'] = '許可されるグループ名';
$string['auth_config.syncgroupsusergroupnames_help'] = '<h1>許可されるグループ名</h1>
<p>アカウント属性からグループを同期する場合、指定された名称のグループのみ作成します。<p>空白のままにした場合、任意の値を受け入れます。グループ名はカンマで区切ってください。</p><p>これは「LDAPオブジェクトとして保存されているグループを同期する」設定を通して作成されたグループには影響しません。</p>';
$string['syncuserscreate1'] = 'cronジョブによるアカウント作成';
$string['syncuserscron1'] = 'cronジョブによるアカウント同期';
$string['auth_config.syncuserscron_help'] = '<h1>cronジョブによるアカウント同期</h1><p>この設定を有効にした場合、cronタスクがLDAPレコードに基づいてアカウントを作成および更新します。デフォルトではこのタスクは毎日午前0時 (サーバ時間) に実行されます。スケジュールまたは設定を変更するには「auth_cron」テーブルを編集するか、<code>htdocs/auth/ldap/cli/</code>にあるスクリプトを使用してください。</p>
<p>cronが実行されていない場合、この設定は有効となりません。セットアップインストラクションに関して<a href="https://git.mahara.org/catalyst/mahara/-/wikis/System-administration/Installing-Mahara">インストレーションガイド</a>をご覧ください。</p>';
$string['syncusersextrafilterattribute'] = '同期のための追加LDAPフィルタ';
$string['auth_config.syncusersextrafilterattribute_help'] = '<h1>同期のための追加LDAPフィルタ</h1>
<p>LDAPフィルタを入力して一致するアカウントのみに同期を限定してください。</p><p>例: <code>uid=user*</code></p><p><strong>自動停止または自動削除が有効にされている場合、注意して使用してください。フィルタに一致しないアカウントは一時停止または削除されます。</strong></p>';
$string['syncuserssettings'] = 'アカウント同期';
$string['syncusersupdate1'] = 'cronジョブによるアカウント情報更新';
$string['syncusersgonefromldap'] = 'アカウントがLDAPに存在しなくなった場合';
$string['auth_config.syncusersgonefromldap_help'] = '<h1>アカウントがLDAPに存在しなくなった場合</h1>
<p>あなたのインスティテューション内の人にLDAPに一致するレコードがない場合の動作を選択してください。この設定はこの認証方法を使用する人にのみ適用されます。</p>
<dl>
  <dt>何もしない</dt>
  <dd>何も実行されません。これが推奨設定です。</dd>
  <dt>アカウントを利用停止する</dt>
  <dd>アカウントは利用停止されます。人はログインできなくなります。ポートフォリオは表示されなくなりますが、データは削除されません。アカウントの利用停止はLDAPレコードが再適用された際に自動的に解除されるか、管理者が手動解除できます。</dd>
  <dt>アカウントおよびすべてのコンテンツを削除する</dt>
  <dd><strong>使用には注意してださい。</strong> アカウントおよびすべてのコンテンツおよびポートフォリオは完全に削除されます。データを復元するには完全なバックアップが必要です。</dd>
</dl>';
$string['syncusersgonefromldapdonothing'] = '何もしない';
$string['syncusersgonefromldapsuspend'] = 'アカウントを利用停止する';
$string['syncusersgonefromldapdelete'] = 'アカウントおよびコンテンツすべてを削除する';
$string['userattribute'] = 'アカウント属性';
$string['user_attribute_help'] = '<h1>アカウント属性</h1><p>人の検索に使用される属性です。多くの場合、「cn」です。</p>';
$string['usertype'] = 'アカウントタイプ';
$string['user_type_help'] = '<h1>アカウントタイプ</h1><p>LDAPにおけるアカウントの保存方法を選択してください。</p>';
$string['weautocreateusers'] = 'アカウント自動作成';
$string['weautocreateusers_help'] = '<h1>アカウント自動作成</h1>
<p>この設定を有効にした場合、認証に成功したもののまだアカウントのない人に自動的にアカウントが作成されます。</p>';
$string['updateuserinfoonlogin'] = 'ログイン時、アカウント情報を更新する';
$string['updateuserinfoonlogin_help'] = '<h1>ログイン時、アカウント情報を更新する</h1>
<p>この設定を有効にした場合、人がログインするたびにLDAPサーバから人の姓名が更新されます。</p>';
$string['cannotconnect'] = 'LDAPホストに接続できません。';
