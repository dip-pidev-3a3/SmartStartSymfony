<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Application
 *
 * @ORM\Table(name="application", indexes={@ORM\Index(name="id_opportunity", columns={"id_opportunity"}), @ORM\Index(name="id_freelancer", columns={"id_freelancer"})})
 * @ORM\Entity
 */
class Application
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_application", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idApplication;

    /**
     * @var string
     *
     * @ORM\Column(name="state", type="string", length=30, nullable=false)
     */
    private $state;

    /**
     * @var \Opportunity
     *
     * @ORM\ManyToOne(targetEntity="Opportunity")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_opportunity", referencedColumnName="id_opp")
     * })
     */
    private $idOpportunity;

    /**
     * @var \FosUser
     *
     * @ORM\ManyToOne(targetEntity="FosUser")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_freelancer", referencedColumnName="id")
     * })
     */
    private $idFreelancer;


    /**
     * Get idApplication
     *
     * @return integer
     */
    public function getIdApplication()
    {
        return $this->idApplication;
    }


}

