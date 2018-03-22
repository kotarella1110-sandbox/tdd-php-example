<?php

namespace TDD\Tests;

use PHPUnit\Framework\TestCase;
use TDD\Example;

class ExampleTest extends TestCase
{
    public function test()
    {
        new Example();

        $this->assertTrue(true);
    }
}
