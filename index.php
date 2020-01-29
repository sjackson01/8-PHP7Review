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

//getTotal('Wall', 1);

//PHP 7 try catch block vs PHP 5
try{
    //Code that may throw an Exception or Error.
}catch(Throwable $t){
    //Execute only in PHP 7, will not match in PHP 5
}catch(Exception $e){
    //Execute only in PHP 5, will not be reached in PHP 7
}

//New operators in PHP 7

/** Space Ship Operator 
 * Tests if the value on the left < value on the right.
 * Next tests if value on the left is = to the value on the right.
 * Finally tests if value on the right is < than value on the left
 */ 

 //If < returns 1 
 //If = returns 0
 //If > returns -1 
echo $compare = 2 <=> 1;

/** Null Coalesce Operator 
 * Looks explicitly for null or does not exist so it will pick up
 * an empty string.  If the variable first name is set and it 
 * is not null it will assign that value to variable name or else 
 * it will assign guest to the variable name.  
 */ 

 $name = $firstName ?? "Guest";

 //When one is found that is not null it will assign it to name
 $name = $firstName ?? $username ?? $placeholder ?? "Guest";

 /* CSPRNG */

 //Random bytes returns string of crytographically secure random bytes not integers
 $bytes = random_bytes(5); //Length in bytes
 var_dump(bin2hex($bytes)); //string(10) "385e33f741" hex representation of bytes 

 //Random number or in supply two arguments min-max
 echo random_int(1,20);//includes 1 and 20





