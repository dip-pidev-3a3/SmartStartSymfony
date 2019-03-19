<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contract
 *
 * @ORM\Table(name="contract", indexes={@ORM\Index(name="id_application", columns={"id_application"})})
 * @ORM\Entity
 */
class Contract
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_contract", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idContract;

    /**
     * @var string
     *
     * @ORM\Column(name="payment_method", type="string", length=30, nullable=true)
     */
    private $paymentMethod;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Start_date", type="date", nullable=true)
     */
    private $startDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="finish_date", type="date", nullable=true)
     */
    private $finishDate;

    /**
     * @var float
     *
     * @ORM\Column(name="sum", type="float", precision=10, scale=0, nullable=true)
     */
    private $sum;

    /**
     * @var integer
     *
     * @ORM\Column(name="prio", type="integer", nullable=true)
     */
    private $prio;

    /**
     * @var \Application
     *
     * @ORM\ManyToOne(targetEntity="Application")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_application", referencedColumnName="id_application")
     * })
     */
    private $idApplication;


}

