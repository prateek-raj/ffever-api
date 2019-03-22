<?php

namespace Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * Driverdetails
 *
 * @ORM\Table(name="driverdetails")
 * @ORM\Entity
 */
class Driverdetails
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
     * @ORM\Column(name="driverName", type="string", length=80, nullable=false)
     */
    private $drivername;

    /**
     * @var string
     *
     * @ORM\Column(name="driverNumber", type="string", length=15, nullable=false)
     */
    private $drivernumber;

    /**
     * @var string
     *
     * @ORM\Column(name="driverCreatedBy", type="string", length=30, nullable=false)
     */
    private $drivercreatedby;

    /**
     * @var string
     *
     * @ORM\Column(name="driverAllocDeviceId", type="string", length=20, nullable=true)
     */
    private $driverallocdeviceid;

    /**
     * @var string
     *
     * @ORM\Column(name="driverAllocVehiclePlateNumber", type="string", length=30, nullable=true)
     */
    private $driverallocvehicleplatenumber;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="driverCreatedDate", type="datetime", nullable=true)
     */
    private $drivercreateddate;


}
