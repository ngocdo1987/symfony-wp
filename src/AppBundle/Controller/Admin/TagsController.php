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
}
