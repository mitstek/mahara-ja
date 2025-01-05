<?php

defined('INTERNAL') || die();

$string['accessdeniednotvalidip'] = 'あなたのIPアドレス「 %s 」は許可されたIPリストにありません。あなたはモニタのチェックからブロックされます:';
$string['allowedips'] = '許可されるIPアドレス';
$string['allowedipsdescription'] = 'レスポンスをモニタするため、信頼できるIPアドレスを1行あたり1件入力してください。空白のままにした場合、そして「$cfg->urlsecret」が設定されている場合、モニタは「$cfg->urlsecret」に制限されます。';
$string['checkingcronprocesses'] = 'cronプロセスを確認する';
$string['checkingcronprocessesfail'] = array(
    0 => 'クリティカル: %s 件の長時間実行されているcornプロセスがあります - %s: %s',
);
$string['checkingcronprocessessucceed'] = 'OK: %s に長時間実行されているcronプロセスはありません。';
$string['checkingelasticsearchfailedrecords'] = 'クリティカル: 1 時間より古いElasticsearchキューに失敗レコードがあります。';
$string['checkingelasticsearcholdunprocesessedfail'] = array(
    0 => 'クリティカル: %s 時間より古いElasticsearchキューに未処理レコードがあります。',
);
$string['checkingelasticsearchsucceed'] = 'OK: Elasticsearchキューに未処理および失敗レコードはありません。';
$string['checkingldapinstancesfail'] = array(
    0 => 'クリティカル: %s 件の無効なLDAP接続があります - %s: %s',
);
$string['checkingldapinstancessucceed'] = 'OK: %s の無効なLDAP接続はありません。';
$string['checkingldapsuspendedusersfail'] = array(
    0 => 'クリティカル: 一時停止アカウント警告閾値を越えた %s のLDAPインスタンスがあります: %s',
);
$string['checkingldapsuspendedusersssucceed'] = 'OK: 一時停止アカウント警告閾値を越えた %s のLDAPインスタンスはありません。';
$string['clistatuscritical'] = 'クリティカル';
$string['clistatusok'] = 'OK';
$string['configmonitortype_searchhoursuntilolddescription'] = '検索記録が注目される前に未処理のままにできる時間です。';
$string['configmonitortype_searchhoursuntiloldtitle'] = '検索キューが古いとみなされる時間';
$string['configmonitortype_searchlegend'] = '検索設定';
$string['croncheckhelp'] = 'どのcronプロセスが長時間実行されているか特定します:

croncheck.php [オプション] mahara_path

オプション:
-h, --help このヘルプを表示します。

例:
sudo -u www-data /usr/bin/php croncheck.php /var/www/mymaharaproject
';
$string['cronlockhours'] = 'cronロック時間';
$string['cronlockhoursdescription'] = 'cronプロセスの最大実行時間です。';
$string['datestarted'] = '開始日時';
$string['details'] = '詳細';
$string['displaydatetimeformat'] = 'Y/m/d H:i:s';
$string['elasticsearch'] = 'Elasticsearch';
$string['elasticsearchcheckhelp'] = 'Elasticsearchプロセスキューを確認します:

elasticsearchcheck.php [オプション] mahara_path

オプション:
-h, --help このヘルプを表示します。

例:
sudo -u www-data /usr/bin/php elasticsearchcheck.php /var/www/mymaharaproject
';
$string['exportresultscsv'] = '結果をCSVフォーマットでエクスポートする';
$string['failedqueuesize'] = '1時間以上の失敗レコード数';
$string['hourstoconsiderelasticsearchrecordold'] = 'Elasticsearchキューを古いとみなす時間';
$string['hourstoconsiderelasticsearchrecordolddescription'] = 'Elasticsearchレコードが注目される前に未処理のままにできる時間です。';
$string['institution'] = 'インスティテューション';
$string['item'] = 'アイテム';
$string['ldapauthority'] = 'LDAP認証局名';
$string['ldapcheckhelp'] = '動作していないLDAPインスタンスを特定します。

daplookupcheck.php [オプション] mahara_path

オプション:
-h, --help このヘルプを表示します。
';
$string['ldaplookup'] = 'LDAPルックアップ';
$string['ldapstatus'] = 'ステータス';
$string['ldapstatusfail'] = '次のエラーでLDAPチェックに失敗しました: %d';
$string['ldapstatusmessage'] = 'ステータス詳細';
$string['ldapstatussuccess'] = 'LDAPチェックに成功しました。';
$string['ldapstatustabletitle'] = 'LDAPステータス';
$string['ldapsuspendedusers'] = 'LDAP一時停止アカウント';
$string['ldapsuspendeduserscheckhelp'] = 'LDAPアカウント同期プロセスで一時停止された大量のLDAPアカウントをチェックします。

ldapsuspendeduserscheck.php [オプション] mahara_path

オプション:
-h, --help このヘルプを表示します。

例:
sudo -u www-data /usr/bin/php ldapsuspendeduserscheck.php /var/www/mymaharaproject
';
$string['ldapsuspendeduserspercentage'] = 'LDAP一時停止アカウントのパーセンテージ';
$string['ldapsuspendeduserspercentagedescription'] = '問題であるとフラグ付けされる前、午前0時以降にLDAPアカウント同期により一時停止にできるアカウントの最大パーセンテージです。';
$string['ldapsuspendeduserstabletitle'] = '午前0時以降、LDAPアカウント同期により一時停止にできるLDAPアカウントの割合';
$string['longrunningprocesses'] = '長時間実行中のプロセス';
$string['monitor'] = 'モニタ';
$string['monitoringchecks'] = 'モニタリングチェック';
$string['monitormodulenotactive'] = 'モニタプラグインは有効ではありません。「管理メニュー」 → 「拡張機能」 → 「プラグイン管理」ページに移動してプラグインをインストールまたは有効にしてください。';
$string['no'] = 'No';
$string['okmessagedisabled'] = 'この設定を有効にした場合、OKメッセージは表示されません。';
$string['processes'] = 'cronプロセス';
$string['processname'] = 'プロセス';
$string['queuehasolditems'] = array(
    0 => '%s 時間以上処理されていないElasticsearchキューのアイテム',
);
$string['queuestatus'] = 'キューステータス';
$string['searchcheckhelp'] = '検索プロセスキューを確認します:

searchcheck.php [オプション] mahara_path

オプション:
-h, --help このヘルプを表示します。

例:
sudo -u www-data /usr/bin/php searchcheck.php /var/www/mymaharaproject
';
$string['status'] = 'ステータス';
$string['statusfail'] = '失敗';
$string['statussuccess'] = 'OK';
$string['unprocessedqueuerate'] = 'cron制限に対する未処理レコードのパーセンテージ';
$string['unprocessedqueueratecli'] = 'INFO: cron制限に対する未処理レコードのパーセンテージ: %s%';
$string['unprocessedqueueratecliwarn'] = 'WARN: cron制限に対する未処理レコードのパーセンテージ: %s% キューのクリアに問題がある場合、cronレコード制限を増やしてください。';
$string['unprocessedqueuesize'] = '未処理レコード合計数';
$string['wrongsearchtype'] = '「 %s 」をモニタする検索タイプが正しくありません - この CLIは「 %s 」と組み合わせて使用してください。';
$string['yes'] = 'Yes';
