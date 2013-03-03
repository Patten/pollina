<?php

namespace pollina\Bundle\pollinaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name="Newsletter")
 */
class Newsletter
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $idMail;

    /**
     * @ORM\Column(type="string")
     * @Assert\NotBlank()
     */
    protected $mail;

    /**
     * Get idMail
     *
     * @return integer 
     */
    public function getIdMail()
    {
        return $this->idMail;
    }

    /**
     * Set mail
     *
     * @param \mail $mail
     * @return Newsletter
     */
    public function setMail(\mail $mail)
    {
        $this->mail = $mail;
    
        return $this;
    }

    /**
     * Get mail
     *
     * @return \mail 
     */
    public function getMail()
    {
        return $this->mail;
    }
}