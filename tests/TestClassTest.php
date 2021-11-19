<?php

declare(strict_types=1);

use Php80\TestClass;
use PHPUnit\Framework\TestCase;

class TestClassTest extends TestCase
{
    public function testProp1()
    {
        $now = new DateTimeImmutable();
        $this->assertEquals($now, (new TestClass($now, $now))->prop1());
        $this->assertEquals(null, (new TestClass(null, $now))->prop1());
    }

    public function testProp2()
    {
        $now = new DateTimeImmutable();
        $this->assertEquals($now, (new TestClass($now, $now))->prop2());
    }
}
