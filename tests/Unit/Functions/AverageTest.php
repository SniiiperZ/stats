<?php

use SniiiperZ\Stats\Functions\Average;

test("Calcul la moyenne d'une liste", function () {
    $list = [0, 2, 4, 6, 8, 10];

    $result = Average::calculate($list);

    expect($result)->toBe(5.0);
});

test("N'accepte pas de lettres", function () {
    $list = ["b"];

    $result = Average::calculate($list);

    expect($result)->toBe(0.0);
});

test("Liste vide", function () {
    $list = [];

    Average::calculate($list);
})->throws(DivisionByZeroError::class);

test("Accepte les nombres négatifs", function () {
    $list = [-1, -2, -3, -4, -5];

    $result = Average::calculate($list);

    expect($result)->toBe(-3.0);
});

test("Accepte les nombres décimaux", function () {
    $list = [1.5, 2.5, 3.5, 4.5, 5.5];

    $result = Average::calculate($list);

    expect($result)->toBe(3.5);
});
