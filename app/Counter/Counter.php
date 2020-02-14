<?php

namespace App\Counter;

class Counter
{
    private $counter = 0;

    public function increment(): void
    {
        $this->counter += 1;
    }

    public function count(): int
    {
        return $this->counter;
    }
}