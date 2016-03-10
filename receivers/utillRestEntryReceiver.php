<?php
require_once '..\vendor\autoload.php';
//require_once('restEntryReceiver.php');
//require_once('..\vendor\utill\receivers\RestEntryReceiver.php');
 
//use Acme\AmqpWrapper\WorkerReceiver;

use Utill\Receivers\RestEntryReceiver as Receiver;

$serviceManagerUtillConfigObject = new \Utill\Service\Manager\config();
$serviceManagerConfig = new \Zend\ServiceManager\Config(
        $serviceManagerUtillConfigObject->getConfig());
        $serviceManager = new \Zend\ServiceManager\ServiceManager($serviceManagerConfig);
$dalManagerConfigObject = new \DAL\DalManagerConfig();
        $managerConfig = new \Zend\ServiceManager\Config($dalManagerConfigObject->getConfig());
        $dalManager = new \DAL\DalManager($managerConfig);
        $dalManager->setService('sManager', $serviceManager);
        

$BLLManagerConfigObject = new \BLL\BLLManagerConfig;
        $managerConfig = new \Zend\ServiceManager\Config($BLLManagerConfigObject->getConfig());
        $bllManager = new \BLL\BLLManager($managerConfig);
        $bllManager->setDalManager($dalManager);
        

 
$worker = new Receiver();   

$worker->setServiceLocator($serviceManager);
$worker->setBLLManager($bllManager);
$worker->setDalManager($dalManager);

$worker->setQueueName('restEntry_queue');
$worker->setCallback('process');
 
$worker->listen();
