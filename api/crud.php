<?php
    include_once "../library/base.php";
    $DB = new DB($_POST['table']);
    switch($_POST['act']){
        case 'r':
            echo json_encode($DB->all($_POST['data']));

    }
    // print_r($_POST['data']['id'])
?>