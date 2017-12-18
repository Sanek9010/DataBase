<?php

namespace DataBaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Specialty
 *
 * @ORM\Table(name="specialty", indexes={@ORM\Index(name="Faculty_Specialty", columns={"CodeOfFaculty"})})
 * @ORM\Entity
 */
class Specialty
{
    /**
     * @var string
     *
     * @ORM\Column(name="CodeOfSpecialty", type="string", length=6)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codeofspecialty;

    /**
     * @var string
     *
     * @ORM\Column(name="NameOfSpecialty", type="string", length=50, nullable=true)
     */
    private $nameofspecialty;

    /**
     * @var \DataBaseBundle\Entity\Faculty
     *
     * @ORM\ManyToOne(targetEntity="DataBaseBundle\Entity\Faculty")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="CodeOfFaculty", referencedColumnName="CodeOfFaculty")
     * })
     */
    private $codeoffaculty;


}

