<?php

namespace App\EqtedarCommands;

use Telegram\Bot\Actions;
use Telegram\Bot\Commands\Command;

class SalamCommand extends Command
{
    /**
     * @var string Command Name
     */
    protected $name = "salam";

    /**
     * @var string Command Description
     */
    protected $description = "salam Command to response you best hello";

    /**
     * @inheritdoc
     */
    public function handle($arguments)
    {
        // This will send a message using `sendMessage` method behind the scenes to
        // the user/chat id who triggered this command.
        // `replyWith<Message|Photo|Audio|Video|Voice|Document|Sticker|Location|ChatAction>()` all the available methods are dynamically
        // handled when you replace `send<Method>` with `replyWith` and use the same parameters - except chat_id does NOT need to be included in the array.
        $this->replyWithMessage(['text' => 'SaLaM bar to']);

        $this->replyWithPhoto([
            'photo' => resource_path('download.png'),
            'caption' => '@eqtedarmeli'
        ]);

        // This will update the chat status to typing...
        $this->replyWithChatAction(['action' => Actions::TYPING]);

        $this->replyWithMessage(['text' => $this->arguments]);
    }
}