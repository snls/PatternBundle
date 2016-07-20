<?php
/**
 * Created by PhpStorm.
 * User: lookyalba
 * Date: 18.07.16
 * Time: 11:30
 */

namespace PatternBundle\Controller\Patterns\Singleton;


final class Product
{
    /**
     * Переменная для помещения экземпляра класса
     *
     * @var
     */
    private static $instance;

    public $a;

    public static function getInstance()
    {
        // проверяется существует ли объект класса в переменной
        // если не существует, то создается экземпляра класса и помещается в переменную instance
        if (!(self::$instance instanceof self)) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    private function __construct()
    {
    }

    private function __clone()
    {
    }

    private function __sleep()
    {
    }

    private function __wakeup()
    {
    }
}

