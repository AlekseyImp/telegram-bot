<?php

$autoloadPath1 = __DIR__ . '/autoload.php';
$autoloadPath2 = __DIR__ . '/vendor/autoload.php';
if (file_exists($autoloadPath1)) {
    require_once $autoloadPath1;
} else {
    require_once $autoloadPath2;
}

const TOKEN = "5933872833:AAEqYlP5tVy-3A90cACp1HeI_dR1EJiEdNg";
const GROUP_ID = -1001648866574;

use function TelegramBot\Functions\writeLogFile;
use function TelegramBot\Logic\triggerOnPhrase;

$rowData = file_get_contents("php://input");
writeLogFile($rowData);
triggerOnPhrase($rowData);