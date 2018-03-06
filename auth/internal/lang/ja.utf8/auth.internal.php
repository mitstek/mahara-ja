<?php
/**
 *
 * @package    mahara
 * @subpackage lang (Japanese)
 * @translator Mitsuhiro Yoshida (http://mitstek.com/)
 * @started    2008-01-19 11:25:00 UTC
 * @updated    2018-03-06 03:21:42 UTC
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL version 3 or later
 * @copyright  For copyright information on Mahara, please see the README file distributed with this software.
 *
 */

defined('INTERNAL') || die();

$string['internal'] = '内部';
$string['title'] = '内部';
$string['description'] = 'Maharaデータベースで認証する';
$string['completeregistration'] = '登録を完了する';
$string['emailalreadytaken'] = 'このメールアドレスはすでにここで登録されています。';
$string['emailalreadytakenbyothers'] = 'このメールアドレスはすでに別のユーザによって取得されています。';
$string['iagreetothetermsandconditions'] = '私は利用条件に同意します。';
$string['passwordinvalidform1'] = 'あなたのパスワードは少なくとも半角英数字 %s 文字にしてください。パスワードでは大文字小文字を区別します。また、あなたのユーザ名と異なるものにしてください。あなたのパスワードには %s を含む必要があります。';
$string['recaptcharegistertitle'] = 'reCAPTCHAチャレンジ';
$string['recaptcharegisterdesc1'] = '「私はロボットではありません」チェックボックスをチェックしてください。この操作により自動プログラムによるこのサービスの悪用を防ぎます。';
$string['registeredemailsubject'] = 'あなたは %s に登録されました。';
$string['registeredemailmessagetext'] = '%s さん

%s へのご登録ありがとうございます。サインアップ処理を完了するには次のリンクに従ってください:

%sregister.php?key=%s

リンクは24時間で有効期限が切れます。

--
%s チーム';
$string['registeredemailmessagehtml'] = '<p>%s さん</p>
<p>%s へのご登録ありがとうございます。サインアップ処理を完了するには次のリンクに従ってください:</p>
<p><a href="%sregister.php?key=%s">%sregister.php?key=%s</a></p>
<p>リンクは24時間で有効期限が切れます。</p>

<pre>--
%s チーム</pre>';
$string['registeredok'] = '<p>あなたは正常にユーザ登録されました。アカウントを有効化するためあなたのメールアドレス宛に送信されたインストラクションをご覧ください。</p>';
$string['registrationexpiredkey'] = '申し訳ございません、あなたのキーの有効期限が切れています。恐らく、あなたが登録を完了するため24時間以上待機していたと思われます。そうでない場合、これは私たちに責任があります';
$string['registrationnosuchid'] = '申し訳ございません、この登録キーは存在しません。恐らく、すでに有効化されていると思われます。';
$string['registrationnosuchkey1'] = '申し訳ございません、私たちにはあなたのリンクに合致するキーがありません。恐らく、あなたのメールプログラムが壊したと思われます。';
$string['registrationunsuccessful'] = '申し訳ございません、あなたのユーザ登録は正常に完了しませんでした。これはあなたではなく、私たちに責任があります。後ほど再度お試しください。';
$string['usernamealreadytaken'] = '申し訳ございません、このユーザ名はすでに取得されています。';
$string['usernameinvalidform'] = 'ユーザ名には半角英数字および標準的な記号を使用することができます。また、ユーザ名の長さは半角3-30文字にしてください。空白は許可されません。';
$string['usernameinvalidadminform'] = 'ユーザ名には半角英数字および標準的な記号を使用することができます。ユーザ名の長さは半角3-236文字にしてください。空白は許可されません。';
$string['youmaynotregisterwithouttandc'] = '<a href="#user_acceptterms">利用条件</a>の順守に同意しない限り、あなたはユーザ登録されません。';
$string['confirmcancelregistration'] = '本当にこの登録をキャンセルしてもよろしいですか? キャンセルの結果としてあなたのリクエストがシステムから削除されます。';
$string['confirmemailsubject'] = '%s 登録のメール確認';
$string['approvalemailsubject'] = '%s 登録リクエスト受信';
$string['approvalemailmessagetext'] = '%s さん

%s へのアカウントリクエストありがとうございます。あなたの申請に関してインスティテューション管理者宛に通知されました。申請内容が確認され次第、あなた宛に別のEメールが送信されます。
--
%s チーム';
$string['approvalemailmessagehtml'] = '<p>%s さん</p>

<p>%s へのアカウントリクエストありがとうございます。あなたの申請に関してインスティテューション管理者宛に通知されました。申請内容が確認され次第、あなた宛に別のEメールが送信されます。</p>

<pre>--
%s チーム</pre>';
$string['emailconfirmedok'] = '<p>正常にあなたのメールを確認しました。まもなく登録詳細に関してあなた宛にメールが送信されます。</p>';
$string['registrationcancelledok'] = 'あなたは正常に登録申請をキャンセルしました。';
$string['registrationconfirm'] = '登録を承認しますか?';
$string['registrationconfirmdescription'] = 'インスティテューション管理者が登録を承認する必要があります。';
$string['registrationdeniedemailsubject'] = '%s への登録却下';
$string['registrationdeniedmessage'] = '%s さん、こんにちは。

私たちは %s におけるインスティテューションへのあなたの登録申請を受領しましたが、あなたにアクセス権を授与しないことに決定しました。

あなたがこの決定を不適切だと考える場合、Eメールでご連絡ください。

%s';
$string['registrationdeniedmessagereason'] = '%s さん、こんにちは。

私たちは %s におけるインスティテューションへのあなたの登録申請を受領しましたが、以下の理由であなたにアクセス権を授与しないことに決定しました:

%s

あなたがこの決定を不適切だと考える場合、Eメールでご連絡ください。

%s';
$string['registeredokawaitingemail2'] = 'あなたの登録申請が正常に送信されました。インスティテューション管理者に通知されました。申請が処理され次第、あなた宛にEメールが送信されます。';
$string['registrationreason'] = '登録理由';
$string['registrationreasondesc1'] = 'あなたが選択したインスティテューションへの登録申請理由および管理者があなたの申請を処理することに関して有益であると思われる詳細を記述してください。';
$string['pendingregistrationadminemailsubject'] = 'インスティテューション「 %s 」( %s )への新しいユーザ登録';
$string['pendingregistrationadminemailtext'] = '%s さん、こんにちは。

新しいユーザがインスティテューション「 %s 」への参加をリクエストしました。

このインスティテューションを管理する者として登録されているためあなたはこの登録リクエストを承認または拒否する必要があります。この処理を実行するには次のリンクにアクセスしてください: %s

あなたはこの登録リクエストを %s 以内に承認または拒否する必要があります。

登録理由詳細は以下のとおりです:

氏名: %s
メールアドレス: %s
登録理由:
%s

--
%s チーム';
$string['pendingregistrationadminemailhtml'] = '<p>%s さん、こんにちは。</p>

<p>新しいユーザがインスティテューション「 %s 」への参加をリクエストしました。</p>

<p>このインスティテューションを管理する者として登録されているためあなたはこの登録リクエストを承認または拒否する必要があります。この処理を実行するには次のリンクにアクセスしてください:<a href=%s>%s</a></p>

<p>登録理由詳細は以下のとおりです:</p>

<p>氏名: %s</p>
<p>メールアドレス: %s</p>
<p>登録理由:</p>
<p>%s</p>
<pre>--
%s チーム</pre>';
$string['userdeletionnosuchid'] = '申し訳ございません、この削除リクエストは存在しません。恐らく、すでに判断されているのではないでしょうか?';
$string['userdeletiondeniedmessage'] = '%s さん、こんにちは。

私たちはあなたの %s のユーザアカウントの削除リクエストを受けましたがあなたのデータを削除しないことに決定しました。

あなたがこの決定を正しくないと思う場合、私にメールでご連絡ください。

%s';
$string['userdeletiondeniedmessagereason'] = '%s さん、こんにちは。

私たちはあなたの %s のユーザアカウントの削除リクエストを受けましたが以下の理由であなたのデータを削除しないことに決定しました:

%s

あなたがこの決定を正しくないと思う場合、私にメールでご連絡ください。

%s';
$string['userdeletiondeniedemailsubject'] = '%s のユーザアカウント削除が拒否されました。';
$string['userdeletionemailsubject'] = 'あなたのアカウントが %s から削除されました。';
$string['userdeletionemailmessagetext'] = '%s さん、こんにちは。

あなたのアカウントが %s から正常に削除されました。

--
%s チーム';
$string['userdeletionemailmessagehtml'] = '<p>%s さん、こんにちは。</p>
<p>あなたのアカウントが %s から正常に削除されました。</p>

<pre>--
%s チーム</pre>';

?>
