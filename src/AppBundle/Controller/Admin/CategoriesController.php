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

    /**
     * @Route("/admin/categories/new", name="admin.categories.new")
     */
    public function newAction(Request $request)
    {
        return parent::newAction($request);
    }

    /**
     * @Route("/admin/categories/show/{id}", name="admin.categories.show")
     */
    public function showAction(Request $request, $id = null)
    {
        return parent::showAction($request, $id);
    }

    /**
     * @Route("/admin/categories/edit/{id}", name="admin.categories.edit")
     */
    public function editAction(Request $request, $id = null)
    {
        return parent::editAction($request, $id);
    }

    /**
     * @Route("/admin/categories/delete/{id}", name="admin.categories.delete")
     */
    public function deleteAction(Request $request, $id = null)
    {
        return parent::deleteAction($request, $id);
    }
}
