<?php

/**
 * Simple send transaction SMS
 */

/** @var BulkGate\Sms\ISender $sender */
$sender = require_once __DIR__.'/init.php';

// Send transaction message
$sender->send(new BulkGate\Sms\Message("420777777777", "test message"));

