<?php
class A{
    function do_office(){}
    function cash_from_share(){}
    final function earn(){
        $this->do_office();
        $this->cash_from_share();
        echo "from parent";
    }
}
class B extends A{
    public function do_YT(){}
    // public function earn(){
    //     $this->do_YT();
    //     echo "from child";
    //     parent::earn();
    // }
}
$ob = new B();
$ob->earn();
