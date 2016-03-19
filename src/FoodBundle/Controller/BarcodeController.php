<?php

namespace FoodBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

use FoodBundle\Entity\Food;
use FoodBundle\Entity\FoodMeta;
use FoodBundle\Entity\Shoppinglist;

use FoodBundle\Form\Type\FoodMetaType;
use FoodBundle\Form\Type\ShoppinglistType;


class BarcodeController extends Controller
{

    public function barcodeAction(Request $request)
    {
        $code = $request->query->get('code');
        
        return $this->render('FoodBundle:Barcode:barcode.html.twig', array('code' => $code));
    }

}
