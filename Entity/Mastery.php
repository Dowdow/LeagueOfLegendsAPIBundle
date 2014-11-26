<?php

namespace Dowdow\LeagueOfLegendsAPIBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Mastery
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Dowdow\LeagueOfLegendsAPIBundle\Entity\Repository\MasteryRepository")
 */
class Mastery
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="rank", type="integer")
     */
    private $rank;

    /**
     * @var ArrayCollection
     *
     * @ORM\ManyToMany(targetEntity="MasteryPage", inversedBy="masteries")
     * @ORM\JoinTable(name="MasteryPage_Mastery")
     **/
    private $masteryPages;

    /**
     * Constructor
     */
    public function __construct() {
        $this->masteryPages = new ArrayCollection();
    }

    /**
     * Set id
     *
     * @param integer $id
     * @return Mastery
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
     * Set rank
     *
     * @param integer $rank
     * @return Mastery
     */
    public function setRank($rank)
    {
        $this->rank = $rank;

        return $this;
    }

    /**
     * Get rank
     *
     * @return integer
     */
    public function getRank()
    {
        return $this->rank;
    }

    /**
     * Add masteryPages
     *
     * @param MasteryPage $masteryPages
     * @return Mastery
     */
    public function addMasteryPage(MasteryPage $masteryPages)
    {
        $this->masteryPages[] = $masteryPages;

        return $this;
    }

    /**
     * Remove masteryPages
     *
     * @param MasteryPage $masteryPages
     */
    public function removeMasteryPage(MasteryPage $masteryPages)
    {
        $this->masteryPages->removeElement($masteryPages);
    }

    /**
     * Get masteryPages
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getMasteryPages()
    {
        return $this->masteryPages;
    }
}
