<?php
namespace PPH21;

interface CalculatorInterface
{
    public function calculate(float $pkp):float;

    public function maxPkp():float;

    public function minPkp():float;

    public function taxPercentage():float;
}