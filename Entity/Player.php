<?php

namespace Dowdow\LeagueOfLegendsAPIBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Player
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Dowdow\LeagueOfLegendsAPIBundle\Entity\Repository\PlayerRepository")
 */
class Player
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
     * @ORM\Column(name="teamId", type="integer")
     */
    private $teamId;

    /**
     * @var Summoner
     *
     * @ORM\ManyToOne(targetEntity="Summoner", inversedBy="players")
     * @ORM\JoinColumn(name="summoner_id", referencedColumnName="id")
     */
    private $summoner;

    /**
     * @var Champion
     *
     * @ORM\ManyToOne(targetEntity="Champion", inversedBy="players")
     * @ORM\JoinColumn(name="champion_id", referencedColumnName="id")
     */
    private $champion;

    /**
     * @var Game
     *
     * @ORM\ManyToOne(targetEntity="Game", inversedBy="players")
     * @ORM\JoinColumn(name="game_id", referencedColumnName="gameId")
     */
    private $game;

    /**
     * @var ArrayCollection
     *
     * @ORM\OneToMany(targetEntity="TeamMemberInfo", mappedBy="player")
     */
    private $teamMemberInfos;

    /**
     * Constructor
     */
    public function __construct() {
        $this->teamMemberInfos = new ArrayCollection();
    }

    /**
     * Set id
     *
     * @param $id
     * @return integer
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
     * Set teamId
     *
     * @param integer $teamId
     * @return Player
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
     * Set summoner
     *
     * @param Summoner $summoner
     * @return Player
     */
    public function setSummoner(Summoner $summoner)
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
     * Set champion
     *
     * @param Champion $champion
     * @return Player
     */
    public function setChampion(Champion $champion)
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
     * Set game
     *
     * @param Game $game
     * @return Player
     */
    public function setGame(Game $game)
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

    /**
     * Add teamMemberInfos
     *
     * @param TeamMemberInfo $teamMemberInfos
     * @return Player
     */
    public function addTeamMemberInfo(TeamMemberInfo $teamMemberInfos)
    {
        $this->teamMemberInfos[] = $teamMemberInfos;
        $teamMemberInfos->setPlayer($this);
        return $this;
    }

    /**
     * Remove teamMemberInfos
     *
     * @param TeamMemberInfo $teamMemberInfos
     */
    public function removeTeamMemberInfo(TeamMemberInfo $teamMemberInfos)
    {
        $this->teamMemberInfos->removeElement($teamMemberInfos);
    }

    /**
     * Get teamMemberInfos
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTeamMemberInfos()
    {
        return $this->teamMemberInfos;
    }
}
