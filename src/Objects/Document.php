<?php

namespace Telegram\Bot\Objects;

/**
 * Class Document.
 *
 *
 * @property string         $fileId           Unique file identifier.
 * @property string         $fileUniqueId     Unique identifier for this file, which is supposed to be the same over time and for different bots. Can't be used to download or reuse the file.
 * @property PhotoSize|null $thumb            (Optional). Document thumbnail as defined by sender.
 * @property string|null    $fileName         (Optional). Original filename as defined by sender.
 * @property string|null    $mimeType         (Optional). MIME type of the file as defined by sender.
 * @property int|null       $fileSize         (Optional). File size.
 */
class Document extends BaseObject
{
    /**
     * {@inheritdoc}
     */
    public function relations()
    {
        return [
            'thumb' => PhotoSize::class,
        ];
    }
}
