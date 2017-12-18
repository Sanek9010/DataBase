<?php

namespace DataBaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Profile
 *
 * @ORM\Table(name="profile", indexes={@ORM\Index(name="Specialty_Profile", columns={"CodeOfSpecialty"})})
 * @ORM\Entity
 */
class Profile
{
    /**
     * @var string
     *
     * @ORM\Column(name="NameOfProfile", type="string", length=100)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $nameofprofile;

    /**
     * @var \DataBaseBundle\Entity\Specialty
     *
     * @ORM\ManyToOne(targetEntity="DataBaseBundle\Entity\Specialty")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="CodeOfSpecialty", referencedColumnName="CodeOfSpecialty")
     * })
     */
    private $codeofspecialty;


}

