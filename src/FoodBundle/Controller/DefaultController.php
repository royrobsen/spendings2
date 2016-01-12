<?php

namespace FoodBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

use FoodBundle\Entity\Food;
use FoodBundle\Entity\FoodMeta;

use FoodBundle\Form\Type\FoodMetaType;

class DefaultController extends Controller
{
    public function bestandAction()
    {
        return $this->render('FoodBundle:Default:bestand.html.twig');
    }
    
    public function jsonbestandAction() {

        $request = $this->getRequest();
                
        $foodBestand = $this->getDoctrine()
                ->getRepository('FoodBundle:Food');
                
        $queryFoodBestand = $foodBestand->createQueryBuilder('f')
                ->select('f')
                ->groupBy('f.id')
                ->getQuery();
                
        $foodBestand = $queryFoodBestand->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY);
               
        $data = array('data' => array());

        foreach ($foodBestand as $food) {
            
            $foodMeta2 = $this->getDoctrine()
                    ->getRepository('FoodBundle:FoodMeta');

            $queryFoodMeta = $foodMeta2->createQueryBuilder('fm')
                    ->select('(sum(fm.amount) - sum(fm.abgang)) as menge')
                    ->where('fm.foodRef = :id')
                    ->setParameter(':id', $food['id'])
                    ->getQuery();

            $foodMeta2 = $queryFoodMeta->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY);
            dump($foodMeta2);
              
            $foodBestand = $queryFoodBestand->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY);

            $foodMeta = $this->getDoctrine()->getRepository('FoodBundle:FoodMeta')->findOneBy(array('foodRef' => $food['id']), array('expireDate' => 'ASC'));
            if ( $foodMeta != NULL) {
            $data['data'][] = array($food['foodName'], $foodMeta->getPurchaseDate()->format('Y-m-d'), $foodMeta->getExpireDate()->format('Y-m-d'),$foodMeta2[0]['menge'], $food['id']);
            }
        }

        $response = new Response();
        $response->setContent(json_encode($data));

        $response->headers->set('Content-Type', 'application/json');

        return $response;

    }
    
    public function neuAction(Request $request)
    {
        
        $foodMeta = new FoodMeta();
        
        $form = $this->createForm(new FoodMetaType(), $foodMeta); 
        $form->remove('abgang');
        $form->handleRequest($request);
                
            if ($form->isValid()) {
                $foodMeta->setAbgang(0);
                $em = $this->getDoctrine()->getManager();       
                $em->persist($foodMeta);
                $em->flush();
                $this->get('session')->getFlashBag()->add('notice', 'Erfolgreich gespeichert!');
            }
        
        return $this->render('FoodBundle:Default:neu.html.twig', array('form' => $form->createView()));
    }
    
    public function neuesEssenAction(Request $request)
    {
        $food = new Food();
        
        $form = $this->createFormBuilder($food)
                ->add('foodName', 'text')
                ->add('save', 'submit', 
                    array('label' => 'Speichern'))
                ->getForm();
        
        $form->handleRequest($request);
                
            if ($form->isValid()) {
                
                $em = $this->getDoctrine()->getManager();       
                $em->persist($food);
                $em->flush();
                $this->get('session')->getFlashBag()->add('notice', 'Erfolgreich gespeichert!');
            }
        
        return $this->render('FoodBundle:Default:neuesEssen.html.twig', array('form' => $form->createView()));
    }
    
    public function abgangAction($id, Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        if ( $request->request->all()) {
            $postData = $request->request->all();
            foreach ($postData as $key => $value) {
                $foodMeta = $em->getRepository('FoodBundle:FoodMeta')->findOneBy(array('id' => $key));
                $foodMeta->setAbgang($value);
                $em->persist($foodMeta);
                $em->flush();
            }
        }
        
        $foodMeta = new FoodMeta();
        
        $query = $em->createQuery( "SELECT f, fm FROM FoodBundle:Food f JOIN f.foodData fm WHERE fm.amount > fm.abgang AND f.id = :id");
        $query->setParameter('id', $id);
        
        $food = $query->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY);
        
        return $this->render('FoodBundle:Default:abgang.html.twig', array('foods' => $food));
    }
    
}