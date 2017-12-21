<?php

namespace DataBaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Department
 *
 * @ORM\Table(name="department", uniqueConstraints={@ORM\UniqueConstraint(name="CodeOfDepartment_UNIQUE", columns={"CodeOfDepartment"})}, indexes={@ORM\Index(name="Faculty_Department", columns={"CodeOfFaculty"})})
 * @ORM\Entity
 */
class Department
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
     * @ORM\Column(name="NameOfDepartment", type="string", length=50, nullable=true)
     */
    private $nameofdepartment;

    /**
     * @var string
     *
     * @ORM\Column(name="CodeOfDepartment", type="string", length=2, nullable=false)
     */
    private $codeofdepartment;

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

