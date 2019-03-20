<?php

namespace src/AppBundle/resources/config/doctrine/metadata/orm/;

use Doctrine\ORM\Mapping as ORM;

/**
 * Blockmembre
 *
 * @ORM\Table(name="blockmembre")
 * @ORM\Entity
 */
class Blockmembre
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_ab", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idAb;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_user", type="integer", nullable=false)
     */
    private $idUser;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_block", type="integer", nullable=false)
     */
    private $idBlock;


}

