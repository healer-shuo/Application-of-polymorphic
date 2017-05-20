<?php
include_once ("usbinterface.php");
class store implements USB{
    public function run()
    {
        $this->init();
    }
    public function init(){
        echo "store running......";
    }
}