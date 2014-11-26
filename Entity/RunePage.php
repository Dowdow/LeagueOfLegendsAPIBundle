<?php

namespace Dowdow\LeagueOfLegendsAPIBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * RunePage
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Dowdow\LeagueOfLegendsAPIBundle\Entity\Repository\RunePageRepository")
 */
class RunePage
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
     * @ORM\ManyToOne(targetEntity="Summoner", inversedBy="runePages")
     * @ORM\JoinColumn(name="summoner_id", referencedColumnName="id")
     */
    private $summoner;

    /**
     * @var ArrayCollection
     *
     * @ORM\ManyToMany(targetEntity="Rune", mappedBy="runePages")
     */
    private $runes;

    /**
     * Constructor
     */
    public function __construct() {
        $this->runes = new ArrayCollection();
    }

    /**
     * Set id
     *
     * @param integer $id
     * @return RunePage
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
     * @return RunePage
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
     * @return RunePage
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
     * @return RunePage
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
     * Add runes
     *
     * @param Rune $runes
     * @return RunePage
     */
    public function addRune(Rune $runes)
    {
        $this->runes[] = $runes;

        return $this;
    }

    /**
     * Remove runes
     *
     * @param Rune $runes
     */
    public function removeRune(Rune $runes)
    {
        $this->runes->removeElement($runes);
    }

    /**
     * Get runes
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getRunes()
    {
        return $this->runes;
    }
}
