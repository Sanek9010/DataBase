<?php

namespace DataBaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Specialty
 *
 * @ORM\Table(name="specialty", uniqueConstraints={@ORM\UniqueConstraint(name="CodeOfSpecialty_UNIQUE", columns={"CodeOfSpecialty"})}, indexes={@ORM\Index(name="Faculty_Specialty", columns={"CodeOfFaculty"})})
 * @ORM\Entity
 */
class Specialty
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
     * @ORM\Column(name="CodeOfSpecialty", type="string", length=6, nullable=false)
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

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getCodeofspecialty()
    {
        return $this->codeofspecialty;
    }

    /**
     * @param string $codeofspecialty
     */
    public function setCodeofspecialty(string $codeofspecialty)
    {
        $this->codeofspecialty = $codeofspecialty;
    }

    /**
     * @return string
     */
    public function getNameofspecialty()
    {
        return $this->nameofspecialty;
    }

    /**
     * @param string $nameofspecialty
     */
    public function setNameofspecialty(string $nameofspecialty)
    {
        $this->nameofspecialty = $nameofspecialty;
    }

    /**
     * @return Faculty
     */
    public function getCodeoffaculty(): Faculty
    {
        return $this->codeoffaculty;
    }

    /**
     * @param Faculty $codeoffaculty
     */
    public function setCodeoffaculty(Faculty $codeoffaculty)
    {
        $this->codeoffaculty = $codeoffaculty;
    }


}

