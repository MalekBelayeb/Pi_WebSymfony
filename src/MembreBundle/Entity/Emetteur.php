<?php

namespace src\MembreBundle\resources\config\doctrine\metadata\orm;

use Doctrine\ORM\Mapping as ORM;

/**
 * Emetteur
 *
 * @ORM\Table(name="emetteur")
 * @ORM\Entity
 */
class Emetteur
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idEm", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idem;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="lastConnection", type="datetime", nullable=true)
     */
    private $lastconnection;

    /**
     * @var boolean
     *
     * @ORM\Column(name="isActive", type="boolean", nullable=true)
     */
    private $isactive;


}

