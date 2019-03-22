<?php

namespace Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * Userdetails
 *
 * @ORM\Table(name="userdetails")
 * @ORM\Entity
 */
class Userdetails
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
     * @ORM\Column(name="accountName", type="string", length=100, nullable=true)
     */
    private $accountname;

    /**
     * @var string
     *
     * @ORM\Column(name="accountHolderName", type="string", length=100, nullable=false)
     */
    private $accountholdername;

    /**
     * @var string
     *
     * @ORM\Column(name="accountHolderEmail", type="string", length=100, nullable=false)
     */
    private $accountholderemail;

    /**
     * @var string
     *
     * @ORM\Column(name="accountHolderPhoneNumber", type="string", length=15, nullable=false)
     */
    private $accountholderphonenumber;

    /**
     * @var string
     *
     * @ORM\Column(name="accountPassword", type="string", length=250, nullable=false)
     */
    private $accountpassword;

    /**
     * @var string
     *
     * @ORM\Column(name="accountActiveStatus", type="string", length=10, nullable=false)
     */
    private $accountactivestatus;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="accountCreatedDate", type="datetime", nullable=false)
     */
    private $accountcreateddate;

    /**
     * @var integer
     *
     * @ORM\Column(name="accountRoleId", type="integer", nullable=false)
     */
    private $accountroleid;

    /**
     * @var string
     *
     * @ORM\Column(name="accountCreatedBy", type="string", length=100, nullable=true)
     */
    private $accountcreatedby;


}
