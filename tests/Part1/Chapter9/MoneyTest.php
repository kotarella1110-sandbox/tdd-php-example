<?php

namespace TDD\Tests\Part1\Chapter9;

use PHPUnit\Framework\TestCase;
use TDD\Part1\Chapter9\Money;

class MoneyTest extends TestCase
{
    public function testMultiplecation()
    {
        $five = Money::dollar(5);
        $this->assertTrue(Money::dollar(10)->equals($five->times(2)));
        $this->assertTrue(Money::dollar(15)->equals($five->times(3)));
    }
    public function testEquality()
    {
        $this->assertTrue(Money::dollar(5)->equals(Money::dollar(5)));
        $this->assertFalse(Money::dollar(5)->equals(Money::dollar(6)));
        $this->assertTrue(Money::franc(5)->equals(Money::franc(5)));
        $this->assertFalse(Money::franc(5)->equals(Money::franc(6)));
        $this->assertFalse(Money::franc(5)->equals(Money::dollar(5)));
    }
    public function testFrancMultiplecation()
    {
        $five = Money::franc(5);
        $this->assertTrue((Money::franc(10))->equals($five->times(2)));
        $this->assertTrue((Money::franc(15))->equals($five->times(3)));
    }
    public function testCurrency()
    {
        $this->assertSame('USD', Money::dollar(1)->currency());
        $this->assertSame('CHF', Money::franc(1)->currency());
    }
}