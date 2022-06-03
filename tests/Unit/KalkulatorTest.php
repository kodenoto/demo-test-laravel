<?php

namespace Tests\Unit;

use App\Lib\Kalkulator;
use PHPUnit\Framework\TestCase;

class KalkulatorTest extends TestCase
{
    public function test_bisa_menjumlahkan_dua_angka()
    {
        $calc = new Kalkulator();

        $value = $calc->tambah(2, 3);
        $expected = 5;
        $this->assertEquals($expected, $value);
    }

    public function test_bisa_perkalian()
    {
        $c = new Kalkulator();

        $val = $c->kali(200, 8);
        $this->assertEquals(1600, $val);
    }

    public function test_bisa_membagi()
    {
        $c = new Kalkulator();

        $val = $c->bagi(10, 5);
        $this->assertEquals(2, $val);
    }

    public function test_invalid_jika_bagi_dengan_0()
    {
        $c = new Kalkulator();

        $this->expectException(\Exception::class);

        $c->bagi(1, 0);
    }

    public function test_bisa_hitung_pangkat()
    {
        $c = new Kalkulator();
        $val = $c->pangkat(2, 2);
        $this->assertEquals(4, $val);

        $val = $c->pangkat(3, 2);
        $this->assertEquals(9, $val);

        $val = $c->pangkat(2, 3);
        $this->assertEquals(8, $val);

        $val = $c->pangkat(4, 3);
        $this->assertEquals(64, $val);

        $val = $c->pangkat(3, 6);
        $this->assertEquals(729, $val);
    }

    public function test_invalid_pangkat_parameter()
    {
        $c = new Kalkulator();

        $this->expectException(\Exception::class);

        $c->pangkat(4, 0);
    }
}
