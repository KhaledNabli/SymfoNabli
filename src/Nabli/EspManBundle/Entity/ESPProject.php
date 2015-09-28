<?php

namespace Nabli\EspManBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ESPProject
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class ESPProject
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
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="lastModification", type="datetime")
     */
    private $lastModification;

    /**
     * @var string
     *
     * @ORM\Column(name="modifiedByUser", type="string", length=255)
     */
    private $modifiedByUser;

    /**
     * @var string
     *
     * @ORM\Column(name="createdByUser", type="string", length=255)
     */
    private $createdByUser;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="createdAt", type="datetime")
     */
    private $createdAt;

    /**
     * @var string
     *
     * @ORM\Column(name="checkSum", type="string", length=255)
     */
    private $checkSum;


    /**
    * @ORM\ManyToOne(targetEntity="ESPEngine", inversedBy="projects")
    * @ORM\JoinColumn(name="engine_id", referencedColumnName="id")
    *    
    */
    private $engine;


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
     * @return ESPProject
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
     * Set description
     *
     * @param string $description
     * @return ESPProject
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set createdBy
     *
     * @param \DateTime $createdBy
     * @return ESPProject
     */
    public function setCreatedBy($createdBy)
    {
        $this->createdBy = $createdBy;

        return $this;
    }

    /**
     * Get createdBy
     *
     * @return \DateTime 
     */
    public function getCreatedBy()
    {
        return $this->createdBy;
    }

    /**
     * Set lastModification
     *
     * @param \DateTime $lastModification
     * @return ESPProject
     */
    public function setLastModification($lastModification)
    {
        $this->lastModification = $lastModification;

        return $this;
    }

    /**
     * Get lastModification
     *
     * @return \DateTime 
     */
    public function getLastModification()
    {
        return $this->lastModification;
    }

    /**
     * Set modifiedByUser
     *
     * @param string $modifiedByUser
     * @return ESPProject
     */
    public function setModifiedByUser($modifiedByUser)
    {
        $this->modifiedByUser = $modifiedByUser;

        return $this;
    }

    /**
     * Get modifiedByUser
     *
     * @return string 
     */
    public function getModifiedByUser()
    {
        return $this->modifiedByUser;
    }

    /**
     * Set createdByUser
     *
     * @param string $createdByUser
     * @return ESPProject
     */
    public function setCreatedByUser($createdByUser)
    {
        $this->createdByUser = $createdByUser;

        return $this;
    }

    /**
     * Get createdByUser
     *
     * @return string 
     */
    public function getCreatedByUser()
    {
        return $this->createdByUser;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return ESPProject
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime 
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set checkSum
     *
     * @param string $checkSum
     * @return ESPProject
     */
    public function setCheckSum($checkSum)
    {
        $this->checkSum = $checkSum;

        return $this;
    }

    /**
     * Get checkSum
     *
     * @return string 
     */
    public function getCheckSum()
    {
        return $this->checkSum;
    }
}
