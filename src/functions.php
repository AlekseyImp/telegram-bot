<?php

const TOKEN = "5933872833:AAEqYlP5tVy-3A90cACp1HeI_dR1EJiEdNg";
const TG_API = "https://api.telegram.org/bot";

function sendMessage(stdClass $botObjectData): void
{
    $chatId = $botObjectData->message->chat->id;
    $userName = $botObjectData->message->from->first_name;
    $text = $botObjectData->message->text;
    $queryString['chat_id'] = $chatId;
    $queryString['text'] = $userName . " написал: \n" . $text;
    file_get_contents(TG_API . TOKEN . "/sendMessage?" . http_build_query($queryString));
}
