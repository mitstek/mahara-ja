<?php
/**
 *
 * @package    mahara
 * @subpackage lang (Japanese)
 * @translator Mitsuhiro Yoshida (https://mitstek.com/)
 * @started    2008-01-19 11:25:00 UTC
 * @updated    2026-07-21 05:44:41 UTC
 * @license    https://www.gnu.org/licenses/gpl-3.0.html GNU GPL version 3 or later
 * @copyright  For copyright information on Mahara, please see the README file distributed with this software.
 *
 */

defined('INTERNAL') || die();

$string['bulkselect'] = '更新する言語を選択する';
$string['code'] = '言語コード';
$string['langpacks'] = '言語';
$string['languagepacks_title'] = '言語';
$string['site.langpacks_help'] = '<h1>言語</h1>
<p>このページにはインストールされている言語およびこのインタフェース経由で最後に更新された日時が一覧表示されます。CLI経由または言語パックをサーバに直接追加する更新ではこの日付は更新されません。</p>
<p>ドロップダウンメニューから新しい言語を選択してインストールしてください。あなたのMaharaのバージョンの翻訳が自動的に選択されます。</p>
<p>翻訳はコミュニティにより管理されているため、一部の言語は不完全な場合があります。<a href="https://git.mahara.org/catalyst/mahara/-/wikis/Translations/Language-packs">翻訳チームにご参加ください</a>。翻訳の更新が言語パックに反映されるまでには最大24時間かかります。最新の日付に関して<a href="https://langpacks.mahara.org">言語パックサイト</a>をご確認ください。</p>
<p>言語をインストールできない場合、あなたのサーバから手動で削除する場所がエラーメッセージに表示されます。エラーなしでインストールに失敗した場合、「管理エリア → サイト概要 → 管理ダッシュボード」でキャッシュをクリアした後、翻訳を再度インストールしてみてください。</p>
<p>言語を削除するにはサーバから直接削除してください。このインタフェースからは言語を削除できません。</p>';
$string['languagepackdescription'] = 'アカウント保持者がサイトで使用できる言語を追加および更新します。';
$string['selectlang'] = '言語「 %s 」を選択する';
$string['confirmsync'] = '本当にインストール済み言語を更新してもよろしいですか?';
$string['updatelangpacks'] = '更新';
$string['nolanguageselected'] = '言語未選択';
$string['languagesyncsuccessfully'] = '言語が正常に更新されました。';
$string['languagesyncunsuccessful'] = '%s の更新に失敗しました。';
$string['filetoinstall'] = 'ファイル';
$string['fileorigin'] = 'ファイルオリジン';
$string['langpackuptodate'] = '%s は最新版です。';
$string['addlangpack'] = '言語を追加する';
$string['selectlangpack'] = '言語を選択する';
$string['addlangpackdescription'] = 'サイトに追加する言語を選択してください。';
$string['langpackadded'] = '%s が追加されました。';
$string['langalreadyinstalled'] = '%s はすでにインストールされています。';
$string['notvalidlangpack'] = '%s は有効な言語選択ではありません。';
$string['brokenlangpack'] = '%s の設定ファイルが壊れています。手動で修正するか %s ディレクトリを削除してこの言語を完全に取り除いてください。';
$string['unreadablelangpack'] = '言語ディレクトリ %s を読めません。';
$string['nolanguagepacksfound'] = 'インストールされている言語はありません。新しい言語を追加するには以下で追加してください。';
$string['installedlangversion'] = 'インストールバージョン';
$string['wronglanguageversion'] = '言語パック「 %s 」[%s] はMaharaの古いバージョンのものです。「管理メニュー → 開発 → 言語」でアップデートしてください。';
