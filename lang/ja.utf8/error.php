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
 * @updated    2009-01-05 07:09:46 UTC
 * @license    https://www.gnu.org/copyleft/gpl.html GNU GPL
 * @copyright  (C) 2006 onwards Catalyst IT Ltd https://catalyst.net.nz
 *
 */

defined('INTERNAL') || die();

$string['phpversion'] = 'MaharaはPHP 5.1.3以下では動作しません。あなたのPHPバージョンをアップグレードするか、Maharaを別のホストに移動してください。';
$string['jsonextensionnotloaded'] = 'あなたのサーバ設定にはJSON拡張モジュールが含まれていません。ブラウザへのデータ送受信のためMaharaではこのモジュールを必要とします。このモジュールがphp.iniに設定されているか確認してください。インストールされていない場合、インストールしてください。';
$string['pgsqldbextensionnotloaded'] = 'あなたのサーバ設定にはpgsql拡張モジュールが含まれていません。リレーショナルデータベースにデータを保存するためMaharaではこのモジュールを必要とします。このモジュールがphp.iniに設定されているか確認してください。インストールされていない場合、インストールしてください。';
$string['mysqldbextensionnotloaded'] = 'あなたのサーバ設定にはmysql拡張モジュールが含まれていません。リレーショナルデータベースにデータを保存するためMaharaではこのモジュールを必要とします。このモジュールがphp.iniに設定されているか確認してください。インストールされていない場合、インストールしてください。';
$string['mysqldbtypedeprecated'] = 'あなたは設定ファイルにdbtype「mysql」を使用しています。「mysql5」に変更してください - 「mysql」は廃止されました。';
$string['unknowndbtype'] = 'あなたのサーバ設定は不明なデータベースタイプを参照しています。有効な値は「postgres8」および「mysql5」です。config.php内のデータベースタイプ設定を変更してください。';
$string['xmlextensionnotloaded'] = 'あなたのサーバ設定には %s 拡張モジュールが含まれていません。様々なソースのXMLデータを構文解析するためMaharaではこのモジュールを必要とします。このモジュールがphp.iniに設定されているか確認してください。インストールされていない場合、インストールしてください。';
$string['gdextensionnotloaded'] = 'あなたのサーバ設定にはGD拡張モジュールが含まれていません。アップロードされたイメージのリサイズおよび他の処理を実行するためMaharaではこのモジュールを必要とします。このモジュールがphp.iniに設定されているか確認してください。インストールされていない場合、インストールしてください。';
$string['sessionextensionnotloaded'] = 'あなたのサーバ設定にはsession拡張モジュールが含まれていません。ユーザログインをサポートするためMaharaではこのモジュールを必要とします。このモジュールがphp.iniに設定されているか確認してください。インストールされていない場合、インストールしてください。';
$string['registerglobals'] = 'あなたは危険なPHP設定「register_globals」をonにしています。Maharaはこの問題の対処を試みますが設定変更を強くお勧めします。';
$string['magicquotesgpc'] = 'あなたは危険なPHP設定「magic_quotes_gpc」をonにしています。Maharaはこの問題の対処を試みますが設定変更を強くお勧めします。';
$string['magicquotesruntime'] = 'あなたは危険なPHP設定「magic_quotes_runtime」をonにしています。Maharaはこの問題の対処を試みますが設定変更を強くお勧めします。';
$string['magicquotessybase'] = 'あなたは危険なPHP設定「magic_quotes_sybase」をonにしています。Maharaはこの問題の対処を試みますが設定変更を強くお勧めします。';
$string['safemodeon'] = 'あなたのサーバはセーフモードで動作しているようです。Maharaはセーフモードでの運用をサポートしていません。php.iniファイルまたはサイトのApache設定でセーフモードを無効にしてください。

あなたが共有ホスティングを利用している場合、ホスティングプロバイダに依頼する以外、safe_modeを無効にするためにできることは多くありません。別のホストへの移行を考えても良いでしょう。';
$string['datarootinsidedocroot'] = 'あなたはドキュメントルート内にデータルートを設定したようです。これには誰でも (他の人のセッションをハイジャックするため) 直接セッションデータをリクエストできる多大なセキュリティ上の問題があります。また、他の人がアップロードしたアクセス許可されていないファイルに誰でもアクセスできます。データルートをドキュメントルートの外に設定してください。';
$string['datarootnotwritable'] = 'あなたが定義したデータルートディレクトリ「 %s 」に書込み権がありません。これはセッションデータ、ユーザファイル、その他アップロードする必要のあるファイルをアップロードできないことを意味します。ディレクトリが存在しているかどうか確認してください。ディレクトリが存在している場合、ディレクトリにウェブサーバユーザの所有権を与えてください。';
$string['couldnotmakedatadirectories'] = '何らかの理由で一部のコアデータディレクトリを作成できませんでした。Maharaが事前にdatarootディレクトリの書込み権を確認したためこのエラーが発生することはないと考えられます。datarootディレクトリのパーミッションを確認してください。';
$string['dbconnfailed'] = 'Maharaがアプリケーションデータベースに接続できませんでした。

* あなたがMaharaを利用している場合、少し待った後、再度お試しください。
* あなたが管理者である場合、データベース設定およびデータベースが利用可能かどうか確認してください。

エラー内容は次のとおりです:';
$string['blocktypenametaken'] = 'ブロックタイプ %s はすでに他のプラグイン (%s) に取得されています。';
$string['artefacttypenametaken'] = 'アーティファクトタイプ %s はすでに他のプラグイン (%s) に取得されています。';
$string['classmissing'] = 'クラス %s (タイプ %s - プラグイン %s) がありません。';
$string['artefacttypeclassmissing'] = 'すべてのアーティファクトタイプにはクラスを実装する必要があります。%s がありません。';
$string['artefactpluginmethodmissing'] = 'アーティファクトプラグイン %s で必要な %s が実装されていません。';
$string['blocktypelibmissing'] = 'ブロック %s (アーティファクトプラグイン %s ) のlib.phpがありません。';
$string['blocktypemissingconfigform'] = 'ブロックタイプ %s にinstance_config_formを実装する必要があります。';
$string['versionphpmissing'] = 'プラグイン %s %s のversion.phpがありません!';
$string['blocktypeprovidedbyartefactnotinstallable'] = 'これはアーティファクトプラグイン %s の一部としてインストールされます。';
$string['blockconfigdatacalledfromset'] = 'configデータを直接設定しないでください。代わりにPluginBlocktype::instance_config_saveを使用してください。';
$string['invaliddirection'] = '無効な移動先: %s';
$string['unrecoverableerror'] = '回復不能なエラーが発生しました。恐らく、あなたはシステムバグに遭遇したと思われます。';
$string['unrecoverableerrortitle'] = '%s - サイト利用不可';
$string['parameterexception'] = '必須パラメータがありません。';
$string['accessdeniedexception'] = 'あなたにはこのページを閲覧するためのアクセス権がありません。';
$string['notfound'] = '不明';
$string['notfoundexception'] = 'あなたが探しているページは見つかりませんでした。';
$string['accessdenied'] = 'アクセスが拒否されました。';
$string['viewnotfoundexceptiontitle'] = 'ビューは見つかりませんでした。';
$string['viewnotfoundexceptionmessage'] = 'あなたは存在しないビューにアクセスを試みました!';
$string['viewnotfound'] = 'ID %s のビューは見つかりませんでした。';
$string['artefactnotfoundmaybedeleted'] = 'ID %s のアーティファクトは見つかりませんでした (もしかしてすでに削除されていますか?)。';
$string['artefactnotfound'] = 'ID %s のアーティファクトは見つかりませんでした。';
$string['notartefactowner'] = 'あなたはこのアーティファクトを所有していません。';
$string['blockinstancednotfound'] = 'ID %s のブロックインスタンスは見つかりませんでした。';
$string['interactioninstancenotfound'] = 'ID %s の活動インスタンスは見つかりませんでした。';
$string['invalidviewaction'] = '無効なビューコントロール: %s';
$string['missingparamblocktype'] = '最初に追加するブロックタイプを選択してください。';
$string['missingparamcolumn'] = 'カラム設定がありません。';
$string['missingparamorder'] = '並べ替え順設定がありません。';
$string['missingparamid'] = 'IDがありません。';

?>
