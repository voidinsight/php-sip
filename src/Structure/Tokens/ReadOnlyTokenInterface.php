<?php declare(strict_types=1);

namespace VoidInsight\PHPSIP\Structure\Tokens;


interface ReadOnlyTokenInterface
{
    public function getTokenValue(): string;
}
