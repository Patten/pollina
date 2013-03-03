<?php

namespace pollina\Bundle\pollinaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use pollina\Bundle\pollinaBundle\Manager\AsideManager;
use pollina\Bundle\pollinaBundle\Entity\Aside;
use pollina\Bundle\pollinaBundle\Entity\Article;
use pollina\Bundle\pollinaBundle\Entity\Menu_business;
use pollina\Bundle\pollinaBundle\Entity\Newsletter;
use Symfony\Component\HttpFoundation\Request;


include('default_functions.php');

use Doctrine\ORM\EntityManager;




class DefaultController extends Controller
{



    /**
     * @Route("/hello/{name}")
     * @Template()
     */
    public function indexAction($name)
    {
        return array('name' => $name);
    }

    /**
     * @route("/pollina/{language}/home", name="home")
     * @Template ("pollinapollinaBundle:Default:index.html.twig")
     */
    public function homeAction($language)
    {
        $tabLanguage = loadMenu($language);

        $mail = new Newsletter();
        $form = $this->createFormBuilder($mail)
            ->add('mail', 'email')
            ->getForm();


        $myAside = $this->get('pollinapollina.aside_manager')->getAside($language);


        $articles = "";
        $repository = $this->getDoctrine()->getManager();

        $query = $repository->createQuery(
            'SELECT a FROM pollinapollinaBundle:Article a WHERE a.idDet = :id'
        )->setParameter('id', -1);

        $theArticles = $query->getResult();

        $i = 0;

        if ($language == 'EN')
        {
            foreach ($theArticles as $value)
            {
                $myArticles[$i]['intro']=$value->getintroEn();
                $myArticles[$i]['content']=$value->getContentEn();
                $i++;
            }
        }
        elseif ($language == 'GE')
        {
            foreach ($theArticles as $value)
            {
                $myArticles[$i]['intro']=$value->getintroGe();
                $myArticles[$i]['content']=$value->getcontentGe();
                $i++;
            }
        }
        else
        {
            foreach ($theArticles as $value)
            {
                $myArticles[$i]['intro']=$value->getintroFr();
                $myArticles[$i]['content']=$value->getcontentFr();
                $i++;
            }
        }

        return array('tabLanguage'=>$tabLanguage,'articles' => $myArticles, 'myAside' => $myAside,  'form' => $form->createView(), 'language' => $language);
    }

    /**
     * @route("/pollina/{language}/contact", name="contact")
     * @Template ("pollinapollinaBundle:Default:contact.html.twig")
     */
    public function contactAction($language)
    {
        $tabLanguage = loadMenu($language);
        $myAside = $this->get('pollinapollina.aside_manager')->getAside($language);

        return array('tabLanguage' => $tabLanguage,'myAside' => $myAside, 'language' => $language);
    }




    /* ----------------------------- Administration --------------------------- */


    /**
 * @route("/pollina/admin/aside", name="aside")
 * @Template ("pollinapollinaBundle:Default:aside.html.twig")
 */
    public function asideAction(Request $request)
    {

        $myAside = $this->get('pollinapollina.aside_manager')->getAsideAllCountries();

        // crée une tâche et lui donne quelques données par défaut pour cet exemple
        $aside = new Aside();
        $aside->setT1Fr($myAside['t1Fr']);
        $aside->setT2Fr($myAside['t2Fr']);
        $aside->setT1En($myAside['t1En']);
        $aside->setT2En($myAside['t2En']);
        $aside->setT1Ge($myAside['t1Ge']);
        $aside->setT2Ge($myAside['t2Ge']);

        $form = $this->createFormBuilder($aside)
            ->add('t1Fr', 'textarea')
            ->add('t2Fr', 'textarea')
            ->add('t1En', 'textarea')
            ->add('t2En', 'textarea')
            ->add('t1Ge', 'textarea')
            ->add('t2Ge', 'textarea')
            ->getForm();

        if ($request->isMethod('POST')) {
            $form->bind($request);

            if ($form->isValid()) {
                // effectuez quelques actions, comme sauvegarder la tâche dans
                // la base de données

                $validAside = $form->getData();

                $em = $this->getDoctrine()->getManager();
                $em->persist($validAside);
                $em->flush();
                //return $this->redirect($this->generateUrl('aside'));
            }
        }

        return $this->render('pollinapollinaBundle:Default:aside.html.twig', array(
            'form' => $form->createView(),
        ));
    }


    /**
     * @route("/pollina/admin", name="admin")
     */
    public function adminAction (Request $request)
    {
        return $this->redirect($this->generateUrl('article'));
    }


    /**
     * @route("/admin/article", name="article")
     * @Template ("pollinapollinaBundle:Default:article.html.twig")
     */
    public function articleAction(Request $request)
    {

        // crée une tâche et lui donne quelques données par défaut pour cet exemple
        $article = new Article();

        $form = $this->createFormBuilder($article)
            ->add('introFr', 'textarea')
            ->add('contentFr', 'textarea')
            ->add('introEn', 'textarea')
            ->add('contentEn', 'textarea')
            ->add('introGe', 'textarea')
            ->add('contentGe', 'textarea')
            ->getForm();

        if ($request->isMethod('POST')) {

            $form->bind($request);

                // effectuez quelques actions, comme sauvegarder la tâche dans
                // la base de données


                $validArticle = $form->getData();

                $em = $this->getDoctrine()->getManager();
                $em->persist($validArticle);
                $em->flush();
               // return $this->redirect($this->generateUrl('article'));


        }

        return $this->render('pollinapollinaBundle:Default:article.html.twig', array(
            'form' => $form->createView(),
        ));
    }



    /**
     * @route("/pollina/{language}/business{detail}", name="business")
     * @Template ("pollinapollinaBundle:Default:articles.html.twig")
     */
    public function businessAction($detail, $language)
    {
        $tabLanguage = loadMenu($language);

        $detail = substr($detail,1);
           $repository = $this->getDoctrine()->getManager();

            $query = $repository->createQuery(
                'SELECT a FROM pollinapollinaBundle:Article a WHERE a.idDet = :id'
            )->setParameter('id', $detail);

            $articles = $query->getResult();

            $i = 0;

            if ($language == 'EN')
            {
                foreach ($articles as $value)
                {
                    $myArticles[$i]['intro']=$value->getintroEn();
                    $myArticles[$i]['content']=$value->getContentEn();
                    $i++;
                }
            }
            elseif ($language == 'GE')
            {
                foreach ($articles as $value)
                {
                    $myArticles[$i]['intro']=$value->getintroGe();
                    $myArticles[$i]['content']=$value->getcontentGe();
                    $i++;
                }
            }
            else
            {
                foreach ($articles as $value)
                {
                    $myArticles[$i]['intro']=$value->getintroFr();
                    $myArticles[$i]['content']=$value->getcontentFr();
                    $i++;
                }
            }

        $myAside = $this->get('pollinapollina.aside_manager')->getAside($language);

        return array('myAside' => $myAside, 'articles' => $myArticles, 'language' => $language, 'tabLanguage' => $tabLanguage);
    }

}
