<?php

namespace src/AppBundle/resources/config/doctrine/metadata/orm/;

use Doctrine\ORM\Mapping as ORM;

/**
 * ImageHotes
 *
 * @ORM\Table(name="image_hotes")
 * @ORM\Entity
 */
class ImageHotes
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_imgh", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idImgh;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_hote", type="integer", nullable=false)
     */
    private $idHote;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=255, nullable=false)
     */
    private $image;


}

