<?php

namespace Dowdow\LeagueOfLegendsAPIBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Locale
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Dowdow\LeagueOfLegendsAPIBundle\Entity\Repository\LocaleRepository")
 */
class Locale
{
    /**
     * @var string
     *
     * @ORM\Column(name="locale", type="string", length=255)
     * @ORM\Id
     */
    private $locale;

    /**
     * @var Shard
     *
     * @ORM\ManyToOne(targetEntity="Shard", inversedBy="locales")
     * @ORM\JoinColumn(name="shard_id", referencedColumnName="slug")
     */
    private $shard;

    /**
     * Set locale
     *
     * @param string $locale
     * @return Locale
     */
    public function setLocale($locale)
    {
        $this->locale = $locale;

        return $this;
    }

    /**
     * Get locale
     *
     * @return string
     */
    public function getLocale()
    {
        return $this->locale;
    }

    /**
     * Set shard
     *
     * @param Shard $shard
     * @return Locale
     */
    public function setShard(Shard $shard = null)
    {
        $this->shard = $shard;

        return $this;
    }

    /**
     * Get shard
     *
     * @return Shard
     */
    public function getShard()
    {
        return $this->shard;
    }
}
