<?php declare(strict_types=1);

namespace VoidInsight\PHPSIP\Structure\Tokens;

abstract class Token implements Serializable
{
    abstract public function serialize(): string;
    abstract public function unserialize(string $serialized): string;
}
