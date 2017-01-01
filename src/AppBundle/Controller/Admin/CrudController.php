<?php

namespace AppBundle\Controller\Admin;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class CrudController extends Controller
{
	protected $singular = '';
	protected $plural = '';
	protected $config = [];

	public function __construct()
	{
		if(file_exists('../app/config/cms/'.$this->singular.'.json'))
		{
			$config = file_get_contents('../app/config/cms/'.$this->singular.'.json');
			$config = json_decode($config);
		}
		else
		{
			$config = null;
		}

		$this->config = $config;
	}

	public function indexAction(Request $request)
	{
		$em = $this->getDoctrine()->getManager();

        $cruds = $em->getRepository('AppBundle:'.ucfirst($this->singular))->findAll();
        
		return $this->render('admin/crud/index.html.php', array(
            'plural' => $this->plural,
            'config' => $this->config,
            'cruds' => $cruds
        ));
	}

	public function newAction(Request $request)
	{
		$mt = 'Add '.$this->singular;
		return $this->render('admin/crud/new.html.php', array(
			'mt' => $mt
		));
	}

	public function showAction()
	{

	}

	public function editAction()
	{
		
	}
}