<?php 

/* PHP 7 Review */ 

//Non-Scalar type declaration Student object and array
function enroll(Student $student, array $classes){
    foreach($classes as $class){
        echo "Enrolling " . $student->name . " in " . $school->name;
    }
}

//Scalar typle declaration float
function getTotal(float $a, float $b){
    return $a + $b;
}