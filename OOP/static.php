<?php

class Test
{
    // Доступны извне напрямую без создания объекта
    public const PARAM2 = 2;
    public static $param1 = 1;

    // Доступно только после создания объекта
    public $param3 = 3;
    public $param4 = 4;

    // Метод доступен без создания объекта
    public static function getStaticParam1()
    {
        return self::$param1;
    }

    public function getParam1()
    {
        return self::$param1;
    }

    public function getParam2()
    {
        return self::PARAM2;
    }

    public function getParam3()
    {
        return $this->param3;
    }
}
$param4 = 'param3';

$test = new Test();
echo $test->getParam1();
echo $test->getParam2();
echo $test->getParam3();
echo $test->param3;

// Разыменовывание переменной
echo $test->$param4; // = $test->param3

echo Test::PARAM2;
echo Test::$param1;
// echo Test::$param3; // Так не работае! Свойство не статическое.
echo Test::getStaticParam1();


// $item = Item::getInstance();

// $item = new Item();
// $item->setColor(Item::COLOR_BLUE);
// $newItem = $item->save();