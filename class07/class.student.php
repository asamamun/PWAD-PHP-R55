<?php
class Student{
    private $name;
    private $info;
    public function __construct($n, $i)
    {
        $this->name = $n;
        $this->info = $i;
    }
    public function show(){
        $h = "<fieldset>";
        $h.= "<legend>{$this->name}</legend>";
        $h .= "<ul>";
        foreach($this->info as $k=>$v){
            $h .= "<li>{$k} = {$v}</li>";
        }        
        $h .= "</ul>";
        $h .= "</fieldset>";
        return $h;
    }
}