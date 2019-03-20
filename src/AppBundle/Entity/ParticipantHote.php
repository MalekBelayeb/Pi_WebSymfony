<?php

namespace src/AppBundle/resources/config/doctrine/metadata/orm/;

use Doctrine\ORM\Mapping as ORM;

/**
 * ParticipantHote
 *
 * @ORM\Table(name="participant_hote")
 * @ORM\Entity
 */
class ParticipantHote
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_ph", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPh;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_user", type="integer", nullable=false)
     */
    private $idUser;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_hote", type="integer", nullable=false)
     */
    private $idHote;


}

