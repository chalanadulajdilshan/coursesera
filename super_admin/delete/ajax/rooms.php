<?php

include '../../../class/include.php';

if ($_POST['option'] == 'delete') {

    $ROOM = new Room($_POST['id']);

 
    $result = $ROOM->delete();


    if ($result) {

        $data = array("status" => TRUE);
        header('Content-type: application/json');
        echo json_encode($data);
    }
}