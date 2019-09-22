<?php

class Toaster
{
    public $color = 'black';         // Доступно извне
    protected $model = 'Electrolux'; // Доступно из дочерних классов
    /** @var int */
    private $power = 500;            // Доступно только в этом классе

    /**
     * PHPDoc
     * Возвращает название модели тостера
     * 
     * @todo Добавить метод для времени приготовления
     * @property null|array $arr
     * @return string
     */
    public function getModel(?array $arr): string // Возвращает строку
    {
        return $this->model;
    }

    public function getPower(): ?int // Возвращает null или int
    {
        return $this->power;
    }
}

class WhiteToaster extends Toaster
{
    public $color = 'white';
    private $power = 400;

    public function getPower(): ?int
    {
        return $this->power;
    }
}

$toaster = new Toaster();
echo $toaster->color.'<br>';
echo $toaster->getModel([]).'<br>';
echo $toaster->getPower().'<br>';

$toaster->color = 'red';
echo $toaster->color.'<br>';

$toaster->voltage = 220;
echo $toaster->voltage.'<br>';
echo '<br>';

$whiteToaster = new WhiteToaster();
echo $whiteToaster->color.'<br>';
echo $whiteToaster->getModel([]).'<br>';
echo $whiteToaster->getPower().'<br>';