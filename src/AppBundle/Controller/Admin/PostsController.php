<?php

namespace AppBundle\Controller\Admin;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class PostsController extends Controller
{
    /**
     * @Route("/admin/posts", name="admin.posts")
     */
    public function indexAction(Request $request)
    {
        $mt = 'List posts';
        return $this->render('admin/posts/index.html.twig', array(
            'mt' => $mt
        ));
    }

    /**
     * @Route("/admin/posts/add", name="admin.posts.add")
     */
    public function addAction(Request $request)
    {
        $mt = 'Add post';
        return $this->render('admin/posts/add.html.twig', array(
            'mt' => $mt
        ));
    }
}
