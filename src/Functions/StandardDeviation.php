<?php
namespace SniiiperZ\Stats\Functions;

class StandardDeviation
{
    public static function calculate(array $numbers): float
    {
        $average = Average::calculate($numbers);
        $count = count($numbers);
        $sum = 0;

        foreach ($numbers as $number) {
            $sum += ($number - $average) ** 2;
        }

        return sqrt($sum / $count);
    }
}