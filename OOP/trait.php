<?php

trait Jam
{
    public function addJam()
    {
        echo 'Jam added<br>';
    }
}

trait Butter
{
    public function addButter()
    {
        echo 'Butter added<br>';
    }
}

final class Toaster // Этот класс нельзя унаследовать
{
    use Jam,
    Butter {
        Butter::addButter as butterIt;
    }

    private $name;

    /**
     * Конструктор класса, вызывается в момент создания объекта
     *
     * @property string $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;

        echo 'Создан новый тостер "'.$name.'"<br>';
    }

    public function roast()
    {
        echo 'Toast is roasted!<br>';
    }

    /**
     * Геттер
     */
    public function __get(string $varName)
    {
        if ($varName == 'name') {
            return $this->name;
        }
    }

    /**
     * Сеттер
     */
    public function __set(string $varName, $value): void
    {
        if ($varName == 'name') {
            $this->name = $value;
        }
    }

    /**
     * Деструктор, вызывается в конце работы скрипта 
     * или при удалении ссылки на объект отовсюду.
     */
    public function __destruct()
    {
        echo 'Тостер удален.';
    }
}

$toaster = new Toaster('Rowenta');
$toaster->roast();
$toaster->butterIt();

$toaster->name = 'Electrolux';
echo $toaster->name . '<br>';

$toaster->addJam();