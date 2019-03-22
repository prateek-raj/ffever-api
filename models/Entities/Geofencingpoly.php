<?php


namespace Entities;
use Doctrine\ORM\Mapping as ORM;

/**
 * Geofencingpoly
 *
 * @ORM\Table(name="geofencingpoly")
 * @ORM\Entity
 */
class Geofencingpoly
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
     * @ORM\Column(name="accountName", type="string", length=100, nullable=false)
     */
    private $accountname;

    /**
     * @var string
     *
     * @ORM\Column(name="geofencingName", type="string", length=100, nullable=false)
     */
    private $geofencingname;

    /**
     * @var string
     *
     * @ORM\Column(name="geofencingLatLngArray", type="string", length=300, nullable=false)
     */
    private $geofencinglatlngarray;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="geofenceCreatedDate", type="datetime", nullable=true)
     */
    private $geofencecreateddate;


}
