<?php

namespace AppBundle\Controller\Admin;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class CategoriesController extends Controller
{
    /**
     * @Route("/admin/categories", name="admin.categories")
     */
    public function indexAction(Request $request)
    {
        $mt = 'List categories';
        return $this->render('admin/categories/index.html.twig', array(
            'mt' => $mt
        ));
    }

    /**
     * @Route("/admin/categories/add", name="admin.categories.add")
     */
    public function addAction(Request $request)
    {
        $mt = 'Add category';
        return $this->render('admin/categories/add.html.twig', array(
            'mt' => $mt
        ));
    }
}
