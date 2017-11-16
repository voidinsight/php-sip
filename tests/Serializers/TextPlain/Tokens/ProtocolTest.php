<?php
namespace VoidInsight\PHPSIP\Tests\Serializers\TextPlain\Tokens;

class ProtocolTest extends TokenTest
{
    protected $sutClass = 'VoidInsight\PHPSIP\Serializers\TextPlain\Tokens\Protocol';
    
    public function serializeProvider()
    {
        return [
            ['SIP', 'sip'],
            ['sip', 'sip']
        ];
    }
}