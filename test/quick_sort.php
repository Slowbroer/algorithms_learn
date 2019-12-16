<?php
/**
 * Created by PhpStorm.
 * User: Slowbro
 * Date: 2019-12-16
 * Time: 15:52
 */

require __DIR__.'/../vendor/autoload.php';

$testData = [];
while (count($testData) < 10000){
    $testData[] = rand(1,1000000000);
}

$sort = new App\Sort\QuickSort($testData);
var_dump(time());
$sort->sort(0,9999);
var_dump(time());


