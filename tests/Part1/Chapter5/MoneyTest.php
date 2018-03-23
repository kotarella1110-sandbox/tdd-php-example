<?php

namespace TDD\Tests\Part1\Chapter5;

use PHPUnit\Framework\TestCase;
use TDD\Part1\Chapter5\Dollar;
use TDD\Part1\Chapter5\Franc;

class MoneyTest extends TestCase
{
    public function testMultiplecation()
    {
        $five = new Dollar(5);
        $this->assertTrue((new Dollar(10))->equals($five->times(2)));
        $this->assertTrue((new Dollar(15))->equals($five->times(3)));
    }
    public function testEquality()
    {
        $this->assertTrue((new Dollar(5))->equals(new Dollar(5)));
        $this->assertFalse((new Dollar(5))->equals(new Dollar(6)));
    }
    public function testFrancMultiplecation()
    {
        $five = new Franc(5);
        $this->assertTrue((new Franc(10))->equals($five->times(2)));
        $this->assertTrue((new Franc(15))->equals($five->times(3)));
    }
}