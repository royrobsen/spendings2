<?php

namespace FoodBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

use FoodBundle\Entity\Artikel;
use FoodBundle\Entity\FoodMeta;
use FoodBundle\Entity\Shoppinglist;

use FoodBundle\Form\Type\ArtikelMetaType;
use FoodBundle\Form\Type\FoodMetaType;
use FoodBundle\Form\Type\ShoppinglistType;


class BarcodeController extends Controller
{

    public function barcodeAction(Request $request)
    {
        $code = $request->query->get('code');
               
        $artikel = $this->getDoctrine()->getRepository('FoodBundle:Artikel')->findOneBy(array('code' => $code));
        if ($artikel != NULL) {
            return $this->redirect($this->generateUrl('barcode_neu', array('code' => $code)));
        } else {
            return $this->redirect($this->generateUrl('barcode_neuerartikel', array('code' => $code)));
        }
        
        return $this->render('FoodBundle:Barcode:barcode.html.twig', array('code' => $code));
    }

    public function neuerArtikelAction(Request $request) {
        
        $code = $request->query->get('code');
        
        $artikel = new Artikel();
        
        $form = $this->createFormBuilder($artikel)
                ->add('artikelName', 'text')
                ->add('category', 'entity', array(
                    'class' => 'FoodBundle:Kategorien',
                    'property' => 'categoryName',
                ))
                ->add('save', 'submit', 
                    array('label' => 'Speichern'))
                ->getForm();
        
        $form->handleRequest($request);
                
            if ($form->isValid()) {
                
                $em = $this->getDoctrine()->getManager();  
                $artikel->setCode($code);
                $em->persist($artikel);
                $em->flush();
                $this->get('session')->getFlashBag()->add('notice', 'Erfolgreich gespeichert!');
            }
        
        return $this->render('FoodBundle:Barcode:neuerArtikel.html.twig', array('code' => $code, 'form' => $form->createView()));
            
    }
    
    public function neuAction(Request $request)
    {
        $code = $request->query->get('code');
        
        $artikel = $this->getDoctrine()->getRepository('FoodBundle:Artikel')->findOneBy(array('code' => $code));
        
        $foodMeta = new FoodMeta();
        
        $form = $this->createForm(new ArtikelMetaType(), $foodMeta); 
        $form->get('artikel')->setData($artikel);
        $form->remove('abgang');
        $form->handleRequest($request);
                
            if ($form->isValid()) {
                $foodMeta->setAbgang(0);
                $em = $this->getDoctrine()->getManager();       
                $em->persist($foodMeta);
                $em->flush();
                $this->get('session')->getFlashBag()->add('notice', 'Erfolgreich gespeichert!');
            }
        
        return $this->render('FoodBundle:Barcode:neu.html.twig', array('form' => $form->createView()));
    }
    
}
