<?php
require_once('config.php');
// Create activity workers. And spin them up

// Check with SWF for activities
$result = $client->pollForActivityTask(array(
    "domain" => $settings['domain']['name'],
    "taskList" => array(
        "name" => "mainTaskList"
    )
));

// Take out task token from the response above
$task_token = $result["taskToken"];

// Do things on the computer that this script is saved on
exec("echo 'this is a test execution!'");

// Tell SWF that we finished what we need to do on this node
$client->respondActivityTaskCompleted(array(
    "taskToken" => $task_token,
    "result" => "I've finished!"
));