<?php

namespace TelegramBot\Functions;

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

function sendStiker($phrase)
{
    $testLogFile = __DIR__."/test.txt";
    file_put_contents($testLogFile, $phrase . "\n");
    $token = "5933872833:AAEqYlP5tVy-3A90cACp1HeI_dR1EJiEdNg";
    $chatID = '-1001648866574';
    if ($phrase === "ALAH AKBAR") {
        $sticketID = 'CAACAgIAAx0CYke1DgACAQJjfV843CoDoPGUxoW8OPSlzLFuqAACrBoAAv8diEmNcZeG5UalASsE';
        $getQuery = array(
            "chat_id" => $chatID,
            "sticker" => $sticketID
        );
        $ch = curl_init("https://api.telegram.org/bot". $token ."/sendSticker?" . http_build_query($getQuery));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_HEADER, false);
curl_exec($ch);
curl_close($ch);
    } elseif ($phrase === "KILL") {
        $sticketID = 'CAACAgIAAx0CYke1DgACARpjfWa1hH9rTBq6U1I634zHlLUFXwACvBcAAqlfEEqm3SNfRN-b8isE';
        $getQuery = array(
            "chat_id" => $chatID,
            "sticker" => $sticketID
        );
        $ch = curl_init("https://api.telegram.org/bot". $token ."/sendSticker?" . http_build_query($getQuery));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_HEADER, false);
curl_exec($ch);
curl_close($ch);
    } elseif ($phrase === "LOVE") {
        $sticketID = 'CAACAgIAAx0CYke1DgACAR5jfWcfRvzTqf-X82YB2BXyIkP5HgACYwADmL-ADdeVwkmDmmqDKwQ';
        $getQuery = array(
            "chat_id" => $chatID,
            "sticker" => $sticketID
        );
        $ch = curl_init("https://api.telegram.org/bot". $token ."/sendSticker?" . http_build_query($getQuery));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_HEADER, false);
curl_exec($ch);
curl_close($ch);
    } elseif ($phrase === "GACHI") {
        $sticketID = 'CAACAgIAAx0CYke1DgACASFjfWeWUt92kFxiPL2ZKQ47FWsqHgAC1xgAAk4lyEtT60CX4JzZaCsE';
        $getQuery = array(
            "chat_id" => $chatID,
            "sticker" => $sticketID
        );
        $ch = curl_init("https://api.telegram.org/bot". $token ."/sendSticker?" . http_build_query($getQuery));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_HEADER, false);
curl_exec($ch);
curl_close($ch);
    } elseif ($phrase === "WIGLE") {
        $sticketID = 'CAACAgQAAx0CYke1DgACASZjfWgmdaRw4ONYPEQSa4MR3u4UOwACOhgAAqbxcR6cYA5lHoA_dCsE';
        $getQuery = array(
            "chat_id" => $chatID,
            "sticker" => $sticketID
        );
        $ch = curl_init("https://api.telegram.org/bot". $token ."/sendSticker?" . http_build_query($getQuery));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_HEADER, false);
curl_exec($ch);
curl_close($ch);
    }
}