<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Serie
 *
 * @ORM\Table(name="serie")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\SerieRepository")
 */
class Serie
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
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="poster", type="string", length=255)
     */
    private $poster;

    /**
     * @var string
     *
     * @ORM\Column(name="resume", type="string", length=255)
     */
    private $resume;

    /**
     * @var int
     *
     * @ORM\Column(name="starRate", type="integer")
     */
    private $starRate;


    /**
     * @var ArrayCollection
     *
     * @ORM\ManyToMany(targetEntity="Individual", inversedBy = "serie")
     */
    private $individual;

    /**
     * @var String
     *
     * @ORM\OneToMany(targetEntity="Season", mappedBy = "serie")
     */
    private $season;

    /**
     * @var ArrayCollection
     *
     * @ORM\OneToMany(targetEntity="StarRate", mappedBy = "serie")
     */
    private $StarRate;

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
     * @return Serie
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
     * Set poster
     *
     * @param string $poster
     * @return Serie
     */
    public function setPoster($poster)
    {
        $this->poster = $poster;

        return $this;
    }

    /**
     * Get poster
     *
     * @return string 
     */
    public function getPoster()
    {
        return $this->poster;
    }

    /**
     * Set resume
     *
     * @param string $resume
     * @return Serie
     */
    public function setResume($resume)
    {
        $this->resume = $resume;

        return $this;
    }

    /**
     * Get resume
     *
     * @return string 
     */
    public function getResume()
    {
        return $this->resume;
    }

    /**
     * Set starRate
     *
     * @param integer $starRate
     * @return Serie
     */
    public function setStarRate($starRate)
    {
        $this->starRate = $starRate;

        return $this;
    }

    /**
     * Get starRate
     *
     * @return integer 
     */
    public function getStarRate()
    {
        return $this->starRate;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->individual = new \Doctrine\Common\Collections\ArrayCollection();
        $this->season = new \Doctrine\Common\Collections\ArrayCollection();
        $this->StarRate = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add individual
     *
     * @param \AppBundle\Entity\Individual $individual
     * @return Serie
     */
    public function addIndividual(\AppBundle\Entity\Individual $individual)
    {
        $this->individual[] = $individual;

        return $this;
    }

    /**
     * Remove individual
     *
     * @param \AppBundle\Entity\Individual $individual
     */
    public function removeIndividual(\AppBundle\Entity\Individual $individual)
    {
        $this->individual->removeElement($individual);
    }

    /**
     * Get individual
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getIndividual()
    {
        return $this->individual;
    }

    /**
     * Add season
     *
     * @param \AppBundle\Entity\Season $season
     * @return Serie
     */
    public function addSeason(\AppBundle\Entity\Season $season)
    {
        $this->season[] = $season;

        return $this;
    }

    /**
     * Remove season
     *
     * @param \AppBundle\Entity\Season $season
     */
    public function removeSeason(\AppBundle\Entity\Season $season)
    {
        $this->season->removeElement($season);
    }

    /**
     * Get season
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getSeason()
    {
        return $this->season;
    }

    /**
     * Add StarRate
     *
     * @param \AppBundle\Entity\StarRate $starRate
     * @return Serie
     */
    public function addStarRate(\AppBundle\Entity\StarRate $starRate)
    {
        $this->StarRate[] = $starRate;

        return $this;
    }

    /**
     * Remove StarRate
     *
     * @param \AppBundle\Entity\StarRate $starRate
     */
    public function removeStarRate(\AppBundle\Entity\StarRate $starRate)
    {
        $this->StarRate->removeElement($starRate);
    }
}
