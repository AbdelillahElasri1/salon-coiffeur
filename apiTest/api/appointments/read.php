<?php

    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");

    include_once '../../config/database.php';
    include_once '../../class/appointments.php';
    $database = new Database();
    $db = $database->getConnection();
    $items = new Appointments($db);
    $stmt = $items->getAppointments();
    $itemCount = $stmt->rowCount();

    echo json_encode($itemCount);
    if ($itemCount >0) {
        $employeeArr = array();
        $employeeArr["body"] = array();
        $employeeArr["itemCcount"] = $itemCount;
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            extract($row);
            $e = array(
                'Appointment_id' => $Appointment_id,
                'Appointment_time' => $Appointment_time,
                'Appointment_date' => $Appointment_date,
                'client_id' => $client_id,
                
            );
            array_push($employeeArr["body"], $e);
        }
        echo json_encode($employeeArr);
    }
    else {
        http_response_code(404);
        echo json_encode(
            array("message" => "NO record found.")
        );
    }
?>