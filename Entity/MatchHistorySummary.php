<?php

namespace Dowdow\LeagueOfLegendsAPIBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MatchHistorySummary
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Dowdow\LeagueOfLegendsAPIBundle\Entity\Repository\MatchHistorySummaryRepository")
 */
class MatchHistorySummary
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
     * @ORM\Column(name="assists", type="integer")
     */
    private $assists;

    /**
     * @var integer
     *
     * @ORM\Column(name="date", type="integer")
     */
    private $date;

    /**
     * @var integer
     *
     * @ORM\Column(name="deaths", type="integer")
     */
    private $deaths;

    /**
     * @var string
     *
     * @ORM\Column(name="gameMode", type="string", length=255)
     */
    private $gameMode;

    /**
     * @var boolean
     *
     * @ORM\Column(name="invalid", type="boolean")
     */
    private $invalid;

    /**
     * @var integer
     *
     * @ORM\Column(name="kills", type="integer")
     */
    private $kills;

    /**
     * @var integer
     *
     * @ORM\Column(name="mapId", type="integer")
     */
    private $mapId;

    /**
     * @var integer
     *
     * @ORM\Column(name="opposingTeamKills", type="integer")
     */
    private $opposingTeamKills;

    /**
     * @var string
     *
     * @ORM\Column(name="opposingTeamName", type="string", length=255)
     */
    private $opposingTeamName;

    /**
     * @var boolean
     *
     * @ORM\Column(name="win", type="boolean")
     */
    private $win;

    /**
     * @var Team
     *
     * @ORM\ManyToOne(targetEntity="Team", inversedBy="matchHistories")
     * @ORM\JoinColumn(name="team_id", referencedColumnName="fullId")
     */
    private $team;

    /**
     * @var Game
     *
     * @ORM\ManyToOne(targetEntity="Game", inversedBy="matchHistories")
     * @ORM\JoinColumn(name="game_id", referencedColumnName="gameId")
     */
    private $game;

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
     * Set assists
     *
     * @param integer $assists
     * @return MatchHistorySummary
     */
    public function setAssists($assists)
    {
        $this->assists = $assists;

        return $this;
    }

    /**
     * Get assists
     *
     * @return integer 
     */
    public function getAssists()
    {
        return $this->assists;
    }

    /**
     * Set date
     *
     * @param integer $date
     * @return MatchHistorySummary
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return integer 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set deaths
     *
     * @param integer $deaths
     * @return MatchHistorySummary
     */
    public function setDeaths($deaths)
    {
        $this->deaths = $deaths;

        return $this;
    }

    /**
     * Get deaths
     *
     * @return integer 
     */
    public function getDeaths()
    {
        return $this->deaths;
    }

    /**
     * Set gameMode
     *
     * @param string $gameMode
     * @return MatchHistorySummary
     */
    public function setGameMode($gameMode)
    {
        $this->gameMode = $gameMode;

        return $this;
    }

    /**
     * Get gameMode
     *
     * @return string 
     */
    public function getGameMode()
    {
        return $this->gameMode;
    }

    /**
     * Set invalid
     *
     * @param boolean $invalid
     * @return MatchHistorySummary
     */
    public function setInvalid($invalid)
    {
        $this->invalid = $invalid;

        return $this;
    }

    /**
     * Get invalid
     *
     * @return boolean 
     */
    public function getInvalid()
    {
        return $this->invalid;
    }

    /**
     * Set kills
     *
     * @param integer $kills
     * @return MatchHistorySummary
     */
    public function setKills($kills)
    {
        $this->kills = $kills;

        return $this;
    }

    /**
     * Get kills
     *
     * @return integer 
     */
    public function getKills()
    {
        return $this->kills;
    }

    /**
     * Set mapId
     *
     * @param integer $mapId
     * @return MatchHistorySummary
     */
    public function setMapId($mapId)
    {
        $this->mapId = $mapId;

        return $this;
    }

    /**
     * Get mapId
     *
     * @return integer 
     */
    public function getMapId()
    {
        return $this->mapId;
    }

    /**
     * Set opposingTeamKills
     *
     * @param integer $opposingTeamKills
     * @return MatchHistorySummary
     */
    public function setOpposingTeamKills($opposingTeamKills)
    {
        $this->opposingTeamKills = $opposingTeamKills;

        return $this;
    }

    /**
     * Get opposingTeamKills
     *
     * @return integer 
     */
    public function getOpposingTeamKills()
    {
        return $this->opposingTeamKills;
    }

    /**
     * Set opposingTeamName
     *
     * @param string $opposingTeamName
     * @return MatchHistorySummary
     */
    public function setOpposingTeamName($opposingTeamName)
    {
        $this->opposingTeamName = $opposingTeamName;

        return $this;
    }

    /**
     * Get opposingTeamName
     *
     * @return string 
     */
    public function getOpposingTeamName()
    {
        return $this->opposingTeamName;
    }

    /**
     * Set win
     *
     * @param boolean $win
     * @return MatchHistorySummary
     */
    public function setWin($win)
    {
        $this->win = $win;

        return $this;
    }

    /**
     * Get win
     *
     * @return boolean 
     */
    public function getWin()
    {
        return $this->win;
    }

    /**
     * Set team
     *
     * @param Team $team
     * @return MatchHistorySummary
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

    /**
     * Set game
     *
     * @param Game $game
     * @return MatchHistorySummary
     */
    public function setGame(Game $game = null)
    {
        $this->game = $game;

        return $this;
    }

    /**
     * Get game
     *
     * @return Game
     */
    public function getGame()
    {
        return $this->game;
    }
}
