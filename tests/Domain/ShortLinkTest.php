<?php

namespace Test\Infrastructure\Domain;

use App\Domain\ShortLink;
use Exception;
use PHPUnit\Framework\TestCase;

class ShortLinkTest extends TestCase
{
    public function testMustCreateShortLink(): void
    {
        $shortlink = new ShortLink('google.com');

        $this->assertSame(null, $shortlink->getId());
        $this->assertSame(null, $shortlink->getCode());
        $this->assertSame('google.com', $shortlink->getLink());
    }

    public function testMustAssignId(): void
    {
        $shortlink = new ShortLink('google.com');

        $shortlink->assignId(1);

        $this->assertSame(1, $shortlink->getId());
    }

    public function testMustNotAssignIdTwice(): void
    {
        $shortlink = new ShortLink('google.com');

        $shortlink->assignId(1);

        $this->expectException(Exception::class);
        $this->expectExceptionMessageIsOrContains('Id ja definido.');

        $shortlink->assignId(2);
    }

    public function testMustNotAssignNegativeId(): void
    {
        $shortlink = new ShortLink('google.com');

        $this->expectException(Exception::class);
        $this->expectExceptionMessageIsOrContains('Id inválido.');

        $shortlink->assignId(-1);
    }

    public function testMustAssignZeroAsId(): void
    {
        $shortlink = new ShortLink('google.com');

        $shortlink->assignId(0);

        $this->assertSame(0, $shortlink->getId());
    }

    public function testMustAssignCode(): void
    {
        $shortlink = new ShortLink('google.com');

        $shortlink->assignCode('abc123');

        $this->assertSame('abc123', $shortlink->getCode());
    }

    public function testMustNotAssignCodeTwice(): void
    {
        $shortlink = new ShortLink('google.com');

        $shortlink->assignCode('abc123');

        $this->expectException(Exception::class);
        $this->expectExceptionMessageIsOrContains('codigo ja definido.');

        $shortlink->assignCode('xyz789');
    }
}