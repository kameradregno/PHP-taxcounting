<?php

namespace App\Calculate;

// potongan golongan keempat (30% keatas)


class FourthRuleCalculator extends AbstractCalculator
{
    public function maxPkp(): float
    {
        return 99999999999999999999999999999999999;
    }

    public function minPkp(): float
    {
        return 500000000;
    }

    public function taxPercentage(): float

    {
        return 0.3;

    }
}
