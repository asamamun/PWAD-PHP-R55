<?php
class Greeting
{
    private string $firstName;
    private string $lastName;

    public function __construct(string $firstName, string $lastName)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    public function greet()
    {
        echo "Hello {$this->firstName} {$this->lastName}, how you're doing?" . PHP_EOL;
    }
    //PHP’s __sleep magic method should return an array holding all the object’s properties that should be included in the serialized version of that object. Properties that are not included in that array, will have a default null value in the re-created class instance. PHP will call __sleep method before start serializing the object in order to know which properties should be included in the string representation.
    public function __sleep()
    {
       
        echo "<mark>i am called at serialization</mark>";
        return ['firstName','lastName'];
    }
    //On the other hand, the __wakeup method should contain any initialization code that should be executed once the object has been re-created.
    public function __wakeup()
    {
        echo "<mark>i am called at deserialize time</mark>";
    }
}

$o = new Greeting("Mr. "," Mango");
$o->greet();
file_put_contents('storage.txt', serialize($o));
