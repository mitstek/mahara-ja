<?php
/**
 *
 * @package    mahara
 * @subpackage lang (Japanese)
 * @translator Mitsuhiro Yoshida (https://mitstek.com/)
 * @started    2008-01-19 11:25:00 UTC
 * @updated    2023-05-16 10:42:17 UTC
 * @license    https://www.gnu.org/licenses/gpl-3.0.html GNU GPL version 3 or later
 * @copyright  For copyright information on Mahara, please see the README file distributed with this software.
 *
 */

defined('INTERNAL') || die();

$string['groupname'] = 'グループ名';
$string['groupshortname'] = '省略名';
$string['associatewithinstitution'] = 'インスティテューションと関連付ける';
$string['associatewithaninstitution'] = 'グループ「 %s 」をインスティテューションと関連付ける';
$string['groupassociated'] = 'グループがインスティテューションと正常に関連付けられました。';
$string['creategroup'] = 'グループを作成する';
$string['copygroup'] = 'グループ「 %s 」をコピーする';
$string['groupmemberrequests'] = '保留中メンバシップリクエスト';
$string['membershiprequests'] = 'メンバシップリクエスト';
$string['sendinvitation'] = '招待を送信する';
$string['invitetogroupsubject'] = 'あなたはグループへの参加を招待されました。';
$string['invitetogroupmessage1'] = '%s さん

あなたのグループ「 %s 」への参加を招待したいと思います。

ありがとうございます。
%s

この招待を受理または拒否するにはリンクに従ってください。';
$string['invitetogroupmessagereason'] = '%s さん

あなたのグループ「 %s 」への参加を招待したいと思います。

私の理由は次のとおりです:

%s

ありがとうございます。
%s

この招待を受理または拒否するにはリンクに従ってください。';
$string['inviteuserfailed'] = '招待に失敗しました。';
$string['userinvited'] = '招待が送信されました。';
$string['addedtogroupsubject'] = 'あなたはグループに追加されました。';
$string['addedtogroupmessage'] = '%s があなたをグループ「 %s 」に追加しました。グループを表示するには以下のリンクをクリックしてください。';
$string['adduserfailed'] = '追加に失敗しました。';
$string['useradded'] = '人が追加されました。';
$string['editgroup'] = 'グループを編集する';
$string['savegroup'] = 'グループを保存する';
$string['groupsaved'] = 'グループが正常に保存されました。';
$string['invalidgroup'] = 'グループが存在しません。';
$string['canteditdontown'] = 'あなたの所有ではないためこのグループを編集できません。';
$string['groupdescription'] = 'グループ説明';
$string['groupurl'] = 'グループホームページURL';
$string['groupurldescription'] = 'あなたのグループホームページのURLです。このフィールドの長さは半角3-30文字にしてください。';
$string['groupurltaken'] = 'このURLはすでに別のグループに取得されています。';
$string['Membership'] = 'メンバシップ';
$string['Roles1'] = 'グループタイプおよびロール';
$string['Open'] = 'オープン';
$string['opendescription'] = '人はグループ管理者の承認なしにグループに参加できます。';
$string['requestdescription'] = '人はグループ管理者にメンバシップリクエストを送信できます。';
$string['Controlled'] = '管理';
$string['controlleddescription'] = 'グループ管理者は同意なしにグループに人を追加できます。また、メンバはグループからの離脱を選択できません。';
$string['Outcomes'] = 'アウトカム';
$string['membershiptype'] = 'グループメンバシップタイプ';
$string['membershiptype.controlled'] = '管理メンバシップ';
$string['membershiptype.approve'] = '承認メンバシップ';
$string['membershiptype.open'] = 'オープンメンバシップ';
$string['membershiptype.abbrev.controlled'] = '管理';
$string['membershiptype.abbrev.approve'] = 'ノーマル';
$string['membershiptype.abbrev.open'] = 'オープン';
$string['membershipopencontrolled'] = 'メンバシップを同時にオープンおよび管理にはできません。';
$string['membershipopenoutcomes'] = 'メンバシップがアウトカムグループの場合、オープンにはできません。';
$string['membershipopenrequest'] = 'オープンメンバシップグループではメンバシップリクエストを受け付けません。';
$string['membershipoutcomesnotcontrolled'] = 'アウトカムグループの場合、メンバシップを管理にする必要があります。';
$string['institutionoutcomesnotallowed'] = 'このインスティテューションでは「アウトカム」グループタイプは利用できません。';
$string['existingoutcomecollections'] = 'グループタイプを変更できません。まだグループ内の一部にアウトカムコレクションがあります。';
$string['requestmembership'] = 'リクエストメンバシップ';
$string['pendingmembers'] = '保留中メンバ';
$string['reason'] = '理由';
$string['approve'] = '承認';
$string['reject'] = '拒否';
$string['groupalreadyexists'] = 'この名称のグループはすでに存在します。';
$string['groupalreadyexistssuggest'] = 'この名称のグループはすでに存在します。名称「 %s 」は使用できます。';
$string['groupshortnamealreadyexists'] = 'この省略名のグループはすでに存在します。';
$string['invalidshortname'] = '無効なグループ省略名です。';
$string['shortnameformat1'] = 'グループ省略名の長さは半角2-255文字にしてください。グループ省略名には半角英数字小文字、「.」、「-」および「_」を使用できます。';
$string['groupmaxreached'] = 'インスティテューションで許可されるグループの最大数に達したため、このインスティテューションにグループを追加できません。上限を増やすには<a href="%sinstitution/index.php?institution=%s">インスティテューション管理者</a>にご連絡ください。';
$string['groupmaxreachednolink'] = 'インスティテューションで許可されるグループの最大数に達したため、このインスティテューションにグループを追加できません。上限を増やすにはインスティテューション管理者にご連絡ください。';
$string['exceedsgroupmax'] = 'この数のグループを追加した場合、あなたのインスティテューションのグループ数上制限を超えます。あなたは制限内でさらに % グループを追加できます。グループの追加数を減らすか、サイト管理者にご連絡の上、上限の引き上げをご相談ください。';
$string['Created'] = '作成';
$string['editable'] = '編集可能';
$string['editability'] = '編集可能';
$string['windowstart'] = '開始日時';
$string['windowstartdescription'] = 'この日時以前、一般グループメンバはグループを編集できません。この日時はすべてのインポート済みプランのデフォルトの開始日時としても使用されます。';
$string['windowdatedescriptionadmin'] = 'あなたがグループを一括登録する場合のみ、必要に応じてこの日付を設定してください。処理終了後、忘れずにこのフィールドをクリアしてください。';
$string['windowend'] = '終了日時';
$string['windowenddescription'] = 'この日時以降、一般グループメンバはグループを編集できません。この日時はすべてのインポート済みプランのデフォルトの完了日時としても使用されます。';
$string['editwindowbetween'] = '%s - %s';
$string['editwindowfrom'] = '%s から';
$string['editwindowuntil'] = '%s まで';
$string['groupadmins'] = 'グループ管理者';
$string['editroles1'] = '作成および編集';
$string['editrolesdescription2'] = 'グループポートフォリオのコンテンツを作成、編集および管理できるロールです。';
$string['allexceptmember'] = '一般メンバを除く全員';
$string['Admin'] = '管理者';
$string['publiclyviewablegroup'] = '一般の人も閲覧可能なグループ';
$string['publiclyviewablegroupdescription1'] = 'オンラインの誰でもフォーラムを含むこのグループを閲覧できるようにします。';
$string['Type'] = 'タイプ';
$string['publiclyvisible'] = '一般公開';
$string['Public'] = 'パブリック';
$string['usersautoadded'] = '人を自動的に追加する';
$string['usersautoaddeddescription1'] = 'サイトに参加した人すべてをこのグループに自動的に追加します。';
$string['groupcategory'] = 'グループカテゴリ';
$string['allcategories'] = 'すべてのカテゴリ';
$string['groupoptionsset'] = 'グループオプションが更新されました。';
$string['nocategoryselected'] = 'カテゴリ未選択';
$string['notcategorised'] = 'カテゴリ分けなし';
$string['hasrequestedmembership'] = 'がこのグループのメンバシップをリクエストしました。';
$string['hasbeeninvitedtojoin'] = 'がこのグループへの参加を招待されました。';
$string['groupinvitesfrom'] = '参加の招待:';
$string['requestedmembershipin'] = 'リクエストされたメンバシップ:';
$string['viewnotify'] = '共有ページ通知';
$string['viewnotifydescription3'] = '新しいグループポートフォリオが作成された場合、またはグループメンバが自分のポートフォリオをグループと共有した場合に通知を受信するグループメンバを選択してください。ポートフォリオを共有しているグループメンバはこの通知を受信しません。極めて大規模なグループの場合、大量の通知が発生する可能性があるため、非一般メンバへの限定通知をお勧めします。';
$string['commentnotify'] = 'コメント通知';
$string['commentnotifydescription1'] = 'グループページおよびアーティファクトにコメントが投稿された場合、どのグループメンバに通知するのか選択してください。';
$string['allowsendnow'] = 'フォーラム投稿をすぐに送信する';
$string['allowsendnowdescription1'] = 'すべてのグループメンバがフォーラム投稿をすぐに送信するよう選択できます。この設定を無効にした場合、グループ管理者、チュータおよびモデレータのみ、フォーラム投稿をすぐに送信できます。';
$string['hiddengroup'] = 'グループを秘匿する';
$string['hiddengroupdescription2'] = 'このグループを「グループ」ページで秘匿します。';
$string['hidemembers'] = 'メンバシップを秘匿する';
$string['hidemembersdescription'] = '非メンバからグループのメンバシップ一覧を秘匿します。';
$string['hidemembersfrommembers'] = 'メンバからメンバシップを秘匿する';
$string['hidemembersfrommembersdescription1'] = 'このグループのメンバを秘匿します。グループ管理者のみメンバ一覧を閲覧できます。管理者はグループホームページに表示されます。';
$string['friendinvitations'] = 'フレンドの招待';
$string['invitefriendsdescription1'] = 'このグループへのフレンドの参加をメンバが招待できるようにします。この設定にかかわらず、グループ管理者は常に誰にでも招待を送信できます。';
$string['invitefriends'] = 'フレンドを招待する';
$string['Recommendations'] = 'レコメンデーション';
$string['suggestfriendsdescription1'] = 'このグループへの参加レコメンデーションをメンバがグループホームページのボタンでフレンドに送信できるようにします。';
$string['suggesttofriends'] = 'フレンドに勧める';
$string['userstosendrecommendationsto'] = 'レコメンデーションが送信される人';
$string['suggestgroupnotificationsubject'] = 'あなたのグループ参加を %s が提案しました。';
$string['suggestgroupnotificationmessage'] = 'あなたのグループ参加を %s が提案しました: グループ「 %s 」(%s)';
$string['nrecommendationssent'] = '%d レコメンデーションが送信されました。';
$string['suggestinvitefriends'] = 'あなたはフレンド招待およびレコメンデーションを同時に有効にできません。';
$string['suggestfriendsrequesterror'] = 'あなたはオープンまたはリクエストグループでのみフレンドのレコメンデーションを有効にできます。';
$string['editwindowendbeforestart'] = '終了日時は開始日時の後に設定してください。';
$string['editgroupmembership'] = 'グループメンバシップを編集する';
$string['editmembershipforuser'] = '%s のグループメンバシップを編集する';
$string['changedgroupmembership'] = 'グループメンバシップが正常に更新されました。';
$string['changedgroupmembershipsubject'] = 'あなたのグループメンバシップが変更されました。';
$string['addedtongroupsmessage'] = '%2$s があなたをグループに追加しました:

%3$s';
$string['removedfromngroupsmessage'] = '%2$s があなたをグループから削除しました:

%3$s';
$string['cantremovememberfromgroup'] = 'あなたは %s からメンバを削除できません。';
$string['current'] = '現在';
$string['requests'] = 'リクエスト';
$string['invites'] = '招待';
$string['member'] = 'メンバ';
$string['members'] = 'メンバ';
$string['Members'] = 'メンバ';
$string['nmembers1'] = '%s メンバ';
$string['memberrequests'] = 'メンバシップリクエスト';
$string['declinerequest'] = 'リクエストを拒否する';
$string['submittedviews'] = '送信済みページ';
$string['submitted'] = '送信済み';
$string['releaseview'] = 'ページをリリースする';
$string['releasecollection'] = 'コレクションをリリースする';
$string['invite'] = '招待';
$string['remove'] = '削除';
$string['updatemembership'] = 'メンバシップを更新する';
$string['memberchangefailed'] = '一部のメンバシップ情報の更新に失敗しました。';
$string['memberchangesuccess'] = 'メンバシップステータスが正常に変更されました。';
$string['portfolioreleasedsubject'] = 'ポートフォリオ「 %s 」がリリースされました。';
$string['portfolioreleasedmessage'] = 'あなたのポートフォリオ「 %s 」が「 %s 」から %s によってリリースされました。';
$string['portfolioreleasedsuccess'] = 'ポートフォリオが正常にリリースされました。';
$string['portfolioreleasedsuccesswithname'] = 'ポートフォリオ「 %s 」が正常にリリースされました。';
$string['portfolioreleasefailed'] = 'アーカイブ後の「 %s 」のリリースに失敗しました。';
$string['portfolioreleasedpending'] = 'ポートフォリオはアーカイブ後にリリースされます。';
$string['leavegroup'] = 'このグループから離脱する';
$string['joingroup'] = 'このグループに参加する';
$string['requestjoingroup'] = 'このグループへの参加をリクエストする';
$string['grouphaveinvite'] = 'あなたはこのグループへの参加を招待されました。';
$string['grouphaveinvitewithrole'] = 'あなたはこのグループへの参加を次のロールで招待されました';
$string['groupnotinvited'] = 'あなたはこのグループへの参加を招待されていません。';
$string['groupinviteaccepted'] = '招待が正常に承認されました。あなたはグループメンバとなりました。';
$string['groupinvitedeclined'] = '招待が正常に拒否されました。';
$string['acceptinvitegroup'] = '承認';
$string['declineinvitegroup'] = '拒否';
$string['leftgroup'] = 'あなたはこのグループから離脱しました。';
$string['leftgroupfailed'] = 'グループからの離脱に失敗しました。';
$string['couldnotleavegroup'] = 'あなたはこのグループから離脱できません。';
$string['joinedgroup'] = 'あなたはグループメンバになりました。';
$string['couldnotjoingroup'] = 'あなたはこのグループに参加できません。';
$string['membershipcontrolled'] = 'このグループのメンバシップは管理メンバシップです。';
$string['membershipbyinvitationonly'] = 'このグループのメンバシップは招待のみです。';
$string['grouprequestsent'] = 'グループメンバシップのリクエストが送信されました。';
$string['couldnotrequestgroup'] = 'グループメンバシップのリクエストを送信できませんでした。';
$string['cannotrequestjoingroup'] = 'あなたはこのグループへの参加をリクエストできません。';
$string['grouprequestsubject'] = '新しいグループメンバシップのリクエスト';
$string['grouprequestmessage'] = '%s があなたのグループ「 %s 」への参加を希望しています。';
$string['grouprequestmessagereason'] = '%s があなたのグループ「 %s 」への参加を希望しています。参加を希望する理由は次のとおりです:

%s';
$string['cantdeletegroup'] = 'あなたはこのグループを削除できません。';
$string['groupdeletegeneral'] = 'このグループに含まれるすべてのポートフォリオ、アーティファクトおよびフォーラムが削除されます。';
$string['groupconfirmdeleteowngroupsonly'] = '加えて、このグループの削除後、少なくとも1つのグループに属していない限り、アカウント保持者はお互いのポートフォリオを閲覧できないようになります。';
$string['groupconfirmdelete1'] = '本当にこのグループおよびそのコンテンツを削除してもよろしいですか? あなたはこの操作を元に戻せません。';
$string['deletegroup'] = 'グループが正常に削除されました。';
$string['deletegroup1'] = 'グループを削除する';
$string['allmygroups'] = 'すべてのマイグループ';
$string['groupsimin'] = '私が参加しているグループ';
$string['groupsiown'] = '私が所有するグループ';
$string['groupsiminvitedto'] = '私が招待されているグループ';
$string['groupsiwanttojoin'] = '私が参加したいグループ';
$string['groupsicanjoin'] = '私が参加できるグループ';
$string['requestedtojoin'] = 'あなたはこのグループへの参加をリクエストしました。';
$string['groupnotfound'] = 'ID %s のグループは見つかりませんでした。';
$string['groupnotfoundname'] = 'グループ「 %s 」は見つかりませんでした。';
$string['groupconfirmleave'] = '本当にこのグループから離脱してもよろしいですか?';
$string['cantleavegroup'] = 'あなたはこのグループから離脱できません。';
$string['usercantleavegroup'] = 'このグループメンバはこのグループから離脱できません。';
$string['usercannotchangetothisrole'] = 'このグループメンバはこのロールに変更できません。';
$string['leavespecifiedgroup'] = 'グループ「 %s 」から離脱する';
$string['memberslist'] = 'メンバ:';
$string['nogroups'] = 'グループなし';
$string['deletespecifiedgroup'] = 'グループ「 %s 」を削除する';
$string['requestjoinspecifiedgroup'] = 'グループ「 %s 」への参加をリクエストする';
$string['youaregroupmember'] = 'あなたはこのグループのメンバです。';
$string['youaregroupadmin'] = 'あなたはこのグループの管理者です。';
$string['youowngroup'] = 'あなたはこのグループを所有しています。';
$string['groupsnotin'] = '私が参加していないグループ';
$string['allgroups'] = 'すべてのグループ';
$string['allgroupmembers'] = 'すべてのグループメンバ';
$string['trysearchingforgroups1'] = '参加するには<a href="%sgroup/index.php?filter=canjoin">グループの検索</a>をお試しください。';
$string['nogroupsfound'] = 'グループは見つかりませんでした。';
$string['group'] = 'グループ';
$string['Group'] = 'グループ';
$string['groups'] = 'グループ';
$string['ngroups'] = '%s グループ';
$string['notamember'] = 'あなたはこのグループのメンバではありません。';
$string['notmembermayjoin'] = 'このページを閲覧するにはあなたはグループ「 %s 」に参加する必要があります。';
$string['declinerequestsuccess'] = 'グループメンバシップのリクエストが正常に拒否されました。';
$string['notpublic'] = 'このグループはパブリックではありません。';
$string['moregroups'] = 'さらにグループを表示する';
$string['deletegroupnotificationsubject'] = 'グループ「 %s 」が削除されました。';
$string['deletegroupnotificationmessage'] = 'あなたはグループ %s (%s) のメンバでした。現在、このグループは削除されています。';
$string['deletegroupnotificationmessageowngroupsonly'] = 'グループまたは個別のグループメンバから共有されたポートフォリオがある場合、グループメンバのみ相互にポートフォリオを共有できるため、あなたはそれ以上アクセスできません。';
$string['removefromgroupnotificationsubject'] = '「 %s 」のメンバではなくなりました。';
$string['removefromgroupnotificationmessage'] = 'あなたはグループ「 %s 」のメンバではなくなりました';
$string['hidegroupmembers'] = 'メンバを秘匿する';
$string['hideonlygrouptutors'] = 'チュータを秘匿する';
$string['addmembers'] = 'メンバを追加する';
$string['invitationssent'] = '%d 件の招待が送信されました。';
$string['newmembersadded'] = '%d 名の新しいメンバが追加されました。';
$string['potentialmembers'] = '潜在的なメンバ';
$string['sendinvitations'] = '招待を送信する';
$string['userstobeadded'] = '追加される人';
$string['userstobeinvited'] = '招待される人';
$string['potentialmemberstorecommend'] = '選択した潜在的なメンバをレコメンデーション送信対象の人にする';
$string['recommendedtopotentialmembers'] = '選択したレコメンデーション送信対象の人を潜在的なメンバにする';
$string['potentialmoderatorstomoderators'] = '選択した潜在的なモデレータをモデレータにする';
$string['moderatorstopotentialmoderators'] = '選択したモデレータを潜在的なモデレータにする';
$string['reasonoptional'] = '理由 (任意)';
$string['request'] = 'リクエスト';
$string['friendformaddsuccess'] = '%s があなたのフレンドリストに追加されました。';
$string['friendformremovesuccess'] = '%s があなたのフレンドリストから削除されました。';
$string['friendformrequestsuccess'] = '%s にフレンドシップリクエストが送信されました。';
$string['friendformacceptsuccess'] = '承認されたフレンドリクエスト';
$string['friendformrejectsuccess'] = '拒否されたフレンドリクエスト';
$string['addtofriendslist'] = 'フレンドに追加する';
$string['requestfriendship'] = 'フレンドシップをリクエストする';
$string['addedtofriendslistsubject'] = '%s があなたをフレンドとして追加しました。';
$string['addedtofriendslistmessage'] = '%s があなたをフレンドとして追加しました。これはあなたのフレンドリストに %s が追加されたことも意味します。追加された人のプロファイルページを閲覧するには以下のリンクをクリックしてください。';
$string['requestedfriendlistsubject'] = '新しいフレンドリクエスト';
$string['requestedfriendlistinboxmessage'] = '%s がフレンドとして追加するようあなたにリクエストしました。あなたは以下のリンクをクリックするか、あなたのフレンドリストページに移動することでフレンドとして追加できます。';
$string['requestedfriendlistmessageexplanation'] = '%s がフレンドとして追加するようあなたにリクエストしました。あなたは以下のリンクをクリックするか、あなたのフレンドリストページに移動することでフレンドとして追加できます。理由は次のとおりです:';
$string['removefromfriendslist'] = 'フレンドから削除する';
$string['removefromfriends'] = '%s をフレンドから削除する';
$string['removedfromfriendslistsubject'] = 'フレンドリストから削除されました。';
$string['removedfromfriendslistmessage'] = '%s があなたをフレンドリストから削除しました。';
$string['removedfromfriendslistmessageauto'] = 'あなたは %s のフレンドリストから削除されました。';
$string['cantremovefriend'] = 'あなたはこの人をフレンドリストから削除できません。';
$string['friendshipalreadyrequested'] = 'あなたは %s のフレンドリストへの追加をリクエストしました。';
$string['friendshipalreadyrequestedowner'] = '%s があなたのフレンドリストへの追加をリクエストしました。';
$string['rejectfriendshipreason'] = 'リクエストを拒否する理由';
$string['alreadyfriends'] = 'あなたはすでに %s のフレンドです。';
$string['friendrequestacceptedsubject'] = 'フレンドリクエストが承認されました。';
$string['friendrequestacceptedmessage'] = '%s があなたのフレンドリクエストを承認しました。同時にあなたのフレンドリストに追加されました。';
$string['friendrequestrejectedsubject'] = 'フレンドリクエストが拒否されました。';
$string['friendrequestrejectedmessage'] = '%s があなたのフレンドリクエストを拒否しました。';
$string['friendrequestrejectedmessagereason'] = '%s があなたのフレンドリクエストを拒否しました。
理由は次のとおりです:';
$string['acceptfriendshiprequestfailed'] = 'フレンドリクエストの承認に失敗しました。';
$string['addtofriendsfailed'] = 'あなたのフレンドリストへの %s の追加に失敗しました。';
$string['allfriends'] = 'すべてのフレンド';
$string['currentfriends'] = '現在のフレンド';
$string['pendingfriends'] = '保留中のフレンド';
$string['pendingfriend'] = '保留中のフレンド';
$string['backtofriendslist'] = 'フレンドリストに戻る';
$string['findnewfriends'] = '新しいフレンドを探す';
$string['Collections'] = 'コレクション';
$string['Views'] = 'ページ';
$string['Portfolios'] = 'ポートフォリオ';
$string['Files'] = 'ファイル';
$string['noviewstosee'] = 'あなたが閲覧できるものはありません。';
$string['whymakemeyourfriend'] = 'あなたが私をフレンドにする理由:';
$string['approverequest'] = 'リクエストを承認する';
$string['denyrequest'] = 'リクエストを拒否する';
$string['pending'] = '保留中';
$string['pendingsince'] = '%s より保留中';
$string['requestedsince'] = '%s よりリクエスト中';
$string['trysearchingforfriends'] = 'あなたのネットワークを広げるため%s新しいフレンドの検索%sをお試しください。';
$string['nobodyawaitsfriendapproval'] = 'あなたのフレンドになるため承認を待っている人はいません。';
$string['sendfriendrequest'] = 'フレンドリクエストを送信する';
$string['addtomyfriends'] = 'マイフレンドに追加する';
$string['friendshiprequested'] = 'フレンドシップがリクエストされました。';
$string['existingfriend'] = '現在のフレンド';
$string['nosearchresultsfound'] = '結果は見つかりませんでした。';
$string['friend'] = 'フレンド';
$string['friends'] = 'フレンド';
$string['nfriends'] = '%s フレンド';
$string['user'] = '人';
$string['users'] = '人';
$string['nusers'] = '%s 人';
$string['Friends'] = 'フレンド';
$string['friendrequests'] = 'フレンドリクエスト';
$string['Everyone'] = '誰でも';
$string['myinstitutions'] = 'マイインスティテューション';
$string['friendlistfailure'] = 'あなたのフレンドリストの修正に失敗しました。';
$string['userdoesntwantfriends'] = 'この人は新しいフレンドを求めていません。';
$string['cannotrequestfriendshipwithself'] = 'あなたはあなた自身にフレンドシップをリクエストできません。';
$string['cantrequestfriendship'] = 'あなたはこの人にフレンドシップをリクエストできません。';
$string['messagebody'] = 'メッセージを送信する';
$string['sendmessage'] = 'メッセージを送信する';
$string['messagesent'] = 'メッセージが送信されました。';
$string['messagenotsent'] = 'メッセージの送信に失敗しました。';
$string['newusermessage'] = '%s からの新しいメッセージ';
$string['newusermessageemailbody'] = '%s があなたにメッセージを送信しました。メッセージを閲覧するには %s にアクセスしてください。';
$string['sendmessageto'] = '%s にメッセージを送信する';
$string['viewmessage'] = 'メッセージを表示する';
$string['Reply'] = '返信';
$string['denyfriendrequest'] = 'フレンドシップリクエストを拒否する';
$string['deny'] = '拒否';
$string['sendfriendshiprequest'] = '%s にフレンドシップリクエストを送信する';
$string['cantdenyrequest'] = 'これは有効なフレンドシップリクエストではありません。';
$string['cantmessageuser'] = 'あなたはこの人にメッセージを送信できません。';
$string['cantmessageuserdeleted'] = 'アカウントが削除されているため、あなたはこの人にメッセージを送信できません。';
$string['cantviewmessage'] = 'あなたはこのメッセージを閲覧できません。';
$string['requestedfriendship'] = 'リクエストされたフレンドシップ';
$string['notinanygroups'] = 'どのグループにも属していません。';
$string['addusertogroup'] = '追加';
$string['inviteusertojoingroup'] = '招待';
$string['invitemembertogroup'] = '%s を「 %s 」の参加に招待する';
$string['cannotinvitetogroup'] = 'あなたはこの人をこのグループに招待できません。';
$string['useralreadyinvitedtogroup'] = 'この人はすでに招待されているか、このグループのメンバになっています。';
$string['removefriend'] = 'フレンドを削除する';
$string['denyfriendrequestlower'] = 'フレンドリクエストを拒否する';
$string['groupinteractions'] = 'グループ活動';
$string['nointeractions'] = 'このグループに活動はありません。';
$string['notallowedtoeditinteractions'] = 'あなたはこのグループで活動を追加および編集できません。';
$string['notallowedtodeleteinteractions'] = 'あなたはこのグループの活動を削除できません。';
$string['interactionsaved'] = '%s が正常に保存されました。';
$string['deleteinteraction'] = '%s 「 %s 」を削除する';
$string['deleteinteractionsure'] = '本当にこの処理を実行してもよろしいですか? 元に戻せません。';
$string['interactiondeleted'] = '%s が正常に削除されました。';
$string['addnewinteraction'] = '新しい %s を追加する';
$string['title'] = 'タイトル';
$string['Role'] = 'ロール';
$string['changerole'] = 'ロールを変更する';
$string['changeroleofuseringroup'] = 'ロールを変更する - 人: %s / グループ: %s';
$string['changerolepermissions'] = 'ロールを変更する - ロール: %s / 人: %s';
$string['currentrole'] = '現在のロール';
$string['changerolefromto'] = 'ロール「 %s 」を次のロールに変更する';
$string['rolechanged'] = 'ロールが変更されました。';
$string['removefromgroup'] = 'グループから削除する';
$string['userremoved'] = 'グループメンバが削除されました。';
$string['About'] = 'About';
$string['aboutgroup'] = '%s について';
$string['Joined'] = '登録';
$string['invitemembersdescription'] = 'あなたはプロファイルページ経由または<a href="%s">複数招待の同時送信</a>により人にこのグループへの参加を招待できます。';
$string['membersdescription:controlled'] = 'これは「管理メンバシップ」グループです。あなたは人をプロファイルページより直接追加または<a href="%s">一度に多くの人を追加できます</a>。';
$string['submit'] = '送信';
$string['allowssubmissions'] = '提出を許可する';
$string['allowsubmissions'] = '提出を許可する';
$string['allowssubmissionsdescription1'] = 'メンバはグループにページを送信できます。送信後、ページはロックされます。送信されたページはグループチュータまたは管理者がリリースするまで編集できません。';
$string['allowssubmissionsdescription'] = 'メンバはグループにページを送信できます。';
$string['allowsarchives'] = '提出のアーカイブを許可する';
$string['allowsarchiveserror'] = '送信が許可されている場合、あなたはアーカイブのみ許可できます。';
$string['allowsarchivesdescription2'] = '送信リリース処理中にポートフォリオはZIPファイルとしてアーカイブされます。';
$string['report'] = 'レポート';
$string['grouphasntcreatedanyviewsyet'] = 'このグループはまだページを作成していません。';
$string['noviewssharedwithgroupyet'] = 'このグループで共有されているページはまだありません。';
$string['groupsharedviewsscrolled'] = 'あなたは共有ページリストの最後までスクロールしました。';
$string['groupcreatedviewsscrolled'] = 'あなたはグループページリストの最後までスクロールしました。';
$string['nnonmembers'] = '%s 非メンバ';
$string['membercommenters'] = '関係メンバ';
$string['extcommenters'] = '関係非メンバ';
$string['groupparticipationreports'] = '参加者レポート';
$string['groupparticipationreportsdesc1'] = 'グループ管理者はすべてのグループ、共有ページおよび誰がコメントしたのか表示するレポートにアクセスできます。';
$string['archives'] = 'アーカイブ';
$string['grouparchivereportsheading'] = '提出アーカイブ';
$string['grouparchivereports'] = '提出アーカイブへのアクセス';
$string['grouparchivereportsdesc'] = 'グループ管理者はアーカイブ済み提出ファイルにアクセスできます。';
$string['grouparchivereportserror'] = '提出が許可されている場合のみ、あなたは提出アーカイブレポートを閲覧できます。';
$string['returntogroupportfolios1'] = 'グループポートフォリオに戻る';
$string['showintroduction'] = '自己紹介';
$string['addgrouplabel'] = 'グループラベルを追加する';
$string['addgrouplabeldescription'] = 'あなたのみ閲覧できるようこのグループに1つまたはそれ以上のラベルを追加してください。ラベルを追加した場合、あなたのリンクでグループを整理できます。あなたはどのグループをサイドバーおよびあなたのプロファイルページに表示するかも決定できます。';
$string['addgrouplabelfilter'] = 'グループラベルフィルタ「 %s 」を追加する';
$string['addlabel'] = 'ラベルを追加する';
$string['displayonlylabels'] = '次でラベル付けされたグループのみ表示する';
$string['filterbygrouplabel'] = 'ラベルでフィルタする';
$string['grouplabelnotmember'] = '現在、あなたはこのグループのメンバではありません。ページをリフレッシュしてください。';
$string['grouplabeladded'] = 'グループラベルが追加されました。';
$string['grouplabelupdated'] = 'グループラベルが更新されました。';
$string['groupnovalidlabelsupplied'] = 'あなたのラベルには少なくとも2文字含む必要があります。';
$string['label'] = 'ラベル';
$string['labelfor'] = 'ラベルをグループ「 %s 」に追加する';
$string['mygrouplabel'] = 'マイグループラベル';
$string['removegrouplabelfilter'] = 'グループラベルフィルタ「 %s 」を削除する';
$string['agrouplabeltooshort'] = '1つまたはそれ以上のグループラベルが短すぎます。少なくとも %s 文字必要です。';
$string['agrouplabeltoolong'] = '1つまたはそれ以上のグループラベルが長すぎます。最大 %s 文字にできます。';
$string['currentarchivereleasedsubmittedhostmessage'] = 'あなたのポートフォリオ「 %s 」は「 %s 」から %s によってリリースされました。必要であれば、あなたのポートフォリオを再度提出できます。';
