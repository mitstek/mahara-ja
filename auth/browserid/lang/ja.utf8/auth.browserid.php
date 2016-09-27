<?php
/**
 *
 * @package    mahara
 * @subpackage lang (Japanese)
 * @translator Mitsuhiro Yoshida (http://mitstek.com/)
 * @started    2008-01-19 11:25:00 UTC
 * @updated    2016-09-27 18:43:12 UTC
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL version 3 or later
 * @copyright  For copyright information on Mahara, please see the README file distributed with this software.
 *
 */

defined('INTERNAL') || die();

$string['browserid'] = 'Persona';
$string['title'] = 'Persona';
$string['description'] = 'Personaで認証する';
$string['notusable'] = 'PHP cURL拡張モジュールをインストールした後、Personaベリファイアへの接続をチェックしてください。';
$string['deprecatedmsg'] = '2016年11月30日以降、<a href="https://wiki.mozilla.org/Identity/Persona_Shutdown_Guidelines_for_Reliers">MozillaはPersona認証サービスを停止します</a>。このプラグインは既存のPersonaアカウントをPersonaから内部認証への移行を補助するための代理人となります。';
$string['nobrowseridinstances'] = 'このサイトにはPersona認証インスタンスはありません。そのため必要な作業はありません。';
$string['institutioncolumn'] = 'インスティテューション';
$string['numuserscolumn'] = 'アクティブなPersonaユーザ数';
$string['migratetitle'] = 'Personaユーザを自動移行する';
$string['migratedesc'] = 'すべてのPersonaユーザを自動的に内部認証に移行した後、すべてのPersona認証インスタンスを削除します。';

?>
