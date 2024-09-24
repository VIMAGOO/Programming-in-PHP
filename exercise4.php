<?php
// Program that displays a message indicating whether a person is at working age, studying age, or retirement age based on the value of a variable representing their age.
$age = 20;  // The variable that stores the person's age is set to 20

if ($age > 0) {  // Check if the age is greater than 0 (a valid age)

    if ($age < 18) {  // If the age is less than 18
        print("You are at your student era!");  // The person is considered in their student years
    } else if ($age >= 18 && $age <= 67) {  // If the age is between 18 and 67 (inclusive)
        print("You are at your worker era!");  // The person is in their working years
    } else if ($age > 67) {  // If the age is greater than 67
        print("You are at your retirement era!");  // The person is in their retirement years
    }

} else {  // If the age is less than or equal to 0
    print("Incorrect age!");  // Display an error message for an invalid age
}

?>
