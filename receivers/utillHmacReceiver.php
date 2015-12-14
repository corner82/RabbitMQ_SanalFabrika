<?php

require_once('hmacReceiver.php');
 
//use Acme\AmqpWrapper\WorkerReceiver;
 
$worker = new hmacReceiver();
 
$worker->listen();
