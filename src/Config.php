<?php

namespace TelegramBot\Config;

const TOKEN = "5933872833:AAEqYlP5tVy-3A90cACp1HeI_dR1EJiEdNg";

const TG_API = "https://api.telegram.org/bot";

const COMMANDS = [
    '/start' => 'Вы включили!',
    '/about' => 'я могу послать стикер или вашу профессию',
    '/commands' => 'alah akbar sticker, love sticker, wiggle sticker, another message to see profession',
];

const STICKERS_ID = array(
    'alah akbar' => 'CAACAgIAAx0CYke1DgACAQJjfV843CoDoPGUxoW8OPSlzLFuqAACrBoAAv8diEmNcZeG5UalASsE',
    'kill' => 'CAACAgIAAx0CYke1DgACARpjfWa1hH9rTBq6U1I634zHlLUFXwACvBcAAqlfEEqm3SNfRN-b8isE',
    'love' => 'CAACAgIAAx0CYke1DgACAR5jfWcfRvzTqf-X82YB2BXyIkP5HgACYwADmL-ADdeVwkmDmmqDKwQ',
    'gachi' => 'CAACAgIAAx0CYke1DgACASFjfWeWUt92kFxiPL2ZKQ47FWsqHgAC1xgAAk4lyEtT60CX4JzZaCsE',
    'wiggle' => 'CAACAgQAAx0CYke1DgACASZjfWgmdaRw4ONYPEQSa4MR3u4UOwACOhgAAqbxcR6cYA5lHoA_dCsE'
);
const HUMAN_TYPE = [
    'а' => 'голодный',
    'в' => 'сумасшедший',
    'g' => 'успешный',
];
const PROFESSIONS = [
    'а' => 'журналист',
    'в' => 'кладовщик',
    'и' => 'архитектор',
    'b' => 'программист'
];