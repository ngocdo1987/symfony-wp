<?php

namespace AppBundle\Controller\Admin;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DashboardController extends Controller
{
    /**
     * @Route("/admin/dashboard", name="admin.dashboard")
     */
    public function indexAction(Request $request)
    {
        $mt = 'Dashboard';
        return $this->render('admin/dashboard/index.html.twig', array(
            'mt' => $mt
        ));
    }
}
