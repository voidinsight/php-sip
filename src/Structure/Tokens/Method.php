<?php declare(strict_types=1);

namespace VoidInsight\PHPSIP\Structure\Tokens;

class Method extends Token
{
    
    public function setMethodName(string $methodName): Method
    {
        return $this->setTokenValue($methodName);
    }
    
    public function getMethodName(): string
    {
        return $this->getTokenValue();
    }
}