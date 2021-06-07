<?php

namespace App;

class Arraylist
{
    protected array $list;
    protected int $limit;

    public function __construct($limit)
    {
        $this->list = [];
        $this->limit = $limit;
    }

    function isEmpty(): bool
    {
        return empty($this->list);
    }

    function Add($item)
    {
        if (!$this->isFull()) {
            array_push($this->list, $item);
        } else {
            echo "Danh sach da day cmnr";
        }
    }

    function getAll(): array
    {
        return $this->list;
    }

    function Remove(int $index)
    {
        if (!$this->isEmpty()) {
            unset($this->list, $index);
        } else {
            echo " Danh sach rong";
        }
    }

    function findByIndex(int $index)
    {
        if (!$this->isEmpty()) {
            return $this->list[$index];
        }
        return -1;
    }

    function update(int $index, $item)
    {
        if (!$this->isEmpty()) {
            $this->list[$index] = $item;
        }
        echo "Danh sach da day";
    }

    function size(): int
    {
        return count($this->list);
    }

    function isFull()
    {
        return $this->limit = $this->size();
    }

    function isTeger($tocheck)
    {
        return preg_match("/^[0-9]+$/", $tocheck);
    }
    function get($index)
    {
        if ($this->isTeger($index)&& $index<$this->size()){
            return $this->list[$index];
        }
    }

    public function __toString(): string
    {
        // TODO: Implement __toString() method.
        return "Danh sach: " . implode(',', $this->getAll());
    }

}
