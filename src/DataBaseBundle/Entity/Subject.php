<?php

namespace DataBaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Subject
 *
 * @ORM\Table(name="subject", uniqueConstraints={@ORM\UniqueConstraint(name="CodeOfSubject_UNIQUE", columns={"CodeOfSubject"})}, indexes={@ORM\Index(name="Department_Subject", columns={"CodeOfDepartment"})})
 * @ORM\Entity
 */
class Subject
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
     * @ORM\Column(name="NameOfSubject", type="string", length=50, nullable=true)
     */
    private $nameofsubject;

    /**
     * @var string
     *
     * @ORM\Column(name="CodeOfSubject", type="string", length=5, nullable=false)
     */
    private $codeofsubject;

    /**
     * @var \DataBaseBundle\Entity\Department
     *
     * @ORM\ManyToOne(targetEntity="DataBaseBundle\Entity\Department")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="CodeOfDepartment", referencedColumnName="CodeOfDepartment")
     * })
     */
    private $codeofdepartment;


}

