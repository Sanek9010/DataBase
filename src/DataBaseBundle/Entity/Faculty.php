<?php

namespace DataBaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Faculty
 *
 * @ORM\Table(name="faculty", uniqueConstraints={@ORM\UniqueConstraint(name="CodeOfFaculty_UNIQUE", columns={"CodeOfFaculty"})})
 * @ORM\Entity
 */
class Faculty
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
     * @ORM\Column(name="NameOfFaculty", type="string", length=50, nullable=true)
     */
    private $nameoffaculty;

    /**
     * @var string
     *
     * @ORM\Column(name="CodeOfFaculty", type="string", length=10, nullable=false)
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
    public function getNameoffaculty()
    {
        return $this->nameoffaculty;
    }

    /**
     * @param string $nameoffaculty
     */
    public function setNameoffaculty(string $nameoffaculty)
    {
        $this->nameoffaculty = $nameoffaculty;
    }

    /**
     * @return string
     */
    public function getCodeoffaculty()
    {
        return $this->codeoffaculty;
    }

    /**
     * @param string $codeoffaculty
     */
    public function setCodeoffaculty(string $codeoffaculty)
    {
        $this->codeoffaculty = $codeoffaculty;
    }




}

