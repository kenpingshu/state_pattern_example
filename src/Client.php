<?php
namespace Kenpingshu\StatePatternExample;
require_once '../vendor/autoload.php';

$conversation = new Conversation();

$conversation->read();

$conversation->receive();
