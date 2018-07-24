<?php
require_once( 'config.php' );

// Register your domain
$client->registerDomain(array(
    "name" => $settings['domain']['name'],
    "description" => $settings['domain']['description'],
    "workflowExecutionRetentionPeriodInDays" => "7"
));

// Register your workflow
$client->registerWorkflowType(array(
    "domain" => $settings['domain']['name'],
    "name" => $settings['workflow']['name'],
    "version" => "1.0",
    "description" => $settings['workflow']['description'],
    "defaultTaskList" => array(
        "name" => "mainTaskList"
    ),
    "defaultChildPolicy" => "TERMINATE"
));

// Register an activity
$client->registerActivityType(array(
    "domain" => $settings['domain']['name'],
    "name" => $settings['activity']['name'],
    "version" => "1.0",
    "description" => $settings['activity']['description'],
    "defaultTaskList" => array(
        "name" => "mainTaskList"
    )
));