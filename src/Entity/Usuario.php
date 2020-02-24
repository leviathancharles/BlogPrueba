<?php

namespace App\Entity;
use Symfony\Component\Security\Core\User\UserInterface;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Symfony\Component\Validator\Constraints as Assert;

use Doctrine\ORM\Mapping as ORM;

/**
 * Usuario
 *
 * @ORM\Table(name="usuarios", indexes={@ORM\Index(name="fk_rol_usuario", columns={"rol_usuario"})})
 * @ORM\Entity
 */
class Usuario implements UserInterface
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
     * @ORM\Column(name="nombre", type="string", length=25, nullable=true, options={"default"="NULL"})
     * @Assert\NotBlank
     * @Assert\Regex("/[a-zA-Z ]+/")
     */
    private $nombre;

    /**
     * @var string|null
     *
     * @ORM\Column(name="apellido", type="string", length=25, nullable=true, options={"default"="NULL"})
     * @Assert\NotBlank
     * @Assert\Regex("/[a-zA-Z ]+/")
     */
    private $apellido;

    /**
     * @var string|null
     *
     * @ORM\Column(name="email", type="string", length=25, nullable=true, options={"default"="NULL"})
     * @Assert\NotBlank
     * @Assert\Email(
     *          message = "El email {{ value }} no es valido",          
     * )
     */
    private $email; 

    /**
     * @var string|null
     *
     * @ORM\Column(name="password", type="string", length=25, nullable=true, options={"default"="NULL"})
     */
    private $password = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="alias", type="string", length=25, nullable=true, options={"default"="NULL"})
     * @Assert\NotBlank
     */
    private $alias = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="avatar", type="string", length=25, nullable=true, options={"default"="NULL"})
     */
    private $avatar = 'NULL';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="creacion", type="datetime", nullable=true, options={"default"="NULL"})
     */
    private $creacion = 'NULL';

    /**
     * @var \Rol
     *
     * @ORM\ManyToOne(targetEntity="Rol")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="rol_usuario", referencedColumnName="id")
     * })
     */
    private $rolUsuario; 

    /**
     *  @ORM\OneToMany(targetEntity="App\Entity\Entrada", mappedBy="usuario")
     */     
    private $entradas;

    public function __construct()
    {
        $this->entradas = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombre(): ?string
    {
        return $this->nombre;
    }

    public function setNombre(?string $nombre): self
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function getApellido(): ?string
    {
        return $this->apellido;
    }

    public function setApellido(?string $apellido): self
    {
        $this->apellido = $apellido;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(?string $password): self
    {
        $this->password = $password;

        return $this;
    }

    public function getAlias(): ?string
    {
        return $this->alias;
    }

    public function setAlias(?string $alias): self
    {
        $this->alias = $alias;

        return $this;
    }

    public function getAvatar(): ?string
    {
        return $this->avatar;
    }

    public function setAvatar(?string $avatar): self
    {
        $this->avatar = $avatar;

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

    public function getRolUsuario(): ?Rol
    {
        return $this->rolUsuario;
    }

    public function setRolUsuario(?Rol $rolUsuario): self
    {
        $this->rolUsuario = $rolUsuario;

        return $this;
    }

    public function getEntradas(): Collection
    {
        return $this->entradas;
    }

    public function getUsername()
    {
        return $this->email;
    }

    public function getSalt()
    {
        return null;
    }

    public function getRoles()
    {
        return array('1','2');
    }

    public function eraseCredentials()
    {

    }
}