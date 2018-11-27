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
 * @updated    2018-11-18 15:51:37 UTC
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL
 * @copyright  (C) 2006 onwards Catalyst IT Ltd http://catalyst.net.nz
 *
 */

defined('INTERNAL') || die();

$string['groupname'] = 'グループ名';
$string['creategroup'] = 'グループを作成する';
$string['groupmemberrequests'] = '保留中メンバーシップリクエスト';
$string['membershiprequests'] = 'メンバーシップリクエスト';
$string['sendinvitation'] = '招待状を送信する';
$string['invitetogroupsubject'] = 'あなたはグループへの参加を招待されました。';
$string['invitetogroupmessage'] = '%s がグループ「 %s 」へのあなたの参加を招待しました。詳細は以下のリンクをクリックしてください。';
$string['inviteuserfailed'] = 'ユーザの招待に失敗しました。';
$string['userinvited'] = '招待状が送信されました。';
$string['addedtogroupsubject'] = 'あなたはグループに追加されました。';
$string['addedtogroupmessage'] = '%s があなたをグループ「 %s 」に追加しました。グループを表示するには以下のリンクをクリックしてください。';
$string['adduserfailed'] = 'ユーザの追加に失敗しました。';
$string['useradded'] = 'ユーザが追加されました。';
$string['editgroup'] = 'グループを編集する';
$string['savegroup'] = 'グループを保存する';
$string['groupsaved'] = 'グループが正常に保存されました。';
$string['invalidgroup'] = 'グループが存在しません。';
$string['canteditdontown'] = 'あなたの所有ではないためこのグループを編集できません。';
$string['groupdescription'] = 'グループ説明';
$string['groupurl'] = 'グループホームページURL';
$string['groupurldescription'] = 'あなたのグループホームページのURLです。このフィールドの長さは半角3-30文字にしてください。';
$string['groupurltaken'] = 'このURLはすでに他のグループに取得されています。';
$string['Membership'] = 'メンバーシップ';
$string['Roles'] = 'ロール';
$string['Open'] = 'オープン';
$string['opendescription'] = 'ユーザはグループ管理者の承認なしにグループに参加することができます。';
$string['requestdescription'] = 'ユーザはグループ管理者にメンバーシップリクエストを送信することができます。';
$string['Controlled'] = '管理';
$string['controlleddescription'] = 'グループ管理者はユーザの同意なしにグループにユーザを追加することができます。また、メンバーはグループを離れることはできません。';
$string['membershiptype'] = 'グループメンバーシップタイプ';
$string['membershiptype.controlled'] = '管理メンバーシップ';
$string['membershiptype.approve'] = '承認メンバーシップ';
$string['membershiptype.open'] = 'オープンメンバーシップ';
$string['membershiptype.abbrev.controlled'] = '管理';
$string['membershiptype.abbrev.approve'] = 'ノーマル';
$string['membershiptype.abbrev.open'] = 'オープン';
$string['membershipopencontrolled'] = 'メンバーシップをオープンおよび管理の両方にすることはできません。';
$string['membershipopenrequest'] = 'オープンメンバーシップグループではメンバーシップリクエストを受け付けません。';
$string['requestmembership'] = 'リクエストメンバーシップ';
$string['pendingmembers'] = '保留中メンバー';
$string['reason'] = '理由';
$string['approve'] = '承認';
$string['reject'] = '拒否';
$string['groupalreadyexists'] = 'この名称のグループはすでに存在します。';
$string['invalidshortname'] = '無効なグループ省略名です。';
$string['shortnameformat'] = 'グループ省略名の長さは半角2-255文字にしてください。グループ省略名には半角英数字、「.」、「-」および「_」を使用することができます。';
$string['Created'] = '作成';
$string['editable'] = '編集可能';
$string['editability'] = '編集可能';
$string['windowstart'] = '開始日時';
$string['windowstartdesc'] = 'この日時以前、メンバーはグループを編集することはできません。';
$string['windowend'] = '終了日時';
$string['windowenddesc'] = 'この日時以降、メンバーはグループを編集することはできません。';
$string['editwindowbetween'] = '%s - %s';
$string['editwindowfrom'] = '%s から';
$string['editwindowuntil'] = '%s まで';
$string['groupadmins'] = 'グループ管理者';
$string['editroles'] = '誰がページを編集できますか?';
$string['editrolesdescription'] = 'グループページを作成および編集できるロールです。';
$string['allexceptmember'] = '一般メンバーを除く全員';
$string['Admin'] = '管理者';
$string['publiclyviewablegroup'] = '一般の人も閲覧可能なグループですか?';
$string['publiclyviewablegroupdescription'] = '誰でも (このサイトのメンバーではない人も含めて) フォーラムを含む、このグループを閲覧できるようにしますか?';
$string['Type'] = 'タイプ';
$string['publiclyvisible'] = 'パブリックに閲覧可';
$string['Public'] = 'パブリック';
$string['usersautoadded'] = 'ユーザを自動追加しますか?';
$string['usersautoaddeddescription'] = 'このグループに対して新しいユーザすべてを自動追加しますか?';
$string['groupcategory'] = 'グループカテゴリ';
$string['allcategories'] = 'すべてのカテゴリ';
$string['groupoptionsset'] = 'グループオプションが更新されました。';
$string['nocategoryselected'] = 'カテゴリ未選択';
$string['categoryunassigned'] = 'カテゴリ未割り当て';
$string['hasrequestedmembership'] = 'がこのグループのメンバーシップをリクエストしました。';
$string['hasbeeninvitedtojoin'] = 'がこのグループへの参加を招待されました。';
$string['groupinvitesfrom'] = '参加の招待:';
$string['requestedmembershipin'] = 'リクエストされたメンバーシップ:';
$string['viewnotify'] = '共有ページ通知';
$string['viewnotifydescription'] = 'この設定を有効にした場合、グループメンバーが自分のページをグループ内で共有設定することですべてのグループメンバーに通知が送信されます。この設定を有効にした場合、規模の大きなグループでは多くの通知が発生する可能性があります。';
$string['hiddengroup'] = 'グループを隠す';
$string['hiddengroupdescription'] = 'このグループを「グループを探す」ページに一覧表示しません。';
$string['hidemembers'] = 'メンバーシップを隠す';
$string['hidemembersdescription'] = '非メンバーからグループのメンバーシップ一覧を隠します。';
$string['hidemembersfrommembers'] = 'メンバーからメンバーシップを隠す';
$string['hidemembersfrommembersdescription'] = 'グループ管理者を除き、メンバーを一覧表示できないようになります。管理者はグループホームページ内に一覧表示されます。';
$string['friendinvitations'] = 'フレンドの招待';
$string['invitefriendsdescription'] = 'この設定を有効にした場合、メンバーはフレンドに対してグループへの参加を招待することができます。この設定に関わらず、グループ管理者は常に誰にでも招待状を送信することができます。';
$string['invitefriends'] = 'フレンドを招待する';
$string['Recommendations'] = 'レコメンデーション';
$string['suggestfriendsdescription'] = 'この設定を有効にした場合、グループホームページ内のボタンを使って、メンバーは簡単にこのグループへのレコメンデーション (推奨文) をフレンドに送信することができます。';
$string['suggesttofriends'] = 'フレンドに勧める';
$string['userstosendrecommendationsto'] = 'レコメンデーションが送信されるユーザ';
$string['suggestgroupnotificationsubject'] = 'あなたのグループ参加を %s が提案しました。';
$string['suggestgroupnotificationmessage'] = 'あなたのグループ参加を %s が提案しました: グループ「 %s 」(%s)';
$string['recommendationssent'] = '%d 件のレコメンデーションが送信されました。';
$string['suggestinvitefriends'] = 'あなたはフレンド招待およびレコメンデーションを同時に有効にすることはできません。';
$string['suggestfriendsrequesterror'] = 'あなたはオープンまたはリクエストグループでのみフレンドのレコメンデーションを有効にできます。';
$string['editwindowendbeforestart'] = '終了日時は開始日時の後に設定してください。';
$string['editgroupmembership'] = 'グループメンバーシップを編集する';
$string['editmembershipforuser'] = '%s のグループメンバーシップを編集する';
$string['changedgroupmembership'] = 'グループメンバーシップが正常に更新されました。';
$string['changedgroupmembershipsubject'] = 'あなたのグループメンバーシップが変更されました。';
$string['addedtogroupsmessage'] = '%2$s があなたをグループに追加しました:

%s';
$string['removedfromgroupsmessage'] = '%2$s があなたをグループから削除しました:

%s';
$string['cantremovememberfromgroup'] = 'あなたはユーザを %s から削除できません。';
$string['current'] = '現在';
$string['requests'] = 'リクエスト';
$string['invites'] = '招待';
$string['member'] = 'メンバー';
$string['members'] = 'メンバー';
$string['Members'] = 'メンバー';
$string['nmembers'] = '%s メンバー';
$string['memberrequests'] = 'メンバーシップリクエスト';
$string['declinerequest'] = 'リクエストを拒否する';
$string['submittedviews'] = '送信済みページ';
$string['releaseview'] = 'ページをリリースする';
$string['releasecollection'] = 'コレクションをリリースする';
$string['invite'] = '招待';
$string['remove'] = '削除';
$string['updatemembership'] = 'メンバーシップを更新する';
$string['memberchangefailed'] = 'いくつかのメンバーシップ情報の更新に失敗しました。';
$string['memberchangesuccess'] = 'メンバーシップのステータスが正常に変更されました。';
$string['viewreleasedsubject'] = 'あなたのページ「 %s 」が %s から %s さんによってリリースされました。';
$string['viewreleasedmessage'] = 'あなたのページ「 %s 」が %s から %s さんによってリリースされました。';
$string['collectionreleasedsubject'] = 'あなたのコレクション「 %s 」が %s から %s さんによってリリースされました。';
$string['collectionreleasedmessage'] = 'あなたのコレクション「 %s 」が %s から %s さんによってリリースされました。';
$string['viewreleasedsuccess'] = 'ページが正常にリリースされました。';
$string['collectionreleasedsuccess'] = 'コレクションが正常にリリースされました。';
$string['leavegroup'] = 'このグループから離れる';
$string['joingroup'] = 'このグループに参加する';
$string['requestjoingroup'] = 'このグループへの参加をリクエストする';
$string['grouphaveinvite'] = 'あなたはこのグループへの参加を招待されました。';
$string['grouphaveinvitewithrole'] = 'あなたはこのグループへの参加を次のロールで招待されました';
$string['groupnotinvited'] = 'あなたはこのグループへの参加を招待されていません。';
$string['groupinviteaccepted'] = '招待が正常に受理されました。あなたはグループメンバーとなりました。';
$string['groupinvitedeclined'] = '招待が正常に拒否されました。';
$string['acceptinvitegroup'] = '承認';
$string['declineinvitegroup'] = '拒否';
$string['leftgroup'] = 'あなたはこのグループから離れました。';
$string['leftgroupfailed'] = 'グループを離れることができませんでした。';
$string['couldnotleavegroup'] = 'あなたはこのグループから離れることはできません。';
$string['joinedgroup'] = 'あなたはグループメンバーになりました。';
$string['couldnotjoingroup'] = 'あなたはこのグループに参加できません。';
$string['membershipcontrolled'] = 'このグループのメンバーシップは管理メンバーシップです。';
$string['membershipbyinvitationonly'] = 'このグループのメンバーシップは招待のみです。';
$string['grouprequestsent'] = 'グループメンバーシップのリクエストが送信されました。';
$string['couldnotrequestgroup'] = 'グループメンバーシップのリクエストを送信できませんでした。';
$string['cannotrequestjoingroup'] = 'あなたはこのグループへの参加をリクエストできません。';
$string['grouprequestsubject'] = '新しいグループメンバーシップのリクエスト';
$string['grouprequestmessage'] = '%s があなたのグループ「 %s 」への参加を希望しています。';
$string['grouprequestmessagereason'] = '%s があなたのグループ「 %s 」への参加を希望しています。参加を希望する理由は次のとおりです:

%s';
$string['cantdeletegroup'] = 'あなたはこのグループを削除できません。';
$string['groupconfirmdelete'] = 'この処理によりグループに含まれるすべてのページ、ファイルおよびフォーラムも削除されます。本当にこのグループおよびコンテンツすべてを完全に削除してもよろしいですか?';
$string['deletegroup'] = 'グループが正常に削除されました。';
$string['deletegroup1'] = 'グループを削除する';
$string['allmygroups'] = 'すべてのマイグループ';
$string['groupsimin'] = '私が参加しているグループ';
$string['groupsiown'] = '私が所有しているグループ';
$string['groupsiminvitedto'] = '私が招待されているグループ';
$string['groupsiwanttojoin'] = '私が参加したいグループ';
$string['groupsicanjoin'] = '私が参加できるグループ';
$string['requestedtojoin'] = 'あなたはこのグループへの参加をリクエストしました。';
$string['groupnotfound'] = 'ID %s のグループはありません。';
$string['groupnotfoundname'] = 'グループ「 %s 」が見つかりませんでした。';
$string['groupconfirmleave'] = '本当にこのグループから離れてもよろしいですか?';
$string['cantleavegroup'] = 'あなたはこのグループから離れることはできません。';
$string['usercantleavegroup'] = 'このユーザはこのグループから離れることはできません。';
$string['usercannotchangetothisrole'] = 'ユーザはこのロールに変更できません。';
$string['leavespecifiedgroup'] = 'グループ「 %s 」から離れる';
$string['memberslist'] = 'メンバー:';
$string['nogroups'] = 'グループなし';
$string['deletespecifiedgroup'] = 'グループ「 %s 」を削除する';
$string['requestjoinspecifiedgroup'] = 'グループ「 %s 」への参加をリクエストする';
$string['youaregroupmember'] = 'あなたはこのグループのメンバーです。';
$string['youaregroupadmin'] = 'あなたはこのグループの管理者です。';
$string['youowngroup'] = 'あなたはこのグループのオーナーです。';
$string['groupsnotin'] = '私が参加していないグループ';
$string['allgroups'] = 'すべてのグループ';
$string['allgroupmembers'] = 'グループメンバーすべて';
$string['trysearchingforgroups'] = '参加するには%sグループを探す%sをお試しください。';
$string['nogroupsfound'] = 'グループが見つかりませんでした。';
$string['group'] = 'グループ';
$string['Group'] = 'グループ';
$string['groups'] = 'グループ';
$string['notamember'] = 'あなたはこのグループのメンバーではありません。';
$string['notmembermayjoin'] = 'このページを閲覧するにはあなたはグループ「 %s 」に参加する必要があります。';
$string['declinerequestsuccess'] = 'グループメンバーシップのリクエストが正常に拒否されました。';
$string['notpublic'] = 'このグループはパブリックではありません。';
$string['moregroups'] = 'さらにグループを表示する';
$string['deletegroupnotificationsubject'] = 'グループ「 %s 」が削除されました。';
$string['deletegroupnotificationmessage'] = 'あなたはグループ %s (%s) のメンバーでした。現在、このグループは削除されています。';
$string['addmembers'] = 'メンバーを追加する';
$string['invitationssent'] = '%d 通の招待状が送信されました。';
$string['newmembersadded'] = '%d 名の新しいユーザが追加されました。';
$string['potentialmembers'] = '潜在的なメンバー';
$string['sendinvitations'] = '招待状を送信する';
$string['userstobeadded'] = '追加されるユーザ';
$string['userstobeinvited'] = '招待されるユーザ';
$string['reasonoptional'] = '理由 (任意)';
$string['request'] = 'リクエスト';
$string['friendformaddsuccess'] = '%s があなたのフレンドリストに追加されました。';
$string['friendformremovesuccess'] = '%s があなたのフレンドリストから削除されました。';
$string['friendformrequestsuccess'] = '%s にフレンドシップリクエストが送信されました。';
$string['friendformacceptsuccess'] = '承認されたフレンドリクエスト';
$string['friendformrejectsuccess'] = '拒否されたフレンドリクエスト';
$string['addtofriendslist'] = 'フレンドリストに追加する';
$string['requestfriendship'] = 'フレンドシップをリクエストする';
$string['addedtofriendslistsubject'] = '%s があなたをフレンドとして追加しました。';
$string['addedtofriendslistmessage'] = '%s があなたをフレンドとして追加しました。これはあなたのフレンドリストに %s が追加されたことも意味します。追加されたユーザのプロファイルページを閲覧するには以下のリンクをクリックしてください。';
$string['requestedfriendlistsubject'] = '新しいフレンドリクエスト';
$string['requestedfriendlistmessage'] = 'あなたがフレンドとして追加することを %a がリクエストしました。あなたは以下のリンクまたはフレンドリストページでフレンドを追加することができます。';
$string['requestedfriendlistmessagereason'] = 'あなたがフレンドとして追加することを %a がリクエストしました。あなたは以下のリンクまたはフレンドリストページでフレンドを追加することができます。リクエストの理由は:';
$string['removefromfriendslist'] = 'フレンドリストから削除する';
$string['removefromfriends'] = '%s をフレンドリストから削除する';
$string['removedfromfriendslistsubject'] = 'フレンドリストから削除されました。';
$string['removedfromfriendslistmessage'] = '%s があなたをフレンドリストから削除しました。';
$string['removedfromfriendslistmessagereason'] = '%s があなたをフレンドリストから削除しました。
削除理由は:';
$string['cantremovefriend'] = 'あなたはこのユーザをフレンドリストから削除できません。';
$string['friendshipalreadyrequested'] = 'あなたは %s のフレンドリストへの追加をリクエストしました。';
$string['friendshipalreadyrequestedowner'] = '%s があなたのフレンドリストへの追加をリクエストしました。';
$string['rejectfriendshipreason'] = 'リクエストを拒否する理由';
$string['alreadyfriends'] = 'あなたはすでに %s のフレンドです。';
$string['friendrequestacceptedsubject'] = 'フレンドリクエストが承認されました。';
$string['friendrequestacceptedmessage'] = '%s があなたのフレンドリクエストを承認しました。同時にあなたのフレンドリストに追加されました。';
$string['friendrequestrejectedsubject'] = 'フレンドリクエストが拒否されました。';
$string['friendrequestrejectedmessage'] = '%s があなたのフレンドリクエストを拒否しました。';
$string['friendrequestrejectedmessagereason'] = '%s があなたのフレンドリクエストを拒否しました。
拒否理由は:';
$string['acceptfriendshiprequestfailed'] = 'フレンドリクエストの承認に失敗しました。';
$string['addtofriendsfailed'] = 'あなたのフレンドリストへの %s の追加に失敗しました。';
$string['allfriends'] = 'すべてのフレンド';
$string['currentfriends'] = '現在のフレンド';
$string['pendingfriends'] = '保留中のフレンド';
$string['backtofriendslist'] = 'フレンドリストに戻る';
$string['findnewfriends'] = '新しいフレンドを探す';
$string['Collections'] = 'コレクション';
$string['Views'] = 'ページ';
$string['Files'] = 'ファイル';
$string['noviewstosee'] = 'あなたが閲覧できるものはありません。';
$string['whymakemeyourfriend'] = 'あなたが私をフレンドにする理由:';
$string['approverequest'] = 'リクエストを承認する';
$string['denyrequest'] = 'リクエストを拒否する';
$string['pending'] = '保留中';
$string['trysearchingforfriends'] = 'あなたのネットワークを広げるため%s新しいフレンドの検索%sをお試しください。';
$string['nobodyawaitsfriendapproval'] = 'あなたのフレンドになるための承認を待っているユーザはいません。';
$string['sendfriendrequest'] = 'フレンドリクエストを送信する';
$string['addtomyfriends'] = 'マイフレンドに追加する';
$string['friendshiprequested'] = 'フレンドシップがリクエストされました。';
$string['existingfriend'] = '現在のフレンド';
$string['nosearchresultsfound'] = '該当データはありません。';
$string['friend'] = 'フレンド';
$string['friends'] = 'フレンド';
$string['user'] = 'ユーザ';
$string['users'] = 'ユーザ';
$string['Friends'] = 'フレンド';
$string['Everyone'] = '誰でも';
$string['myinstitutions'] = 'マイインスティテューション';
$string['friendlistfailure'] = 'あなたのフレンドリストの変更に失敗しました。';
$string['userdoesntwantfriends'] = 'このユーザは新しいフレンドを求めていません。';
$string['cannotrequestfriendshipwithself'] = 'あなたはあなた自身にフレンドシップをリクエストできません。';
$string['cantrequestfriendship'] = 'あなたはこのユーザにフレンドシップをリクエストできません。';
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
$string['sendfriendshiprequest'] = '%s にフレンドシップリクエストを送信する';
$string['cantdenyrequest'] = 'これは有効なフレンドシップリクエストではありません。';
$string['cantmessageuser'] = 'あなたはこのユーザにメッセージを送信できません。';
$string['cantmessageuserdeleted'] = 'アカウントが削除されているためあなたはこのユーザにメッセージを送信できません。';
$string['cantviewmessage'] = 'あなたはこのメッセージを閲覧できません。';
$string['requestedfriendship'] = 'リクエストされたフレンドシップ';
$string['notinanygroups'] = 'どのグループにも属していません。';
$string['addusertogroup'] = '追加';
$string['inviteusertojoingroup'] = '招待';
$string['invitemembertogroup'] = '%s を「 %s 」の参加に招待する';
$string['cannotinvitetogroup'] = 'あなたはこのユーザをこのグループに招待できません。';
$string['useralreadyinvitedtogroup'] = 'このユーザはすでに招待されているか、このグループのメンバーになっています。';
$string['removefriend'] = 'フレンドを削除する';
$string['denyfriendrequestlower'] = 'フレンドリクエストを拒否する';
$string['groupinteractions'] = 'グループ活動';
$string['nointeractions'] = 'このグループに活動はありません。';
$string['notallowedtoeditinteractions'] = 'あなたはこのグループで活動を追加および編集できません。';
$string['notallowedtodeleteinteractions'] = 'あなたはこのグループの活動を削除できません。';
$string['interactionsaved'] = '%s が正常に保存されました。';
$string['deleteinteraction'] = '%s 「 %s 」を削除する';
$string['deleteinteractionsure'] = '本当にこの処理を実行してもよろしいですか? 元に戻すことはできません。';
$string['interactiondeleted'] = '%s が正常に削除されました。';
$string['addnewinteraction'] = '新しい %s を追加する';
$string['title'] = 'タイトル';
$string['Role'] = 'ロール';
$string['changerole'] = 'ロールを変更する';
$string['changeroleofuseringroup'] = 'ロールを変更する - ユーザ: %s / グループ: %s';
$string['currentrole'] = '現在のロール';
$string['changerolefromto'] = 'ロール「 %s 」を次のロールに変更する';
$string['rolechanged'] = 'ロールが変更されました。';
$string['removefromgroup'] = 'グループから削除する';
$string['userremoved'] = 'ユーザが削除されました。';
$string['About'] = 'About';
$string['aboutgroup'] = '%s について';
$string['Joined'] = '登録';
$string['invitemembersdescription'] = 'あなたはユーザのプロファイルページ経由または<a href="%s">同時に複数の招待状を送信する</a>ことでユーザにこのグループへの参加を招待することができます。';
$string['membersdescription:controlled'] = 'これは「管理メンバーシップ」グループです。あなたはユーザをユーザプロファイルページより追加または<a href="%s">一度に多くのユーザを追加することができます</a>。';
$string['submit'] = '送信';
$string['allowssubmissions'] = '送信を許可する';
$string['allowsubmissions'] = '送信を許可する';
$string['allowssubmissionsdescription1'] = 'メンバーはグループにページを送信することができます。送信後、ページはロックされます。送信されたページはグループチューターまたは管理者がリリースするまで編集することはできません。';
$string['allowssubmissionsdescription'] = 'メンバーはグループにページを送信することができます。';
$string['report'] = 'レポート';
$string['grouphasntcreatedanyviewsyet'] = 'このグループはまだページを作成していません。';
$string['noviewssharedwithgroupyet'] = 'このグループで共有されているページはまだありません。';
$string['groupsharedviewsscrolled'] = 'あなたは共有ページリストの最後までスクロールしました。';
$string['groupcreatedviewsscrolled'] = 'あなたはグループページリストの最後までスクロールしました。';
$string['nnonmembers'] = '%s 非メンバー';
$string['membercommenters'] = '関わっているメンバー';
$string['extcommenters'] = '関わっている非メンバー';
$string['groupparticipationreports'] = '参加者レポート';
$string['groupparticipationreportsdesc'] = 'この設定を有効にした場合、グループ管理者はすべてのグループ、共有ページおよび誰がコメントしたのか表示するレポートにアクセスすることができます。';

?>
