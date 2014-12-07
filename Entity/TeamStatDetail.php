<?php

namespace Dowdow\LeagueOfLegendsAPIBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TeamStatDetail
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Dowdow\LeagueOfLegendsAPIBundle\Entity\TeamStatDetailRepository")
 */
class TeamStatDetail
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
     * @var integer
     *
     * @ORM\Column(name="averageGamePlayed", type="integer")
     */
    private $averageGamePlayed;

    /**
     * @var integer
     *
     * @ORM\Column(name="losses", type="integer")
     */
    private $losses;

    /**
     * @var string
     *
     * @ORM\Column(name="teamStatType", type="string", length=255)
     */
    private $teamStatType;

    /**
     * @var integer
     *
     * @ORM\Column(name="wins", type="integer")
     */
    private $wins;

    /**
     * @var Team
     *
     * @ORM\ManyToOne(targetEntity="Team", inversedBy="teamstatdetails")
     * @ORM\JoinColumn(name="team_id", referencedColumnName="fullId")
     */
    private $team;

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
     * Set averageGamePlayed
     *
     * @param integer $averageGamePlayed
     * @return TeamStatDetail
     */
    public function setAverageGamePlayed($averageGamePlayed)
    {
        $this->averageGamePlayed = $averageGamePlayed;

        return $this;
    }

    /**
     * Get averageGamePlayed
     *
     * @return integer 
     */
    public function getAverageGamePlayed()
    {
        return $this->averageGamePlayed;
    }

    /**
     * Set losses
     *
     * @param integer $losses
     * @return TeamStatDetail
     */
    public function setLosses($losses)
    {
        $this->losses = $losses;

        return $this;
    }

    /**
     * Get losses
     *
     * @return integer 
     */
    public function getLosses()
    {
        return $this->losses;
    }

    /**
     * Set teamStatType
     *
     * @param string $teamStatType
     * @return TeamStatDetail
     */
    public function setTeamStatType($teamStatType)
    {
        $this->teamStatType = $teamStatType;

        return $this;
    }

    /**
     * Get teamStatType
     *
     * @return string 
     */
    public function getTeamStatType()
    {
        return $this->teamStatType;
    }

    /**
     * Set wins
     *
     * @param integer $wins
     * @return TeamStatDetail
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
     * Set team
     *
     * @param Team $team
     * @return TeamStatDetail
     */
    public function setTeam(Team $team = null)
    {
        $this->team = $team;

        return $this;
    }

    /**
     * Get team
     *
     * @return Team
     */
    public function getTeam()
    {
        return $this->team;
    }
}
