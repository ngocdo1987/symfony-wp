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
     * @Route("/admin/list_pages", name="admin.pages")
     */
    public function indexAction(Request $request)
    {
        return parent::indexAction($request);
    }
}
