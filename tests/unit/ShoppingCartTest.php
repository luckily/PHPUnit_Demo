<?php

/**
 * Created by PhpStorm.
 * User: itaifeng
 * Date: 2016/10/30
 * Time: 上午 11:50
 */
class ShoppingCartTest extends PHPUnit_Framework_TestCase
{
    public function testInitizationShoppingCartPriceShouldBeEmpty()
    {
        $cart = new \App\Workshop\ShoppingCart();
        $this->assertEquals(0, count($cart->getItems()));
    }

    /**
     * @testdox 買兩本100元的書, 購物車的總金額必須是200元
     */
    public function testAdd_2_SameItemToCartShouldGet_200_Price()
    {
        $item1 = Mockery::mock('\App\Workshop\ShoppingCartItem');
        $item1->shouldNotReceive('getPrice')->andReturn(100);
        $item2 = Mockery::mock('\App\Workshop\ShoppingCartItem');
        $item2->shouldReceive('getPrice')->andReturn(100);

        $cart = new \App\Workshop\ShoppingCart();
        $cart->addItem($item1);
        $cart->addItem($item2);

        $this->assertEquals(200, $cart->getTotalPrice());
    }
}