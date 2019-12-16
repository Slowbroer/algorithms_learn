<?php
/**
 * Created by PhpStorm.
 * User: Slowbro
 * Date: 2019-12-16
 * Time: 15:34
 */

namespace Sort;


use Sort\Contracts\BaseSort;

class QuickSort extends BaseSort
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
        $i = $start;
        $j = $end + 1;
        $v = $this->data[$start]; //

        while(true){
            while ($this->less($this->data[++$i],$v)) if ($i == $end) break;
            while ($this->less($v,$this->data[--$j])) if ($j == $start) break;
            if ($i >= $j) break;
            $this->exchange($i,$j);
        }
        $this->exchange($start,$j);
        return $j;
    }

}