<?php
namespace SniiiperZ\Stats\Functions;

class StandardDeviation
{
    public static function calculate(array $numbers): float
    {
        $count = count($numbers);

        if ($count === 0) {
            throw new \InvalidArgumentException("La liste ne peut pas être vide");
        }
        $average = Average::calculate($numbers);

        $squareDiffs = array_map(function ($number) use ($average) {
            return ($number - $average) ** 2;
        }, $numbers);

        $variance = array_sum($squareDiffs) / $count;

        return sqrt($variance);
}
}