<?php

namespace repositorio\estudianteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Usuario
 *
 * @ORM\Table(name="usuario")
 * @ORM\Entity
 */
class Usuario
{
    /**
     * @var string
     *
     * @ORM\Column(name="codigo", type="string", length=20, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codigo;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=20, nullable=false)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="apellido", type="string", length=20, nullable=false)
     */
    private $apellido;

    /**
     * @var string
     *
     * @ORM\Column(name="correo", type="string", length=50, nullable=false)
     */
    private $correo;

    /**
     * @var \Sede
     *
     * @ORM\ManyToOne(targetEntity="Sede")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="codigo_sede", referencedColumnName="codigo_sede")
     * })
     */
    private $codigoSede;

    /**
     * @var \ProgramaAcademico
     *
     * @ORM\ManyToOne(targetEntity="ProgramaAcademico")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="codigo_prog", referencedColumnName="codigo_prog")
     * })
     */
    private $codigoProg;



    /**
     * Get codigo
     *
     * @return string 
     */
    public function getCodigo()
    {
        return $this->codigo;
    }
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;
    
        return $this;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Usuario
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    
        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set apellido
     *
     * @param string $apellido
     * @return Usuario
     */
    public function setApellido($apellido)
    {
        $this->apellido = $apellido;
    
        return $this;
    }

    /**
     * Get apellido
     *
     * @return string 
     */
    public function getApellido()
    {
        return $this->apellido;
    }

    /**
     * Set correo
     *
     * @param string $correo
     * @return Usuario
     */
    public function setCorreo($correo)
    {
        $this->correo = $correo;
    
        return $this;
    }

    /**
     * Get correo
     *
     * @return string 
     */
    public function getCorreo()
    {
        return $this->correo;
    }

    /**
     * Set codigoSede
     *
     * @param \repositorio\estudianteBundle\Entity\Sede $codigoSede
     * @return Usuario
     */
    public function setCodigoSede(\repositorio\estudianteBundle\Entity\Sede $codigoSede = null)
    {
        $this->codigoSede = $codigoSede;
    
        return $this;
    }

    /**
     * Get codigoSede
     *
     * @return \repositorio\estudianteBundle\Entity\Sede 
     */
    public function getCodigoSede()
    {
        return $this->codigoSede;
    }

    /**
     * Set codigoProg
     *
     * @param \repositorio\estudianteBundle\Entity\ProgramaAcademico $codigoProg
     * @return Usuario
     */
    public function setCodigoProg(\repositorio\estudianteBundle\Entity\ProgramaAcademico $codigoProg = null)
    {
        $this->codigoProg = $codigoProg;
    
        return $this;
    }

    /**
     * Get codigoProg
     *
     * @return \repositorio\estudianteBundle\Entity\ProgramaAcademico 
     */
    public function getCodigoProg()
    {
        return $this->codigoProg;
    }
}