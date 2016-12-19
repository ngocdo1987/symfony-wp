<?php

namespace AppBundle\Controller\Admin;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class TestController extends Controller
{
    /**
     * @Route("/admin/test", name="admin.test")
     */
    public function indexAction(Request $request)
    {
        $mt = 'List HTML inputs';
        return $this->render('admin/test/index.html.twig', array(
            'mt' => $mt
        ));
    }
}
