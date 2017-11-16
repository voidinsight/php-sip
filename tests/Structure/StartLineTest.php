<?php
namespace VoidInsight\PHPSIP\Tests\Structure;

use PHPUnit\Framework\TestCase;
use VoidInsight\PHPSIP\Structure\StartLine;

class StartLineTest extends TestCase
{
    public function testIsInstanziable()
    {
        $this->assertInstanceOf('VoidInsight\PHPSIP\Structure\StartLine', new StartLine());
    }
}