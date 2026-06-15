<?php
/**
 *
 * @package    mahara
 * @subpackage lang (Japanese)
 * @translator Mitsuhiro Yoshida (https://mitstek.com/)
 * @started    2008-01-19 11:25:00 UTC
 * @updated    2026-06-04 06:19:56 UTC
 * @license    https://www.gnu.org/licenses/gpl-3.0.html GNU GPL version 3 or later
 * @copyright  For copyright information on Mahara, please see the README file distributed with this software.
 *
 */

defined('INTERNAL') || die();

<<<<<<< HEAD
$string['changepassworddesc'] = '新しいパスワード';
$string['changepasswordotherinterface'] = 'あなたは異なるインタフェースで<a href="%s">パスワードを変更できます</a>。';
$string['oldpasswordincorrect'] = 'これはあなたの現在のパスワードではありません。';
$string['changeusernameheading'] = 'ユーザ名を変更する';
$string['changeusername'] = '新しいユーザ名';
$string['accountoptionsdesc'] = '一般アカウントオプション';
$string['changeprofileurl'] = 'プロファイルURLを変更する';
$string['profileurl'] = 'プロファイルURL';
$string['profileurldescription'] = 'あなたのプロファイルページの専用URLです。このフィールドの長さは半角3-30文字にしてください。';
$string['urlalreadytaken'] = 'このプロファイルURLはすでに取得されています。別のURLを選択してください。';
$string['friendsdescr'] = 'フレンドコントロール';
$string['updatedfriendcontrolsetting'] = 'フレンドコントロールが更新されました。';
$string['wysiwygdescr'] = 'HTMLエディタ';
$string['licensedefault'] = 'デフォルトライセンス';
$string['licensedefaultinherit'] = 'インスティテューションデフォルトを使用する';
$string['messagesdescr'] = '他の人からのメッセージ';
$string['language'] = '言語';
$string['tagssideblockmaxtags'] = 'クラウド内の最大タグ数';
$string['enablemultipleblogs1'] = '複数日誌';
$string['accountprefs.multipleblogs_help'] = '<h1>複数日誌</h1><p>デフォルトではあなたはサイトに1つの日誌を持てます。複数日誌を有効にした場合、タグの使用だけではなく、あなたのコンテンツをより簡単に整理できるようになります。</p>';
$string['hiderealname'] = '実名を秘匿する';
$string['showhomeinfo2'] = 'ダッシュボード情報';
$string['showlayouttranslatewarning'] = 'ページレイアウト変更前に確認する';
$string['accessiblepagecreation'] = 'アクセシブルなページ作成';
$string['showprogressbar'] = 'プロファイル完了プログレスバー';
$string['prefssaved'] = 'プレファレンスが保存されました。';
$string['prefsnotsaved'] = 'あなたのプレファレンスの保存に失敗しました。';
$string['maildisabled'] = 'メールが無効にされました。';
$string['disableemail'] = 'メールを無効にする';
$string['maildisabledbounce'] = '多くのメッセージがサーバに戻ってきたためあなたのメールアドレス宛のメール送信は停止されました。%s のあなたのアカウントプレファレンスでメールを再有効化する前にメールアカウントが正常に動作しているかご確認ください。';
$string['maildisableddescription'] = 'あなたのアカウント宛のメール送信が停止されました。アカウントプレファレンスページで<a href="%s">あなたのメールを再度有効化</a>できます。';
$string['accountprefs.theme_help'] = '<h1>テーマ</h1>
<p>あなたがサイトを閲覧する際のテーマを選択してください。この設定は他の人があなたのポートフォリオを閲覧する際のテーマには影響しません。ポートフォリオは常にインスティテューションテーマまたはページごとに選択可能な場合はあなたがページで指定した特定のテーマに基づいて表示されます。</p>';
$string['deleteaccountuser'] = '%s のアカウントを削除する';
$string['deleteaccountdescription'] = 'あなたのアカウントを削除した場合、あなたのすべてのコンテンツは完全に削除されます。あなたは元に戻せません。あなたのプロファイル情報およびポートフォリオは他の人が閲覧できないようになります。あなたが投稿したフォーラム投稿のコンテンツは引き続き表示されますが、あなたの氏名は表示されなくなります。';
$string['sendnotificationdescription1'] = 'あなたのアカウント削除を承認するよう管理者に通知が送信されます。あなたがアカウントの削除をリクエストした場合、あなたの個人コンテンツすべてが完全に削除されます。これはあなたがアップロードしたファイル、執筆した日誌エントリ、作成したポートフォリオが削除されることを意味します。あなたはそれらを元に戻せません。あなたがグループでファイルをアップロードしている場合、日誌エントリおよびポートフォリオを作成している場合、そこでフォーラムに投稿している場合、それらはそのままになりますがあなたの氏名は表示されなくなります。';
$string['pendingdeletionsince'] = '%s 以降アカウント削除保留中';
$string['pendingdeletionadminemailsubject'] = '%s のアカウント削除リクエスト';
$string['resenddeletionadminemailsubject'] = '%s のアカウント削除リクエストのリマインダ';
$string['canceldeletionadminemailsubject'] = '%s のアカウント削除リクエストのキャンセル';
$string['pendingdeletionadminemailtext'] = '管理者さん、こんにちは。

%s がサイトからの自分のアカウント削除をリクエストしました。

あなたはこの人が属しているインスティテューションの管理者として登録されています。あなたは削除リクエストの承認または拒否を決定できます。これを実行するには次のリンクにアクセスしてください: %s

アカウント削除リクエスト詳細は次のとおりです:

氏名: %s
メールアドレス: %s
理由: %s

--
%s チーム';
$string['pendingdeletionadminemailhtml'] = '<p>管理者さん、こんにちは。</p>
<p>%s がサイトからの自分のアカウント削除をリクエストしました。</p>
<p>あなたはこの人が属しているインスティテューションの管理者として登録されています。あなたは削除リクエストの承認または拒否を決定できます。これを実行するには次のリンクにアクセスしてください: <a href=\'%s\'>%s</a></p>
<p>アカウント削除リクエスト詳細は次のとおりです:</p>
=======
$string['accessiblepagecreation'] = 'アクセシブルなページ作成';
$string['accessiblepagecreationdescription'] = 'あなたはこのオプションでスクリーンリーダまたはキーボードのみでページを作成および編集できるようになります。';
$string['accountdeleted'] = 'あなたのアカウントが削除されました。';
$string['accountoptionsdesc'] = '一般アカウントオプション';
$string['canceldeletionadminemailhtml'] = '<p>管理者さん、こんにちは。</p>
<p>%s がサイトからのアカウント削除リクエストをキャンセルしました。</p>
<p>あなたはこの人が属しているインスティテューションの管理者として登録されています。</p>
<p>キャンセルされたリクエストの詳細は次のとおりです:</p>
>>>>>>> 5ec862c7d13a1fd4a3325846835b650e7e7018c2
<p>氏名: %s</p>
<p>メールアドレス: %s</p>
<p>理由: %s</p>
<pre>--
%s チーム</pre>';
$string['accountdeleted'] = 'あなたのアカウントが削除されました。';
$string['resenddeletionnotification'] = '削除通知を再送する';
$string['resenddeletionadminemailtext'] = '管理者さん、こんにちは。

これは %s によるサイトからのアカウント削除リクエストに関するリマインダです。

あなたはこの人が属しているインスティテューションの管理者として登録されています。あなたは削除リクエストの承認または拒否を決定できます。これを実行するには次のリンクにアクセスしてください: %s

アカウント削除リクエスト詳細は次のとおりです:

氏名: %s
メールアドレス: %s
メッセージ: %s

--
%s チーム';
$string['resenddeletionadminemailhtml'] = '<p>管理者さん、こんにちは。</p>
<p>これは %s によるサイトからのアカウント削除リクエストに関するリマインダです。</p>
<p>あなたはこの人が属しているインスティテューションの管理者として登録されています。あなたは削除リクエストの承認または拒否を決定できます。これを実行するには次のリンクにアクセスしてください: <a href=\'%s\'>%s</a></p>
<p>アカウント削除リクエスト詳細は次のとおりです:</p>
<p>氏名: %s</p>
<p>メールアドレス: %s</p>
<p>メッセージ: %s</p>
<pre>--
%s チーム</pre>';
$string['pendingdeletionemailsent'] = 'インスティテューション管理者に通知を送信しました。';
$string['cancelrequest'] = 'リクエストをキャンセルする';
$string['deleterequestcanceled'] = 'あなたのアカウントの削除リクエストはキャンセルされました。';
$string['canceldeletionrequest'] = '削除リクエストをキャンセルする';
$string['canceldeletionrequestconfirmation'] = 'これはインスティテューション管理者へのアカウント %s の削除リクエストをキャンセルします。本当に続けてもよろしいですか?';
$string['canceldeletionadminemailtext'] = '管理者さん、こんにちは。

%s がサイトからのアカウント削除リクエストをキャンセルしました。

あなたはこの人が属しているインスティテューションの管理者として登録されています。

キャンセルされたリクエストの詳細は次のとおりです:

氏名: %s
メールアドレス: %s

--
%s チーム';
<<<<<<< HEAD
$string['canceldeletionadminemailhtml'] = '<p>管理者さん、こんにちは。</p>
<p>%s がサイトからのアカウント削除リクエストをキャンセルしました。</p>
<p>あなたはこの人が属しているインスティテューションの管理者として登録されています。</p>
<p>キャンセルされたリクエストの詳細は次のとおりです:</p>
=======
$string['canceldeletionrequest'] = '削除リクエストをキャンセルする';
$string['canceldeletionrequestconfirmation'] = 'これはインスティテューション管理者へのアカウント %s の削除リクエストをキャンセルします。本当に続けてもよろしいですか?';
$string['cancelrequest'] = 'リクエストをキャンセルする';
$string['changepassworddesc'] = '新しいパスワード';
$string['changepasswordotherinterface'] = 'あなたは異なるインタフェースで<a href="%s">パスワードを変更できます</a>。';
$string['changeprofileurl'] = 'プロファイルURLを変更する';
$string['changeusername'] = '新しいユーザ名';
$string['changeusernamedesc'] = 'あなたが %s へのログインに使用するユーザ名です。ユーザ名の長さは半角3-30文字にしてください。ユーザ名には空白を除く半角英数字および一般的な記号を使用できます。';
$string['changeusernameheading'] = 'ユーザ名を変更する';
$string['deleteaccountdescription'] = 'あなたのアカウントを削除した場合、あなたのすべてのコンテンツは完全に削除されます。あなたは元に戻せません。あなたのプロファイル情報およびポートフォリオは他の人が閲覧できないようになります。あなたが投稿したフォーラム投稿のコンテンツは引き続き表示されますが、あなたの氏名は表示されなくなります。';
$string['deleteaccountuser'] = '%s のアカウントを削除する';
$string['deleterequestcanceled'] = 'あなたのアカウントの削除リクエストはキャンセルされました。';
$string['disableemail'] = 'メールを無効にする';
$string['enablemultipleblogs1'] = '複数日誌';
$string['enablemultipleblogsdescription1'] = 'デフォルトではあなたは1つの日誌のみ作成できます。2つ以上の日誌を作成したい場合、このオプションを有効にしてください。';
$string['friendsauth'] = '新しいフレンドは私の承認が必要です。';
$string['friendsauto'] = '新しいフレンドは自動的に承認されます。';
$string['friendsdescr'] = 'フレンドコントロール';
$string['friendsnobody'] = '誰も私をフレンドとして追加できません。';
$string['hiderealname'] = '実名を秘匿する';
$string['hiderealnamedescription'] = 'あなたが表示名を設定した場合、そして実名検索で他の人から自分を探されたくない場合、このチェックボックスをチェックしてください。';
$string['language'] = '言語';
$string['licensedefault'] = 'デフォルトライセンス';
$string['licensedefaultdescription'] = 'あなたのコンテンツのデフォルトライセンスです。';
$string['licensedefaultinherit'] = 'インスティテューションデフォルトを使用する';
$string['maildisabled'] = 'メールが無効にされました。';
$string['maildisabledbounce'] = '多くのメッセージがサーバに戻ってきたためあなたのメールアドレス宛のメール送信は停止されました。%s のあなたのアカウントプレファレンスでメールを再有効化する前にメールアカウントが正常に動作しているかご確認ください。';
$string['maildisableddescription'] = 'あなたのアカウント宛のメール送信が停止されました。アカウントプレファレンスページで<a href="%s">あなたのメールを再度有効化</a>できます。';
$string['messagesallow'] = '誰でも私にメッセージを送信できます。';
$string['messagesdescr'] = '他の人からのメッセージ';
$string['messagesfriends'] = 'マイフレンドリストに登録した人は私にメッセージを送信できます。';
$string['messagesnobody'] = '誰も私にメッセージを送信できません。';
$string['noprivacystatementsaccepted'] = 'このアカウントは現在のプライバシ保護方針を一切受け入れていません。';
$string['oldpasswordincorrect'] = 'これはあなたの現在のパスワードではありません。';
$string['pendingdeletionadminemailhtml'] = '<p>管理者さん、こんにちは。</p>
<p>%s がサイトからの自分のアカウント削除をリクエストしました。</p>
<p>あなたはこの人が属しているインスティテューションの管理者として登録されています。あなたは削除リクエストの承認または拒否を決定できます。これを実行するには次のリンクにアクセスしてください: <a href=\'%s\'>%s</a></p>
<p>アカウント削除リクエスト詳細は次のとおりです:</p>
>>>>>>> 5ec862c7d13a1fd4a3325846835b650e7e7018c2
<p>氏名: %s</p>
<p>メールアドレス: %s</p>
<pre>--
%s チーム</pre>';
<<<<<<< HEAD
$string['resizeonuploaduserdefault1'] = 'アップロード時にイメージをリサイズする';
$string['accountprefs.resizeonuploaduserdefault_help'] = '<h1>アップロード時に大きなイメージをリサイズする</h1><p>この設定を有効にした場合、最大サイズを超えるイメージはアップロード時にリサイズされます。あなたは個別のアップロードでこれを無効にできます。</p>';
$string['noprivacystatementsaccepted'] = 'このアカウントは現在のプライバシ保護方針を一切受け入れていません。';
=======
$string['pendingdeletionadminemailsubject'] = '%s のアカウント削除リクエスト';
$string['pendingdeletionadminemailtext'] = '管理者さん、こんにちは。

%s がサイトからの自分のアカウント削除をリクエストしました。

あなたはこの人が属しているインスティテューションの管理者として登録されています。あなたは削除リクエストの承認または拒否を決定できます。これを実行するには次のリンクにアクセスしてください: %s

アカウント削除リクエスト詳細は次のとおりです:

氏名: %s
メールアドレス: %s
理由: %s

--
%s チーム';
$string['pendingdeletionemailsent'] = 'インスティテューション管理者に通知を送信しました。';
$string['pendingdeletionsince'] = '%s 以降アカウント削除保留中';
$string['prefsnotsaved'] = 'あなたのプレファレンスの保存に失敗しました。';
$string['prefssaved'] = 'プレファレンスが保存されました。';
$string['profileurl'] = 'プロファイルURL';
$string['profileurldescription'] = 'あなたのプロファイルページの専用URLです。このフィールドの長さは半角3-30文字にしてください。';
$string['resenddeletionadminemailhtml'] = '<p>管理者さん、こんにちは。</p>
<p>これは %s によるサイトからのアカウント削除リクエストに関するリマインダです。</p>
<p>あなたはこの人が属しているインスティテューションの管理者として登録されています。あなたは削除リクエストの承認または拒否を決定できます。これを実行するには次のリンクにアクセスしてください: <a href=\'%s\'>%s</a></p>
<p>アカウント削除リクエスト詳細は次のとおりです:</p>
<p>氏名: %s</p>
<p>メールアドレス: %s</p>
<p>メッセージ: %s</p>
<pre>--
%s チーム</pre>';
$string['resenddeletionadminemailsubject'] = '%s のアカウント削除リクエストのリマインダ';
$string['resenddeletionadminemailtext'] = '管理者さん、こんにちは。

これは %s によるサイトからのアカウント削除リクエストに関するリマインダです。

あなたはこの人が属しているインスティテューションの管理者として登録されています。あなたは削除リクエストの承認または拒否を決定できます。これを実行するには次のリンクにアクセスしてください: %s

アカウント削除リクエスト詳細は次のとおりです:

氏名: %s
メールアドレス: %s
メッセージ: %s

--
%s チーム';
$string['resenddeletionnotification'] = '削除通知を再送する';
$string['resizeonuploaduserdefault1'] = 'アップロード時にイメージをリサイズする';
$string['resizeonuploaduserdefaultdescription2'] = 'デフォルトで「イメージを自動的にリサイズする」オプションが有効にされます。最大高および幅を超えたイメージはアップロード時にリサイズされます。個別のイメージアップロード時、あなたはこのデフォルト設定を無効にできます。';
$string['sendnotificationdescription1'] = 'あなたのアカウント削除を承認するよう管理者に通知が送信されます。あなたがアカウントの削除をリクエストした場合、あなたの個人コンテンツすべてが完全に削除されます。これはあなたがアップロードしたファイル、執筆した日誌エントリ、作成したポートフォリオが削除されることを意味します。あなたはそれらを元に戻せません。あなたがグループでファイルをアップロードしている場合、日誌エントリおよびポートフォリオを作成している場合、そこでフォーラムに投稿している場合、それらはそのままになりますがあなたの氏名は表示されなくなります。';
$string['showhomeinfo2'] = 'ダッシュボード情報';
$string['showhomeinfodescription1'] = 'ダッシュボード上に %s の使用方法に関する情報を表示します。';
$string['showlayouttranslatewarning'] = 'ページレイアウト変更前に確認する';
$string['showlayouttranslatewarningdescription'] = 'ページ編集時、新しいレイアウトへのページレイアウト変更前に警告を表示および確認を求めます。';
$string['showprogressbar'] = 'プロファイル完了プログレスバー';
$string['showprogressbardescription'] = 'プログレスバーおよびあなたの %s プロファイルを完了するためのヒントを表示します。';
$string['tagssideblockmaxtags'] = 'クラウド内の最大タグ数';
$string['tagssideblockmaxtagsdescription'] = 'あなたのタグクラウドに表示されるタグの最大数です。';
$string['updatedfriendcontrolsetting'] = 'フレンドコントロールが更新されました。';
$string['urlalreadytaken'] = 'このプロファイルURLはすでに取得されています。別のURLを選択してください。';
$string['usernameexists1'] = 'あなたはこのユーザ名を使用できません。別のユーザ名を選択してください。';
$string['wysiwygdescr'] = 'HTMLエディタ';
>>>>>>> 5ec862c7d13a1fd4a3325846835b650e7e7018c2
