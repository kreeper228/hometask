<?php

namespace Myshop\Myproject\Classes;
require_once 'Product.php';
require_once 'Views.php';
class ProductPage extends Product
{
    use Views;

    public function display()
    {
        $this->ViewCountUpgrade();
        echo "<h2>{$this->getTitle()}</h2>";
        echo "<img src='{$this->getImage()}' alt='This is a product' />";
        echo "<p>{$this->getDescription()}</p>";
        echo "<p>Price: {$this->getPrice()} UAH</p>";
        echo "<p>Views: {$this->getViewCount()}</p>";
    }
}