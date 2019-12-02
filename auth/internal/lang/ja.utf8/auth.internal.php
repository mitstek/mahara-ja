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
 * @updated    2015-08-02 14:12:30 UTC
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL
 * @copyright  (C) 2006 onwards Catalyst IT Ltd http://catalyst.net.nz
 *
 */

defined('INTERNAL') || die();

$string['internal'] = '内部';
$string['title'] = '内部';
$string['description'] = 'Maharaデータベースで認証する';
$string['completeregistration'] = '登録を完了する';
$string['emailalreadytaken'] = 'このメールアドレスはすでにここで登録されています。';
$string['iagreetothetermsandconditions'] = '私は利用条件に同意します。';
$string['passwordformdescription'] = 'あなたのパスワードには少なくとも半角6文字必要です。パスワードは大文字小文字を区別します。また、あなたのユーザ名とは異なる必要があります。
<br />
セキュリティ上の理由からパスフレーズの使用をお考えください。パスフレーズには単一の言葉ではなく文を使用します。あなたが好きな格言または2語 (またはそれ以上!) の言葉をスペースで区切って使用することをお考えください。';
$string['passwordinvalidform'] = 'あなたのパスワードには少なくとも半角6文字必要です。パスワードは大文字小文字を区別します。また、あなたのユーザ名とは異なる必要があります。
<br />
セキュリティ上の理由からパスフレーズの使用をお考えください。パスフレーズには単一の言葉ではなく文を使用します。あなたが好きな格言または2語 (またはそれ以上!) の言葉をスペースで区切って使用することをお考えください。';
$string['registeredemailsubject'] = 'あなたは %s に登録されました。';
$string['registeredemailmessagetext'] = '%s さん

%s へのご登録ありがとうございます。サインアップ手続きを完了するには次のリンクにアクセスしてください:

%sregister.php?key=%s

リンクは24時間で有効期限が切れます。

--
%s チーム';
$string['registeredemailmessagehtml'] = '<p>%s さん</p>
<p>%s へのご登録ありがとうございます。サインアップ手続きを完了するには次のリンクにアクセスしてください:</p>
<p><a href="%sregister.php?key=%s">%sregister.php?key=%s</a></p>
<p>リンクは24時間で有効期限が切れます。</p>

<pre>--
%s チーム</pre>';
$string['registeredok'] = '<p>あなたは正常にユーザ登録されました。アカウントを有効化するためあなたのメールアドレス宛に送信されたインストラクションをご覧ください。</p>';
$string['registrationnosuchkey'] = '申し訳ございません、このキーによるユーザ登録は存在していないようです。もしかしたら、ユーザ登録完了まで24時間以上経過しましたか? そうでない場合、私たちに責任があります。';
$string['registrationunsuccessful'] = '申し訳ございません、あなたのユーザ登録は正常に完了しませんでした。これはあなたではなく、私たちに責任があります。後ほど再度お試しください。';
$string['usernamealreadytaken'] = '申し訳ございません、このユーザ名はすでに取得されています。';
$string['usernameinvalidform'] = 'ユーザ名には半角英数字および標準的な記号を使用できます。また、ユーザ名の長さは半角3-30文字にしてください。空白は許可されません。';
$string['usernameinvalidadminform'] = 'ユーザ名には半角英数字および標準的な記号を使用できます。ユーザ名の長さは半角3-236文字にしてください。空白は許可されません。';
$string['youmaynotregisterwithouttandc'] = '<a href="#user_acceptterms">利用条件</a>の順守に同意しない限り、あなたは登録できません。';
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
$string['registrationconfirmdescription'] = 'インスティテューション管理者により登録が承認される必要があります。';
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

このインスティテューションの管理者として登録されているためあなたはこの登録リクエストを承認または拒否する必要があります。この処理を実行するには次のリンクにアクセスしてください: %s

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

<p>このインスティテューションの管理者として登録されているためあなたはこの登録リクエストを承認または拒否する必要があります。この処理を実行するには次のリンクにアクセスしてください:<a href=%s>%s</a></p>

<p>登録理由詳細は以下のとおりです:</p>

<p>氏名: %s</p>
<p>メールアドレス: %s</p>
<p>登録理由:</p>
<p>%s</p>
<pre>--
%s チーム</pre>';

?>
