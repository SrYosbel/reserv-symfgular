<?php

namespace App\Entity;

use App\Repository\ContactTypeRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ContactTypeRepository::class)
 */
class ContactType
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $type_name;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Reservation", inversedBy="$type")
     */
    private $reservation;
}
