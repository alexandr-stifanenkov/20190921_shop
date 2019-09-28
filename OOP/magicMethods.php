<?php

class Magic
{
    public $name = 'Natasha';
    private $age = 18;
    private $height = 160;

    // public function __construct(){}
    // public function __destruct(){}
    // public function __set(){}
    // public function __get(){}

    public function __isset(string $name): bool
    {
        if ($name === 'age') {
            return true;
        } else {
            return false;
        }
    }

    public function __unset(string $name)
    {
        if ($name === 'heigth') {
            $this->height = null;
            return true;
        } else {
            return false;
        }
    }

    public function __clone()
    {
        echo 'Attention! Cloning!!!';
    }
}

$obj = new Magic();
var_dump(isset($obj));
var_dump(isset($obj->age));

unset($obj->height);
unset($obj->age);

// echo $obj->name;

$obj2 = clone $obj;
$obj2->name = 'Irina';

echo $obj->name;
echo $obj2->name;

class Human
{
    public $name = 'Ivan';
    public $age = 25;
    public $height = 180;

    public function __sleep()
    {
        $this->age = 30;
        $this->height = 160;
        return ['age', 'height'];
    }

    public function __wakeup()
    {
        // unset($this->name);
        $this->name = 'Sergey';
    }
}

$ivan = new Human();
$serialized = serialize($ivan);
echo '<br>'.$serialized.'<br>';

$sergey = unserialize($serialized);
$sergey->name = 'Andrey';
print_r($sergey);
echo '<br>';
print_r($ivan);