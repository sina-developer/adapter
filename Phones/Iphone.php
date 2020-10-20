<?php

namespace Phones;

use Interfaces\LightningPhone;

class Iphone implements LightningPhone {
    private bool $connected;
    
    
    function recharge(){
        if($this->connected){
            echo "Recharging!\n";
            echo "Charged\n";
        }else{
            echo "Please Connect Lightning First!\n";
        }
    }

    function useLightning(){
        $this->connected = true;
        echo "Lightning Connected\n";
    }
}