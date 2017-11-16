<?php declare(strict_types=1);

namespace VoidInsight\PHPSIP\Structure\Tokens;

class Protocol extends Token
{
    
    public function setProtocol(string $protocol): Protocol
    {
        return $this->setTokenValue($protocol);
    }
    
    public function getProtocol(): string
    {
        return $this->getTokenValue();
    }
}