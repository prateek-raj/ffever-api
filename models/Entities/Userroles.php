<?php

namespace Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * Userroles
 *
 * @ORM\Table(name="userroles")
 * @ORM\Entity
 */
class Userroles
{
    /**
     * @var integer
     *
     * @ORM\Column(name="roleId", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $roleid;

    /**
     * @var string
     *
     * @ORM\Column(name="roleName", type="string", length=50, nullable=true)
     */
    private $rolename;


}
