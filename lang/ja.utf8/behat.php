<?php
/**
 *
 * @package    mahara
 * @subpackage lang (Japanese)
 * @translator Mitsuhiro Yoshida (http://mitstek.com/)
 * @started    2008-01-19 11:25:00 UTC
 * @updated    2014-12-27 18:36:45 UTC
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL version 3 or later
 * @copyright  For copyright information on Mahara, please see the README file distributed with this software.
 *
 */

defined('INTERNAL') || die();

$string['errorbehatcommand'] = 'behat CLIコマンドの実行中にエラーが発生しました。さらに問題を調査するには、手動による「{$a} --help」 の実行をお試しください。';
$string['errorcomposer'] = 'コンポーザ依存関係がインストールされていません。';
$string['errordataroot'] = '「$CFG->behat_dataroot」が設定されていない、または無効です。';
$string['errorsetconfig'] = 'config.phpに「$CFG->behat_dataroot」「$CFG->behat_dbprefix」および「$CFG->behat_wwwroot」を設定する必要があります。';
$string['erroruniqueconfig'] = '「$CFG->behat_dataroot」「$CFG->behat_dbprefix」および「$CFG->behat_wwwroot」の値は「$CFG->dataroot」「$CFG->dbprefix」「$CFG->wwwroot」「$CFG->phpunit_dataroot」および「$CFG->phpunit_prefix」の値と異なる必要があります。';

?>
