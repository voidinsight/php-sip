<?php
namespace VoidInsight\PHPSIP\Tests\Serializers\TextPlain\Tokens;

use PHPUnit\Framework\TestCase;
use VoidInsight\PHPSIP\Serializers\TextPlain\Tokens\Token;

class TokenTest extends TestCase
{
    protected $sutClass = 'VoidInsight\PHPSIP\Serializers\TextPlain\Tokens\Token';
    
    public function setUp()
    {
        $this->tokenStub = $this->getMockBuilder('VoidInsight\PHPSIP\Structure\Tokens\ReadOnlyTokenInterface')
                            ->setMethods(['getTokenValue'])
                            ->getMock();
        
        $this->sut = new $this->sutClass;
    }
    
    public function testIsInstanziable()
    {
        $this->assertInstanceOf($this->sutClass, $this->sut);
    }
    
    /**
     * @dataProvider serializeProvider
     */
    public function testSerialize($tokenValue, $serializedValue)
    {
        $this->tokenStub->method('getTokenValue')
                            ->will($this->returnValue($tokenValue));
        
        $this->assertSame($this->sut, $this->sut->setToken($this->tokenStub));
        $this->assertSame($serializedValue, $this->sut->serialize());
    }
    
    public function serializeProvider()
    {
        return [
            ['test', 'test']
        ];
    }
}