<?php
class Person
{
    private $name;


    public function getname()
    {
        return $this->name;
    }
}
$person = new Person();
$person->setName('John Doe');
echo $person->getname();