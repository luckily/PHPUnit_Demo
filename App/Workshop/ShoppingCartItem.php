<?php
/**
 * Created by PhpStorm.
 * User: itaifeng
 * Date: 2016/10/30
 * Time: 上午 11:23
 */

namespace App\Workshop;


class ShoppingCartItem
{
    private $name;
    private $price;

    public function __construct($name, $price)
    {
        $this->name = $name;
        $this->price = $price;
    }

    /**
     * @return int
     */
    public function getPrice()
    {
        return $this->price;
    }

    public function getName()
    {
        return $this->name;
    }
}