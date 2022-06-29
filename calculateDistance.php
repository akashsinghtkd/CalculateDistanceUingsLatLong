function calculateMAPDistance( $latitudeFrom, $longitudeFrom, $latitudeTo, $longitudeTo ) {
    // Calculate distance between latitude and longitude
    $theta    = $longitudeFrom - $longitudeTo;
    $dist    = sin(deg2rad($latitudeFrom)) * sin(deg2rad($latitudeTo)) +  cos(deg2rad($latitudeFrom)) * cos(deg2rad($latitudeTo)) * cos(deg2rad($theta));
    $dist    = acos($dist);
    $dist    = rad2deg($dist);
    $miles    = $dist * 60 * 1.1515;
    
    // Convert unit and return distance
    $unit ='';
    $unit = strtoupper($unit);
    if($unit == "K"){
        return array(round($miles * 1.609344, 2), 'km');
    }elseif($unit == "M"){
        return array(round($miles * 1609.344, 2), 'meters');
    }else{
        return array(round($miles, 2), 'miles');
    }
}
