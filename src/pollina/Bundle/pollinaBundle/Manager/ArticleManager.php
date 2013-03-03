<?php

namespace pollina\Bundle\pollinaBundle\Manager;


use Doctrine\ORM\EntityManager;

class ArticleManager
{
    protected $em;

    public function __construct(EntityManager $em)
    {
        $this->em = $em;
    }

    public function getArticlesFr()
    {
        $repository = $this->em
            ->getRepository('pollinapollinaBundle:Aside');

        $query = $repository->createQueryBuilder('a')
            ->getQuery();

        $myAsideResult = $query->getResult();


        foreach ($myAsideResult as $value)
        {
            $myAside['t1']=$value->getT1Fr();
            $myAside['t2']=$value->getT2Fr();
        }

        return $myAside;
    }



}
