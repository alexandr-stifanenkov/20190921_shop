<?php

class Test
{
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
        echo $name;
    }
}

$object = new Test('Татьяна');
echo $object->name;