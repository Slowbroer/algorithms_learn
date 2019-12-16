<?php
/**
 * Created by PhpStorm.
 * User: Slowbro
 * Date: 2019-12-16
 * Time: 15:52
 */

require __DIR__.'/../vendor/autoload.php';

$testData = [];
while ($testData < 100){
    $testData[] = rand(1,999999);
}

$sort = new \Sort\QuickSort($testData);
$sort->sort(0,99);
var_dump($sort->getData());

