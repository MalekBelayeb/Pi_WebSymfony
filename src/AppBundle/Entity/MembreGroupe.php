<?php

namespace src/AppBundle/resources/config/doctrine/metadata/orm/;

use Doctrine\ORM\Mapping as ORM;

/**
 * MembreGroupe
 *
 * @ORM\Table(name="membre_groupe", indexes={@ORM\Index(name="id_groupe", columns={"id_groupe"}), @ORM\Index(name="id_membre", columns={"id_membre"})})
 * @ORM\Entity
 */
class MembreGroupe
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_membre_groupe", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idMembreGroupe;

    /**
     * @var string
     *
     * @ORM\Column(name="role", type="string", length=40, nullable=false)
     */
    private $role = 'membre';

    /**
     * @var \Groupe
     *
     * @ORM\ManyToOne(targetEntity="Groupe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_groupe", referencedColumnName="id_groupe")
     * })
     */
    private $idGroupe;

    /**
     * @var \Membre
     *
     * @ORM\ManyToOne(targetEntity="Membre")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_membre", referencedColumnName="id")
     * })
     */
    private $idMembre;


}

