<?php declare(strict_types=1);

namespace VoidInsight\PHPSIP\Structure\Tokens;


interface TokenInterface extends ReadOnlyTokenInterface
{
    public function setTokenValue(string $tokenValue): TokenInterface;
}
