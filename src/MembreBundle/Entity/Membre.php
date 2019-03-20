<?php

namespace src\MembreBundle\resources\config\doctrine\metadata\orm;

use Doctrine\ORM\Mapping as ORM;

/**
 * Membre
 *
 * @ORM\Table(name="membre")
 * @ORM\Entity
 */
class Membre
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=30, nullable=false)
     */
    private $username;

    /**
     * @var string
     *
     * @ORM\Column(name="salt", type="string", length=30, nullable=false)
     */
    private $salt;

    /**
     * @var string
     *
     * @ORM\Column(name="adressMail", type="string", length=30, nullable=false)
     */
    private $adressmail;

    /**
     * @var string
     *
     * @ORM\Column(name="ImageProfil", type="string", length=100, nullable=true)
     */
    private $imageprofil;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="address", type="string", length=300, nullable=true)
     */
    private $address;

    /**
     * @var string
     *
     * @ORM\Column(name="firstName", type="string", length=50, nullable=true)
     */
    private $firstname;

    /**
     * @var string
     *
     * @ORM\Column(name="lastName", type="string", length=60, nullable=true)
     */
    private $lastname;

    /**
     * @var string
     *
     * @ORM\Column(name="worked_in", type="string", length=100, nullable=true)
     */
    private $workedIn;

    /**
     * @var string
     *
     * @ORM\Column(name="studied_in", type="string", length=100, nullable=true)
     */
    private $studiedIn;

    /**
     * @var string
     *
     * @ORM\Column(name="IMAGE", type="string", length=255, nullable=true)
     */
    private $image;

    /**
     * @var integer
     *
     * @ORM\Column(name="age", type="integer", nullable=false)
     */
    private $age;

    /**
     * @var string
     *
     * @ORM\Column(name="sexe", type="string", length=255, nullable=false)
     */
    private $sexe = 'M';


}

