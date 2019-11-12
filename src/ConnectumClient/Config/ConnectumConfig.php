<?php

return $config = [

    'CONNECTUM_LOGIN'       => 'login',
    'CONNECTUM_PASSWORD'    => 'password',

    'timeoutForEachRequests' => 20,
    'apiVersion'             => '', // must be empty string
    'url'                    => 'https://api.sandbox.connectum.eu',
    'headers'                => ['Content-Type' => 'application/json', 'Connection' => 'close', 'User-Agent'=>'ConnectumClient'],
    'cert' => [
        'path' => 'C:\Users\01\Desktop\Chage NoteBook\OSPanel_premium\OSPanel\domains\connectum-package\public\private.pem', // required
        'password' => 'setYourPassword' // required
    ],
    'ssl_key' => [
        'C:\Users\01\Desktop\Chage NoteBook\OSPanel_premium\OSPanel\domains\connectum-package\public\private.key',
        'setYourPassword'
    ],
    //schema for payload
    'payloadData'=> [ // keys: payloadData and json are required for script. "data" need for DFSApi
        'json'=> [
            'data'=> [
                [
                    // data
                ],
            ],
        ],
    ],

    // SYSTEM CONFIG
    'modelsPath' => 'C:\Users\01\Desktop\Chage NoteBook\OSPanel_premium\OSPanel\domains\dfs-v3\public',
];
