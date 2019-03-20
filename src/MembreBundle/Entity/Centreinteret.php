<?php

namespace src\MembreBundle\resources\config\doctrine\metadata\orm;

use Doctrine\ORM\Mapping as ORM;

/**
 * Centreinteret
 *
 * @ORM\Table(name="centreinteret", indexes={@ORM\Index(name="FK_idmembre", columns={"idMembre"})})
 * @ORM\Entity
 */
class Centreinteret
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idCentreInteret", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcentreinteret;

    /**
     * @var integer
     *
     * @ORM\Column(name="idMembre", type="integer", nullable=false)
     */
    private $idmembre;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=30, nullable=false)
     */
    private $nom;


}

