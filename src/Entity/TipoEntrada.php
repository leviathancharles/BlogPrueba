<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TipoEntrada
 *
 * @ORM\Table(name="tipo_entrada")
 * @ORM\Entity
 */
class TipoEntrada
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
     * @ORM\Column(name="tipo_entrada", type="string", length=25, nullable=true, options={"default"="NULL"})
     */
    private $tipoEntrada = 'NULL';

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTipoEntrada(): ?string
    {
        return $this->tipoEntrada;
    }

    public function setTipoEntrada(?string $tipoEntrada): self
    {
        $this->tipoEntrada = $tipoEntrada;

        return $this;
    }


}
