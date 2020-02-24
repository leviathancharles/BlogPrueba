<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Rol
 *
 * @ORM\Table(name="rol")
 * @ORM\Entity
 */
class Rol
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
     * @ORM\Column(name="tipo_rol", type="string", length=25, nullable=true, options={"default"="NULL"})
     */
    private $tipoRol = 'NULL';

   

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTipoRol(): ?string
    {
        return $this->tipoRol;
    }

    public function setTipoRol(?string $tipoRol): self
    {
        $this->tipoRol = $tipoRol;

        return $this;
    }
  

}
