<?php declare(strict_types=1);

namespace VoidInsight\PHPSIP\Structure\Tokens;


class Token implements TokenInterface
{
    private $tokenValue;
    
    public function setTokenValue(string $tokenValue): TokenInterface
    {
        $this->tokenValue = $tokenValue;
        return $this;
    }
    
    public function getTokenValue(): string
    {
        return $this->tokenValue;
    }
}
