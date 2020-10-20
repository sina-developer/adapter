<?php

namespace Adapters;

use Interfaces\MicroUsbPhone;
use Interfaces\LightningPhone;

class LightningToMicroUsbAdapter implements MicroUsbPhone{
    
    private LightningPhone $lightningPhone;

    public function __construct(LightningPhone $lightningPhone){
        $this->lightningPhone = $lightningPhone;
    }
    
    function recharge(){
        $this->lightningPhone->recharge();
    }
    
    function useMicroUsb(){
        echo "MicroUsb Connected\n";
        $this->lightningPhone->useLightning();
    }
}