<?php declare(strict_types=1);

namespace VoidInsight\PHPSIP\Serializers\Interfaces\Tokens;

use VoidInsight\PHPSIP\Structure\Tokens\ReadOnlyTokenInterface;

interface TokenInterface
{
    public function setToken(ReadOnlyTokenInterface $token): TokenInterface;
    
    public function getToken(): ReadOnlyTokenInterface;
    
    public function serialize(): string;
}