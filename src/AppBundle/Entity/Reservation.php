<?php

namespace src/AppBundle/resources/config/doctrine/metadata/orm/;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reservation
 *
 * @ORM\Table(name="reservation", indexes={@ORM\Index(name="id_membre", columns={"id_membre"}), @ORM\Index(name="id_pagecommerce", columns={"id_pagecommerce"})})
 * @ORM\Entity
 */
class Reservation
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
     * @ORM\Column(name="id_pagecommerce", type="integer", nullable=false)
     */
    private $idPagecommerce;

    /**
     * @var integer
     *
     * @ORM\Column(name="idR", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idr;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Reservation", type="date", nullable=false)
     */
    private $reservation;

    /**
     * @var string
     *
     * @ORM\Column(name="horraire", type="string", length=25, nullable=true)
     */
    private $horraire;

    /**
     * @var string
     *
     * @ORM\Column(name="etat", type="string", length=25, nullable=true)
     */
    private $etat;


}

