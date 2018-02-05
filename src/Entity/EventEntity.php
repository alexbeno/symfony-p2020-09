<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\EventEntityRepository")
 */
class EventEntity
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string")
     */
    private $uidEvent;

    /**
     * @ORM\Column(type="string")
     */
    private $title;

    /**
     * @ORM\Column(type="string")
     */
    private $type;

    /**
     * @ORM\Column(type="string")
     */
    private $description;

    /**
     * @ORM\Column(type="string")
     */
    private $startDate;

    /**
     * @ORM\Column(type="string")
     */
    private $endDate;

    /**
     * @ORM\Column(type="string")
     */
    private $place;

    /**
     * @ORM\Column(type="string")
     */
    private $city;

    /**
     * @ORM\Column(type="string")
     */
    private $address;

    /**
     * @ORM\Column(type="integer")
     */
    private $adultPrice;

    /**
     * @ORM\Column(type="integer")
     */
    private $teenagerPrice;

    /**
     * @ORM\Column(type="integer")
     */
    private $childPrice;

    /**
     * @ORM\Column(type="string")
     */
    private $organizer;

    /**
     * @ORM\Column(type="integer")
     */
    private $phone;



    // add your own fields
}
