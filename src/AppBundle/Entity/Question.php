<?php

namespace src/AppBundle/resources/config/doctrine/metadata/orm/;

use Doctrine\ORM\Mapping as ORM;

/**
 * Question
 *
 * @ORM\Table(name="question")
 * @ORM\Entity
 */
class Question
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="Question", type="string", length=255, nullable=false)
     */
    private $question;

    /**
     * @var string
     *
     * @ORM\Column(name="REPONSE_V", type="string", length=255, nullable=false)
     */
    private $reponseV;

    /**
     * @var string
     *
     * @ORM\Column(name="REPONSE_F", type="string", length=255, nullable=false)
     */
    private $reponseF;

    /**
     * @var string
     *
     * @ORM\Column(name="REPONSE_F2", type="string", length=255, nullable=false)
     */
    private $reponseF2;


}

