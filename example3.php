<?php

/**
 * Send transaction SMS - sender settings
 */

/** @var BulkGate\Sms\ISender $sender */
$sender = require_once __DIR__.'/init.php';

$message = new BulkGate\Sms\Message(
    new BulkGate\Sms\Message\PhoneNumber("777777777", BulkGate\Sms\Country::CZECH_REPUBLIC), "test message"
);

// optional: If number is in national format it will be added prefix +420 / Czech Republic - Default country
$sender->setDefaultCountry(BulkGate\Sms\Country::CZECH_REPUBLIC);

// optional: Unicode activation
$sender->unicode();

// optional: Flash SMS activation
$sender->flash();

// optional: Unicode and flash SMS activation
$sender->unicode()->flash();

// optional: Short code activation
$sender->setSenderSettings(
    new BulkGate\Sms\SenderSettings\StaticSenderSettings(BulkGate\Sms\SenderSettings\Gate::GATE_SHORT_CODE)
);

// optional: Text sender activation - BulkGate (max. 11 characters)
$sender->setSenderSettings(
    new BulkGate\Sms\SenderSettings\StaticSenderSettings(BulkGate\Sms\SenderSettings\Gate::GATE_TEXT_SENDER, 'BulkGate')
);

// Send transaction message
$sender->send($message);

