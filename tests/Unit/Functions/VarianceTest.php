<?php

use SniiiperZ\Stats\Functions\Variance;

test("Calcul la variance d'une liste", function (){
    $list = [0, 2, 4, 6, 8, 10];

    $result = Variance::calculate($list);

    expect($result)->toBe(11.666666666666666);
});