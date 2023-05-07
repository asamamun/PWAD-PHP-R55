<?php
include_once "./WriteLog.php";
class Image{
    public function save(){
        return "save image to file";
    }
    public function savemessage(){
        $this->WriteLog("writing log message from image class");
    }
    use MyLog;
}