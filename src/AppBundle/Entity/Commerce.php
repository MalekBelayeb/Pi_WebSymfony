<?php

namespace src/AppBundle/resources/config/doctrine/metadata/orm/;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commerce
 *
 * @ORM\Table(name="commerce", indexes={@ORM\Index(name="id_membre", columns={"id_membre"})})
 * @ORM\Entity
 */
class Commerce
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_membre", type="integer", nullable=false)
     */
    private $idMembre;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=2000, nullable=true)
     */
    private $image;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=25, nullable=true)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=25, nullable=true)
     */
    private $adresse;

    /**
     * @var integer
     *
     * @ORM\Column(name="numero", type="integer", nullable=true)
     */
    private $numero;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=25, nullable=true)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="website", type="string", length=25, nullable=true)
     */
    private $website;

    /**
     * @var string
     *
     * @ORM\Column(name="ouverture", type="string", length=25, nullable=true)
     */
    private $ouverture;

    /**
     * @var string
     *
     * @ORM\Column(name="fermeture", type="string", length=25, nullable=false)
     */
    private $fermeture;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=true)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="etat", type="string", length=255, nullable=false)
     */
    private $etat;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbrpalceReser", type="integer", nullable=false)
     */
    private $nbrpalcereser;


}

