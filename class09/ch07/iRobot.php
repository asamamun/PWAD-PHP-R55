<?php
interface iRobot{
   function get_head(); 
   function get_body(); 
   function get_brain(); 
}
interface iEngine{
    function mainboard();
}

class Pathfinder implements iRobot,iEngine{
public function get_head(){}
public function get_body(){}
public function get_brain(){}
public function mainboard()
{
    
}
}