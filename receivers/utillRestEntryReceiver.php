<?php

require_once('restEntryReceiver.php');
 
//use Acme\AmqpWrapper\WorkerReceiver;
 
$worker = new restEntryReceiver();
 
$worker->listen();
