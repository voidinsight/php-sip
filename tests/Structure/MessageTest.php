<?php
namespace VoidInsight\PHPSIP\Tests\Structure;

use PHPUnit\Framework\TestCase;
use VoidInsight\PHPSIP\Structure\Message;

class MessageTest extends TestCase
{
    public function testIsInstanziable()
    {
        $this->assertInstanceOf('VoidInsight\PHPSIP\Structure\Message', new Message());
    }
    
    public function testHeaderMgmt()
    {
        $headerStub = $this->getMockBuilder('VoidInsight\PHPSIP\Structure\Header')
                                ->setMethods(['getName'])
                                ->getMock();
        $headerStub->method('getName')->will($this->returnValue('testHeaderName'));
        
        $obj = new Message();
        
        $this->assertSame($obj, $obj->addHeader($headerStub));
        $this->assertSame($headerStub, $obj->getHeader($headerStub->getName()));
        $this->assertSame($obj, $obj->delHeader($headerStub->getName()));
    }
}