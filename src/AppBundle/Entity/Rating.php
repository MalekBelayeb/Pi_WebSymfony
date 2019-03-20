<?php

namespace src/AppBundle/resources/config/doctrine/metadata/orm/;

use Doctrine\ORM\Mapping as ORM;

/**
 * Rating
 *
 * @ORM\Table(name="rating", indexes={@ORM\Index(name="id_pagecommercial", columns={"id_pagecommercial"}), @ORM\Index(name="id_membre", columns={"id_membre"})})
 * @ORM\Entity
 */
class Rating
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_membre", type="integer", nullable=false)
     */
    private $idMembre;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_pagecommercial", type="integer", nullable=false)
     */
    private $idPagecommercial;

    /**
     * @var integer
     *
     * @ORM\Column(name="idRating", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idrating;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbrRating", type="integer", nullable=false)
     */
    private $nbrrating;


}

