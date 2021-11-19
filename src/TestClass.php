<?php

declare(strict_types=1);

namespace Php80;

use DateTimeImmutable;

class TestClass
{
    private ?DatetimeImmutable $testProp;

    public function __construct(?DatetimeImmutable $prop)
    {
        $this->testProp = $prop;
    }

    public function sayHello(): ?DatetimeImmutable
    {
        return new DatetimeImmutable();
    }

    public function testMethod(): string
    {
        return '';
    }

    public function echoDate(): void
    {
        echo $this->sayHello()?->format('');

        echo $this->testProp?->format('');
    }
}
