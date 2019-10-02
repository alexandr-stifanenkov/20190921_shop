<?php

// namespace \App\Models;

// use \App\Models\Table;
// use \App\Models\WhiteTable;
// use \App\Models\BlackTable;
// use \App\Models\BlackGlossTable;

class Table
{

}

// namespace \App\Models\Table;

class WhiteTable extends Table 
{

}

class BlackTable extends Table 
{

}

class BlackGlossTable extends BlackTable
{
    public static function getClassName()
    {
        return __CLASS__;
    }

    public static function getMethodName()
    {
        return __METHOD__;
    }
}

echo BlackGlossTable::getClassName() . '<br>';
echo get_parent_class('BlackGlossTable') . '<br>';
echo '<pre>';
print_r(class_parents('BlackGlossTable'));
echo '</pre>';

$whiteTable = new WhiteTable();
echo get_class($whiteTable) . '<br>';

var_dump($whiteTable instanceof Table);
echo '<br>';

echo BlackGlossTable::getMethodName() . '<br>';

// __TRAIT__ - название трейта
// __LINE__ - номер текущей строки
// __DIR__ - название папки, в которой расположен текущий файл
// __NAMESPACE__ - текущий неймспейс (пространство имен)