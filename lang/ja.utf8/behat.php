<?php

defined('INTERNAL') || die();

$string['errorbehatcommand'] = 'Behat CLIコマンドの実行中にエラーが発生しました。さらに問題を調査するにはCLIで「{$a} --help」を手動実行してください。';
$string['errorcomposer'] = 'コンポーザ依存関係がインストールされていません。';
$string['errordataroot'] = '「$CFG->behat_dataroot」が設定されていないか有効ではありません。';
$string['errorsetconfig'] = 'config.phpに「$CFG->behat_dataroot」「$CFG->behat_dbprefix」および「$CFG->behat_wwwroot」を設定する必要があります。';
$string['erroruniqueconfig'] = '「$CFG->behat_dataroot」「$CFG->behat_dbprefix」および「$CFG->behat_wwwroot」の値は「$CFG->dataroot」「$CFG->dbprefix」「$CFG->wwwroot」「$CFG->phpunit_dataroot」および「$CFG->phpunit_prefix」の値とは異なる必要があります。';
