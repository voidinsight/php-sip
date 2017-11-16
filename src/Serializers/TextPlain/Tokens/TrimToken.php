<?php declare(strict_types=1);

namespace VoidInsight\PHPSIP\Serializers\TextPlain\Tokens;

class TrimToken extends Token
{
    public function serialize(): string
    {
        return trim(parent::serialize());
    }
}