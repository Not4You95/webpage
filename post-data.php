<?php
/*
  Rui Santos
  Complete project details at https://RandomNerdTutorials.com
  
  Permission is hereby granted, free of charge, to any person obtaining a copy
  of this software and associated documentation files.
  
  The above copyright notice and this permission notice shall be included in all
  copies or substantial portions of the Software.
*/

include('config.php');
$conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME) or die('Could not connect to MySQL: ' .
    mysqli_connect_error());

// Keep this API Key value to be compatible with the ESP32 code provided in the project page. If you change this value, the ESP32 sketch needs to match
$api_key_value = "tPmAT5Ab3j7F9";

$api_key = $value1 = $value2 = $value3 = "";

//if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //$api_key = test_input($_POST["api_key"]);
   // if ($api_key == $api_key_value) {
        $value1 = test_input($_POST["value1"]);
        $value2 = test_input($_POST["value2"]);
        $value3 = test_input($_POST["value3"]);

        // Create connection
        /*  $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        else{
            echo "Coneection to database sucssed";
        }
       
        
        $sql = "INSERT INTO Sensor (value1, value2, value3)
        VALUES ('" . $value1 . "', '" . $value2 . "', '" . $value3 . "')";
        
        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } 
        else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    
        $conn->close();*/

        $query = "INSERT INTO SensorData (id,	sensor,	location,	value1	value2,	value3,	reading_time) VALUES (NULL,NULL,NULL,NULL,NULL,NULL,NULL)";

        $stmt = mysqli_prepare($dbc, $query);

        $time= date("Y-m-d H:i:s");
        $sensor = 1;
        $location = 1;


        mysqli_stmt_bind_param(
            $stmt,
            "ssssssisssd",
            $sensor,
            $location,
            $value1,
            $value2,
            $value3,
            $time
        );

        mysqli_stmt_execute($stmt);

        $affected_rows = mysqli_stmt_affected_rows($stmt);

        if ($affected_rows == 1) {

            echo 'Data Entered';

            mysqli_stmt_close($stmt);

            mysqli_close($dbc);
        } else {

            echo 'Error Occurred<br />';
            echo mysqli_error();

            mysqli_stmt_close($stmt);

            mysqli_close($dbc);
        }
    
/*} else {
    echo "No data posted with HTTP POST.";
}*/

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
