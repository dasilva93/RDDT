<?php

namespace repositorio\estudianteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use repositorio\estudianteBundle\Entity\Usuario;
use repositorio\estudianteBundle\Entity\ProgramaAcademico;
use repositorio\estudianteBundle\Entity\Sede;

class DefaultController extends Controller
{
    public function estudianteAction()
    {
        $repositoriypa = $this->getDoctrine()->getRepository("estudianteBundle:ProgramaAcademico");
        $programas = $repositoriypa->findAll();

        $repositoriys = $this->getDoctrine()->getRepository("estudianteBundle:Sede");
        $sedes = $repositoriys->findAll();

        return $this->render('estudianteBundle::estudiante.html.twig',array('programas'=>$programas,'sedes'=>$sedes,));
    }

    public function registrarAction()
    {   
        
        $programa = new ProgramaAcademico();
        $programa->setCodigoProg($_POST['progaca']);

        $sede = new Sede();
        $sede->setCodigoSede($_POST['sede']);

        $usuario = new Usuario();
    	$usuario->setCodigo($_POST['codigo']);
    	$usuario->setNombre($_POST['nombre']);
    	$usuario->setApellido($_POST['apellido']);
    	$usuario->setCorreo($_POST['correo']);
    	$usuario->setCodigoProg($programa);
    	$usuario->setCodigoSede($sede);

        $em = $this->getDoctrine()->getManager();
        $em->persist($usuario);
        $em->flush();

        
        return $this->render('estudianteBundle::registrat.html.twig');
    }
}
