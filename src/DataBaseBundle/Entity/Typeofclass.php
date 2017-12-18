<?php

namespace DataBaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Typeofclass
 *
 * @ORM\Table(name="typeofclass")
 * @ORM\Entity
 */
class Typeofclass
{
    /**
     * @var string
     *
     * @ORM\Column(name="TypeOfClass", type="string", length=20)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $typeofclass;

    /**
     * @var string
     *
     * @ORM\Column(name="ShortFormOfRecord", type="string", length=5, nullable=true)
     */
    private $shortformofrecord;


}

