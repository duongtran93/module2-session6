<?php


class MyList
{
    public $size = 0;
    static $DEFAULT_CAPACITY = 10;
    public $arrayList;

    public function MyList()
    {
        $this->arrayList = array();
    }

    public function MyListCapacity($capacity)
    {
        $this->arrayList = array($capacity);
    }

    public function add($index, $obj)
    {
        array_splice($this->arrayList, $index, 0, $obj);
    }

    public function remove($index)
    {
        array_splice($this->arrayList, $index, 1);
    }

    public function size()
    {
        return count($this->arrayList);
    }

    public function cloneArr()
    {
        $arr1 = new MyList();
        $arr2 = clone $arr1;
        return $arr2;
    }

    public function contains($val)
    {
        if (in_array($val, $this->arrayList)) {
            return "true";
        } else {
            return "false";
        }
    }

    public function indexOf($val)
    {
        if (in_array($val, $this->arrayList)) {
            return array_search($val, $this->arrayList);
        } else {
            return -1;
        }
    }

    public function addLastArr($val)
    {
        array_push($this->arrayList, $val);
    }

    public function ensureCapacity($minCapacity)
    {
        $this->MyListCapacity($minCapacity);
    }

    public function get($index)
    {
        return $this->arrayList[$index];
    }

    public function clear()
    {
        return $this->arrayList = array();
    }

}