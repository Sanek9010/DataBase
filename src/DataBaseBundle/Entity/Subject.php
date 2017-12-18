<?php

namespace DataBaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Subject
 *
 * @ORM\Table(name="subject", indexes={@ORM\Index(name="Department_Subject", columns={"CodeOfDepartment"})})
 * @ORM\Entity
 */
class Subject
{
    /**
     * @var string
     *
     * @ORM\Column(name="CodeOfSubject", type="string", length=5)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codeofsubject;

    /**
     * @var string
     *
     * @ORM\Column(name="NameOfSubject", type="string", length=50, nullable=true)
     */
    private $nameofsubject;

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

