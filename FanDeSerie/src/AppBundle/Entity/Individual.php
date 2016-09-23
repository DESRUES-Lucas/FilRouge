<?php

namespace AppBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Individual
 *
 * @ORM\Table(name="individual")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\IndividualRepository")
 */
class Individual extends BaseUser
{

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;



    /**
     * @var string
     *
     * @ORM\Column(name="firstName", type="string", length=255)
     */
    private $firstName;

    /**
     * @var string
     *
     * @ORM\Column(name="lastName", type="string", length=255)
     */
    private $lastName;

    /**
     * @var string
     *
     * @ORM\Column(name="picture", type="string", length=255)
     */
    private $picture;



    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateRegistration", type="datetime")
     */
    private $dateRegistration;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="birthDate", type="datetime")
     */
    private $birthDate;


    /**
     * @var ArrayCollection
     *
     * @ORM\OneToMany(targetEntity="Comment", mappedBy = "individual")
     */
    private $comment;


    /**
     * @var ArrayCollection
     *
     * @ORM\ManyToMany(targetEntity="Serie", mappedBy = "individual")
     */
    private $serie;

    /**
     * @var ArrayCollection
     *
     * @ORM\OneToMany(targetEntity="StarRate", mappedBy="individual")
     */
    private $starRate;





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
     * Set firstName
     *
     * @param string $firstName
     * @return Individual
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get firstName
     *
     * @return string 
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     * @return Individual
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get lastName
     *
     * @return string 
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set picture
     *
     * @param string $picture
     * @return Individual
     */
    public function setPicture($picture)
    {
        $this->picture = $picture;

        return $this;
    }

    /**
     * Get picture
     *
     * @return string 
     */
    public function getPicture()
    {
        return $this->picture;
    }





    /**
     * Set dateRegistration
     *
     * @param \DateTime $dateRegistration
     * @return Individual
     */
    public function setDateRegistration($dateRegistration)
    {

        $this->dateRegistration = $dateRegistration;

        return $this;
    }

    /**
     * Get dateRegistration
     *
     * @return \DateTime 
     */
    public function getDateRegistration()
    {
        return $this->dateRegistration;
    }

    /**
     * Set birthDate
     *
     * @param \DateTime $birthDate
     * @return Individual
     */
    public function setBirthDate($birthDate)
    {
        $this->birthDate = $birthDate;

        return $this;
    }

    /**
     * Get birthDate
     *
     * @return \DateTime 
     */
    public function getBirthDate()
    {
        return $this->birthDate;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        parent::__construct();
        $this->comment = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add comment
     *
     * @param \AppBundle\Entity\Comment $comment
     * @return Individual
     */
    public function addComment(\AppBundle\Entity\Comment $comment)
    {
        $this->comment[] = $comment;

        return $this;
    }

    /**
     * Remove comment
     *
     * @param \AppBundle\Entity\Comment $comment
     */
    public function removeComment(\AppBundle\Entity\Comment $comment)
    {
        $this->comment->removeElement($comment);
    }

    /**
     * Get comment
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Set comment
     *
     * @param \AppBundle\Entity\Comment $comment
     * @return Individual
     */
    public function setComment(\AppBundle\Entity\Comment $comment = null)
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * Add serie
     *
     * @param \AppBundle\Entity\series $serie
     * @return Individual
     */
    public function addSerie(\AppBundle\Entity\series $serie)
    {
        $this->serie[] = $serie;

        return $this;
    }

    /**
     * Remove serie
     *
     * @param \AppBundle\Entity\series $serie
     */
    public function removeSerie(\AppBundle\Entity\series $serie)
    {
        $this->serie->removeElement($serie);
    }

    /**
     * Get serie
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getSerie()
    {
        return $this->serie;
    }

    /**
     * Set starRate
     *
     * @param \AppBundle\Entity\StarRate $starRate
     * @return Individual
     */
    public function setStarRate(\AppBundle\Entity\StarRate $starRate = null)
    {
        $this->starRate = $starRate;

        return $this;
    }

    /**
     * Get starRate
     *
     * @return \AppBundle\Entity\StarRate 
     */
    public function getStarRate()
    {
        return $this->starRate;
    }

    /**
     * Add starRate
     *
     * @param \AppBundle\Entity\StarRate $starRate
     * @return Individual
     */
    public function addStarRate(\AppBundle\Entity\StarRate $starRate)
    {
        $this->starRate[] = $starRate;

        return $this;
    }

    /**
     * Remove starRate
     *
     * @param \AppBundle\Entity\StarRate $starRate
     */
    public function removeStarRate(\AppBundle\Entity\StarRate $starRate)
    {
        $this->starRate->removeElement($starRate);
    }

}
