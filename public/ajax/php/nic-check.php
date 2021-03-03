<?php

include '../../../class/include.php';

 
 
if ($_POST['action'] == 'check_nic_number') {

    $REGISTRATIONS = new Registrations(NULL);

    $result = $REGISTRATIONS->checkNicNumber($_POST["nic"]);
//    var_dump($result);
    echo json_encode($result);

    exit();
}

