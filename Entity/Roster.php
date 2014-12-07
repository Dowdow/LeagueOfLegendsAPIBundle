<?php

namespace Dowdow\LeagueOfLegendsAPIBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Roster
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Dowdow\LeagueOfLegendsAPIBundle\Entity\Repository\RosterRepository")
 */
class Roster
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
     * @ORM\Column(name="ownerId", type="integer")
     */
    private $ownerId;

    /**
     * @var Team
     *
     * @ORM\OneToOne(targetEntity="Team", inversedBy="roster")
     * @ORM\JoinColumn(name="team_id", referencedColumnName="fullId")
     */
    private $team;

    /**
     * @var ArrayCollection
     *
     * @ORM\OneToMany(targetEntity="TeamMemberInfo", mappedBy="roster")
     */
    private $memberList;

    /**
     * Constructor
     */
    public function __construct() {
        $this->memberList = new ArrayCollection();
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
     * Set ownerId
     *
     * @param integer $ownerId
     * @return Roster
     */
    public function setOwnerId($ownerId)
    {
        $this->ownerId = $ownerId;

        return $this;
    }

    /**
     * Get ownerId
     *
     * @return integer 
     */
    public function getOwnerId()
    {
        return $this->ownerId;
    }

    /**
     * Set team
     *
     * @param Team $team
     * @return Roster
     */
    public function setTeam(Team $team)
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
     * Add memberList
     *
     * @param TeamMemberInfo $memberList
     * @return Roster
     */
    public function addMemberList(TeamMemberInfo $memberList)
    {
        $this->memberList[] = $memberList;
        $memberList->setRoster($this);
        return $this;
    }

    /**
     * Remove memberList
     *
     * @param TeamMemberInfo $memberList
     */
    public function removeMemberList(TeamMemberInfo $memberList)
    {
        $this->memberList->removeElement($memberList);
    }

    /**
     * Get memberList
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getMemberList()
    {
        return $this->memberList;
    }
}
