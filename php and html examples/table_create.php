<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

include 'connection.php';

$db_name = 'lorenzw1';

$con = get_db_connection($db_name);

// sql to create table
$table1 = "CREATE TABLE User (
    UserID INT NOT NULL AUTO_INCREMENT, 
    username VARCHAR(50) NOT NULL ,
    pass VARCHAR(50) NOT NULL 
    firstname VARCHAR(255) NOT NULL , 
    lastname VARCHAR(255) NOT NULL ,
    phone TEXT NOT NULL , 
    email VARCHAR(255) NOT NULL , 
    PRIMARY KEY (UserID, username) 
)";

$table2 = "CREATE TABLE Payments (
    PaymentID INT NOT NULL AUTO_INCREMENT, 
    username VARCHAR(50) NOT NULL , 
    paymentype VARCHAR(255) NOT NULL , 
    paymentamount VARCHAR(255) NOT NULL ,
    paymentinfo VARCHAR(255) NOT NULL , 
    PRIMARY KEY (PaymentID, username)
)";