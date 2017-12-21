<?php

namespace DataBaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Curriculum
 *
 * @ORM\Table(name="curriculum", uniqueConstraints={@ORM\UniqueConstraint(name="NumberOfTheCurriculum_UNIQUE", columns={"NumberOfTheCurriculum"})}, indexes={@ORM\Index(name="Profile_Curriculum", columns={"NameOfProfile"})})
 * @ORM\Entity
 */
class Curriculum
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
     * @var \DateTime
     *
     * @ORM\Column(name="DateOfCreation", type="date", nullable=true)
     */
    private $dateofcreation;

    /**
     * @var string
     *
     * @ORM\Column(name="NumberOfTheCurriculum", type="string", length=10, nullable=false)
     */
    private $numberofthecurriculum;

    /**
     * @var string
     *
     * @ORM\Column(name="AssignedAcademicDegree", type="string", length=15, nullable=true)
     */
    private $assignedacademicdegree;

    /**
     * @var integer
     *
     * @ORM\Column(name="NormativeEducationPeriod", type="integer", nullable=true)
     */
    private $normativeeducationperiod;

    /**
     * @var string
     *
     * @ORM\Column(name="FormOfStudy", type="string", length=10, nullable=true)
     */
    private $formofstudy;

    /**
     * @var string
     *
     * @ORM\Column(name="FGOS", type="string", length=50, nullable=true)
     */
    private $fgos;

    /**
     * @var \DataBaseBundle\Entity\Profile
     *
     * @ORM\ManyToOne(targetEntity="DataBaseBundle\Entity\Profile")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="NameOfProfile", referencedColumnName="NameOfProfile")
     * })
     */
    private $nameofprofile;


}

