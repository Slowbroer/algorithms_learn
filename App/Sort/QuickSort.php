<?php
/**
 * Created by PhpStorm.
 * User: Slowbro
 * Date: 2019-12-16
 * Time: 15:34
 */

namespace Sort;


class QuickSort
{
    protected $data = [];

    public function __construct($data)
    {
        $this->data = array_rand($data);
    }

    public function sort($start,$end){
        if ($start >= $end) return;
        $partitionRes = $this->partition($start,$end);
        $this->sort($start,$partitionRes-1);
        $this->sort($partitionRes+1,$end);
    }

    /**
     * @param $start
     * @param $end
     * @return int
     * */
    public function partition($start,$end){

    }



}