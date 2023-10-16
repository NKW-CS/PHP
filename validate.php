<?php
class Validate{
    public function checkEmpty($data, $fields){
    $msg =  null;
    foreach( $fields as $value){
        if(empty($data[$value])){
            $msg .="<p>$value field empty</p>";
        }
    }
    return $msg;
}
//check the room numbers - if exceeding the ones in hotel
public function validRoomNumber($roomnum){
    if(preg_match("/^\d{1,3}$/", $roomnum)){
        return true;
    }
    return false;
}
//check to see if number of guests exceeds in a room?
public function validguest($totalguest){
    if(preg_match("/^[1-8]+$/", $totalguest)){
        return true;
    }
    return false;
}
public function validTime($time){
    if(pre_match("/^[0-1][0-9]|2[0-3]):[0-5][0-9]:[0-5][0-9]$/", $time)){
        return true;
}
return false;
}
?>