<?php
include_once ("usbinterface.php");
class mouse implements USB{
    public function run(){
        $this->init();
    }
    public function init(){
        echo "mouse running......";
    }
}