<?php
class costomers{
    public $Sno;
    public $Id;
    public $Fname;
    public $Lname;
    public $Company;
    public $City;
    public $Country;
    public $Phone1;
    public $Phone2;
    public $Email;
    public $Date;
    public $Website;
    public function __construct($date){
        list($this->Sno,$this->Id,$this->Fname,$this->Lname,$this->Company,$this->City,$this->Country,$this->Phone1,$this->Phone2,$this->Email,$this->Date,$this->Website )=$date;
    }
    public function nall(){
        echo "<tr>
        <td>{$this->Sno}</td>
        <td>{$this->Id}</td>
        <td>{$this->Fname}</td>
        <td>{$this->Lname}</td>
        <td>{$this->Company}</td>
        <td>{$this->City}</td>
        <td>{$this->Country}</td>
        <td>{$this->Phone1}</td>
        <td>{$this->Phone2}</td>
        <td>{$this->Email}</td>
        <td>{$this->Date}</td>
        <td>{$this->Website}</td>
        </tr>";


    }
}
?>