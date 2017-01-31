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

    /**
     * @Route("/admin/pages/show/{id}", name="admin.pages.show")
     */
    public function showAction(Request $request, $id = null)
    {
        return parent::showAction($request, $id);
    }

    /**
     * @Route("/admin/pages/edit/{id}", name="admin.pages.edit")
     */
    public function editAction(Request $request, $id = null)
    {
        return parent::editAction($request, $id);
    }

    /**
     * @Route("/admin/pages/delete/{id}", name="admin.pages.delete")
     */
    public function deleteAction(Request $request, $id = null)
    {
        return parent::deleteAction($request, $id);
    }
}
