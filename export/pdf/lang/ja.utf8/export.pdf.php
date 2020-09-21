<?php
/**
 *
 * @package    mahara
 * @subpackage lang (Japanese)
 * @translator Mitsuhiro Yoshida (https://mitstek.com/)
 * @started    2008-01-19 11:25:00 UTC
 * @updated    2020-09-21 21:42:33 UTC
 * @license    https://www.gnu.org/copyleft/gpl.html GNU GPL version 3 or later
 * @copyright  For copyright information on Mahara, please see the README file distributed with this software.
 *
 */

defined('INTERNAL') || die();

$string['title'] = 'ページおよびコレクションのPDFファイル';
$string['description'] = 'この作成されたZIPファイルにはあなたのポートフォリオが含まれます。あなたはこれを再度インポートできませんが、標準的なPDFビューアで閲覧できます。';
$string['needspdfconfig'] = 'config.php設定「usepdfexport」を「true」にする必要があります。';
$string['needschromeheadless'] = 'PDF出力にHeadless Chromeを利用する実験的エクスポートオプションです。このプラグインを使用するにはサーバに最新版のChromeまたはChromiumブラウザをインストールしてください。';
$string['needschromeheadlessphp'] = '「chrome-php」が必要です。あなたはこれを「make pdfexport」でインストールできます。';
$string['needspdfcombiner'] = 'PDFを結合できるようにするには「pdfunite」または「ghostscript」が必要です。あなたは「apt-get install poppler-utils」で「pdfunite」をインストールできます。';
$string['exportpdfdisabled'] = 'PDFエクスポート依存関係が不足しているためPDFエクスーポートは無効にされています。詳細は<a href="%s">「プラグイン管理」</a>をご覧ください。';

?>
