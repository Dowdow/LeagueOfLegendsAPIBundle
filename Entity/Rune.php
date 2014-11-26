<?php

namespace Dowdow\LeagueOfLegendsAPIBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Rune
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Dowdow\LeagueOfLegendsAPIBundle\Entity\Repository\RuneRepository")
 */
class Rune
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
     * @ORM\Column(name="slotId", type="integer")
     */
    private $slotId;

    /**
     * @var ArrayCollection
     *
     * @ORM\ManyToMany(targetEntity="RunePage", inversedBy="runes")
     * @ORM\JoinTable(name="RunePage_Rune")
     **/
    private $runePages;

    /**
     * Constructor
     */
    public function __construct() {
        $this->runePages = new ArrayCollection();
    }

    /**
     * Set id
     *
     * @param integer $id
     * @return Rune
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
     * Set slotId
     *
     * @param integer $slotId
     * @return Rune
     */
    public function setSlotId($slotId)
    {
        $this->slotId = $slotId;

        return $this;
    }

    /**
     * Get slotId
     *
     * @return integer 
     */
    public function getSlotId()
    {
        return $this->slotId;
    }

    /**
     * Add runePages
     *
     * @param RunePage $runePages
     * @return Rune
     */
    public function addRunePage(RunePage $runePages)
    {
        $this->runePages[] = $runePages;

        return $this;
    }

    /**
     * Remove runePages
     *
     * @param RunePage $runePages
     */
    public function removeRunePage(RunePage $runePages)
    {
        $this->runePages->removeElement($runePages);
    }

    /**
     * Get runePages
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getRunePages()
    {
        return $this->runePages;
    }
}
