<?php

namespace App\Entity;
use Symfony\Component\Validator\Constraints as Assert;

use Doctrine\ORM\Mapping as ORM;


/**
 * Entrada
 *
 * @ORM\Table(name="entradas", indexes={@ORM\Index(name="fk_usuario_entrada", columns={"usuario_id"}), @ORM\Index(name="fk_tipo_entrada", columns={"tipo_id"})})
 * @ORM\Entity
 */
class Entrada
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="titulo", type="string", length=100, nullable=true, options={"default"="NULL"})
     */
    private $titulo;

    /**
     * @var string|null
     *
     * @ORM\Column(name="contenido", type="text", length=65535, nullable=true, options={"default"="NULL"})
     * @Assert\NotBlank
     */
    private $contenido;

    /**
     * @var string|null
     *
     * @ORM\Column(name="imagen", type="string", length=25, nullable=true, options={"default"="NULL"})
     * @Assert\NotBlank
     */
    private $imagen = 'NULL';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="creacion", type="datetime")
     */
    private $creacion;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="actualizacion", type="datetime", nullable=true, options={"default"="NULL"})
     */
    private $actualizacion = 'NULL';

    /**
     * @var \TipoEntrada
     *
     * @ORM\ManyToOne(targetEntity="TipoEntrada")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="tipo_id", referencedColumnName="id")
     * })
     */
    private $tipo;

    /**
     * @var \Usuarios
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Usuario", inversedBy="entradas")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="usuario_id", referencedColumnName="id")
     * })
     */
    private $usuario;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitulo(): ?string
    {
        return $this->titulo;
    }

    public function setTitulo(?string $titulo): self
    {
        $this->titulo = $titulo;

        return $this;
    }

    public function getContenido(): ?string
    {
        return $this->contenido;
    }

    public function setContenido(?string $contenido): self
    {
        $this->contenido = $contenido;

        return $this;
    }

    public function getImagen(): ?string
    {
        return $this->imagen;
    }

    public function setImagen(?string $imagen): self
    {
        $this->imagen = $imagen;

        return $this;
    }

    public function getCreacion(): ?\DateTimeInterface
    {
        return $this->creacion;
    }

    public function setCreacion(?\DateTimeInterface $creacion): self
    {
        $this->creacion = $creacion;

        return $this;
    }

    public function getActualizacion()
    {
        return $this->actualizacion;
    }

    public function setActualizacion( $actualizacion)
    {
        $this->actualizacion = $actualizacion;

        return $this;
    }

    public function getTipo(): ?TipoEntrada
    {
        return $this->tipo;
    }

    public function setTipo(?TipoEntrada $tipo): self
    {
        $this->tipo = $tipo;

        return $this;
    }

    public function getUsuario(): ?Usuario
    {
        return $this->usuario;
    }

    public function setUsuario(?Usuario $usuario): self
    {
        $this->usuario = $usuario;

        return $this;
    }


}
