<?php
namespace VoidInsight\PHPSIP\Tests\Structure;

use PHPUnit\Framework\TestCase;
use VoidInsight\PHPSIP\Structure\RequestLine;

class RequestLineTest extends TestCase
{
    public function testIsInstanziable()
    {
        $this->assertInstanceOf('VoidInsight\PHPSIP\Structure\RequestLine', new RequestLine());
    }
}