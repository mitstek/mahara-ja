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
 * @started    2008-01-19 11:25:00 GMT
 * @updated    2008-06-06 07:31:14 GMT
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL
 * @copyright  (C) 2006 onwards Catalyst IT Ltd http://catalyst.net.nz
 *
 */

defined('INTERNAL') || die();

$string['phpversion'] = 'Maharaは、PHP 5.1.3以下では動作しません。あなたのPHPバージョンをアップグレードするか、Maharaを他のホストに移動してください。';
$string['jsonextensionnotloaded'] = 'あなたのサーバの設定には、JSON拡張モジュールが含まれていません。ブラウザへのデータ送受信のため、Maharaではこのモジュールを必要とします。このモジュールがphp.iniに設定されているかどうか確認してください。また、インストールされていない場合、インストールしてください。';
$string['pgsqldbextensionnotloaded'] = 'あなたのサーバの設定には、pgsql拡張モジュールが含まれていません。データをリレーショナルデータベースに保存するため、Maharaではこのモジュールを必要とします。このモジュールがphp.iniに設定されているかどうか確認してください。また、インストールされていない場合、インストールしてください。';
$string['mysqldbextensionnotloaded'] = 'あなたのサーバの設定には、mysql拡張モジュールが含まれていません。データをリレーショナルデータベースに保存するため、Maharaではこのモジュールを必要とします。このモジュールがphp.iniに設定されているかどうか確認してください。また、インストルされていない場合、インストールしてください。';
$string['mysqldbtypedeprecated'] = 'あなたは設定ファイルにdbtyp「mysql」を使用しています。「mysql5」に変更してください - 「mysql」は廃止されました。';
$string['unknowndbtype'] = 'あなたのサーバ設定は、不明なデータベースタイプを参照しています。有効な値は「postgres8」および「mysql5」です。config.phpでデータベースタイプを変更してください。';
$string['xmlextensionnotloaded'] = 'あなたのサーバの設定には、%s 拡張モジュールが含まれていません。様々なソースのXMLデータを構文解析するため、Maharaではこのモジュールを必要とします。このモジュールがphp.iniに設定されているかどうか確認してください。また、インストールされていない場合、インストールしてください。';
$string['gdextensionnotloaded'] = 'あなたのサーバの設定には、gd拡張モジュールが含まれていません。アップロードされたイメージのリサイズおよび他の処理を実行するため、Maharaではこのモジュールを必要とします。このモジュールがphp.iniに設定されているかどうか確認してください。また、インストールされていない場合、インストールしてください。';
$string['sessionextensionnotloaded'] = 'あなたのサーバの設定には、session拡張モジュールが含まれていません。ユーザログインをサポートするため、Maharaではこのモジュールを必要とします。このモジュールがphp.iniに設定されているかどうか確認してください。また、インストールされていない場合、インストールしてください。';
$string['registerglobals'] = 'あなたは危険なPHP設定、register_globalsをonにしています。Maharaは、この問題の対処を試みますが、設定の修正を強くお勧めします。';
$string['magicquotesgpc'] = 'あなたは危険なPHP設定、magic_quotes_gpsをonにしています。Maharaは、この問題の対処を試みますが、設定の修正を強くお勧めします。';
$string['magicquotesruntime'] = 'あなたは危険なPHP設定、magic_quotes_runtimeをonにしています。Maharaは、この問題の対処を試みますが、設定の修正を強くお勧めします。';
$string['magicquotessybase'] = 'あなたは危険なPHP設定、magic_quotes_sybaseをonにしています。Maharaは、この問題の対処を試みますが、設定の修正を強くお勧めします。';
$string['safemodeon'] = 'あなたのサーバはセーフモードで動作しているようです。Maharaは、セーフモードでの運用をサポートしていません。php.iniファイルまたはサイトのApache設定でセーフモードを無効にしてください。

あなたが共有ホスティングサービスを利用している場合、ホスティングプロバイダに依頼する以外、safe_modeを無効にするためにできることは多くありません。別のホスティングサービスへの移管を考えても良いでしょう。';
$string['datarootinsidedocroot'] = 'あなたはデータルートをドキュメントルートの中に設定したようです。これには多大なセキュリティ上の問題があり、誰でも (他の人のセッションをハイジャックするため) 直接セッションデータをリクエストすることができます。また、他の人がアップロードした、アクセスを許可されていないファイルにアクセスすることができます。データルートをドキュメントルートの外に設定してください。';
$string['datarootnotwritable'] = 'あなたが定義したルートディレクトリ「 %s 」に書込み権がありません。これは、セッションデータ、ユーザファイル、その他アップロードする必要のあるファイルをアップロードできないことを意味します。ディレクトリが存在しているかどうか確認してください。ディレクトリ存在している場合、ディレクトリにウェブサーバユーザの所有権を与えてください。';
$string['couldnotmakedatadirectories'] = '何らかの理由で、コアデータディレクトリを作成することができませんでした。前もってMaharaがデータディレクトリの書込み権を確認しましたので、このエラーが発生することはないと考えられます。データルートディレクトリのパーミッションをご確認ください。';
$string['dbconnfailed'] = 'Maharaは、アプリケーションデータベースに接続できませんでした。

* あなたがMaharaを使用している場合、少し待った後、再度お試しください。
* あなたが管理者の場合、あなたのデータベースの設定およびデータベースが利用可能かどうか確認してください。

エラー内容は:';
$string['blocktypenametaken'] = 'ブロックタイプ %s は、すでに他のプラグイン (%s) に取得されています。';
$string['artefacttypenametaken'] = 'アーティファクトタイプ %s は、すでに他のプラグイン (%s) に取得されています。';
$string['classmissing'] = 'クラス %s (タイプ % - プラグイン %s) がありません。';
$string['artefacttypeclassmissing'] = 'すべてのアーティファクトタイプは、クラスをインプリメントする必要があります。%s がありません。';
$string['artefactpluginmethodmissing'] = 'アーティファクトプラグイン %s で必要な %s が実装されていません。';
$string['blocktypelibmissing'] = 'ブロック %s のlib.phpがアーティファクトプラグイン %s 内にありません。';
$string['blocktypemissingconfigform'] = 'ブロックタイプ %s は、instance_config_formをインプリメントする必要があります。';
$string['versionphpmissing'] = 'プラグイン %s %s のversion.phpがありません!';
$string['blocktypeprovidedbyartefactnotinstallable'] = 'これは、アーティファクトプラグイン %s の一部としてインストールされます。';
$string['blockconfigdatacalledfromset'] = 'configデータは直接設定しないでください。代わりにPluginBlocktype::instance_config_saveをお使いください。';
$string['invaliddirection'] = '無効な移動先: %s';
$string['unrecoverableerror'] = '回復不能なエラーが発生しました。恐らく、あなたはシステムバグに遭遇したと思われます。';
$string['unrecoverableerrortitle'] = '%s - サイト利用不可';
$string['parameterexception'] = '必須パラメータが指定されていません。';
$string['accessdeniedexception'] = 'あなたには、このページを閲覧するアクセス権限がありません。';
$string['notfound'] = '不明';
$string['notfoundexception'] = 'あなたが探しているページは見つかりませんでした。';
$string['accessdenied'] = 'アクセスが拒否されました。';
$string['viewnotfoundexceptiontitle'] = 'ビューが見つかりませんでした。';
$string['viewnotfoundexceptionmessage'] = 'あなたは、存在しないビューにアクセスを試みました!';
$string['viewnotfound'] = 'ID %s のビューはありません。';
$string['artefactnotfoundmaybedeleted'] = 'ID %s のアーティファクトはありません (もしかして、削除されましたか?)。';
$string['artefactnotfound'] = 'ID %s のアーティファクトはありません。';
$string['notartefactowner'] = 'あなたは、このアーティファクトを所有していません。';
$string['blockinstancednotfound'] = 'ID %s のブロックインスタンスはありません。';
$string['interactioninstancenotfound'] = 'ID %s のインタラクションインスタンスはありません。';
$string['invalidviewaction'] = '無効なビューコントロール: %s';
$string['missingparamblocktype'] = '最初に追加するブロックタイプを選択してください。';
$string['missingparamcolumn'] = 'カラム設定がありません。';
$string['missingparamorder'] = '並び替え順の設定がありません。';
$string['missingparamid'] = 'IDがありません。';
$string['libxmlextensionnotloaded'] = 'あなたのサーバの設定には、libxml拡張モジュールが含まれていません。インストーラおよびバックアップでXMLデータを構文解析するため、Maharaではこのモジュールを必要とします。このモジュールがphp.iniに設定されているかどうか確認してください。また、インストールされていない場合、インストールしてください。'; // TBD
$string['opensslextensionnotloaded'] = 'あなたのサーバの設定には、openssl拡張モジュールが含まれていません。ユーザログインをサポートするため、Maharaではこのモジュールを必要としませんが、あなたがネットワーキングサポートを有効したい場合、必要です。'; // TBD
$string['curlextensionnotloaded'] = 'あなたのサーバの設定には、curl拡張モジュールが含まれていません。ユーザログインをサポートするため、Maharaではこのモジュールを必要としませんが、あなたがネットワーキングサポートを有効したい場合、必要です。'; // TBD
$string['xmlrpcextensionnotloaded'] = 'あなたのサーバの設定には、xmlrpc拡張モジュールが含まれていません。ユーザログインをサポートするため、Maharaではこのモジュールを必要としませんが、あなたがネットワーキングサポートを有効したい場合、必要です。'; // TBD

?>
