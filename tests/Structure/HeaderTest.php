<?php
namespace VoidInsight\PHPSIP\Tests\Structure;

use PHPUnit\Framework\TestCase;
use VoidInsight\PHPSIP\Structure\Header;

class HeaderTest extends TestCase
{
    public function testIsInstanziable()
    {
        $this->assertInstanceOf('VoidInsight\PHPSIP\Structure\Header', new Header());
    }
}