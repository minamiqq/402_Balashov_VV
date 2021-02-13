<?php

namespace App\Tests;

use PHPUnit\Framework\TestCase;
use App\Fraction;

class FractionTest extends TestCase
{
    public function testReduction()
    {
        $p = new Fraction(168, 222);
        $this -> assertSame(28, $p -> getNumer());
        $this -> assertSame(37, $p -> getDenom());
    }

    public function testTextRepresentation()
    {
        $p1 = new Fraction(12, 16);
        $p2 = new Fraction(25, 4);
        $this -> assertSame("3/4", $p1 -> __toString());
        $this -> assertSame("6'1/4", $p2 -> __toString());
    }

    public function testAdding()
    {
        $p1 = new Fraction(12, 16);
        $p2 = new Fraction(25, 4);
        $p3 = $p1 -> add($p2);
        $this -> assertEquals("7'0/1", $p3);
    }

    public function testSubtraction()
    {
        $p1 = new Fraction(12, 16);
        $p2 = new Fraction(155, 343);
        $p3 = $p1 -> sub($p2);
        $this -> assertEquals("409/1372", $p3);
        $p4 = new Fraction(25, 4);
        $p5 = $p1 -> sub($p4);
        $this -> assertEquals("-5'1/2", $p5);
    }
}
