<?php

require_once __DIR__.'/config.php';

// bulkgate/utils
require_once __DIR__.'/vendor/bulkgate/utils/src/Utils/exceptions.php';
require_once __DIR__.'/vendor/bulkgate/utils/src/Utils/Strict.php';
require_once __DIR__.'/vendor/bulkgate/utils/src/Utils/Compress.php';
require_once __DIR__.'/vendor/bulkgate/utils/src/Utils/Iterator.php';
require_once __DIR__.'/vendor/bulkgate/utils/src/Utils/Json.php';
require_once __DIR__.'/vendor/bulkgate/utils/src/Utils/Locale.php';


// bulkgate/message
require_once __DIR__.'/vendor/bulkgate/message/src/Message/exceptions.php';
require_once __DIR__.'/vendor/bulkgate/message/src/Message/IConnection.php';
require_once __DIR__.'/vendor/bulkgate/message/src/Message/Connection.php';
require_once __DIR__.'/vendor/bulkgate/message/src/Message/HttpHeaders.php';
require_once __DIR__.'/vendor/bulkgate/message/src/Message/Request.php';
require_once __DIR__.'/vendor/bulkgate/message/src/Message/Response.php';


// bulkgate/sms
require_once __DIR__.'/vendor/bulkgate/sms/src/Sms/exceptions.php';
require_once __DIR__.'/vendor/bulkgate/sms/src/Sms/IMessage.php';
require_once __DIR__.'/vendor/bulkgate/sms/src/Sms/ISender.php';
require_once __DIR__.'/vendor/bulkgate/sms/src/Sms/Country.php';
require_once __DIR__.'/vendor/bulkgate/sms/src/Sms/Message.php';
require_once __DIR__.'/vendor/bulkgate/sms/src/Sms/Sender.php';
require_once __DIR__.'/vendor/bulkgate/sms/src/Sms/BulkMessage.php';

require_once __DIR__.'/vendor/bulkgate/sms/src/Sms/Message/exceptions.php';
require_once __DIR__.'/vendor/bulkgate/sms/src/Sms/Message/PhoneNumber.php';
require_once __DIR__.'/vendor/bulkgate/sms/src/Sms/Message/Text.php';

require_once __DIR__.'/vendor/bulkgate/sms/src/Sms/SenderSettings/exceptions.php';
require_once __DIR__.'/vendor/bulkgate/sms/src/Sms/SenderSettings/ISenderSettings.php';
require_once __DIR__.'/vendor/bulkgate/sms/src/Sms/SenderSettings/Gate.php';
require_once __DIR__.'/vendor/bulkgate/sms/src/Sms/SenderSettings/CountrySenderSettings.php';
require_once __DIR__.'/vendor/bulkgate/sms/src/Sms/SenderSettings/CountrySenderID.php';
require_once __DIR__.'/vendor/bulkgate/sms/src/Sms/SenderSettings/StaticSenderSettings.php';


return new BulkGate\Sms\Sender(
    new BulkGate\Message\Connection((int) BULKGATE_APPLICATION_ID, BULKGATE_APPLICATION_TOKEN)
);
