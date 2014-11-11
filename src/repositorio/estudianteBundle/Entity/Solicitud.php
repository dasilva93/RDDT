<?php

namespace repositorio\estudianteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Solicitud
 *
 * @ORM\Table(name="solicitud")
 * @ORM\Entity
 */
class Solicitud
{
    /**
     * @var string
     *
     * @ORM\Column(name="numero", type="string", length=5, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $numero;

    /**
     * @var string
     *
     * @ORM\Column(name="paginas", type="string", length=20, nullable=false)
     */
    private $paginas;

    /**
     * @var \Usuario
     *
     * @ORM\ManyToOne(targetEntity="Usuario")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="codigo", referencedColumnName="codigo")
     * })
     */
    private $codigo;

    /**
     * @var \Tesis
     *
     * @ORM\ManyToOne(targetEntity="Tesis")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="indice", referencedColumnName="indice")
     * })
     */
    private $indice;



    /**
     * Get numero
     *
     * @return string 
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set paginas
     *
     * @param string $paginas
     * @return Solicitud
     */
    public function setPaginas($paginas)
    {
        $this->paginas = $paginas;
    
        return $this;
    }

    /**
     * Get paginas
     *
     * @return string 
     */
    public function getPaginas()
    {
        return $this->paginas;
    }

    /**
     * Set codigo
     *
     * @param \repositorio\estudianteBundle\Entity\Usuario $codigo
     * @return Solicitud
     */
    public function setCodigo(\repositorio\estudianteBundle\Entity\Usuario $codigo = null)
    {
        $this->codigo = $codigo;
    
        return $this;
    }

    /**
     * Get codigo
     *
     * @return \repositorio\estudianteBundle\Entity\Usuario 
     */
    public function getCodigo()
    {
        return $this->codigo;
    }

    /**
     * Set indice
     *
     * @param \repositorio\estudianteBundle\Entity\Tesis $indice
     * @return Solicitud
     */
    public function setIndice(\repositorio\estudianteBundle\Entity\Tesis $indice = null)
    {
        $this->indice = $indice;
    
        return $this;
    }

    /**
     * Get indice
     *
     * @return \repositorio\estudianteBundle\Entity\Tesis 
     */
    public function getIndice()
    {
        return $this->indice;
    }
}