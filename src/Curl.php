<?php

namespace TelegramBot\Curl;

use TelegramBot\Config;

function curlSend(array $query, string $method): void
{
    $curlConstants = [
        CURLOPT_URL => Config\TG_API . Config\TOKEN . "/$method?" . http_build_query($query),
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_SSL_VERIFYPEER => false,
        CURLOPT_HEADER => false
    ];
    $ch = curl_init();
    curl_setopt_array($ch, $curlConstants);
    curl_exec($ch);
    curl_close($ch);
}
