<?php
/**
 *
 * @package    mahara
 * @subpackage lang (Japanese)
 * @translator Mitsuhiro Yoshida (https://mitstek.com/)
 * @started    2008-01-19 11:25:00 UTC
 * @updated    2026-05-19 01:07:33 UTC
 * @license    https://www.gnu.org/licenses/gpl-3.0.html GNU GPL version 3 or later
 * @copyright  For copyright information on Mahara, please see the README file distributed with this software.
 *
 */

defined('INTERNAL') || die();

$string['pluginname'] = '内部';
$string['exactusersearch'] = '完全一致人検索';
$string['pluginconfig.exactusersearch_help'] = '<h1>完全一致人検索</h1>
<p>「人を探す」ボックスおよび「人」ページでの検索結果にはプロファイルフィールドが検索語句と完全に一致するユーザのみ表示されます。</p><p>部分一致では結果が表示されない点に留意してください。例えば「Pau」と検索しても、「Paul」または「Paula」という名前のユーザは見つかりません。</p><hr><h2>詳細</h2><p>サイトに登録されているユーザ数が多く、PostgreSQLデータベースを使用している場合、
「完全一致検索」を有効にすることでユーザ検索の速度が向上します。
この設定はMySQLデータベースでも機能しますが、
検索パフォーマンスが大幅に向上する可能性は高くありません。</p>';
