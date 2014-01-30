<?php

namespace Antonino\SimpleEmailerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="emailLog")
 */
class EmailLogEntry 
{
	/**
     * @ORM\Column(type="integer")
     * @ORM\Id
     */
	protected $id;
	
	/**
     * @ORM\Column(type="string", length=100)
     */
	protected $emailAddress;
	
	/**
     * @ORM\Column(type="datetime")
     */
	protected $dateTime;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set emailAddress
     *
     * @param string $emailAddress
     * @return EmailLogEntry
     */
    public function setEmailAddress($emailAddress)
    {
        $this->emailAddress = $emailAddress;
    
        return $this;
    }

    /**
     * Get emailAddress
     *
     * @return string 
     */
    public function getEmailAddress()
    {
        return $this->emailAddress;
    }

    /**
     * Set dateTime
     *
     * @param \DateTime $dateTime
     * @return EmailLogEntry
     */
    public function setDateTime($dateTime)
    {
        $this->dateTime = $dateTime;
    
        return $this;
    }

    /**
     * Get dateTime
     *
     * @return \DateTime 
     */
    public function getDateTime()
    {
        return $this->dateTime;
    }
}
