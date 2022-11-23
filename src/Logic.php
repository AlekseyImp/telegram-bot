<?php

namespace TelegramBot\Logic;

$autoloadPath1 = __DIR__ . '/../autoload.php';
$autoloadPath2 = __DIR__ . '/../vendor/autoload.php';
if (file_exists($autoloadPath1)) {
    require_once $autoloadPath1;
} else {
    require_once $autoloadPath2;
}

use function TelegramBot\Functions\sendStiker;

function triggerOnPhrase($rowData)
{
    $data = json_decode($rowData, true);
    if ($data['message']['text'] === 'ALAH AKBAR') {
        sendStiker('ALAH AKBAR');
    } elseif ($data['message']['text'] === 'KILL') {
        sendStiker('KILL');
    } elseif ($data['message']['text'] === 'LOVE') {
        sendStiker('LOVE');
    } elseif ($data['message']['text'] === 'GACHI') {
        sendStiker('GACHI');
    } elseif ($data['message']['text'] === 'WIGLE') {
        sendStiker('WIGLE');
    }
}
