<?php

namespace Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblGpsdata
 *
 * @ORM\Table(name="tbl_gpsdata")
 * @ORM\Entity
 */
class TblGpsdata
{
    /**
     * @var integer
     *
     * @ORM\Column(name="col_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $colId;

    /**
     * @var string
     *
     * @ORM\Column(name="col_header", type="string", length=4, nullable=true)
     */
    private $colHeader;

    /**
     * @var integer
     *
     * @ORM\Column(name="col_vendor_id", type="smallint", nullable=true)
     */
    private $colVendorId;

    /**
     * @var string
     *
     * @ORM\Column(name="col_firm_version", type="string", length=10, nullable=true)
     */
    private $colFirmVersion;

    /**
     * @var string
     *
     * @ORM\Column(name="col_device_id", type="string", length=16, nullable=false)
     */
    private $colDeviceId;

    /**
     * @var integer
     *
     * @ORM\Column(name="col_frame_no", type="integer", nullable=true)
     */
    private $colFrameNo;

    /**
     * @var string
     *
     * @ORM\Column(name="col_packet_type", type="string", length=2, nullable=false)
     */
    private $colPacketType;

    /**
     * @var string
     *
     * @ORM\Column(name="col_packet_status", type="string", length=1, nullable=false)
     */
    private $colPacketStatus;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="col_timestamp", type="datetime", nullable=false)
     */
    private $colTimestamp;

    /**
     * @var float
     *
     * @ORM\Column(name="col_lat", type="decimal", nullable=false)
     */
    private $colLat;

    /**
     * @var string
     *
     * @ORM\Column(name="col_lat_dir", type="string", length=1, nullable=true)
     */
    private $colLatDir;

    /**
     * @var float
     *
     * @ORM\Column(name="col_lng", type="decimal", nullable=false)
     */
    private $colLng;

    /**
     * @var string
     *
     * @ORM\Column(name="col_lng_dir", type="string", length=1, nullable=true)
     */
    private $colLngDir;

    /**
     * @var string
     *
     * @ORM\Column(name="col_vehicle_reg_no", type="string", length=50, nullable=true)
     */
    private $colVehicleRegNo;

    /**
     * @var boolean
     *
     * @ORM\Column(name="col_gps_status", type="boolean", nullable=false)
     */
    private $colGpsStatus;

    /**
     * @var float
     *
     * @ORM\Column(name="col_speed", type="decimal", nullable=true)
     */
    private $colSpeed;

    /**
     * @var string
     *
     * @ORM\Column(name="col_heading", type="string", length=45, nullable=true)
     */
    private $colHeading;

    /**
     * @var boolean
     *
     * @ORM\Column(name="col_no_of_satellites", type="boolean", nullable=true)
     */
    private $colNoOfSatellites;

    /**
     * @var integer
     *
     * @ORM\Column(name="col_altitude", type="integer", nullable=true)
     */
    private $colAltitude;

    /**
     * @var string
     *
     * @ORM\Column(name="col_network_op", type="string", length=10, nullable=true)
     */
    private $colNetworkOp;

    /**
     * @var boolean
     *
     * @ORM\Column(name="col_ignition", type="boolean", nullable=false)
     */
    private $colIgnition;

    /**
     * @var boolean
     *
     * @ORM\Column(name="col_pwr_status", type="boolean", nullable=true)
     */
    private $colPwrStatus;

    /**
     * @var float
     *
     * @ORM\Column(name="col_input_volt", type="decimal", nullable=true)
     */
    private $colInputVolt;

    /**
     * @var float
     *
     * @ORM\Column(name="col_battery_volt", type="decimal", nullable=true)
     */
    private $colBatteryVolt;

    /**
     * @var boolean
     *
     * @ORM\Column(name="col_emergency_status", type="boolean", nullable=true)
     */
    private $colEmergencyStatus;

    /**
     * @var string
     *
     * @ORM\Column(name="col_tamper_alert", type="string", length=1, nullable=true)
     */
    private $colTamperAlert;

    /**
     * @var boolean
     *
     * @ORM\Column(name="col_gsm", type="boolean", nullable=true)
     */
    private $colGsm;

    /**
     * @var integer
     *
     * @ORM\Column(name="col_mcc", type="smallint", nullable=true)
     */
    private $colMcc;

    /**
     * @var boolean
     *
     * @ORM\Column(name="col_mnc", type="boolean", nullable=true)
     */
    private $colMnc;

    /**
     * @var string
     *
     * @ORM\Column(name="col_lac", type="string", length=4, nullable=true)
     */
    private $colLac;

    /**
     * @var string
     *
     * @ORM\Column(name="col_cid", type="string", length=4, nullable=true)
     */
    private $colCid;

    /**
     * @var boolean
     *
     * @ORM\Column(name="col_nmr", type="boolean", nullable=true)
     */
    private $colNmr;

    /**
     * @var boolean
     *
     * @ORM\Column(name="col_d_ip1", type="boolean", nullable=true)
     */
    private $colDIp1;

    /**
     * @var boolean
     *
     * @ORM\Column(name="col_d_ip2", type="boolean", nullable=true)
     */
    private $colDIp2;

    /**
     * @var boolean
     *
     * @ORM\Column(name="col_d_ip3", type="boolean", nullable=true)
     */
    private $colDIp3;

    /**
     * @var boolean
     *
     * @ORM\Column(name="col_d_ip4", type="boolean", nullable=true)
     */
    private $colDIp4;

    /**
     * @var boolean
     *
     * @ORM\Column(name="col_d_op1", type="boolean", nullable=true)
     */
    private $colDOp1;

    /**
     * @var boolean
     *
     * @ORM\Column(name="col_d_op2", type="boolean", nullable=true)
     */
    private $colDOp2;

    /**
     * @var boolean
     *
     * @ORM\Column(name="col_d_op3", type="boolean", nullable=true)
     */
    private $colDOp3;

    /**
     * @var boolean
     *
     * @ORM\Column(name="col_d_op4", type="boolean", nullable=true)
     */
    private $colDOp4;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="col_created_dt", type="datetime", nullable=true)
     */
    private $colCreatedDt;


    public getColId(){
        $this->colId;
    }

    public getColHeader(){
        $this->colHeader;
    }

    public getColVendorId(){
        $this->colVendorId;
    }

    public getColFirmVersion(){
        $this->colFirmVersion;
    }

}
