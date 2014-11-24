<?php

namespace Dowdow\LeagueOfLegendsAPIBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Champion
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Dowdow\LeagueOfLegendsAPIBundle\Entity\Repository\ChampionRepository")
 */
class Champion
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     */
    private $id;

    /**
     * @var boolean
     *
     * @ORM\Column(name="active", type="boolean")
     */
    private $active;

    /**
     * @var boolean
     *
     * @ORM\Column(name="botEnabled", type="boolean")
     */
    private $botEnabled;

    /**
     * @var boolean
     *
     * @ORM\Column(name="botMmEnabled", type="boolean")
     */
    private $botMmEnabled;

    /**
     * @var boolean
     *
     * @ORM\Column(name="freeToPlay", type="boolean")
     */
    private $freeToPlay;

    /**
     * @var boolean
     *
     * @ORM\Column(name="rankedPlayEnabled", type="boolean")
     */
    private $rankedPlayEnabled;


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
     * Set id
     *
     * @param integer $id
     * @return integer
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this->id;
    }

    /**
     * Set active
     *
     * @param boolean $active
     * @return Champion
     */
    public function setActive($active)
    {
        $this->active = $active;

        return $this;
    }

    /**
     * Get active
     *
     * @return boolean 
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Set botEnabled
     *
     * @param boolean $botEnabled
     * @return Champion
     */
    public function setBotEnabled($botEnabled)
    {
        $this->botEnabled = $botEnabled;

        return $this;
    }

    /**
     * Get botEnabled
     *
     * @return boolean 
     */
    public function getBotEnabled()
    {
        return $this->botEnabled;
    }

    /**
     * Set botMmEnabled
     *
     * @param boolean $botMmEnabled
     * @return Champion
     */
    public function setBotMmEnabled($botMmEnabled)
    {
        $this->botMmEnabled = $botMmEnabled;

        return $this;
    }

    /**
     * Get botMmEnabled
     *
     * @return boolean 
     */
    public function getBotMmEnabled()
    {
        return $this->botMmEnabled;
    }

    /**
     * Set freeToPlay
     *
     * @param boolean $freeToPlay
     * @return Champion
     */
    public function setFreeToPlay($freeToPlay)
    {
        $this->freeToPlay = $freeToPlay;

        return $this;
    }

    /**
     * Get freeToPlay
     *
     * @return boolean 
     */
    public function getFreeToPlay()
    {
        return $this->freeToPlay;
    }

    /**
     * Set rankedPlayEnabled
     *
     * @param boolean $rankedPlayEnabled
     * @return Champion
     */
    public function setRankedPlayEnabled($rankedPlayEnabled)
    {
        $this->rankedPlayEnabled = $rankedPlayEnabled;

        return $this;
    }

    /**
     * Get rankedPlayEnabled
     *
     * @return boolean 
     */
    public function getRankedPlayEnabled()
    {
        return $this->rankedPlayEnabled;
    }
}
