<?php

require_once 'src/functions.php';

$data = json_decode(file_get_contents('php://input'));
sendMessage($data);
