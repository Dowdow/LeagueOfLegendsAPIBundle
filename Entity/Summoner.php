<?php

namespace Dowdow\LeagueOfLegendsAPIBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Summoner
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Dowdow\LeagueOfLegendsAPIBundle\Entity\Repository\SummonerRepository")
 */
class Summoner
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var integer
     *
     * @ORM\Column(name="profileIconId", type="integer")
     */
    private $profileIconId;

    /**
     * @var integer
     *
     * @ORM\Column(name="revisionDate", type="integer")
     */
    private $revisionDate;

    /**
     * @var integer
     *
     * @ORM\Column(name="summonerLevel", type="integer")
     */
    private $summonerLevel;

    /**
     * @var ArrayCollection
     *
     * @ORM\OneToMany(targetEntity="MasteryPage", mappedBy="summoner")
     */
    private $masteryPages;

    /**
     * @var ArrayCollection
     *
     * @ORM\OneToMany(targetEntity="RunePage", mappedBy="summoner")
     */
    private $runesPages;

    /**
     * Constructor
     */
    public function __construct() {
        $this->masteryPages = new ArrayCollection();
        $this->runesPages = new ArrayCollection();
    }

    /**
     * Set id
     *
     * @param integer $id
     * @return Summoner
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
     * Set name
     *
     * @param string $name
     * @return Summoner
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
     * Set profileIconId
     *
     * @param integer $profileIconId
     * @return Summoner
     */
    public function setProfileIconId($profileIconId)
    {
        $this->profileIconId = $profileIconId;

        return $this;
    }

    /**
     * Get profileIconId
     *
     * @return integer 
     */
    public function getProfileIconId()
    {
        return $this->profileIconId;
    }

    /**
     * Set revisionDate
     *
     * @param integer $revisionDate
     * @return Summoner
     */
    public function setRevisionDate($revisionDate)
    {
        $this->revisionDate = $revisionDate;

        return $this;
    }

    /**
     * Get revisionDate
     *
     * @return integer 
     */
    public function getRevisionDate()
    {
        return $this->revisionDate;
    }

    /**
     * Set summonerLevel
     *
     * @param integer $summonerLevel
     * @return Summoner
     */
    public function setSummonerLevel($summonerLevel)
    {
        $this->summonerLevel = $summonerLevel;

        return $this;
    }

    /**
     * Get summonerLevel
     *
     * @return integer 
     */
    public function getSummonerLevel()
    {
        return $this->summonerLevel;
    }

    /**
     * Add masteryPages
     *
     * @param MasteryPage $masteryPages
     * @return Summoner
     */
    public function addMasteryPage(MasteryPage $masteryPages)
    {
        $this->masteryPages[] = $masteryPages;
        $masteryPages->setSummoner($this);
        return $this;
    }

    /**
     * Remove masteryPages
     *
     * @param MasteryPage $masteryPages
     */
    public function removeMasteryPage(MasteryPage $masteryPages)
    {
        $this->masteryPages->removeElement($masteryPages);
    }

    /**
     * Get masteryPages
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getMasteryPages()
    {
        return $this->masteryPages;
    }

    /**
     * Add runesPages
     *
     * @param RunePage $runesPages
     * @return Summoner
     */
    public function addRunesPage(RunePage $runesPages)
    {
        $this->runesPages[] = $runesPages;
        $runesPages->setSummoner($this);
        return $this;
    }

    /**
     * Remove runesPages
     *
     * @param RunePage $runesPages
     */
    public function removeRunesPage(RunePage $runesPages)
    {
        $this->runesPages->removeElement($runesPages);
    }

    /**
     * Get runesPages
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getRunesPages()
    {
        return $this->runesPages;
    }
}
