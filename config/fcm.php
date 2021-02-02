<?php

return [
    'driver' => env('FCM_PROTOCOL', 'http'),
    'log_enabled' => true,

    'http' => [
        'server_key' => env('FCM_SERVER_KEY', 'AAAA_KbYnkg:APA91bGyOEXA1QaFKrgwrosFc0o6273eHfhSY0KINwlojJ2A0lNGkUGoOBD0N1ekXp1cf2KO6ZmxDH-7khCEIsVOalSfO_kHST8IMuh031DPL9lbmNd9go94IYzXpKmuRlCqlqqhPSQK'),
        'sender_id' => env('FCM_SENDER_ID', '1085130972744'),
        'server_send_url' => 'https://fcm.googleapis.com/fcm/send',
        'server_group_url' => 'https://android.googleapis.com/gcm/notification',
        'timeout' => 30.0, // in second
    ],
];