<?php

/**
 * Simple send bulk SMS
 */

/** @var BulkGate\Sms\ISender $sender */
$sender = require_once __DIR__.'/init.php';

$message1 = new BulkGate\Sms\Message("420777777777", "test message");

$message2 = new BulkGate\Sms\Message(
    new BulkGate\Sms\Message\PhoneNumber("777777777", BulkGate\Sms\Country::CZECH_REPUBLIC), "test message"
);

// Create a bulk message
$bulk = new BulkGate\Sms\BulkMessage([
    $message1, $message2
]);

// Add message to bulk message
$bulk->addMessage(new BulkGate\Sms\Message("420777777777", "test message"));

// Send bulk message - 3 SMS
$sender->send($bulk);

echo (string) $bulk;

