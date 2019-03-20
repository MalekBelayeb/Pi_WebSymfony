<?php

namespace src/AppBundle/resources/config/doctrine/metadata/orm/;

use Doctrine\ORM\Mapping as ORM;

/**
 * Clap
 *
 * @ORM\Table(name="clap")
 * @ORM\Entity
 */
class Clap
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ID_CLAP", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idClap;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_Article", type="integer", nullable=false)
     */
    private $idArticle;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Claped_in", type="datetime", nullable=false)
     */
    private $clapedIn;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_User", type="integer", nullable=false)
     */
    private $idUser;


}

