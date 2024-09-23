<?php

use SniiiperZ\Stats\Functions\Average;

test("Calcul la moyenne d'une liste", function () {
    $list = [0, 2, 4, 6, 8, 10];

    $result = Average::calculate($list);

    expect($result)->toBe(5.0);
});

test("N'accepte pas de lettres", function () {
    $list = ["a"];

    $result = Average::calculate($list);

    expect($result)->toBe(0.0);
});

test("Liste vide", function () {
    $list = [];

    Average::calculate($list);
})->throws(DivisionByZeroError::class);