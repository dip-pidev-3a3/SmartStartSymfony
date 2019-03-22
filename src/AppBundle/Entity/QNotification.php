<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * QNotification
 *
 * @ORM\Table(name="qnotification")
 * @ORM\Entity
 */
class QNotification
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="idNotified", type="integer", nullable=false)
     */
    private $idnotified;

    /**
     * @var integer
     *
     * @ORM\Column(name="type", type="integer", nullable=false)
     */
    private $type;

    /**
     * @var integer
     *
     * @ORM\Column(name="idType", type="integer", nullable=false)
     */
    private $idtype;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="declanched", type="date", nullable=false)
     */
    private $declanched;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="viwed", type="date", nullable=true)
     */
    private $viwed;



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
     * Set idnotified
     *
     * @param integer $idnotified
     *
     * @return QNotification
     */
    public function setIdnotified($idnotified)
    {
        $this->idnotified = $idnotified;

        return $this;
    }

    /**
     * Get idnotified
     *
     * @return integer
     */
    public function getIdnotified()
    {
        return $this->idnotified;
    }

    /**
     * Set type
     *
     * @param integer $type
     *
     * @return QNotification
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return integer
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set idtype
     *
     * @param integer $idtype
     *
     * @return QNotification
     */
    public function setIdtype($idtype)
    {
        $this->idtype = $idtype;

        return $this;
    }

    /**
     * Get idtype
     *
     * @return integer
     */
    public function getIdtype()
    {
        return $this->idtype;
    }

    /**
     * Set declanched
     *
     * @param \DateTime $declanched
     *
     * @return QNotification
     */
    public function setDeclanched($declanched)
    {
        $this->declanched = $declanched;

        return $this;
    }

    /**
     * Get declanched
     *
     * @return \DateTime
     */
    public function getDeclanched()
    {
        return $this->declanched;
    }

    /**
     * Set viwed
     *
     * @param \DateTime $viwed
     *
     * @return QNotification
     */
    public function setViwed($viwed)
    {
        $this->viwed = $viwed;

        return $this;
    }

    /**
     * Get viwed
     *
     * @return \DateTime
     */
    public function getViwed()
    {
        return $this->viwed;
    }
}
