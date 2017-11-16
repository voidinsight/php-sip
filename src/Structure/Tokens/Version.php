<?php declare(strict_types=1);

namespace VoidInsight\PHPSIP\Structure\Tokens;

class Version implements ReadOnlyTokenInterface
{
    private $majorNumber;
    private $minorNumber;
    
    /**
     * Setters/Getters
     */
    public function setMajorNumber(int $majorNumber): Version
    {
        $this->majorNumber = $majorNumber;
        return $this;
    }
    
    public function getMajorNumber(): int
    {
        return $this->majorNumber;
    }
    
    public function setMinorNumber(int $minorNumber): Version
    {
        $this->minorNumber = $minorNumber;
        return $this;
    }
    
    public function getMinorNumber(): int
    {
        return $this->minorNumber;
    }
    
    public function getTokenValue(): string
    {
        return $this->getMajorNumber()
                . '.'
                . $this->getMinorNumber();
    }
    
    public function __construct()
    {
        $this->setMajorNumber(0)
             ->setMinorNumber(0);
    }
}