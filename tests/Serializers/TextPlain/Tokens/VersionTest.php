<?php
namespace VoidInsight\PHPSIP\Tests\Serializers\TextPlain\Tokens;

class VersionTest extends TokenTest
{
    protected $sutClass = 'VoidInsight\PHPSIP\Serializers\TextPlain\Tokens\Version';
    
    public function serializeProvider()
    {
        return [
            [' 2.0', '2.0']
        ];
    }
}