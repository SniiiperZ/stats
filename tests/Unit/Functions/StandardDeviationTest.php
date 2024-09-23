<?php

use SniiiperZ\Stats\Functions\StandardDeviation;

test("Calcul l'écart type d'une liste", function (){
    $list = [0, 2, 4, 6, 8, 10];

    $result = StandardDeviation::calculate($list);

    expect($result)->toBe(3.415650255319866);
});