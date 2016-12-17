<?php

namespace AppBundle\Controller\Admin;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class TagsController extends Controller
{
    /**
     * @Route("/admin/tags", name="admin.tags")
     */
    public function indexAction(Request $request)
    {
        $mt = 'List tags';
        return $this->render('admin/tags/index.html.twig', array(
            'mt' => $mt
        ));
    }

    /**
     * @Route("/admin/tags/add", name="admin.tags.add")
     */
    public function addAction(Request $request)
    {
        $mt = 'Add tag';
        return $this->render('admin/tags/add.html.twig', array(
            'mt' => $mt
        ));
    }
}
