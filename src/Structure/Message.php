<?php declare(strict_types=1);

namespace VoidInsight\PHPSIP\Structure;

use VoidInsight\PHPSIP\Structure\StartLine;

class Message
{
    private $startLine;
    /**
     * TODO
     * Add Headers
     */
     private $body;
    
    public function getStartLine(): StartLine
    {
        return $this->startLine;
    }
    
    public function setStartLine(StartLine $startLine): Message
    {
        $this->startLine = $startLine;
        return $this;
    }
    
    public function getBody(): string
    {
        return $this->body;
    }
    
    public function setBody(string $body): Message
    {
        $this->body = $body;
        return $this;
    }
}