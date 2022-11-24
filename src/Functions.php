<?php

namespace TelegramBot\Functions;

use TelegramBot\Config;

use function TelegramBot\Curl\curlSend;

use const TelegramBot\Config\HUMAN_TYPE;
use const TelegramBot\Config\PROFESSIONS;

function writeLogFile($rowData, $clear = false)
{
    if ($rowData === '') {
        return NULL;
    }
    $data = json_decode($rowData, true);
    $log_file_name = __DIR__."/../messages.txt";
    $now = date("Y-m-d H:i:s");
    if($clear == false) {
		file_put_contents($log_file_name, $now."\n".print_r($data, true)."\r\n", FILE_APPEND);
    }
    else {
		file_put_contents($log_file_name, '');
        file_put_contents($log_file_name, $now."\n".print_r($data, true)."\r\n", FILE_APPEND);
    }
}

function sendSticker(string $message, int $chatId): void
{
//    $testLogFile = __DIR__."/test.txt";
//    file_put_contents($testLogFile, $phrase . "\n");
    $query = [
        "chat_id" => $chatId,
        "sticker" => Config\STICKERS_ID[$message],
    ];
    curlSend($query, 'sendSticker');
}

function isPhrase(string $message): bool
{
    return array_key_exists($message, Config\STICKERS_ID);
}

function sendProfession(int $chatId, array $user)
{
    $text = 'Непонятное что-то! Мне кажется ты ';
    $text .= getProfession($user);
    $query = [
        "chat_id" => $chatId,
        "text" => $text
    ];
    curlSend($query, 'sendMessage');
}

function getProfession($user): string
{
    $firstLetterOfFirstName = mb_strtolower(mb_substr($user['first_name'], 0, 1));
    $firstLetterOfLastName = mb_strtolower(mb_substr($user['last_name'], 0, 1));
    if ($firstLetterOfLastName == null) {
        $result = PROFESSIONS[$firstLetterOfFirstName];
    } else {
        $result = HUMAN_TYPE[$firstLetterOfFirstName] . ' ' . PROFESSIONS[$firstLetterOfLastName] . '!';
    }
    return $result;
}

function sendWrong($chatId)
{
    $text = "Жду текст!";
    $query = [
        "chat_id" => $chatId,
        "text" => $text
    ];
    curlSend($query, 'sendMessage');
}

function isCommand($message): bool
{
    return in_array($message, array_keys(Config\COMMANDS));
}

function sendCommand($message, $chatId)
{
    $text = Config\COMMANDS[$message];
    $query = [
        "chat_id" => $chatId,
        "text" => $text
    ];
    curlSend($query, 'sendMessage');
}
