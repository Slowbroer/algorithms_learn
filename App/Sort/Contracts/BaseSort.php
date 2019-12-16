<?php
/**
 * Created by PhpStorm.
 * User: Slowbro
 * Date: 2019-12-16
 * Time: 15:42
 */

namespace Sort\Contracts;


abstract class BaseSort
{
    protected $data = [];

    public function less($left,$right){
        return $left < $right;
    }

    public function exchange($left,$right){
        $t = $this->data[$left];
        $this->data[$left] = $this->data[$right];
        $this->data[$right] = $t;
    }
}