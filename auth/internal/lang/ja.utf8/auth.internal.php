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
 * @updated    2009-02-01 17:21:58 UTC
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL
 * @copyright  (C) 2006 onwards Catalyst IT Ltd http://catalyst.net.nz
 *
 */

defined('INTERNAL') || die();

$string['internal'] = '内部';
$string['title'] = '内部';
$string['description'] = 'Maharaデータベースで認証する';
$string['completeregistration'] = '登録を完了する';
$string['emailalreadytaken'] = 'このメールアドレスは、すでに登録されています。';
$string['iagreetothetermsandconditions'] = '私は使用条件に同意します。';
$string['passwordformdescription'] = 'あなたのパスワードには、少なくとも半角6文字必要です。また、少なくとも1文字の数字および2文字の英字を含む必要があります。';
$string['passwordinvalidform'] = 'あなたのパスワードには、少なくとも半角6文字必要です。また、少なくとも1文字の数字および2文字の英字を含む必要があります。';
$string['registeredemailsubject'] = 'あなたは %s に登録されました。';
$string['registeredemailmessagetext'] = '%s さん

%s への登録ありがとうございます。サインアップ処理を完了するには、次のリンクに従ってください:

register.php?key=%s

メールに含まれているリンクは、24時間のみ有効です。

--
%s チーム';
$string['registeredemailmessagehtml'] = '<p>%s さん</p>
<p>%s への登録ありがとうございます。サインアップ処理を完了するには、次のリンクに従ってください:</p>
<p><a href="register.php?key=%s">register.php?key=%s</a></p>
<p>メールに含まれているリンクは、24時間のみ有効です。</p>

<pre>--
%s チーム</pre>';
$string['registeredok'] = '<p>あなたは、正常にユーザ登録されました。アカウントを有効化するため、あなたのメールアドレス宛に送信されたインストラクションをご覧ください。</p>';
$string['registrationnosuchkey'] = '申し訳ございません、このキーによるユーザ登録は存在していないようです。もしかしたら、ユーザ登録完了まで、24時間以上経過しましたか? そうでない場合、私たちに責任があります。';
$string['registrationunsuccessful'] = '申し訳ございません、あなたのユーザ登録は正常に完了しませんでした。これは、あなたではなく、私たちに責任があります。後ほど再度お試しください。';
$string['usernamealreadytaken'] = '申し訳ございません、このユーザ名は、すでに取得されています。';
$string['usernameinvalidform'] = 'ユーザ名には、半角英数字および標準的な記号を使用することができます。また、ユーザ名の長さは、半角3文字から30文字の間にしてください。空白は、許可されません。';
$string['youmaynotregisterwithouttandc'] = '<a href="terms.php">使用条件</a>の順守に同意しない限り、あなたはユーザ登録されません。';
$string['youmustagreetothetermsandconditions'] = 'あなたは、<a href="terms.php">使用条件</a>に同意する必要があります。';

?>
