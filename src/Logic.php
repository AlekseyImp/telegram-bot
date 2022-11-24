<?php

namespace TelegramBot\Logic;

use TelegramBot\Functions;

use function TelegramBot\Functions\isPhrase;

function logic(array $tgAnswer): void
{
    $message = mb_strtolower($tgAnswer['message']['text']);
    $chatId = $tgAnswer['message']['chat']['id'];
    $user = [
        'first_name' => $tgAnswer['message']['from']['first_name'],
        'last_name' => $tgAnswer['message']['from']['last_name']
    ];
    if (!$message) {
        Functions\sendWrong($chatId);
    } elseif (Functions\isCommand($message)) {
        Functions\sendCommand($message, $chatId);
    } elseif (isPhrase($message)) {
        Functions\sendSticker($message, $chatId);
    } else {
        Functions\sendProfession($chatId, $user);
    }
}
