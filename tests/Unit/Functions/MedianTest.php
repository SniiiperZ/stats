<?php

use SniiiperZ\Stats\Functions\Median;

test("Calcul le median d'une liste", function (){
    $list = [0, 2, 4, 6, 8, 10];

    $result = Median::calculate($list);

    expect($result)->toBe(5.0);
});