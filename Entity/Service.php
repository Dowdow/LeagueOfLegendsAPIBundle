<?php

namespace Dowdow\LeagueOfLegendsAPIBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Service
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Dowdow\LeagueOfLegendsAPIBundle\Entity\Repository\ServiceRepository")
 */
class Service
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
     * @ORM\Column(name="slug", type="string", length=255)
     */
    private $slug;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=255)
     */
    private $status;

    /**
     * @var Shard
     *
     * @ORM\ManyToOne(targetEntity="Shard", inversedBy="services")
     * @ORM\JoinColumn(name="shard_id", referencedColumnName="slug")
     */
    private $shard;

    /**
     * @var ArrayCollection
     *
     * @ORM\OneToMany(targetEntity="Incident", mappedBy="service")
     */
    private $incidents;

    /**
     * Constructor
     */
    public function __construct() {
        $this->incidents = new ArrayCollection();
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
     * @return Service
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
     * Set slug
     *
     * @param string $slug
     * @return Service
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
     * Set status
     *
     * @param string $status
     * @return Service
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
     * Set shard
     *
     * @param Shard $shard
     * @return Service
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

    /**
     * Add incidents
     *
     * @param Incident $incidents
     * @return Service
     */
    public function addIncident(Incident $incidents)
    {
        $this->incidents[] = $incidents;
        $incidents->setService($this);
        return $this;
    }

    /**
     * Remove incidents
     *
     * @param Incident $incidents
     */
    public function removeIncident(Incident $incidents)
    {
        $this->incidents->removeElement($incidents);
    }

    /**
     * Get incidents
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIncidents()
    {
        return $this->incidents;
    }
}
