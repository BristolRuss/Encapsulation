<?php

namespace App\Counter;

class BeanCounter
{
    private $beanCounter;

    public function __construct(Counter $counter)
    {
        $this->beanCounter = $counter;
    }

    public function addBean()
    {
        $this->beanCounter->increment();
        return $this;
    }

    public function howMany()
    {
        return $this->beanCounter->count();
    }
}