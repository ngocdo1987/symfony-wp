<?php

namespace AppBundle\Controller\Admin;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class PostsController extends CrudController
{
    protected $singular = 'post';
    protected $plural = 'posts';

    /**
     * @Route("/admin/posts", name="admin.posts")
     */
    public function indexAction(Request $request)
    {
        return parent::indexAction($request);
    }

    /**
     * @Route("/admin/posts/new", name="admin.posts.new")
     */
    public function newAction(Request $request)
    {
        return parent::newAction($request);
    }

    /**
     * @Route("/admin/posts/show/{id}", name="admin.posts.show")
     */
    public function showAction(Request $request, $id = null)
    {
        return parent::showAction($request, $id);
    }

    /**
     * @Route("/admin/posts/edit/{id}", name="admin.posts.edit")
     */
    public function editAction(Request $request, $id = null)
    {
        return parent::editAction($request, $id);
    }

    /**
     * @Route("/admin/posts/delete/{id}", name="admin.posts.delete")
     */
    public function deleteAction(Request $request, $id = null)
    {
        return parent::deleteAction($request, $id);
    }
}
