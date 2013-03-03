<?php


namespace pollina\Bundle\pollinaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name="Aside")
 */
class Aside
{

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $idAsi;


    /**
     * @ORM\Column(type="string", length=100)
     * @Assert\MaxLength(limit=100)
     * @Assert\NotBlank()
     */
    protected $t1Fr;

    /**
     * @ORM\Column(type="string", length=100)
     * @Assert\MaxLength(limit=100)
     * @Assert\NotBlank()
     */
    protected $t1En;

    /**
     * @ORM\Column(type="string", length=100)
     * @Assert\MaxLength(limit=100)
     * @Assert\NotBlank()
     */
    protected $t1Ge;

    /**
     * @ORM\Column(type="string", length=140)
     * @Assert\MaxLength(limit=140)
     * @Assert\NotBlank()
     */
    protected $t2Fr;

    /**
     * @ORM\Column(type="string", length=140)
     * @Assert\MaxLength(limit=140)
     * @Assert\NotBlank()
     */
    protected $t2En;

    /**
     * @ORM\Column(type="string", length=140)
     * @Assert\MaxLength(limit=140)
     * @Assert\NotBlank()
     */
    protected $t2Ge;

    /**
     * Get idAsi
     *
     * @return integer 
     */
    public function getIdAsi()
    {
        return $this->idAsi;
    }

    /**
     * Set t1Fr
     *
     * @param string $t1Fr
     * @return Aside
     */
    public function setT1Fr($t1Fr)
    {
        $this->t1Fr = $t1Fr;
    
        return $this;
    }

    /**
     * Get t1Fr
     *
     * @return string 
     */
    public function getT1Fr()
    {
        return $this->t1Fr;
    }

    /**
     * Set t1En
     *
     * @param string $t1En
     * @return Aside
     */
    public function setT1En($t1En)
    {
        $this->t1En = $t1En;
    
        return $this;
    }

    /**
     * Get t1En
     *
     * @return string 
     */
    public function getT1En()
    {
        return $this->t1En;
    }

    /**
     * Set t1Ge
     *
     * @param string $t1Ge
     * @return Aside
     */
    public function setT1Ge($t1Ge)
    {
        $this->t1Ge = $t1Ge;
    
        return $this;
    }

    /**
     * Get t1Ge
     *
     * @return string 
     */
    public function getT1Ge()
    {
        return $this->t1Ge;
    }

    /**
     * Set t2Fr
     *
     * @param string $t2Fr
     * @return Aside
     */
    public function setT2Fr($t2Fr)
    {
        $this->t2Fr = $t2Fr;
    
        return $this;
    }

    /**
     * Get t2Fr
     *
     * @return string 
     */
    public function getT2Fr()
    {
        return $this->t2Fr;
    }

    /**
     * Set t2En
     *
     * @param string $t2En
     * @return Aside
     */
    public function setT2En($t2En)
    {
        $this->t2En = $t2En;
    
        return $this;
    }

    /**
     * Get t2En
     *
     * @return string 
     */
    public function getT2En()
    {
        return $this->t2En;
    }

    /**
     * Set t2Ge
     *
     * @param string $t2Ge
     * @return Aside
     */
    public function setT2Ge($t2Ge)
    {
        $this->t2Ge = $t2Ge;
    
        return $this;
    }

    /**
     * Get t2Ge
     *
     * @return string 
     */
    public function getT2Ge()
    {
        return $this->t2Ge;
    }

}