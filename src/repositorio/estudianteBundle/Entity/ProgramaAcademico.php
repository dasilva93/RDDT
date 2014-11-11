<?php

namespace repositorio\estudianteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProgramaAcademico
 *
 * @ORM\Table(name="programa_academico")
 * @ORM\Entity
 */
class ProgramaAcademico
{
    /**
     * @var string
     *
     * @ORM\Column(name="codigo_prog", type="string", length=5, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codigoProg;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_prog", type="string", length=50, nullable=false)
     */
    private $nombreProg;



    /**
     * Get codigoProg
     *
     * @return string 
     */
    public function getCodigoProg()
    {
        return $this->codigoProg;
    }
    public function setCodigoProg($codigoprog)
    {
        $this->codigoprog = $codigoprog;
    
        return $this;
    }

    /**
     * Set nombreProg
     *
     * @param string $nombreProg
     * @return ProgramaAcademico
     */
    public function setNombreProg($nombreProg)
    {
        $this->nombreProg = $nombreProg;
    
        return $this;
    }

    /**
     * Get nombreProg
     *
     * @return string 
     */
    public function getNombreProg()
    {
        return $this->nombreProg;
    }
}