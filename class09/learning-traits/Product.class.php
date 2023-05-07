<?php
include_once "./WriteLog.php";
class Product{
    public function hello(){
        return "hi from class Product";
    }
    public function savemessage(){
        $this->WriteLog("writing log message from product class");
    }
    use MyLog;
}