<?php
/**
 * Mahara: Electronic portfolio, weblog, resume builder and social networking
 * Copyright (C) 2006 onwards Catalyst IT Ltd (https://www.catalyst.net.nz)
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
 * along with this program.  If not, see <https://www.gnu.org/licenses/>.
 *
 * @package    mahara
 * @subpackage lang (Japanese)
 * @translator Mitsuhiro Yoshida (https://mitstek.com/)
 * @started    2008-01-19 11:25:00 UTC
 * @updated    2015-08-02 14:14:46 UTC
 * @license    https://www.gnu.org/copyleft/gpl.html GNU GPL
 * @copyright  (C) 2006 onwards Catalyst IT Ltd https://catalyst.net.nz
 *
 */

defined('INTERNAL') || die();

$string['internal'] = '内部';
$string['title'] = '内部';
$string['description'] = 'Maharaデータベースで認証する';
$string['completeregistration'] = '登録を完了する';
$string['emailalreadytaken'] = 'このメールアドレスはすでにここで登録されています。';
$string['iagreetothetermsandconditions'] = '私は利用条件に同意します。';
$string['passwordformdescription'] = 'あなたのパスワードには少なくとも半角6文字必要です。また、少なくとも1文字の数字および2文字の英字を含む必要があります。';
$string['passwordinvalidform'] = 'あなたのパスワードには少なくとも半角6文字必要です。また、少なくとも1文字の数字および2文字の英字を含む必要があります。';
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
$string['usernameinvalidform'] = 'ユーザ名には半角英数字および標準的な記号を使用できます。ユーザ名の長さは半角3-30文字の間にしてください。空白は許可されません。';
$string['youmaynotregisterwithouttandc'] = '<a href="terms.php">利用条件</a>の順守に同意しない限り、あなたは登録できません。';
$string['youmustagreetothetermsandconditions'] = 'あなたは<a href="terms.php">利用条件</a>に同意する必要があります。';

?>
