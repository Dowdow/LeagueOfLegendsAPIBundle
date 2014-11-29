<?php

namespace Dowdow\LeagueOfLegendsAPIBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * League
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Dowdow\LeagueOfLegendsAPIBundle\Entity\Repository\LeagueRepository")
 */
class League
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
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="participantId", type="string", length=255)
     */
    private $participantId;

    /**
     * @var string
     *
     * @ORM\Column(name="queue", type="string", length=255)
     */
    private $queue;

    /**
     * @var string
     *
     * @ORM\Column(name="tier", type="string", length=255)
     */
    private $tier;

    /**
     * @var ArrayCollection
     *
     * @ORM\OneToMany(targetEntity="LeagueEntry", mappedBy="league")
     */
    private $leagueEntries;

    /**
     * Constructor
     */
    public function __construct() {
        $this->leagueEntries = new ArrayCollection();
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
     * @return League
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
     * Set participantId
     *
     * @param string $participantId
     * @return League
     */
    public function setParticipantId($participantId)
    {
        $this->participantId = $participantId;

        return $this;
    }

    /**
     * Get participantId
     *
     * @return string
     */
    public function getParticipantId()
    {
        return $this->participantId;
    }

    /**
     * Set queue
     *
     * @param string $queue
     * @return League
     */
    public function setQueue($queue)
    {
        $this->queue = $queue;

        return $this;
    }

    /**
     * Get queue
     *
     * @return string
     */
    public function getQueue()
    {
        return $this->queue;
    }

    /**
     * Set tier
     *
     * @param string $tier
     * @return League
     */
    public function setTier($tier)
    {
        $this->tier = $tier;

        return $this;
    }

    /**
     * Get tier
     *
     * @return string
     */
    public function getTier()
    {
        return $this->tier;
    }

    /**
     * Add leagueEntries
     *
     * @param LeagueEntry $leagueEntries
     * @return League
     */
    public function addLeagueEntry(LeagueEntry $leagueEntries)
    {
        $this->leagueEntries[] = $leagueEntries;

        return $this;
    }

    /**
     * Remove leagueEntries
     *
     * @param LeagueEntry $leagueEntries
     */
    public function removeLeagueEntry(LeagueEntry $leagueEntries)
    {
        $this->leagueEntries->removeElement($leagueEntries);
    }

    /**
     * Get leagueEntries
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getLeagueEntries()
    {
        return $this->leagueEntries;
    }
}
