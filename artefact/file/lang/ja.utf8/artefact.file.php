<?php
/**
 * Mahara: Electronic portfolio, weblog, resume builder and social networking
 * Copyright (C) 2006 onwards Catalyst IT Ltd (http://www.catalyst.net.nz)
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
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @package    mahara
 * @subpackage lang (Japanese)
 * @translator Mitsuhiro Yoshida (https://mitstek.com/)
 * @started    2008-01-19 11:25:00 UTC
 * @updated    2016-09-06 13:38:41 UTC
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL
 * @copyright  (C) 2006 onwards Catalyst IT Ltd http://catalyst.net.nz
 *
 */

defined('INTERNAL') || die();

$string['pluginname'] = 'ファイル';
$string['sitefilesloaded'] = 'サイトファイルが読み込まれました。';
$string['addafile'] = 'ファイルを追加する';
$string['archive'] = 'アーカイブ';
$string['bytes'] = 'バイト';
$string['cannotviewfolder'] = 'あなたにはこのフォルダのコンテンツを閲覧するパーミッションがありません。';
$string['cannoteditfolder'] = 'あなたにはこのフォルダにコンテンツを追加するパーミッションがありません。';
$string['cannoteditfoldersubmitted'] = 'あなたは送信済みページのフォルダにコンテンツを追加できません。';
$string['cannotremovefromsubmittedfolder'] = 'あなたは送信済みページのフォルダからコンテンツを削除できません。';
$string['cannotextractfilesubmitted'] = 'あなたは送信済みページでファイルを展開できません。';
$string['cannotextractfileinfoldersubmitted'] = 'あなたは送信済みページのフォルダ内でファイルを展開できません。';
$string['changessaved'] = '変更が保存されました。';
$string['clickanddragtomovefile'] = '%s を移動するにはクリック&ドラッグしてください。';
$string['contents'] = 'コンテンツ';
$string['copyrightnotice'] = '著作権表示';
$string['create'] = '作成';
$string['Created'] = '作成日時';
$string['createfolder'] = 'フォルダを作成する';
$string['confirmdeletefile'] = '本当にこのファイルを削除してもよろしいですか?';
$string['confirmdeletefolder'] = '本当にこのフォルダを削除してもよろしいですか?';
$string['confirmdeletefolderandcontents'] = '本当にこのフォルダおよびそのコンテンツを削除してもよろしいですか?';
$string['customagreement'] = 'カスタム同意';
$string['Date'] = '登録日';
$string['resizeonupload'] = 'アップロード時、イメージをリサイズする';
$string['resizeonuploaddescription'] = 'アップロード時、自動的に大きなイメージをリサイズします。';
$string['resizeonuploaduseroption1'] = 'ユーザオプション';
$string['resizeonuploaduseroptiondescription1'] = 'この設定を有効にした場合、アップロード時に自動的に大きなイメージをリサイズするオプションをユーザに表示します。';
$string['resizeonuploadenable1'] = '大きなイメージを自動的にリサイズする';
$string['resizeonuploadenablefilebrowser1'] = '%sx%s pxより大きなイメージを自動的にリサイズします (推奨)。';
$string['resizeonuploadmaxwidth'] = '最大幅';
$string['resizeonuploadmaxheight'] = '最大高さ';
$string['resizeonuploadenabledescription1'] = 'この設定を有効にした場合、最大高さおよび幅の設定値を超えた大きなイメージをアップロード時にリサイズします。';
$string['defaultagreement'] = 'デフォルト同意';
$string['defaultquota'] = 'デフォルトクオータ';
$string['defaultquotadescription'] = 'あなたは新しいユーザがクオータとして持つことのできるディスクスペース総量をここで設定できます。';
$string['updateuserquotas'] = 'ユーザクオータを更新する';
$string['updateuserquotasdesc'] = 'この設定を有効にした場合、あなたが上で選択したデフォルトクオータを既存のユーザすべてに適用します。';
$string['institutionoverride'] = 'インスティテューションクオータ';
$string['institutionoverridedescription'] = 'あなたはインスティテューション管理者がユーザに与えることのできる最大クオータを設定できます。同時にそれぞれのインスティテューションのデフォルトクオータを設定できます。';
$string['maxquotaenabled'] = 'サイト全体の最大クオータを強制する';
$string['maxquota'] = '最大クオータ';
$string['maxquotatoolow'] = '最大クオータをデフォルトクオータより小さくすることはできませ。';
$string['maxquotaexceeded'] = 'あなたはこのサイトに設定されている最大利用可能サイズ (%s) を超えてクオータを指定しました。値を小さくするかサイト管理者に連絡して最大サイズを増やしてください。';
$string['maxquotaexceededform'] = '%s より小さなファイルクオータを指定してください。';
$string['maxquotadescription'] = 'あなたは管理者がユーザに与えることのできる最大クオータを設定できます。既存のユーザクオータは影響を受けません。';
$string['defaultgroupquota'] = 'デフォルトグループクオータ';
$string['defaultgroupquotadescription'] = 'あなたは新しいグループがファイルエリアで使用できるディスクスペース総量を設定できます。';
$string['updategroupquotas'] = 'グループクオータを更新する';
$string['updategroupquotasdesc'] = 'この設定を有効にした場合、あなたが上で選択したデフォルトクオータを既存のグループすべてに適用します。';
$string['deletingfailed'] = '削除に失敗しました: ファイルまたはフォルダはすでに存在しません。';
$string['deletefile?'] = '本当にこのファイルを削除してもよろしいですか?';
$string['deletefolder?'] = '本当にこのフォルダを削除してもよろしいですか?';
$string['Description'] = '説明';
$string['destination'] = '作成場所';
$string['Details'] = '詳細';
$string['Download'] = 'ダウンロード';
$string['downloadfile'] = '%s をダウンロードする';
$string['downloadoriginalversion'] = 'オリジナルバージョンをダウンロードする';
$string['editfile'] = 'ファイルを編集する';
$string['editfolder'] = 'フォルダを編集する';
$string['editingfailed'] = '編集に失敗しました: ファイルまたはフォルダはすでに存在しません。';
$string['emptyfolder'] = '空のフォルダ';
$string['file'] = 'ファイル';
$string['File'] = 'ファイル';
$string['fileadded'] = 'ファイルが選択されました。';
$string['filealreadyindestination'] = 'あなたが移動しようとしたファイルはすでにフォルダに存在します。';
$string['fileappearsinviews'] = 'このファイルはあなたの1つまたはそれ以上のページに表示されます。';
$string['fileattachedtoportfolioitems'] = 'このファイルはあなたのポートフォリオ内の他の %s アイテムに添付されます。';
$string['profileiconattachedtoportfolioitems'] = 'このプロファイル画像はあなたのポートフォリオ内の他のアイテムに添付されます。';
$string['profileiconappearsinviews'] = 'このプロファイル画像はあなたの1つまたはそれ以上のページに表示されます。';
$string['fileremoved'] = 'ファイルが削除されました。';
$string['files'] = 'ファイル';
$string['Files'] = 'ファイル';
$string['fileexists'] = 'ファイル存在';
$string['fileexistsoverwritecancel'] = 'このファイル名のファイルはすでに存在します。あなたは別のファイル名にするか既存のファイルに上書きできます。';
$string['filelistloaded'] = 'ファイルリストが読み込まれました。';
$string['filemoved'] = 'ファイルが正常に移動されました。';
$string['filenamefieldisrequired'] = 'ファイルフィールドは必須です。';
$string['fileinstructions'] = 'ページに含めるためあなたのイメージ、ドキュメントまたは他のファイルをアップロードしてください。あなたは一度にアップロードするため複数のファイルを選択できます。フォルダを移動するにはフォルダ上にドラッグ&ドロップしてください。';
$string['filethingdeleted'] = '%s が削除されました。';
$string['filewithnameexists'] = '名称「 %s 」のファイルまたはフォルダはすでに存在します。';
$string['folder'] = 'フォルダ';
$string['Folder'] = 'フォルダ';
$string['folderappearsinviews'] = 'このフォルダはあなたの1つまたはそれ以上のページに使用されています。';
$string['Folders'] = 'フォルダ';
$string['foldernotempty'] = 'このフォルダは空ではありません。';
$string['foldercontainsprofileicons'] = 'フォルダには %s 個のプロファイル画像が含まれます。';
$string['foldercreated'] = 'フォルダが作成されました。';
$string['foldernamerequired'] = '新しいフォルダ名を入力してください。';
$string['gotofolder'] = '%s に移動する';
$string['groupfiles'] = 'グループファイル';
$string['home'] = 'ホーム';
$string['htmlremovedmessage'] = 'あなたが閲覧しているファイル「 <strong>%s</strong> 」は<a href="%s">%s</a>によりアップロードされたものです。以下に表示されているファイルは不適切なコンテンツのため削除に向けてフィルタされています。また、ここではオリジナルファイルの概略のみ表示されています。';
$string['htmlremovedmessagenoowner'] = 'あなたはファイル「 <strong>%s</strong> 」を閲覧しています。以下に表示されているファイルは不適切なコンテンツのため削除に向けてフィルタされています。また、ここではオリジナルファイルの概略のみ表示されています。';
$string['image'] = 'イメージ';
$string['Images'] = 'イメージ';
$string['imagesdir'] = 'イメージ';
$string['imagesdirdesc'] = 'イメージファイル';
$string['lastmodified'] = '最終更新日時';
$string['myfiles'] = 'マイファイル';
$string['Name'] = '名称';
$string['namefieldisrequired'] = '名称フィールドは必須です。';
$string['maxuploadsize'] = '最大アップロードサイズ';
$string['movefaileddestinationinartefact'] = 'あなたはフォルダの中に自フォルダを入れることはできません。';
$string['movefaileddestinationnotfolder'] = 'あなたはフォルダ内にのみファイルを移動できます。';
$string['movefailednotfileartefact'] = 'ファイル、フォルダおよびイメージアーティファクトのみ移動できます。';
$string['movefailednotowner'] = 'あなたにはこのフォルダにファイルを移動するパーミッションがありません。';
$string['movefailed'] = '移動に失敗しました。';
$string['movingfailed'] = '移動に失敗しました: ファイルまたはフォルダはすでに存在しません。';
$string['nametoolong'] = '名称が長すぎます。さらに短い名称を入力してください。';
$string['nofilesfound'] = 'ファイルは見つかりませんでした。';
$string['notpublishable'] = 'あなたにはこのファイルを公開するパーミッションがありません。';
$string['overwrite'] = '上書き';
$string['Owner'] = 'オーナー';
$string['parentfolder'] = '親フォルダ';
$string['Preview'] = 'プレビュー';
$string['requireagreement'] = '同意を必要とする';
$string['removingfailed'] = '削除に失敗しました: ファイルまたはフォルダはすでに存在しません。';
$string['savechanges'] = '変更を保存する';
$string['selectafile'] = 'ファイルを選択する';
$string['selectingfailed'] = '選択に失敗しました: ファイルまたはフォルダはすでに存在しません。';
$string['Size'] = 'サイズ';
$string['License'] = 'ライセンス';
$string['spaceused'] = '使用済みスペース';
$string['timeouterror'] = 'ファイルのアップロードに失敗しました: ファイルのアップロードを再度お試しください。';
$string['title'] = '名称';
$string['titlefieldisrequired'] = '名称フィールドは必須です。';
$string['Type'] = 'タイプ';
$string['upload'] = 'アップロード';
$string['uploadagreement'] = 'アップロード同意';
$string['uploadagreementdescription'] = 'あなたが以下のテキストへの同意をサイトへのファイルアップロード時のユーザに強制したい場合、このオプションを有効にしてください。';
$string['uploadexceedsquota'] = 'このファイルをアップロードすることであなたのディスククオータを超えてしまいます。あなたがアップロードしたいくつかのファイルを削除してください。';
$string['uploadexceedsquotagroup'] = 'このファイルをアップロードすることでこのグループのディスククオータを超えてしまいます。あなたがアップロードしたいくつかのファイルを削除してください。';
$string['uploadfile'] = 'ファイルをアップロードする';
$string['uploadfileexistsoverwritecancel'] = 'この名称のファイルはすでに存在します。あなたがアップロードしようとしているファイルをリネームするか既存のファイルに上書きできます。';
$string['uploadingfiletofolder'] = '%s を %s へアップロード中';
$string['uploadoffilecomplete'] = '%s のアップロードが完了しました。';
$string['uploadoffilefailed'] = '%s のアップロードに失敗しました。';
$string['uploadoffiletofoldercomplete'] = '%s の %s へのアップロードが完了しました。';
$string['uploadoffiletofolderfailed'] = '%s の %s へのアップロードに失敗しました。';
$string['usecustomagreement'] = 'カスタム同意を使用する';
$string['youmustagreetothecopyrightnotice'] = 'あなたは著作権表示に同意する必要があります。';
$string['fileuploadedtofolderas'] = '%s が %s に「 %s 」としてアップロードされました。';
$string['fileuploadedas'] = '%s が「 %s 」としてアップロードされました。';
$string['insufficientmemoryforresize'] = '(イメージのリサイズのための十分なメモリがありません。アップロード前に手動でリサイズすることをお考えください)';
$string['ai'] = 'PostScriptドキュメント';
$string['aiff'] = 'AIFFオーディオファイル';
$string['application'] = '不明なアプリケーション';
$string['au'] = 'AUオーディオファイル';
$string['audio'] = 'オーディオファイル';
$string['avi'] = 'AVIビデオファイル';
$string['bmp'] = 'ビットマップイメージ';
$string['doc'] = 'MS Wordドキュメント';
$string['dss'] = 'デジタル音声標準サウンドファイル';
$string['gif'] = 'GIFイメージ';
$string['html'] = 'HTMLファイル';
$string['jpg'] = 'JPEGイメージ';
$string['jpeg'] = 'JPEGイメージ';
$string['js'] = 'JavaScriptファイル';
$string['latex'] = 'LaTeXドキュメント';
$string['m3u'] = 'M3Uオーディオファイル';
$string['mp3'] = 'MP3オーディオファイル';
$string['mp4_audio'] = 'MP4オーディオファイル';
$string['mp4_video'] = 'MP4ビデオファイル';
$string['mpeg'] = 'MPEGムービー';
$string['odb'] = 'OpenOffice / LibreOffice Baseデータベースファイル';
$string['odc'] = 'OpenOffice / LibreOffice Calcファイル';
$string['odf'] = 'OpenOffice / LibreOffice formulaファイル';
$string['odg'] = 'OpenOffice / LibreOffice graphicsファイル';
$string['odi'] = 'OpenOffice / LibreOffice imageファイル';
$string['odm'] = 'OpenOffice / LibreOffice masterドキュメントファイル';
$string['odp'] = 'OOpenOffice / LibreOffice Impressファイル';
$string['ods'] = 'OpenOffice / LibreOffice Spreadsheetファイル';
$string['odt'] = 'OpenOffice / LibreOffice Writerドキュメント';
$string['oth'] = 'OpenOffice / LibreOfficeウェブドキュメント';
$string['ott'] = 'OpenOffice / LibreOfficeテンプレートドキュメント';
$string['pdf'] = 'PDFドキュメント';
$string['png'] = 'PNGイメージ';
$string['ppt'] = 'MS PowerPointドキュメント';
$string['quicktime'] = 'QuickTimeムービー';
$string['ra'] = 'Real Audioファイル';
$string['rtf'] = 'RTFドキュメント';
$string['sgi_movie'] = 'SGIムービーファイル';
$string['sh'] = 'シェルスクリプト';
$string['tar'] = 'TAR書庫';
$string['gz'] = 'Gzip圧縮ファイル';
$string['bz2'] = 'Bzip2圧縮ファイル';
$string['txt'] = 'プレインテキストファイル';
$string['video'] = 'ビデオファイル';
$string['wav'] = 'WAVオーディオファイル';
$string['wmv'] = 'WMVビデオファイル';
$string['xml'] = 'XMLファイル';
$string['zip'] = 'ZIP書庫';
$string['swf'] = 'SWF Flashムービー';
$string['flv'] = 'FLV Flashムービー';
$string['mov'] = 'MOV QuickTimeムービー';
$string['mpg'] = 'MPGムービー';
$string['ram'] = 'RAM RealPlayerムービー';
$string['rpm'] = 'RPM RealPlayerムービー';
$string['rm'] = 'RM RealPlayerムービー';
$string['cantcreatetempprofileiconfile'] = '一時プロファイル画像イメージを %s に書き込めませんでした。';
$string['profileiconsize'] = 'プロファイル画像サイズ';
$string['profileicons'] = 'プロファイル画像';
$string['Default'] = 'デフォルト';
$string['defaultprofileicon'] = '現在、あなたのデフォルトプロファイル画像に設定されています。';
$string['deleteselectedicons'] = '選択されたプロファイル画像を削除する';
$string['profileicon'] = 'プロファイル画像';
$string['noimagesfound'] = 'イメージはありません。';
$string['profileiconaddedtoimagesfolder'] = 'あなたのプロファイル画像が「 %s 」フォルダにアップロードされました。';
$string['profileiconsetdefaultnotvalid'] = 'デフォルトプロファイル画像を設定できませんでした。選択が正しくありません。';
$string['profileiconsdefaultsetsuccessfully'] = 'デフォルトプロファイル画像が正常に設定されました。';
$string['nprofilepictures'] = 'プロファイル画像';
$string['profileiconsnoneselected'] = '削除するプロファイル画像が選択されていません。';
$string['onlyfiveprofileicons'] = 'あなたは5つのプロファイル画像のみアップロードできます。';
$string['or'] = 'または';
$string['profileiconuploadexceedsquota'] = 'このプロファイル画像をアップロードすることであなたのディスククオータを超えてしまいます。あなたがアップロードしたいくつかのファイルを削除してください。';
$string['profileiconimagetoobig'] = 'あなたがアップロードした画像は大き過ぎます(%sx%s ピクセル)。%sx%s ピクセル以下のサイズにしてください。';
$string['uploadingfile'] = 'ファイルのアップロード中 ...';
$string['uploadprofileicon'] = 'プロファイル画像をアップロードする';
$string['uploadedprofileicon'] = 'アップロードされたプロファイル画像';
$string['profileiconsiconsizenotice'] = 'あなたは最大<strong>5つ</strong>のプロファイル画像をアップロードできます。プロファイル画像のアップロード後、あなたのデフォルト画像として表示する画像を1つ選択してください。16x16 から %sx%s ピクセルの間であなたの画像を作成してください。';
$string['setdefault'] = 'デフォルトに設定する';
$string['Title'] = 'タイトル';
$string['imagetitle'] = 'イメージタイトル';
$string['standardavatartitle'] = '標準または外部アバタ';
$string['standardavatarnote'] = '標準または外部プロファイル画像';
$string['usingnodefaultprofileicon'] = '現在、デフォルトのプロファイル画像はありません。';
$string['wrongfiletypeforblock'] = 'あなたがアップロードしたファイルはこのブロックにとって正しいタイプではありません。';
$string['Contents'] = 'コンテンツ';
$string['Continue'] = '続ける';
$string['Decompress'] = '展開';
$string['nfolders'] = '%s フォルダ';
$string['nfiles'] = '%s ファイル';
$string['createdtwothings'] = '%s および %s を作成しました。';
$string['filesextractedfromarchive'] = 'アーカイブから展開されたファイル';
$string['filesextractedfromziparchive'] = 'Zipアーカイブから展開されたファイル';
$string['fileswillbeextractedintofolder'] = 'ファイルは %s に展開されます。';
$string['insufficientquotaforunzip'] = 'このファイルを展開するにはあなたの残りファイルクオータが小さすぎます。';
$string['invalidarchive'] = 'アーカイブファイルの読み込み中にエラーが発生しました。';
$string['pleasewaitwhileyourfilesarebeingunzipped'] = 'あなたのファイルを展開中です。しばらくお待ちください。';
$string['spacerequired'] = '必要スペース';
$string['unzipprogress'] = '%s 個のファイル/フォルダが作成されました。';
$string['filepermission.view'] = '閲覧';
$string['filepermission.edit'] = '編集';
$string['filepermission.republish'] = '公開';

?>
