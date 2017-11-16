<?php declare(strict_types=1);

namespace VoidInsight\PHPSIP\Structure;

class Header
{
    private $headerName;
    private $headerValue;
    
    public function getName(): string
    {
        return $this->headerName;
    }
    
    public function setName(string $headerName): Header
    {
        $this->headerName = $headerName;
        return $this;
    }
    
    public function getValue(): string
    {
        return $this->headerValue;
    }
    
    public function setValue(string $headerValue): Header
    {
        $this->headerValue = $headerValue;
        return $this;
    }
}