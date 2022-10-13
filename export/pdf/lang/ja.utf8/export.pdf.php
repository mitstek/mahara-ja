<?php
/**
 *
 * @package    mahara
 * @subpackage lang (Japanese)
 * @translator Mitsuhiro Yoshida (https://mitstek.com/)
 * @started    2008-01-19 11:25:00 UTC
 * @updated    2022-10-13 03:21:40 UTC
 * @license    https://www.gnu.org/licenses/gpl-3.0.html GNU GPL version 3 or later
 * @copyright  For copyright information on Mahara, please see the README file distributed with this software.
 *
 */

defined('INTERNAL') || die();

$string['title1'] = 'ポートフォリオのPDFファイル';
$string['description'] = 'この作成されたZIPファイルにはあなたのポートフォリオが含まれます。あなたはこれを再度インポートできませんが、標準的なPDFビューアで閲覧できます。';
$string['needspdfconfig'] = 'config.php設定「usepdfexport」を「true」にする必要があります。';
$string['needschromeheadless'] = 'PDF出力にHeadless Chromeを利用する実験的エクスポートオプションです。このプラグインを使用するにはサーバに最新版のChromeまたはChromiumブラウザをインストールしてください。';
$string['needschromeheadlessphp'] = '「chrome-php」が必要です。あなたはこれを「make pdfexport」でインストールできます。';
$string['needspdfcombiner'] = 'PDFを結合できるようにするには「pdfunite」または「ghostscript」が必要です。あなたは「apt-get install poppler-utils」で「pdfunite」をインストールできます。';
$string['exportpdfdisabled'] = 'PDFエクスポート依存関係が不足しているためPDFエクスーポートは無効にされています。詳細は<a href="%s">「プラグイン管理」</a>をご覧ください。';
$string['pdffoundcombiner'] = 'PDFコンバイナを使用する: %s';
$string['beginpdfviewexport'] = 'PDFエクスポート処理を開始する';
$string['startuppdfchrome'] = 'Chromeブラウザヘッドレス開始中 ...';
$string['pdfchromestarted'] = 'Chromeブラウザヘッドレス開始中 ... 完了';
$string['pdfchromestartederror'] = 'Chromeブラウザを開始できません - 詳細情報はログをご覧ください。';
