<?php
trait MyLog{
    function WriteLog($content){
        $fh = fopen("log","at");
        fwrite($fh,"writing content at ".date("d-m-Y H:i:s a").":".$content."\n");
        fclose($fh);
    }
    function anotherfx(){
        return "i can also be used as common fx";
    }
}

