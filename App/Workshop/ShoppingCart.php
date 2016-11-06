<?php
/**
 * Created by PhpStorm.
 * User: itaifeng
 * Date: 2016/10/30
 * Time: 上午 11:21
 */

namespace App\Workshop;

use App\Workshop\ShoppingCartItem;

class ShoppingCart
{
    /**
     * @var ShoppingCartItem[]
     */
    private $items = [];

    /**
     * @return ShoppingCartItem[]
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * @param array $items
     */
    public function addItem(ShoppingCartItem $item)
    {
        $this->items[] = $item;
    }

    public function getTotalPrice()
    {
        $total = 0;
        foreach ($this->getItems() as $i => $item) {
            $total += $item->getPrice();
        }

        return $total;
    }

    public function getTest()
    {
        return '1234';
    }
}