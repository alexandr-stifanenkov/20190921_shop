<?php

/**
 * Интерфейс для все плееров
 */
interface PlayerInterface
{
    public function play();
    public function nextChapter();
    public function stop();
}

interface DvdPlayerInterface extends PlayerInterface
{
    public function loadDisk();
    public function ejectDisk();
}

/**
 * Родительский класс для всех плееров.
 */
abstract class Player implements PlayerInterface
{
    public function play()
    {
        echo 'Воспроизведение.<br>';
    }

    public function nextChapter()
    {
        echo 'Поиск следующей сцены.<br>';
    }

    public function stop(){
        echo 'Стоп.<br>';
    }
}

/**
 * Уведомления о промежуточных этапах, связанных с плеерами
 */
trait PlayerNotification
{
    private function diskLoading()
    {
        echo 'Загружается диск…<br>';
    }

    private function diskEjecting()
    {
        echo 'Выброс диска...<br>';
    }
}

/**
 * Класс для DVD-плееров
 */
final class DvdPlayer extends Player implements DvdPlayerInterface
{
    use PlayerNotification;

    public function loadDisk()
    {
        $this->diskLoading();
        echo 'Загружен.<br>';
    }

    public function ejectDisk()
    {
        $this->diskEjecting();
        echo 'Возьмите диск.<br>';
    }
}

$player = new DvdPlayer();
$player->loadDisk();
$player->play();
$player->nextChapter();
$player->stop();
$player->ejectDisk();