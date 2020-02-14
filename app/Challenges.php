<?php

namespace App;

class Challenges
{
    public function start()
    {
        echo "\nChallenges\n";

        $this->counter();
    }

    public function counter()
    {
        echo "\n01)\n";

        $counter = new Counter\Counter();
        $counter->increment();
        $counter->increment();
        $counter->increment();

        dump($counter->count()); // 3
    }
}