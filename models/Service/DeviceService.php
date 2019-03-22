<?php 

// namespace Service;

class DeviceService{

	function __construct($em){
		$this->em = $em;
	}

	public function getDevicedetails($device_id){
		$query = $this->em->getRepository('Entities\Devicedetails')->findby(array('deviceid' =>$device_id));
		return $query;
	}

	public function getDeviceList(){
		$query = $this->em->getRepository('Entities\Devicedetails')->findAll();
		$data = [];
		foreach($query as $key => $value) {
			array_push($data, $value->toJson());
		}
		return $data;
	}

	public function getDeviceStatus($device_id){
		$query = $this->em->getRepository('Entities\TblGpsdata')->findby(["deviceid"=>$device_id]);
	}
}