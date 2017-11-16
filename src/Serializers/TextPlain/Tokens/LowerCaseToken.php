<?php declare(strict_types=1);

namespace VoidInsight\PHPSIP\Serializers\TextPlain\Tokens;

class LowerCaseToken extends Token
{
    public function serialize(): string
    {
        return trim(strtolower(parent::serialize()));
    }
}