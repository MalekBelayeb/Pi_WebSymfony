<?php

namespace src\MembreBundle\resources\config\doctrine\metadata\orm;

use Doctrine\ORM\Mapping as ORM;

/**
 * Album
 *
 * @ORM\Table(name="album", indexes={@ORM\Index(name="FK_membre", columns={"idMembre"})})
 * @ORM\Entity
 */
class Album
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idAlbum", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idalbum;

    /**
     * @var string
     *
     * @ORM\Column(name="NomAlbum", type="string", length=30, nullable=false)
     */
    private $nomalbum;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=100, nullable=true)
     */
    private $image;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_in", type="date", nullable=false)
     */
    private $createdIn;

    /**
     * @var integer
     *
     * @ORM\Column(name="idMembre", type="integer", nullable=false)
     */
    private $idmembre;





}

