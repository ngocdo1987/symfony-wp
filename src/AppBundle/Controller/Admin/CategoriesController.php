<?php

namespace AppBundle\Controller\Admin;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class CategoriesController extends CrudController
{
    protected $singular = 'category';
    protected $plural = 'categories';

    /**
     * @Route("/admin/categories", name="admin.categories")
     */
    public function indexAction(Request $request)
    {
        return parent::indexAction($request);
    }
}
