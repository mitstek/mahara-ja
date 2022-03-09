<?php
/**
 * Mahara: Electronic portfolio, weblog, resume builder and social networking
 * Copyright (C) 2006 onwards Catalyst IT Ltd (https://www.catalyst.net.nz)
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
 * along with this program.  If not, see <https://www.gnu.org/licenses/>.
 *
 * @package    mahara
 * @subpackage lang (Japanese)
 * @translator Mitsuhiro Yoshida (https://mitstek.com/)
 * @started    2008-01-19 11:25:00 UTC
 * @updated    2011-06-17 17:49:37 UTC
 * @license    https://www.gnu.org/copyleft/gpl.html GNU GPL
 * @copyright  (C) 2006 onwards Catalyst IT Ltd https://catalyst.net.nz
 *
 */

defined('INTERNAL') || die();

$string['phpversion'] = 'MaharaはPHP %s 以下では動作しません。あなたのPHPバージョンをアップグレードするか、Maharaを別のホストに移動してください。';
$string['jsonextensionnotloaded'] = 'あなたのサーバ設定にはJSON拡張モジュールが含まれていません。ブラウザへのデータ送受信のためMaharaではこのモジュールを必要とします。このモジュールがphp.iniに設定されているか確認してください。インストールされていない場合、インストールしてください。';
$string['pgsqldbextensionnotloaded'] = 'あなたのサーバ設定にはpgsql拡張モジュールが含まれていません。リレーショナルデータベースにデータを保存するためMaharaではこのモジュールを必要とします。このモジュールがphp.iniに設定されているか確認してください。インストールされていない場合、インストールしてください。';
$string['mysqldbextensionnotloaded'] = 'あなたのサーバ設定にはmysql拡張モジュールが含まれていません。リレーショナルデータベースにデータを保存するためMaharaではこのモジュールを必要とします。このモジュールがphp.iniに設定されているか確認してください。インストールされていない場合、インストールしてください。';
$string['unknowndbtype'] = 'あなたのサーバ設定は不明なデータベースタイプを参照しています。有効な値は「postgres8」および「mysql5」です。config.php内のデータベースタイプ設定を変更してください。';
$string['domextensionnotloaded'] = 'あなたのサーバ設定にはDOM拡張モジュールが含まれていません。様々なソースのXMLデータを構文解析するためMaharaではこのモジュールを必要とします。';
$string['xmlextensionnotloaded'] = 'あなたのサーバ設定には %s 拡張モジュールが含まれていません。様々なソースのXMLデータを構文解析するためMaharaではこのモジュールを必要とします。このモジュールがphp.iniに設定されているか確認してください。インストールされていない場合、インストールしてください。';
$string['gdextensionnotloaded'] = 'あなたのサーバ設定にはGD拡張モジュールが含まれていません。アップロードされたイメージのリサイズおよび他の処理を実行するためMaharaではこのモジュールを必要とします。このモジュールがphp.iniに設定されているか確認してください。インストールされていない場合、インストールしてください。';
$string['gdfreetypenotloaded'] = 'あなたのサーバ設定のGD拡張モジュールにはFreeTypeサポートが含まれていません。CAPTCHAイメージを作成するためMaharaではFreeTypeサポートを必要とします。GD拡張モジュールでFreeTypeサポートが設定されているかどうか確認してください。';
$string['sessionextensionnotloaded'] = 'あなたのサーバ設定にはsession拡張モジュールが含まれていません。ユーザログインをサポートするためMaharaではこのモジュールを必要とします。このモジュールがphp.iniに設定されているか確認してください。インストールされていない場合、インストールしてください。';
$string['curllibrarynotinstalled'] = 'あなたのサーバ設定にはcurl拡張モジュールが含まれていません。Moodleインテグレーションおよび外部フィードを検索するためMaharaではこのモジュールを必要とします。このモジュールがphp.iniに設定されているか確認してください。インストールされていない場合、インストールしてください。';
$string['registerglobals'] = 'あなたは危険なPHP設定「register_globals」をonにしています。Maharaはこの問題の対処を試みますが設定変更を強くお勧めします。あなたが共有ホスティングを利用してPHPの設定変更が許可されている場合、.htaccessファイルに次の行を含んでください:
php_flag register_globals off';
$string['magicquotesgpc'] = 'あなたは危険なPHP設定「magic_quotes_gpc」をonにしています。Maharaはこの問題の対処を試みますが設定変更を強くお勧めします。あなたが共有ホスティングを利用してPHPの設定変更が許可されている場合、.htaccessファイルに次の行を含んでください:
php_flag magic_quotes_gpc off';
$string['magicquotesruntime'] = 'あなたは危険なPHP設定「magic_quotes_runtime」をonにしています。Maharaはこの問題の対処を試みますが設定変更を強くお勧めします。あなたが共有ホスティングを利用してPHPの設定変更が許可されている場合、.htaccessファイルに次の行を含んでください:
php_flag magic_quotes_runtime off';
$string['magicquotessybase'] = 'あなたは危険なPHP設定「magic_quotes_sybase」をonにしています。Maharaはこの問題の対処を試みますが設定変更を強くお勧めします。あなたが共有ホスティングを利用してPHPの設定変更が許可されている場合、.htaccessファイルに次の行を含んでください:
php_flag magic_quotes_sybase off';
$string['safemodeon'] = 'あなたのサーバはセーフモードで動作しているようです。Maharaはセーフモードでの運用をサポートしていません。php.iniファイルまたはサイトのApache設定でセーフモードを無効にしてください。

あなたが共有ホスティングを利用している場合、ホスティングプロバイダに依頼する以外、safe_modeを無効にするためにできることは多くありません。別のホストへの移行を考えても良いでしょう。';
$string['apcstatoff'] = 'あなたのサーバはapc.stat=0によりAPCを動作しているようです。Maharaはこの設定をサポートしていません。php.iniファイルでapc.stat=1に設定してください。

あなたが共有ホスティングを利用している場合、ホスティングプロバイダに依頼する以外、apc.statを有効にするためにできることは多くありません。別のホストへの移行を考えても良いでしょう。';
$string['datarootinsidedocroot'] = 'あなたはドキュメントルート内にデータルートを設定したようです。これには誰でも (他の人のセッションをハイジャックするため) 直接セッションデータをリクエストできる多大なセキュリティ上の問題があります。また、他の人がアップロードしたアクセス許可されていないファイルに誰でもアクセスできます。データルートをドキュメントルートの外に設定してください。';
$string['datarootnotwritable'] = 'あなたが定義したデータルートディレクトリ「 %s 」に書込み権がありません。これはセッションデータ、ユーザファイル、その他アップロードする必要のあるファイルをアップロードできないことを意味します。ディレクトリが存在しているかどうか確認してください。ディレクトリが存在している場合、ディレクトリにウェブサーバユーザの所有権を与えてください。';
$string['couldnotmakedatadirectories'] = '何らかの理由でいくつかのコアデータディレクトリを作成できませんでした。Maharaが事前にdatarootディレクトリの書込み権を確認したためこのエラーが発生することはないと考えられます。datarootディレクトリのパーミッションを確認してください。';
$string['dbconnfailed'] = 'Maharaがアプリケーションデータベースに接続できませんでした。

* あなたがMaharaを利用している場合、少し待った後、再度お試しください。
* あなたが管理者である場合、データベース設定およびデータベースが利用可能かどうか確認してください。

エラー内容は次のとおりです:';
$string['dbnotutf8'] = 'あなたはUTF-8データベースを使用していません。Maharaではすべてのデータを内部にUTF-8で保存します。あなたのデータベースをドロップしてUTF-8エンコーディングを使用するよう再作成してください。';
$string['dbversioncheckfailed'] = 'あなたのデータベースサーバのバージョンはMaharaを正常に動作させるのに十分な新しいバージョンではありません。あなたのサーバは %s %s ですが、Maharaは少なくともバージョン %s を必要とします。';
$string['blocktypenametaken'] = 'ブロックタイプ %s はすでに他のプラグイン (%s) に取得されています。';
$string['artefacttypenametaken'] = 'アーティファクトタイプ %s はすでに他のプラグイン (%s) に取得されています。';
$string['artefacttypemismatch'] = 'アーティファクトタイプが一致しません。あなたはこの %s に関して %s としての使用を試みています。';
$string['classmissing'] = 'クラス %s (タイプ %s - プラグイン %s) がありません。';
$string['artefacttypeclassmissing'] = 'すべてのアーティファクトタイプにはクラスを実装する必要があります。%s がありません。';
$string['artefactpluginmethodmissing'] = 'アーティファクトプラグイン %s で必要な %s が実装されていません。';
$string['blocktypelibmissing'] = 'アーティファクトプラグイン %s 内にブロック %s のlib.phpがありません。';
$string['blocktypemissingconfigform'] = 'ブロックタイプ %s にinstance_config_formを実装する必要があります。';
$string['versionphpmissing'] = 'プラグイン %s %s のversion.phpがありません!';
$string['blocktypeprovidedbyartefactnotinstallable'] = 'これはアーティファクトプラグイン %s の一部としてインストールされます。';
$string['blockconfigdatacalledfromset'] = 'configデータを直接設定しないでください。代わりにPluginBlocktype::instance_config_saveを使用してください。';
$string['invaliddirection'] = '無効な移動先: %s';
$string['onlyoneprofileviewallowed'] = 'あなたは1つのプロファイルページのみ許可されています。';
$string['onlyoneblocktypeperview'] = '2つ以上の %s ブロックタイプをページに追加できません。';
$string['unrecoverableerror'] = '回復不能なエラーが発生しました。恐らく、あなたはシステムバグに遭遇したと思われます。';
$string['unrecoverableerrortitle'] = '%s - サイト利用不可';
$string['parameterexception'] = '必須パラメータが指定されていません。';
$string['notfound'] = '不明';
$string['notfoundexception'] = 'あなたが探しているページは見つかりませんでした。';
$string['accessdenied'] = 'アクセスが拒否されました。';
$string['accessdeniedexception'] = 'あなたにはこのページを閲覧するアクセス権がありません。';
$string['viewnotfoundexceptiontitle'] = 'ページが見つかりませんでした。';
$string['viewnotfoundexceptionmessage'] = 'あなたは存在しないページにアクセスを試みました!';
$string['viewnotfound'] = 'ID %s のページは見つかりませんでした。';
$string['youcannotviewthisusersprofile'] = 'あなたはこのユーザのプロファイルを閲覧できません。';
$string['artefactnotfoundmaybedeleted'] = 'ID %s のアーティファクトは見つかりませんでした (もしかして削除されましたか?)。';
$string['artefactnotfound'] = 'ID %s のアーティファクトは見つかりませんでした。';
$string['artefactnotinview'] = 'アーティファクト %s はページ %s にありません。';
$string['artefactonlyviewableinview'] = 'このタイプのアーティファクトはページ内でのみ閲覧できます。';
$string['notartefactowner'] = 'あなたはこのアーティファクトを所有していません。';
$string['blockinstancednotfound'] = 'ID %s のブロックインスタンスは見つかりませんでした。';
$string['interactioninstancenotfound'] = 'ID %s の活動インスタンスは見つかりませんでした。';
$string['invalidviewaction'] = '無効なページコントロール: %s';
$string['missingparamblocktype'] = '最初に追加するブロックタイプを選択してください。';
$string['missingparamcolumn'] = 'カラム設定がありません。';
$string['missingparamorder'] = '並べ替え順設定がありません。';
$string['missingparamid'] = 'IDがありません。';
$string['themenameinvalid'] = 'テーマ名「 %s 」に無効な文字が含まれています。';
$string['timezoneidentifierunusable'] = 'あなたのウェブサイトのPHPはタイムゾーンID (%z) に対して有益な値を返していないようです - Leap2Aエクスポート等の日付フォーマットが壊れる可能性があります。%z はPHPの日付フォーマットコードです。通常、この問題はWindows上で実行されるPHPの制限に起因します。';
$string['postmaxlessthanuploadmax'] = 'あなたのPHP post_max_size (%s) はupload_max_filesize (%s) よりも小さく設定されています。%s より大きなファイルをアップロードした場合、エラー表示なしにアップロードが失敗してしまいます。通常、post_max_sizeはupload_max_filesizeよりも大きく設定する必要があります。';
$string['smallpostmaxsize'] = 'あなたのPHP post_max_size (%s) 設定は小さすぎます。%s より大きなファイルをアップロードした場合、エラー表示なしにアップロードが失敗してしまいます。';

?>
