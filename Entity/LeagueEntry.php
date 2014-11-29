<?php

namespace Dowdow\LeagueOfLegendsAPIBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LeagueEntry
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Dowdow\LeagueOfLegendsAPIBundle\Entity\Repository\LeagueEntryRepository")
 */
class LeagueEntry
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="division", type="string", length=255)
     */
    private $division;

    /**
     * @var boolean
     *
     * @ORM\Column(name="isFreshBlood", type="boolean")
     */
    private $isFreshBlood;

    /**
     * @var boolean
     *
     * @ORM\Column(name="isHotStreak", type="boolean")
     */
    private $isHotStreak;

    /**
     * @var boolean
     *
     * @ORM\Column(name="isInactive", type="boolean")
     */
    private $isInactive;

    /**
     * @var boolean
     *
     * @ORM\Column(name="isVeteran", type="boolean")
     */
    private $isVeteran;

    /**
     * @var integer
     *
     * @ORM\Column(name="leaguePoints", type="integer")
     */
    private $leaguePoints;

    /**
     * @var string
     *
     * @ORM\Column(name="playerOrTeamId", type="string", length=255)
     */
    private $playerOrTeamId;

    /**
     * @var string
     *
     * @ORM\Column(name="playerOrTeamName", type="string", length=255)
     */
    private $playerOrTeamName;

    /**
     * @var integer
     *
     * @ORM\Column(name="wins", type="integer")
     */
    private $wins;

    /**
     * @var League
     *
     * @ORM\ManyToOne(targetEntity="League", inversedBy="leagueEntries")
     * @ORM\JoinColumn(name="league_id", referencedColumnName="id")
     */
    private $league;

    /**
     * @var MiniSeries
     *
     * @ORM\OneToOne(targetEntity="MiniSeries", mappedBy="leagueentry")
     */
    private $miniseries;

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
     * Set division
     *
     * @param string $division
     * @return LeagueEntry
     */
    public function setDivision($division)
    {
        $this->division = $division;

        return $this;
    }

    /**
     * Get division
     *
     * @return string 
     */
    public function getDivision()
    {
        return $this->division;
    }

    /**
     * Set isFreshBlood
     *
     * @param boolean $isFreshBlood
     * @return LeagueEntry
     */
    public function setIsFreshBlood($isFreshBlood)
    {
        $this->isFreshBlood = $isFreshBlood;

        return $this;
    }

    /**
     * Get isFreshBlood
     *
     * @return boolean 
     */
    public function getIsFreshBlood()
    {
        return $this->isFreshBlood;
    }

    /**
     * Set isHotStreak
     *
     * @param boolean $isHotStreak
     * @return LeagueEntry
     */
    public function setIsHotStreak($isHotStreak)
    {
        $this->isHotStreak = $isHotStreak;

        return $this;
    }

    /**
     * Get isHotStreak
     *
     * @return boolean 
     */
    public function getIsHotStreak()
    {
        return $this->isHotStreak;
    }

    /**
     * Set isInactive
     *
     * @param boolean $isInactive
     * @return LeagueEntry
     */
    public function setIsInactive($isInactive)
    {
        $this->isInactive = $isInactive;

        return $this;
    }

    /**
     * Get isInactive
     *
     * @return boolean 
     */
    public function getIsInactive()
    {
        return $this->isInactive;
    }

    /**
     * Set isVeteran
     *
     * @param boolean $isVeteran
     * @return LeagueEntry
     */
    public function setIsVeteran($isVeteran)
    {
        $this->isVeteran = $isVeteran;

        return $this;
    }

    /**
     * Get isVeteran
     *
     * @return boolean 
     */
    public function getIsVeteran()
    {
        return $this->isVeteran;
    }

    /**
     * Set leaguePoints
     *
     * @param integer $leaguePoints
     * @return LeagueEntry
     */
    public function setLeaguePoints($leaguePoints)
    {
        $this->leaguePoints = $leaguePoints;

        return $this;
    }

    /**
     * Get leaguePoints
     *
     * @return integer 
     */
    public function getLeaguePoints()
    {
        return $this->leaguePoints;
    }

    /**
     * Set playerOrTeamId
     *
     * @param string $playerOrTeamId
     * @return LeagueEntry
     */
    public function setPlayerOrTeamId($playerOrTeamId)
    {
        $this->playerOrTeamId = $playerOrTeamId;

        return $this;
    }

    /**
     * Get playerOrTeamId
     *
     * @return string 
     */
    public function getPlayerOrTeamId()
    {
        return $this->playerOrTeamId;
    }

    /**
     * Set playerOrTeamName
     *
     * @param string $playerOrTeamName
     * @return LeagueEntry
     */
    public function setPlayerOrTeamName($playerOrTeamName)
    {
        $this->playerOrTeamName = $playerOrTeamName;

        return $this;
    }

    /**
     * Get playerOrTeamName
     *
     * @return string 
     */
    public function getPlayerOrTeamName()
    {
        return $this->playerOrTeamName;
    }

    /**
     * Set wins
     *
     * @param integer $wins
     * @return LeagueEntry
     */
    public function setWins($wins)
    {
        $this->wins = $wins;

        return $this;
    }

    /**
     * Get wins
     *
     * @return integer 
     */
    public function getWins()
    {
        return $this->wins;
    }

    /**
     * Set league
     *
     * @param League $league
     * @return LeagueEntry
     */
    public function setLeague(League $league = null)
    {
        $this->league = $league;

        return $this;
    }

    /**
     * Get league
     *
     * @return League
     */
    public function getLeague()
    {
        return $this->league;
    }

    /**
     * Set miniseries
     *
     * @param MiniSeries $miniseries
     * @return LeagueEntry
     */
    public function setMiniseries(MiniSeries $miniseries = null)
    {
        $this->miniseries = $miniseries;

        return $this;
    }

    /**
     * Get miniseries
     *
     * @return MiniSeries
     */
    public function getMiniseries()
    {
        return $this->miniseries;
    }
}
