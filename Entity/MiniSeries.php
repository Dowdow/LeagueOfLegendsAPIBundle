<?php

namespace Dowdow\LeagueOfLegendsAPIBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MiniSeries
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Dowdow\LeagueOfLegendsAPIBundle\Entity\Repository\MiniSeriesRepository")
 */
class MiniSeries
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
     * @ORM\Column(name="losses", type="integer")
     */
    private $losses;

    /**
     * @var string
     *
     * @ORM\Column(name="progress", type="string", length=255)
     */
    private $progress;

    /**
     * @var integer
     *
     * @ORM\Column(name="target", type="integer")
     */
    private $target;

    /**
     * @var integer
     *
     * @ORM\Column(name="wins", type="integer")
     */
    private $wins;

    /**
     * @var LeagueEntry
     *
     * @ORM\OneToOne(targetEntity="LeagueEntry", inversedBy="miniseries")
     * @ORM\JoinColumn(name="leagueentry_id", referencedColumnName="id")
     */
    private $leagueEntry;

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
     * Set losses
     *
     * @param integer $losses
     * @return MiniSeries
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
     * Set progress
     *
     * @param string $progress
     * @return MiniSeries
     */
    public function setProgress($progress)
    {
        $this->progress = $progress;

        return $this;
    }

    /**
     * Get progress
     *
     * @return string 
     */
    public function getProgress()
    {
        return $this->progress;
    }

    /**
     * Set target
     *
     * @param integer $target
     * @return MiniSeries
     */
    public function setTarget($target)
    {
        $this->target = $target;

        return $this;
    }

    /**
     * Get target
     *
     * @return integer 
     */
    public function getTarget()
    {
        return $this->target;
    }

    /**
     * Set wins
     *
     * @param integer $wins
     * @return MiniSeries
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
     * Set leagueEntry
     *
     * @param \Dowdow\LeagueOfLegendsAPIBundle\Entity\LeagueEntry $leagueEntry
     * @return MiniSeries
     */
    public function setLeagueEntry(LeagueEntry $leagueEntry = null)
    {
        $this->leagueEntry = $leagueEntry;

        return $this;
    }

    /**
     * Get leagueEntry
     *
     * @return \Dowdow\LeagueOfLegendsAPIBundle\Entity\LeagueEntry 
     */
    public function getLeagueEntry()
    {
        return $this->leagueEntry;
    }
}
