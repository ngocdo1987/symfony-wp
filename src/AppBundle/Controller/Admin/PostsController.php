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
}
