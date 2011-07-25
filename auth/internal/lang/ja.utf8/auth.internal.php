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
 * @translator Mitsuhiro Yoshida (http://mitstek.com/)
 * @started    2008-01-19 11:25:00 UTC
 * @updated    2011-07-25 03:12:49 UTC
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL
 * @copyright  (C) 2006 onwards Catalyst IT Ltd http://catalyst.net.nz
 *
 */

defined('INTERNAL') || die();

$string['internal'] = '内部';
$string['title'] = '内部';
$string['description'] = 'Maharaデータベースで認証する';
$string['completeregistration'] = '登録を完了する';
$string['emailalreadytaken'] = 'このメールアドレスはすでに登録されています。';
$string['iagreetothetermsandconditions'] = '私は使用条件に同意します。';
$string['passwordformdescription'] = 'あなたのパスワードには少なくとも半角6文字必要です。また、少なくとも1文字の数字および2文字の英字を含む必要があります。';
$string['passwordinvalidform'] = 'あなたのパスワードには少なくとも半角6文字必要です。また、少なくとも1文字の数字および2文字の英字を含む必要があります。';
$string['registeredemailsubject'] = 'あなたは %s に登録されました。';
$string['registeredemailmessagetext'] = '%s さん

%s への登録ありがとうございます。サインアップ処理を完了するには、次のリンクに従ってください:

register.php?key=%s

メールに含まれているリンクは24時間のみ有効です。

--
%s チーム';
$string['registeredemailmessagehtml'] = '<p>%s さん</p>
<p>%s への登録ありがとうございます。サインアップ処理を完了するには、次のリンクに従ってください:</p>
<p><a href="%sregister.php?key=%s">%sregister.php?key=%s</a></p>
<p>メールに含まれているリンクは24時間のみ有効です。</p>

<pre>--
%s チーム</pre>';
$string['registeredok'] = '<p>あなたは正常にユーザ登録されました。アカウントを有効化するため、あなたのメールアドレス宛に送信されたインストラクションをご覧ください。</p>';
$string['registrationnosuchkey'] = '申し訳ございません、このキーによるユーザ登録は存在していないようです。もしかしたら、ユーザ登録完了まで、24時間以上経過しましたか? そうでない場合、私たちに責任があります。';
$string['registrationunsuccessful'] = '申し訳ございません、あなたのユーザ登録は正常に完了しませんでした。これはあなたではなく、私たちに責任があります。後ほど再度お試しください。';
$string['usernamealreadytaken'] = '申し訳ございません、このユーザ名はすでに取得されています。';
$string['usernameinvalidform'] = 'ユーザ名には半角英数字および標準的な記号を使用することができます。また、ユーザ名の長さは半角3文字から30文字の間にしてください。空白は許可されません。';
$string['usernameinvalidadminform'] = 'ユーザ名には半角英数字および標準的な記号を使用することができます。また、ユーザ名の長さは半角3文字から236文字の間にしてください。空白は許可されません。';
$string['youmaynotregisterwithouttandc'] = '<a href="terms.php">使用条件</a>の順守に同意しない限り、あなたはユーザ登録されません。';
$string['confirmcancelregistration'] = '本当にこの登録をキャンセルしてもよろしいですか? キャンセルの結果として、あなたのリクエストがシステムから削除されます。';
$string['confirmemailsubject'] = '%s 登録のメール確認';
$string['confirmemailmessagetext'] = '%s さん、こんにちは。

%s でのアカウント登録ありがとうございます。あなたのメールアドレスを確認するため、下記のリンクをクリックしてください。
インスティテューション管理者に通知され、あなたの申請を承認するかどうか検討されます。あなたにはその結果が通知されます。

%sregister.php?key=%s

このリンクは24時間後に無効となります。

--
%s チーム';
$string['confirmemailmessagehtml'] = '<p>%s さん、こんにちは。</p>

<p>%s でのアカウント登録ありがとうございます。あなたのメールアドレスを確認するため、下記のリンクをクリックしてください。
インスティテューション管理者に通知され、あなたの申請を承認するかどうか検討されます。あなたにはその結果が通知されます。</p>

<p><a href="%sregister.php?key=%s">%sregister.php?key=%s</a></p>

<p>このリンクは24時間後に無効となります。/p>

<pre>--
%s チーム</pre>';
$string['emailconfirmedok'] = 'p>正常にあなたのメールを確認しました。まもなく、登録詳細に関してあなた宛にメールが送信されます。</p>';
$string['registrationcancelledok'] = 'あなたは正常に登録申請をキャンセルしました。';
$string['registrationconfirm'] = '登録を承認しますか?';
$string['registrationconfirmdescription'] = 'インスティテューション管理者が登録を承認する必要があります。';
$string['registrationdeniedemailsubject'] = '%s への登録却下';
$string['registrationdeniedmessage'] = '%s さん、こんにちは。

私たちは　%s におけるインスティテューションへのあなたの登録申請を受領しましたが、あなたにアクセス権を授与しないことに決定しました。

あなたがこの決定を不適切だと考える場合、Eメールにてご連絡ください。

%s';
$string['registrationdeniedmessagereason'] = '%s さん、こんにちは。

私たちは　%s におけるインスティテューションへのあなたの登録申請を受領しましたが、以下の理由であなたにアクセス権を授与しないことに決定しました:

%s

あなたがこの決定を不適切だと考える場合、Eメールにてご連絡ください。

%s';
$string['registeredokawaitingemail'] = 'あなたの登録申請が正常に送信されました。あなたのメールアドレスを確認して処理を進めるため、あなた宛にEメールが送信されます。';
$string['registrationreason'] = '登録理由';
$string['registrationreasondesc'] = 'あなたが選択したインスティテューションへの登録申請理由、および管理者があなたの申請を処理することに関して有益であると思われる詳細を記述してください。この情報なしでは、登録を完了することはできません。';
$string['pendingregistrationadminemailsubject'] = 'インスティテューション「 %s　」( %s )への新しいユーザ登録';
$string['pendingregistrationadminemailtext'] = '%s さん、こんにちは。

新しいユーザがインスティテューション「 %s 」への参加をリクエストしました。

このインスティテューションの管理者として登録されているため、あなたはこの登録リクエストを承認または拒否する必要があります。この処理を実行するには、次のリンクにアクセスしてください: %s

登録理由詳細は下記のとおりです:

氏名: %s
メールアドレス: %s
登録理由:
%s

--
%s チーム';
$string['pendingregistrationadminemailhtml'] = '<p>%s さん、こんにちは。</p>

<p>新しいユーザがインスティテューション「 %s 」への参加をリクエストしました。</p>

<p>このインスティテューションの管理者として登録されているため、あなたはこの登録リクエストを承認または拒否する必要があります。この処理を実行するには、次のリンクにアクセスしてください:<a href=%s>%s</a></p>

<p>登録理由詳細は下記のとおりです:</p>

<p>氏名: %s</p>
<p>メールアドレス: %s</p>
<p>登録理由:</p>
<p>%s</p>
<pre>--
%s チーム</pre>';

?>
