<?php

namespace Dowdow\LeagueOfLegendsAPIBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TeamMemberInfo
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Dowdow\LeagueOfLegendsAPIBundle\Entity\TeamMemberInfoRepository")
 */
class TeamMemberInfo
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
     * @ORM\Column(name="inviteDate", type="integer")
     */
    private $inviteDate;

    /**
     * @var integer
     *
     * @ORM\Column(name="joinDate", type="integer")
     */
    private $joinDate;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=255)
     */
    private $status;

    /**
     * @var Roster
     *
     * @ORM\ManyToOne(targetEntity="Roster", inversedBy="memberlist")
     * @ORM\JoinColumn(name="roster_id", referencedColumnName="id")
     */
    private $roster;

    /**
     * @var Player
     *
     * @ORM\ManyToOne(targetEntity="Player", inversedBy="teamMemberInfos")
     * @ORM\JoinColumn(name="player_id", referencedColumnName="id")
     */
    private $player;

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
     * Set inviteDate
     *
     * @param integer $inviteDate
     * @return TeamMemberInfo
     */
    public function setInviteDate($inviteDate)
    {
        $this->inviteDate = $inviteDate;

        return $this;
    }

    /**
     * Get inviteDate
     *
     * @return integer 
     */
    public function getInviteDate()
    {
        return $this->inviteDate;
    }

    /**
     * Set joinDate
     *
     * @param integer $joinDate
     * @return TeamMemberInfo
     */
    public function setJoinDate($joinDate)
    {
        $this->joinDate = $joinDate;

        return $this;
    }

    /**
     * Get joinDate
     *
     * @return integer 
     */
    public function getJoinDate()
    {
        return $this->joinDate;
    }

    /**
     * Set status
     *
     * @param string $status
     * @return TeamMemberInfo
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
     * Set roster
     *
     * @param Roster $roster
     * @return TeamMemberInfo
     */
    public function setRoster(Roster $roster = null)
    {
        $this->roster = $roster;

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
     * Set player
     *
     * @param Player $player
     * @return TeamMemberInfo
     */
    public function setPlayer(Player $player = null)
    {
        $this->player = $player;

        return $this;
    }

    /**
     * Get player
     *
     * @return Player
     */
    public function getPlayer()
    {
        return $this->player;
    }
}
