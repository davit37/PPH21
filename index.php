<?php

require __DIR__.'/vendor/autoload.php';


use PPH21\FirstRuleCalculator;
use PPH21\SecondRuleCalculator;
use PPH21\ThirdRuleCalculator;
use PPH21\FourthRuleCalculator;
use PPH21\PPH21Calculator;

$first = new FirstRuleCalculator();
$second = new SecondRuleCalculator($first);
$third = new ThirdRuleCalculator($second);
$fourth = new FourthRuleCalculator($third);

$calculator = new PPH21Calculator($first, $second, $third, $fourth);

//1250000
echo $calculator->calculate(25000000);
echo PHP_EOL;
//1500000
echo $calculator->calculate(30000000);
echo PHP_EOL;
//2250000
echo $calculator->calculate(45000000);
echo PHP_EOL;
//2500000
echo $calculator->calculate(50000000);
echo PHP_EOL;
//4000000
echo $calculator->calculate(60000000);
echo PHP_EOL;
//6250000
echo $calculator->calculate(75000000);
echo PHP_EOL;
//32500000
echo $calculator->calculate(250000000);
echo PHP_EOL;
//45000000
echo $calculator->calculate(300000000);
echo PHP_EOL;


