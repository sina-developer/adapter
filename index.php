<?php

require("./autoload.php");

use Interfaces\MicroUsbPhone;
use Interfaces\LightningPhone;
use Phones\Android;
use Phones\Iphone;
use Adapters\LightningToMicroUsbAdapter;

function rechargeMicroUsb(MicroUsbPhone $charger){
    $charger->useMicroUsb();
    $charger->recharge();
}

function rechargeLightning(LightningPhone $charger){
    $charger->useLightning();
    $charger->recharge();
}


$iphone = new Iphone();
$android = new Android();

rechargeMicroUsb($android);
rechargeLightning($iphone);

$adapter = new LightningToMicroUsbAdapter($iphone);

rechargeMicroUsb($adapter);