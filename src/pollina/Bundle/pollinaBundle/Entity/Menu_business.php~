<?php


namespace pollina\Bundle\pollinaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name="Menu_business")
 */
class Menu_business
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $idBus;

    /**
     * @ORM\Column(type="string", length=12)
     * @Assert\MaxLength(limit=12)
     * @Assert\NotBlank()
     */
    protected $tFr;

    /**
     * @ORM\Column(type="string", length=12)
     * @Assert\MaxLength(limit=12)
     * @Assert\NotBlank()
     */
    protected $tEn;

    /**
     * @ORM\Column(type="string", length=12)
     * @Assert\MaxLength(limit=12)
     * @Assert\NotBlank()
     */
    protected $tGe;

    /**
     * Get idBus
     *
     * @return integer 
     */
    public function getIdBus()
    {
        return $this->idBus;
    }

    /**
     * Set tFr
     *
     * @param string $tFr
     * @return Menu_business
     */
    public function setTFr($tFr)
    {
        $this->tFr = $tFr;
    
        return $this;
    }

    /**
     * Get tFr
     *
     * @return string 
     */
    public function getTFr()
    {
        return $this->tFr;
    }

    /**
     * Set tEn
     *
     * @param string $tEn
     * @return Menu_business
     */
    public function setTEn($tEn)
    {
        $this->tEn = $tEn;
    
        return $this;
    }

    /**
     * Get tEn
     *
     * @return string 
     */
    public function getTEn()
    {
        return $this->tEn;
    }

    /**
     * Set tGe
     *
     * @param string $tGe
     * @return Menu_business
     */
    public function setTGe($tGe)
    {
        $this->tGe = $tGe;
    
        return $this;
    }

    /**
     * Get tGe
     *
     * @return string 
     */
    public function getTGe()
    {
        return $this->tGe;
    }
}