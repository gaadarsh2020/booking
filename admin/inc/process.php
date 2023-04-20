<?php

require_once 'connect.php';

function sanitize($data){
    global $conn;
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);

    $data = mysqli_real_escape_string($conn, $data);
    return $data;
}

//process code
if( isset( $_POST['stadiumSubmit'] ) ){

    global $conn;

    $sname = sanitize( $_POST['sname'] );
    $vipseat = sanitize( $_POST['vipseat'] );
    $goldseat = sanitize( $_POST['goldseat'] );
    $platinumseat = sanitize( $_POST['platinumseat'] );
    $sdescription = sanitize( $_POST['sdescription'] );

    $sql = "INSERT INTO stadium (`sName`, `a`, `b`, `c`, `description`)
        VALUES ( '$sname', '$vipseat', '$goldseat', '$platinumseat', '$sdescription' )";
    
    if (mysqli_query($conn, $sql)) {
        header('Location: http://localhost/booking/admin?page=stadium');
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
      
    mysqli_close($conn);
}