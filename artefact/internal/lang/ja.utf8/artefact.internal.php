<?php
/**
 *
 * @package    mahara
 * @subpackage lang (Japanese)
 * @translator Mitsuhiro Yoshida (https://mitstek.com/)
 * @started    2008-01-19 11:25:00 UTC
 * @updated    2026-06-04 14:07:35 UTC
 * @license    https://www.gnu.org/licenses/gpl-3.0.html GNU GPL version 3 or later
 * @copyright  For copyright information on Mahara, please see the README file distributed with this software.
 *
 */

defined('INTERNAL') || die();

$string['pluginname'] = 'プロファイル';
$string['profile1'] = '個人情報';
$string['mandatoryprofilefields'] = '必須プロファイルフィールド';
$string['pluginconfig.mandatory_help'] = '<h1>必須プロファイルフィールド</h1>
<p>必須フィールドはアカウント作成用CSVファイルに含むか、アカウント作成後の初回ログイン時に人が自分で入力する必要があります。</p>';
$string['searchablefields'] = '検索可能フィールド';
$string['searchablefieldsdescription'] = '他の人が検索できるプロファイルフィールドです';
$string['adminusersearchfields'] = '管理「人検索」';
$string['aboutdescription1'] = 'あなたの実際の姓名をここに入力してください。システム内の人に異なる名前を表示したい場合、あなたの表示名としてその名前を入力してください。';
$string['infoisprivate'] = 'あなたが他の人と共有しているページに置かない限り、この情報は非公開となります。';
$string['viewmyprofile'] = '私のプロファイルを表示する';
$string['aboutprofilelinkdescription'] = '<p>他の人に表示したい情報を編集するにはあなたの<a href="%s">プロファイル</a>ページに移動してください。</p>';
$string['aboutme'] = '私について';
$string['contact'] = '連絡先';
$string['social'] = 'ソーシャルメディア';
$string['messaging'] = 'ソーシャルメディア';
$string['firstname'] = '名';
$string['lastname'] = '姓';
$string['fullname'] = 'フルネーム';
$string['institution'] = 'インスティテューション';
$string['studentid'] = '学籍番号';
$string['preferredname'] = '表示名';
$string['profileform.preferredname_help'] = '<h1>表示名</h1><p>あなたは表示名の使用を選択できます。あなたは表示名を自由に設定できます。これにより表示されるあなたのフルネームが置換されます。スタッフ、インスティテューションおよびインスティテューションサポート管理者およびサイト管理者は引き続きあなたのフルネームを確認できます。</p>';
$string['introduction'] = '自己紹介';
$string['profileform.introduction_help'] = '<h1>自己紹介</h1><p>すべての人にあなたのことを伝えましょう。ここで記述した内容はあなたのプロファイルページに表示されます。検索結果にあなたの情報が表示された場合、この紹介文を他の人が閲覧します。ですから、できるだけ良いものにしてください。</p>';
$string['email'] = 'メールアドレス';
$string['profileform.email_help'] = '<h1>メールアドレス</h1>
<p>あなたが選択したメールアドレスは通知用のメインアドレスとなります。インスティテューション設定で許可されている場合、あなたは追加メールアドレスを登録してプロフィールページに表示するアドレスを選択できます。</p>
<p>新しいアドレスを追加するには <a onclick="email_new(); return false;" href="">メールアドレスを追加する</a> を選択してください。新しいアドレスに確認メッセージが送信されます。承認するにはリンクをクリックしてください。あなたに送信されたメッセージ内のリンクは24時間のみ有効です。24時間経過した場合、同じ処理を繰り返してください。</p>';
$string['maildisabled'] = 'メール無効';
$string['officialwebsite'] = 'オフィシャルウェブサイトアドレス';
$string['profileform.officialwebsite_help'] = '<h1>オフィシャルウェブサイトアドレス</h1><p>あなたの仕事、組織またはブログサイトのURLを入力してください。</p>';
$string['personalwebsite'] = 'パーソナルウェブサイトアドレス';
$string['blogaddress'] = 'ブログアドレス';
$string['address'] = '番地以下';
$string['town'] = '市区町村';
$string['city'] = '都道府県';
$string['country'] = '国';
$string['profileform.country_help'] = '<h1>国</h1><p>国名は国際標準化機構 (ISO) が発行したISO 3166に定義されているとおりに表示されます。</p>';
$string['homenumber'] = '自宅電話';
$string['businessnumber'] = '勤務先電話';
$string['mobilenumber'] = '携帯電話';
$string['faxnumber'] = 'FAX番号';
$string['occupation'] = '職業';
$string['industry'] = '職種';
$string['userroles'] = 'アカウントロール';
$string['nospecialroles'] = '<span class="text-midtone">特別ロールなし</span>';
$string['autogroupadmin'] = '自動グループ管理者';
$string['name'] = '名称';
$string['principalemailaddress'] = '主メールアドレス';
$string['emailaddress'] = '代替メールアドレス';
$string['saveprofile1'] = '個人情報を保存する';
$string['profilesaved1'] = '個人情報が正常に保存されました。';
$string['profilefailedsaved1'] = '個人情報の保存に失敗しました。';
$string['emailvalidation_subject'] = 'メール確認';
$string['emailvalidation_body1'] = '%s さん、こんにちは。

%s のあなたのアカウントにメールアドレス %s が追加されました。以下のリンクにアクセスしてこのメールアドレスを有効にしてください。

%s

このメールアドレスがあなたのメールアドレスであり、あなたが %s のアカウント作成をリクエストしていない場合、以下のリンクをクリックしてメール有効化を拒否してください。

%s';
$string['newemailalert_subject'] = 'あなたの %s アカウントに新しいメールアドレスが追加されました。';
$string['newemailalert_body_text1'] = '%s さん、こんにちは。

あなたは %s のアカウントに次のメールアドレスを追加しました:

%s

あなたがこの %a アカウントの変更をリクエストしていない場合、サイト管理者にご連絡ください。

%scontact.php';
$string['newemailalert_body_html1'] = '<p>%s さん、こんにちは。</p>

<p>あなたは %s のアカウントに次のメールアドレスを追加しました:</p>

<p>%s</p>

<p>あなたがこの %a アカウントの変更をリクエストしていない場合、<a href="%scontact.php">サイト管理者にご連絡ください</a>。</p>';
$string['validationemailwillbesent'] = 'あなたのプロファイル保存後、確認メールが送信されます。';
$string['validationemailsent'] = '確認メールが送信されました。';
$string['emailactivation'] = 'メール有効化';
$string['emailactivationsucceeded'] = 'メールが正常に有効化されました。';
$string['emailalreadyactivated'] = 'メールはすでに有効化されています。';
$string['emailactivationfailed'] = 'メール有効化に失敗しました。';
$string['emailactivationdeclined'] = 'メール有効化が正常に拒否されました。';
$string['verificationlinkexpired'] = '検証リンクの有効期限が切れました。';
$string['invalidemailaddress'] = '無効なメールアドレスです。';
$string['unvalidatedemailalreadytaken'] = 'あなたが確認しようとしているメールアドレスはすでに使用されています。';
$string['addbutton'] = '追加';
$string['cancelbutton'] = 'キャンセル';
$string['emailingfailed'] = 'プロファイルが保存されましたが、次のメールアドレス宛にメール送信できませんでした: %s';
$string['loseyourchanges'] = 'あなたの変更内容を失ってもよろしいですか?';
$string['Title'] = 'タイトル';
$string['Text'] = 'テキスト';
$string['text'] = 'テキスト';
$string['Created'] = '作成日時';
$string['Description'] = '説明';
$string['Download'] = 'ダウンロード';
$string['lastmodified'] = '最終更新日時';
$string['Owner'] = 'オーナ';
$string['Preview'] = 'プレビュー';
$string['Size'] = 'サイズ';
$string['Type'] = 'タイプ';
$string['profileinformation1'] = '個人情報';
$string['Profilepage'] = 'プロファイルページ';
$string['profilepage'] = 'プロファイルページ';
$string['profileimagefor'] = '%s のプロファイル画像';
$string['viewprofilepage'] = 'プロファイルページを表示する';
$string['viewallprofileinformation1'] = 'すべての個人情報を表示する';
$string['duplicatedprofilefieldvalue'] = '複製値';
$string['existingprofilefieldvalues'] = '既存値';
$string['progressbaritem_messaging'] = 'メッセージング';
$string['progressbaritem_joingroup'] = 'グループに参加する';
$string['progressbaritem_makefriend'] = 'フレンドを作る';
$string['progress_firstname'] = 'あなたの名を追加する';
$string['progress_lastname'] = 'あなたの姓を追加する';
$string['progress_studentid'] = 'あなたの学籍番号を追加する';
$string['progress_preferredname'] = 'あなたの表示名を追加する';
$string['progress_introduction'] = 'あなたの自己紹介を追加する';
$string['progress_email'] = 'あなたのメールアドレスを追加する';
$string['progress_officialwebsite'] = 'あなたのオフィシャルウェブサイトを追加する';
$string['progress_personalwebsite'] = 'あなたのパーソナルウェブサイトを追加する';
$string['progress_blogaddress'] = 'あなたのブログアドレスを追加する';
$string['progress_address'] = 'あなたの番地以下を追加する';
$string['progress_town'] = 'あなたの市町村を追加する';
$string['progress_city'] = 'あなたの都道府県を追加する';
$string['progress_country'] = 'あなたの国を追加する';
$string['progress_homenumber'] = 'あなたの自宅電話を追加する';
$string['progress_businessnumber'] = 'あなたの勤務先電話を追加する';
$string['progress_mobilenumber'] = 'あなたの携帯電話を追加する';
$string['progress_faxnumber'] = 'あなたのFAX番号を追加する';
$string['progress_messaging'] = 'あなたのメッセージング情報を追加する';
$string['progress_occupation'] = 'あなたの職業を追加する';
$string['progress_industry'] = 'あなたの職種を追加する';
$string['progress_joingroup'] = '%s グループに参加する';
$string['progress_makefriend'] = '%s フレンドを作る';
$string['socialprofile'] = 'ソーシャルメディア';
$string['socialprofile_help'] = '<h1>ソーシャルメディア</h1><p>アカウントが存在するソーシャルメディアサイトの名称です。</p>';
$string['profileurl1'] = 'アカウントURL';
$string['profileurl_help'] = '<h1>アカウントURL</h1><p>あなたのソーシャルメディアアカウントの公開ページのURLです。</p>';
$string['deleteprofile'] = 'ソーシャルメディアアカウントを削除する';
$string['deletethisprofile'] = 'ソーシャルメディアアカウントを削除する:「 %s 」';
$string['deleteprofileconfirm'] = '本当にこのソーシャルメディアアカウントを削除してもよろしいですか?';
$string['editthisprofile'] = 'ソーシャルメディアアカウントを編集する:「 %s 」';
$string['newsocialprofile'] = '新しいソーシャルメディアアカウント';
$string['notvalidprofileurl'] = 'これは有効なソーシャルプロファイルURLではありません。有効なURLを入力するか、上のリストよりメッセージングサービスを選択してください。';
$string['profiledeletedsuccessfully'] = 'ソーシャルメディアアカウントが正常に削除されました。';
$string['profilesavedsuccessfully'] = 'ソーシャルメディアアカウントが正常に保存されました。';
$string['socialprofilerequired'] = '少なくとも1つのソーシャルメディアアカウントが必要です。';
$string['duplicateurl'] = 'すでに入力したものとユーザ名またはURLが重複しているため、あなたはこのソーシャルメディアアカウントを追加できません。';
$string['supportadmin'] = 'サポート管理者';
$string['pluginconfig.allowcomments_help'] = '<h1>デフォルトのコメントパーミッション</h1>
<p>選択したアーティファクトタイプではデフォルトでコメントが有効にされています。作成者は個々のアーティファクトごとにこれを変更できます。</p>';
$string['pluginconfig.searchable_help'] = '<h1>検索可能フィールド</h1>
<p>検索可能フィールドとしてマークされたプロファイルフィールドはすべてのログインした人により検索できます。</p><p>通常、姓、名および表示名は常に検索できますが実際の検索に関してはサイト設定の「人は実名を秘匿できる」、「ユーザ名を検索する」設定および個別のプレファレンスの影響を受けます。</p><p>メールアドレス等の他の検索可能フィールドは検索に使用できますが、検索結果に表示されることはありません。</p>';
$string['pluginconfig.adminusersearch_help'] = '<h1>管理者の「人検索」</h1>
<p>管理画面の「人検索」に表示するプロファイルフィールドを選択してください。</p>
<p>姓、名、メールアドレスおよび表示名は常に表示されます。</p>';
$string['index_help'] = '<h1>個人情報</h1>
<p>一部のフィールドの中には編集できないものがあるかもしれません。その場合、管理者によってロックされているためです。</p>
<p><strong>警告:</strong> 一般公開されるページに連絡先情報を掲載する場合、あなた自身の安全を十分に考慮してください。<p>';
