<?php

abstract class ProtoToaster
{
    public function roast(): void
    {
        echo 'Готовим тост!<br>';
    }
}

class Toaster extends ProtoToaster
{

}

// $toaster = new ProtoToaster(); // Нельзя создавать объекты абстрактного класса
$toaster = new Toaster();

if ($toaster instanceof ProtoToaster) {
    echo 'Это он!<br>';
    $toast->roast();
}