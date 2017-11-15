<?php declare(strict_types=1);

namespace VoidInsight\PHPSIP\Structure\Tokens;

class Version extends Token
{
    private $majorNumber;
    private $minorNumber;
    
    /**
     * Setters/Getters
     */
    public function setMajorNumber (int $majorNumber): Version
    {
        $this->majorNumber = $majorNumber;
        return $this;
    }
    
    public function getMajorNumber (); int
    {
        return $this->majorNumber
    }
    
    public function setMinorNumber (int $minorNumber): Version
    {
        $this->minorNumber = $minorNumber;
        return $this;
    }
    
    public function getMinorNumber (): int
    {
        return $this->minorNumber;
    }
    
    /**
     * Magic methods
     */
    public function __construct (int $majorNumber, int $minorNumber)
    {
        $this->setMajorNumber($majorNumber)
             ->minorNumber($minorNumber);
    }
    
    /**
     * Interfaces
     */
     
     /**
      * Serializable
      */
      
      public function serialize (): string
      {
          return 'SIP/'
                . (string) $this->getMajorNumber()
                . '.'
                . (string) $this->getMinorNumber();
      }
      
      public unserialize (string $serialized): null
      {
          return null;
      }
}