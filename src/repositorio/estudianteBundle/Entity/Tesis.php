<?php

namespace repositorio\estudianteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tesis
 *
 * @ORM\Table(name="tesis")
 * @ORM\Entity
 */
class Tesis
{
    /**
     * @var string
     *
     * @ORM\Column(name="indice", type="string", length=5, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $indice;

    /**
     * @var string
     *
     * @ORM\Column(name="titulo", type="string", length=100, nullable=false)
     */
    private $titulo;

    /**
     * @var string
     *
     * @ORM\Column(name="autor", type="string", length=100, nullable=false)
     */
    private $autor;

    /**
     * @var string
     *
     * @ORM\Column(name="resumen", type="string", length=500, nullable=false)
     */
    private $resumen;

    /**
     * @var string
     *
     * @ORM\Column(name="director", type="string", length=100, nullable=false)
     */
    private $director;

    /**
     * @var string
     *
     * @ORM\Column(name="palabras_claves", type="string", length=200, nullable=false)
     */
    private $palabrasClaves;

    /**
     * @var string
     *
     * @ORM\Column(name="ano", type="string", length=5, nullable=false)
     */
    private $ano;

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
     * Get indice
     *
     * @return string 
     */
    public function getIndice()
    {
        return $this->indice;
    }

    /**
     * Set titulo
     *
     * @param string $titulo
     * @return Tesis
     */
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;
    
        return $this;
    }

    /**
     * Get titulo
     *
     * @return string 
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Set autor
     *
     * @param string $autor
     * @return Tesis
     */
    public function setAutor($autor)
    {
        $this->autor = $autor;
    
        return $this;
    }

    /**
     * Get autor
     *
     * @return string 
     */
    public function getAutor()
    {
        return $this->autor;
    }

    /**
     * Set resumen
     *
     * @param string $resumen
     * @return Tesis
     */
    public function setResumen($resumen)
    {
        $this->resumen = $resumen;
    
        return $this;
    }

    /**
     * Get resumen
     *
     * @return string 
     */
    public function getResumen()
    {
        return $this->resumen;
    }

    /**
     * Set director
     *
     * @param string $director
     * @return Tesis
     */
    public function setDirector($director)
    {
        $this->director = $director;
    
        return $this;
    }

    /**
     * Get director
     *
     * @return string 
     */
    public function getDirector()
    {
        return $this->director;
    }

    /**
     * Set palabrasClaves
     *
     * @param string $palabrasClaves
     * @return Tesis
     */
    public function setPalabrasClaves($palabrasClaves)
    {
        $this->palabrasClaves = $palabrasClaves;
    
        return $this;
    }

    /**
     * Get palabrasClaves
     *
     * @return string 
     */
    public function getPalabrasClaves()
    {
        return $this->palabrasClaves;
    }

    /**
     * Set ano
     *
     * @param string $ano
     * @return Tesis
     */
    public function setAno($ano)
    {
        $this->ano = $ano;
    
        return $this;
    }

    /**
     * Get ano
     *
     * @return string 
     */
    public function getAno()
    {
        return $this->ano;
    }

    /**
     * Set codigoProg
     *
     * @param \repositorio\estudianteBundle\Entity\ProgramaAcademico $codigoProg
     * @return Tesis
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