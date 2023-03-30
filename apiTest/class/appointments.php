<?php 




    class Appointments {
        // connection
        private $conn;
        // table 
        //table 
        private $db_table = "Appointments";

        // colums

        public $Appointment_id;
        public $client_id;
        public $Appointment_time;
        public $Appointment_date;

        // DB connection
        public function __construct($db) {
            $this->conn = $db;
        }
        // Get All
        public function getAppointments() {
            $sqlQuery = "SELECT *  FROM ". $this->db_table;
            $stmt = $this->conn->prepare($sqlQuery);
            $stmt->execute();
            return $stmt;
        }

        // create 
        public function createAppointment(){
            $sqlQuery = "
            INSERT INTO `appointments` 
            (Appointment_id, Appointment_time, Appointment_date, client_id)
             VALUES 
             (:Appointment_id, :Appointment_time, :Appointment_date, :client_id);
                        
                        ";
            $stmt = $this->conn->prepare($sqlQuery);

            // sanitize 
            $this->Appointment_time=htmlspecialchars(strip_tags($this->Appointment_time));
            $this->Appointment_date=htmlspecialchars(strip_tags($this->Appointment_date));
            $this->client_id=htmlspecialchars(strip_tags($this->client_id));
           
            
            
            // bind data
            $stmt->bindParam(":Appointment_time", $this->Appointment_time);
            $stmt->bindParam(":Appointment_date", $this->Appointment_date);
            $stmt->bindParam(":client_id", $this->client_id);
            

            if($stmt->execute()){
                return true;
            }
            return false;   
        }

         // Read single
         public function getSingleAppointment(){
            $sqlQuery = "SELECT
                            *
                        FROM
                            ". $this->db_table ."
                            WHERE 
                            Appointment_id = ?
                            LIMIT 0,1";
                            
            $stmt = $this->conn->prepare($sqlQuery);
            $stmt->bindParam(1, $this->Appointment_id);
            $stmt->execute();
            $dataRow = $stmt->fetch(PDO::FETCH_ASSOC);

            $this->Appointment_date = $dataRow['Appointment_date'];
            $this->Appointment_time = $dataRow['Appointment_time'];
            $this->client_id = $dataRow['client_id'];
            $this->Appointment_id = $dataRow['Appointment_id'];
            
        }
        // DELETE
        public function deleteAppointment(){
            $sqlQuery = "DELETE  FROM " . $this->db_table . " WHERE Appointment_id = ?";
            $stmt = $this->conn->prepare($sqlQuery);

            $this->Appointment_id = htmlspecialchars(strip_tags($sqlQuery));

            $stmt->bindParam(1, $this->Appointment_id);

            if($stmt->execute()){
                return true;
            }
            return false;
        }
               // UPDATE 
               public function updateAppointment(){
                $sqlQuery = "UPDATE
                                ". $this->db_table ."
                            SET
                                Appointment_date = :Appointment_date, 
                                Appointment_time = :Appointment_time, 
                                 
                                
                            WHERE 
                                Appointment_id = :Appointment_id,
                               
                                ";
    
                $stmt = $this->conn->prepare($sqlQuery);
    
                $this->Appointment_date=htmlspecialchars(strip_tags($this->Appointment_date));
                $this->Appointment_id=htmlspecialchars(strip_tags($this->Appointment_id));
                $this->Appointment_time=htmlspecialchars(strip_tags($this->Appointment_time));
                
               
    
                // bind data
                $stmt->bindParam(":Appointment_time", $this->Appointment_time);
                $stmt->bindParam(":Appointment_date", $this->Appointment_date);
                $stmt->bindParam(":Appointment_id", $this->Appointment_id);
               
              
    
                if ($stmt->execute()) {
                    return true;
                }
                return false;
            }


    }