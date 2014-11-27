<?php

namespace Dowdow\LeagueOfLegendsAPIBundle\Entity;

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
     * @ORM\Column(name="teamId", type="integer")
     */
    private $teamId;

    /**
     * @var Summoner
     *
     * @ORM\ManyToOne(targetEntity="Summoner", inversedBy="players")
     * @ORM\JoinColumn(name="summoner_id", referencedColumnName="id")
     * @ORM\Id
     */
    private $summoner;

    /**
     * @var Champion
     *
     * @ORM\ManyToOne(targetEntity="Champion", inversedBy="players")
     * @ORM\JoinColumn(name="champion_id", referencedColumnName="id")
     * @ORM\Id
     */
    private $champion;

    /**
     * @var Game
     *
     * @ORM\ManyToOne(targetEntity="Game", inversedBy="players")
     * @ORM\JoinColumn(name="game_id", referencedColumnName="gameId")
     * @ORM\Id
     */
    private $game;

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
}
