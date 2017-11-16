<?php declare(strict_types=1);

namespace VoidInsight\PHPSIP\Structure;

use VoidInsight\PHPSIP\Structure\Tokens\Method;
use VoidInsight\PHPSIP\Structure\RequestURI;
use VoidInsight\PHPSIP\Structure\Tokens\Version;

class RequestLine extends StartLine
{
    private $method;
    private $requestURI;
    private $version;
    
    public function getMethod(): Method
    {
        return $this->method;
    }
    
    public function setMethod(Method $method): RequestLine
    {
        $this->method = $method;
        return $this;
    }
    
    public function getRequestURI(): RequestURI
    {
        return $this->requestURI;
    }
    
    public function setRequestURI(RequestURI $requestURI): RequestLine
    {
        $this->requestURI = $requestURI;
        return $this;
    }
    
    public function getVersion(): Version
    {
        return $this->version;
    }
    
    public function setVersion(Version $version): RequestLine
    {
        $this->version = $version;
        return $this;
    }
}