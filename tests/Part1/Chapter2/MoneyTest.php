<?php

namespace TDD\Tests\Part1\Chapter2;

use PHPUnit\Framework\TestCase;
use TDD\Part1\Chapter2\Dollar;

class MoneyTest extends TestCase
{
    public function testMultiplecation()
    {
        $five = new Dollar(5);
        $product = $five->times(2);
        $this->assertSame(10, $product->amount);
        $product = $five->times(3);
        $this->assertSame(15, $product->amount);
    }
}