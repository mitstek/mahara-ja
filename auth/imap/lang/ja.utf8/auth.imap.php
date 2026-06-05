<?php
/**
 *
 * @package    mahara
 * @subpackage lang (Japanese)
 * @translator Mitsuhiro Yoshida (https://mitstek.com/)
 * @started    2008-01-19 11:25:00 UTC
 * @updated    2026-06-05 12:33:20 UTC
 * @license    https://www.gnu.org/licenses/gpl-3.0.html GNU GPL version 3 or later
 * @copyright  For copyright information on Mahara, please see the README file distributed with this software.
 *
 */

defined('INTERNAL') || die();

$string['title'] = 'IMAP';
$string['imapconfig'] = 'IMAP設定';
$string['description'] = 'IMAPメールサーバで認証する';
$string['notusable'] = 'PHP IMAP拡張モジュールをインストールしてください。';
$string['domainname'] = 'メールアドレスドメイン名';
$string['auth_config.domainname_help'] = '<h1>メールアドレスドメイン名</h1>
<p>このドメインのメールアドレスのみ受け入れます。これはあなたがGoogle等の共有IMAPプロバイダでカスタムドメインを使用する場合に便利です。例えばGoogleでカスタムドメインを使用する場合:</p>
<ul>
  <li>ホスト名またはアドレス: imap.gmail.com</li>
  <li>ポート: 993</li>
  <li>プロトコル: IMAP/SSL</li>
  <li>ドメイン名: your.domain</li>
</ul>
<p>詳細はあなたのIMAPプロバイダのドキュメンテーションをご覧ください。</p>';
$string['weautocreateusers'] = 'こちらでアカウントを自動作成する';
