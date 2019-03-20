<?php

namespace src/AppBundle/resources/config/doctrine/metadata/orm/;

use Doctrine\ORM\Mapping as ORM;

/**
 * Views
 *
 * @ORM\Table(name="views")
 * @ORM\Entity
 */
class Views
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ID_Views", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idViews;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_Article", type="integer", nullable=false)
     */
    private $idArticle;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_User", type="integer", nullable=false)
     */
    private $idUser;


}

