<?php

   
// Function to get Grade Point from marks
function gradeCalculator($marks) {
    $grade=0;
    if ($marks >= 80 && $marks <= 100) {
        $grade=4.00;
    } elseif ($marks >= 75 && $marks <= 79) {
        $grade=3.75;
    } elseif ($marks >= 70 && $marks <= 74) {
        $grade=3.50;
    } elseif ($marks >= 65 && $marks <= 69) {
        $grade=3.25;
    } elseif ($marks >= 60 && $marks <= 64) {
        $grade=3.00;
    } elseif ($marks >= 55 && $marks <= 59) {
        $grade=2.75;
    } elseif ($marks >= 50 && $marks <= 54) {
        $grade=2.50;
    }else {
        $grade=0;
    }
    return $grade;
}
    $myname=  $_POST['myname'];
     $marks=  $_POST['mark'];

    //  var_dump($marks);
    //  print_r($marks);
    // $mark=70;
    $totalGpa = 0;
    $courseCount = count($marks);

    foreach ($marks as $course => $mark) {
        $grade = gradeCalculator($mark);
        $totalGpa += $grade;
    }

// GPA calculation
    $gpa = $totalGpa/ $courseCount;

    echo $myname.", Your Grade point is: ".$gpa;


?>
