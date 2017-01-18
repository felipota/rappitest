<?php

public function post_confirm(){
	$id = Input::get("service_id");
	$servicio = service::find($id)
	if($servicio != null){
		if(servicio->status !=null)
		{
			return Response::json(array("error" => "2"))
		}
		if($servicio->driver_id == null && $servicio->status_id == "1"){
			$servicio = servicio::update($id,array("driver_id" => Input::get("driver_id")),"status_id" => "2");
			Driver::update(Input::get("driver_id"),array("avaiable" => "0"));
			$driverTmp = Driver::find(Input::get("driver_id"));
			Service::update($id,array("car_id" => $driverTmp->car_id));
			$pushMessage = "Tu servicio ha sido Confirmado!";
			$servicio = Service::find($id);
			$push = Push::make();
			if($servicio->user->uuid == "")
			{
				return Response::json(array("error" => "0"))
			}
			if($servicio->user->type == "1")//iphone
			{
				$result = $push->ios($servicio->user->uuid,$pushMessage,1,"honk wav","open",array("serviceId" => $servicio->id));
			}
			else
			{
				$result = $push->android2($servicio->user->uuid,$pushMessage,1,"default","open",array("serviceId" => $servicio->id));
			}
			return Response::json(array("error" => "0"))			
		}
		else
		{
			return Response::json(array("error" => "0"))
		}
	}
	return Response::json(array("error" => "3"))
}