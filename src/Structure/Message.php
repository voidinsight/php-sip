<?php declare(strict_types=1);

namespace VoidInsight\PHPSIP\Structure;

use VoidInsight\PHPSIP\Structure\StartLine;
use VoidInsight\PHPSIP\Structure\Header;
use VoidInsight\PHPSIP\Exceptions\HeaderUnknownException;

class Message
{
    private $startLine;
    
    private $headers;
    
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
    
    public function addHeader(Header $header): Message
    {
        $this->headers[$header->getName()] = $header;
        return $this;
    }
    
    public function getHeader(string $headerName): Header
    {
        try {
            return $this->headers[$headerName];
            
        } catch (OutOfBoundsException $e) {
            throw new HeaderUnknownException("$headerNames", 0, $e);
        }
    }
    
    public function delHeader(string $headerName): Message
    {
        try {
            unset($this->headers[$headerName]);
            return $this;
            
        } catch (OutOfBoundsException $e) {
            throw new HeaderUnknownException("$headerName", 0, $e);
        }
    }
    
    public function __construct() {
        $this->headers = array();
    }
}