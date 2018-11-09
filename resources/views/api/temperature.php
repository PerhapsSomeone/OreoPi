<?php
/**
 * Created by PhpStorm.
 * User: marc
 * Date: 09.11.18
 * Time: 16:59
 */

exec("python3 ".base_path()."/sensescripts/temperature.py", $temperature);

if($temperature == []) {
    $arr = array(
        "temperature" => "",
        "success" => false
    );
} else {
    $arr = array(
        "temperature" => $temperature[0],
        "success" => true
    );
}

echo json_encode($arr);