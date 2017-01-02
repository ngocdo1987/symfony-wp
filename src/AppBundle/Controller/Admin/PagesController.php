<?php

namespace AppBundle\Controller\Admin;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class PagesController extends CrudController
{
    protected $singular = 'page';
    protected $plural = 'pages';

    /**
     * @Route("/admin/pages", name="admin.pages")
     */
    public function indexAction(Request $request)
    {
        return parent::indexAction($request);
    }

    /**
     * @Route("/admin/pages/new", name="admin.pages.new")
     */
    public function newAction(Request $request)
    {
        return parent::newAction($request);
    }
}
