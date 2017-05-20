<?php
include_once ("mouse.php");
include_once ("store.php");
include_once ("key.php");
class computer{
    public function useUSB($obj){
        $obj->run();//每件事物的处理流程
    }
}
$computer=new computer();
$computer->useUSB(new mouse());
echo "<hr>";
$computer->useUSB(new store());
echo "<hr>";
$computer->useUSB(new key());
echo "<hr>";