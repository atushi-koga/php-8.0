<?php

declare(strict_types=1);

namespace Php80;

use DateTimeImmutable;

class TestClass
{
    public function __construct(private ?DatetimeImmutable $prop1, private DateTimeImmutable $prop2)
    {
    }

    public function sayHello(): ?DatetimeImmutable
    {
        return new DatetimeImmutable();
    }

    public function echoDate(): void
    {
        echo $this->sayHello()?->format('Y-m-d');
        echo $this->prop1?->format('Y-m-d');
//        echo $this->prop1->format('Y-m-d');  // Cannot call method format() on DateTimeImmutable|null
        echo $this->prop1?->format('Y-m-d') ?? '';

//        echo $this->prop2?->format('Y-m-d');  // エラー: Using nullsafe method call on non-nullable type DateTimeImmutable
//        echo $this->prop2->format('Y-m-d') ?? '';  // Expression on left side of ?? is not nullable.
    }

    public function prop1(): ?DateTimeImmutable
    {
        return $this->prop1;
    }

    public function prop2(): DateTimeImmutable
    {
        return $this->prop2;
    }
}
