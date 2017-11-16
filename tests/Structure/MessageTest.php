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
}