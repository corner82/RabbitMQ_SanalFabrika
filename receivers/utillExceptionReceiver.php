<?php

require_once('exceptionReceiver.php');
 
//use Acme\AmqpWrapper\WorkerReceiver;
 
$worker = new exceptionReceiver();
 
$worker->listen();
