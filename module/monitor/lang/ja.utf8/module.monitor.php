<?php
/**
 *
 * @package    mahara
 * @subpackage lang (Japanese)
 * @translator Mitsuhiro Yoshida (https://mitstek.com/)
 * @started    2008-01-19 11:25:00 UTC
 * @updated    2022-04-10 23:16:03 UTC
 * @license    https://www.gnu.org/copyleft/gpl.html GNU GPL version 3 or later
 * @copyright  For copyright information on Mahara, please see the README file distributed with this software.
 *
 */

defined('INTERNAL') || die();

$string['monitor'] = 'モニタ';
$string['monitoringchecks'] = 'モニタリングチェック';
$string['configmonitortype_searchlegend'] = '検索設定';
$string['configmonitortype_searchhoursuntiloldtitle'] = '検索キューが古いみなされる時間';
$string['configmonitortype_searchhoursuntilolddescription'] = '検索記録が注目される前に未処理のままにできる時間です。';
$string['cronlockhours'] = 'cronロック時間';
$string['cronlockhoursdescription'] = 'cronプロセスを実行する最大時間数です。';
$string['hourstoconsiderelasticsearchrecordold'] = 'Elasticsearchキューを古いとみなす時間';
$string['hourstoconsiderelasticsearchrecordolddescription'] = 'Elasticsearchレコードに注目する前に未処理のまま存続できる時間数です。';
$string['monitormodulenotactive'] = 'モニタプラグインは有効ではありません。「管理メニュー」 → 「拡張機能」 → 「プラグイン管理」ページに移動してプラグインをインストールまたは有効にしてください。';
$string['allowedips'] = '許可されるIPアドレス';
$string['allowedipsdescription'] = 'レスポンスをモニタするため、信頼できるIPアドレスを1行あたり1件入力してください。空白のままにした場合、そして「$cfg->urlsecret」が設定されている場合、モニタは「$cfg->urlsecret」に制限されます。';
$string['accessdeniednotvalidip'] = 'あなたのIPアドレス「 %s 」は許可されたIPリストにありません。あなたはモニタのチェックからブロックされます:';
$string['croncheckhelp'] = 'どのcronプロセスが長時間実行されているか特定します。

croncheck.php [オプション] mahara_path

オプション:
-h, --help このヘルプを表示します。';
$string['okmessagedisabled'] = 'この設定を有効にした場合、OKメッセージは表示されません。';
$string['checkingcronprocesses'] = 'cronプロセスを確認する';
$string['checkingcronprocessessucceed'] = 'OK: %s に長時間実行されているcronプロセスはありません。';
$string['checkingcronprocessesfail'] = 'クリティカル: %s 件の長時間実行されているcornプロセスがあります - %s: %s';
$string['displaydatetimeformat'] = 'Y/m/d H:i:s';
$string['processes'] = 'cronプロセス';
$string['ldaplookup'] = 'LDAPルックアップ';
$string['elasticsearch'] = 'Elasticsearch';
$string['longrunningprocesses'] = '長時間実行中のプロセス';
$string['processname'] = 'プロセス';
$string['datestarted'] = '開始日時';
$string['exportresultscsv'] = '結果をCSVフォーマットでエクスポートする';
$string['queuestatus'] = 'キューステータス';
$string['failedqueuesize'] = '1時間以上の失敗レコード数';
$string['queuehasolditems'] = '%s 時間以上処理されていないElasticsearchキューのアイテム';
$string['unprocessedqueuesize'] = '未処理レコード合計数';
$string['yes'] = 'Yes';
$string['no'] = 'No';
$string['clistatuscritical'] = 'クリティカル';
$string['clistatusok'] = 'OK';
$string['checkingelasticsearcholdunprocesessedfail'] = 'クリティカル: %s 時間より古いElasticsearchキューに未処理レコードがあります。';
$string['checkingelasticsearchfailedrecords'] = 'クリティカル: 1 時間より古いElasticsearchキューに失敗レコードがあります。';
$string['checkingelasticsearchsucceed'] = 'OK: Elasticsearchキューに未処理および失敗レコードはありません。';
$string['elasticsearchcheckhelp'] = 'Elasticsearchプロセスキューを確認します:

elasticsearchcheck.php [オプション] mahara_path

オプション:
-h, --help このヘルプを表示します。

例:
sudo -u www-data /usr/bin/php elasticsearchcheck.php /var/www/mymaharaproject';
$string['searchcheckhelp'] = '検索プロセスキューを確認します:

searchcheck.php [options] mahara_path

オプション:
-h, --help このヘルプを表示します。

例:
sudo -u www-data /usr/bin/php searchcheck.php /var/www/mymaharaproject';
$string['ldapstatussuccess'] = 'LDAPチェックに成功しました。';
$string['ldapstatusfail'] = '次のエラーでLDAPチェックに失敗しました: %d';
$string['ldapcheckhelp'] = '動作していないLDAPインスタンスを特定します。

daplookupcheck.php [オプション] mahara_path

オプション:
-h, --help このヘルプを表示します。';
$string['checkingldapinstancessucceed'] = 'OK: %s の無効なLDAP接続はありません。';
$string['checkingldapinstancesfail'] = 'クリティカル: %s 件の無効なLDAP接続があります - %s: %s';
$string['institution'] = 'インスティテューション';
$string['ldapauthority'] = 'LDAP認証局名';
$string['ldapstatus'] = 'ステータス';
$string['ldapstatusmessage'] = 'ステータス詳細';
$string['ldapstatustabletitle'] = 'LDAPステータス';
$string['statussuccess'] = 'OK';
$string['statusfail'] = '失敗';
$string['ldapsuspendedusers'] = 'LDAP一時停止アカウント';
$string['ldapsuspendeduserstabletitle'] = '午前零時以降、LDAPアカウント同期により一時停止にできるLDAPアカウントのパーセンテージ';
$string['ldapsuspendeduserspercentage'] = 'LDAP一時停止アカウントのパーセンテージ';
$string['ldapsuspendeduserspercentagedescription'] = '問題であるとフラグ付けされる前、午前零時以降にLDAPアカウント同期により一時停止にできるアカウントの最大パーセンテージです。';
$string['item'] = 'アイテム';
$string['status'] = 'ステータス';
$string['details'] = '詳細';
$string['ldapsuspendeduserscheckhelp'] = 'LDAPアカウント同期プロセスで一時停止にされた大量のLDAPアカウントをチェックします。

ldapsuspendeduserscheck.php [オプション] mahara_path

オプション:
-h, --help このヘルプを表示します。';
$string['checkingldapsuspendedusersssucceed'] = 'OK: 一時停止アカウント警告閾値を越えた %s のLDAPインスタンスはありません。';
$string['checkingldapsuspendedusersfail'] = 'クリティカル: 一時停止アカウント警告閾値を越えた %s のLDAPインスタンスがあります: %s';
