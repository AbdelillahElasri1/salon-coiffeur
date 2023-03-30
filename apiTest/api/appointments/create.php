<?php
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");
    header("Access-Control-Allow-Methods: POST");
    header("Access-Control-Max-Age: 3600");
    header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
    include_once '../../config/database.php';
    include_once '../../class/appointments.php';
    $database = new Database();
    $db = $database->getConnection();
    $item = new Appointments($db);
    $data = json_decode(file_get_contents("php://input"));
    $item->Appointment_time = $data->Appointment_time;
    $item->Appointment_date = $data->Appointment_date;
    $item->client_id = $data->client_id;

    if($item->createAppointment()){
        echo 'Appointment created successfully.';
    } else {
        echo 'Appointment could not be created';
    }
?>