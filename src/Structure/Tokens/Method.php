<?php declare(strict_types=1);

namespace VoidInsight\PHPSIP\Structure\Tokens;

class Method extends Token
{
    private $methodName;
    
    public function setMethodName(string $methodName): Method
    {
        $this->methodName = $methodName;
        return $this;
    }
    
    public function getMethodName(): string
    {
        return $this->methodName;
    }
}