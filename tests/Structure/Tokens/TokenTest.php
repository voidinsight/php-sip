<?php
namespace VoidInsight\PHPSIP\Tests\Structure\Tokens;

use PHPUnit\Framework\TestCase;
use VoidInsight\PHPSIP\Structure\Tokens\Token;

class TokenTest extends TestCase
{
    public function testIsInstanziable()
    {
        $this->assertInstanceOf('VoidInsight\PHPSIP\Structure\Tokens\Token', new Token());
    }
    
    public function testGetAndSetTokenValue()
    {
        $obj = new Token();
        
        $this->assertSame($obj, $obj->setTokenValue('TEST_TOKEN'));
        $this->assertSame('TEST_TOKEN', $obj->getTokenValue());
    }
}