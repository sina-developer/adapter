<?php 

namespace Phones;

use Interfaces\MicroUsbPhone;

class Android implements MicroUsbPhone{
    private bool $connected;
    
    
    function recharge(){
        if($this->connected){
            echo "Recharging!\n";
            echo "Charged\n";
        }else{
            echo "Please Connect Cable First!\n";
        }
    }

    function useMicroUsb(){
        $this->connected = true;
        echo "Cable Connected\n";
    }
}