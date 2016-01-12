<?php

namespace FoodBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SecurityController extends Controller
{
    public function loginAction()
    {
        return $this->render('FoodBundle:Default:login.html.twig');
    }
}
