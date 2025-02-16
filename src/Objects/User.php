<?php

namespace Telegram\Bot\Objects;

/**
 * Class User.
 *
 *
 * @property int         $id             Unique identifier for this user or bot.
 * @property bool        $isBot          True, if this user is a bot
 * @property string      $firstName      User's or bot's first name.
 * @property string|null $lastName       (Optional). User's or bot's last name.
 * @property string|null $username       (Optional). User's or bot's username.
 * @property string|null $languageCode   (Optional). IETF language tag of the user's language
 */
class User extends BaseObject
{
    /**
     * {@inheritdoc}
     */
    public function relations()
    {
        return [];
    }
}
