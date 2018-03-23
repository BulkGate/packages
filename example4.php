<?php

/**
 * Send transaction SMS - sender settings
 */

/** @var BulkGate\Sms\ISender $sender */
$sender = require_once __DIR__.'/init.php';

$first_name = "John";
$last_name = "Doe";

$phone_number = new BulkGate\Sms\Message\PhoneNumber("777777777", BulkGate\Sms\Country::CZECH_REPUBLIC);

$text = new BulkGate\Sms\Message\Text("Test message for <first_name> <last_name>", ["first_name" => $first_name, "last_name" => $last_name]);

$message = new BulkGate\Sms\Message($phone_number, $text);

echo (string) $message;

// Send transaction message
$sender->send($message);

