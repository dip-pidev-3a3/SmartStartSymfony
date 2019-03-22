<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * QReply
 *
 * @ORM\Table(name="qreply", indexes={@ORM\Index(name="id_user1", columns={"idU"}), @ORM\Index(name="id_question1", columns={"idQ"}), @ORM\Index(name="clrFK1", columns={"idC"})})
 * @ORM\Entity
 */
class QReply
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
     * @var string
     *
     * @ORM\Column(name="content", type="text", nullable=false)
     */
    private $content;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="replyDate", type="date", nullable=false)
     */
    private $replydate;

    /**
     * @var \QQuestions
     *
     * @ORM\ManyToOne(targetEntity="QQuestions")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idQ", referencedColumnName="id")
     * })
     */
    private $idq;


    /**
     * @var \FosUser
     *
     * @ORM\ManyToOne(targetEntity="FosUser")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idU", referencedColumnName="id")
     * })
     */
    private $idu;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="theAnswer", type="date", nullable=true)
     */
    private $theanswer;

    /**
     * @var integer
     *
     * @ORM\Column(name="score", type="integer", nullable=true)
     */
    private $score;

    /**
     * @var \QClouds
     *
     * @ORM\ManyToOne(targetEntity="QClouds")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idC", referencedColumnName="id")
     * })
     */
    private $idc;



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
     * Set content
     *
     * @param string $content
     *
     * @return QReply
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set replydate
     *
     * @param \DateTime $replydate
     *
     * @return QReply
     */
    public function setReplydate($replydate)
    {
        $this->replydate = $replydate;

        return $this;
    }

    /**
     * Get replydate
     *
     * @return \DateTime
     */
    public function getReplydate()
    {
        return $this->replydate;
    }

    /**
     * Set idq
     *
     * @param \AppBundle\Entity\QQuestions $idq
     *
     * @return QReply
     */
    public function setIdq(\AppBundle\Entity\QQuestions $idq=null)
    {
        $this->idq = $idq;

        return $this;
    }

    /**
     * Get idq
     *
     * @return \AppBundle\Entity\QQuestions
     */
    public function getIdq()
    {
        return $this->idq;
    }

    /**
     * Set idu
     *
     * @param \AppBundle\Entity\FosUser $idu
     *
     * @return QReply
     */
    public function setIdu(\AppBundle\Entity\FosUser $idu = null)
    {
        $this->idu = $idu;

        return $this;
    }

    /**
     * Get idu
     *
     * @return \AppBundle\Entity\FosUser
     */
    public function getIdu()
    {
        return $this->idu;
    }

    /**
     * Set theanswer
     *
     * @param \DateTime $theanswer
     *
     * @return QReply
     */
    public function setTheanswer($theanswer)
    {
        $this->theanswer = $theanswer;

        return $this;
    }

    /**
     * Get theanswer
     *
     * @return \DateTime
     */
    public function getTheanswer()
    {
        return $this->theanswer;
    }

    /**
     * Set score
     *
     * @param integer $score
     *
     * @return QReply
     */
    public function setScore($score)
    {
        $this->score = $score;

        return $this;
    }

    /**
     * Get score
     *
     * @return integer
     */
    public function getScore()
    {
        return $this->score;
    }

    /**
     * Set idc
     *
     * @param \AppBundle\Entity\QClouds $idc
     *
     * @return QReply
     */
    public function setIdc(\AppBundle\Entity\QClouds $idc = null)
    {
        $this->idc = $idc;

        return $this;
    }

    /**
     * Get idc
     *
     * @return \AppBundle\Entity\QClouds
     */
    public function getIdc()
    {
        return $this->idc;
    }
}