<?php
/**
 *
 * @package    mahara
 * @subpackage lang (Japanese)
 * @translator Mitsuhiro Yoshida (https://mitstek.com/)
 * @started    2008-01-19 11:25:00 UTC
 * @updated    2016-10-12 16:29:24 UTC
 * @license    https://www.gnu.org/copyleft/gpl.html GNU GPL version 3 or later
 * @copyright  For copyright information on Mahara, please see the README file distributed with this software.
 *
 */

defined('INTERNAL') || die();

$string['browserid'] = 'Persona';
$string['title'] = 'Persona';
$string['description'] = 'Personaで認証する';
$string['notusable'] = '廃止';
$string['deprecatedmsg1'] = '2016年11月30日以降、<a href="https://wiki.mozilla.org/Identity/Persona_Shutdown_Guidelines_for_Reliers">MozillaはPersona認証サービスを停止します</a>。このプラグインは既存のPersonaアカウントの内部認証への移行を補助します。';
$string['nobrowseridinstances'] = 'このサイトにはPersona認証インスタンスはありません。そのため必要な作業はありません。';
$string['institutioncolumn'] = 'インスティテューション';
$string['numuserscolumn'] = 'アクティブなPersonaユーザ数';
$string['migratetitle'] = 'Personaユーザを自動移行する';
$string['migratedesc1'] = 'すべてのPersonaユーザを自動的に内部認証に移行した後、すべてのPersona認証インスタンスを削除します。ユーザには新しいアカウント詳細に関して通知されません。あなたはユーザに通知する必要があります。';

?>
