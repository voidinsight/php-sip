<?php
namespace VoidInsight\PHPSIP\Tests\Structure;

use PHPUnit\Framework\TestCase;
use VoidInsight\PHPSIP\Structure\RequestURI;

class RequestURITest extends TestCase
{
    public function testIsInstanziable()
    {
        $this->assertInstanceOf('VoidInsight\PHPSIP\Structure\RequestURI', new RequestURI());
    }
}