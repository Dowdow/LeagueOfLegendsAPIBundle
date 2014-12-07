<?php

namespace Dowdow\LeagueOfLegendsAPIBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Team
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Dowdow\LeagueOfLegendsAPIBundle\Entity\Repository\TeamRepository")
 */
class Team
{
    /**
     * @var integer
     *
     * @ORM\Column(name="fullId", type="integer")
     * @ORM\Id
     */
    private $fullId;

    /**
     * @var integer
     *
     * @ORM\Column(name="createDate", type="integer")
     */
    private $createDate;

    /**
     * @var integer
     *
     * @ORM\Column(name="lastGameDate", type="integer")
     */
    private $lastGameDate;

    /**
     * @var integer
     *
     * @ORM\Column(name="lastJoinDate", type="integer")
     */
    private $lastJoinDate;

    /**
     * @var integer
     *
     * @ORM\Column(name="lastJoinedRankedTeamQueueDate", type="integer")
     */
    private $lastJoinedRankedTeamQueueDate;

    /**
     * @var integer
     *
     * @ORM\Column(name="modifyDate", type="integer")
     */
    private $modifyDate;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var integer
     *
     * @ORM\Column(name="secondLastJoinDate", type="integer")
     */
    private $secondLastJoinDate;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=255)
     */
    private $status;

    /**
     * @var string
     *
     * @ORM\Column(name="tag", type="string", length=255)
     */
    private $tag;

    /**
     * @var integer
     *
     * @ORM\Column(name="thirdLastJoinDate", type="integer")
     */
    private $thirdLastJoinDate;

    /**
     * @var ArrayCollection
     *
     * @ORM\OneToMany(targetEntity="MatchHistorySummary", mappedBy="team")
     */
    private $matchHistories;

    /**
     * @var ArrayCollection
     *
     * @ORM\OneToMany(targetEntity="TeamStatDetail", mappedBy="team")
     */
    private $teamStatDetails;

    /**
     * @var Roster
     *
     * @ORM\OneToOne(targetEntity="Roster", mappedBy="team")
     */
    private $roster;

    /**
     * Constructor
     */
    public function __construct() {
        $this->matchHistories = new ArrayCollection();
        $this->teamStatDetails = new ArrayCollection();
    }

    /**
     * Set id
     *
     * @param $fullId
     * @return integer
     */
    public function setFullId($fullId)
    {
        $this->fullId = $fullId;

        return $this;
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getFullId()
    {
        return $this->fullId;
    }

    /**
     * Set createDate
     *
     * @param integer $createDate
     * @return Team
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
     * Set lastGameDate
     *
     * @param integer $lastGameDate
     * @return Team
     */
    public function setLastGameDate($lastGameDate)
    {
        $this->lastGameDate = $lastGameDate;

        return $this;
    }

    /**
     * Get lastGameDate
     *
     * @return integer 
     */
    public function getLastGameDate()
    {
        return $this->lastGameDate;
    }

    /**
     * Set lastJoinDate
     *
     * @param integer $lastJoinDate
     * @return Team
     */
    public function setLastJoinDate($lastJoinDate)
    {
        $this->lastJoinDate = $lastJoinDate;

        return $this;
    }

    /**
     * Get lastJoinDate
     *
     * @return integer 
     */
    public function getLastJoinDate()
    {
        return $this->lastJoinDate;
    }

    /**
     * Set lastJoinedRankedTeamQueueDate
     *
     * @param integer $lastJoinedRankedTeamQueueDate
     * @return Team
     */
    public function setLastJoinedRankedTeamQueueDate($lastJoinedRankedTeamQueueDate)
    {
        $this->lastJoinedRankedTeamQueueDate = $lastJoinedRankedTeamQueueDate;

        return $this;
    }

    /**
     * Get lastJoinedRankedTeamQueueDate
     *
     * @return integer 
     */
    public function getLastJoinedRankedTeamQueueDate()
    {
        return $this->lastJoinedRankedTeamQueueDate;
    }

    /**
     * Set modifyDate
     *
     * @param integer $modifyDate
     * @return Team
     */
    public function setModifyDate($modifyDate)
    {
        $this->modifyDate = $modifyDate;

        return $this;
    }

    /**
     * Get modifyDate
     *
     * @return integer 
     */
    public function getModifyDate()
    {
        return $this->modifyDate;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Team
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
     * Set secondLastJoinDate
     *
     * @param integer $secondLastJoinDate
     * @return Team
     */
    public function setSecondLastJoinDate($secondLastJoinDate)
    {
        $this->secondLastJoinDate = $secondLastJoinDate;

        return $this;
    }

    /**
     * Get secondLastJoinDate
     *
     * @return integer 
     */
    public function getSecondLastJoinDate()
    {
        return $this->secondLastJoinDate;
    }

    /**
     * Set status
     *
     * @param string $status
     * @return Team
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set tag
     *
     * @param string $tag
     * @return Team
     */
    public function setTag($tag)
    {
        $this->tag = $tag;

        return $this;
    }

    /**
     * Get tag
     *
     * @return string 
     */
    public function getTag()
    {
        return $this->tag;
    }

    /**
     * Set thirdLastJoinDate
     *
     * @param integer $thirdLastJoinDate
     * @return Team
     */
    public function setThirdLastJoinDate($thirdLastJoinDate)
    {
        $this->thirdLastJoinDate = $thirdLastJoinDate;

        return $this;
    }

    /**
     * Get thirdLastJoinDate
     *
     * @return integer 
     */
    public function getThirdLastJoinDate()
    {
        return $this->thirdLastJoinDate;
    }

    /**
     * Add matchHistories
     *
     * @param MatchHistorySummary $matchHistories
     * @return Team
     */
    public function addMatchHistory(MatchHistorySummary $matchHistories)
    {
        $this->matchHistories[] = $matchHistories;
        $matchHistories->setTeam($this);
        return $this;
    }

    /**
     * Remove matchHistories
     *
     * @param MatchHistorySummary $matchHistories
     */
    public function removeMatchHistory(MatchHistorySummary $matchHistories)
    {
        $this->matchHistories->removeElement($matchHistories);
    }

    /**
     * Get matchHistories
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getMatchHistories()
    {
        return $this->matchHistories;
    }

    /**
     * Set roster
     *
     * @param Roster $roster
     * @return Team
     */
    public function setRoster(Roster $roster = null)
    {
        $this->roster = $roster;
        $roster->setTeam($this);
        return $this;
    }

    /**
     * Get roster
     *
     * @return Roster
     */
    public function getRoster()
    {
        return $this->roster;
    }

    /**
     * Add teamStatDetails
     *
     * @param TeamStatDetail $teamStatDetails
     * @return Team
     */
    public function addTeamStatDetail(TeamStatDetail $teamStatDetails)
    {
        $this->teamStatDetails[] = $teamStatDetails;

        return $this;
    }

    /**
     * Remove teamStatDetails
     *
     * @param TeamStatDetail $teamStatDetails
     */
    public function removeTeamStatDetail(TeamStatDetail $teamStatDetails)
    {
        $this->teamStatDetails->removeElement($teamStatDetails);
    }

    /**
     * Get teamStatDetails
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTeamStatDetails()
    {
        return $this->teamStatDetails;
    }
}
