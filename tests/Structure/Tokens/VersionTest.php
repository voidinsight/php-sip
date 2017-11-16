<?php
namespace VoidInsight\PHPSIP\Tests\Structure\Tokens;

use PHPUnit\Framework\TestCase;
use VoidInsight\PHPSIP\Structure\Tokens\Version;

class VersionTest extends TestCase
{
    public function testIsInstanziable()
    {
        $this->assertInstanceOf('VoidInsight\PHPSIP\Structure\Tokens\Version', new Version());
    }
    
    public function testGetAndSetNumbers()
    {
        $obj = new Version();
        
        $this->assertSame('0.0', $obj->getTokenValue());
        $this->assertSame($obj, $obj->setMajorNumber(2));
        $this->assertSame('2.0', $obj->getTokenValue());
        $this->assertSame($obj, $obj->setMinorNumber(2));
        $this->assertSame('2.2', $obj->getTokenValue());
    }
}