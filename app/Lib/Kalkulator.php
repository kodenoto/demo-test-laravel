<?php

namespace App\Lib;

class Kalkulator
{
    public function tambah($x, $y)
    {
        return $x + $y;
    }

    public function kali($x, $y)
    {
        return $x * $y;
    }

    public function bagi($x, $y)
    {
        if ($y <= 0) {
            throw new \Exception("nilai argument tidak boleh 0");
        }

        return $x / $y;
    }

    //                         10       2 ===> 100
    public function pangkat($number, $pangkat)
    {
        if ($pangkat <= 0) {
            throw new \Exception("nilai argument tidak boleh 0");
        }

        $numbers = [];

        for ($i = 0; $i < $pangkat; $i++) {
            $numbers[] = $number;
        }

        $value = array_reduce($numbers, function ($prev, $val) {
            return $prev * $val;
        }, 1);

        return $value;
    }
}
