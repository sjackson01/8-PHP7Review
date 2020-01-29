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

//PHP 7 try catch block vs PHP 5
try{
    //Code that may throw an Exception or Error.
}catch(Throwable $t){
    //Execute only in PHP 7, will not match in PHP 5
}catch(Exception $e){
    //Execute only in PHP 5, will not be reaced in PHP 7
}