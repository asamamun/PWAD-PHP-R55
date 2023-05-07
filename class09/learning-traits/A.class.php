<?php
include_once "./WriteLog.php";
class A{
    public function hi(){
        return "hi from class A";
    }
    public function write(){
        $this->WriteLog("Writing from class A");
        $this->anotherfx();
    }
use MyLog;
    
}