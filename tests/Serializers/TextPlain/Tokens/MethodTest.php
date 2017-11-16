<?php
namespace VoidInsight\PHPSIP\Tests\Serializers\TextPlain\Tokens;

class MethodTest extends TokenTest
{
    protected $sutClass = 'VoidInsight\PHPSIP\Serializers\TextPlain\Tokens\Method';
    
    public function serializeProvider()
    {
        return [
            ['test', 'TEST']
        ];
    }
}