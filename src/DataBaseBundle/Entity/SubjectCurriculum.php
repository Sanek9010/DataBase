<?php

namespace DataBaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SubjectCurriculum
 *
 * @ORM\Table(name="subject_curriculum", indexes={@ORM\Index(name="Subject_Subject_Curriculum", columns={"CodeOfSubject"}), @ORM\Index(name="Curriculum_Subject_Curriculum", columns={"NumberOfTheCurriculum"})})
 * @ORM\Entity
 */
class SubjectCurriculum
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
     * @ORM\Column(name="NumberOfSemester", type="integer", nullable=true)
     */
    private $numberofsemester;

    /**
     * @var string
     *
     * @ORM\Column(name="TypeOfExam", type="string", length=20, nullable=true)
     */
    private $typeofexam;

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


}

