<?php

// Late Static Binding - позднее статическое связывание

class WhiteTable
{
    protected $color = 'white';

    public function getColor()
    {
        return $this->color;
    }

    public static function getClassName()
    {
        return __CLASS__;
    }

    public static function test()
    {
        return static::getClassName(); // Позднее статическое связывание
    }
}

class BlackTable extends WhiteTable
{
    protected $color = 'black';

    public static function getClassName()
    {
        return __CLASS__;
    }

    public static function getParentName()
    {
        return parent::getClassName(); // Обращение к методу родительского класса
    }
}

// $whitetable = new WhiteTable();
// echo $whitetable->getColor() . '<br>';

// $blackTable = new BlackTable();
// echo $blackTable->getColor() . '<br>';

echo WhiteTable::getClassName() . '<br>';

echo BlackTable::getClassName() . '<br>';

echo WhiteTable::test() . '<br>';

echo BlackTable::test() . '<br>'; // Позднее статическое связывание

echo BlackTable::getParentName() . '<br>';