<?php

const TOKEN = "5933872833:AAEqYlP5tVy-3A90cACp1HeI_dR1EJiEdNg";
const GROUP_ID = "-1001648866574";

$testMessage = "тестовое сообщение \n test message";
$testMessage = urlencode($testMessage);

$urlQuery = "https://api.telegram.org/bot" . TOKEN . "/sendMessage?chat_id=" . GROUP_ID . "&text=" . $testMessage;

var_dump($urlQuery);
$result = file_get_contents($urlQuery);