<?php 
/* PHP 7 Review */ 

declare(strict_types=1);

//Non-Scalar type declaration Student object and array
function enroll(Student $student, array $classes){
    foreach($classes as $class){
        echo "Enrolling " . $student->name . " in " . $school->name;
    }
}

//Scalar typle declaration float and return type declaration float
function getTotal(float $a, float $b) : float {
    return $a + $b;
}

getTotal('Wall', 1);