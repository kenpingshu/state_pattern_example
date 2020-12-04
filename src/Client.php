<?php
namespace Kenpingshu\StatePatternExample;
require_once '../vendor/autoload.php';

$conversation = new Conversation(new UnSeen());

echo $conversation->getState().PHP_EOL;

$conversation->receive();

echo $conversation->getState().PHP_EOL;

$conversation->read();

echo $conversation->getState().PHP_EOL;

$conversation->reply();

echo $conversation->getState().PHP_EOL;

$conversation->reply();

echo $conversation->getState().PHP_EOL;
