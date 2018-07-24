<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once "./vendor/autoload.php";
require_once "credentials.php";

use Aws\Swf\SwfClient;

$settings = [
    'domain' => [
        'name' => 'Test Domain 2',
        'description' => 'this is a test domain'
    ],
    'workflow' => [
        'name' => 'Test Workflow 1',
        'description' => 'this is a test workflow',
    ],
    'activity' => [
        'name' => 'Test Activity 1',
        'description' => 'this is our test activity'
    ]
];

// Create an instance of the SWF class
$client = SwfClient::factory( [
    "credentials" => [
        "key" => $credentials['key'],
        "secret" => $credentials['secret'],
    ],
    "region" => "eu-west-1",
    "version" => "2012-01-25"
] );
?>