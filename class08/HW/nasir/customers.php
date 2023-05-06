<?php
class Customers {
  //property
  public $sl, $id, $fname, $lname, $company, $city, $country, $phone1, $phone2, $email, $date, $website;
//constructor
  public function __construct(array $data) {
    list($this->sl, $this->id, $this->fname, $this->lname, $this->company, $this->city, $this->country, $this->phone1, $this->phone2, $this->email, $this->date, $this->website) = $data;
  }
//method
  public function display() {
    echo "<tr class=\"border-y border-gray-900\">
      <td class=\"w-full border-x border-gray-900 px-4 py-1.5\" >{$this->sl}</td>
      <td class=\"w-full border-x border-gray-900 px-4 py-1.5\" >{$this->id}</td>
      <td class=\"w-full border-x border-gray-900 px-4 py-1.5\" >{$this->fname}</td>
      <td class=\"w-full border-x border-gray-900 px-4 py-1.5\" >{$this->lname}</td>
      <td class=\"w-full border-x border-gray-900 px-4 py-1.5\" >{$this->company}</td>
      <td class=\"w-full border-x border-gray-900 px-4 py-1.5\" >{$this->city}</td>
      <td class=\"w-full border-x border-gray-900 px-4 py-1.5\" >{$this->country}</td>
      <td class=\"w-full border-x border-gray-900 px-4 py-1.5\" >{$this->phone1}</td>
      <td class=\"w-full border-x border-gray-900 px-4 py-1.5\" >{$this->phone2}</td>
      <td class=\"w-full border-x border-gray-900 px-4 py-1.5\" >{$this->email}</td>
      <td class=\"w-full border-x border-gray-900 px-4 py-1.5\" >{$this->date}</td>
      <td class=\"w-full border-x border-gray-900 px-4 py-1.5\" >{$this->website}</td>
    </tr>";
  }
}
?>