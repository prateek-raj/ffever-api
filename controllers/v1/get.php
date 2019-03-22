<?php 


use Doctrine\ORM\Mapping\Entity;

require(APPPATH."models/Service/DeviceService.php");

class Get extends CI_Controller {

	function __construct(){
		parent::__construct();
	}

	function device($for=null){
		if($for == 'all' || ((!empty($this->input->get()) && $for =="detail") || ($this->input->get("id")!=null && ($for=="status" || $for =="status" )))){
			$deviceService = new DeviceService($this->doctrine->em);
			switch ($for) {
				case 'status':
				case 'detail':
						$device_id=$this->input->get("id");
						if(isset($device_id) && strlen($device_id)==15){
							if($for=="detail")
								$final_data =  $deviceService->getDevicedetails($device_id);
							else
								$final_data =  $deviceService->getDeviceStatus($device_id);
							if(sizeof($final_data)>0)
								$final_data = ["status"=>["code"=>1,"message"=>[]],"data"=>[$final_data[0]->toJson()]];	
							else
								$final_data = ["status"=>["code"=>1,"message"=>[]],"data"=>["Device id doesn't exist!"]];	
						}else{
							$final_data = ["status"=>["code"=>0,"message"=>["Device id length is not valid!"]],"data"=>[]];	
						}
					break;
				case 'all':
						$final_data = ["status"=>["code"=>1,"message"=>[]],"data"=>$deviceService->getDeviceList()];	
					break;
				default:
						$final_data = ["status"=>["code"=>0,"message"=>["Invalid Request"]],"data"=>[]];	
					break;
			}	
		}else{
			$final_data =["status"=>["code"=>0,"message"=>["Invalid Request"]],"data" =>[]];
		}
		echo json_encode($final_data);exit();
	}
}