<?php

namespace AppBundle\Controller\Admin;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class PagesController extends Controller
{
    /**
     * @Route("/admin/list_pages", name="admin.pages")
     */
    public function indexAction(Request $request)
    {
        $mt = 'List pages';
        return $this->render('admin/pages/index.html.twig', array(
            'mt' => $mt
        ));
    }

    /**
     * @Route("/admin/pages/add", name="admin.pages.add")
     */
    public function addAction(Request $request)
    {
        $mt = 'Add page';
        return $this->render('admin/pages/add.html.twig', array(
            'mt' => $mt
        ));
    }
}
