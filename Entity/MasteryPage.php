<?php

namespace Dowdow\LeagueOfLegendsAPIBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * MasteryPage
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Dowdow\LeagueOfLegendsAPIBundle\Entity\Repository\MasteryPageRepository")
 */
class MasteryPage
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     */
    private $id;

    /**
     * @var boolean
     *
     * @ORM\Column(name="current", type="boolean")
     */
    private $current;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var Summoner
     *
     * @ORM\ManyToOne(targetEntity="Summoner", inversedBy="masteryPages")
     * @ORM\JoinColumn(name="summoner_id", referencedColumnName="id")
     */
    private $summoner;

    /**
     * @var ArrayCollection
     *
     * @ORM\ManyToMany(targetEntity="Mastery", mappedBy="masteryPages")
     */
    private $masteries;

    /**
     * Constructor
     */
    public function __construct() {
        $this->masteries = new ArrayCollection();
    }

    /**
     * Set id
     *
     * @param integer $id
     * @return MasteryPage
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set current
     *
     * @param boolean $current
     * @return MasteryPage
     */
    public function setCurrent($current)
    {
        $this->current = $current;

        return $this;
    }

    /**
     * Get current
     *
     * @return boolean 
     */
    public function getCurrent()
    {
        return $this->current;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return MasteryPage
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set summoner
     *
     * @param Summoner $summoner
     * @return MasteryPage
     */
    public function setSummoner(Summoner $summoner = null)
    {
        $this->summoner = $summoner;

        return $this;
    }

    /**
     * Get summoner
     *
     * @return Summoner
     */
    public function getSummoner()
    {
        return $this->summoner;
    }

    /**
     * Add masteries
     *
     * @param Mastery $masteries
     * @return MasteryPage
     */
    public function addMastery(Mastery $masteries)
    {
        $this->masteries[] = $masteries;

        return $this;
    }

    /**
     * Remove masteries
     *
     * @param Mastery $masteries
     */
    public function removeMastery(Mastery $masteries)
    {
        $this->masteries->removeElement($masteries);
    }

    /**
     * Get masteries
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getMasteries()
    {
        return $this->masteries;
    }
}
