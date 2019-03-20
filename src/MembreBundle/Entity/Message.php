<?php

namespace src\MembreBundle\resources\config\doctrine\metadata\orm;

use Doctrine\ORM\Mapping as ORM;

/**
 * Message
 *
 * @ORM\Table(name="message")
 * @ORM\Entity
 */
class Message
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ID_Message", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idMessage;

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

    /**
     * @var string
     *
     * @ORM\Column(name="Message", type="string", length=150, nullable=false)
     */
    private $message;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Added_in", type="datetime", nullable=false)
     */
    private $addedIn;

    /**
     * @var integer
     *
     * @ORM\Column(name="Vote", type="integer", nullable=false)
     */
    private $vote;


}

