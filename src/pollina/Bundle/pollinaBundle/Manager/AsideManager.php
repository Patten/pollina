<?php

namespace pollina\Bundle\pollinaBundle\Manager;


use Doctrine\ORM\EntityManager;

class AsideManager
{
    protected $em;

    public function __construct(EntityManager $em)
{
        $this->em = $em;
}

    public function getAside($language)
    {
        $repository = $this->em
            ->getRepository('pollinapollinaBundle:Aside');

        $query = $repository->createQueryBuilder('a')
            ->getQuery();

        $myAsideResult = $query->getResult();


        foreach ($myAsideResult as $value)
        {

            if ($language == 'EN')
            {
                $myAside['t1']=$value->getT1En();
                $myAside['t2']=$value->getT2En();
            }
            elseif ($language == 'GE')
            {
                $myAside['t1']=$value->getT1Ge();
                $myAside['t2']=$value->getT2Ge();
            }
            else
            {
                $myAside['t1']=$value->getT1Fr();
                $myAside['t2']=$value->getT2Fr();
            }
        }

        return $myAside;
    }

    public function getAsideAllCountries()
    {
        //$test = $this->em->getRepository()
        $repository = $this->em
            ->getRepository('pollinapollinaBundle:Aside');

        $query = $repository->createQueryBuilder('a')
            ->getQuery();

        $myAsideResult = $query->getResult();


        foreach ($myAsideResult as $value)
        {
            $myAside['t1Fr']=$value->getT1Fr();
            $myAside['t2Fr']=$value->getT2Fr();
            $myAside['t1En']=$value->getT1En();
            $myAside['t2En']=$value->getT2En();
            $myAside['t1Ge']=$value->getT1Ge();
            $myAside['t2Ge']=$value->getT2Ge();
        }

        return $myAside;
    }
}
