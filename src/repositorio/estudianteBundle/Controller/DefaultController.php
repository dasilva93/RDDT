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

        return $this->render('estudianteBundle::estudiante.html.twig',array('programas'=>$programas,'sedes'=>$sedes));
    }

    public function registrarAction()
    {   
        try {
        
        $codigo = $_POST['codigo'];
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $correo = $_POST['correo'];
        $codigosede = $_POST['sede'];
        $codigoprog = $_POST['progaca'];

        $con= $this->getDoctrine()->getConnection();
        $sql= "INSERT INTO `usuario` (`codigo`, `nombre`, `apellido`, `correo`, `codigo_sede`, `codigo_prog`) VALUES
        ('$codigo','$nombre','$apellido','$correo','$codigosede','$codigoprog')";
                
        $insert = $con->query($sql);
        
        return $this->render('estudianteBundle::registrar.html.twig',array('insert'=>$sql));
                            
        } catch (\Exception $e) {
        
            echo"<script>alert('Usted esta siendo redireccionado a la pagina principal')</script>";
            
        }finally{

            

        }
        
    }
}
