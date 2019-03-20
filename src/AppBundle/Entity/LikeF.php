<?php

namespace src/AppBundle/resources/config/doctrine/metadata/orm/;

use Doctrine\ORM\Mapping as ORM;

/**
 * LikeF
 *
 * @ORM\Table(name="like_f")
 * @ORM\Entity
 */
class LikeF
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ID_Like", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idLike;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_ForumDS", type="integer", nullable=false)
     */
    private $idForumds;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_User", type="integer", nullable=false)
     */
    private $idUser;


}

