<?php

namespace src/AppBundle/resources/config/doctrine/metadata/orm/;

use Doctrine\ORM\Mapping as ORM;

/**
 * QuestionAttempts
 *
 * @ORM\Table(name="question_attempts")
 * @ORM\Entity
 */
class QuestionAttempts
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_qa", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idQa;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_question", type="integer", nullable=false)
     */
    private $idQuestion;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_user", type="integer", nullable=false)
     */
    private $idUser;

    /**
     * @var integer
     *
     * @ORM\Column(name="attempts", type="integer", nullable=false)
     */
    private $attempts;


}

