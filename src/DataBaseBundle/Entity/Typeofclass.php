<?php

namespace DataBaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Typeofclass
 *
 * @ORM\Table(name="typeofclass", uniqueConstraints={@ORM\UniqueConstraint(name="TypeOfClass_UNIQUE", columns={"TypeOfClass"})})
 * @ORM\Entity
 */
class Typeofclass
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
     * @ORM\Column(name="TypeOfClass", type="string", length=20, nullable=false)
     */
    private $typeofclass;

    /**
     * @var string
     *
     * @ORM\Column(name="ShortFormOfRecord", type="string", length=5, nullable=true)
     */
    private $shortformofrecord;


}

