<?php

namespace Myshop\Myproject\Classes;

class Product
{
    protected $title;
    protected $description;
    protected $price;
    protected $image;

    public function __construct($title, $description, $price, $image)
    {
        $this->title = $title;
        $this->description = $description;
        $this->price = $price;
        $this->image = $image;

    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function getImage()
    {
        return $this->image;
    }

}