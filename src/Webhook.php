<?php

namespace TelegramBot\Webhook;

function jsonToArray(): ?array
{
    return json_decode(file_get_contents('php://input'), true);
}