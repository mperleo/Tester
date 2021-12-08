<?php
    class ConnectionBD
    {
        public static function getCon(){
            $servername = "localhost";
            $database = "tester";
            $username = "root";
            $password = "";
            // Create connection
            $con = new mysqli($servername, $username, $password, $database);

            // Check connection
            if (!$con) {
                return $con = null;
            }
            else{
                return $con;
            }
        }
    }
?>