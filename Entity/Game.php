<?php

namespace Dowdow\LeagueOfLegendsAPIBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Game
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Dowdow\LeagueOfLegendsAPIBundle\Entity\Repository\GameRepository")
 */
class Game
{
    /**
     * @var integer
     *
     * @ORM\Column(name="gameId", type="integer")
     * @ORM\Id
     */
    private $gameId;

    /**
     * @var integer
     *
     * @ORM\Column(name="createDate", type="integer")
     */
    private $createDate;

    /**
     * @var string
     *
     * @ORM\Column(name="gameMode", type="string", length=255)
     */
    private $gameMode;

    /**
     * @var string
     *
     * @ORM\Column(name="gameType", type="string", length=255)
     */
    private $gameType;

    /**
     * @var boolean
     *
     * @ORM\Column(name="invalid", type="boolean")
     */
    private $invalid;

    /**
     * @var integer
     *
     * @ORM\Column(name="ipEarned", type="integer")
     */
    private $ipEarned;

    /**
     * @var integer
     *
     * @ORM\Column(name="level", type="integer")
     */
    private $level;

    /**
     * @var integer
     *
     * @ORM\Column(name="mapId", type="integer")
     */
    private $mapId;

    /**
     * @var integer
     *
     * @ORM\Column(name="spell1", type="integer")
     */
    private $spell1;

    /**
     * @var integer
     *
     * @ORM\Column(name="spell2", type="integer")
     */
    private $spell2;

    /**
     * @var string
     *
     * @ORM\Column(name="subType", type="string", length=255)
     */
    private $subType;

    /**
     * @var integer
     *
     * @ORM\Column(name="teamId", type="integer")
     */
    private $teamId;

    /**
     * @var Champion
     *
     * @ORM\ManyToOne(targetEntity="Champion", inversedBy="games")
     * @ORM\JoinColumn(name="champion_id", referencedColumnName="id")
     */
    private $champion;

    /**
     * @var Summoner
     *
     * @ORM\ManyToOne(targetEntity="Summoner", inversedBy="games")
     * @ORM\JoinColumn(name="summoner_id", referencedColumnName="id")
     * @ORM\Id
     */
    private $summoner;

    /**
     * @var ArrayCollection
     *
     * @ORM\OneToMany(targetEntity="Player", mappedBy="game")
     */
    private $players;

    /**
     * @var RawStats
     *
     * @ORM\OneToOne(targetEntity="RawStats", inversedBy="game")
     */
    private $rawstats;

    /**
     * Constructor
     */
    public function __construct() {
        $this->players = new ArrayCollection();
    }

    /**
     * Set id
     *
     * @param integer $gameId
     * @return integer
     */
    public function setGameId($gameId)
    {
        $this->gameId = $gameId;

        return $this;
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getGameId()
    {
        return $this->gameId;
    }

    /**
     * Set createDate
     *
     * @param integer $createDate
     * @return Game
     */
    public function setCreateDate($createDate)
    {
        $this->createDate = $createDate;

        return $this;
    }

    /**
     * Get createDate
     *
     * @return integer 
     */
    public function getCreateDate()
    {
        return $this->createDate;
    }

    /**
     * Set gameMode
     *
     * @param string $gameMode
     * @return Game
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
     * Set gameType
     *
     * @param string $gameType
     * @return Game
     */
    public function setGameType($gameType)
    {
        $this->gameType = $gameType;

        return $this;
    }

    /**
     * Get gameType
     *
     * @return string 
     */
    public function getGameType()
    {
        return $this->gameType;
    }

    /**
     * Set invalid
     *
     * @param boolean $invalid
     * @return Game
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
     * Set ipEarned
     *
     * @param integer $ipEarned
     * @return Game
     */
    public function setIpEarned($ipEarned)
    {
        $this->ipEarned = $ipEarned;

        return $this;
    }

    /**
     * Get ipEarned
     *
     * @return integer 
     */
    public function getIpEarned()
    {
        return $this->ipEarned;
    }

    /**
     * Set level
     *
     * @param integer $level
     * @return Game
     */
    public function setLevel($level)
    {
        $this->level = $level;

        return $this;
    }

    /**
     * Get level
     *
     * @return integer 
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * Set mapId
     *
     * @param integer $mapId
     * @return Game
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
     * Set spell1
     *
     * @param integer $spell1
     * @return Game
     */
    public function setSpell1($spell1)
    {
        $this->spell1 = $spell1;

        return $this;
    }

    /**
     * Get spell1
     *
     * @return integer 
     */
    public function getSpell1()
    {
        return $this->spell1;
    }

    /**
     * Set spell2
     *
     * @param integer $spell2
     * @return Game
     */
    public function setSpell2($spell2)
    {
        $this->spell2 = $spell2;

        return $this;
    }

    /**
     * Get spell2
     *
     * @return integer 
     */
    public function getSpell2()
    {
        return $this->spell2;
    }

    /**
     * Set subType
     *
     * @param string $subType
     * @return Game
     */
    public function setSubType($subType)
    {
        $this->subType = $subType;

        return $this;
    }

    /**
     * Get subType
     *
     * @return string 
     */
    public function getSubType()
    {
        return $this->subType;
    }

    /**
     * Set teamId
     *
     * @param integer $teamId
     * @return Game
     */
    public function setTeamId($teamId)
    {
        $this->teamId = $teamId;

        return $this;
    }

    /**
     * Get teamId
     *
     * @return integer 
     */
    public function getTeamId()
    {
        return $this->teamId;
    }

    /**
     * Set champion
     *
     * @param Champion $champion
     * @return Game
     */
    public function setChampion(Champion $champion = null)
    {
        $this->champion = $champion;

        return $this;
    }

    /**
     * Get champion
     *
     * @return Champion
     */
    public function getChampion()
    {
        return $this->champion;
    }

    /**
     * Set summoner
     *
     * @param Summoner $summoner
     * @return Game
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
     * Add players
     *
     * @param Player $players
     * @return Game
     */
    public function addPlayer(Player $players)
    {
        $this->players[] = $players;
        $players->setGame($this);
        return $this;
    }

    /**
     * Remove players
     *
     * @param Player $players
     */
    public function removePlayer(Player $players)
    {
        $this->players->removeElement($players);
    }

    /**
     * Get players
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPlayers()
    {
        return $this->players;
    }

    /**
     * Set rawstats
     *
     * @param RawStats $rawstats
     * @return Game
     */
    public function setRawstats(RawStats $rawstats = null)
    {
        $this->rawstats = $rawstats;

        return $this;
    }

    /**
     * Get rawstats
     *
     * @return RawStats
     */
    public function getRawstats()
    {
        return $this->rawstats;
    }
}
