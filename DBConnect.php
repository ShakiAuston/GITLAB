<?php

$servername = "localhost";
$username = "mahadev";
$password = "mahadev";
$dbname = "calendarapp";
$conn;

function openDB() {
    global $servername, $username, $password, $dbname, $conn;

    
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error){
        return $conn->connect_error;
    }
    else {
        return "Connected";
    }
}

function closeDB() {
    global $conn;
    return;
}

function modifyDB($sql) {
    global $conn;
    $message = openDB();
    if ($message == "Connected") {
        if ($conn->query($sql) === TRUE){
            $message = "Update Successful";                        
        }
        else{
            $message = $conn->error;
            closeDB();
        }
    }
    return $message . "<br>";
}

function queryDB($sql) {
    global $conn;
    $message = openDB();
    if ($message == "Connected") {
        $result = $conn->query($sql);
        if (gettype($result) == "object"){
            $message = $result;
        }
        else {
            $message = $conn->error . "<br>Your SQL:" . $sql;
        closeDB();
        }
    }
    return $message;
}
