<?php
include_once "SocketServer.php";
include_once "GameSession.php";
include_once "Coroutine.php";

set_time_limit(0);
$sock = new SocketServer('heroes-of-the-earth-199999.herokuapp.com', 5656, 20);

$sock->listen();

$scheduler = new Scheduler;
$scheduler->newTask($sock->connectClients());


$scheduler->run();

