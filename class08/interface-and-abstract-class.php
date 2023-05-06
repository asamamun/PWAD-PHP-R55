<?php
abstract class BAFUFE
{
 abstract function hire();
 abstract function fire();
 abstract function promote();
 abstract function demote();
}
class Abahoni extends BAFUFE{
    public function hire(){}
    public function fire(){}
    public function promote(){}
    public function demote(){}
}
class Mohamedan extends BAFUFE{
    public function hire(){}
    public function fire(){}
    public function promote(){}
    public function demote(){}
}

$e = new Employee();