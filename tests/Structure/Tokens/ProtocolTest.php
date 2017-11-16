<?php
namespace VoidInsight\PHPSIP\Tests\Structure\Tokens;

use PHPUnit\Framework\TestCase;
use VoidInsight\PHPSIP\Structure\Tokens\Protocol;

class ProtocolTest extends TestCase
{
    public function testIsInstanziable()
    {
        $this->assertInstanceOf('VoidInsight\PHPSIP\Structure\Tokens\Protocol', new Protocol());
    }
}