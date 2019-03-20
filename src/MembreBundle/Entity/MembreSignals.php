<?php

namespace src\MembreBundle\resources\config\doctrine\metadata\orm;

use Doctrine\ORM\Mapping as ORM;

/**
 * MembreSignals
 *
 * @ORM\Table(name="membre_signals", indexes={@ORM\Index(name="FK_id", columns={"id"}), @ORM\Index(name="FK_idMatchedWith", columns={"idMatchedWith"})})
 * @ORM\Entity
 */
class MembreSignals
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idSignal", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idsignal;

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
     * @var string
     *
     * @ORM\Column(name="cause", type="text", length=65535, nullable=false)
     */
    private $cause;


}

