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

    /**
     * @ORM\Column(type="string")
     */
    private $imageOne;

    /**
     * @ORM\Column(type="string")
     */
    private $imageTwo;


    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getUidEvent()
    {
        return $this->uidEvent;
    }

    /**
     * @param mixed $uidEvent
     */
    public function setUidEvent($uidEvent)
    {
        $this->uidEvent = $uidEvent;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * @param mixed $startDate
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;
    }

    /**
     * @return mixed
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * @param mixed $endDate
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;
    }

    /**
     * @return mixed
     */
    public function getPlace()
    {
        return $this->place;
    }

    /**
     * @param mixed $place
     */
    public function setPlace($place)
    {
        $this->place = $place;
    }

    /**
     * @return mixed
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param mixed $city
     */
    public function setCity($city)
    {
        $this->city = $city;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param mixed $address
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }

    /**
     * @return mixed
     */
    public function getAdultPrice()
    {
        return $this->adultPrice;
    }

    /**
     * @param mixed $adultPrice
     */
    public function setAdultPrice($adultPrice)
    {
        $this->adultPrice = $adultPrice;
    }

    /**
     * @return mixed
     */
    public function getTeenagerPrice()
    {
        return $this->teenagerPrice;
    }

    /**
     * @param mixed $teenagerPrice
     */
    public function setTeenagerPrice($teenagerPrice)
    {
        $this->teenagerPrice = $teenagerPrice;
    }

    /**
     * @return mixed
     */
    public function getChildPrice()
    {
        return $this->childPrice;
    }

    /**
     * @param mixed $childPrice
     */
    public function setChildPrice($childPrice)
    {
        $this->childPrice = $childPrice;
    }

    /**
     * @return mixed
     */
    public function getOrganizer()
    {
        return $this->organizer;
    }

    /**
     * @param mixed $organizer
     */
    public function setOrganizer($organizer)
    {
        $this->organizer = $organizer;
    }

    /**
     * @return mixed
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param mixed $phone
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    /**
     * @return mixed
     */
    public function getImageOne()
    {
        return $this->imageOne;
    }

    /**
     * @param mixed $imageOne
     */
    public function setImageOne($imageOne)
    {
        $this->imageOne = $imageOne;
    }

    /**
     * @return mixed
     */
    public function getImageTwo()
    {
        return $this->imageTwo;
    }

    /**
     * @param mixed $imageTwo
     */
    public function setImageTwo($imageTwo)
    {
        $this->imageTwo = $imageTwo;
    }




    // add your own fields
}
