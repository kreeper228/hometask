<?php

namespace Myshop\Myproject\Classes;

trait Views
{
    protected int $viewCount = 0;

    public function getViewCount(): int
    {
        return $this->viewCount;
    }

    protected function ViewCountUpgrade()
    {
        $this->viewCount++;
    }
}