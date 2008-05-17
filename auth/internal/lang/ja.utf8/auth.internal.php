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
 * @started    2008-01-19 11:25:00 GMT
 * @updated    2008-05-17 12:22:42 GMT
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
$string['passwordformdescription'] = 'あなたのパスワードには、少なくとも6文字必要です。また、1文字の数字および2文字の英字を含む必要があります。';
$string['passwordinvalidform'] = 'あなたのパスワードには、少なくとも6文字必要です。また、1文字の数字および2文字の英字を含む必要があります。';
$string['registeredemailsubject'] = 'あなたは %s に登録されました。';
$string['registeredemailmessagetext'] = 'Hi さん

%s への登録ありがとうございます。サインアップ処理を完了するには、次のリンクに従ってください:

register.php?key=%s

--
%s チーム';
$string['registeredemailmessagehtml'] = '<p>Hi さん</p>
<p>%s への登録ありがとうございます。サインアップ処理を完了するには、次のリンクに従ってください:</p>
<p><a href=\"register.php?key=%s\">register.php?key=%s</a></p>
<pre>--
%s チーム</pre>';
$string['registeredok'] = '<p>あなたは、正常にユーザ登録されました。アカウントを有効化するため、あなたのメールアドレス宛に送信されたインストラクションをご覧ください。</p>';
$string['registrationnosuchkey'] = '申し訳ございません、このキーによるユーザ登録は存在しないようです。恐らく、あなたのユーザ登録完了までに24時間以上経過したと思われます。そうでない場合、私たちに責任があります。';
$string['registrationunsuccessful'] = '申し訳ございません、あなたのユーザ登録は正常に完了しませんでした。これはあなたではなく、私たちに責任があります。後ほど再度お試しください。';
$string['usernamealreadytaken'] = '申し訳ございません、このユーザ名はすでに取得されています。';
$string['usernameinvalidform'] = 'あなたのユーザ名には、英数字、ピリオド、アンダースコアおよび@記号のみ含むことができます。また、ユーザ名の長さは、3文字から30文字にしてください。';
$string['youmaynotregisterwithouttandc'] = '<a href=\"terms.php\">使用条件</a>に同意しない限り、あなたを登録することはできません。';
$string['youmustagreetothetermsandconditions'] = 'あなたは、<a href=\"terms.php\">使用条件</a>に同意する必要があります。';

?>
