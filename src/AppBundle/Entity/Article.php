<?php

namespace src/AppBundle/resources/config/doctrine/metadata/orm/;

use Doctrine\ORM\Mapping as ORM;

/**
 * Article
 *
 * @ORM\Table(name="article")
 * @ORM\Entity
 */
class Article
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ID_Article", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idArticle;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_User", type="integer", nullable=false)
     */
    private $idUser;

    /**
     * @var string
     *
     * @ORM\Column(name="Title", type="string", length=50, nullable=false)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="Text", type="string", length=300, nullable=false)
     */
    private $text;

    /**
     * @var string
     *
     * @ORM\Column(name="Pictur", type="string", length=200, nullable=false)
     */
    private $pictur;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Posted_in", type="datetime", nullable=false)
     */
    private $postedIn;


}

