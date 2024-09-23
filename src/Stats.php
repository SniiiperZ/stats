<?php
namespace SniiiperZ\Stats;

use SniiiperZ\Stats\Functions\Average;

class Stats {
    public function average($liste):float
    {
        return Average::calculate($liste);
    }
}