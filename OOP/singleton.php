<?php

// $obj1 = new Config();
// $obj2 = new Config();
// $obj1 != $obj2; // Два разных объекта. Каждый со своим набором свойств.

// $obj1 = new Config();
// $obj2 = $obj1;
// $obj1 === $obj2; // Две ссылки на один и тот же объект.

/**
 * Шаблон "Одиночка" для хранение конфига.
 * 
 * @param string $message
 * @param string $hello
 */
class Singleton
{
    private static $instance = null;
    private $params = [];

    private function __construct(){}
    private function __sleep(){}
    private function __wakeup(){}
    private function __clone(){}
    
    public static function instance(): self
    {
        if (self::$instance === null) {
            self::$instance = new Singleton();
        }

        return self::$instance;
    }

    public function __set(string $name, $value): void
    {
        $this->params[$name] = $value;
    }

    public function __get(string $name)
    {
        return isset($this->params[$name]) ? $this->params[$name] : null;
    }
}

// $config = new Singleton(); // Не получится!

$config1 = Singleton::instance();
$config1->message = 'Привет всем!';

$config2 = Singleton::instance();
echo $config2->message;

$config2->hello = ' Это я!';
echo $config1->hello;