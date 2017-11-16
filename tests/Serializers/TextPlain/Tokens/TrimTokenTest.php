<?php
namespace VoidInsight\PHPSIP\Tests\Serializers\TextPlain\Tokens;

class TrimTokenTest extends TokenTest
{
    protected $sutClass = 'VoidInsight\PHPSIP\Serializers\TextPlain\Tokens\TrimToken';
    
    public function serializeProvider()
    {
        return [
            [' test ', 'test'],
            [' TEST ', 'TEST']
        ];
    }
}