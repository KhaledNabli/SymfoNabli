<?php

namespace Nabli\EspManBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ESPEngine
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class ESPEngine
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
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var integer
     *
     * @ORM\Column(name="processId", type="integer")
     */
    private $processId;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=255)
     */
    private $status;

    /**
     * @var string
     *
     * @ORM\Column(name="sysmsg", type="text")
     */
    private $sysmsg;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="lastModification", type="datetime")
     */
    private $lastModification;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="startDttm", type="datetime")
     */
    private $startDttm;

    /**
     * @var string
     *
     * @ORM\Column(name="modifiedByUser", type="string", length=255)
     */
    private $modifiedByUser;

    /**
     * @var string
     *
     * @ORM\Column(name="startedByUser", type="string", length=255)
     */
    private $startedByUser;

    /**
     * @var string
     *
     * @ORM\Column(name="checkSum", type="string", length=255)
     */
    private $checkSum;


    /**
    * @ORM\OneToMany(targetEntity="ESPProject", mappedBy="engine")
    */
    protected $projects;



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
     * @return ESPEngine
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
     * @return ESPEngine
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
     * Set processId
     *
     * @param integer $processId
     * @return ESPEngine
     */
    public function setProcessId($processId)
    {
        $this->processId = $processId;

        return $this;
    }

    /**
     * Get processId
     *
     * @return integer 
     */
    public function getProcessId()
    {
        return $this->processId;
    }

    /**
     * Set status
     *
     * @param string $status
     * @return ESPEngine
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
     * Set sysmsg
     *
     * @param string $sysmsg
     * @return ESPEngine
     */
    public function setSysmsg($sysmsg)
    {
        $this->sysmsg = $sysmsg;

        return $this;
    }

    /**
     * Get sysmsg
     *
     * @return string 
     */
    public function getSysmsg()
    {
        return $this->sysmsg;
    }

    /**
     * Set lastModification
     *
     * @param \DateTime $lastModification
     * @return ESPEngine
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
     * Set startDttm
     *
     * @param \DateTime $startDttm
     * @return ESPEngine
     */
    public function setStartDttm($startDttm)
    {
        $this->startDttm = $startDttm;

        return $this;
    }

    /**
     * Get startDttm
     *
     * @return \DateTime 
     */
    public function getStartDttm()
    {
        return $this->startDttm;
    }

    /**
     * Set modifiedByUser
     *
     * @param string $modifiedByUser
     * @return ESPEngine
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
     * Set startedByUser
     *
     * @param string $startedByUser
     * @return ESPEngine
     */
    public function setStartedByUser($startedByUser)
    {
        $this->startedByUser = $startedByUser;

        return $this;
    }

    /**
     * Get startedByUser
     *
     * @return string 
     */
    public function getStartedByUser()
    {
        return $this->startedByUser;
    }

    /**
     * Set checkSum
     *
     * @param string $checkSum
     * @return ESPEngine
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


    /**
     * Constructor
     */
    public function __construct()
    {
        $this->projects = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add projects
     *
     * @param \Nabli\EspManBundle\Entity\ESPProject $projects
     * @return ESPEngine
     */
    public function addProject(\Nabli\EspManBundle\Entity\ESPProject $projects)
    {
        $this->projects[] = $projects;

        return $this;
    }

    /**
     * Remove projects
     *
     * @param \Nabli\EspManBundle\Entity\ESPProject $projects
     */
    public function removeProject(\Nabli\EspManBundle\Entity\ESPProject $projects)
    {
        $this->projects->removeElement($projects);
    }

    /**
     * Get projects
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getProjects()
    {
        return $this->projects;
    }
}
