<?php declare(strict_types=1);

namespace VoidInsight\PHPSIP\Serializers\TextPlain\Tokens;

use VoidInsight\PHPSIP\Serializers\Interfaces\Tokens\TokenInterface;
use VoidInsight\PHPSIP\Structure\Tokens\ReadOnlyTokenInterface;

class Token implements TokenInterface
{
    private $token;
    
    public function setToken(ReadOnlyTokenInterface $token): TokenInterface
    {
        $this->token = $token;
        return $this;
    }
    
    public function getToken(): ReadOnlyTokenInterface
    {
        return $this->token;
    }
    
    public function serialize(): string
    {
        return $this->getToken()->getTokenValue();
    }
}