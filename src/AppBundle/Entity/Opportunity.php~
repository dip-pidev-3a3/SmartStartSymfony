<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Opportunity
 *
 * @ORM\Table(name="opportunity", indexes={@ORM\Index(name="id_entreprise", columns={"id_entreprise"})})
 * @ORM\Entity
 */
class Opportunity
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_opp", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idOpp;

    /**
     * @var string
     *
     * @ORM\Column(name="job_title", type="string", length=50, nullable=false)
     */
    private $jobTitle;

    /**
     * @var string
     *
     * @ORM\Column(name="job_category", type="string", length=50, nullable=false)
     */
    private $jobCategory;

    /**
     * @var string
     *
     * @ORM\Column(name="job_description", type="string", length=50, nullable=false)
     */
    private $jobDescription;

    /**
     * @var float
     *
     * @ORM\Column(name="Budget", type="float", precision=10, scale=0, nullable=false)
     */
    private $budget;

    /**
     * @var integer
     *
     * @ORM\Column(name="job_Draft", type="integer", nullable=false)
     */
    private $jobDraft;

    /**
     * @var string
     *
     * @ORM\Column(name="job_Duration", type="string", length=50, nullable=false)
     */
    private $jobDuration;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Expiry_date", type="date", nullable=false)
     */
    private $expiryDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="added_date", type="date", nullable=false)
     */
    private $addedDate;

    /**
     * @var \FosUser
     *
     * @ORM\ManyToOne(targetEntity="FosUser")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_entreprise", referencedColumnName="id")
     * })
     */
    private $idEntreprise;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Skills", inversedBy="idOpp")
     * @ORM\JoinTable(name="needed_skills",
     *   joinColumns={
     *     @ORM\JoinColumn(name="id_opp", referencedColumnName="id_opp")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="id_skill", referencedColumnName="id_skill")
     *   }
     * )
     */
    private $idSkill;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="FosUser", mappedBy="opportunityid")
     */
    private $freelancerid;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idSkill = new \Doctrine\Common\Collections\ArrayCollection();
        $this->freelancerid = new \Doctrine\Common\Collections\ArrayCollection();
    }

}

