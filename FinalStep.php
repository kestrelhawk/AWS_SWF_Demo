<?php

require_once('config.php');
// It all needs to be glued together, so to we need to spin the workflow up.

// Generate a random workflow ID
$workflowId = mt_rand(1000, 9999);

// Starts a new instance of our workflow
$client->startWorkflowExecution(array(
    "domain" => $settings['domain']['name'],
    "workflowId" => $workflowId,
    "workflowType" => array(
        "name" => $settings['workflow']['name'],
        "version" => "1.0"
    ),
    "taskList" => array(
        "name" => "mainTaskList"
    ),
    "input" => "a test input message goes here",
    "executionStartToCloseTimeout" => "300",
    'taskStartToCloseTimeout' => "300",
    "childPolicy" => "TERMINATE"
));