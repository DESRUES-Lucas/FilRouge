<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Episode
 *
 * @ORM\Table(name="episode")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\EpisodeRepository")
 */
class Episode
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * @var bool
     *
     * @ORM\Column(name="sum_view", type="boolean")
     */
    private $sumView;

    /**
     * @var String
     *
     * @ORM\ManyToOne(targetEntity="Season", inversedBy = "episode")
     */
    private $season;

    /**
     * @var ArrayCollection
     *
     * @ORM\ManyToMany(targetEntity="Realisator", mappedBy = "episode")
     */
    private $realisator;

    /**
     * @var ArrayCollection
     *
     * @ORM\ManyToMany(targetEntity="Actor", mappedBy = "episode")
     */
    private $actor;

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
     * Set title
     *
     * @param string $title
     * @return Episode
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set sumView
     *
     * @param boolean $sumView
     * @return Episode
     */
    public function setSumView($sumView)
    {
        $this->sumView = $sumView;

        return $this;
    }

    /**
     * Get sumView
     *
     * @return boolean 
     */
    public function getSumView()
    {
        return $this->sumView;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->realisator = new \Doctrine\Common\Collections\ArrayCollection();
        $this->actor = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set season
     *
     * @param \AppBundle\Entity\Season $season
     * @return Episode
     */
    public function setSeason(\AppBundle\Entity\Season $season = null)
    {
        $this->season = $season;

        return $this;
    }

    /**
     * Get season
     *
     * @return \AppBundle\Entity\Season 
     */
    public function getSeason()
    {
        return $this->season;
    }

    /**
     * Add realisator
     *
     * @param \AppBundle\Entity\Realisator $realisator
     * @return Episode
     */
    public function addRealisator(\AppBundle\Entity\Realisator $realisator)
    {
        $this->realisator[] = $realisator;

        return $this;
    }

    /**
     * Remove realisator
     *
     * @param \AppBundle\Entity\Realisator $realisator
     */
    public function removeRealisator(\AppBundle\Entity\Realisator $realisator)
    {
        $this->realisator->removeElement($realisator);
    }

    /**
     * Get realisator
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getRealisator()
    {
        return $this->realisator;
    }

    /**
     * Add actor
     *
     * @param \AppBundle\Entity\Actor $actor
     * @return Episode
     */
    public function addActor(\AppBundle\Entity\Actor $actor)
    {
        $this->actor[] = $actor;

        return $this;
    }

    /**
     * Remove actor
     *
     * @param \AppBundle\Entity\Actor $actor
     */
    public function removeActor(\AppBundle\Entity\Actor $actor)
    {
        $this->actor->removeElement($actor);
    }

    /**
     * Get actor
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getActor()
    {
        return $this->actor;
    }
}
