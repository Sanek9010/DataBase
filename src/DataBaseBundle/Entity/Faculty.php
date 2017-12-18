<?php

namespace DataBaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Faculty
 *
 * @ORM\Table(name="faculty")
 * @ORM\Entity
 */
class Faculty
{
    /**
     * @var string
     *
     * @ORM\Column(name="CodeOfFaculty", type="string", length=10)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codeoffaculty;

    /**
     * @var string
     *
     * @ORM\Column(name="NameOfFaculty", type="string", length=50, nullable=true)
     */
    private $nameoffaculty;


}

