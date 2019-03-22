<?php


namespace Entities;
use Doctrine\ORM\Mapping as ORM;

/**
 * TblCronsstatus
 *
 * @ORM\Table(name="tbl_cronsstatus")
 * @ORM\Entity
 */
class TblCronsstatus
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
     * @ORM\Column(name="col_cronName", type="string", length=100, nullable=true)
     */
    private $colCronname;

    /**
     * @var string
     *
     * @ORM\Column(name="col_cronStatus", type="string", length=100, nullable=true)
     */
    private $colCronstatus;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="col_createdDate", type="datetime", nullable=true)
     */
    private $colCreateddate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="col_modifyDate", type="datetime", nullable=true)
     */
    private $colModifydate;


}
