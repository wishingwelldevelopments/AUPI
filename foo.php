<?php

$alert_array=array();
$newdata="select Location, round(AVG(`Data-Rating`),0) from `Air_Quality_Data` group by Location";
$useralert"select * from user_alerts";

while(){
	//Location = central-queensland-emerald avg = 3
	array_push($newdata, "central-queensland-emerald", "3");
}

while(){
	//Alert-1-StationName = Cenatrla-queensland-emerald alert-1-stationrating = 3

	if($alert_array['$row['Alert-1-StationName']'] == '$[row['Alert-1-StationRating']]'){
		send_email($row['email']);
	}else if(alert-2-stationName == ){
		
	}
}

?>
