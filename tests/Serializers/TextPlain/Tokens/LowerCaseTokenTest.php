<?php
namespace VoidInsight\PHPSIP\Tests\Serializers\TextPlain\Tokens;

class LowerCaseTokenTest extends TokenTest
{
    protected $sutClass = 'VoidInsight\PHPSIP\Serializers\TextPlain\Tokens\LowerCaseToken';
    
    public function serializeProvider()
    {
        return [
            ['LOWER', 'lower']
        ];
    }
}