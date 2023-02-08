<?php

namespace App\Calculate;

// potongan golongan kedua (15%)


class SecondRuleCalculator extends AbstractCalculator
{
    public function maxPkp(): float
    {
        return 250000000;
    }

    public function minPkp(): float
    {
        return 5000000;
    }

    public function taxPercentage(): float

    {
        return 0.15;

    }
}
