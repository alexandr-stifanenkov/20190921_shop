<?php

interface ToasterInterface
{
    public function cook(): void; // Метод не возвращает ничего

    public function getPower(): ?int; // Метод возвращает null или int
}

interface BlackToasterInterface extends ToasterInterface
{
    const COLOR = 'black';

    public function getModel(): string;

    public function getColor(): string;
}

class StrictToaster implements BlackToasterInterface
{
    private $power = 300;
    private $model = 'Rowenta';

    private static $material = 'plastic';
    public const BUTTON_MATERIAL = 'metal';

    public function cook(): void
    {
        echo 'Готовится тост.<br>';
    }

    public function getPower(): ?int
    {
        return $this->power;
    }

    public function getModel(): string
    {
        return $this->model . ' (' . self::$material . ')';
    }

    public function getColor(): string
    {
        return self::COLOR;
    }

    public static function getMaterial(): string
    {
        return self::$material;
    }
}

$toaster = new StrictToaster();
echo $toaster->getPower().'<br>';
$toaster->cook();
echo $toaster->getModel() . '<br>';
echo $toaster->getColor() . '<br>';

echo StrictToaster::getMaterial() . '<br>';
echo StrictToaster::BUTTON_MATERIAL . '<br>';