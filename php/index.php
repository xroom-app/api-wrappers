<?php

require './xroom.php';

$api = new Xroom('YOUR_USERNAME', 'YOUR_SECRET');

try
{
    $result = $api->call('room', 'init', array
    (
        'id' => 'your-domain.com/hello-world',
    ));
}
catch (\Exception $e)
{
    $result = "API error: {$e->getMessage()}\n";
}

print_r($result);
