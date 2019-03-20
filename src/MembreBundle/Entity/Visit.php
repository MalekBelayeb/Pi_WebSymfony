<?php

namespace src\MembreBundle\resources\config\doctrine\metadata\orm;

use Doctrine\ORM\Mapping as ORM;

/**
 * Visit
 *
 * @ORM\Table(name="visit")
 * @ORM\Entity
 */
class Visit
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idVisit", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idvisit;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="idMatchedWith", type="integer", nullable=false)
     */
    private $idmatchedwith;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="visited_in", type="date", nullable=true)
     */
    private $visitedIn;


}

