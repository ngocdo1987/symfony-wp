<?php

namespace AppBundle\Controller\Admin;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class TagsController extends CrudController
{
    protected $singular = 'tag';
    protected $plural = 'tags';

    /**
     * @Route("/admin/tags", name="admin.tags")
     */
    public function indexAction(Request $request)
    {
        return parent::indexAction($request);
    }

    /**
     * @Route("/admin/tags/new", name="admin.tags.new")
     */
    public function newAction(Request $request)
    {
        return parent::newAction($request);
    }

    /**
     * @Route("/admin/tags/show/{id}", name="admin.tags.show")
     */
    public function showAction(Request $request, $id = null)
    {
        return parent::showAction($request, $id);
    }

    /**
     * @Route("/admin/tags/edit/{id}", name="admin.tags.edit")
     */
    public function editAction(Request $request, $id = null)
    {
        return parent::editAction($request, $id);
    }

    /**
     * @Route("/admin/tags/delete/{id}", name="admin.tags.delete")
     */
    public function deleteAction(Request $request, $id = null)
    {
        return parent::deleteAction($request, $id);
    }
}
