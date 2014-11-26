<?php

namespace Dowdow\LeagueOfLegendsAPIBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Shard
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Dowdow\LeagueOfLegendsAPIBundle\Entity\Repository\ShardRepository")
 */
class Shard
{
    /**
     * @var string
     *
     * @ORM\Column(name="hostname", type="string", length=255)
     */
    private $hostname;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="region_tag", type="string", length=255)
     */
    private $regionTag;

    /**
     * @var string
     * @ORM\Id
     *
     * @ORM\Column(name="slug", type="string", length=255)
     */
    private $slug;

    /**
     * @var ArrayCollection
     *
     * @ORM\OneToMany(targetEntity="Locale", mappedBy="shard")
     */
    private $locales;

    /**
     * @var ArrayCollection
     *
     * @ORM\OneToMany(targetEntity="Service", mappedBy="shard")
     */
    private $services;

    /**
     * Constructor
     */
    public function __construct() {
        $this->locales = new ArrayCollection();
        $this->services = new ArrayCollection();
    }

    /**
     * Set hostname
     *
     * @param string $hostname
     * @return Shard
     */
    public function setHostname($hostname)
    {
        $this->hostname = $hostname;

        return $this;
    }

    /**
     * Get hostname
     *
     * @return string 
     */
    public function getHostname()
    {
        return $this->hostname;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Shard
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
     * Set regionTag
     *
     * @param string $regionTag
     * @return Shard
     */
    public function setRegionTag($regionTag)
    {
        $this->regionTag = $regionTag;

        return $this;
    }

    /**
     * Get regionTag
     *
     * @return string 
     */
    public function getRegionTag()
    {
        return $this->regionTag;
    }

    /**
     * Set slug
     *
     * @param string $slug
     * @return Shard
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * Get slug
     *
     * @return string 
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * Add locales
     *
     * @param Locale $locales
     * @return Shard
     */
    public function addLocale(Locale $locales)
    {
        $this->locales[] = $locales;
        $locales->setShard($this);

        return $this;
    }

    /**
     * Remove locales
     *
     * @param Locale $locales
     */
    public function removeLocale(Locale $locales)
    {
        $this->locales->removeElement($locales);
    }

    /**
     * Get locales
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getLocales()
    {
        return $this->locales;
    }

    /**
     * Add services
     *
     * @param Service $services
     * @return Shard
     */
    public function addService(Service $services)
    {
        $this->services[] = $services;
        $services->setShard($this);
        return $this;
    }

    /**
     * Remove services
     *
     * @param Service $services
     */
    public function removeService(Service $services)
    {
        $this->services->removeElement($services);
    }

    /**
     * Get services
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getServices()
    {
        return $this->services;
    }
}
