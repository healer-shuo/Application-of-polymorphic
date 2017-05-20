<?php
include_once ("usbinterface.php");
class key implements USB{
    public function run()
    {
        $this->init();
    }
    public function init(){
        echo "key running......";
    }
}