<?php declare(strict_types=1);

namespace VoidInsight\PHPSIP\Serializers\TextPlain\Tokens;

class UpperCaseToken extends Token
{
    public function serialize(): string
    {
        return trim(strtoupper(parent::serialize()));
    }
}