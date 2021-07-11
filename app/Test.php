<?php

namespace App;

use App\Models\Person;

class Test
{
    public function __invoke()
    {
        $people = Person::all();
        foreach ($people as $person) {
            echo $person . "\n";
        }
    }
}
