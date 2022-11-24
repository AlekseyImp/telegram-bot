<?php

$autoloadPath1 = __DIR__ . '/autoload.php';
$autoloadPath2 = __DIR__ . '/vendor/autoload.php';
if (file_exists($autoloadPath1)) {
    require_once $autoloadPath1;
} else {
    require_once $autoloadPath2;
}

use TelegramBot\Webhook;

use function TelegramBot\Logic\logic;
use function TelegramBot\Functions\writeLogFile;

$tgAnswer = Webhook\jsonToArray();
if (is_null($tgAnswer)) {
    throw new \Exception("Usage only with webhook. Set webhook");
}
logic($tgAnswer);
