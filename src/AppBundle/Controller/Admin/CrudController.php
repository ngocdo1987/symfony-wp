<?php

namespace AppBundle\Controller\Admin;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class CrudController extends Controller
{
	protected $singular;
	protected $plural;
	protected $config;

	public function __construct()
	{
		$cfg_file = '../app/config/cms/'.$this->singular.'.json';
		$config = file_exists($cfg_file) ? json_decode(file_get_contents($cfg_file)) : null;

		$this->config = $config;
	}

	public function indexAction(Request $request)
	{
		$em = $this->getDoctrine()->getManager();

        $cruds = $em->getRepository('AppBundle:'.ucfirst($this->singular))->findAll();
        
		return $this->render('admin/crud/index.html.php', [
            'plural' => $this->plural,
            'config' => $this->config,
            'cruds' => $cruds
        ]);
	}

	public function newAction(Request $request)
	{
		$em = $this->getDoctrine()->getManager();

		$config = $this->config;
		$model = '\AppBundle\Entity\\'.ucfirst($this->singular);
		$crud = new $model;

		$form = $this->createForm('AppBundle\Form\\'.ucfirst($this->singular).'Type', $crud);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) 
        {
			$input = $request->request->all();

        	// Check n-n
            if(isset($config->relation->nn) && count($config->relation->nn) > 0)
            {
            	foreach($config->relation->nn as $singular_model => $v)
                {
                	$singular_model_ids = isset($input[$singular_model]) ? $input[$singular_model] : array();
                    //$plural_model = $v->func;

                    if(!empty($singular_model_ids))
                    {
                    	foreach($singular_model_ids as $smi)
                    	{
                    		$sync = $em->getRepository('AppBundle:'.ucfirst($singular_model))->find($smi);
                    		if($sync)
                    		{
                    			$add_func = 'add'.ucfirst($singular_model);
                    			$crud->$add_func($sync);
                    		}
                    	}
                    	
                    }
                }
            }

            $em->persist($crud);
            $em->flush($crud);

            return $this->redirectToRoute('admin.'.$this->plural);
        }

        $render_vars = [
        	'singular' => $this->singular,
			'plural' => $this->plural,
			'config' => $config,
			'crud' => $crud,
			'form' => $form->createView()
        ];

        // Check n-n
        if(isset($config->relation->nn) && count($config->relation->nn) > 0)
		{
			foreach($config->relation->nn as $k => $v)
			{
				$render_vars[$k] = $em->getRepository('AppBundle:'.ucfirst($k))->findAll();
			}
		}

		return $this->render('admin/crud/new.html.php', $render_vars);
	}

	public function showAction(Request $request, $id = null)
	{
		
	}

	public function editAction(Request $request, $id = null)
	{
		$em = $this->getDoctrine()->getManager();

		$config = $this->config;
		$model = '\AppBundle\Entity\\'.ucfirst($this->singular);
		$crud = $em->getRepository('AppBundle:'.ucfirst($this->singular))->find($id);

		$form = $this->createForm('AppBundle\Form\\'.ucfirst($this->singular).'Type', $crud);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) 
        {
            $input = $request->request->all();

            // Check n-n
            if(isset($config->relation->nn) && count($config->relation->nn) > 0)
            {
            	foreach($config->relation->nn as $singular_model => $v)
                {
                	$singular_model_ids = isset($input[$singular_model]) ? $input[$singular_model] : array();
                	$plural_model = $v->func;

                	// Delete old n-n
                	$remove_func = 'removeAll'.ucfirst($plural_model);
                	$crud->$remove_func();

                	if(!empty($singular_model_ids))
                    {
                    	foreach($singular_model_ids as $smi)
                    	{
                    		$sync = $em->getRepository('AppBundle:'.ucfirst($singular_model))->find($smi);
                    		if($sync)
                    		{
                    			$add_func = 'add'.ucfirst($singular_model);
                    			$crud->$add_func($sync);
                    		}
                    	}
                    	
                    }
                }
            }

            //die('');

            $em->persist($crud);
            $em->flush($crud);

            return $this->redirectToRoute('admin.'.$this->plural);
        }

        $render_vars = [
        	'singular' => $this->singular,
			'plural' => $this->plural,
			'config' => $config,
			'crud' => $crud,
			'form' => $form->createView()
        ];

       	// Check n-n
        if(isset($config->relation->nn) && count($config->relation->nn) > 0)
		{
			foreach($config->relation->nn as $k => $v)
			{
				$singular_model_related_ids = $k.'_related_ids';
                $$singular_model_related_ids = [];
                $plural_model = $v->func;

				$render_vars[$k] = $em->getRepository('AppBundle:'.ucfirst($k))->findAll();

				if(!empty($crud->$plural_model))
				{
					foreach($crud->$plural_model as $cp)
					{
						$$singular_model_related_ids[] = $cp->id;
					}
				}

				$render_vars[$singular_model_related_ids] = $$singular_model_related_ids;
			}
		}

		return $this->render('admin/crud/edit.html.php', $render_vars);
	}

	public function deleteAction(Request $request, $id = null)
	{
		$em = $this->getDoctrine()->getManager();
		$crud = $em->getRepository('AppBundle:'.ucfirst($this->singular))->find($id);

		if(!empty($crud)) 
		{
			$em->remove($crud);
			$em->flush();
		}

		return $this->redirectToRoute('admin.'.$this->plural);
	}
}