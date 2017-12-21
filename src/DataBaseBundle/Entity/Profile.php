<?php

namespace DataBaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Profile
 *
 * @ORM\Table(name="profile", uniqueConstraints={@ORM\UniqueConstraint(name="NameOfProfile_UNIQUE", columns={"NameOfProfile"})}, indexes={@ORM\Index(name="Specialty_Profile", columns={"CodeOfSpecialty"})})
 * @ORM\Entity
 */
class Profile
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="NameOfProfile", type="string", length=100, nullable=false)
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

