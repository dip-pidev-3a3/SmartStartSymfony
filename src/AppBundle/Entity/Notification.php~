<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Notification
 *
 * @ORM\Table(name="notification")
 * @ORM\Entity
 */
class Notification
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_notif", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idNotif;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_user", type="integer", nullable=false)
     */
    private $idUser;

    /**
     * @var string
     *
     * @ORM\Column(name="content", type="string", length=200, nullable=false)
     */
    private $content;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_declancheur", type="integer", nullable=false)
     */
    private $idDeclancheur;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateDeclanched", type="date", nullable=false)
     */
    private $datedeclanched;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateViwed", type="date", nullable=true)
     */
    private $dateviwed;


}

