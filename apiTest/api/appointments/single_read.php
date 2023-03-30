<?php

    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");
    header("Access-Control-Allow-Methods: POST");
    header("Access-Control-Max-Age: 3600");
    header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-Width");
    include_once '../../config/database.php';
    include_once '../../class/appointments.php';

    $database = new Database();
    $db = $database->getConnection();
    $item = new Appointments($db);
    $item->Appointment_id = isset($_GET['Appointment_id']) ? $_GET['Appointment_id'] : die();
    $item->getSingleAppointment();
    if ($item->Appointment_date != null) {
        // create array
        $emp_arr = array(
            "Appointment_id" => $item->Appointment_id,
            "Appointment_date" => $item->Appointment_date,
            "Appointment_time" => $item->Appointment_time,
            "client_id" => $item->client_id,
            
        );

        http_response_code(200);
        echo json_encode($emp_arr);
    }
    else {
        http_response_code(404);
        echo json_encode("Employee not found");
    }
?>