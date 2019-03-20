<?php

namespace src/AppBundle/resources/config/doctrine/metadata/orm/;

use Doctrine\ORM\Mapping as ORM;

/**
 * Forumds
 *
 * @ORM\Table(name="forumds")
 * @ORM\Entity
 */
class Forumds
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ID_ForumDS", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idForumds;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_User", type="integer", nullable=false)
     */
    private $idUser;

    /**
     * @var string
     *
     * @ORM\Column(name="theme", type="string", length=50, nullable=false)
     */
    private $theme;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Posted_in", type="datetime", nullable=false)
     */
    private $postedIn;

    /**
     * @var string
     *
     * @ORM\Column(name="categorie", type="string", length=100, nullable=false)
     */
    private $categorie;


}

