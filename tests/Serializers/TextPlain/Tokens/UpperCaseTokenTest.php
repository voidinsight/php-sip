<?php
namespace VoidInsight\PHPSIP\Tests\Serializers\TextPlain\Tokens;

class UpperCaseToken extends TokenTest
{
    protected $sutClass = 'VoidInsight\PHPSIP\Serializers\TextPlain\Tokens\UpperCaseToken';
    
    public function serializeProvider()
    {
        return [
            ['test', 'TEST']
        ];
    }
}