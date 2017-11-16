<?php
namespace VoidInsight\PHPSIP\Tests\Structure\Tokens;

use PHPUnit\Framework\TestCase;
use VoidInsight\PHPSIP\Structure\Tokens\Method;

class MethodTest extends TestCase
{
    public function testIsInstanziable()
    {
        $this->assertInstanceOf('VoidInsight\PHPSIP\Structure\Tokens\Method', new Method());
    }
}