<?php

namespace Telegram\Bot\Objects;

/**
 * Class ChatMember.
 *
 * @property User        $user                            Information about the user.
 * @property string      $status                          The member's status in the chat. Can be “creator”, “administrator”, “member”, “left” or “kicked”
 * @property string|null $customTitle                     (Optional). Owner and administrators only. Custom title for this user
 * @property int|null    $untilDate                       (Optional). Restricted and kicked only. Date when restrictions will be lifted for this user, unix time
 * @property bool|null   $canBeEdited                     (Optional). Administrators only. True, if the bot is allowed to edit administrator privileges of that user
 * @property bool|null   $canPostMessages                 (Optional). Administrators only. True, if the administrator can post in the channel, channels only
 * @property bool|null   $canEditMessages                 (Optional). Administrators only. True, if the administrator can edit messages of other users, channels only
 * @property bool|null   $canDeleteMessages               (Optional). Administrators only. True, if the administrator can delete messages of other users
 * @property bool|null   $canPromoteMembers               (Optional). Administrators only. True, if the administrator can add new administrators with a subset of his own privileges or demote administrators that he has promoted, directly or indirectly (promoted by administrators that were appointed by the user)
 * @property bool|null   $canChangeInfo                   (Optional). Administrators and restricted only. True, if the administrator can change the chat title, photo and other settings
 * @property bool|null   $canInviteUsers                  (Optional). Administrators and restricted only. True, if the administrator can invite new users to the chat
 * @property bool|null   $canPinMessages                  (Optional). Administrators and restricted only. True, if the administrator can pin messages, supergroups only
 * @property bool|null   $isMember                        (Optional). Restricted only. True, if the user is a member of the chat at the moment of the request
 * @property bool|null   $canSendMessages                 (Optional). Restricted only. True, if the user can send text messages, contacts, locations and venues
 * @property bool|null   $canSendMediaMessages            (Optional). Restricted only. True, if the user can send audios, documents, photos, videos, video notes and voice notes, implies can_send_messages
 * @property bool|null   $canSendPolls                    (Optional). Restricted only. True, if the user is allowed to send polls
 * @property bool|null   $canSendOtherMessages            (Optional). Restricted only. True, if the user can send animations, games, stickers and use inline bots, implies can_send_media_messages
 * @property bool|null   $canAddWebPagePreviews           (Optional). Restricted only. True, if user may add web page previews to his messages, implies can_send_media_messages
 *
 * @link https://core.telegram.org/bots/api#chatmember
 */
class ChatMember extends BaseObject
{
    /**
     * {@inheritdoc}
     */
    public function relations()
    {
        return [
            'user' => User::class,
        ];
    }
}
