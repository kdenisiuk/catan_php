<?php

namespace App\Controller\MenuController;

use FOS\RestBundle\Controller\AbstractFOSRestController;
use FOS\RestBundle\Controller\Annotations as Rest;
use Symfony\Component\HttpFoundation\Response;


class MenuController extends AbstractFOSRestController
{

    /**
     * @Rest\Post("/srakaptaka")
     */
    public function getDataAction(){
        return new Response('ok');
    }

}