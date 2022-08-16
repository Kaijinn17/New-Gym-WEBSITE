<?php



$serverApi = new ServerApi(ServerApi::V1);

$client = new MongoDB\Client(

    'mongodb+srv://whoami:akdemiacetep@cluster0.gzba77m.mongodb.net/users?retryWrites=true&w=majority', [], ['serverApi' => $serverApi]);

$db = $client->test;

?>
