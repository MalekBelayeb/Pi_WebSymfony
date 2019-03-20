<?php

namespace src/AppBundle/resources/config/doctrine/metadata/orm/;

use Doctrine\ORM\Mapping as ORM;

/**
 * Signals
 *
 * @ORM\Table(name="signals")
 * @ORM\Entity
 */
class Signals
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ID_Signal", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idSignal;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_Article", type="integer", nullable=false)
     */
    private $idArticle;

    /**
     * @var string
     *
     * @ORM\Column(name="cause", type="string", length=100, nullable=false)
     */
    private $cause;


}

