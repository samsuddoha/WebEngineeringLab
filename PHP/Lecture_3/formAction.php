<?php

    include "dbconnect.php";

    $name=$_POST['myname'];
    $roll=$_POST['roll'];
    $phone=$_POST['phone_no'];
    $session=$_POST['session'];
    $reg_no=$_POST['reg_no'];

    $sql="INSERT INTO students(id, name, roll, phone, session, regi_no)
    VALUES(NUll, '$name', '$roll', '$phone', '$session', '$reg_no')";

    $r=$con->query($sql);
    if($r)
     echo "data inserted succesfully";
    else
        echo "data not inserted";
    
    $con->close();
?>