<?php

namespace DataBaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SubjectCurriculumTypeofclass
 *
 * @ORM\Table(name="subject_curriculum_typeofclass", indexes={@ORM\Index(name="Curriculum_Subject_Curriculum_TypeOfClass", columns={"NumberOfTheCurriculum"}), @ORM\Index(name="TypeOfClass_Subject_Curriculum_TypeOfClass", columns={"TypeOfClass"}), @ORM\Index(name="Subject_Subject_Curriculum_TypeOfClass", columns={"CodeOfSubject"})})
 * @ORM\Entity
 */
class SubjectCurriculumTypeofclass
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
     * @var integer
     *
     * @ORM\Column(name="NumberOfHours", type="integer", nullable=false)
     */
    private $numberofhours;

    /**
     * @var \DataBaseBundle\Entity\Curriculum
     *
     * @ORM\ManyToOne(targetEntity="DataBaseBundle\Entity\Curriculum")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="NumberOfTheCurriculum", referencedColumnName="NumberOfTheCurriculum")
     * })
     */
    private $numberofthecurriculum;

    /**
     * @var \DataBaseBundle\Entity\Subject
     *
     * @ORM\ManyToOne(targetEntity="DataBaseBundle\Entity\Subject")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="CodeOfSubject", referencedColumnName="CodeOfSubject")
     * })
     */
    private $codeofsubject;

    /**
     * @var \DataBaseBundle\Entity\Typeofclass
     *
     * @ORM\ManyToOne(targetEntity="DataBaseBundle\Entity\Typeofclass")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="TypeOfClass", referencedColumnName="TypeOfClass")
     * })
     */
    private $typeofclass;


}

