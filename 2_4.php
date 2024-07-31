<?php

class User
{
    public $name;
    public $age;

    // Runs when a object is created
    public function __construct($name, $age)
    {
        echo "Class" . __CLASS__ . " instantiated<br>";
        $this->name = $name;
        $this->age = $age;
    }


    public function sayHello()
    {
        return $this->name . " Says hello";
    }

    // Called when no other references to a certain object
    // Used for cleanup, closing connects, etc
    public function __destruct()
    {
        echo "destructor ran...";
    }
}

$user1 = new User("Sjaak", 43);

echo $user1->name . " is " . $user1->age . " years old";
echo "<br>";
echo $user1->sayHello();

echo "<br>";

$user2 = new User("Arie", 66);

echo $user2->name . " is " . $user1->age . " years old";
echo "<br>";
echo $user2->sayHello();