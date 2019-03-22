<?php

namespace Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * Devicedetails
 *
 * @ORM\Table(name="devicedetails")
 * @ORM\Entity
 */
class Devicedetails
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="deviceID", type="string", length=20, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $deviceid;

    /**
     * @var string
     *
     * @ORM\Column(name="deviceIMEI", type="string", length=20, nullable=false)
     */
    private $deviceimei;

    /**
     * @var string
     *
     * @ORM\Column(name="deviceSIMSerialNumber", type="string", length=20, nullable=false)
     */
    private $devicesimserialnumber;

    /**
     * @var string
     *
     * @ORM\Column(name="deviceSIMPhoneNumber", type="string", length=20, nullable=false)
     */
    private $devicesimphonenumber;

    /**
     * @var string
     *
     * @ORM\Column(name="deviceCreatedBy", type="string", length=100, nullable=false)
     */
    private $devicecreatedby;

    /**
     * @var string
     *
     * @ORM\Column(name="deviceCreatedFor", type="string", length=100, nullable=false)
     */
    private $devicecreatedfor;

    /**
     * @var string
     *
     * @ORM\Column(name="deviceVehiclePlateNumber", type="string", length=50, nullable=false)
     */
    private $devicevehicleplatenumber;

    /**
     * @var string
     *
     * @ORM\Column(name="deviceVehicleType", type="string", length=50, nullable=false)
     */
    private $devicevehicletype;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="deviceAddedDate", type="datetime", nullable=false)
     */
    private $deviceaddeddate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="deviceSubscriptionTillDate", type="datetime", nullable=false)
     */
    private $devicesubscriptiontilldate;

    /**
     * @var float
     *
     * @ORM\Column(name="deviceOdometerReading", type="float", nullable=true)
     */
    private $deviceodometerreading;

    /**
     * @var string
     *
     * @ORM\Column(name="deviceActiveStatus", type="string", length=10, nullable=true)
     */
    private $deviceactivestatus;

    /**
     * @var string
     *
     * @ORM\Column(name="deviceSubUser", type="string", length=100, nullable=true)
     */
    private $devicesubuser;

    /**
     * @var string
     *
     * @ORM\Column(name="deviceListener", type="string", length=2, nullable=true)
     */
    private $devicelistener;


    public function getId(){
        return $this->id;
    }
    public function setId($id){
        $this->id = $id;
        return $this;
    }

    public function getDeviceId(){
        return $this->deviceid;
    }
    public function setDeviceId($deviceId){
        $this->deviceid=$deviceId;
        return $this;
    }

    public function getDeviceimei(){
        return $this->deviceimei;
    }
    public function setDeviceimei($deviceimei){
        $this->deviceimei = $deviceimei;
        return $this;
    }

    public function getDevicesimserialnumber(){
        return $this->devicesimserialnumber;
    }
    public function setDevicesimserialnumber($devicesimserialnumber){
        $this->devicesimserialnumber= $devicesimserialnumber;
        return $this;
    }

    public function getDevicesimphonenumber(){
        return $this->devicesimphonenumber;
    }
    public function setDevicesimphonenumber($devicesimphonenumber){
        $this->devicesimphonenumber= $devicesimphonenumber;
        return $this;
    }

    public function getDevicecreatedby(){
        return $this->devicecreatedby;
    }
    public function setDevicecreatedby($devicecreatedby){
        $this->devicecreatedby = $devicecreatedby;
        return $this;
    }

    public function getDevicecreatedfor(){
        return $this->devicecreatedfor;
    }
    public function setDevicecreatedfor($devicecreatedfor){
        $this->devicecreatedfor = $devicecreatedfor;
        return $this;
    }

    public function getDevicevehicleplatenumber(){
        return $this->devicevehicleplatenumber;
    }
    public function setDevicevehicleplatenumber($devicevehicleplatenumber){
        $this->devicevehicleplatenumber = $devicevehicleplatenumber;
        return $this;
    }

    public function getDevicevehicletype(){
        return $this->devicevehicletype;
    }
    public function setDevicevehicletype($devicevehicletype){
        $this->devicevehicletype = $devicevehicletype;
        return $this;
    }

    public function getDeviceaddeddate(){
        return $this->deviceaddeddate;
    }
    public function setDeviceaddeddate($deviceaddeddate){
        $this->deviceaddeddate = $deviceaddeddate;
        return $this;
    }

    public function getDevicesubscriptiontilldate(){
        return $this->devicesubscriptiontilldate;
    }
    public function setDevicesubscriptiontilldate($devicesubscriptiontilldate){
        $this->devicesubscriptiontilldate = $devicesubscriptiontilldate;
        return $this;
    }

    public function getDeviceodometerreading(){
        return $this->deviceodometerreading;
    }
    public function setDeviceodometerreading($deviceodometerreading){
        $this->deviceodometerreading = $deviceodometerreading;
        return $this;
    }

    public function getDeviceactivestatus(){
        return $this->deviceactivestatus;
    }
    public function setDeviceactivestatus($deviceactivestatus){
        $this->deviceactivestatus = $deviceactivestatus;
        return $this;
    }

    public function getDevicesubuser(){
        return $this->devicesubuser;
    }
    public function setDevicesubuser($devicesubuser){
        $this->devicesubuser = $devicesubuser;
        return $this;
    }

    public function getDevicelistener(){
        return $this->devicelistener;
    }
    public function setDevicelistener($devicelistener){
        $this->devicelistener = $devicelistener;
        return $this;
    }

    public function toJson(){
        return ["id"=>$this->getId(),
                "deviceId"=>$this->getDeviceid(),
                "deviceImei"=>$this->getDeviceimei(),
                "deviceVehicleType"=>$this->getDevicevehicletype(),
                "deviceVehiclePlatenumber"=>$this->getDevicevehicleplatenumber(),
                "deviceCreatedFor"=>$this->getDevicecreatedby(),
                "deviceCreatedBy"=>$this->getDevicecreatedby(),
                "deviceAddedDate"=>$this->getDeviceaddeddate(),
                "deviceOdometerReading"=>$this->getDeviceodometerreading(),
                "deviceActiveStatus"=>$this->getDeviceactivestatus(),
                "deviceSIMPhoneNumber"=>$this->getDevicesimphonenumber(),
                "deviceSIMSerialNumber"=>$this->getDevicesimserialnumber(),
                "deviceListener"=>$this->getDevicelistener() 
            ];
    }
}
